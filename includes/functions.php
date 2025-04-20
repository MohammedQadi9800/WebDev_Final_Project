<?php
// Common functions file for CPCS403 Final Project

// Function to sanitize input data
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Function to validate email format
function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Function to check if a required field is empty
function isEmptyField($field) {
    return empty(trim($field));
}

// Function to generate page title
function getPageTitle($pageName) {
    return "CPCS403 Project - " . $pageName;
}
?>
