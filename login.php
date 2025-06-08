<?php
$uid = $_GET['uid'];

// ✅ Allowed user list (phone number, UID, etc.)
$allowed = ["1234567890", "9876543210"];

if (in_array($uid, $allowed)) {
    echo "valid";
} else {
    echo "invalid";
}
?>
