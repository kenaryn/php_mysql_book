<?php

declare(strict_types=1);
require '../templates/includes/header.php';

require '../src/tools/functions.php';
?>

<a class="badlink" href="xss-1.php?msg=<script src=../js/bad.js></script>">Demonstrate XSS attack</a>

<?php
$message = $_GET['msg'] ?? 'Click link to show you how to hack maliciously!';
?>

<h3>XSS example</h3>
<p><?= htmlEscape($message) ?></p>

<?php require '../templates/includes/footer.php'; ?>