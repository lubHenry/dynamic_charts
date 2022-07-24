<?php
namespace Urenah;

class Student
{

    private $dbConn;

    public function __construct()
    {
        require_once __DIR__ . '/DataSource.php';
        $this->dbConn = new DataSource();
    }

    function getStudentMark()
    {
        $query = "SELECT student_id,student_name,marks FROM tbl_marks ORDER BY student_id";
        $result = $this->dbConn->select($query);
        return $result;
    }
}
