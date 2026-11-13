<?php
/**
 * Footer Component for Vee'n Dee Corner
 */
require __DIR__.'/data.php';
?>
  <!-- Global Footer -->
  <footer class="bg-[#18191A] text-stone-300 pt-16 pb-10 border-t border-stone-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <!-- Top Grid -->
      <div class="grid grid-cols-1 md:grid-cols-12 gap-10 pb-14 border-b border-stone-800/80">
        
        <!-- Brand Info -->
        <div class="md:col-span-5 space-y-4">
          <h3 class="font-serif text-2xl text-stone-100 tracking-wide font-normal">Vee and dee corner</h3>
          <p class="text-[10px] uppercase tracking-[0.25em] text-stone-400 font-medium">CORNER · COFFEE & KITCHEN</p>
          <p class="text-sm text-stone-400 max-w-sm leading-relaxed pt-2">
            Good food, thoughtful drinks, and a warm place to be.
          </p>
          <div class="pt-2 flex items-center gap-3">
            <a href="<?php echo $cafe_info['instagram_link']; ?>" target="_blank" rel="noopener" class="text-stone-400 hover:text-white transition-colors text-xs flex items-center gap-1.5 border border-stone-800 px-3 py-1.5 rounded-full hover:border-stone-600">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
              <span>Instagram</span>
            </a>
            <a href="<?php echo $cafe_info['whatsapp_link']; ?>" target="_blank" rel="noopener" class="text-stone-400 hover:text-white transition-colors text-xs flex items-center gap-1.5 border border-stone-800 px-3 py-1.5 rounded-full hover:border-stone-600">
              <span>WhatsApp</span>
            </a>
          </div>
        </div>

        <!-- EXPLORE Navigation -->
        <div class="md:col-span-2 space-y-3">
          <p class="text-[10px] uppercase tracking-[0.25em] text-stone-500 font-semibold">EXPLORE</p>
          <ul class="space-y-2 text-xs">
            <li><a href="index.php" class="text-stone-400 hover:text-white transition-colors">Home</a></li>
            <li><a href="index.php#story" class="text-stone-400 hover:text-white transition-colors">About</a></li>
            <li><a href="menu.php" class="text-stone-400 hover:text-white transition-colors">Menu</a></li>
            <li><a href="facilities.php" class="text-stone-400 hover:text-white transition-colors">Facilities</a></li>
            <li><a href="gallery.php" class="text-stone-400 hover:text-white transition-colors">Gallery</a></li>
            <li><a href="event.php" class="text-stone-400 hover:text-white transition-colors">Event</a></li>
            <li><a href="contact.php" class="text-stone-400 hover:text-white transition-colors">Contact</a></li>
          </ul>
        </div>

        <!-- VISIT Information -->
        <div class="md:col-span-3 space-y-3">
          <p class="text-[10px] uppercase tracking-[0.25em] text-stone-500 font-semibold">VISIT</p>
          <p class="text-xs text-stone-400 leading-relaxed">
            Jl. Gegerkalong Girang No.149, Gegerkalong, Kec. Sukasari,<br>
            Kota Bandung, Jawa Barat
          </p>
          <p class="text-xs text-stone-300 font-medium pt-1">
            Daily, 08.00 — 23.00
          </p>
        </div>

        <!-- FOLLOW ALONG Information -->
        <div class="md:col-span-2 space-y-3">
          <p class="text-[10px] uppercase tracking-[0.25em] text-stone-500 font-semibold">FOLLOW ALONG</p>
          <ul class="space-y-2 text-xs text-stone-400">
            <li>
              Instagram: <a href="<?php echo $cafe_info['instagram_link']; ?>" target="_blank" rel="noopener" class="text-stone-200 hover:underline"><?php echo $cafe_info['instagram']; ?></a>
            </li>
            <li>
              WhatsApp: <a href="<?php echo $cafe_info['whatsapp_link']; ?>" target="_blank" rel="noopener" class="text-stone-200 hover:underline"><?php echo $cafe_info['whatsapp']; ?></a>
            </li>
            <li>
              Email: <a href="mailto:<?php echo $cafe_info['email']; ?>" class="text-stone-200 hover:underline"><?php echo $cafe_info['email']; ?></a>
            </li>
          </ul>
        </div>

      </div>

      <!-- Bottom Bar -->
      <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-[11px] text-stone-500 gap-4">
        <div>
          © <?php echo date('Y'); ?> Vee'n Dee Corner. All rights reserved.
          <a href="admin.php" class="ml-3 hover:text-stone-300 opacity-40 hover:opacity-100 transition-opacity" title="Admin Panel">Admin</a>
        </div>
        <div class="font-serif italic text-stone-400">
          Made slowly, served warmly.
        </div>
      </div>

    </div>
  </footer>

  <!-- Lightbox Modal for Image Preview -->
  <div id="lightboxModal" class="lightbox-modal">
    <div class="relative max-w-4xl max-h-[90vh]">
      <button id="lightboxClose" class="absolute -top-10 right-0 text-white hover:text-stone-300 text-2xl font-light focus:outline-none">✕</button>
      <img id="lightboxImg" src="" alt="Vee'n Dee Corner" class="max-h-[85vh] max-w-full rounded shadow-2xl object-contain border border-stone-700">
    </div>
  </div>

  <!-- JavaScript -->
  <script src="assets/js/main.js"></script>
</body>
</html>
