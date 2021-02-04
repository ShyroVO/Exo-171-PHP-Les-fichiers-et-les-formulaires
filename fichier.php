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
            //Move file and rename it ( Day M Year . Hours I Seconds )
            move_uploaded_file($tmp_name, './upload/'. date("mdY.His"));

            header('Location: index.php?sucess='.$sucessMsg);
            exit();
        } else {

            header('Location: index.php?sobig='.$bigMsg);
            exit();
        }
    } else {
        header('Location: index.php?notimage='.$notImageMsg);
        exit();
    }

} else {
    header('Location: index.php?error='.$errorMsg);
    exit();
}