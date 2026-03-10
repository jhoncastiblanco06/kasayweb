<?php
// Le decimos al navegador que devolveremos datos en formato JSON
header('Content-Type: application/json; charset=utf-8');

// Credenciales de tu docker-compose
$host = 'database'; // El nombre del servicio en Docker funciona como el "host" interno
$db   = 'web_DB';
$user = 'manager';
$pass = 'z0LBnvLxjbzRKzWSApCr';
$port = '5432';

try {
    // Conectamos a PostgreSQL usando PDO
    $dsn = "pgsql:host=$host;port=$port;dbname=$db;";
    $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    // Capturamos la letra o palabra que escribió el usuario
    $q = isset($_GET['q']) ? trim($_GET['q']) : '';

    if (strlen($q) > 0) {
        // Usamos ILIKE para que busque sin importar mayúsculas o minúsculas (nativo de Postgres)
        $stmt = $pdo->prepare("SELECT titulo, link FROM search_index WHERE titulo ILIKE :q LIMIT 5");
        $stmt->execute(['q' => '%' . $q . '%']);
        
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($resultados); // Devolvemos la magia en JSON
    } else {
        echo json_encode([]);
    }
} catch (PDOException $e) {
    // Si falla la conexión, devolvemos un error para que JavaScript no colapse
    echo json_encode(['error' => 'Error de base de datos: ' . $e->getMessage()]);
}
?>