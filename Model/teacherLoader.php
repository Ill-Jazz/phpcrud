<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class TeacherLoader
{

    private array $teachers = [];


    public function __construct()
    {
        $pdo = Database::openconnection();
        $handle = $pdo->prepare('SELECT * FROM teachers');
        $handle->execute();
        $data = $handle->fetchAll();
        foreach ($data as $teacher) {
            $teacherArray [] = new teacher((int)$teacher['id'], $teacher['name'], $teacher['email']);
        }
    }

    public function getTeachers(): array
    {
        return $this->teachers;
    }

    public function getTeacherById($id)
    {
        foreach ($this->teachers as $teacher) {
            if ($teacher->getId() === $id) {
                return $teacher;
            }
        }
    }


    public static function createTeacher ($name, $email) {
        $data = Connection::openConnection();
        $handle = $data->prepare('INSERT INTO teachers( name, email ) VALUES (:name, :email)');
        $handle->bindValue('name', $name);
        $handle->bindValue('email', $email);
        $handle->execute();
    }

    public static function updateTeacher ($name, $email, $id) {
        $data = Connection::openConnection();
        $handle = $data->prepare('UPDATE teachers SET name = :name, email = :email WHERE id = :id');
        $handle->bindValue('name', $name);
        $handle->bindValue('email', $email);
        $handle->bindValue('id',$id);
        $handle->execute();
    }
    public static function deleteTeacher ($id) {
        $data = Connection::openConnection();
        $handle = $data->prepare('DELETE FROM teachers WHERE id = :id');
        $handle->bindValue('id', $id);
        $handle->execute();
    }

}