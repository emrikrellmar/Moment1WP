<!DOCTYPE html>
<html lang="sv">
<head>
   <meta charset="UTF-8">
   <title>Formulär</title>
</head>
<body>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Meddelande och Pension</title>
</head>
<body>

<?php
if (isset($_POST['namn']) && isset($_POST['meddelande'])) {
    $name = $_POST['namn'];
    $age = $_POST['meddelande']; 

    echo "<p><strong>Namn:</strong> $name</p>";
    echo "<p><strong>Ålder:</strong> $age</p>";

    if (is_numeric($age)) {
        $total = 65 - $age; 
        echo "<p><strong>Du har $total år kvar till din pension!</strong></p>";
    } else {
        echo "<p><strong>Vänligen ange en giltig ålder.</strong></p>";
    }
} else {
    echo "<p><strong>Vänligen fyll i både namn och ålder.</strong></p>";
}
?>

</body>
</html>
