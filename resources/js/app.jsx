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
        createRoot(marqueeTop).render(<MarqueeRibbon items={["Website Development", "Mobile App Development", "Custom Systems", "UI/UX Design"]} />);
    }
    const marqueeBottom = document.getElementById('rb-bottom');
    if (marqueeBottom) {
        createRoot(marqueeBottom).render(<MarqueeRibbon items={["Website Development", "Mobile App Development", "Custom Systems", "UI/UX Design"]} />);
    }
    const cta = document.getElementById('magnet-cta');
    if (cta) {
        createRoot(cta).render(<MagneticButton>Diskusikan Proyek</MagneticButton>);
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
                { opacity: 0, transform: 'translateY(1em) scale(0.98)', filter: 'blur(6px)' },
                { opacity: 1, transform: 'translateY(0) scale(1)', filter: 'blur(0px)' },
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
    initRevealText();
    initRevealCards();
    initMobileMenu();
}

if (document.readyState === 'complete' || document.readyState === 'interactive') {
    requestAnimationFrame(boot);
} else {
    document.addEventListener('DOMContentLoaded', boot);
    window.addEventListener('load', boot);
}

// Simple reveal animation (non-split) for project section
function initRevealText() {
    const targets = document.querySelectorAll('[data-reveal]');
    const io = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            const el = entry.target;
            io.unobserve(el);
            if (el.getAttribute('data-reveal-done')) return;
            el.setAttribute('data-reveal-done', 'true');
            const delay = Number(el.getAttribute('data-reveal-delay') || 0);
            el.animate([
                { opacity: 0, transform: 'translateY(20px) scale(0.98)' },
                { opacity: 1, transform: 'translateY(0) scale(1)' }
            ], { duration: 2000, delay, easing: 'cubic-bezier(0.2,0.6,0.2,1)', fill: 'forwards' });
        });
    }, { threshold: 0.1 });
    targets.forEach(t => io.observe(t));
}

// Reveal animation for project cards with stagger
function initRevealCards() {
    const cards = document.querySelectorAll('[data-card]');
    const io = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            const el = entry.target;
            io.unobserve(el);
            if (el.getAttribute('data-card-done')) return;
            el.setAttribute('data-card-done', 'true');
            const delay = Number(el.getAttribute('data-card-delay') || 0);
            el.animate([
                { opacity: 0, transform: 'translateY(24px) scale(0.98)' },
                { opacity: 1, transform: 'translateY(0) scale(1)' }
            ], { duration: 1500, delay, easing: 'cubic-bezier(0.2,0.6,0.2,1)', fill: 'forwards' });
        });
    }, { threshold: 0.15 });
    cards.forEach((c, idx) => {
        c.setAttribute('data-card-delay', String(idx * 120));
        io.observe(c);
    });
}

// Mobile menu toggle
function initMobileMenu() {
    const toggles = document.querySelectorAll('[data-menu-toggle]');
    toggles.forEach((btn) => {
        const targetSel = btn.getAttribute('data-menu-target');
        const panel = document.querySelector(targetSel);
        if (!panel) return;
        const closeLinks = panel.querySelectorAll('[data-menu-close]');
        const open = () => {
            panel.classList.remove('hidden');
            panel.style.maxHeight = panel.scrollHeight + 'px';
            btn.setAttribute('aria-expanded', 'true');
        };
        const close = () => {
            panel.style.maxHeight = '0px';
            btn.setAttribute('aria-expanded', 'false');
            // hide after transition
            setTimeout(() => panel.classList.add('hidden'), 200);
        };
        let isOpen = false;
        btn.addEventListener('click', () => {
            isOpen ? close() : open();
            isOpen = !isOpen;
        });
        closeLinks.forEach((a) => a.addEventListener('click', () => {
            if (isOpen) {
                close();
                isOpen = false;
            }
        }));
    });
}


