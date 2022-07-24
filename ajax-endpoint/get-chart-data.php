<?php
use Urenah\Util;
use Urenah\Student;

header('Content-Type: application/json');

require_once __DIR__ . '/../lib/Student.php';
$student = new Student();
$result = $student->getStudentMark();

$data = array();

require_once __DIR__ . '/../lib/Util.php';
$util = new Util();

$type = "bar";
if (! empty($_GET["chart_type"])) {
    $type = $_GET["chart_type"];
}

switch ($type) {
    case "bar":
        $data = $result;
        break;
    case "pie":
        foreach ($result as $k => $v) {
            $data[$k] = array(
                "label" => $result[$k]["student_name"],
                "data" => $result[$k]["marks"],
                'backgroundColor' => $util->getRandomColor()
            );
        }
        break;
    case "doughnut":
        foreach ($result as $k => $v) {
            $data[$k] = array(
                "label" => $result[$k]["student_name"],
                "data" => $result[$k]["marks"],
                'backgroundColor' => $util->getRandomColor()
            );
        }
        break;
    case "vertical-bar":
        foreach ($result as $k => $v) {
            $data[$k] = array(
                "label" => $result[$k]["student_name"],
                "data" => [
                    $result[$k]["marks"]
                ],
                'backgroundColor' => $util->getRandomColor()
            );
        }
        break;
}
$data = json_encode($data);
echo str_replace("},","},\n",$data);
?>