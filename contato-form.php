<form method="post" action="contato-salva.php">
	<input type="hidden" name="id_contato" value="<?=$id_contato?>">
	<p>Nome: <input type="text" name="nome" size="40" value="<?=$nome?>"></p>
	<p>Email: <input type="text" name="email" size="40" value="<?=$email?>"></p>
	<p>Telefone: <input type="text" name="telefone" size="40" value="<?=$telefone?>"></p>
	<p><input type="submit" value="salva"></p>
</form>