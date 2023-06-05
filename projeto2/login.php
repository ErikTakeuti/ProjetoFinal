<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <title>TELA DE LOGIN</title>

    <script>
        function ok(){
            setTimeout("window.location='index.php'",2000);
        }
    </script>

</head>
<body>
    
        <div class="box">
            <span class="borderline"></span>
            <form action="login.php" method="POST">
                <h2>Sign In</h2>
                <div class="inputBox">
                    <input type="text" required="required" id="email" name="email">
                    <span>E-mail</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="password" required="required" id="senha" name="senha">
                    <span>Password</span>
                    <i></i>
                </div>
                <div class="links">
                    <a href="#">Forgot Password</a>
                    <a href="#">Sign Up</a>
                </div>
                <input type="submit" value="login">
            </form>
        </div>
    <?php
            include './conexao.php';
            $email = @$_POST['email'];
            $senha = @$_POST['senha'];

            $sql = $con ->query ("SELECT * FROM usuario WHERE email='$email' and senha='$senha'");

            $row = mysqli_num_rows($sql);

            if($row > 0){
                session_start();
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['senha'] = $_POST['senha'];

                echo "VOCÊ FOI LOGADO!!";
                echo "<script> ok() </script>";
            }else if($row = 0){
                echo "LOGIN E SENHA INCORRETOS";
            }
    ?>

</body>
</html>