<?php
declare(strict_types=1);
$path = '../assets/images/logo.jpg';

$devorer = [
   'latin' => 'demiurgos',
   'greek' => 'abraxas',
   'hebrew' => 'ialdabaoth',
];
$entity = $_GET['entity'];
$name = $devorer[$entity];
?>

<?php
require '../templates/includes/header.php';
?>

<h2>Login area</h2>
<p>Full login system about to be implemented.</p>

<?php if (file_exists($path)) { ?>
   <b>Name: </b><?= pathinfo($path, PATHINFO_BASENAME) ?></br>
   <b>Size: </b><?= round(filesize($path) / 1024, 1) ?>KiB</br>
   <b>Mime type: </b><?= mime_content_type($path) ?></br>
   <b>Folder: </b><?= dirname($path) ?></br>
   <b>Real path's folder: </b><?= realpath($path) ?></br>
<?php } else { ?>
   <p>There is no such file.</p>
<?php } ?>

<?php foreach ($devorer as $origin => $name) { ?>
   <a href="login.php?entity=<?= $origin ?>"><?= $origin ?></a>
<?php } ?>

<h4><?= $entity ?></h4>
<p><?= $name ?></p>

<?php var_dump($_GET); ?>

<?php
require '../templates/includes/footer.php';
?>