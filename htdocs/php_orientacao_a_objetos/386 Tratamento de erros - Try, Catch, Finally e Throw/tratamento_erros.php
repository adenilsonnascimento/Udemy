<?php 

try {
	echo '<h3>Try (Tente)</h3>';
	echo '<p>Executado quando nenhuma exceção ocorrer</p>';
     

	// Forçando um erro, pois não temos um banco de dados configurado
	 $sql = 'Select * from Clientes';
	 mysql_query($sql); //Erro


	 
} catch(Error $e) {

	echo '<h3>Catch Erro</h3>';
	echo '<p>Como teve o Erro forçado no mysql_query, passamos pelo "Catch", se não tivesse esse erro, seriamos direcionados diretamente para o "Finally" </p>';
    
	// mostrando o erro na tela
	echo '<p style="color: red">' . $e . '</p>'; 

}

finally {
	echo '<h3>Finalmente (Finally)</h3>';
	echo '<p>Executado sempre, pois independente do resultado sempre vai ser executado, ele vem diretamente do try ou do catch, apesar que o finally é OPCIONAL</p>';
}
?>

<p>_________________________________________________</p>
<p><br</p>

<?php 
try {
	echo '<h3>Try (Tente)</h3>';
	echo '<p>Executado quando nenhuma exceção ocorrer</p>';
     

	// 
	if (!file_exists('require_arquivo_a.php')) {
        throw new Exception('O arquivo em Questão deveria estar disponível as ' . date('d/m/Y H:i:s') . ' mas não estava.');
    }


	 
} catch(Exception $e) {

	echo '<h3>Catch Exception </h3>';
	echo '<p>Ocorreu um erro porque o arquivo "require_arquivo_a.php" não foi encontrado. Passamos pelo "Catch" devido a essa exceção. </p>';
    
	// mostrando o erro na tela
	echo '<p style="color: red">'  . $e->getMessage() .  '</p>'; 

}

finally {
	echo '<h3>Finalmente (Finally)</h3>';
	echo '<p>Executado sempre, pois independente do resultado sempre vai ser executado, ele vem diretamente do try ou do catch, apesar que o finally é OPCIONAL</p>';
}









// try = Tente
// catch = Capturar(Pegar)
// finally = Finalmente (È Opcional)
// throw = Lancar
?>