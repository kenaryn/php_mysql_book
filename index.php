<?php
declare(strict_types=1);

require_once __DIR__. '/vendor/autoload.php';

use App\Entity\Account;
use App\Entity\AccountNumber;

$account = new Account(new AccountNumber(9048594, 8894744), 'Savings', 780.04);

require './templates/includes/header.php';
?>

<header>
  <h1>Functions chapter</h1>
</header>

<h2><?= $account->type ?></h2>
<p>Account number: <?= $account->number->accountNumber ?></p>
<p>Routing number: <?= $account->number->routingNumber ?></p>
<p>Previous balance: <?= $account->getBalance() ?></p>
<p>Current balance: <?= $account->withdraw(300.00) ?></p>

<h2></h2>

<?php
require './templates/includes/footer.php';
?>

