<header class="bg-white shadow mb-2">
    <div class="mx-auto max-w-7xl px-5 py-3 sm:px-6 lg:px-8 d-flex w-100">
      <?php if(date('d') < 15) : ?>
        <h1 class="text-3xl banner font-bold tracking-tight text-gray-900 text-danger"><?=$header?> Not Due</h1>
      <?php else : ?>
        <h1 class="text-3xl banner font-bold tracking-tight text-gray-900"><?=$header?></h1>
      <?php endif ?>
      
    </div>
  </header>