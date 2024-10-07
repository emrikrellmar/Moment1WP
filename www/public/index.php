<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Konstig sida</title>
</head>
<body>
<h1>Namn och ålder</h1>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>Formulär och Valutaomvandlare</title>
</head>
<body>

<!-- Första formuläret för namn och ålder -->
<form action="nysida.php" method="post">
    <label>Namn</label><br>
    <input type="text" name="namn">
    <br><br>
    <label>Ålder</label><br>
    <input name="meddelande" cols="45" rows="5"></input>    
    <br>
    <input type="submit" value="Skicka">
</form>

<h1>Valutan i dollar</h1>

<form action="" method="post">
    <label for="currency">Belopp i dollar:</label>
    <input type="text" name="currency" id="currency">
    <input type="submit" value="Omvandla">
</form>

<?php
if (isset($_POST['currency']) && is_numeric($_POST['currency'])) {
    $dollar = $_POST['currency'];
    $sek = $dollar * 10.2698;
    echo "<p>$dollar $  =  $sek kr</p>";
} else {
    echo "<p>Mata in ett giltigt belopp i dollar.</p>";
}
?>

</body>
</html>