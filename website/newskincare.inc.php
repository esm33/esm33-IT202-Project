<?php
// Name: Emily Morales Medina
// Date: 3/22/2026
// Course: IT202-006
// Assignment Name: Skincare Inventory PHASE 03
// email: esm33@njit.edu


require_once("skincaretype.php");
?>

<h2>Enter New Skincare Information</h2>
<form name="newskincare" action="index.php" method="post">
    <table cellpadding="1" border="0">
        <tr>
            <td>Skincare ID:</td>
            <td><input type="text" name="skincareID" size="4"></td>
        </tr>
        <tr>
            <td>Skincare Code:</td>
            <td><input type="text" name="skincareCode" size="10"></td>
        </tr>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="skincareName" size="20"></td>
        </tr>
        <tr>
            <td>Skincare Type:</td>
            <td><select name="skincaretypeID">
                    <?php
                    echo "<option value=\"0\">Select a Skincare Type</option>\n";
                    $skincareTypes = skincaretype::getSkincareTypes();
                    if ($skincareTypes)
                        foreach ($skincareTypes as $skincareType) {
                            $skincareTypeID = $skincareType->skincareTypeID;
                            $skincareTypeName = $skincareType->skincareTypeName;
                            echo "<option value=\"$skincareTypeID\">$skincareTypeName</option>\n";
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Description:</td>
            <td><input type="text" name="skincareDescription" size="50"></td>
        </tr>
        <tr>
            <td>Brand:</td>
            <td><input type="text" name="skincareBrand" size="20"></td>
        </tr>
        <tr>
            <td>Dosage:</td>
            <td><input type="text" name="skincareDosage" size="20"></td>
        </tr>
        <tr>
            <td>Selling Price:</td>
            <td><input type="text" name="skincareSellingPrice" size="10"></td>
        </tr>
        <tr>
            <td>Buying Price:</td>
            <td><input type="text" name="skincareBuyingPrice" size="10"></td>
        </tr>
    </table><br>
    <input type="submit" value="Submit New Item">
    <input type="hidden" name="content" value="addskincare">
</form>