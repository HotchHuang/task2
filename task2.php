
<?php
$user_type = "student";
$user_name = "Huang Qi";

switch ($user_type) {
    case "student":
        echo "Hi " . $user_name . ", You are a new student in Wintec!";
        break;
    case "staff":
        echo "Hi " . $user_name . ", You are staff in Wintec!";
        break;
    default:
        echo "Hi " . $user_name. ", You are not enrolled in Wintec!";
}
?>