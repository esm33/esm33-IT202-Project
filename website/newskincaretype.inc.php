<h2>Enter New Skincare Type Information</h2>
<form name="newskincaretype" action="index.php" method="post">
    <table cellpadding="1" border="0">
        <tr>
            <td>Skincare Type ID:</td>
            <td><input type="number" name="skincareTypeID" size="4" min="1" max="99" required></td>
        </tr>
        <tr>
            <td>Skincare Type Code:</td>
            <td><input type="text" name="skincareTypeCode" size="20" placeholder="XXX" maxlength="3" required></td>
        </tr>
        <tr>
            <td>Skincare Type Name:</td>
            <td><input type="text" name="skincareTypeName" size="20" required></td>
        </tr>
        <tr>
            <td>Skincare Shelf Number:</td>
            <td><input type="number" name="skincareShelfNumber" size="4" min="1" max="99" required></td>
        </tr>
    </table><br>
    <input type="submit" value="Submit New Skincare Type">
    <input type="hidden" name="content" value="addskincaretype">
</form>