<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uppgift</title>
</head>
<body>
    
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="file" name="file_up" id="file_up">
        <input type="submit" name="upload" id="upload" value="Upload">
    </form>
    <a href="./index.php">Till bild galleri</a>

<?php
    $target_dir = "bilder/";
    $target_file = $target_dir . basename($_FILES["file_up"]["name"]);
    $uploadOk = 1;

    if (isset($_POST["upload"])) {
        if ($uploadOk == 0) {
            echo "Error";
        } 
        
        else {
            if (move_uploaded_file($_FILES["file_up"]["tmp_name"], $target_file)) {
                echo "Filen '". basename( $_FILES['file_up']['name']). "' har laddats upp i mappen 'bilder'";
            } else {
                echo "Det uppstod ett problem när filen skulle laddas upp!";
            }
        }
    }

    // Image variabeln innehåller namnet på den uppladdade filen.
    $image = $_FILES["file_up"]["name"]; 

    // En ny variabel skapas som lägger till hela längen till filen. Den lägger namnet på mappen som filen finns i och lägger till namnet på filen
      $img = "bilder/".$image;

    //   Echoar img variabeln i src som innehåller då hela länken till den uppladdade
      echo '<img src= "'.$img.'">';
?>

</body>
</html>