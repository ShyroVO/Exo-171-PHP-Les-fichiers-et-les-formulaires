<?php

/**
 * 1. Créez un formulaire classique contenant un champs input de type file
 * 2. Faites pointer l'action sur la page fichier.php ( que vous créerez )
 * 3. Gérez l'upload du fichier, le fichier doit être stocké dans le répertoire upload de votre site
 * 4. Gérez tous les cas de figure:
 *    - Le fichier doit être une image
 *    - On ne peut pas uploader de fichier image de plus de 3Mo
 *    - Les fichiers doivent être renommés
 *    - Affichez les erreurs sur la page index.php s'il y en a ( fichier non présent, erreur d'upload, etc... )
 * ( BONUS )
 * 5. Une fois l'upload terminé, enregistrez le nom du fichier uploadé dans le fichier file.json
 * ( que vous créerez s'il n'existe pas )
 *    Attention, trouvez une solution pour que le fichier contienne du JSON valide !
 * 6. Affichez sur la page index les fichiers ayant déjà été uploadés.
 */
?>

<form action="index.php" method="post" enctype="multipart/form-data">
    <label for="id-fichier">Select your image (png, jpg)<br>

        <input type="file" name="fichierUtilisateur" id="id-fichier">(max 3Mo)<br>
        <input type="submit" value="Submit">
    </label>
</form>

