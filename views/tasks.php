<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des tâches - Gestionnaire de tâches</title>
    <link rel="stylesheet" href="/DemoMVCAlpha/assets/style.css">
</head>
<body>
    <?php require 'views/partials/nav.php'; ?>
    <main class="container">
        <div class="card">
            <h1>Liste des tâches</h1>
            <ul class="task-list">
                <?php foreach ($tasks as $task): ?>
                    <li class="task-item">
                        <a href="/DemoMVCAlpha/tasks/<?php echo $task['id']; ?>">
                            <?php echo htmlspecialchars($task['title']); ?>
                        </a>
                        <span class="status-badge" data-status="<?php echo htmlspecialchars($task['status']); ?>">
                            <?php echo htmlspecialchars($task['status']); ?>
                        </span>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </main>
</body>
</html>
