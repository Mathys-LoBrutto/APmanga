<!DOCTYPE html>
<html>
<?php
require_once '../persistance/DialogueBD.php';
try {
    $undlg= new DialogueBD();
    $mesMangas=$undlg->getTousLesMangas();
} catch (Exception $e) {
    $erreur=$e->getMessage();
}
?>
<head>
    <?php require_once 'header.php';?>
    <title>Mangas</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<?php require_once("menu.html");?>
<div class="container">
    <h1>Liste de mes Mangas</h1>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Titre</th>
            <th>Genre</th>
            <th>Prix</th>
            <th>Modification</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $lignes="";
        foreach ($mesMangas as $manga) {
            $lignes .= "<tr>\n";
            $lignes .= "<td> $manga[id_manga]</td>\n";
            $lignes .= "<td> $manga[titre]</td>\n";
            $lignes .= "<td> $manga[lib_genre]</td>\n";
            $lignes .= "<td> $manga[prix] </td>\n";
            $lignes .= "<td><a href='modificationManga.php?id=$manga[id_manga]'>modifier</a></td>\n";
            $lignes .= "<td><a href='supprimerManga.php?id=$manga[id_manga]'>supprimer</a></td>";
        }
        echo utf8_encode($lignes); // On affiche tous les <tr>
        ?>
        </tbody>
    </table>
</div>

</body>

</html>
