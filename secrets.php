<?php
session_start();
//$_SESSION["name"] = "Jacob";
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
<body style="margin:"30% 30%;" >
<?php
if ($_SESSION["name"] == "Jacob")
{
echo "<br><h2>__̴ı̴̴̡̡̡ ̡͌l̡̡̡ ̡͌l̡*̡̡ ̴̡ı̴̴̡ ̡̡͡|̲̲̲͡͡͡ ̲▫̲͡ ̲̲̲͡͡π̲̲͡͡ ̲̲͡▫̲̲͡͡ ̲|̡̡̡ ̡ ̴̡ı̴̡̡ ̡͌l̡̡̡̡.___</h2>";
}
else 
{
    echo "There is nothing here to see! No secrets, and definietly no a painting of a house on the beach!";
}

?>    

</body>
</html>