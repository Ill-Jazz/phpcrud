<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Student extends Teacher
{
    private int $classId;

    public function __construct(int $id, string $name, string $email, int $classId)
    {
       parent::__construct( $id, $name, $email );
        $this->classId = $classId;
    }


    public function getClassId(): int
    {
        return $this->classId;
    }

    public function setClassId(int $classId): void
    {
        $this->classId;
    }

}
