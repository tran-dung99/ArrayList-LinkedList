<?php
include_once "ArrayList.php";
$arrayList = new ArrayList();
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
    <form method="post">
        <input type="text" name="name" placeholder="Nhập tên">
        <input type="text" name="score" placeholder="Nhập điểm">
        <button type="submit">Add</button>
    </form>
    </body>
    </html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arrayList->insertFirst($_REQUEST);
    header("location:index.php");
}
?>