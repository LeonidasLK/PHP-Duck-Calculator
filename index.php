<!DOCTYPE html>

<head>
<title> PHP Calculator</title>
    <meta charset="UTF-8">

<style>
    body{
        background-color:white;
        text-align:center;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        color:black;
        font-style:italic
    }
    input{
        background-color: aqua;
    }
.center{
    margin-left:auto;
    margin-right:auto;
}
td {
    border-style:solid;
}
.bold{
    font-weight:bold;
}

</style>

</head>

<body>

<h1> PHP <u>Duck</u> Calculator</h1>
<img src="https://avatars.githubusercontent.com/u/117288313?v=4" alt="duck with a hat" width="100"> <br>

<?php

$x = $_POST['number1'];
$y = $_POST['number2'];
$praksi = $_POST['select'];

if ($praksi=='+'){
    echo "Το αποτέλεσμα είναι: <b>" .$x + $y;
}
elseif ($praksi=='-'){
    echo "Το αποτέλεσμα είναι: <b>" . $x - $y;
}
elseif ($praksi=='*'){
    echo "Το αποτέλεσμα είναι: <b>" . $x * $y;
}
elseif ($praksi=='/' && $y<>'0'){
    echo "Το αποτέλεσμα είναι: <b>" . $x / $y;
}
elseif ($praksi=='/' && $y=='0'){
    echo "Δεν μπορείτε να κάνετε διαίρεση με το 0.";
}
elseif ($praksi=='^'){
    echo "Το αποτέλεσμα είναι: <b>" . pow($x,$y);
}
elseif ($praksi=='#'){
    header("Location: form.html");
}

?>

</br> </br>

<form action="form.html" method="post">
<input type="submit" value="Πίσω στον Calculator">
</form>
</br> </br>





</body>


</html>