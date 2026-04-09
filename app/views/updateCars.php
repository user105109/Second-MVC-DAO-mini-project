<?php
$title = "Update Car";

ob_start();
?>

<form action="index.php?page=update&id=<?php echo $id ?>" method="post" class="mt-5 mx-auto space-y-4 rounded-lg border border-gray-300 bg-gray-100 p-6">
    <div>
        <label class="block text-sm font-medium text-gray-900" for="model">Model</label>

        <input class="p-3 mt-1 w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:outline-none" name="model" id="model" type="text" placeholder="<?= $updatedCar['model'] ?>">
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-900" for="price">Prix</label>

        <input class="p-3 mt-1 w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:outline-none" id="price" name="price" type="number" placeholder="<?= $updatedCar['prix'] ?>">
    </div>



    <button class="block max-w-sm rounded-lg border border-indigo-600 bg-indigo-600 px-12 py-3 text-sm font-medium text-white transition-colors hover:bg-transparent hover:text-indigo-600" type="submit">
        Update
    </button>
</form>
<?php
$content = ob_get_clean();
?>
<?php
include_once 'layout.php';
?>
