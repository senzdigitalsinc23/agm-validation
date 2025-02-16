<?php require_once(base_path("views/partials/head.view.php")); ?>
<?php //require_once(base_path("views/partials/nav.view.php")); ?>
<?php require_once(base_path("views/partials/banner.view.php")); ?>

  
<div class="d-flex mx-auto border p-5 row align-items-center bg-white w-300 mt-5 shadow" style=" border-radius: 20px">
    <form method="post" action="/updatepasswd">
      <h1 class="text-center">Reset Account Password</h1>
      <div class="text-danger py-2"><?=isset($errors['username']) ? $errors['username'] : ""  ?> </div>
      <!-- Email input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="username">Username</label>
        <input type="text" id="username" name="username" class="form-control" value="<?=$_SESSION['USER']['username'] ?? '' ?>" disabled/>
        
      </div>

      <!-- Password input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="password">New Password</label>
        <input type="password" name="password" id="password" class="form-control" value="<?=$data['password'] ?? '' ?>" required/>        
      </div>

      <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="password">Confirm Password</label>
        <input type="password" name="confirm" id="confirm" class="form-control" value="<?=$data['confirm'] ?? '' ?>" required/>        
      </div>

      <!-- Submit button -->
      <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Change Password</button>

   
    </form>
</div>

<?php require_once(base_path("views/partials/footer.view.php")); ?>
