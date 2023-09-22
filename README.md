# ProjetoFinal

### 1 - CADASTRO PHP
```php
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style3.css">

    <title>CADASTRO</title>
</head>
<body>
    <div class="container">
        <div class="title">Cadastrar</div>
        <form action="recebe_cad_cliente.php" method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Nome Completo</span>
                    <input type="text" placeholder="Nome Completo" name="nome" required>
                </div> 
                <div class="input-box">
                    <span class="details">E-mail</span>
                    <input type="text" placeholder="E-mail" name="email" required>
                </div> 
                <div class="input-box">
                    <span class="details">Senha</span>
                    <input type="text" placeholder="Senha" name="senha" required>
                </div> 
                <div class="input-box">
                    <span class="details">CPF</span>
                    <input type="text" placeholder="CPF" name="cpf" required>
                </div> 
                <div class="input-box">
                    <span class="details">RG</span>
                    <input type="text" placeholder="RG" name="rg" required>
                </div> 
                <div class="input-box">
                    <span class="details">Telefone</span>
                    <input type="text" placeholder="Telefone" name="telefone" required>
                </div> 
                <div class="input-box">
                    <span class="details">Endereço</span>
                    <input type="text" placeholder="Endereço" name="endereco" required>
                </div> 
                    <input type="submit" class="button" name ="butao" value="Enviar">
                    
            </div>
        </form>
    </div>
</body>
</html>
```
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
### 2 - CONEXÃO PHP
```php
<?php
    $host = "localhost";
    $user="root";
    $password="";
    $bd="final";

    $con = new mysqli($host,$user,$password,$bd);
?>
```
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
### 3 - INDEX PHP
```php
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="css/style2.css">
    
    <title>PRINCIPAL</title>

</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo"><a href="index.php">Projeto Final</a></div>
            <ul class="links">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="about">Exibir Nome</a></li>
                <li><a href="services">Exibir CPF</a></li>
                <li><a href="contact">Exibir Data</a></li>
            </ul>

            <a href="cadastro.php" class="action_btn">Cadastro</a>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <div class="dropdown_menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="about">Exibir Nome</a></li>
            <li><a href="services">Exibir CPF</a></li>
            <li><a href="contact">Exibir Data</a></li>
            <li><a href="cadastro.php" class="action_btn">Cadastro</a></li>
        </div>
    </header>


    <main>
        <section id="hero">
            <h1>Bem-Vindo</h1>
            <p>Projeto Final</p>
        </section>
    </main>



    <script>
        const toggleBtn = document.querySelector('.toggle_btn');
        const toggleBtnIcon = document.querySelector('.toggle_btn i');
        const dropDownMenu = document.querySelector('.dropdown_menu');

        toggleBtn.onclick=function(){
            dropDownMenu.classList.toggle('open');
            const isOpen = dropDownMenu.classList.contains('open');

            toggleBtnIcon.classList = isOpen
            ? 'fa-solid fa-xmark'
            : 'fa-solid fa-bars'
        }
    </script>
</body>
</html>
```
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
### 4 - LOGIN PHP
```php
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
-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
### 5 - RECEBE CLIENTE PHP
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>
        function ok(){
        setTimeout("window.location='index.php'",2000);
        }
            
        function erro(){
        setTimeout("window.location='cadastro.php'",2000);
        }
    </script>
</head>
<body>
    

<?php
    include "./conexao.php";

    $nome = $_POST['nome'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $cpf=$_POST['cpf'];
    $rg=$_POST['rg'];
    $telefone=$_POST['telefone'];
    $endereco=$_POST['endereco'];

    $inserir = $con -> query("INSERT INTO cliente VALUES(0,'$nome','$email','$senha','$cpf','$rg','$telefone','$endereco')");

    if($inserir){
        echo  '<script>ok()</script>';
        echo" <hr><br><p>Cliente cadastrado com sucesso!!</p><br><hr>";
    }else{
        echo '<script> erro() </script>';
        echo" <hr><br><p>Cliente não cadastrado</p><br><hr>";
    }
?>
</body>
</html>
```
