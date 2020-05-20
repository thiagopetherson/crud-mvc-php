<!-- Ao clicarmos nesse botão chamamos o controller contatosController e chamamos seu método Add -->
<!-- Esse método add chama a View add.php -->
<a href="<?php echo BASE_URL; ?>contatos/add">[ ADICIONAR ]</a>

<table border="1" width="100%">
	<tr>
		<th>ID</th>
		<th>NOME</th>
		<th>E-MAIL</th>
		<th>AÇÕES</th>
	</tr>
	<?php foreach($lista as $item): ?>
		<tr>
			<td><?php echo $item['id']; ?></td>
			<td><?php echo $item['nome']; ?></td>
			<td><?php echo $item['email']; ?></td>
			<td>
				<!-- Ao clicarmos nesse botão chamamos o controller contatosController e chamamos seu método edit passando um parâmetro -->
				<a href="<?php echo BASE_URL; ?>contatos/edit/<?php echo $item['id']; ?>">[ EDITAR ]</a>
				<!-- Ao clicarmos nesse botão chamamos o controller contatosController e chamamos seu método del passando um parâmetro -->
				<a href="<?php echo BASE_URL; ?>contatos/del/<?php echo $item['id']; ?>">[ EXCLUIR ]</a>
			</td>
		</tr>
	<?php endforeach; ?>
</table>