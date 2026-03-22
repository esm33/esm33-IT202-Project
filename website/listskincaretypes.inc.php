<?php

// Name: Emily Morales Medina
// Date: 3/22/2026
// Course: IT202-006
// Assignment Name: Skincare Inventory PHASE 03
// email: esm33@njit.edu

require_once("skincaretype.php");
$skincareTypes = skincaretype::getSkincareTypes();
if ($skincareTypes) {
?>
    <h2>Select Skincare Types</h2>
    <form name="skincareTypeID" method="post">
        <select name="skincareTypeID" size="20">
            <?php
            $first = true;
            foreach ($skincareTypes as $skincareType) {
                $skincareTypeID = $skincareType->skincareTypeID;
                $name = $skincareTypeID . " - " . $skincareType->skincareTypeCode . ", " . $skincareType->skincareTypeName . ", Shelf: " . $skincareType->skincareShelfNumber;
                if ($first) {
                    echo "<option value=\"$skincareTypeID\" selected>$name</option>\n";
                    $first = false;
                } else {
                    echo "<option value=\"$skincareTypeID\">$name</option>\n";
                }
            }
            ?>
        </select>
    </form>
<?php
} else {
    echo "<h2>No skincare types found.</h2>";
}
?>
