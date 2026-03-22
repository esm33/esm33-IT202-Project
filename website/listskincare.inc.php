<?php
// Name: Emily Morales Medina
// Date: 3/12/2026
// Course: IT202-006
// Assignment Name: Skincare Inventory PHASE 02
// email: esm33@njit.edu


require_once("skincare.php");
$skincare_products = skincare::getSkincare();
if ($skincare_products) {

?>
  <h2>Select Skincare</h2>
  <form name="skincare_products_form" method="post">
    <select name="skincareID" size="20">
      <?php
      $first = true;
      foreach ($skincare_products as $skincare) {
        $skincareID = $skincare->skincareID;
        $skincareCode = $skincare->skincareCode;
        $skincareName = $skincare->skincareName;
        $skincareDescription = $skincare->skincareDescription;
        $skincareBrand = $skincare->skincareBrand;
        $skincareDosage = $skincare->skincareDosage;
        $skincareBuyingPrice = $skincare->skincareBuyingPrice;
        $option = $skincareID . " - " . $skincareName .  " - " . $skincareCode . " - " . $skincareDescription . " - " . $skincareBrand . " - " . $skincareDosage . " - " . $skincareBuyingPrice;
        // echo "$option<br>";
        if ($first) {
          echo "<option value=\"$skincareID\" selected>$option</option>\n";
          $first = false;
        } else {
          echo "<option value=\"$skincareID\">$option</option>\n";
        }
      }
      ?>
    </select>
  </form>
<?php
} else {
  echo "<h2>No skincare products found.</h2>";
}
?>