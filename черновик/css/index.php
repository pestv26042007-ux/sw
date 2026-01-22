<?php


$string1 = $_POST['string1'];
$string2 = $_POST['string2'];


$errors = [];


if (mb_strlen($string1) < 6) {
    $errors[] = "Первая строка должна содержать не менее 6 символов";
}


if (mb_strlen($string2) < 6) {
    $errors[] = "Вторая строка должна содержать не менее 6 символов";
}


if (!empty($errors)) {
    echo "<h1>Ошибка! Логин и пароль должны содержать 6 смволов</h1>";
    exit;
}


$result = $string1 . $string2;
?>


<!DOCTYPE html>
<html>
<head>
    <title>Результат</title>
</head>
<body>
    <h3>Введённые данные:</h3>
    <p><?php echo htmlspecialchars($result); ?></p>
</body>
</html>
