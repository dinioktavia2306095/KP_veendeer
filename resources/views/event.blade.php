<?php
$page_title = 'Events — Good things, better together';
require base_path('includes/header.php');
require base_path('includes/data.php');
?>

<!-- EVENT PAGE HERO & PROGRAM CARDS -->
<section class="py-20 bg-[#FAF6F0] min-h-screen">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
    
    <!-- Top Header + Breadcrumb -->
    <div class="space-y-6 pb-10 border-b border-stone-200">
      <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div class="section-eyebrow">
          AT THE CORNER
        </div>
        <div class="text-[11px] uppercase tracking-widest text-stone-500">
          <a href="index.php" class="hover:text-stone-900">HOME</a> / <span class="text-stone-900 font-semibold">EVENT</span>
        </div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-end pt-4">
        <div class="lg:col-span-7">
          <h1 class="font-serif text-5xl sm:text-6xl md:text-7xl text-stone-900 font-normal leading-tight">
            Good things,<br>better together.
          </h1>
        </div>
        <div class="lg:col-span-5 space-y-2 lg:pl-6">
          <p class="text-stone-600 text-sm sm:text-base leading-relaxed">
            A few new ways to gather, create, and linger over a cup. Something lovely is taking shape at our corner.
          </p>
          <p class="text-xs text-stone-400 font-mono">
            All event details are yet to be announced.
          </p>
        </div>
      </div>
    </div>

    <!-- IN THE MAKING / THREE REASONS TO GATHER -->
    <div class="space-y-8">
      <div class="flex items-center justify-between text-stone-500 border-b border-stone-200 pb-3">
        <span class="text-[10px] uppercase tracking-[0.25em] font-semibold text-stone-500">IN THE MAKING</span>
        <span class="text-[10px] uppercase tracking-[0.25em] font-semibold text-stone-400">THREE REASONS TO GATHER</span>
      </div>

      <!-- 3 Event Cards Grid -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <?php foreach ($events as $event) { ?>
          <div class="bg-white border border-stone-200 flex flex-col justify-between overflow-hidden shadow-xs hover:shadow-md transition-shadow group">
            <div>
              <!-- Photo Frame with Coming Soon Badge -->
              <div class="relative h-64 overflow-hidden bg-stone-900">
                <img src="<?php echo asset($event['image']); ?>" alt="<?php echo htmlspecialchars($event['title']); ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute top-4 left-4">
                  <span class="bg-[#FAF6F0] text-stone-900 text-[10px] uppercase tracking-wider font-semibold px-3 py-1.5 shadow-sm inline-flex items-center gap-1.5 rounded-xs">
                    <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                    <?php echo $event['badge']; ?>
                  </span>
                </div>
              </div>

              <!-- Card Content -->
              <div class="p-6 space-y-3">
                <span class="text-[10px] uppercase tracking-[0.2em] font-semibold text-stone-400 block">
                  <?php echo $event['category']; ?>
                </span>
                <h3 class="font-serif text-3xl text-stone-900 font-normal">
                  <?php echo htmlspecialchars($event['title']); ?>
                </h3>
                <p class="text-xs sm:text-sm text-stone-600 leading-relaxed pt-1">
                  <?php echo htmlspecialchars($event['description']); ?>
                </p>
              </div>
            </div>

            <!-- Footer Link -->
            <div class="px-6 pb-6 pt-3 border-t border-stone-100">
              <span class="text-xs font-mono text-stone-400 italic">
                <?php echo $event['link_text']; ?>
              </span>
            </div>
          </div>
        <?php } ?>
      </div>

      <!-- Poetic Highlight Quote -->
      <div class="pt-6 pb-2 text-center sm:text-left">
        <p class="font-serif italic text-2xl sm:text-3xl text-stone-700">
          Good coffee is only the beginning.
        </p>
      </div>
    </div>

    <!-- GREEN BANNER: STAY CLOSE TO THE CORNER -->
    <div class="bg-[#6E7B68] text-white p-8 sm:p-14 rounded-sm shadow-md">
      <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-center">
        <div class="md:col-span-8 space-y-4">
          <div class="section-eyebrow section-eyebrow-light text-stone-200">
            A LITTLE MORE TO LOOK FORWARD TO
          </div>
          <h2 class="font-serif text-3xl sm:text-5xl text-[#FAF6F0] font-normal leading-tight">
            Stay close to the corner.
          </h2>
          <p class="text-stone-200 text-sm sm:text-base leading-relaxed max-w-xl">
            We're still putting the lovely little details together. Follow along on Instagram for our upcoming dates, workshop registrations, and event announcements.
          </p>
        </div>

        <div class="md:col-span-4 flex md:justify-end">
          <a href="<?php echo $cafe_info['instagram_link']; ?>" target="_blank" rel="noopener" class="border border-white/40 hover:border-white bg-white/10 hover:bg-white text-white hover:text-stone-900 px-6 py-4 rounded-sm flex items-center gap-3 transition-all text-xs uppercase tracking-widest font-semibold shadow-xs">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
            <span>@VEENDEECORNER</span>
          </a>
        </div>
      </div>
    </div>

  </div>
</section>

<?php require base_path('includes/footer.php'); ?>
