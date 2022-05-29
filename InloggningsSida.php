<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
body {

  margin: 5% 40%;

}
        </style>
</head>
<body>
    <p style="color: red;" >
<?php



if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = "";
    $work = "";

    $name = test_input($_POST["name"]);
    $work = test_input($_POST["work"]);
    echo "Logged in! Name: " . $name .  ", Work: " . $work;
    
    $_SESSION["name"] = $name;
    $_SESSION["job"] = $work;
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>
</p>
    <h2>Inlogningssida</h2><br>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
        Name: <input type="text" name="name" value="<?php if (!empty($name)) {echo $name;} ?>">
        <br><br>
        Work: <input type="text" name="work" value="<?php if (!empty($work)) {echo $work;} ?>">
        <br><br>

        <input type="submit" name="submit" value="submit">


        
    </form>
    <br><br>
    <p>The Legend says that only people with the name "Jacob" can see a 
        painting of a house on the beach in the (secrets) page!</p>

</body>
</html>