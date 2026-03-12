<?php
// Name: Emily Morales Medina
// Date: 3/11/2026
// Course: IT202-006
// Assignment Name: Skincare Inventory PHASE 02
// email: esm33@njit.edu

require_once("skincare.php");
$skincareID = $_POST['skincareID'];
if ((trim($skincareID) == '') or (!is_numeric($skincareID))) {
   echo "<h2>Sorry, you must enter a valid skincare ID</h2>\n";
} else if (!skincare::findSkincare($skincareID)) {
   echo "<h2>Sorry, A skincare product with ID #$skincareID does not exist</h2>\n";
} else {
   $skincareID = $_POST['skincareID'];
   $skincare = skincare::findSkincare($skincareID);
   $result = $skincare->removeSkincare();
   if ($result)
       echo "<h2>Skincare product $skincareID removed</h2>\n";
   else
       echo "<h2>Sorry, problem removing skincare product $skincareID</h2>\n";
}
?>