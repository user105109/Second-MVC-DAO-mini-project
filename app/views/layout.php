<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $title ?></title>
</head>
<body>
<?php require_once 'includes/nav.php' ?>
<div class="mx-[200px] my-[100px] relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
    <h2 class="text-3xl font-semibold mb-4 underline"><?= $title ?></h2>
    <hr>
    <?= $content ?>
</div>
</body>
</html>

