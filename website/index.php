<?php
// Name: Emily Morales Medina
// Date: 3/20/2026
// Course: IT202-006
// Assignment Name: Skincare Inventory PHASE 03
// email: esm33@njit.edu

session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Skincare</title>
</head>


<body>
    <header>
        <?php include("header.inc.php"); ?>
    </header>
    <section style="min-height: 425px;">
        <nav>
            <?php include("nav.inc.php"); ?>
        </nav>
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
    <footer>
        <?php include("footer.inc.php"); ?>
    </footer>
</body>




</html>