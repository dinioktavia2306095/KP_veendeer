<?php
/**
 * Header Component for Vee'n Dee Corner
 */
require __DIR__.'/data.php';

// Detect active page
$route_name = request()->route()?->getName();
$current_page = $route_name ? explode('.', $route_name)[0] : basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo isset($page_title) ? htmlspecialchars($page_title)." — Vee'n Dee Corner" : "Vee'n Dee Corner — Coffee & Space Bandung"; ?></title>
  <meta name="description" content="A warm little corner made for slow coffee, comforting plates, and conversations that run long. Jl. Gegerkalong Girang No.149, Bandung.">
  
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            cream: '#FAF6F0',
            'cream-dark': '#EFE7DA',
            sand: '#E3D9C9',
            sage: '#6E7B68',
            'sage-dark': '#586453',
            'sage-bg': '#74826E',
            charcoal: '#18191A',
            'charcoal-card': '#222426',
            'charcoal-border': '#313437',
            'charcoal-light': '#2A2D30',
          },
          fontFamily: {
            serif: ['Cormorant Garamond', 'Georgia', 'serif'],
            sans: ['Plus Jakarta Sans', 'system-ui', 'sans-serif'],
            script: ['Caveat', 'cursive'],
          }
        }
      }
    }
  </script>
  
  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  
  <link rel="icon" type="image/png" href="assets/img/logo-circular.png">
</head>
<body class="bg-cream text-stone-900 antialiased selection:bg-sage selection:text-white">

  <!-- Main Navigation Bar -->
  <header class="nav-header">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-20">
        
        <!-- Brand Logo -->
        <a href="index.php" class="flex items-center gap-3.5 group text-decoration-none">
          <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center p-1 overflow-hidden shrink-0 transition-transform group-hover:scale-105">
            <img src="assets/img/logo-circular.png" alt="VND" class="w-full h-full object-contain">
          </div>
          <div class="flex flex-col">
            <span class="font-serif text-lg tracking-wider text-white font-medium group-hover:text-amber-100 transition-colors">Vee'n Dee Corner</span>
            <span class="text-[9px] uppercase tracking-[0.25em] text-stone-400 font-sans -mt-1">COFFEE & SPACE</span>
          </div>
        </a>

        <!-- Desktop Navigation Links -->
        <nav class="hidden md:flex items-center space-x-8">
          <a href="index.php" class="nav-link <?php echo $current_page === 'index' ? 'active' : ''; ?>">HOME</a>
          <a href="menu.php" class="nav-link <?php echo $current_page === 'menu' ? 'active' : ''; ?>">MENU</a>
          <a href="facilities.php" class="nav-link <?php echo $current_page === 'facilities' ? 'active' : ''; ?>">FACILITIES</a>
          <a href="gallery.php" class="nav-link <?php echo $current_page === 'gallery' ? 'active' : ''; ?>">GALLERY</a>
          <a href="event.php" class="nav-link <?php echo $current_page === 'event' ? 'active' : ''; ?>">EVENT</a>
          <a href="contact.php" class="nav-link <?php echo $current_page === 'contact' ? 'active' : ''; ?>">CONTACT</a>
        </nav>

        <!-- Right Action Button -->
        <div class="hidden md:flex items-center gap-4">
          <a href="contact.php" class="text-xs uppercase tracking-widest text-stone-300 hover:text-white flex items-center gap-1.5 transition-colors">
            <span>PLAN A VISIT</span>
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
          </a>
        </div>

        <!-- Mobile Menu Toggle Button -->
        <div class="flex md:hidden">
          <button id="mobileMenuToggle" type="button" class="text-stone-300 hover:text-white focus:outline-none p-2" aria-label="Toggle Menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
          </button>
        </div>

      </div>
    </div>

    <!-- Mobile Drawer Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-[#18191A] border-b border-stone-800 px-6 pt-3 pb-6 space-y-4">
      <a href="index.php" class="block text-sm font-semibold uppercase tracking-widest text-stone-300 hover:text-white py-2 border-b border-stone-800/60 <?php echo $current_page === 'index' ? 'text-amber-100 font-bold' : ''; ?>">Home</a>
      <a href="menu.php" class="block text-sm font-semibold uppercase tracking-widest text-stone-300 hover:text-white py-2 border-b border-stone-800/60 <?php echo $current_page === 'menu' ? 'text-amber-100 font-bold' : ''; ?>">Menu</a>
      <a href="facilities.php" class="block text-sm font-semibold uppercase tracking-widest text-stone-300 hover:text-white py-2 border-b border-stone-800/60 <?php echo $current_page === 'facilities' ? 'text-amber-100 font-bold' : ''; ?>">Facilities</a>
      <a href="gallery.php" class="block text-sm font-semibold uppercase tracking-widest text-stone-300 hover:text-white py-2 border-b border-stone-800/60 <?php echo $current_page === 'gallery' ? 'text-amber-100 font-bold' : ''; ?>">Gallery</a>
      <a href="event.php" class="block text-sm font-semibold uppercase tracking-widest text-stone-300 hover:text-white py-2 border-b border-stone-800/60 <?php echo $current_page === 'event' ? 'text-amber-100 font-bold' : ''; ?>">Event</a>
      <a href="contact.php" class="block text-sm font-semibold uppercase tracking-widest text-stone-300 hover:text-white py-2 <?php echo $current_page === 'contact' ? 'text-amber-100 font-bold' : ''; ?>">Contact</a>
      <div class="pt-2">
        <a href="contact.php" class="btn-primary w-full justify-center text-center">PLAN A VISIT →</a>
      </div>
    </div>
  </header>
