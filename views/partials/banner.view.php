<?php use Core\Auth ?>

<header class="d-flex bg-white shadow mb-2 w-100">
    <div class="d-flex max-w-7xl px-5 py-3 sm:px-6 lg:px-8 w-100">
      <?php if(date('d') < 12 && Auth::logged_in() && $header != "Dashboard") : ?>
        <div><h1 class="text-3xl banner font-bold tracking-tight text-gray-900 text-danger"><?=$header?> Not Due <strong>(Validation Starts from 12th December - 15th Dec) </strong></h1></div>
      <?php else : ?>
          <div class="d-flex w-100"><h1 class="text-3xl banner font-bold tracking-tight text-gray-900"><?=$header?></h1></div>
          <div class="d-flex justify-content-end w-100 text-bolder"><div class="float-end"><?//=Auth::logged_in() ? Auth::dateInDays(date('Y-M-d h:m:s')) : "";?></div> </div>
      <?php endif ?>      
    </div>
</header>