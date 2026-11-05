<?php
// PHP-compatible entry point for Batool's ExamMate.
// Upload this file together with index.html and the assets/ folder to PHP hosting.
$index = __DIR__ . '/index.html';
if (is_file($index)) {
    header('Content-Type: text/html; charset=UTF-8');
    readfile($index);
    exit;
}
http_response_code(500);
echo 'Batool\'s ExamMate files are incomplete: index.html was not found.';
?>
