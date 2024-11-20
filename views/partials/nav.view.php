
<nav class="navbar navbar-expand-lg navbar-white bg-brown nav">
  <div class="container-fluid">
    <a class="navbar-brand" href="/user">
      <img src="images/ghs-logo.jpg" style="width: 50;border-radius: 500px"  alt="GHS logo">
      
    </a>
    <div class="d-block">
      <div class="text-orange"><strong>ID: <?=$_SESSION['USER']['username']?></strong> </div>
      <div class="text-orange"><strong>Name: <?=$_SESSION['USER']['lname']?> <?=$_SESSION['USER']['fname']?></strong> </div>
      <div class="text-orange"><strong>Unit: <?=$_SESSION['USER']['unit_name']?></div></strong>
    </div>
    

      <?php if(authenticated()) :?>
        <form class="d-flex justify-content-end" method="get" action="/logout">
          
          
          <div class="d-block">
            <a href="/updatepasswd" class="btn">Change Password</a>
            <button class="btn btn-light" type="submit">Logout</button>
            
          </div>
        </form>
      <?php endif ?>
    </div>
  </div>
</nav>