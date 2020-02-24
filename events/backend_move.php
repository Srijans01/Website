<?php
require_once '_db.php';

$stmt = $db->prepare("UPDATE events SET start = :start, end = :end WHERE id = :id");
$stmt->bindParam(':start', $_POST["start"]);
$stmt->bindParam(':end', $_POST["end"]);
$stmt->bindParam(':id', $_POST["id"]);
$stmt->execute();

class Result {}

$response = new Result();
$response->result = 'OK';
$response->message = 'Update successful';

header('Content-Type: application/json');
echo json_encode($response);

?>
