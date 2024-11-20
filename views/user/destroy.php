<?php require_once(base_path("views/partials/head.view.php")); ?>
<?php require_once(base_path("views/partials/nav.view.php")); ?>
<?php require_once(base_path("views/partials/banner.view.php")); ?>
  
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <div>
          <form  method="post" class="mt-5">
            <input type="text" name="_method" value="DELETE" id="" hidden>
            <input type="text" name="id" value="<?=$note['id']?>" hidden>
            <button class="text-white pe-4 ps-4 pt-2 pb-2 rounded bg-red-700 text-xs">Delete</button>
          </form>
    </div>
    </div>
  </main>


<?php require_once(base_path("views/partials/footer.view.php")); ?>