<h3>Adicionar</h3>

<?php if($error == 'exist'): ?>
	<div class="aviso">E-mail já existente, tente outro.</div>
<?php endif; ?>

<!-- Ao submitarmos esse formulário chamamos o controller contatosController e chamamos seu método add_save -->
<form method="POST" action="<?php echo BASE_URL; ?>contatos/add_save">

	Nome:<br/>
	<input type="text" name="nome" /><br/><br/>

	E-mail:<br/>
	<input type="email" name="email" /><br/><br/>

	<input type="submit" value="Adicionar" />

</form>