<?php 
$username=isset($_GET['nome'])?$_GET['nome']:NULL;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <title>Send Messenger</title>
</head>
<body>
<?php 
       if(empty(!$username)){ ?>
    <div class="logout animated bounceIn">
        <span class="logout-msg"><i class="fas fa-times cross jw-cross"></i>
        <h2><p>Estamos te esperando </p> Volte logo <?php echo $username;?>! </h2></span><?php } ?>
    </div>
    <header class="header">
        <div class="header__wrapper green">
            <h1 class="header__title-site">Send Messenger</h1>
            <h3 class="header__slogan-site">Novo jeito de mandar mensagens </h3>
        </div><!--header__wrapper-->
    </header><!--header-->
    <div class="container">
        <section class="signin">
            <h2>Logar:</h2><br>
            <form  class="form" action="dashboard/"name="form-login">
                <input required type="email" placeholder="email">
                <input required type="password" placeholder="senha">
                <input type="submit" value="Yup !">           
            </form><!--form-login-->
        </section><!--signin-->
        <section class="signup">
            <h2>Cadastre-se:</h2><br>
            <form class="form" action="register.php"name="form-register">
                <input  required type="text" placeholder="primeiro nome">
                <input  required type="text" placeholder="ultimo nome">
                <input  required type="email" placeholder="email">
                <input  required type="password" placeholder="senha">
                <input  type="submit" value="Yup !">     
            </form><!--form-register-->
        </section><!--singup-->
        <h3 class="hero">É grátis ! </h3>
    </div><!--container-->
    <footer class="footer green">
        <ul class="footer-menu">
            <li><a href=""> Sobre nós  </a></li>
            <li><a href=""> Saiba mais </a></li>
            <li><a href=""> Blog       </a></li>
            <li><a href=""> Equipe     </a></li>
        </ul><!--footer-menu-->
        <h5>copyright &copy Send Mensage, all rights reserved.</h5>
    </footer><!--footer-->
    <script src="./assets/js/jquery.js"></script>
   <script src="./assets/js/function.js"></script>
</body>
</html>