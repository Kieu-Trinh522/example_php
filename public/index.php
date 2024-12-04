<?php
require_once __DIR__ . '/../app/controllers/UserControllers.php'; 
$controller = new UserControllers(); 
if ($_SERVER['REQUEST_URI'] === '/') {
    $controller->index(); 
}
?>
