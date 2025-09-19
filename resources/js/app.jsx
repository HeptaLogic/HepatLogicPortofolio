import React from 'react';
import { createRoot } from 'react-dom/client';

function MarqueeRibbon({ items = [] }) {
    return (
        <div className="overflow-hidden">
            <div className="flex gap-8 whitespace-nowrap animate-[marquee_18s_linear_infinite]">
                {[...items, ...items].map((text, i) => (
                    <span key={i} className="inline-flex items-center gap-3 text-white/95 text-sm px-4 py-3">
                        <span className="font-medium">{text}</span>
                        <span>✶</span>
                    </span>
                ))}
            </div>
        </div>
    );
}

function MagneticButton({ children }) {
    const ref = React.useRef(null);
    React.useEffect(() => {
        const el = ref.current;
        if (!el) return;
        const onMove = (e) => {
            const rect = el.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            el.style.transform = `translate(${x * 0.08}px, ${y * 0.08}px)`;
        };
        const onLeave = () => {
            el.style.transform = 'translate(0,0)';
        };
        el.addEventListener('mousemove', onMove);
        el.addEventListener('mouseleave', onLeave);
        return () => {
            el.removeEventListener('mousemove', onMove);
            el.removeEventListener('mouseleave', onLeave);
        };
    }, []);
    return (
        <button ref={ref} className="transition-transform will-change-transform shrink-0 h-10 px-5 rounded-full bg-[#3c6cf3] hover:bg-[#305ee6] text-white text-sm grid place-items-center shadow-md">
            {children}
        </button>
    );
}

function mountReactBits() {
    const marqueeTop = document.getElementById('rb-top');
    if (marqueeTop) {
        createRoot(marqueeTop).render(<MarqueeRibbon items={["Website Development", "UX/UI Design", "Graphics Design"]} />);
    }
    const marqueeBottom = document.getElementById('rb-bottom');
    if (marqueeBottom) {
        createRoot(marqueeBottom).render(<MarqueeRibbon items={["Website Development", "UX/UI Design", "Graphics Design"]} />);
    }
    const cta = document.getElementById('magnet-cta');
    if (cta) {
        createRoot(cta).render(<MagneticButton>Get A Quote</MagneticButton>);
    }
}

function initSplitText() {
    const targets = document.querySelectorAll('[data-split]');

    function animateChar(span, i) {
        span.style.display = 'inline-block';
        span.style.willChange = 'transform, opacity';
        span.style.opacity = '0';
        span.style.transform = 'translateY(1em)';
        span.animate(
            [
                { opacity: 0, transform: 'translateY(1em)' },
                { opacity: 1, transform: 'translateY(0)' },
            ],
            { duration: 600, delay: i * 35, easing: 'cubic-bezier(0.2,0.6,0.2,1)', fill: 'forwards' }
        );
    }

    function splitNode(node, startIndex = 0) {
        let index = startIndex;
        const walker = document.createTreeWalker(node, NodeFilter.SHOW_TEXT, null);
        const textNodes = [];
        while (walker.nextNode()) textNodes.push(walker.currentNode);
        textNodes.forEach((textNode) => {
            const text = textNode.nodeValue;
            const frag = document.createDocumentFragment();
            [...text].forEach((ch) => {
                const span = document.createElement('span');
                span.textContent = ch;
                frag.appendChild(span);
                animateChar(span, index++);
            });
            textNode.parentNode.replaceChild(frag, textNode);
        });
    }

    const io = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            const el = entry.target;
            io.unobserve(el);
            if (el.getAttribute('data-split-done')) return;
            el.setAttribute('data-split-done', 'true');
            splitNode(el, 0);
        });
    }, { threshold: 0 });

    targets.forEach((t) => io.observe(t));
}

function boot() {
    mountReactBits();
    // run twice to be extra-safe after layout
    initSplitText();
    setTimeout(initSplitText, 200);
}

if (document.readyState === 'complete' || document.readyState === 'interactive') {
    requestAnimationFrame(boot);
} else {
    document.addEventListener('DOMContentLoaded', boot);
    window.addEventListener('load', boot);
}


