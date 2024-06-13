<?php
declare(strict_types=1);

require './templates/includes/header.php';

$str = 'Using PHP\'s regular expression functions';
$path = 'code/section_b/c05';

$match = preg_match('/PHP/', $str);
$path = preg_split('/\//', $path);
$str = preg_replace('/PHP/', '<em>Rust</em>', $str);
?>

<table class="table">
   <tr><th>Was a match found?</th><td><?= ($match === 1) ? 'yes' : 'No' ?></td></tr>
   <tr><th>Parts of a path</th></tr>
      <?php foreach($path as $part) { ?>
         <tr><td><?= $part ?></td></tr>
      <?php } ?>
   <tr><th>Updated text</th><td><?= $str ?></td></tr>
</table>
   
<?php
require './templates/includes/footer.php';
?>