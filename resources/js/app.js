import './bootstrap';

// Mobile nav toggle and active link highlighting
document.addEventListener('DOMContentLoaded', () => {
  const toggle = document.getElementById('nav-toggle');
  const mobile = document.getElementById('nav-mobile');
  const links = document.querySelectorAll('.nav-link');

  if (toggle && mobile) {
    toggle.addEventListener('click', () => {
      const isHidden = mobile.classList.contains('hidden');
      mobile.classList.toggle('hidden', !isHidden);
    });
  }

  const setActive = () => {
    const scrollY = window.scrollY;
    const sections = ['home', 'about', 'services', 'projects', 'contact']
      .map(id => document.getElementById(id))
      .filter(Boolean);
    let current = null;
    for (const section of sections) {
      const rect = section.getBoundingClientRect();
      const top = rect.top + window.scrollY - 120;
      if (scrollY >= top) current = section.id;
    }
    links.forEach(link => {
      const href = link.getAttribute('href') || '';
      const target = href.startsWith('#') ? href.slice(1) : null;
      if (target && target === current) {
        link.classList.add('text-white');
        link.classList.remove('text-white/80');
      } else {
        link.classList.remove('text-white');
      }
    });
  };

  window.addEventListener('scroll', setActive, { passive: true });
  setActive();
});
// Mount all React/JSX bits and split-text from app.jsx
import './app.jsx';
import './konsultasi-popup.js';
