<?php
require 'src/Model/Model.php';

require 'src/Model/ViewHelper.php';
require 'src/Controller/AbstractController.php';
require 'src/Controller/Controller.php';

require 'config.php';

$route = filter_input(INPUT_GET, 'route');

switch ($route) {
	case null:
	case 'index':
		$controllerName = Controller::class;
		$method = 'index';
		break;

	case 'post':
		$controllerName = Controller::class;
		$method = 'post';
		break;

	default:
		$controllerName = Controller::class;
		$method = 'pageNotFound';
		break;
}

$controller = new $controllerName();
$controller->$method();