<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Мои заявки</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body class="fon">

    <nav class="сolor" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="index.html" class="brand-logo">
                <img class="responsive-img" src="img/лого5 1.png">
            </a>
            <ul class="right hide-on-med-and-down">
                <li><a href="index.html">Главная</a></li>
                <li><a href="login.php">Личный кабинет</a></li>
            </ul>
            

            <ul id="nav-mobile" class="sidenav">
              <li><a href="index.html">Главная</a></li>
              <li><a href="login.php">Личный кабинет</a></li>
            </ul>
        </div>
    </nav>
<br><br>

<div class="container">
        <div class="section">

            
                


<?php
$u=0;
if(isset($_GET["u"])) {
    $u = $_GET ["u"];
}

$conn = new mysqli('localhost', 'root', '', 'ksmy');

$sql = " SELECT * FROM zayavka join status_zay on zayavka.status=status_zay.id_status  where user = $u";

$result1 = $conn->query("SELECT * FROM zayavka");

if($result = $conn -> query($sql)){
    $rowsCount = $result->num_rows;

    
    foreach($result as $row){

        

echo '<div class="row ">';
echo '<div class="col s4  zay">';
echo '<div class="icon-block-zay">';

echo '<p class="">Место: ';
echo  $row['mesto']; ;
echo '</p>';
echo '<p class="">Площадь: ';
echo  $row['oject']; ;
echo '</p>';
echo '<p class="">Стоимость: ';
echo  $row['cash']; ;
echo ' рублей';
echo '</p>';
echo '<p class="">Статус: ';
echo  $row['name_status']; ;
echo '</p>';
echo '<p class="">Статус: ';
echo  $row['cat']; ;
echo '</p>';
echo '<p class="">Завершенность: ';
echo '</p>';
echo '<div class="progress chet ">';
echo '<div class="determinate" style="width: '.$row['time'].'%"></div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';



    }
    $result->free();
} else {
    echo "Ошибка:" . $conn->error;
}
$conn->close();


?>
    
        </div>
    </div> 


    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="js/materialize.js"></script>
      <script src="js/init.js"></script>
    
      </body>
    </html>