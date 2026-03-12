<?php
// Name: Emily Morales Medina
// Date: 3/11/2026
// Course: IT202-006
// Assignment Name: Skincare Inventory PHASE 02
// email: esm33@njit.edu

require_once('skincare.php');
$skincareID = $_POST['skincareID'];
if ((trim($skincareID) == '') or (!is_numeric($skincareID))) {
   echo "<h2>Sorry, you must enter a valid skincare ID number</h2>\n";
} else if (skincare::findSkincare($skincareID)) {
  echo "<h2>Sorry, A skincare product with the ID #$skincareID already exists</h2>\n";
} else {
   $skincareName = $_POST['skincareName'];
   $skincareCode = $_POST['skincareCode'];
   $skincareDescription = $_POST['skincareDescription'];
   $skincareBrand = $_POST['skincareBrand'];
   $skincareDosage = $_POST['skincareDosage'];
   $skincaretypeID = !empty($_POST['skincaretypeID']) ? $_POST['skincaretypeID'] : NULL;
   $skincareBuyingPrice = $_POST['skincareBuyingPrice'];
   $skincareSellingPrice = $_POST['skincareSellingPrice'];
   $skincare = new skincare($skincareID, $skincareCode, $skincareName, $skincareDescription, $skincareBrand, $skincareDosage, $skincaretypeID, $skincareBuyingPrice, $skincareSellingPrice);
   $result = $skincare->saveSkincare();
   if ($result)
       echo "<h2>New skincare product #$skincareID successfully added</h2>\n";
   else
       echo "<h2>Sorry, there was a problem adding that skincare product</h2>\n";
}
?>