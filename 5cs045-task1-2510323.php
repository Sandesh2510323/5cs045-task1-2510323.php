<?php
$mysqli = new mysqli("localhost", "2510323", "Loginwlv1122", "db2510323");
if ($mysqli->connect_errno) { die("Connection failed: " . $mysqli->connect_error); }
$results = $mysqli->query("SELECT * FROM movies");
?>
<h1>Movies</h1>
<table border="1" cellpadding="6">
  <tr><th>Movie name</th><th>Genre</th><th>Price</th><th>Date of release</th></tr>
  <?php while ($a_row = $results->fetch_assoc()) { ?>
  <tr>
    <td><?= htmlspecialchars($a_row['Movie_name']) ?></td>
    <td><?= htmlspecialchars($a_row['Genre']) ?></td>
    <td>&pound;<?= number_format($a_row['Price'], 2) ?></td>
    <td><?= date("d/m/Y", strtotime($a_row['Date_of_release'])) ?></td>
  </tr>
  <?php } ?>
</table>