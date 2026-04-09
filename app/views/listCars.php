
<?php
$title = "Liste of Cars";

ob_start();
?>
<a href="index.php?page=create-forum" class="inline-block mx-3 my-5 rounded-sm border border-indigo-600 bg-white px-10 py-4 text-md font-medium text-indigo-600 hover:bg-indigo-600 hover:text-white">
    Add Car
</a>
<table class="min-w-full">
    <thead>
    <tr>
        <th class="text-center px-6 py-3 border-b">Car ID</th>
        <th class="text-center px-6 py-3 border-b">Model</th>
        <th class="text-center px-6 py-3 border-b">Prix</th>
        <th class="text-center px-6 py-3 border-b">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($cars as $car):?>
        <tr class="odd:bg-white even:bg-gray-50">
            <td class="text-center px-6 py-4 border-b"><?php echo $car['id'] ?></td>
            <td class="text-center px-6 py-4 border-b"><?php echo $car["model"] ?></td>
            <td class="text-center px-6 py-4 border-b"><?php echo $car["prix"] ?></td>
            <td class="text-center px-6 py-4 border-b">
                <a href="index.php?page=update-forum&id=<?php echo $car['id'] ?>" class="inline-block rounded-sm border border-green-600 bg-green-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-green-600">
                    Update
                </a>
                <a href="index.php?page=delete-forum&id=<?php echo $car['id'] ?>" class="inline-block rounded-sm border border-red-600 bg-red-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-red-600">
                    Delete
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>



<?php
$content = ob_get_clean();
?>
<?php
include_once __DIR__ . '/layout.php';
?>