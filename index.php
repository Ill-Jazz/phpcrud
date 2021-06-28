<?php
declare(strict_types=1);

//include all your model files here
require 'Model/databaseConnection.php';
require 'Model/class.php';
require 'Model/classLoader.php';
require 'Model/teacher.php';
require 'Model/teacherLoader.php';
require 'Model/student.php';
require 'Model/studentLoader.php';
//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/InfoController.php';
require 'Controller/studentController.php';


//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

$controller = new HomepageController();
if(isset($_GET['page']) && $_GET['page'] === 'student') {
    $controller = new studentController();
}
else if (isset($_GET['page']) && $_GET['page'] === 'teacher') {
    $controller = new teacherController();
}
else if(isset($_GET['page']) && $_GET['page'] === 'class') {
    $controller = new classController();
}


$controller->render();