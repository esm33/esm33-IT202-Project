<?php
// Name: Emily Morales Medina
// Date: 3/11/2026
// Course: IT202-006
// Assignment Name: Skincare Inventory PHASE 02
// email: esm33@njit.edu


require_once("skincaretype.php");
$skincareTypeID = $_POST['skincareTypeID'];
if ((trim($skincareTypeID) == '') or (!is_numeric($skincareTypeID))) {
  echo "<h2>Sorry, you must enter a valid skincare type ID</h2>\n";
} else if (!skincaretype::findSkincareType($skincareTypeID)) {
  echo "<h2>Sorry, A skincare type with ID #$skincareTypeID does not exist</h2>\n";
} else {
  $skincareType = skincaretype::findSkincareType($skincareTypeID);
  $skincareType->skincareTypeID = $_POST['skincareTypeID'];
  $skincareType->skincareTypeCode = $_POST['skincareTypeCode'];
  $skincareType->skincareTypeName = $_POST['skincareTypeName'];
  $skincareType->skincareShelfNumber = $_POST['skincareShelfNumber'];
  $result = $skincareType->updateSkincareType();
  if ($result) {
     echo "<h2>Skincare Type $skincareTypeID updated</h2>\n";
  } else {
     echo "<h2>Problem updating Skincare Type $skincareTypeID</h2>\n";
  }
}
?>