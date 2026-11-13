<?php
$page_title = 'Menu — Kitchen & Bar';
require base_path('includes/header.php');
require base_path('includes/data.php');
?>

<!-- MENU PAGE HERO & GRID -->
<section class="py-20 bg-[#18191A] text-white min-h-screen">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
    
    <!-- Breadcrumb & Eyebrow -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-6 border-b border-stone-800">
      <div class="section-eyebrow section-eyebrow-light text-stone-300">
        SOMETHING GOOD
      </div>
      <div class="text-[11px] uppercase tracking-widest text-stone-400">
        <a href="index.php" class="hover:text-stone-200">HOME</a> / <span class="text-stone-200">MENU</span>
      </div>
    </div>

    <!-- Page Title & Description -->
    <div class="max-w-2xl space-y-4">
      <h1 class="font-serif text-5xl sm:text-6xl text-[#FAF6F0] font-normal leading-tight">
        From our kitchen &<br>bar.
      </h1>
      <p class="text-stone-400 text-sm sm:text-base leading-relaxed">
        Discover your favorite coffee, refreshing drinks, and delicious meals at Vee'n Dee Corner. Made with care, served with warmth.
      </p>
    </div>

    <!-- Filter & Search Controls -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 pt-4 pb-6 border-b border-stone-800">
      <!-- Category Tabs -->
      <div class="flex flex-wrap items-center gap-2">
        <button type="button" class="filter-btn px-4 py-2 text-xs uppercase tracking-widest font-semibold border rounded-sm transition-all bg-cream text-charcoal border-white" data-category="all">
          All
        </button>
        <button type="button" class="filter-btn px-4 py-2 text-xs uppercase tracking-widest font-semibold border border-white/20 text-white/70 hover:text-white hover:border-white/50 rounded-sm transition-all" data-category="coffee">
          Coffee
        </button>
        <button type="button" class="filter-btn px-4 py-2 text-xs uppercase tracking-widest font-semibold border border-white/20 text-white/70 hover:text-white hover:border-white/50 rounded-sm transition-all" data-category="non-coffee">
          Non-Coffee
        </button>
        <button type="button" class="filter-btn px-4 py-2 text-xs uppercase tracking-widest font-semibold border border-white/20 text-white/70 hover:text-white hover:border-white/50 rounded-sm transition-all" data-category="food">
          Food
        </button>
        <button type="button" class="filter-btn px-4 py-2 text-xs uppercase tracking-widest font-semibold border border-white/20 text-white/70 hover:text-white hover:border-white/50 rounded-sm transition-all" data-category="snacks">
          Snacks
        </button>
      </div>

      <!-- Search Box -->
      <div class="relative w-full md:w-72">
        <input 
          type="text" 
          id="menuSearchInput" 
          placeholder="Cari menu favorit..." 
          class="w-full bg-[#222426] border border-stone-700 text-xs text-white px-4 py-2.5 rounded-sm focus:outline-none focus:border-stone-400 placeholder-stone-500"
        >
        <svg class="w-4 h-4 text-stone-500 absolute right-3 top-3 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
      </div>
    </div>

    <!-- Menu Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="menuGrid">
      <?php foreach ($menu_items as $item) { ?>
        <div class="menu-item-card card-dark group flex flex-col justify-between overflow-hidden" data-category="<?php echo strtolower($item['category']); ?>">
          <div>
            <!-- Image Frame -->
            <div class="relative h-64 overflow-hidden bg-stone-900 cursor-pointer gallery-trigger" data-img="<?php echo asset($item['image']); ?>">
              <img src="<?php echo asset($item['image']); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
              <div class="absolute bottom-3 left-3">
                <span class="badge-tag"><?php echo $item['badge']; ?></span>
              </div>
            </div>

            <!-- Content -->
            <div class="p-6 space-y-3">
              <div class="flex items-start justify-between gap-4">
                <h3 class="font-serif text-2xl text-[#FAF6F0] font-normal menu-item-title leading-snug">
                  <?php echo htmlspecialchars($item['name']); ?>
                </h3>
              </div>
              <p class="text-xs sm:text-sm text-stone-400 leading-relaxed menu-item-desc">
                <?php echo htmlspecialchars($item['description']); ?>
              </p>
            </div>
          </div>

          <div class="px-6 pb-6 pt-2 border-t border-stone-800/80">
            <span class="text-[10px] uppercase tracking-widest text-stone-500">FRESH DAILY</span>
          </div>
        </div>
      <?php } ?>
    </div>

    <!-- Bottom Notice Banner -->
    <div class="pt-12 pb-4 flex flex-col sm:flex-row items-center justify-between border-t border-stone-800 gap-6">
      <div class="space-y-1 text-center sm:text-left">
        <span class="text-stone-300 text-sm font-medium">Curious about the full spread?</span>
        <p class="text-xs text-stone-500">Tanyakan barista kami untuk menu musiman, biji kopi pilihan (single origin), dan camilan hari ini.</p>
      </div>
      <a href="<?php echo route('full-menu'); ?>" class="btn-primary">
        <span>VIEW FULL MENU</span>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
      </a>
    </div>

  </div>
</section>

<?php require base_path('includes/footer.php'); ?>
