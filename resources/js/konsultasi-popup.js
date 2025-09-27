class KonsultasiPopup {
    constructor() {
        this.init();
    }

    init() {
        this.checkSuccessMessage();
        this.handleFormSubmission();
    }

    checkSuccessMessage() {
        const node = document.getElementById('popup-data');
        if (!node) return;
        setTimeout(() => this.showPopup(), 400);
    }

    handleFormSubmission() {
        const form = document.querySelector('form[action="/contact"]');
        if (!form) return;
        form.addEventListener('submit', () => this.showLoadingState(form));
    }

    showLoadingState(form) {
        const btn = form.querySelector('button[type="submit"]');
        if (!btn) return;
        btn.dataset.original = btn.innerHTML;
        btn.innerHTML = '<span class="inline-block animate-spin mr-2">⏳</span>Mengirim...';
        btn.disabled = true;
        btn.classList.add('opacity-75', 'cursor-not-allowed');
    }

    showPopup() {
        const dataNode = document.getElementById('popup-data');
        const nama = dataNode?.dataset?.nama || 'Anda';
        const kategori = dataNode?.dataset?.kategori || 'konsultasi';
        const timestamp = dataNode?.dataset?.timestamp || '';

        const html = `
        <div id="konsultasi-popup" class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 p-4">
          <div id="popup-content" class="bg-white rounded-2xl shadow-2xl max-w-md w-full mx-4 transform transition-all duration-300 scale-95 opacity-0">
            <div class="text-center p-8">
              <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-green-100 mb-6">
                <svg class="h-8 w-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
              </div>
              <h3 class="text-2xl font-bold text-gray-900 mb-4">Konsultasi Terkirim!</h3>
              <p class="text-gray-600 mb-6">Terima kasih <strong>${nama}</strong>! Konsultasi <strong>${kategori}</strong> Anda telah kami terima.</p>
              ${timestamp ? `<div class="bg-gray-50 border border-gray-200 rounded-lg p-3 mb-4 text-sm text-gray-700">Dikirim pada: ${timestamp}</div>` : ''}
              <div class="space-y-3">
                <button id="popup-close" class="w-full bg-blue-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-blue-700 transition">Tutup</button>
                <a href="https://wa.me/6282236234227?text=Halo%2C%20saya%20${encodeURIComponent(nama)}%20sudah%20mengirim%20konsultasi" target="_blank" class="w-full bg-green-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-green-700 transition inline-block text-center">Chat WhatsApp</a>
              </div>
            </div>
          </div>
        </div>`;

        document.body.insertAdjacentHTML('beforeend', html);
        setTimeout(() => {
            const c = document.getElementById('popup-content');
            if (c) {
                c.classList.remove('scale-95', 'opacity-0');
                c.classList.add('scale-100', 'opacity-100');
            }
        }, 60);

        document.getElementById('popup-close')?.addEventListener('click', () => this.closePopup());
        document.getElementById('konsultasi-popup')?.addEventListener('click', (e) => {
            if (e.target?.id === 'konsultasi-popup') this.closePopup();
        });
        document.addEventListener('keydown', (e) => { if (e.key === 'Escape') this.closePopup(); });
    }

    closePopup() {
        const root = document.getElementById('konsultasi-popup');
        const c = document.getElementById('popup-content');
        if (c) {
            c.classList.add('scale-95', 'opacity-0');
            c.classList.remove('scale-100', 'opacity-100');
        }
        setTimeout(() => root?.remove(), 240);
    }
}

document.addEventListener('DOMContentLoaded', () => {
    window.konsultasiPopup = new KonsultasiPopup();
});


