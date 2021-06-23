<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Classes
{
    private int $classId;
    private string $nameClass;
    private string $location;
    private int $teacherId;

    public function __construct(int $classId, string $nameClass, string $location, int $teacherId)
    {
        $this->classId = $classId;
        $this->nameClass = $nameClass;
        $this->location = $location;
        $this->teacherId = $teacherId;
    }

    public function getClassId(): int
    {
        return $this->classId;
    }

    public function getNameClass(): string
    {
        return $this->nameClass;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function getTeacherId(): int
    {
        return $this->teacherId;
    }

    public function setClassId(int $classId): void
    {
        $this->classId;
    }

    public function setNameClass(string $nameClass): void
    {
        $this->nameClass;
    }

    public function setLocation(string $location): void
    {
        $this->location;
    }

    public function setTeacherId(int $teacherId): void
    {
        $this->teacherId;
    }

}