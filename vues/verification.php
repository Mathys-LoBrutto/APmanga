<html>
<?php
require_once '../persistance/DialogueBD.php';

try {
    $undlg= new DialogueBD();
    $mesgenre = $undlg->getTousLesgenres();
    $mesdessinateur = $undlg->getTousLesDessinateur();
    $messcenariste = $undlg->getTousLesScenariste();
} catch (Exception $e) {
    $erreur=$e->getMessage();
}




if (isset($_POST['titre']) && isset($_POST['id_genre']) && isset($_POST['prix']) )
{ try {
    $undlg = new DialogueBD();
    $id_manga = $_GET['id'];
    $titre = $_POST['titre'] ;
    $id_genre = $_POST['id_genre'] ;
    $prix = $_POST['prix'] ;
    $id_dessinateur = $_POST['id_dessinateur'] ;
    $id_scenariste = $_POST['id_scenariste'] ;






} catch (Exception $e) {
    $erreur = $e->getMessage();
    echo $erreur;
}
}
?>
<head>
    <?php require_once 'header.php';?>
    <title>Modifier un manga</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="body">

<?php echo var_dump($_POST)?>

</body>
