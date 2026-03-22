<?php

// Name: Emily Morales Medina
// Date: 3/22/2026
// Course: IT202-006
// Assignment Name: Skincare Inventory PHASE 03
// email: esm33@njit.edu


require_once("skincare.php");
require_once("skincaretype.php");

if (!isset($_POST['skincareID']) or (!is_numeric($_POST['skincareID']))) {
?>
    <h2>You did not select a valid skincareID value</h2>
    <a href="index.php?content=listskincare">List skincare products</a>
    <?php
} else {
    $skincareID = $_POST['skincareID'];
    $skincare = skincare::findSkincare($skincareID);
    if ($skincare) {
    ?>
        <h2>Update Skincare Product <?php echo $skincare->skincareID; ?></h2><br>
        <form name="skincare" action="index.php" method="post">
            <table>
                <tr>
                    <td>Skincare ID</td>
                    <td><?php echo $skincare->skincareID; ?></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="skincareName" value="<?php echo $skincare->skincareName; ?>"></td>
                </tr>
                <tr>
                    <td>Code</td>
                    <td><input type="text" name="skincareCode" value="<?php echo $skincare->skincareCode; ?>"></td>
                </tr>
                <tr>
                    <td>Skincare Type:</td>
                    <td><select name="skincareTypeID">
                            <?php
                            echo "<option value=\"0\">Select a Skincare Type</option>\n";
                            $skincareTypes = skincaretype::getSkincareTypes();
                            if ($skincareTypes)
                                foreach ($skincareTypes as $skincareType) {
                                    $skincareTypeID = $skincareType->skincareTypeID;
                                    $selected = $skincareTypeID == $skincare->skincaretypeID ? "selected" : "";
                                    echo "<option value=\"$skincareTypeID\" $selected>$skincareType</option>\n";
                                }
                            ?></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><input type="text" name="skincareDescription" value="<?php echo $skincare->skincareDescription; ?>"></td>
                </tr>
                <tr>
                    <td>Brand</td>
                    <td><input type="text" name="skincareBrand" value="<?php echo $skincare->skincareBrand; ?>">
                </td>   
                <tr>
                    <td>Dosage</td>
                    <td><input type="text" name="skincareDosage" value="<?php echo $skincare->skincareDosage; ?>">
                </td>   
                                <tr>
                    <td>Buying Price</td>
                    <td><input type="text" name="skincareBuyingPrice" value="<?php echo $skincare->skincareBuyingPrice; ?>">
                </td>   
                                <tr>
                    <td>Selling Price</td>
                    <td><input type="text" name="skincareSellingPrice" value="<?php echo $skincare->skincareSellingPrice; ?>">

            </table><br><br>
            <input type="submit" name="answer" value="Update Skincare">
            <input type="submit" name="answer" value="Cancel">
            <input type="hidden" name="skincareID" value="<?php echo $skincareID; ?>">
            <input type="hidden" name="content" value="changeskincare">
        </form>
    <?php
    } else {
    ?>
        <h2>Sorry, skincare product <?php echo $skincareID; ?> not found</h2>
        <a href="index.php?content=listskincare">List skincare products</a>
<?php
    }
}
?>