<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
// define variables and set to empty values
$fullname = $email = $gender = $comment = $number = $age = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = test_input($_POST["name"]);
    $email    = test_input($_POST["email"]);
    $gender   = test_input($_POST["gender"]);
    $comment  = test_input($_POST["comment"]);
    $number   = test_input($_POST["number"]);
    $age      = test_input($_POST["age"]);
}

// function to sanitize user input
function test_input($data) {
    $data = trim($data);              // remove extra spaces
    $data = stripslashes($data);      // remove backslashes
    $data = htmlspecialchars($data);  // prevent XSS
    return $data;
}
?>

<h2>Form validation</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

Full Name: <input type="text" name="name" required />
<br><br>

Email: <input type="email" name="email" required />
<br><br>

Gender: 
<input type="radio" name="gender" value="female"/> Female
<input type="radio" name="gender" value="male"/> Male
<br><br>

Comment: <textarea name="comment"></textarea>
<br><br>

Number (Optional): <input type="int" name="number"/>
<br><br>

Age: <input type="int" name="age" required />
<br><br>

<input type="submit" name="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Your Input</h2>";
    echo "Full Name: $fullname <br>";
    echo "Email: $email <br>";
    echo "Age: $age <br>";
    echo "Phone Number: $number <br>";
    echo "Comment: $comment <br>";
    echo "Gender: $gender <br>";
}
?>

</body>
</html>
