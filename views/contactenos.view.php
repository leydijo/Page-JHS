<!DOCTYPE html>
<html lang="en">
<?php require'header.php'    ?>
<body>
	<header>
	<div class="contain">
				<div class="titulo">
					<ul>
						<strong>JSH SECURITY</strong>
					</ul>
				</div>

				<?php require'menu.php'    ?>
	

		<div class="wrap"> 
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
				<input type="text" class="contac" id="nomnbre" name="nombre" placeholder="Nombre:" valued=""> 
				<input type"text" class="contac"  id="correo" name="correo" placeholder="Correo:" valued="">
				<textarea name="mensaje" class="contac" placeholder="Mensaje:"></textarea>
				<input type="submit" name="submit"  class="boton" value="Enviar Correo">
			</form>
		</div>


		<div class="foter">
		</div>
	</header>
</body>
</html>
