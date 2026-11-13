<?php
$page_title = 'Gallery — Scenes from the corner';
require base_path('includes/header.php');
require base_path('includes/data.php');

$gallery_items = [
    [
        'title' => 'A Cup of Americano',
        'category' => 'ambiance',
        'image' => 'assets/img/gallery-americano.jpg',
        'desc' => 'A refreshing iced Americano, served just the way you like it.',
    ],
    [
        'title' => 'Burger & Crispy Fries',
        'category' => 'food',
        'image' => 'assets/img/gallery-burger.jpg',
        'desc' => 'A hearty burger and golden fries, fresh from the kitchen.',
    ],
    [
        'title' => 'Butterscotch Cream',
        'category' => 'drinks',
        'image' => 'assets/img/gallery-butterscotch.jpg',
        'desc' => 'A creamy, sweet drink topped with a delicate crunch.',
    ],
    [
        'title' => 'Cappuccino with Latte Art',
        'category' => 'coffee',
        'image' => 'assets/img/gallery-cappuccino.jpg',
        'desc' => 'A classic cappuccino finished with silky milk foam.',
    ],
    [
        'title' => 'Choosing from the Menu',
        'category' => 'ambiance',
        'image' => 'assets/img/gallery-ordering.jpg',
        'desc' => 'A little time with the menu before the next order.',
    ],
    [
        'title' => 'The Pickup Counter',
        'category' => 'ambiance',
        'image' => 'assets/img/gallery-pickup-counter.jpg',
        'desc' => 'A familiar corner of the cafe, ready for your order.',
    ],
    [
        'title' => 'Behind the Espresso Machine',
        'category' => 'coffee',
        'image' => 'assets/img/gallery-espresso-machine.jpg',
        'desc' => 'Our barista preparing each cup with care.',
    ],
    [
        'title' => 'Pouring a Latte',
        'category' => 'coffee',
        'image' => 'assets/img/gallery-latte-pouring.jpg',
        'desc' => 'Steamed milk meets espresso in a fresh cup.',
    ],
    [
        'title' => 'Latte Art in the Making',
        'category' => 'coffee',
        'image' => 'assets/img/gallery-latte-art-pouring.jpg',
        'desc' => 'A close-up of the careful final pour.',
    ],
    [
        'title' => 'A Freshly Made Latte',
        'category' => 'coffee',
        'image' => 'assets/img/gallery-signature-latte.jpg',
        'desc' => 'A cup of coffee made to slow the day down.',
    ],
    [
        'title' => 'Good Food, Good Company',
        'category' => 'ambiance',
        'image' => 'assets/img/gallery-table-gathering.jpg',
        'desc' => 'Drinks and comfort food shared around the table.',
    ],
    [
        'title' => 'At the Service Counter',
        'category' => 'ambiance',
        'image' => 'assets/img/gallery-service-counter.jpg',
        'desc' => 'A welcoming view from the heart of the cafe.',
    ],
    [
        'title' => 'Inside Vee’n Dee Corner',
        'category' => 'ambiance',
        'image' => 'assets/img/gallery-cafe-interior.jpg',
        'desc' => 'Warm wood tones and a relaxed place to settle in.',
    ],
    [
        'title' => 'A Seat on the Patio',
        'category' => 'ambiance',
        'image' => 'assets/img/gallery-patio.jpg',
        'desc' => 'An easygoing spot to gather and stay awhile.',
    ],
    [
        'title' => 'Window-side Seating',
        'category' => 'ambiance',
        'image' => 'assets/img/gallery-window-seating.jpg',
        'desc' => 'Take in the evening view from the bar.',
    ],
    [
        'title' => 'A Table for Two',
        'category' => 'ambiance',
        'image' => 'assets/img/gallery-wooden-tables.jpg',
        'desc' => 'A cozy place for coffee, conversation, or a quiet break.',
    ],
    [
        'title' => 'A Quiet Indoor Corner',
        'category' => 'ambiance',
        'image' => 'assets/img/gallery-indoor-seating.jpg',
        'desc' => 'Settle into a comfortable seat and take your time.',
    ],
    [
        'title' => 'Crispy Mushroom Bites',
        'category' => 'food',
        'image' => 'assets/img/gallery-crispy-mushroom.jpg',
        'desc' => 'Golden, crunchy mushroom bites with a savory dip.',
    ],
    [
        'title' => 'Nasi Goreng',
        'category' => 'food',
        'image' => 'assets/img/gallery-nasi-goreng.jpg',
        'desc' => 'A comforting plate of Indonesian fried rice.',
    ],
    [
        'title' => 'Ube Matcha Cloud',
        'category' => 'drinks',
        'image' => 'assets/img/gallery-ube-matcha.jpg',
        'desc' => 'A creamy layered drink with purple ube and matcha.',
    ],
];
?>

<!-- GALLERY HERO -->
<section class="py-20 bg-[#FAF6F0] min-h-screen">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
    
    <!-- Breadcrumb & Header -->
    <div class="space-y-6 pb-10 border-b border-stone-200">
      <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div class="section-eyebrow">
          SCENES FROM THE CORNER
        </div>
        <div class="text-[11px] uppercase tracking-widest text-stone-500">
          <a href="index.php" class="hover:text-stone-900">HOME</a> / <span class="text-stone-900 font-semibold">GALLERY</span>
        </div>
      </div>

      <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-8 pt-4">
        <div class="max-w-2xl space-y-4">
          <h1 class="font-serif text-5xl sm:text-6xl text-stone-900 font-normal leading-tight">
            Little moments,<br>well spent.
          </h1>
          <p class="text-stone-600 text-sm sm:text-base leading-relaxed">
            Every cup poured, every corner settled into, every conversation shared. A visual glimpse into everyday life at Vee'n Dee Corner.
          </p>
        </div>

        <div>
          <a href="<?php echo $cafe_info['instagram_link']; ?>" target="_blank" rel="noopener" class="btn-dark">
            <span>FOLLOW @VEENDEE.CORNER</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
          </a>
        </div>
      </div>
    </div>

    <!-- Gallery Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      <?php foreach ($gallery_items as $item) { ?>
        <div class="bg-white border border-stone-200 rounded-sm overflow-hidden shadow-xs hover:shadow-lg transition-all duration-300 group cursor-pointer gallery-trigger flex flex-col justify-between" data-img="<?php echo asset($item['image']); ?>">
          <div class="relative h-60 overflow-hidden bg-stone-900">
            <img src="<?php echo asset($item['image']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
            <div class="absolute inset-0 bg-black/30 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-white">
              <span class="text-[10px] uppercase tracking-widest font-semibold border border-white/60 px-3 py-1.5 rounded-xs backdrop-blur-xs">VIEW FULL</span>
            </div>
          </div>
          <div class="p-4 space-y-1">
            <h4 class="font-serif text-lg text-stone-900 font-normal leading-snug">
              <?php echo htmlspecialchars($item['title']); ?>
            </h4>
            <p class="text-xs text-stone-500 line-clamp-2">
              <?php echo htmlspecialchars($item['desc']); ?>
            </p>
          </div>
        </div>
      <?php } ?>
    </div>

  </div>
</section>

<?php require base_path('includes/footer.php'); ?>
