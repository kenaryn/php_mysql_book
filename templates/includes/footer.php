<?php
declare(strict_types=1);

function writeCopyrightNotice(): string
{
  $year = date('Y');
  return '&copy; '. $year;
}
?>

<footer>
  <p><?= writeCopyrightNotice() ?></p> 
</footer>
</body>
</html>