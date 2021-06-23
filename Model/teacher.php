<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Teacher
{
    private int $teacherId;
    private string $nameTeacher;
    private string $emailTeacher;
    private int $classId;

    public function __construct(int $teacherId, string $nameTeacher, string $emailTeacher, int $classId)
    {
        $this->teacherId = $teacherId;
        $this->nameTeacher = $nameTeacher;
        $this->emailTeacher = $emailTeacher;
        $this->classId = $classId;
    }

    public function getTeacherId(): int
    {
        return $this->teacherId;
    }

    public function getNameTeacher(): string
    {
        return $this->nameTeacher;
    }

    public function getEmailTeacher(): string
    {
        return $this->emailTeacher;
    }


    public function getClassId(): int
    {
        return $this->classId;
    }

    public function setTeacherId(string $teacherId): void
    {
        $this->teacherId;
    }

    public function setNameTeacher(string $nameTeacher): void
    {
        $this->nameTeacher;
    }

    public function setEmailTeacher(string $emailTeacher): void
    {
        $this->emailTeacher;
    }


    public function setClassId(int $classId): void
    {
        $this->classId;
    }

}