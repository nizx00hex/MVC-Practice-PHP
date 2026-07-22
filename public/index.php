<?php
require_once __DIR__ . '/../app/Core/Database.php';
require_once __DIR__ . '/../app/Models/Student.php';
require_once __DIR__ . '/../app/Controllers/HomeController.php';
require_once __DIR__ . '/../app/Controllers/StudentController.php';


$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];



if($uri === '/' && $method === 'GET') {
    $controller = new HomeController();
    $controller->index();
}

else if ($uri === '/students' && $method === 'GET') {
    $controller = new StudentController();
    $controller->index();
}

else if ($uri === '/students/create' && $method === 'GET') {
    $controller = new StudentController();
    $controller->create();
}

else {
    http_response_code(404);
    echo "<h1>404, Page Not Found</h1>";
    print_r($uri);
// print_($_SERVER['REQUEST_METHOD']);

}
