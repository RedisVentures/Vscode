<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to our website </h1>
    <?php          
        $userInput = $_GET['input'];
        $SanitezedInput = htmlspecialchars($userInput,flags: ENT_QUOTES,encoding: 'UTF-8');
        echo "<p>User input from the URL: $SanitezedInput </p>";
    ?>
    <p>Thank you for visiting!</p>
</body>
</html>