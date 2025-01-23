
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    <h1>Funções Matemáticas em PHP</h1>
    <p>Este exemplo demonstra várias funções matemáticas em PHP, como arredondamento, geração de números aleatórios e cálculo de raiz quadrada. Abaixo estão as explicações detalhadas de cada função utilizada.</p>

    <?php
    // Exemplo de número para arredondamento
    $num = 7.5;

    // ceil() - Arredonda o número para cima
    echo "Número original: $num<br />";
    echo "Arredondado para cima (ceil): " . ceil($num) . "<br />";
    echo "<hr/>";

    // floor() - Arredonda o número para baixo
    echo "Número original: $num<br />";
    echo "Arredondado para baixo (floor): " . floor($num) . "<br />";
    echo "<hr/>";

    // round() - Arredonda o número com base na fração
    // .0 a .4 arredonda para baixo, .5 a .9 arredonda para cima
    echo "Número original: $num<br />";
    echo "Arredondado com base na fração (round): " . round($num) . "<br />";
    echo "<hr/>";

    // rand() - Gera um número aleatório entre dois valores
    $min = 10;
    $max = 20;
    echo "Número aleatório entre $min e $max: " . rand($min, $max) . "<br />";
    echo "<hr/>";

    // getrandmax() - Retorna o maior valor possível para um número aleatório
    echo "Maior valor possível para um número aleatório (getrandmax): " . getrandmax() . "<br />";
    echo "<hr/>";

    // sqrt() - Calcula a raiz quadrada de um número
    $num = 9;
    echo "Raiz quadrada de $num (sqrt): " . sqrt($num) . "<br />";
    ?>

    <p>### Explicações Detalhadas:

1. **`ceil($num)`**:
   - **Descrição**: Arredonda o número para cima, para o próximo número inteiro.
   - **Exemplo**: `ceil(7.5)` retorna `8`.

2. **`floor($num)`**:
   - **Descrição**: Arredonda o número para baixo, para o número inteiro anterior.
   - **Exemplo**: `floor(7.5)` retorna `7`.

3. **`round($num)`**:
   - **Descrição**: Arredonda o número com base na fração. Se a fração for de 0.0 a 0.4, arredonda para baixo; se for de 0.5 a 0.9, arredonda para cima.
   - **Exemplo**: `round(7.5)` retorna `8`, `round(7.4)` retorna `7`.

4. **`rand($min, $max)`**:
   - **Descrição**: Gera um número aleatório entre os valores mínimo e máximo especificados.
   - **Exemplo**: `rand(10, 20)` pode retornar qualquer valor entre `10` e `20`.

5. **`getrandmax()`**:
   - **Descrição**: Retorna o maior valor possível que pode ser gerado aleatoriamente pelo sistema.
   - **Exemplo**: O valor retornado depende do sistema operacional, mas geralmente é um número muito grande.

6. **`sqrt($num)`**:
   - **Descrição**: Calcula a raiz quadrada de um número.
   - **Exemplo**: `sqrt(9)` retorna `3`.

Espero que essas explicações detalhadas ajudem a entender melhor cada função matemática utilizada no seu código PHP. Se tiver mais dúvidas ou precisar de mais informações, estou aqui para ajudar! 😊</p>
</body>
</html>
