<?php include("includes/header.php") ?>	

	<div class="container">
		<div class="col-lg-4 col-xs-12">	
			
			<?php if(isset($_SESSION['nao_autenticado'])):	?>

			  <div class="alert alert-danger">
			    <strong>Usuario não autenticado!</strong> 
			  </div>

			<?php 
			endif; 
			unset($_SESSION['nao_autenticado']); 
			?>
			<form action="login.php" method="POST">
			  <div class="form-group">
			    <label>Login: </label>
			    <input type="text" name="usuario" class="form-control" placeholder="Digite aqui...">			    
			  </div>
			  <div class="form-group">
			    <label >Senha:</label>
			    <input type="password" name="senha" class="form-control" placeholder="Digite aqui...">
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>

		</div>		
	</div>

<?php include ("includes/footer.php") ?>		