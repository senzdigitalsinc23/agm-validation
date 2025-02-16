<?php require_once(base_path("views/partials/head.view.php")); ?>
<?php //require_once(base_path("views/partials/nav.view.php")); ?>
<?php require_once(base_path("views/partials/banner.view.php")); ?>

  
<div class="d-flex mx-auto border p-5 row align-items-center bg-white w-500 mt-5 shadow" style=" border-radius: 20px">
    <div class="mb-5"><strong>We Noticed this is your first access to the system. We recommend you change your password for security reasons. Thank you. </strong></div>
    
    <div class="mb-3"><strong>CONFIRM YOUR DETAILS AND CLICK NEXT</strong></div>
    <div><strong>Username:</strong> <?=$staff['username']?></div>
    <div><strong>Full Name:</strong> <?=$staff['name']?></div>
    <div><strong>Grade:</strong> <?=$staff['grade']?></div>
    <div><strong>Unit:</strong> <?=$staff['unit']?></div>

    <div class="mt-5"><a href="/updatepasswd"><button class="btn btn-primary">Next</button></a></div>
</div>

<?php require_once(base_path("views/partials/footer.view.php")); ?>
