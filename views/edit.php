<h3>Editar</h3>

<!-- Quando o form está sem o action, ele enviará seus dados (quando submitar) para a mesma página e utilizando o mesmo método e parâmetros que estão na url -->
<form method="POST">
	Nome:<br/>
	<input type="text" name="nome" value="<?php echo $info['nome']; ?>" /><br/><br/>

	E-mail:<br/>
	<?php echo $info['email']; ?><br/><br/>

	<input type="submit" value="Salvar" />

</form>