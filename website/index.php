<?php
// Name: Emily Morales Medina
// Date: 2/13/2026
// Course: IT202-006
// Assignment Name: Skincare Inventory PHASE 01
// email: esm33@njit.edu

session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Skincare</title>
</head>

<body>
    <section>
        <main>
            <?php
            if (isset($_REQUEST['content'])) {
                include($_REQUEST['content'] . ".inc.php");
            } else {
                include("main.inc.php");
            }
            ?>
        </main>
    </section>
</body>

</html>