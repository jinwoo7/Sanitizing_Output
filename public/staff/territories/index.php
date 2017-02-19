<?php require_once('../../../private/initialize.php'); ?>
<?php $page_title = 'Staff: Territories'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="main-content">
  <a href="../index.php">Back to Menu</a><br />

  <h1>Territories</h1>

  <a href="new.php">Add a Territory</a><br />
  <br />

  <?php
    $territories_result = find_all_territories();

    echo "<table id=\"users\" style=\"width: 500px;\">";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Same</th>";
    echo "<th>Position</th>";
    echo "<th></th>";
    echo "<th></th>";
    echo "</tr>";
    while($territory = db_fetch_assoc($territories_result)) {
      echo "<tr>";
      echo "<td>" . $territory['name'] . "</td>";
      echo "<td>" . $territory['state_id'] . "</td>";
      echo "<td>" . $territory['position'] . "</td>";
      echo "<td>";
      echo "<a href=\"show.php?id=" . $territory['id'] . "\">Show</a>";
      echo "</td>";
      echo "<td>";
      echo "<a href=\"edit.php?id=" . $territory['id'] . "\">Edit</a>";
      echo "</td>";
      echo "</tr>";
    } // end while $user
    db_free_result($territories_result);
    echo "</table>"; // #$users
  ?>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>