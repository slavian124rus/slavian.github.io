    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Вход</title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    </head>

    <?php 
    
    if($_COOKIE['role']=='1' ):

    header('Location: /profile.php');

    else:
        
       
    if($_COOKIE['role']=='2' ):
    header('Location: /admin.php');
    else:   
        ?>


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
                <div class="row">
                <div class="col s10 offset-s1 center">
                <div id="login_container">
                    <div id="form_container">

                        <h1>
                            Welcome
                        </h1>

                        <form action="script/login_sc.php" method='POST'>

                        
                        <input type='text' id="login"  name='login' value='' class='text_input' placeholder="Логин"  />
                        <input type='password' id="password" name='password' value='' class='text_input'  placeholder="Пароль" />
                        <input class="btn" id="register" name= "register" type="submit" value="Войти">

                        </form>
                        <br><br>
                        <p class="bold">
                            Нет аккаунта? Вам сюда -> 
                            <a href="reg.html"> Зарегестрироваться</a>
                            
                            
                        </p>

                     


                    </div>
                </div>
                </div>
                </div>


            </div>
        </div>
    </div>

        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
        <?php endif;?>
        <?php endif;?>
        </body>
        </html>