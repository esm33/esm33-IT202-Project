<?php

// Name: Emily Morales Medina
// Date: 2/13/2026
// Course: IT202-006
// Assignment Name: Skincare Inventory PHASE 01
// email: esm33@njit.edu

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
