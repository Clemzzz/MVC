<?php
class TaskController {
    public function index() {
        $taskModel = new Task();
        $tasks = $taskModel->getAllTasks();

        require_once 'views/tasks.php';
    }

    public function show($id) {
        if (filter_var($id, FILTER_VALIDATE_INT) === false || (int)$id <= 0) {
            http_response_code(404);
            require_once 'views/404.php';
            return;
        }

        $taskModel = new Task();
        $task = $taskModel->getTaskById((int)$id);

        if ($task === null) {
            http_response_code(404);
            require_once 'views/404.php';
            return;
        }

        require_once 'views/view_detail.php';
    }
}