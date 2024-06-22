<?php
declare(strict_types=1);

$devorer = [
   'greek' => 'abraxas',
   'hebrew' => 'ialdabaoth',
   'latin' => 'demiurgos',
];

$entity = $_GET['entity'] ?? '';
$valid = array_key_exists($entity, $devorer);

if (!$valid) {
   http_response_code(404);
   header('Location: 404.php');
   exit(2);
}

$name = $devorer[$entity];
?>

<?php require '../templates/includes/header.php'; ?>

<?php foreach ($devorer as $origin => $surname) { ?>
   <a href="index.php?entity=<?= $origin ?>"><?= $origin ?></a>
<?php } ?>

<h4><?= $entity ?></h4>
<p><?= $name ?></p>

<?php require '../templates/includes/footer.php'; ?>