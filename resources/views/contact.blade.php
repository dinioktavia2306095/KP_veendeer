<?php
$page_title = "Contact — Your corner is waiting";
require base_path('includes/header.php');
require base_path('includes/data.php');
?>

<!-- CONTACT PAGE CONTENT -->
<div class="bg-[#FAF6F0]">

  <!-- Top Breadcrumb -->
  <div class="bg-[#6E7B68] text-white pt-10 pb-4 border-b border-white/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
      <div class="section-eyebrow section-eyebrow-light text-stone-200">
        CONTACT - VEE'N DEE CORNER
      </div>
      <div class="text-[11px] uppercase tracking-widest text-stone-300">
        <a href="index.php" class="hover:text-white">HOME</a> / <span class="text-white font-semibold">CONTACT</span>
      </div>
    </div>
  </div>

  <!-- SECTION 1: FIND YOUR WAY HERE (Sage Green Hero + Map) -->
  <section class="bg-[#6E7B68] text-white py-16 sm:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
        
        <!-- Left: Contact Information -->
        <div class="lg:col-span-6 space-y-8">
          <div class="space-y-4">
            <div class="section-eyebrow section-eyebrow-light text-stone-200">
              FIND YOUR WAY HERE
            </div>
            <h1 class="font-serif text-5xl sm:text-6xl text-[#FAF6F0] font-normal leading-tight">
              Your corner is<br>waiting.
            </h1>
            <p class="text-stone-200 text-sm sm:text-base leading-relaxed max-w-lg">
              Drop in for a quick cup or stay until the lights come on. No reservation needed for everyday visits.
            </p>
          </div>

          <!-- Contact details block -->
          <div class="space-y-6 pt-4 border-t border-white/20">
            
            <!-- Address -->
            <div class="flex items-start gap-4">
              <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center shrink-0 mt-1">
                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
              </div>
              <div>
                <span class="text-[10px] uppercase tracking-[0.2em] text-stone-300 font-semibold block">ADDRESS</span>
                <p class="text-sm text-stone-100 leading-relaxed pt-1">
                  <?php echo $cafe_info['address']; ?>
                </p>
              </div>
            </div>

            <!-- Hours -->
            <div class="flex items-start gap-4">
              <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center shrink-0 mt-1">
                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              </div>
              <div>
                <span class="text-[10px] uppercase tracking-[0.2em] text-stone-300 font-semibold block">OPENING HOURS</span>
                <p class="text-sm text-stone-100 pt-1 font-medium">
                  Everyday<br>
                  08.00 — 23.00
                </p>
              </div>
            </div>

            <!-- Say Hello -->
            <div class="flex items-start gap-4">
              <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center shrink-0 mt-1">
                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
              </div>
              <div>
                <span class="text-[10px] uppercase tracking-[0.2em] text-stone-300 font-semibold block">SAY HELLO</span>
                <p class="text-sm text-stone-100 pt-1">
                  <?php echo $cafe_info['phone']; ?><br>
                  <?php echo $cafe_info['alt_email']; ?>
                </p>
              </div>
            </div>

          </div>

          <!-- CTA Buttons -->
          <div class="pt-4 flex flex-wrap items-center gap-5">
            <a href="<?php echo $cafe_info['maps_link']; ?>" target="_blank" rel="noopener" class="btn-primary">
              <span>OPEN GOOGLE MAPS</span>
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
            <a href="<?php echo $cafe_info['whatsapp_link']; ?>" target="_blank" rel="noopener" class="btn-link-arrow text-stone-100 hover:text-white px-2">
              <span>CHAT ON WHATSAPP</span>
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
          </div>

        </div>

        <!-- Right: Map Window -->
        <div class="lg:col-span-6">
          <div class="rounded-sm overflow-hidden shadow-2xl border border-white/20 bg-stone-900 relative h-96 sm:h-[460px]">
            <iframe 
              src="https://maps.google.com/maps?q=Jl.+Gegerkalong+Girang+No.149,+Sukasari,+Bandung&t=&z=15&ie=UTF8&iwloc=&output=embed" 
              width="100%" 
              height="100%" 
              style="border:0;" 
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade"
              title="Google Maps Lokasi Vee'n Dee Corner">
            </iframe>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- SECTION 2: BAGIKAN SARAN ANDA (Feedback Form on Sage Green) -->
  <section class="bg-[#6E7B68] text-white py-16 border-t border-white/15">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl space-y-8">
        
        <div class="space-y-4">
          <div class="section-eyebrow section-eyebrow-light text-stone-200">
            BERIKAN SARAN
          </div>
          <h2 class="font-serif text-4xl sm:text-5xl text-[#FAF6F0] font-normal leading-tight">
            Bagikan saran Anda.
          </h2>
          <p class="text-stone-200 text-sm sm:text-base leading-relaxed">
            Ceritakan pengalaman Anda, berikan ide, atau sampaikan hal yang ingin kami perbaiki.
          </p>
        </div>

        <!-- Alert Notification Box -->
        <div id="feedbackAlert" class="hidden p-4 rounded-sm border text-sm transition-all"></div>

        <!-- Interactive Form -->
        <form id="feedbackForm" class="space-y-6 pt-2">
          
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <!-- NAMA -->
            <div class="space-y-2">
              <label for="formNama" class="text-[10px] uppercase tracking-[0.2em] font-semibold text-stone-200 block">NAMA</label>
              <input 
                type="text" 
                id="formNama" 
                name="nama" 
                required 
                placeholder="Nama lengkap" 
                class="w-full bg-[#FAF6F0] text-stone-900 placeholder-stone-400 text-sm px-4 py-3.5 rounded-sm border-0 focus:ring-2 focus:ring-stone-900 focus:outline-none shadow-xs"
              >
            </div>

            <!-- SUBJEK -->
            <div class="space-y-2">
              <label for="formSubjek" class="text-[10px] uppercase tracking-[0.2em] font-semibold text-stone-200 block">SUBJEK</label>
              <input 
                type="text" 
                id="formSubjek" 
                name="subjek" 
                required 
                placeholder="Saran, pertanyaan, atau umpan balik" 
                class="w-full bg-[#FAF6F0] text-stone-900 placeholder-stone-400 text-sm px-4 py-3.5 rounded-sm border-0 focus:ring-2 focus:ring-stone-900 focus:outline-none shadow-xs"
              >
            </div>
          </div>

          <!-- PESAN -->
          <div class="space-y-2">
            <label for="formPesan" class="text-[10px] uppercase tracking-[0.2em] font-semibold text-stone-200 block">PESAN</label>
            <textarea 
              id="formPesan" 
              name="pesan" 
              rows="6" 
              required 
              placeholder="Tuliskan pesan Anda di sini" 
              class="w-full bg-[#FAF6F0] text-stone-900 placeholder-stone-400 text-sm p-4 rounded-sm border-0 focus:ring-2 focus:ring-stone-900 focus:outline-none shadow-xs resize-y"
            ></textarea>
          </div>

          <!-- SUBMIT BUTTON -->
          <div class="pt-2">
            <button 
              type="submit" 
              id="feedbackSubmitBtn" 
              class="btn-primary"
            >
              <span>KIRIM SARAN</span>
              <svg class="w-4 h-4 ml-1 inline-block" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </button>
          </div>

          <!-- Disclaimer note -->
          <p class="text-xs text-stone-300 leading-relaxed pt-2">
            Kami akan membaca setiap saran dan menggunakan umpan balik Anda untuk membuat pengalaman di Vee'n Dee Corner lebih baik.
          </p>

        </form>

      </div>
    </div>
  </section>

  <!-- SECTION 3: COME AS YOU ARE (Follow Along) -->
  <section class="py-20 bg-[#FAF6F0]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center">
        
        <!-- Left photo with circular projected logo -->
        <div class="md:col-span-5 relative">
          <div class="overflow-hidden rounded-sm shadow-lg border border-stone-200">
            <img src="<?php echo asset('assets/img/hero-interior.png'); ?>" alt="Vee'n Dee Corner Atmosphere" class="w-full h-80 sm:h-96 object-cover object-center">
          </div>
        </div>

        <!-- Right description -->
        <div class="md:col-span-7 space-y-6 md:pl-6">
          <div class="section-eyebrow">
            FOLLOW ALONG
          </div>
          <h2 class="font-serif text-4xl sm:text-5xl text-stone-900 font-normal leading-tight">
            Come as you are.
          </h2>
          <p class="text-stone-600 text-sm sm:text-base leading-relaxed max-w-md">
            Good food, thoughtful drinks, and a warm place to be.
          </p>

          <div class="pt-2">
            <a href="<?php echo $cafe_info['instagram_link']; ?>" target="_blank" rel="noopener" class="inline-flex items-center gap-2.5 text-xs uppercase tracking-widest font-semibold text-stone-900 border-b-2 border-stone-900 pb-1 hover:text-stone-600 hover:border-stone-600 transition-colors">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
              <span>@VEENDEECORNER</span>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

</div>

<?php require base_path('includes/footer.php'); ?>
