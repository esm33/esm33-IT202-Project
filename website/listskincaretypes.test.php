<?php

// Name: Emily Morales Medina
// Date: 3/11/2026
// Course: IT202-006
// Assignment Name: Skincare Inventory PHASE 02
// email: esm33@njit.edu

require_once("skincaretype.php");
$skincareTypes = skincaretype::getSkincareTypes();
if ($skincareTypes) {
  foreach ($skincareTypes as $skincareType) {
     $skincareTypeID = $skincareType->skincareTypeID;
     $name = $skincareTypeID . " - " . $skincareType->skincareTypeCode . ", " . $skincareType->skincareTypeName. ", Shelf: " . $skincareType->skincareShelfNumber;
     echo "$name<br>";
  }
} else {
  echo "<h2>No skincare types found.</h2>";
}
?>