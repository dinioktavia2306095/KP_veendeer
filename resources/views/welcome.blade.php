<?php
$page_title = "Stay for the atmosphere";
require base_path('includes/header.php');
require base_path('includes/data.php');
?>

<!-- 1. HERO SECTION -->
<section class="relative min-h-[92vh] flex items-center bg-[#18191A] text-white overflow-hidden">
  <!-- Background Image with Overlay -->
  <div class="absolute inset-0 z-0">
    <img src="<?php echo asset('assets/img/welcome-corner-projection.png'); ?>" alt="Vee'n Dee Corner Ambiance" class="w-full h-full object-cover object-center opacity-45 scale-105 transition-transform duration-1000 ease-out hover:scale-100">
    <div class="absolute inset-0 bg-gradient-to-r from-[#141516]/95 via-[#18191A]/80 to-transparent"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-[#18191A] via-transparent to-[#18191A]/50"></div>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 w-full">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      
      <!-- Main Content -->
      <div class="lg:col-span-8 space-y-6">
        <div class="section-eyebrow section-eyebrow-light text-stone-300">
          COFFEE · KITCHEN · GOOD COMPANY
        </div>
        <h1 class="font-serif text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-normal leading-[0.98] tracking-tight text-[#FAF6F0] hero-title">
          Stay for the<br>atmosphere.
        </h1>
        <p class="text-stone-300 text-base sm:text-lg max-w-xl font-light leading-relaxed pt-2">
          A warm little corner made for slow coffee, comforting plates, and conversations that run long.
        </p>

        <div class="pt-6 flex flex-wrap items-center gap-5">
          <a href="menu.php" class="btn-primary">
            <span>EXPLORE MENU</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
          </a>
          <a href="contact.php" class="btn-link-arrow text-stone-200 hover:text-white px-2">
            <span>VISIT US</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
          </a>
        </div>
      </div>

      <!-- Right Floating Status -->
      <div class="lg:col-span-4 flex lg:justify-end">
        <div class="bg-[#242628]/80 backdrop-blur-md border border-stone-700/60 p-6 rounded-sm text-left max-w-xs space-y-2">
          <div class="flex items-center gap-2">
            <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span>
            <span class="text-[10px] uppercase tracking-[0.25em] text-stone-300 font-semibold">OPEN DAILY</span>
          </div>
          <div class="font-serif text-2xl text-[#FAF6F0] font-normal">
            08.00 — 23.00
          </div>
          <p class="text-xs text-stone-400">
            Sukasari, Bandung. Free fast Wi-Fi and plenty of plug sockets available.
          </p>
        </div>
      </div>

    </div>

    <!-- Bottom Scroll Indicator -->
    <div class="pt-16 sm:pt-24 flex items-center justify-between text-[10px] uppercase tracking-[0.25em] text-stone-400">
      <div class="flex items-center gap-3">
        <span class="w-8 h-[1px] bg-stone-500"></span>
        <span>SCROLL TO WANDER</span>
      </div>
      <div>
        BANDUNG · JAWA BARAT
      </div>
    </div>
  </div>
</section>

<!-- 2. OUR LITTLE STORY SECTION -->
<section id="story" class="py-24 bg-[#FAF6F0] border-b border-stone-200/60">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
      
      <!-- Left Column: Big photo with polaroid note -->
      <div class="lg:col-span-5 space-y-6">
        <div class="section-eyebrow">
          OUR LITTLE STORY
        </div>
        <h2 class="font-serif text-4xl sm:text-5xl text-stone-900 font-normal leading-tight">
          A corner that feels like yours.
        </h2>
        
        <div class="relative pt-4 group">
          <div class="overflow-hidden rounded-sm shadow-md bg-white p-3 border border-stone-200">
            <img src="<?php echo asset('assets/img/gallery-indoor-seating.jpg'); ?>" alt="Vee'n Dee Corner Cozy Seating" class="w-full h-80 sm:h-96 object-cover object-center transition-transform duration-700 group-hover:scale-105">
            <div class="mt-3 flex items-center justify-between px-1">
              <span class="text-xs text-stone-500 font-serif italic">Every detail has a story</span>
              <span class="text-[10px] tracking-widest text-stone-400 uppercase font-sans">CORNER 01</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column: Narrative & Scrapbook style -->
      <div class="lg:col-span-7 space-y-8 lg:pl-6">
        <div class="space-y-4">
          <p class="font-serif text-2xl sm:text-3xl text-stone-800 leading-snug font-normal">
            Vee and Dee Corner began with a simple idea: make a place that feels familiar from the very first visit.
          </p>
          <p class="text-stone-600 text-sm sm:text-base leading-relaxed">
            We pair thoughtful coffee and honest comfort food with an easygoing room full of warm wood, worn-in textures, plants, music, and people. Nothing too polished. Nothing hurried.
          </p>
          <div class="pt-2">
            <a href="facilities.php" class="btn-link-arrow text-stone-900 hover:text-stone-700">
              <span>SEE OUR SPACE</span>
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
            </a>
          </div>
        </div>

        <!-- Scrapbook Card: Come as you are -->
        <div class="bg-[#F2ECE1] p-6 sm:p-8 rounded-sm border border-[#E5DCB] space-y-4 relative">
          <div class="font-script text-3xl sm:text-4xl text-stone-800 transform -rotate-1">
            Come as you are.
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-12 gap-6 items-center">
            <div class="sm:col-span-5 overflow-hidden rounded shadow-sm">
              <img src="<?php echo asset('assets/img/gallery-window-seating.jpg'); ?>" alt="Atmosphere" class="w-full h-36 object-cover">
            </div>
            <div class="sm:col-span-7">
              <p class="text-xs sm:text-sm text-stone-600 leading-relaxed">
                Part neighborhood living room, part creative hideaway — designed for first dates, solo work, old friends, and everything in between.
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- 3 Pillars Row -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 pt-20 mt-16 border-t border-stone-200">
      <div class="space-y-2">
        <span class="text-xs font-semibold text-stone-400 font-mono">01</span>
        <h4 class="font-serif text-xl text-stone-900 font-medium">Warm, always</h4>
        <p class="text-xs sm:text-sm text-stone-600 leading-relaxed">
          Hospitality without the fuss. A friendly smile and a seat waiting for you.
        </p>
      </div>
      <div class="space-y-2">
        <span class="text-xs font-semibold text-stone-400 font-mono">02</span>
        <h4 class="font-serif text-xl text-stone-900 font-medium">Made with care</h4>
        <p class="text-xs sm:text-sm text-stone-600 leading-relaxed">
          Good ingredients, prepared honestly. From fresh espresso to warm comforting meals.
        </p>
      </div>
      <div class="space-y-2">
        <span class="text-xs font-semibold text-stone-400 font-mono">03</span>
        <h4 class="font-serif text-xl text-stone-900 font-medium">Room to linger</h4>
        <p class="text-xs sm:text-sm text-stone-600 leading-relaxed">
          Your time here is entirely yours. Work quietly, chat long, or just take a breath.
        </p>
      </div>
    </div>

  </div>
</section>

<!-- 3. FROM OUR KITCHEN & BAR SECTION (Dark Theme) -->
<section class="py-24 bg-[#18191A] text-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
    
    <div class="max-w-2xl space-y-4">
      <div class="section-eyebrow section-eyebrow-light text-stone-300">
        SOMETHING GOOD
      </div>
      <h2 class="font-serif text-4xl sm:text-5xl text-[#FAF6F0] font-normal leading-tight">
        From our kitchen &<br>bar.
      </h2>
      <p class="text-stone-400 text-sm sm:text-base leading-relaxed">
        Discover your favorite coffee, refreshing drinks, and delicious meals at Vee'n Dee Corner. Made with care, served with warmth.
      </p>
    </div>

    <!-- 3 Featured Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      
      <!-- Card 1: Signature Coffee -->
      <div class="card-dark group flex flex-col overflow-hidden">
        <div class="relative h-64 overflow-hidden bg-stone-900">
          <img src="<?php echo asset('assets/img/gallery-cappuccino.jpg'); ?>" alt="Signature Coffee" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
          <div class="absolute bottom-3 left-3">
            <span class="badge-tag">COFFEE</span>
          </div>
        </div>
        <div class="p-6 flex-1 flex flex-col justify-between space-y-3">
          <div>
            <div class="flex items-center justify-between">
              <h3 class="font-serif text-2xl text-[#FAF6F0] font-normal">Signature Coffee</h3>
            </div>
            <p class="text-xs sm:text-sm text-stone-400 leading-relaxed mt-2">
              Enjoy our freshly brewed coffee with rich aroma and a smooth taste.
            </p>
          </div>
          <div class="pt-2">
            <a href="https://wa.me/628267254751845?text=Halo%20Vee'n%20Dee,%20saya%20ingin%20pesan%20Signature%20Coffee" target="_blank" class="text-[11px] uppercase tracking-wider text-stone-300 hover:text-white flex items-center gap-1">
              <span>ORDER VIA WHATSAPP</span> →
            </a>
          </div>
        </div>
      </div>

      <!-- Card 2: Ube Matcha Cloud -->
      <div class="card-dark group flex flex-col overflow-hidden">
        <div class="relative h-64 overflow-hidden bg-stone-900">
          <img src="<?php echo asset('assets/img/gallery-ube-matcha.jpg'); ?>" alt="Ube Matcha Cloud" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
          <div class="absolute bottom-3 left-3">
            <span class="badge-tag">NON-COFFEE</span>
          </div>
        </div>
        <div class="p-6 flex-1 flex flex-col justify-between space-y-3">
          <div>
            <div class="flex items-center justify-between">
              <h3 class="font-serif text-2xl text-[#FAF6F0] font-normal">Ube Matcha Cloud</h3>
            </div>
            <p class="text-xs sm:text-sm text-stone-400 leading-relaxed mt-2">
              A delightful blend of earthy matcha and sweet purple yam, topped with a creamy cloud of foam for a smooth and dreamy finish.
            </p>
          </div>
          <div class="pt-2">
            <a href="https://wa.me/628267254751845?text=Halo%20Vee'n%20Dee,%20saya%20ingin%20pesan%20Ube%20Matcha%20Cloud" target="_blank" class="text-[11px] uppercase tracking-wider text-stone-300 hover:text-white flex items-center gap-1">
              <span>ORDER VIA WHATSAPP</span> →
            </a>
          </div>
        </div>
      </div>

      <!-- Card 3: Burger & Fries -->
      <div class="card-dark group flex flex-col overflow-hidden">
        <div class="relative h-64 overflow-hidden bg-stone-900">
          <img src="<?php echo asset('assets/img/gallery-burger.jpg'); ?>" alt="Burger & Fries" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
          <div class="absolute bottom-3 left-3">
            <span class="badge-tag">FOOD</span>
          </div>
        </div>
        <div class="p-6 flex-1 flex flex-col justify-between space-y-3">
          <div>
            <div class="flex items-center justify-between">
              <h3 class="font-serif text-2xl text-[#FAF6F0] font-normal">Burger & Fries</h3>
            </div>
            <p class="text-xs sm:text-sm text-stone-400 leading-relaxed mt-2">
              A juicy, flavorful burger served with crispy golden fries, perfect for a delicious and satisfying bite.
            </p>
          </div>
          <div class="pt-2">
            <a href="https://wa.me/628267254751845?text=Halo%20Vee'n%20Dee,%20saya%20ingin%20pesan%20Burger%20Fries" target="_blank" class="text-[11px] uppercase tracking-wider text-stone-300 hover:text-white flex items-center gap-1">
              <span>ORDER VIA WHATSAPP</span> →
            </a>
          </div>
        </div>
      </div>

    </div>

    <!-- Bottom Action Bar -->
    <div class="pt-8 flex flex-col sm:flex-row items-center justify-between border-t border-stone-800 gap-4">
      <span class="text-sm text-stone-400">Curious about the other spread?</span>
      <a href="menu.php" class="btn-primary">
        <span>VIEW FULL MENU</span>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
      </a>
    </div>

  </div>
</section>

<!-- 4. MAKE YOURSELF AT HOME SECTION (Facilities Preview) -->
<section class="py-24 bg-[#FAF6F0]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
    
    <!-- Top Header + Pills -->
    <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-8 pb-6 border-b border-stone-200">
      <div class="space-y-4 max-w-2xl">
        <div class="section-eyebrow">
          MAKE YOURSELF AT HOME
        </div>
        <h2 class="font-serif text-4xl sm:text-5xl text-stone-900 font-normal leading-tight">
          A space for every kind of day.
        </h2>
        <p class="text-stone-600 text-sm sm:text-base leading-relaxed">
          From focused mornings to long weekend catch-ups, choose a corner and settle in.
        </p>
      </div>

      <!-- Facility Badges -->
      <div class="flex flex-wrap items-center gap-3">
        <span class="badge-pill border-stone-300 text-stone-700 bg-white shadow-xs">
          <svg class="w-3.5 h-3.5 text-stone-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/></svg>
          FAST WI-FI
        </span>
        <span class="badge-pill border-stone-300 text-stone-700 bg-white shadow-xs">
          <svg class="w-3.5 h-3.5 text-stone-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
          PARKING
        </span>
        <span class="badge-pill border-stone-300 text-stone-700 bg-white shadow-xs">
          <svg class="w-3.5 h-3.5 text-stone-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
          PRIVATE EVENTS
        </span>
      </div>
    </div>

    <!-- Dual Space Cards -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
      
      <!-- Card: Indoor comfort -->
      <div class="bg-white border border-stone-200 p-6 sm:p-8 flex flex-col md:flex-row gap-6 items-center shadow-xs">
        <div class="w-full md:w-1/2 h-56 overflow-hidden rounded">
          <img src="<?php echo asset('assets/img/gallery-indoor-seating.jpg'); ?>" alt="Indoor Comfort" class="w-full h-full object-cover">
        </div>
        <div class="w-full md:w-1/2 space-y-3">
          <div class="w-8 h-8 rounded-full bg-stone-100 flex items-center justify-center text-stone-600">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
          </div>
          <h3 class="font-serif text-2xl text-stone-900 font-normal">Indoor comfort</h3>
          <p class="text-xs sm:text-sm text-stone-600 leading-relaxed">
            Soft seating, warm light, quiet corners, and plenty of outlets.
          </p>
          <div class="pt-2 text-[10px] uppercase tracking-widest text-stone-400">
            A CORNER TO SETTLE IN
          </div>
        </div>
      </div>

      <!-- Card: Outdoor Seating -->
      <div class="bg-white border border-stone-200 p-6 sm:p-8 flex flex-col md:flex-row-reverse gap-6 items-center shadow-xs">
        <div class="w-full md:w-1/2 h-56 overflow-hidden rounded">
          <img src="<?php echo asset('assets/img/gallery-patio.jpg'); ?>" alt="Outdoor Seating" class="w-full h-full object-cover">
        </div>
        <div class="w-full md:w-1/2 space-y-3">
          <div class="w-8 h-8 rounded-full bg-stone-100 flex items-center justify-center text-stone-600">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 00-9.78 2.096A4.001 4.001 0 003 15z"/></svg>
          </div>
          <h3 class="font-serif text-2xl text-stone-900 font-normal">Outdoor Seating</h3>
          <p class="text-xs sm:text-sm text-stone-600 leading-relaxed">
            Enjoy the fresh air and relaxing atmosphere in our cozy outdoor space, perfect for casual meetups and peaceful afternoons.
          </p>
          <div class="pt-2 text-[10px] uppercase tracking-widest text-stone-400">
            SUNNY MORNINGS · SLOW EVENINGS
          </div>
        </div>
      </div>

    </div>

    <!-- More Spaces Link -->
    <div class="text-center pt-2">
      <a href="facilities.php" class="btn-dark">
        <span>EXPLORE ALL SPACES</span> →
      </a>
    </div>

  </div>
</section>

<!-- 5. SCENES FROM THE CORNER (Moments Gallery) -->
<section class="py-24 bg-[#FAF6F0] border-t border-stone-200">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4">
      <div class="space-y-2">
        <div class="section-eyebrow">
          SCENES FROM THE CORNER
        </div>
        <h2 class="font-serif text-3xl sm:text-4xl text-stone-900 font-normal">
          Little moments, well spent.
        </h2>
      </div>
      <div>
        <a href="<?php echo $cafe_info['instagram_link']; ?>" target="_blank" rel="noopener" class="text-xs uppercase tracking-widest text-stone-600 hover:text-stone-900 font-medium flex items-center gap-1.5">
          <span>@VEENDEE.CORNER</span>
          <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
        </a>
      </div>
    </div>

    <!-- Image Grid Gallery -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
      <div class="relative overflow-hidden group cursor-pointer gallery-trigger rounded" data-img="<?php echo asset('assets/img/gallery-cafe-interior.jpg'); ?>">
        <img src="<?php echo asset('assets/img/gallery-cafe-interior.jpg'); ?>" alt="Vee'n Dee Corner" class="w-full h-48 sm:h-56 object-cover transition-transform duration-500 group-hover:scale-105">
        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-white">
          <span class="text-xs uppercase tracking-wider font-semibold">VIEW</span>
        </div>
      </div>
      <div class="relative overflow-hidden group cursor-pointer gallery-trigger rounded" data-img="<?php echo asset('assets/img/gallery-pickup-counter.jpg'); ?>">
        <img src="<?php echo asset('assets/img/gallery-pickup-counter.jpg'); ?>" alt="Pickup Counter" class="w-full h-48 sm:h-56 object-cover transition-transform duration-500 group-hover:scale-105">
        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-white">
          <span class="text-xs uppercase tracking-wider font-semibold">VIEW</span>
        </div>
      </div>
      <div class="relative overflow-hidden group cursor-pointer gallery-trigger rounded" data-img="<?php echo asset('assets/img/gallery-wooden-tables.jpg'); ?>">
        <img src="<?php echo asset('assets/img/gallery-wooden-tables.jpg'); ?>" alt="Bar Seating" class="w-full h-48 sm:h-56 object-cover transition-transform duration-500 group-hover:scale-105">
        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-white">
          <span class="text-xs uppercase tracking-wider font-semibold">VIEW</span>
        </div>
      </div>
      <div class="relative overflow-hidden group cursor-pointer gallery-trigger rounded" data-img="<?php echo asset('assets/img/gallery-patio.jpg'); ?>">
        <img src="<?php echo asset('assets/img/gallery-patio.jpg'); ?>" alt="Patio Benches" class="w-full h-48 sm:h-56 object-cover transition-transform duration-500 group-hover:scale-105">
        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-white">
          <span class="text-xs uppercase tracking-wider font-semibold">VIEW</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 6. THIS MONTH AT THE CORNER (Event Highlight) -->
<section class="py-24 bg-[#EAE2D5] border-t border-stone-300/80">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      
      <!-- Left Photo -->
      <div class="lg:col-span-5 relative">
        <div class="rounded-sm overflow-hidden shadow-lg border border-stone-300">
          <img src="<?php echo asset('assets/img/gallery-table-gathering.jpg'); ?>" alt="Clay, coffee & slow conversation" class="w-full h-80 sm:h-96 object-cover">
        </div>
        <div class="absolute -top-4 -left-4 bg-[#18191A] text-stone-200 text-[10px] uppercase tracking-widest px-4 py-2 font-semibold shadow-md">
          THIS MONTH
        </div>
      </div>

      <!-- Right Description -->
      <div class="lg:col-span-7 space-y-6 lg:pl-6">
        <div class="space-y-2">
          <div class="section-eyebrow text-stone-600">
            AT THE CORNER · SUNDAY SESSION NO. 06
          </div>
          <h2 class="font-serif text-4xl sm:text-5xl text-stone-900 font-normal leading-tight">
            Clay, coffee & slow<br>conversation.
          </h2>
        </div>

        <p class="text-stone-700 text-sm sm:text-base leading-relaxed">
          Join local ceramic artist Nara for an intimate hand-building workshop. No experience needed — your coffee and all materials are on us.
        </p>

        <div class="pt-2 flex items-center gap-6 text-xs text-stone-600 font-mono">
          <div class="flex items-center gap-2">
            <svg class="w-4 h-4 text-stone-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
            <span>Sunday, 24 August</span>
          </div>
          <div class="flex items-center gap-2">
            <svg class="w-4 h-4 text-stone-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            <span>15.00 — 17.30</span>
          </div>
        </div>

        <div class="pt-4 flex items-center gap-4">
          <a href="event.php" class="btn-dark">
            <span>ANOTHER EVENT</span> →
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- 7. FIND YOUR WAY HERE (Sage Green Section + Map) -->
<section class="py-24 bg-[#6E7B68] text-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
      
      <!-- Left: Contact Details -->
      <div class="lg:col-span-6 space-y-8">
        <div class="space-y-4">
          <div class="section-eyebrow section-eyebrow-light text-stone-200">
            FIND YOUR WAY HERE
          </div>
          <h2 class="font-serif text-4xl sm:text-5xl text-[#FAF6F0] font-normal leading-tight">
            Your corner is<br>waiting.
          </h2>
          <p class="text-stone-200 text-sm sm:text-base leading-relaxed max-w-lg">
            Drop in for a quick cup or stay until the lights come on. No reservation needed for everyday visits.
          </p>
        </div>

        <!-- Details List -->
        <div class="space-y-6 pt-4 border-t border-white/20">
          
          <div class="flex items-start gap-4">
            <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center shrink-0 mt-1">
              <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            </div>
            <div>
              <span class="text-[10px] uppercase tracking-[0.2em] text-stone-300 font-semibold block">ADDRESS</span>
              <p class="text-sm text-stone-100 leading-relaxed pt-1">
                Jl. Gegerkalong Girang No.149, Gegerkalong, Kec. Sukasari,<br>
                Kota Bandung, Jawa Barat 40153
              </p>
            </div>
          </div>

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

          <div class="flex items-start gap-4">
            <div class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center shrink-0 mt-1">
              <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            </div>
            <div>
              <span class="text-[10px] uppercase tracking-[0.2em] text-stone-300 font-semibold block">SAY HELLO</span>
              <p class="text-sm text-stone-100 pt-1">
                +62 812 3456 7890<br>
                hello@veendeecorner.id
              </p>
            </div>
          </div>

        </div>

        <!-- Buttons -->
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

      <!-- Right: Interactive Google Maps Embed -->
      <div class="lg:col-span-6">
        <div class="rounded-sm overflow-hidden shadow-2xl border border-white/20 bg-stone-900 relative h-96 sm:h-[450px]">
          <iframe 
            src="https://maps.google.com/maps?q=Jl.+Gegerkalong+Girang+No.149,+Sukasari,+Bandung&t=&z=15&ie=UTF8&iwloc=&output=embed" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"
            title="Lokasi Vee'n Dee Corner Bandung">
          </iframe>
        </div>
      </div>

    </div>
  </div>
</section>

<?php require base_path('includes/footer.php'); ?>
