<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class StudentController
{

    public function render()
    {

        if (isset($_POST['create'])) {

            require 'View/Student/createview.php';
        }  elseif (isset($_POST['update'])) {
            $studentDatabase = new Studentloader();
            $chosenStudent = $studentDatabase->getStudentById(intval($_POST['update']));
            var_dump($_POST['update']);   var_dump($chosenStudent);
            require 'View/Student/updateview.php';
        } else{
            if (isset($_POST['studentSubmit'])){
                Studentloader::createStudent($_POST['name'], $_POST['email'], $_POST['classId']);
            }
            elseif (isset($_POST['delete'])) {

                Studentloader::deleteStudent($_POST['delete']);
            }
            elseif (isset($_POST['studentUpdate'])) {

                Studentloader::updateStudent($_POST['name'], $_POST['email'], $_POST['classId'], $_POST['id']);
            }

            $studentDatabase = new Studentloader();
            $students = $studentDatabase->getStudents();

            require 'View/Student/defaultview.php';
        }


    }
}