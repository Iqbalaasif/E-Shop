
<?php
// Check if the search query is set
if (isset($_GET['query'])) {
  // Retrieve the search query and sanitize it
  $query = htmlspecialchars($_GET['query']);

  // Search for results using the query
  // ...

  // Display the results
  // ...
}
?>
<?php
// Check if the search query is set
if (isset($_GET['query'])) {
  // Retrieve the search query and sanitize it
  $query = htmlspecialchars($_GET['query']);

  // Search for results using the query
  // ...

  // Display the results
  echo "<h2>Search results for '$query'</h2>";
  echo "<ul>";
  foreach ($result as $result) {
    echo "<li>$result</li>";
  }
  echo "</ul>";
}
?>
