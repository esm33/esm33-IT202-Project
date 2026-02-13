

<?php
if (isset($_SESSION['login'])) {
    unset($_SESSION['login']);
    unset($_SESSION['first_name']);
    unset($_SESSION['last_name']);
    unset($_SESSION['pronouns']);
    unset($_SESSION['email_address']);
    unset($_SESSION['phone_number']);
    unset($_SESSION['name']);
}
header("Location: index.php");
