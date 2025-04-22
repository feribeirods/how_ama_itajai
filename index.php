<?php
require_once 'config/database.php';
require_once 'includes/header.php';

// Exemplo de consulta usando PDO
$db = Database::getConnection();
$stmt = $db->query("SELECT * FROM usuarios");
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<main>
    <h1>Lista de Usuários</h1>
    <ul>
        <?php foreach ($usuarios as $usuario): ?>
            <li><?= htmlspecialchars($usuario['nome']) ?></li>
        <?php endforeach; ?>
    </ul>
</main>

<?php require_once 'includes/footer.php'; ?>
