<?php
include("base.php");
?>
<h1>owo</h1>

<form action="api/add_sample.php" method="post" enctype="multipart/form-data">
    <p>Sample name</p>
    <input type="text" name="name"><br>
    <p>Description for the sample</p>
    <input type="text" name="description"><br>
    <p>BPM and Key</p>
    <input type="text" name="bpmkey"><br>
    <p>Upload path (optional)</p>
    <input type="text" name="path"><br>
    <p>Set Date of the sample's creation</p>
    <input type="datetime-local" step="1" name="date"><br>
    <p>Upload the sample</p>
    <input type="file" name="sample"><br>
    <input type="submit" value="Submit"><br>
</form>