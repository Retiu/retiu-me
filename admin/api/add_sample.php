<?php
include("../base.php");
$name = $_REQUEST['name'];
$path = $_REQUEST['path'];
$date = $_REQUEST['date'];
$description = $_REQUEST['description'];
$bpmkey = $_REQUEST['bpmkey'];
$base_path = "../../sound/samples/";
$final_path = $base_path . $path;
$file = $_FILES['sample'];
$target = $final_path . "/" . $file['name'];
$alt_target = $path . "/" . $file['name'];
move_uploaded_file($file['tmp_name'], $target);
Database::execOperation("INSERT INTO `Samples` (`ID`, `Name`, `Path`, `Date`, `Description`, `BPMKey`) VALUES (NULL, ?, ?, ?, ?, ?);","sssss",[$name, $alt_target, $date, $description, $bpmkey]);
redirect("/admin/");