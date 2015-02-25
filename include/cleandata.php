<?php
// Function to help clean data inputs
// To make sure that they are trimmed (no whitspaces),
// Unquote, and convert special characters to HTML entities for hack prevention 

function cleandata($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>