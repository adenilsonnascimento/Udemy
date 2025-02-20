<?php
// Bloco inicial do código.

try {
	// Início do bloco try, onde a lógica principal é executada.
	echo '<h3> *** Try *** </h3>'; // Mensagem indicando que o bloco try está sendo executado.

	// Simulação de uma lógica onde pode ocorrer um erro (exceção).
	// Exemplo comentado de uma consulta SQL que poderia gerar um erro:
	// $sql = 'Select * from clientes';
	// mysql_query($sql); // Erro potencial ao tentar executar uma consulta inválida.

	// Verifica se o arquivo 'require_arquivo_a.php' existe.
	if (!file_exists('require_arquivo_a.php')) {
		// Se o arquivo não existir, lança uma exceção personalizada.
		throw new Exception('O arquivo em questão deveria estar disponível as ' . date('d/m/Y H:i:s') . ' mas não estava. Vamos seguir mesmo assim!');
	}
} catch (Error $e) {
	// Bloco catch para capturar erros do tipo Error (erros fatais ou problemas de sintaxe).
	echo '<h3> *** Catch Error *** </h3>'; // Mensagem indicando que um erro foi capturado.
	echo '<p style="color: red">' . $e . '</p>'; // Exibe a mensagem de erro em vermelho.
	// Aqui poderia haver código para armazenar o erro em um banco de dados.
} catch (Exception $e) {
	// Bloco catch para capturar exceções do tipo Exception (lançadas manualmente ou por problemas específicos).
	echo '<h3> *** Catch Exception *** </h3>'; // Mensagem indicando que uma exceção foi capturada.
	echo '<p style="color: red">' . $e->getMessage() . '</p>'; // Exibe a mensagem da exceção em vermelho.
	// Aqui poderia haver código para armazenar a exceção em um banco de dados.
} finally {
	// Bloco finally, que sempre será executado, independentemente de ter ocorrido erro ou não.
	echo '<h3> *** Finally *** </h3>'; // Mensagem indicando que o bloco finally está sendo executado.
}

// Continuação da lógica após o bloco try-catch-finally.
/*
try {
    // Outro bloco try que pode ser usado para encapsular outra lógica onde pode ocorrer um erro.
}
*/