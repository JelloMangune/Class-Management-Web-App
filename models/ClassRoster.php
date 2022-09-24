<?php

namespace Models;
use \PDO;

class ClassRoster
{
    protected $id;
    protected $class_code;
    protected $student_number;
    protected $enrolled_at;
    protected $is_active;

    public function __construct($class_code, $student_number, $is_active = true)
	{
		$this->class_code = $class_code;
		$this->student_number = $student_number;
        $this->is_active = $is_active;
	}

    public function getClassCode(){
        return $this->class_code;
    }

    public function getStudentNumber(){
        return $this->student_number;
    }

    public function isActive(){
        return $this->is_active;
    }

    public function isEnrolledAt(){
        return $this->enrolled_at = date('Y-m-d H:i:s');
    }

    public function setConnection($connection)
	{
		$this->connection = $connection;
	}

    public function save()
	{
		try {
			$sql = "INSERT INTO classes_rosters SET class_code=?, student_number=?, is_active=?, enrolled_at=?";
			$statement = $this->connection->prepare($sql);

			return $statement->execute([
				$this->getClassCode(),
                $this->getStudentNumber(),
                $this->isActive(),
                $this->isEnrolledAt()
			]);

		} catch (Exception $e) {
			error_log($e->getMessage());
		}
	}


}