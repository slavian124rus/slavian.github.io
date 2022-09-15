<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title> Редактирование</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<div class="section" >
    <div class="container">
        <div class="otstup">

        <a href="profile.php">Вернуться в профиль</a>
    </div>
    </div>
</div>

<body class="foto">


<?php

 $u=0;
if(isset($_GET["u"])) {
 $u = $_GET ["u"];
  }

$conn = new mysqli('localhost', 'root', '', 'ksmy');

$sql = " SELECT * FROM users where id = $u";
                    

                 
                    
if($result = $conn -> query($sql)){
$rowsCount = $result->num_rows;


 foreach($result as $row){

    echo '<div class="container">';
    echo '<div class="container">';
    echo '<div class="section ">';
    echo '<div class="row center bold ">';
    echo '<h3>';
    echo 'Редактирование профиля';
    echo '</h3>';
    echo '';
    echo '';
    echo '<form action="script/red_prof_sc.php" method=\'post\'>';
    echo '<input type="hidden" name="id" value="'.$row["id"]. '" >';
    echo '<input type=\'email\' id="email"  name=\'email\' value="'.$row["email"]. '"  placeholder=\'Почтовый ящик\' class=\'text_input\'   />';
    echo '<input type=\'text\' id="login"  name=\'login\' value="'.$row["login"]. '"  placeholder=\'Логин\' class=\'text_input\'   />';
    echo '<input type=\'text\' id="password" name=\'password\'   placeholder=\'Ведите новый пароль\' " class=\'text_input\'   />';

    echo '<input class="btn" id="register" name= "register" type="submit" value="Редактировать">';
    echo '';
    echo '</form>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';

}
                        

} else {
echo "Ошибка:" . $conn->error;
}
$conn->close();
?>



    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
    
    </body>
    </html>