<?php require_once(base_path("views/partials/head.view.php")); ?>
<?php require_once(base_path("views/partials/nav.view.php")); ?>
<?php require_once(base_path("views/partials/banner.view.php")); ?>

  
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <div>
      <ul>
        <?php foreach($notes as $note) :?>
            <li>
              <a href="/note?id=<?=esc($note['id'])?>" class="text-blue-500 hover:underline"><?=esc($note['title'])?></a> 
          </li> 
            
        <?php endforeach ?>
      </ul>

      <br>
      <p>
        <a href="/note/create" class="text-blue-700 hover:underline font-style-italics">Create note</a>
      </p>
        
    </div>
    </div>
  </main>


<?php require_once(base_path("views/partials/footer.view.php")); ?>