<?php
require_once "vendor/autoload.php";
use App\Controllers\CarController;

$page = $_GET['page'] ?? 'home';
$id = $_GET['id'] ?? null;
$action = new CarController();


match($page) {
    'home' => $action->indexAction(),
    'create-forum' => $action->createForumAction(),
    'create' => $action->createAction(),
    'update-forum' => $action->updateForumAction($id),
    'update' => $action->updateAction($id),
    'delete-forum' => $action->deleteForumAction($id),
    'delete' => $action->deleteAction($id)
};