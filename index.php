<?php
declare(strict_types=1);

require_once __DIR__. '/vendor/autoload.php';

use App\Entity\Account;
use App\Entity\Customer;
use App\Entity\User;

$accounts = [
   new Account(8498754, 'Checking', -20),
   new Account(239438, 'Savings', 432.00),
   new Account(28238, 'Savings', 3002.08),
];
$customer = new Customer('Kena', 'Aerynth', 'kena@tuta.com', 'iamfree', $accounts);

$username = 'kena';
$user_array = [
   'name' => 'kena',
   'age' => 39,
   'active' => true,
];

$aurele = new User('Aurele', 39, true);

require './templates/includes/header.php';
?>

<header>
  <h1>Objects chapter</h1>
</header>

<h4>Name: <?= $customer->getFullName() ?></h4>

<table>
   <tr>
      <th>Account number</th>
      <th>Account type</th>
      <th>Balance</th>
   </tr>

<?php foreach ($customer->accounts as $account) { ?>
   <tr>
      <td><?= $account->number ?></td>
      <td><?= $account->type ?></td>
      <?php if ($account->getBalance() >= 0) { ?>
         <td class="credit">
      <?php } else { ?>
         <td class="overdrawn">
      <?php } ?>
      $ <?= $account->getBalance() ?></td>
   </tr>
<?php } ?>
</table>


<table class="table">
   <tr><th colspan="2" class="title">Data about browser sent in HTTP headers</th></tr>
   <tr><th>Browser's IP address</th><td><?= $_SERVER['REMOTE_ADDR'] ?></td></tr>
   <tr><th>Type of browser</th><td><?= $_SERVER['HTTP_USER_AGENT'] ?></td></tr>
   <tr><th colspan="2" class="title">HTTP request</th></tr>
   <tr><th>Host name</th><? $_SERVER['HTTP_HOST'] ?><td></td></tr>
   <tr><th>URI after host name</th><td><?= $_SERVER['REQUEST_URI'] ?></td></tr>
   <tr><th>Query string</th><td><?= $_SERVER['QUERY_STRING'] ?></td></tr>
   <tr><th>HTTP request method</th><td><?= $_SERVER['REQUEST_METHOD'] ?></td></tr>
   <tr><th colspan="2" class="title">Location of the file being executed</th></tr>
   <tr><th>Document root</th><td><?= $_SERVER['DOCUMENT_ROOT'] ?></td></tr>
   <tr><th>Path from document root</th><td><?= $_SERVER['SCRIPT_NAME'] ?></td></tr>
   <tr><th>Absolute path</th><td><?= $_SERVER['SCRIPT_FILENAME'] ?></td></tr>
</table>

<table class="table">
   <tr><th>Scalar</th><td><?php var_dump($username) ?></td></tr>
   <tr><th>Array</th><td><?php var_dump($user_array) ?></td></tr>
   <tr><th>Object</th><td><?php var_dump($aurele) ?></td></tr>
</table>

<?php
require './templates/includes/footer.php';
?>

