<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Student
{
    private int $idStudent;
    private string $LastNameStudent;
    private string $FirstNameStudent;
    private string $emailStudent;
    private int $teacherId;
    private int $classId;

    public function __construct(int $idStudent, string $LastNameStudent, string $FirstNameStudent, string $emailStudent, int $teacherId, int $classId)
    {
        $this->idStudent = $idStudent;
        $this->LastNameStudent = $LastNameStudent;
        $this->FirstNameStudent = $FirstNameStudent;
        $this->emailStudent = $emailStudent;
        $this->teacherId = $teacherId;
        $this->classId = $classId;
    }

    public function getIdStudent(): int
    {
        return $this->idStudent;
    }

    public function getLastNameStudent(): string
    {
        return $this->LastNameStudent;
    }

    public function getFirstNameStudent(): string
    {
        return $this->FirstNameStudent;
    }

    public function getEmailStudent(): string
    {
        return $this->emailStudent;
    }

    public function getTeacherId(): int
    {
        return $this->teacherId;
    }

    public function getClassId(): int
    {
        return $this->classId;
    }

    public function setIdStudent(int $idStudent): void
    {
        $this->idStudent;
    }

    public function setLastNameStudent(string $LastNameStudent): void
    {
        $this->LastNameStudent;
    }

    public function setFirstNameStudent(string $FirstNameStudent): void
    {
        $this->FirstNameStudent;
    }

    public function setEmailStudent(string $emailStudent): void
    {
        $this->emailStudent;
    }

    public function setTeacherId(int $teacherId): void
    {
        $this->teacherId;
    }

    public function setClassId(int $classId): void
    {
        $this->classId;
    }

}
