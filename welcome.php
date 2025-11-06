<?php
function test_input($data) {
    $data = trim($data);                
    $data = stripslashes($data);        
    $data = htmlspecialchars($data);   
    return $data;
}


$name = test_input($_POST["name"]);
$email = test_input($_POST["email"]);
$password = test_input($_POST["password"]);

echo "اهلا $name كيف حالك؟<br>";
echo "ايميلك هو : $email<br>";
echo "كلمة المرور : $password";
?>