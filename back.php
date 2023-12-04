
<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");


$user = 'root'; // ваш пользователь
$password = ''; // ваш пароль
$db = 'users'; // имя вашей базы данных 
$host = 'localhost'; // локальный хост
$charset = 'utf8'; // нужная кодировка
// А теперь подключаемся
$pdo = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $password);


// Перебираем массив


if (isset($_POST['select'])){
    $table = $_POST['table'];
    $query = $pdo -> query('SELECT * FROM '.$table);
    $arr = [];
    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        $arr[] = $row;
    }
    echo json_encode($arr);
}

if (isset($_POST['insert'])){
    $table = $_POST['table'];
    $fio = $_POST['fio'];
}

if (isset($_POST['delete'])){

}

