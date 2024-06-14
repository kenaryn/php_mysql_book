<?php
declare(strict_types=1);

require './templates/includes/header.php';

$str = 'Using PHP\'s regular expression functions';
$path = 'code/section_b/c05';

$match = preg_match('/PHP/', $str);
$path = preg_split('/\//', $path);
$str = preg_replace('/PHP/', '<em>Rust</em>', $str);

$num = 432.146;

$greetings = ['Hi', 'Hello', 'Bonjour', 'Howdy', 'Hola', 'Priviet', 'Ciao', 'Welcome'];
$greeting_key = array_rand($greetings);
$greeting = $greetings[$greeting_key];

$bestsellers = ['ink', 'pencil', 'scissors', 'notebook', 'blank eraser'];
$bestsellers_count = count($bestsellers);
$bestsellers_text = implode(', ', $bestsellers);
$furnitures = explode(', ', $bestsellers_text);
$customer = [
   'forename' => 'Aurèle',
   'surname' => 'Aerynth',
   'emaill' => 'aurele@tuta.com',
];

if (array_key_exists('forename', $customer)) {
   $greeting .= ' ' . $customer['forename'];
}
?>

<table class="table">
   <tr><th>Was a match found?</th><td><?= ($match === 1) ? 'yes' : 'No' ?></td></tr>
   <tr><th>Parts of a path</th></tr>
      <?php foreach($path as $part) { ?>
         <tr><td><?= $part ?></td></tr>
      <?php } ?>
      <tr><th>Updated text</th><td><?= $str ?></td></tr>
      </table>
      
      <table class="table">
         <tr><th>Round:</th><td><?= round($num) ?></td></tr>
         <tr><th>Round to 2 decimal places:</th><td><?= round($num, 2) ?></td></tr>
         <tr><th>Round half up:</th><td><?= round(num: 11.5, mode: PHP_ROUND_HALF_UP) ?></td></tr>
   <tr><th>Round half down:</th><td><?= round(num: 11.5, mode: PHP_ROUND_HALF_DOWN) ?></td></tr>
   <tr><th>Round up:</th><td><?= ceil($num) ?></td></tr>
   <tr><th>Round down:</th><td><?= floor($num) ?></td></tr>
   <tr><th>Random number:</th><td><?= mt_rand(4, 11) ?></td></tr>
   <tr><th>Exponential:</th><td><?= pow(4, 5) ?></td></tr>
   <tr><th>Square root:</th><td><?= round(sqrt($num), 3) ?></td></tr>
   <tr><th>Is a number:</th><td><?= is_numeric($num) ?></td></tr>
   <tr><th>Format number:</th><td><?= number_format(92223982108.764556, 2,) ?></td></tr>
   </table>
   
<h4>Best sellers</h4>

<p><?= $greeting ?></p>
<p>Our top <?= $bestsellers_count ?> item today are: <em><?= $bestsellers_text ?></em></p>

<table class="table">
   <tr><th>Furniture</th></tr>
   <?php foreach ($furnitures as $furniture) { ?>
      <tr><td><?= $furniture ?></td></tr>
      <?php } ?>
      </table>
      
      <?php
var_export($furnitures) ;

array_unshift($bestsellers, 'glue stick');
$item = ['ink', 'pencil', 'scissors', 'notebook', 'blank eraser'];
?>
 
 <?php
require './templates/includes/footer.php';
?>