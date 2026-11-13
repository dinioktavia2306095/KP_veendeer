<?php
$page_title = 'Facilities — A space for every kind of day';
require base_path('includes/header.php');
require base_path('includes/data.php');
?>

<!-- FACILITIES PAGE HERO & FEATURES -->
<section class="py-20 bg-[#FAF6F0] min-h-screen">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-20">
    
    <!-- Top Header + Breadcrumb + Pills -->
    <div class="space-y-6 pb-10 border-b border-stone-200">
      <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div class="section-eyebrow">
          MAKE YOURSELF AT HOME
        </div>
        <div class="text-[11px] uppercase tracking-widest text-stone-500">
          <a href="index.php" class="hover:text-stone-900">HOME</a> / <span class="text-stone-900 font-semibold">FACILITIES</span>
        </div>
      </div>

      <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-8 pt-4">
        <div class="max-w-2xl space-y-4">
          <h1 class="font-serif text-5xl sm:text-6xl text-stone-900 font-normal leading-tight">
            A space for every<br>kind of day.
          </h1>
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
    </div>

    <!-- Feature 1: Indoor Comfort (Image Left, Text Right) -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
      <div class="lg:col-span-6">
        <div class="overflow-hidden rounded-sm shadow-md border border-stone-200 bg-white p-2">
          <img src="<?php echo asset('assets/img/gallery-indoor-seating.jpg'); ?>" alt="Indoor Comfort" class="w-full h-80 sm:h-96 object-cover">
        </div>
      </div>
      <div class="lg:col-span-6 space-y-6">
        <div class="w-12 h-12 rounded-full bg-[#E5DFD3] flex items-center justify-center text-stone-700">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
        </div>
        <h2 class="font-serif text-4xl sm:text-5xl text-stone-900 font-normal">
          Indoor comfort
        </h2>
        <p class="text-stone-600 text-base leading-relaxed">
          Soft seating, warm light, quiet corners, and plenty of outlets. Suasana hening dan nyaman yang cocok untuk WFC (Work from Cafe), membaca buku, atau mengobrol santai bersama orang terdekat.
        </p>
        <div class="pt-4 border-t border-stone-200">
          <span class="text-[11px] uppercase tracking-[0.2em] text-stone-400 font-semibold">
            A CORNER TO SETTLE IN
          </span>
        </div>
      </div>
    </div>

    <!-- Feature 2: Outdoor (Text Left, Image Right) -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center pt-8">
      <div class="lg:col-span-6 order-2 lg:order-1 space-y-6">
        <div class="w-12 h-12 rounded-full bg-[#E5DFD3] flex items-center justify-center text-stone-700">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 00-9.78 2.096A4.001 4.001 0 003 15z"/></svg>
        </div>
        <h2 class="font-serif text-4xl sm:text-5xl text-stone-900 font-normal">
          Outdooor
        </h2>
        <p class="text-stone-600 text-base leading-relaxed">
          A leafy open-air spot for sunny mornings and slow evenings. Nikmati semilir angin sejuk Bandung dengan latar belakang dinding roster artistik yang teduh dan asri.
        </p>
        <div class="pt-4 border-t border-stone-200">
          <span class="text-[11px] uppercase tracking-[0.2em] text-stone-400 font-semibold">
            SUNNY MORNINGS · SLOW EVENINGS
          </span>
        </div>
      </div>
      <div class="lg:col-span-6 order-1 lg:order-2">
        <div class="overflow-hidden rounded-sm shadow-md border border-stone-200 bg-white p-2">
          <img src="<?php echo asset('assets/img/gallery-patio.jpg'); ?>" alt="Outdoor Seating Area" class="w-full h-80 sm:h-96 object-cover">
        </div>
      </div>
    </div>

    <!-- INSIDE THE CORNER: 4 SPACES GRID -->
    <div class="space-y-8 pt-16 border-t border-stone-200">
      <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div class="section-eyebrow">
          INSIDE THE CORNER
        </div>
        <div class="text-[11px] uppercase tracking-widest text-stone-500">
          MORE SPACES TO EXPLORE
        </div>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <div class="overflow-hidden rounded-sm shadow-xs border border-stone-200 group cursor-pointer gallery-trigger" data-img="<?php echo asset('assets/img/gallery-window-seating.jpg'); ?>">
          <img src="<?php echo asset('assets/img/gallery-window-seating.jpg'); ?>" alt="Window Tables" class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-105">
          <div class="p-4 bg-white flex items-center justify-between">
            <span class="text-xs font-serif text-stone-800">Warm Window Table</span>
            <span class="text-[10px] text-stone-400 uppercase tracking-widest font-mono">SPACE 01</span>
          </div>
        </div>

        <div class="overflow-hidden rounded-sm shadow-xs border border-stone-200 group cursor-pointer gallery-trigger" data-img="<?php echo asset('assets/img/gallery-pickup-counter.jpg'); ?>">
          <img src="<?php echo asset('assets/img/gallery-pickup-counter.jpg'); ?>" alt="Pickup Counter" class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-105">
          <div class="p-4 bg-white flex items-center justify-between">
            <span class="text-xs font-serif text-stone-800">Barista & Pickup Counter</span>
            <span class="text-[10px] text-stone-400 uppercase tracking-widest font-mono">SPACE 02</span>
          </div>
        </div>

        <div class="overflow-hidden rounded-sm shadow-xs border border-stone-200 group cursor-pointer gallery-trigger" data-img="<?php echo asset('assets/img/gallery-wooden-tables.jpg'); ?>">
          <img src="<?php echo asset('assets/img/gallery-wooden-tables.jpg'); ?>" alt="High Wood Bar" class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-105">
          <div class="p-4 bg-white flex items-center justify-between">
            <span class="text-xs font-serif text-stone-800">High Wood Stools & Outlets</span>
            <span class="text-[10px] text-stone-400 uppercase tracking-widest font-mono">SPACE 03</span>
          </div>
        </div>

        <div class="overflow-hidden rounded-sm shadow-xs border border-stone-200 group cursor-pointer gallery-trigger" data-img="<?php echo asset('assets/img/gallery-patio.jpg'); ?>">
          <img src="<?php echo asset('assets/img/gallery-patio.jpg'); ?>" alt="Patio Benches" class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-105">
          <div class="p-4 bg-white flex items-center justify-between">
            <span class="text-xs font-serif text-stone-800">Covered Patio Seating</span>
            <span class="text-[10px] text-stone-400 uppercase tracking-widest font-mono">SPACE 04</span>
          </div>
        </div>
      </div>
    </div>

    <!-- BOTTOM CALLOUT BANNER (Warm Sand) -->
    <div class="bg-[#E7DDCF] p-8 sm:p-12 rounded-sm border border-[#DACFBF] flex flex-col md:flex-row items-center justify-between gap-6 shadow-xs">
      <div class="space-y-2 text-center md:text-left">
        <div class="section-eyebrow text-stone-700">
          GOOD COMPANY
        </div>
        <h3 class="font-serif text-3xl sm:text-4xl text-stone-900 font-normal">
          A little space for your gathering.
        </h3>
        <p class="text-stone-600 text-xs sm:text-sm max-w-lg">
          Menerima sewa tempat untuk arisan, workshop, rapat komunitas, ulang tahun, atau pemotretan.
        </p>
      </div>

      <div class="shrink-0">
        <a href="https://wa.me/628267254751845?text=Halo%20Vee'n%20Dee,%20saya%20ingin%20bertanya%20tentang%20sewa%20tempat%20untuk%20acara%20privat" target="_blank" rel="noopener" class="btn-dark">
          <span>ASK ABOUT PRIVATE EVENTS</span>
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </a>
      </div>
    </div>

  </div>
</section>

<?php require base_path('includes/footer.php'); ?>
