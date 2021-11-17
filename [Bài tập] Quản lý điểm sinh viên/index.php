<?php
include_once "ArrayList.php";
include_once "Student.php";
$arrayList = new ArrayList();
$students = $arrayList->load();
echo"<pre>";
var_dump($students);
foreach ($students as $key=>$student){
 var_dump($student);
}
Die();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <a href="create.php">Thêm</a>
    <thead>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Score</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($students as $key=>$student):?>
    <tr>
<!--        <td>--><?php //echo $key + 1 ?><!--</td>-->
        <td><?php echo $student->getName() ?></td>
        <td><?php echo $student->getScore() ?></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
