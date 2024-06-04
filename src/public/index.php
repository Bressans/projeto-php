<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/database.php';

echo "Conectado ao banco de dados com sucesso!";

// Executando uma query de teste
$stmt = $pdo->query('SELECT * FROM AGENDA LIMIT 1');
while ($row = $stmt->fetch()) {
    echo $row['nome_da_coluna'] . "\n";
}
