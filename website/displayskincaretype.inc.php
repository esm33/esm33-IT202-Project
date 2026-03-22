<?php

// Name: Emily Morales Medina
// Date: 3/22/2026
// Course: IT202-006
// Assignment Name: Skincare Inventory PHASE 03
// email: esm33@njit.edu

require_once("skincaretype.php");
require_once("skincare.php");

if (!isset($_REQUEST['skincareTypeID']) or (!is_numeric($_REQUEST['skincareTypeID']))) {
?>
    <h2>You did not select a valid skincareTypeID to view.</h2>
    <a href="index.php?content=listskincaretypes">List Skincare Types</a>
    <?php
} else {
    $skincareTypeID = $_REQUEST['skincareTypeID'];
    $skincareType = skincaretype::findSkincareType($skincareTypeID);
    if ($skincareType) {
        echo $skincareType;
        $skincareproducts = skincare::getSkincareByType($skincareTypeID);
        if ($skincareproducts) {
    ?>
            <br><br>
            <b>Skincare Products:</b><br>
            <table>
                <tr>
                    <th>Skincare</th>
                    <th>Name</th>
                    <th>Price</th>
                </tr>
                <?php
                $skincaretotal = 0;
                foreach ($skincareproducts as $skincare) {
                ?>
                    <tr>
                        <td><?php echo $skincare->skincareID; ?></td>
                        <td><?php echo $skincare->skincareName; ?></td>
                        <td><?php echo $skincare->skincareSellingPrice; ?></td>
                    </tr>
                <?php
                    $skincaretotal = $skincaretotal + $skincare->skincareSellingPrice;
                }
                ?>
                <tr>
                    <td></td>
                    <td>Total</td>
                    <td><?php echo '$' . number_format($skincaretotal, 2); ?></td>
                </tr>
            </table>
<?php
        } else {
            echo "<h2>There are no skincare products for this type</h2>\n";
        }
    } else {
        echo "<h2>Sorry, skincare type $skincareTypeID not found</h2>\n";
    }
}
?>