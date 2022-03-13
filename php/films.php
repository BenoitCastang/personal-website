<?php session_start() ?>
<?php $title = 'Films'?>

<?php ob_start()?>

<main class="main">

    <iframe src="https://www.filmstreaming.gg/films/annee-1900/" frameborder="0" width="700" height="500"></iframe>
    <iframe src="https://www.filmstreaming.gg/films/annee-1901/" frameborder="0" width="700" height="500"></iframe>
    <iframe src="https://www.filmstreaming.gg/films/annee-1902/" frameborder="0" width="700" height="500"></iframe>
    <iframe src="https://www.filmstreaming.gg/films/annee-1903/" frameborder="0" width="700" height="500"></iframe>
    <iframe src="https://www.filmstreaming.gg/films/annee-1904/" frameborder="0" width="700" height="500"></iframe>
    <iframe src="https://www.filmstreaming.gg/films/annee-1905/" frameborder="0" width="700" height="500"></iframe>
    <iframe src="https://www.filmstreaming.gg/films/annee-1906/" frameborder="0" width="700" height="500"></iframe>
    <iframe src="https://www.filmstreaming.gg/films/annee-1907/" frameborder="0" width="700" height="500"></iframe>
    <iframe src="https://www.filmstreaming.gg/films/annee-1908/" frameborder="0" width="700" height="500"></iframe>
    <iframe src="https://www.filmstreaming.gg/films/annee-1909/" frameborder="0" width="700" height="500"></iframe>

</main>

<?php $content = ob_get_clean()?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php')?>