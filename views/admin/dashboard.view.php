<?php require_once(base_path("views/partials/head.view.php")); ?>
<?php require_once(base_path("views/partials/nav.view.php")); ?>
<?php require_once(base_path("views/partials/banner.view.php")); ?>

<div class="d-block ">
    <div class="container-fluid w-900 bg-white p-3 rounded-4 shadow">    
     <form  method="get" class="d-block w-100" id="myForm">
        <div class="d-flex">  
            <select id="unit" class="form-control w-200 h-30" name="unit">  
                     
                <option value="all">All Units</option> 
                
                <?php if(isset($_SESSION['_flash']['unit'])) : ?>
                    <option value="<?=$_SESSION['_flash']['unit']?>" selected> <?=$_SESSION['_flash']['unit_name']?>  </option>
                <?php else : ?>
                    <option value="all" selected>All Units</option> 
                <?php endif ?>

                <?php foreach($units as $unit) : ?>
                    <?php if($_SESSION['_flash']['unit'] !== $unit['unit']) : ?>
                        <option value="<?=$unit['unit_id']?>"> <?=$unit['unit_name']?> </option>
                    <?php endif ?>
                <?php endforeach ?>
                
            </select>
            
            <select id="status" class="form-control w-200 h-30 ms-2" name="status">
                <option value="all" >Select Status</option>
                
                <?php if(isset($_SESSION['_flash']['status']) && $_SESSION['_flash']['status'] == 1) : ?>
                    <option value="<?=$_SESSION['_flash']['status']?>" selected> <?=$_SESSION['_flash']['status'] == 1 ? "At Post" : "Not At Post"?> </option>
                    <option value="0">Not At Post</option>
                <?php elseif(isset($_SESSION['_flash']['status']) && $_SESSION['_flash']['status'] == 0) : ?>
                    <option value="1">At Post</option>
                    <option value="<?=$_SESSION['_flash']['status']?>" selected> <?=$_SESSION['_flash']['status'] == 1 ? "At Post" : "Not At Post"?> </option>
                <?php else : ?>
                    <option value="1">At Post</option>
                    <option value="0">Not At Post</option>
                <?php endif ?>
                    
                    
            </select>
        
            <button type="submit" class="btn btn-success btn-sm h-30 ms-3 mb-3" name="page" value="1">Search</button>            
        </div>

         <div class="d-flex float-end">
            <a href="/user" class="text-white text-decoration-none"><button type="button" class="form-control btn btn-primary btn-sm ms-2 mb-2 ">Validate</button></a>
        </div>

        <div class="d-flex">
            <button type="submit" class="btn btn-success h-10 w-150 btn-sm border-0" name="excel" value="1"><img width="20" src="images/icons/download.svg" alt="" class="me-1">Excel</button>            
            <button target="_blank" rel="noopener noreferrer" class="btn btn-success h-10 btn-sm ms-2 w-150 bg-brown border-0" name="pdf" value=1><img width="20" src="images/icons/download.svg" alt="" class="me-1">PDF</>
        </div>
<div class="d-block justify-content-center ms-1 ">    

    <table class="table table-striped table-bordered table-sm mt-3">
    <tr>
       
    </tr>
    <tr class="table-primary table-dark">
        <th>#</th>
        <th>Staff ID</th>
        <th>Name</th>
        <th>Grade</th>
        <th>Telephone</th>
        <th>Status</th>
        <th>Remarks</th>
        <th>Unit</th>
    </tr>
    <?php foreach($data as $dat) : ?>
        <tr>
            <td style="width: 50px;"><?=$count?></td>
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
                <td class="text-danger">Unvalidated</td>
            <?php else  : ?>
                <?php if($dat['status'] === 1) : ?>
                    <td>At Post</td>
                <?php else : ?>
                    <td>Not At Post</td>
                <?php endif ?>
            <?php endif ?>

            <td><?=$dat['remarks'] ?? "" ?></td>
            <td><?=$dat['unit_name'] ?? "" ?></td>
            
        </tr>
    <?php $count++?>
    <?php endforeach ?>

        
    </table>
    <div class="d-flex justify-content-center">
            <?php if($total_pages > 1) : ?>
                <?php if($page <= 1) : ?>             
                    <button class="btn btn-sm btn-primary mb-5" name="page" disabled>Previous</button>
                <?php else : ?>                
                    <button onclick="getdata()" class="btn btn-sm btn-primary mb-5" name="page" value="<?=--$page ?>" >Previous</button>   
                <?php endif ?> 

                <div class="me-2 ms-2 ">
                    <button class="btn btn-sm btn-succes mb-5" name="page" value="1" >First page</button>
                    <?php if(isset($_GET['page']) && $_GET['page'] == 1) : ?>
                        <div class="btn btn-sm btn-succuss mb-5" name="page" value="1" > <strong><i> <?=$_GET['page'] ?? 1?> - <?=--$count?> of <?=$total_records ?> </i></strong>  </div> 
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
                    <button class="btn btn-sm btn-primary mb-5"disabled>Next</button>
                <?php else : ?>
                    <button onclick="" class="btn btn-sm btn-primary mb-5" name="page" value="<?=$page = isset($_GET['page']) ? $_GET['page'] + 1 : 2;?>" >Next</button>                    
                <?php endif ?> 
            <?php endif ?>
        
            
    </div>
    <div class="d-flex justify-content-center text-aliceblue"><strong><i>Page <?=isset($_GET['page']) ? $_GET['page'] : 1 ?> of <?=$total_pages?></i></strong> </div>
</form>

</div>
     
</div>

<?php

unset($_SESSION['_flash']);
//dd($_SESSION);

?>                  
<?php require_once(base_path("views/partials/footer.view.php")); ?>


