<?php
class StudentController {
    public function index(): void {
        $studentModel = new Student();

        $students = $studentModel->getAll();

        require __DIR__ . '/../Views/students/index.php';
    }

    public function create(): void {
        require __DIR__ . '/../Views/students/create.php';
    }
}