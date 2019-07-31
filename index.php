<?php
include_once 'QuadraticEqution.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $value_a= $_POST['value_a'];
    $value_b= $_POST['value_b'];
    $value_c= $_POST['value_c'];

$quadraticEquation = new QuadraticEqution($value_a, $value_b, $value_c);
echo $quadraticEquation->get_value_a() . 'x^2 + ' . $quadraticEquation->get_value_b() . 'x + ' . $quadraticEquation->get_value_c() . '<br>';
if ($quadraticEquation->get_discriminant() > 0) {
    echo 'the equation has two roots '.$quadraticEquation->get_root_1().' and '.$quadraticEquation->get_root_2();
}
if ($quadraticEquation->get_discriminant() == 0 ){
    echo 'the eqution has one root '.$quadraticEquation->get_root();
}
else {
    echo 'the equation has no real root';
}

}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quadratic Equation</title>
</head>
<body>
<div>
    <div>
        <h3>Quadratic Equation</h3>
        <form action="" method="post">
            Input value a: <input type="text" name="value_a"><br>
            Input value b: <input type="text" name="value_b"><br>
            Input value c: <input type="text" name="value_c"><br>
            <button type="submit">OK</button>
        </form>
    </div>
</div>
</body>
</html>
