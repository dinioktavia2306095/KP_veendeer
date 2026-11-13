<?php
$page_title = 'Full Menu';
require base_path('includes/header.php');
?>

<main class="min-h-screen bg-[#FAF6F0] px-4 py-10 sm:px-6 lg:px-8">
  <div class="mx-auto max-w-5xl space-y-6">
    <div class="flex items-center justify-between gap-4">
      <h1 class="font-serif text-3xl text-stone-900 sm:text-4xl">Full Menu</h1>
      <a href="<?php echo route('menu'); ?>" class="btn-dark">BACK TO MENU</a>
    </div>
    <img
      src="/assets/img/full-menu.jpg"
      alt="Vee and Dee Corner full cafe menu"
      class="mx-auto h-auto w-full rounded-sm shadow-lg"
    >
  </div>
</main>

<?php require base_path('includes/footer.php'); ?>
