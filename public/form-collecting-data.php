<?php

declare(strict_types=1);

require '../src/tools/functions.php';

# POST method
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//    $term = $_POST['term'] ?? '';
//    if ($term) {
//       echo 'You searched for ' . htmlEscape($term);
//    }

# GET method
$submitted = $_GET['mysearch'] ?? '';
if ($submitted === 'submit') {
   $term = $_GET['term'] ?? '';
   if ($term) {
      echo 'You searched for ' . htmlEscape($term);
   }
} else { ?>
   <form action="form-collecting-data.php" method="GET">
      <p>Name: <input type="text" name="name"></p>
      <p>Email: <input type="email" name="email"></p>
      <p>Age: <input type="number" name="age"></p>
      <p>Pass word: <input type="password" name="password"></p>
      <p>Biography: <textarea name="biography"></textarea></p>

      <p><select name="preferences">
            <option value="email">Email</option>
            <option value="phone">Phone</option>
         </select></p>
      <p>Rating:
         1<input type="radio" name="rating" value="1">&nbsp;
         2<input type="radio" name="rating" value="2">&nbsp;
         3<input type="radio" name="rating" value="3"></p>
      <p><input type="checkbox" name="terms" value="true">
         I agree to the terms and conditions</p>

      <input type="hidden" name="mysearch" value="submit">
      <p>Search for: <input type="search" name="term"></p>

      <input type="submit" name="sent" value="search">
   </form>
<?php } ?>

<!-- <pre><?php var_dump($_POST); ?></pre> -->
<!-- <?= $_SERVER['REQUEST_METHOD'] ?> -->
