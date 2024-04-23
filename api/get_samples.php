<?php
// tanza note: this is perfect
include($_SERVER['DOCUMENT_ROOT'] . "/php/functions.php");
$samples = Database::execSimpleSelect("SELECT * FROM Samples ORDER BY Date DESC");

echo json_encode($samples);
?>