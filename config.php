<?php
	@$viewpage=$_REQUEST['page'];

	switch($viewpage)
	{
		case 'productentry':
		$mainpage='productentry.php';
		break;

		case 'productlist':
		$mainpage='productlist.php';
		break;

		case 'userentry':
		$mainpage='userentry.php';
		break;

		case 'productlist':
		$mainpage='productlist.php';
		break;

		case 'userlist':
		$mainpage='userlist.php';
		break;

		default:
		$mainpage='home.php';
	}
?>