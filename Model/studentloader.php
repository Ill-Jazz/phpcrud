<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Studentloader
{

    private array $students = [];

    public function __construct()
    {
        $pdo = Database::openconnection();
        $handle = $pdo->prepare('SELECT * FROM students');
        $handle->execute();
        $data = $handle->fetchAll();
        foreach ($data as $student) {
            array_push($this->students, new Student((int)$student['id'], $student['name'], $student['email'], (int)$student['classId']));
        }

    }

    public function getStudents(): array
    {
        return $this->students;
    }

    public function getStudentById($id)
    {
        foreach ($this->students as $student) {
            if ($student->getId() === $id) {
                return $student;
            }
        }
    }


    public static function createStudent ($name, $email, $classId) {
        $data = Database::openConnection();
        $handle = $data->prepare('INSERT INTO students( name, email, classId ) VALUES (:name, :email, :classId)');
        $handle->bindValue('name', $name);
        $handle->bindValue('email', $email);
        $handle->bindValue('classId',$classId);
        $handle->execute();
    }

    public static function updateStudent ($name, $email, $classId, $id) {
        $data = Database::openConnection();
        $handle = $data->prepare('UPDATE students SET name = :name, email = :email, classId = :classId WHERE id = :id');
        $handle->bindValue('name', $name);
        $handle->bindValue('email', $email);
        $handle->bindValue('classId', $classId);
        $handle->bindValue('id',$id);
        $handle->execute();
    }
    public static function deleteStudent ($id) {
        $data = Database::openConnection();
        $handle = $data->prepare('DELETE FROM students WHERE id = :id');
        $handle->bindValue('id', $id);
        $handle->execute();
    }


}