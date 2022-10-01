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

    public function getId(){
        return $this->id;
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
        date_default_timezone_set('Asia/Manila');
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

    public function getAllClassesRosters()
	{
		try {
			$sql = 'SELECT * FROM classes_rosters';
			$data = $this->connection->query($sql)->fetchAll();
			return $data;
		} catch (Exception $e) {
			error_log($e->getMessage());
		}
	}

    public function getById($id)
	{
		try {
			$sql = 'SELECT * FROM classes_rosters WHERE id=:id';
			$statement = $this->connection->prepare($sql);
			$statement->execute([
				':id' => $id
			]);

			$row = $statement->fetch();
			$this->id = $row['id'];
			$this->class_code = $row['class_code'];
            $this->student_number = $row['student_number'];
            $this->is_active = $row['is_active'];
            $this->enrolled_at = $row['enrolled_at'];
		} catch (Exception $e) {
			error_log($e->getMessage());
		}
	}

    public function updateClassRoster($class_code, $student_number, $is_active, $enrolled_at)
	{
		try {
			$sql = 'UPDATE classes_rosters SET class_code=?, student_number=?, is_active=?, enrolled_at=? WHERE id=?';
			$statement = $this->connection->prepare($sql);
			$statement->execute([
				$class_code,
                $student_number,
                $is_active,
				$enrolled_at,
                $this->getId()
			]);
			$this->class_code = $class_code;
            $this->student_number = $student_number;
            $this->is_active = $is_active;
			$this->enrolled_at = $enrolled_at;
		} catch (Exception $e) {
			error_log($e->getMessage());
		}
	}

    public function deleteClassRoster()
	{
		try {
			$sql = 'DELETE FROM classes_rosters WHERE id=?';
			$statement = $this->connection->prepare($sql);
			$statement->execute([
				$this->getId()
			]);
		} catch (Exception $e) {
			error_log($e->getMessage());
		}
	}
}