/**
 * Vee'n Dee Corner - Main JavaScript
 */

document.addEventListener('DOMContentLoaded', function () {
  // 1. Mobile Menu Toggle
  const mobileToggle = document.getElementById('mobileMenuToggle');
  const mobileMenu = document.getElementById('mobileMenu');
  
  if (mobileToggle && mobileMenu) {
    mobileToggle.addEventListener('click', function () {
      mobileMenu.classList.toggle('hidden');
    });
  }

  // 2. Menu Page Category Filtering
  const filterBtns = document.querySelectorAll('.filter-btn');
  const menuCards = document.querySelectorAll('.menu-item-card');

  if (filterBtns.length > 0 && menuCards.length > 0) {
    filterBtns.forEach(btn => {
      btn.addEventListener('click', function () {
        const category = this.getAttribute('data-category');

        // Update active button state
        filterBtns.forEach(b => {
          b.classList.remove('bg-cream', 'text-charcoal', 'border-white');
          b.classList.add('border-white/20', 'text-white/70');
        });
        this.classList.add('bg-cream', 'text-charcoal', 'border-white');
        this.classList.remove('border-white/20', 'text-white/70');

        // Filter cards
        menuCards.forEach(card => {
          const itemCat = card.getAttribute('data-category');
          if (category === 'all' || itemCat.toLowerCase() === category.toLowerCase()) {
            card.style.display = 'flex';
          } else {
            card.style.display = 'none';
          }
        });
      });
    });
  }

  // 3. Menu Search Bar
  const searchInput = document.getElementById('menuSearchInput');
  if (searchInput && menuCards.length > 0) {
    searchInput.addEventListener('input', function () {
      const q = this.value.toLowerCase().trim();
      menuCards.forEach(card => {
        const title = card.querySelector('.menu-item-title')?.textContent.toLowerCase() || '';
        const desc = card.querySelector('.menu-item-desc')?.textContent.toLowerCase() || '';
        const cat = card.getAttribute('data-category')?.toLowerCase() || '';

        if (title.includes(q) || desc.includes(q) || cat.includes(q)) {
          card.style.display = 'flex';
        } else {
          card.style.display = 'none';
        }
      });
    });
  }

  // 4. Contact / Feedback Form Submission
  const feedbackForm = document.getElementById('feedbackForm');
  const feedbackAlert = document.getElementById('feedbackAlert');
  const submitBtn = document.getElementById('feedbackSubmitBtn');

  if (feedbackForm) {
    feedbackForm.addEventListener('submit', function (e) {
      e.preventDefault();

      const nama = document.getElementById('formNama').value.trim();
      const subjek = document.getElementById('formSubjek').value.trim();
      const pesan = document.getElementById('formPesan').value.trim();

      if (!nama || !subjek || !pesan) {
        showAlert('Mohon isi semua bidang formulir.', 'error');
        return;
      }

      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span>Mengirimkan...</span>';
      }

      const formData = new FormData(feedbackForm);

      fetch('submit-feedback.php', {
        method: 'POST',
        body: formData
      })
      .then(res => res.json())
      .then(data => {
        if (data.status === 'success') {
          showAlert(data.message || 'Terima kasih! Saran Anda telah kami terima.', 'success');
          feedbackForm.reset();
        } else {
          showAlert(data.message || 'Terjadi kesalahan saat mengirim saran.', 'error');
        }
      })
      .catch(err => {
        showAlert('Gagal terhubung ke server. Saran Anda tetap bisa dikirimkan langsung via WhatsApp.', 'error');
      })
      .finally(() => {
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.innerHTML = 'KIRIM SARAN <svg class="w-4 h-4 ml-1 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>';
        }
      });
    });
  }

  function showAlert(message, type) {
    if (!feedbackAlert) return;
    feedbackAlert.classList.remove('hidden', 'bg-red-900/80', 'bg-green-900/80', 'border-red-400', 'border-green-400');
    
    if (type === 'success') {
      feedbackAlert.classList.add('bg-stone-800', 'border-emerald-500', 'text-emerald-300');
      feedbackAlert.innerHTML = `
        <div class="flex items-center gap-2">
          <svg class="w-5 h-5 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
          <span>${message}</span>
        </div>`;
    } else {
      feedbackAlert.classList.add('bg-stone-800', 'border-rose-500', 'text-rose-300');
      feedbackAlert.innerHTML = `
        <div class="flex items-center gap-2">
          <svg class="w-5 h-5 text-rose-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
          <span>${message}</span>
        </div>`;
    }
    feedbackAlert.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
  }

  // 5. Lightbox for Gallery
  const lightboxModal = document.getElementById('lightboxModal');
  const lightboxImg = document.getElementById('lightboxImg');
  const lightboxClose = document.getElementById('lightboxClose');
  const galleryItems = document.querySelectorAll('.gallery-trigger');

  if (lightboxModal && lightboxImg) {
    galleryItems.forEach(item => {
      item.addEventListener('click', function () {
        const src = this.getAttribute('data-img') || this.querySelector('img')?.src;
        if (src) {
          lightboxImg.src = src;
          lightboxModal.classList.add('active');
        }
      });
    });

    if (lightboxClose) {
      lightboxClose.addEventListener('click', () => lightboxModal.classList.remove('active'));
    }

    lightboxModal.addEventListener('click', function (e) {
      if (e.target === lightboxModal) {
        lightboxModal.classList.remove('active');
      }
    });
  }
});
