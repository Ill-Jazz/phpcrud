<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class ClassLoader
{

    private array $classes = [];


    public function __construct()
    {
        $pdo = Database::openconnection();
        $handle = $pdo->prepare('SELECT * FROM classes');
        $handle->execute();
        $data = $handle->fetchAll();
        foreach ($data as $class) {
            $classArray [] = new Classes((int)$class['id'], $class['name'], $class['location'], (int)$class['teacherId']);
        }
        return $classArray;
    }

    public function getClasses(): array
    {
        return $this->classes;
    }


    public function getClassById($id)
    {
        foreach ($this->classes as $class) {
            if ($class->getId() === $id) {
                return $class;
            }
        }
    }


    public static function createClass ($name, $location, $teacherId) {
        $data = Connection::openConnection();
        $handle = $data->prepare('INSERT INTO classes( name, email ) VALUES (:name, :email)');
        $handle->bindValue('name', $name);
        $handle->bindValue('email', $email);
        $handle->execute();
    }

    public static function updateClasses ($name, $location, $teacherId, $id) {
        $data = Connection::openConnection();
        $handle = $data->prepare('UPDATE classes SET name = :name, location = :location, teacherId = :teacherId WHERE id = :id');
        $handle->bindValue('name', $name);
        $handle->bindValue('location', $location);
        $handle->bindValue('teacherId',$teacherId);
        $handle->bindValue('id',$id);
        $handle->execute();
    }
    public static function deleteClass ($id) {
        $data = Connection::openConnection();
        $handle = $data->prepare('UPDATE students SET classId = null WHERE classId = :classId');
        $handle->bindValue('classId', $id);
        $handle->execute();
        $handle = $data->prepare('DELETE FROM classes WHERE id = :id');
        $handle->bindValue('id', $id);
        $handle->execute();
    }

}