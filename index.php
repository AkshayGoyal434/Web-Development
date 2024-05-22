<?php
$email = "example@example.com"; // Replace this with the email address you want to validate

if (preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
    echo "Valid email address";
} else {
    echo "Invalid email address";
}

?>