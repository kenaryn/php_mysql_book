<?php
declare(strict_types=1);

require_once __DIR__. '/vendor/autoload.php';

use App\Entity\Account;
use App\Entity\AccountNumber;

$account = new Account($numbers, 'Savings', 780.04);
$aurele = new AccountNumber(9048594, 8894745);
?>

require './templates/includes/header.php';

<header>
  <h1>Functions chapter</h1>
</header>

<h2><?= $account->type ?></h2>
<p>Account number: <?= $account->numbers['account_number'] ?></p>
<p>Routing number: <?= $account->numbers['routing_number'] ?></p>
<p>Balance: <?= $account->getBalance() ?></p>

<h2></h2>

<?php
require './templates/includes/footer.php';
?>

