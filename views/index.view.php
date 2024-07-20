
<?php require_once("partials/head.view.php"); ?>
<?php require_once("partials/nav.view.php"); ?>
<?php require_once("partials/banner.view.php"); ?>

  
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      Hello <?=$_SESSION['USER']['username'] ?? ""?>, Welcome to the Home page of simple PHP Learn
    </div>
  </main>


	<?php require_once("partials/footer.view.php"); ?>