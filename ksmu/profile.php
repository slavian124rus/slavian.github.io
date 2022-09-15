<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Профиль</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<div class="section" >
    <div class="container">
        <div class="otstup">

        <a href="index.html">На главную</a>
    </div>
    </div>
</div>

<body class="foto">
<div class="container">
    <div class="container">
        <div class="section ">
            <div class="row center bold ">

                <h1>
                    Welcome
                </h1>

                <p class="text-left">
                <?php echo $_COOKIE['name'];?>

                </p>

                <p>
                    Почтовый ящик: 
                    <?php echo $_COOKIE['mail'];?>
                    
                </p>


                <p>
                    
                    <?
                    echo "<a 
                     href= redact_profile.php?u=" .$_COOKIE['id']. "> Сменить пароль</a>";?>
                        

                    </a>

                <p>
                <a  href="script/logout_sc.php">
                        Выйти

                    </a>
                </p>

                </p>
                <br><br>
                <p>

                <?
                    echo "<a 
                     href= zayavka.php?u=" .$_COOKIE['id']. "> Посмотреть мои проекты </a>";?>
                    </a>
                

                <br>
                    <a href="new_zayavka.html">
                        Подать завявку на расчет сметы

                    </a>
                </p>

            </div>
            


        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
    
    </body>
    </html>