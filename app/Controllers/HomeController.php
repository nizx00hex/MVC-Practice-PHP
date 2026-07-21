<?php
class HomeController {
    public function index(): void {
        $studentModel = new Student();

        $students = $studentModel->getAll();

        require __DIR__ . '/../Views/home.php';
    }
}