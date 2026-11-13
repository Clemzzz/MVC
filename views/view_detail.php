<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail de la tâche</title>
    <link rel="stylesheet" href="/DemoMVCAlpha/assets/style.css">
</head>
<body>
    <?php require 'views/partials/nav.php'; ?>
    <main class="container">
        <div class="card">
            <div class="task-header">
                <h1>Tâche #<?php echo htmlspecialchars($task['id']); ?></h1>
                <span class="status-badge" data-status="<?php echo htmlspecialchars($task['status']); ?>">
                    <?php echo htmlspecialchars($task['status']); ?>
                </span>
            </div>
            <p class="task-title"><?php echo htmlspecialchars($task['title']); ?></p>
            <?php if (!empty($task['description'])): ?>
                <p><?php echo htmlspecialchars($task['description']); ?></p>
            <?php endif; ?>
            <a class="btn" href="/DemoMVCAlpha/tasks">Retour à la liste</a>
        </div>
    </main>
</body>
</html>