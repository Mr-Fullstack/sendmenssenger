<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/dashboard.css" class="rel">
    <link rel="stylesheet" href="../assets/css/animate.css" class="rel">
    <title>SendMenssenger | Dashboard</title>
</head>
<body>
    <header class="header"> 
        <h2 class="header__navegation">
            <?php echo'<a href="../dashboard/">/dashboard</a>' ?>
        </h2>
        <h4>
            <ul>
                <li>Logado como:<?php echo " Marcos";?> </li>
                <li><?php echo "<a href='./perfil'>Minha conta</a>";?> </li>
                <li><?php echo "<a href='../?exit=ok&nome=Marcos'>Sair</a>";?></li>
            </ul>
        </h4>
    </header>
    <div class="container">
        <section class="container-menu">
            <button class="btn"><a href="">Timeline</a></button>
            <button class="btn"><a href="">Enviar mensagem</a></button>
            <button class="btn"><a href="">Lista de amigos</a></button>
            <button class="btn"><a href="">Caixa de mensagem</a></button>
            <button class="btn"><a href="">Meus grupos</a></button>   
        </section>
        <span class="container__menu--mobile jw_menu_open"><i class="fas fa-bars"></i></span>
        <span class="container__menu--mobile jw_menu_close"><i class="fas fa-bars"></i></span>   
        <h2>Tarefas rápidas :</h2>
        <section class="tarefas">
            
            <div>
                <form action="">
                    <h3>adicionar amigo</h3>
                    <input type="text" placeholder="nome ou email do amigo"><br>
                    <input type="submit" value="cadastrar">
                </form>
            </div>
            <div>
                <form method="pPOST" action="?grupo=sucess">
                    <h3>criar grupo</h3>
                    <input type="text" placeholder="nome do grupo" name="grupo"><br>
                    <input type="submit" value="criar">
                </form>
                <?php 
                    $grupo=isset($_POST['grupo'])?$_POST['grupo']:null;
                    
                    switch($grupo){
                        case "null":
                        echo "você tem que digitar <br> um nome para grupo";
                        case ($grupo!="erro"): echo " grupo $grupo <br> criado com sucesso!";

                    }
                      ?>
            </div>
            <div>
                <form action="">
                    <h3>criar um post</h3>
                    <input type="text" placeholder="mensagem do post"><br>
                    <input type="submit" value="postar">           
                </form>
            </div>
        </section>
    </div>
    <footer class="footer"></footer>
    <script src="../assets/js/jquery.js"></script>
   <script src="../assets/js/function.js"></script>
</body>
</html>