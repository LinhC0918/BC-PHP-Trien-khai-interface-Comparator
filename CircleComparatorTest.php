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
<?php
include 'CircleComparator.php';
$circleOne = new Circle('circleOne', 60);
$circleTwo = new Circle('circleTwo', 40);
$circleComparator = new CircleComparator($circleOne, $circleTwo);
var_dump($circleComparator->compare($circleOne, $circleTwo));
?>
</body>
</html>