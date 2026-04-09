<?php
namespace App\Controllers;
use App\Models\Car;
use App\Models\Connection;

class CarController extends BaseController {

    public static function getObj() {
        if (is_null(static::$carObj)) {
            static::$carObj = new Car();
        }
        return static::$carObj;
    }
    public function indexAction() {
        $cars = static::getObj()->listCars();
        require_once __DIR__ . '/../views/listCars.php';
    }

    public function createForumAction() {
        require_once __DIR__ . '/../views/createCars.php';
    }

    public function createAction() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            static::getObj()->setModel($_POST['model']);
            static::getObj()->setPrix($_POST['price']);
            static::getObj()->create();
        }
        static::redirect('home');
    }

    public function updateForumAction($id) {
        $updatedCar = static::getObj()->find($id);
        require_once __DIR__ . '/../views/updateCars.php';
    }

    public function updateAction($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            static::getObj()->setModel($_POST['model']);
            static::getObj()->setPrix($_POST['price']);
            static::getObj()->update($id);
        }
        static::redirect('home');
    }

    public function deleteForumAction($id) {
        require_once __DIR__ . '/../views/deleteCars.php';
    }

    public function deleteAction($id) {
        static::getObj()->delete($id);
        static::redirect('home');
    }
}