<h1 style="text-align:center;">Bem-vindos a Dog cursos</h1>



<form method="post" action="login.php">
		<input type="text" name="usuario" placeholder="Nome do usuario" class="form-control">

		<input type="password" name="senha" placeholder="digite a senha" class="form-control">

		<input type="submit" value="entrar" class="btn btn-success">
</form>


<?php if (isset($_GET['erro'])){?>

<div class="alert alert-danger" role="alert">
  usuario e/ou senha invalido.
</div>

<?php } ?>