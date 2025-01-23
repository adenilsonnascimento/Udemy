<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    <h1>Trabalhando com Datas em PHP</h1>
    <p>Este exemplo demonstra como recuperar a data atual, ajustar o fuso horário, e calcular a diferença em dias entre duas datas usando funções de timestamp em PHP.</p>

    <?php
    // Recuperação da data atual ou data corrente
    // dia/mes/ano horas:minutos
    echo "Data atual: " . date('d/m/Y H:i') . "<br />";

    // Exibir o fuso horário atual
    echo "Fuso horário atual: " . date_default_timezone_get() . "<br />";

    // Alterar o fuso horário para São Paulo, Brasil
    date_default_timezone_set('America/Sao_Paulo');
    echo "Novo fuso horário: " . date_default_timezone_get() . "<br />";
    echo "Data atual no novo fuso horário: " . date('d/m/Y H:i') . "<br />";

    // Definição das datas inicial e final
    $data_inicial = '2018-04-24';
    $data_final = '2018-05-15';

    // Conversão das datas para timestamps
    $time_inicial = strtotime($data_inicial);
    $time_final = strtotime($data_final);
    echo "Data inicial: $data_inicial - Timestamp: $time_inicial<br />";
    echo "Data final: $data_final - Timestamp: $time_final<br />";

    // Cálculo da diferença em segundos entre as datas
    $diferenca_times = $time_final - $time_inicial;
    echo "A diferença de segundos entre a data inicial e final é: $diferenca_times<br />";

    // Cálculo da quantidade de segundos em um dia
    $segundos_existem_dia = 24 * 60 * 60;
    echo "Um dia possui $segundos_existem_dia segundos<br />";

    // Cálculo da diferença em dias entre as datas
    $diferenca_de_dias_entre_as_datas = $diferenca_times / $segundos_existem_dia;
    echo "A diferença em dias é: $diferenca_de_dias_entre_as_datas<br />";
    ?>

    <p>
        <strong>Explicações Detalhadas:</strong><br>
        1. <strong>Recuperação da Data Atual</strong>:<br>
        - <strong>Função</strong>: <code>date('d/m/Y H:i')</code><br>
        - <strong>Descrição</strong>: Recupera a data e hora atuais no formato <code>dia/mês/ano horas:minutos</code>.<br><br>

        2. <strong>Fuso Horário Atual</strong>:<br>
        - <strong>Função</strong>: <code>date_default_timezone_get()</code><br>
        - <strong>Descrição</strong>: Retorna o fuso horário atual configurado no PHP.<br><br>

        3. <strong>Alteração do Fuso Horário</strong>:<br>
        - <strong>Função</strong>: <code>date_default_timezone_set('America/Sao_Paulo')</code><br>
        - <strong>Descrição</strong>: Altera o fuso horário para São Paulo, Brasil.<br><br>

        4. <strong>Conversão de Datas para Timestamps</strong>:<br>
        - <strong>Função</strong>: <code>strtotime($data)</code><br>
        - <strong>Descrição</strong>: Converte uma data no formato <code>YYYY-MM-DD</code> para um timestamp Unix (segundos desde 01/01/1970).<br><br>

        5. <strong>Cálculo da Diferença em Segundos</strong>:<br>
        - <strong>Descrição</strong>: Calcula a diferença em segundos entre duas datas convertidas para timestamps.<br><br>

        6. <strong>Cálculo da Quantidade de Segundos em um Dia</strong>:<br>
        - <strong>Descrição</strong>: Calcula a quantidade de segundos em um dia (24 horas).<br><br>

        7. <strong>Cálculo da Diferença em Dias</strong>:<br>
        - <strong>Descrição</strong>: Divide a diferença em segundos entre as datas pela quantidade de segundos em um dia para obter a diferença em dias.<br>
    </p>
</body>
</html>