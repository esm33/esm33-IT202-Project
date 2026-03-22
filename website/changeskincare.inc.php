<?php
// Name: Emily Morales Medina
// Date: 3/22/2026
// Course: IT202-006
// Assignment Name: Skincare Inventory PHASE 03
// email: esm33@njit.edu


require_once("skincare.php");
if (isset($_SESSION['login'])) {
   $skincareID = $_POST['skincareID'];
   if ((trim($skincareID) == '') or (!is_numeric($skincareID))) {
      echo "<h2>Sorry, you must enter a valid skincare ID</h2>\n";
   } else if (!skincare::findSkincare($skincareID)) {
      echo "<h2>Sorry, A skincare product with ID #$skincareID does not exist</h2>\n";
   } else {
      
      $answer = $_POST['answer'];
      if ($answer == "Update Skincare") {
      $skincare = skincare::findSkincare($skincareID);
      $skincare->skincareID = $_POST['skincareID'];
      $skincare->skincareCode = $_POST['skincareCode'];
      $skincare->skincareName = $_POST['skincareName'];
      $skincare->skincareDescription = $_POST['skincareDescription'];
      $skincare->skincareBrand = $_POST['skincareBrand'];
      $skincare->skincareDosage = $_POST['skincareDosage'];
      $skincare->skincaretypeID = !empty($_POST['skincaretypeID']) ? $_POST['skincaretypeID'] : NULL;
      $skincare->skincareBuyingPrice = $_POST['skincareBuyingPrice'];
      $skincare->skincareSellingPrice = $_POST['skincareSellingPrice'];
      $result = $skincare->updateSkincare();
      if ($result) {
         echo "<h2>Skincare product $skincareID updated</h2>\n";
      } else {
         echo "<h2>Problem updating skincare product $skincareID</h2>\n";
      }
      } else {
            echo "<h2>Update Canceled for item $skincareID</h2>\n";
        }
   }
} else {
    echo "<h2>Please login first</h2>\n";
}
?>