<?php require("../models/car.php");

Class CarController {
	public function indexPage(){
		$cars = Car::find();
		require('../views/cars/index.php');
	}
	public function newPage(){
		require('../views/cars/new.php');
	}
	public function createAction() {
		Car::create($_POST['car'], $_POST['owner']);
		header('Location: ./');
	}	
	public function deleteAction() {
		Car::delete($_POST['id']);
		header('Location: ./');
	}		
	public function editPage() {
		require('../views/cars/edit.php');
	}
	public function updateAction() {
		Car::update($_POST['id'], $_POST['car'], $_POST['owner']);
		header('Location: ./');
	}
}

	$new_car_controller = new CarController();

		if($_GET['action'] == 'index') {
			$new_car_controller->indexPage();

		} elseif($_GET['action']=='new') {
			$new_car_controller->newPage();

		} elseif($_GET['action']=='create') {
			$new_car_controller->createAction();

		} elseif($_GET['action']=='delete') {
			$new_car_controller->deleteAction();

		} elseif($_GET['action'] == 'edit') {
			$new_car_controller->editPage();

		} elseif($_GET['action'] == 'update') {
			$new_car_controller->updateAction();
	}
?>