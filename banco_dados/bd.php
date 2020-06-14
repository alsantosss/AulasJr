<h1>Executar Inserções, Selects, Deletar e Updates em Bando de Dados</h1>
<h3>Tutorial muito bem explicado em w3schools <a href="https://www.w3schools.com/sql/" target="_blank">[ Aqui ]</a></h3>

<hr>
<code>
	<h3>Insert</h3>
	<i><b>Obs.:</b> Se no campo data houver uma data inválida ex.: 2020-02-29 ... onde 2020 não é ano bisexto --> Vai dar erro.</i><br><br>

	INSERT INTO `posts`SET `titulo`='Título Post', `data_criado`='2020-12-01 00:00:00', `corpo`='Algum Texto', `autor`='Andre Santos';
<br>
</code>
<br>
<hr>
<code>
	<h3>Select</h3>
	SELECT * FROM posts;
	<h3>Select com WHERE</h3>
	SELECT * FROM posts WHERE id=2;
	<h3>Select com WHERE e LIKE</h3>
	SELECT * FROM posts WHERE autor LIKE '%and%';
	<h3>Select somente campo refereciado</h3>
	SELECT titulo FROM posts;<br>
	<h3>Select com calculo</h3>
	SELECT qtde FROM posts WHERE qtde < 5;<br>
	SELECT qtde FROM posts WHERE qtde BETWEEN 2 and 8;<br>

</code>
<br>
<hr>
<code>
	<h3>Editar campo</h3>
	UPDATE posts SET titulo = "Titulo update" WHERE id = 1;
</code>
<br>
<hr>
<code>
	<h3>Deletar campo</h3>
	DELETE FROM posts WHERE id = 1;
	<h3>Delete com calculo</h3>
	DELETE FROM posts WHERE qtde < 5;<br>
	DELETE FROM posts WHERE qtde BETWEEN 2 and 8;<br>
</code>