<?php

require 'src/Model/ViewHelper.php';
require 'src/Controller/AbstractController.php';
require 'src/Controller/MainController.php';
require 'src/Model/Connection.php';
require 'src/Model/Model.php';

require 'config.php';

$route = filter_input(INPUT_GET, 'route');

switch ($route) {
	case null:
	case 'index':
		$controllerName = MainController::class;
		$method = 'index';
		break;

	case 'post':
		$controllerName = MainController::class;
		$method = 'post';
		break;

	default:
		$controllerName = MainController::class;
		$method = 'pageNotFound';
		break;
}

$controller = new $controllerName();
$controller->$method();