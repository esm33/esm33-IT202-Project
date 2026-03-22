<?php
// Name: Emily Morales Medina
// Date: 3/20/2026
// Course: IT202-006
// Assignment Name: Skincare Inventory PHASE 03
// email: esm33@njit.edu
print_r($_POST);
require_once("skincaretype.php");
if (isset($_SESSION['login'])) {
  $skincareTypeID = $_POST['skincareTypeID'];
  if ((trim($skincareTypeID) == '') or (!is_numeric($skincareTypeID))) {
    echo "<h2>Sorry, you must enter a valid skincare type ID number</h2>\n";
  } else if (skincaretype::findSkincareType($skincareTypeID)) {
    echo "<h2>Sorry, A skincare type with the ID #$skincareTypeID already exists</h2>\n";
  } else {
    $skincareTypeCode = $_POST['skincareTypeCode'];
    $skincareTypeName = $_POST['skincareTypeName'];
    $skincareTypeShelfNumber = $_POST['skincareShelfNumber'];
    $skincareType = new skincaretype($skincareTypeID, $skincareTypeCode, $skincareTypeName, $skincareTypeShelfNumber);
    $result = $skincareType->saveSkincareType();
    if ($result) {
      echo "<h2>New Skincare Type #$skincareTypeID successfully added</h2>\n";
    } else {
      echo "<h2>Sorry, there was a problem adding that skincare type</h2>\n";
    }
  }
} else {
  echo "<h2>Please log in first</h2>\n";
}
