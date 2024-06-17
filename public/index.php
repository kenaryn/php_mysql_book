<?php
declare(strict_types=1);

$logged_in = false;
if (!$logged_in) {
   header('Location: login.php');
   exit;
}

// header('Content-type: application/json');
// header('Cache-control: max-age=86400, public');

require_once '../config/constants.php';
require_once '../templates/includes/header.php';
?>

<h2>Welcome to <?= SITE_NAME ?> member area</h2>
<p>You are now in an exclusive area.</p>
<p>To contact me, email <?= ADMIN_EMAIL ?></p>

<?php
require_once '../templates/includes/footer.php';
?>