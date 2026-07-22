<?php

require_once __DIR__ . '/../app/Core/Database.php';

$database = new Database();

$connection = $database->getConnection();

echo 'Database connected successfully.';