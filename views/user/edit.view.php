<?php require_once(base_path("views/partials/head.view.php")); ?>
<?php require_once(base_path("views/partials/nav.view.php")); ?>
<?php require_once(base_path("views/partials/banner.view.php")); ?>

  
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 flex justify-center">

        <form method="post">
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Note Title</label>
                <div class="mt-2">
                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                    <input style="width:450px" type="text" name="title" id="title" autocomplete="title" value="<?=$note['title'] ?? ""?>" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                    
                    </div>
                    <div class="text-red-600 text-xs mt-1"><?=isset($errors['title']) ? $errors['title'] : ""  ?> </div>
                </div>
                </div>

                <div class="col-span-full">
                <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                <div class="mt-2">
                    <textarea style="width:450px" id="body" name="body" rows="3" class="block  rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder=""> <?=$note['body'] ?? ""?></textarea>
                
                </div>
                <div class="text-red-600 text-xs mt-1"><?=isset($errors['body']) ? $errors['body'] : "" ?></div>
                </div>                
        </div>

        <div style="width: 450px;" class="mt-6 flex items-center justify-end  gap-x-6">
            <button type="reset" class="text-sm font-semibold leading-6 text-gray-900"><a href="/notes">Cancel</a></button>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
        </div>

        <input type="text" name="_method" value="PATCH" id="" hidden>
        <input type="text" name="id" value="<?=$note['id']?>" hidden>
        </form>

    </div>
</main>
<?php require_once(base_path("views/partials/footer.view.php")); ?>