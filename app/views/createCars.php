<?php
$title = "Ajoute stagiaire";

ob_start();
?>

<form action="index.php?page=create" method="post" class="mt-5 mx-auto space-y-4 rounded-lg border border-gray-300 bg-gray-100 p-6">
    <div>
        <label class="block text-sm font-medium text-gray-900" for="model">Car Model</label>

        <input class="p-3 mt-1 w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:outline-none" id="model" name="model" type="text" placeholder="Enter car model...">
    </div>

    <div>
        <label class="block text-sm font-medium text-gray-900" for="price">Car price</label>

        <input class="p-3 mt-1 w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:outline-none" id="price" name="price" type="number" placeholder="Enter car price...">
    </div>



    <button class="block max-w-sm rounded-lg border border-indigo-600 bg-indigo-600 px-12 py-3 text-sm font-medium text-white transition-colors hover:bg-transparent hover:text-indigo-600" type="submit">
        Ajoute
    </button>
</form>
<?php
$content = ob_get_clean();
?>
<?php
include_once __DIR__ . '/layout.php';
?>
