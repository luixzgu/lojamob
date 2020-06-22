<?php require_once("cabecalho.php");?>
<?php require_once("conecta.php");?>
      
<h1>Bem vindo!</h1>
    <h2>Login</h2>
    <form action="login.php" method="post">
        <table class="table">
            <tr>
                <td>Email</td>
                <td><input class="form-control" type="email" name="email"></td>
            </tr>
            <tr>
                <td>Senha</td>
                <td><input class="form-control" type="password" name="senha"></td>
            </tr>
            <tr>
                <td><input type="submit" value="entrar" id="entrar" name="entrar"></td>
            </tr>
			
        </table>
    </form>


<?php require_once("rodape.php"); ?>