<?php
// Message error success
$sucessMsg = "Success! Your file fly on the Web!" ;
$bigMsg = "Error?! Why this time? Humm... this file is so big!";
$notImageMsg = "Error?! Why? Hummm... this file is not an image";
$errorMsg = "Error. Your file is to escape !";

// Check file information and seek
echo "Hi little file, this is your information card: <br><br>";
foreach ($_FILES['fichierUtilisateur'] as $key => $value){
    echo "$key => $value <br>";
}
echo "<br><hr><br>";

// Check file
if (isset ($_FILES['fichierUtilisateur']) && $_FILES['fichierUtilisateur']['error'] === 0 ) {
    // Check if file is image
    $typeFile = ['image/jpeg', 'image/png'];
    if ( in_array($_FILES['fichierUtilisateur']['type'], $typeFile) ) {
        $maxSize = 3 * 1024 * 1024;
        if ( (int)$_FILES['fichierUtilisateur']['size'] <= $maxSize ) {
            // Temp name file
            $tmp_name = $_FILES['fichierUtilisateur']['tmp_name'];
            // Check real name file
            $name = $_FILES['fichierUtilisateur']['name'];
            //Move file
            move_uploaded_file($tmp_name, $name);

            echo $sucessMsg;
        } else {

            echo $bigMsg;
        }
    } else {
        echo $notImageMsg;
    }

} else {
    echo $errorMsg;
}