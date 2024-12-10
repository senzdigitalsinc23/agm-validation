<?php require_once(base_path("views/partials/head.view.php")); ?>
<?php require_once(base_path("views/partials/nav.view.php")); ?>
<?php require_once(base_path("views/partials/banner.view.php")); ?>

  
<div class="justify-content-center ">
    <div class="container-fluid w-900 bg-white p-3 rounded-4 shadow">  
        <form action="" method="GET">
            <div class="d-flex">
                
                <input type="text" id="user" class="form-control w-200 h-30" name="name" value="<?=$_GET['name'] ?? ''?>" required>
                <input type="hidden" name="page" value="1">
                <button type="submit" class="btn btn-success btn-sm h-30 ms-3 mb-3" name="search" value="1">Search</button> 
                <a href="/user" class="btn btn-danger btn-sm h-30 ms-3 mb-3">Reset</a>
            </div>    
         
        </form>
    <?php if (isset($_SESSION['USER']) && $_SESSION['USER']['rank'] === 'Admin') : ?>
        <a href="/validations" class="text-white text-decoration-none"><button type="button" class="btn btn-primary btn-sm ms-2 mb-2 d-flex float-end"><<< Back</button></a>
    <?php endif ?>
    <table class="table table-striped table-bordered table-sm">
    <tr class="table-primary table-dark">
        <th>#</th>
        <th>Staff ID</th>
        <th>Name</th>
        <th>Grade</th>
        <th>Telephone</th>
        <th>Status</th>
        <?php if(date('d') >= 12) : ?>
            <th>Remarks</th>
	        <th>At Post?</th>
        <?php endif ?>
    </tr><?//=dd($data);?>
   
    <?php foreach($data as $dat) : ?>
       
        <tr>
            <td style="width: 50px;"><?=$count ?></td>
            <?php if ($dat['staff_id'] === null) :?>
                <td class="text-danger">N/A</td>
            <?php else  : ?>
                <td><?=esc($dat['staff_id']) ?></td>
            <?php endif ?>

            <td><?=$dat['fname'] ?> <?=$dat['oname'] ?> <?=$dat['lname'] ?></td>
            <?php if ($dat['grade'] === null) :?>
                <td class="text-danger">N/A</td>
            <?php else  : ?>
                <td><?=esc($dat['grade']) ?></td>
            <?php endif ?>
            <?php if ($dat['phone'] === null) :?>
                <td class="text-danger">N/A</td>
            <?php else  : ?>
                <td><?=esc($dat['phone']) ?></td>
            <?php endif ?>
            <?php if (!isset($dat['status']) || $dat['status'] === null) :?>
                <td class="text-danger">N/A</td>
            <?php else  : ?>
                <?php if($dat['status'] === 1) : ?>
                    <td>At Post</td>
                <?php else : ?>
                    <td>Not At Post</td>
                <?php endif ?>
            <?php endif ?>

            <?php if($dat['status'] !== 0 && $dat['status'] !== 1) : ?>
                <?php if(date('d') >= 12) : ?>
                    <form method="post">
                        <td>                            
                            <textarea name="remarks" id="remarks" class="rounded" rows="1"><?=isset($remarks) ?? "" ?></textarea>
                            <input type="hidden" name="staff_id" id="staff_id" value="<?=$dat['staff_id'] ?? 'N/A'?>" >
                            <input type="hidden" name="user_id" id="user_id" value="<?=$dat['id'] ?? 'N/A'?>">
                        </td>
                        
                        <td><input type="submit" name="yes" value="Yes" class="btn btn-sm btn-primary">
                        <input type="submit" name="no" value="No" class="btn btn-sm text-white bg-danger"></td>
                    </form>              
                <?php endif ?>               

            <?php elseif (date('d') <= 14 && ($dat['status'] == 0 || $dat['status'] == 1)) : ?>
                <td class="text-success"><?=$dat['remarks']?></td>
                <td>
                   
                    <form action="/unvalidate" method="post"><?=$dat['staff_type']?>
                        <input type="text" name="staff_id" value="<?=$dat['staff_id']?>" hidden>
                        <input type="submit" value="Unvalidate" class="btn btn-sm btn-danger">
                    </form>
                </td>
            <?php else : ?>
                <td class="text-success"><?=$dat['remarks']?></td>
            <?php endif ?>
            
        </tr>
    <?php $count++?>
    <?php endforeach ?>
    </table>

    <form method="get">
    <div class="d-flex justify-content-center">
        
        <input type="hidden" name="name" value="<?=$_SESSION['SEARCH']['name'] ?? ''?>">
        <input type="hidden" name="search" value="1">
        
            <?php if($total_pages > 1) : ?>
                <?php if($page <= 1) : ?>             
                    <button class="btn btn-sm btn-primary mb-5" name="page" disabled>Previous</button>
                <?php else : ?>                
                    <button class="btn btn-sm btn-primary mb-5" name="page" value="<?=--$page ?>" >Previous</button>   
                <?php endif ?> 

                <div class="me-2 ms-2 ">
                    <button class="btn btn-sm btn-succes mb-5" name="page" value="1" >First page</button>
                    <?php if(isset($_GET['page']) && $_GET['page'] == 1) : ?>
                        <div class="btn btn-sm btn-succuss mb-5" name="page" value="1" > <strong><i> <?=$_GET['page'] ?? 1?> - <?=--$count?> of <?=$total_records ?> </i></strong></div> 
                    <?php else : ?>
                        <div class="btn btn-sm btn-succuss mb-5"><strong><i>  <?=isset($_GET['page']) ? $_GET['page'] - 1 . 1 : 1 ?> - <?=--$count?> of <?=$total_records ?> </i></strong></div> 
                    <?php endif ?>                   
                       
                        <!-- <?php if(isset($_GET['page']) && $a == $_GET['page']) : ?>
                            <div class="btn btn-sm btn-danger mb-5" name="page" value="<?=$page=$a?>"> <?=$a?></div> 
                        <?php else : ?>
                            <button class="btn btn-sm btn-succes mb-5" name="page" value="<?=$page=$a?>" ><?=$a?></button>
                        <?php endif ?> -->
                    <button class="btn btn-sm btn-succes mb-5" name="page" value="<?=$total_pages?>" >Last page</button>
                    
                    
                </div>

                <?php if(isset($_GET['page']) && $_GET['page'] >= $total_pages) : ?>              
                    <button class="btn btn-sm btn-primary mb-5" name="page" disabled>Next</button>
                <?php else : ?>
                    <button class="btn btn-sm btn-primary mb-5" name="page" value="<?=$page = isset($_GET['page']) ? $_GET['page'] + 1 : 2;?>" >Next</button>
                    
                <?php endif ?> 
            <?php endif ?>
        
            
    </div>
    <div class="d-flex justify-content-center text-aliceblue"><strong><i>Page <?=isset($_GET['page']) ? $_GET['page'] : 1 ?> of <?=$total_pages?></i></strong> </div>
    </form>
    
    </div>
</div>

<?php 
use Core\Session;

Session::unflash(['errors', 'data']);
//dd($_SESSION);
?>

<?php require_once(base_path("views/partials/footer.view.php")); ?>