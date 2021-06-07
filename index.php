<?php session_start() ?>
<?php $title = 'Main page'?>

<?php ob_start()?>

    <main class="main main__text">

        <h1 class="main__h1">Main page</h1>

        <p>Mon portfolio est actuellement en construction. Revenez ici régulièrement pour le voir évoluer :)</p>
        <p>A défaut de nombreuses <a href="/php/cv.html#experience" title="Expériences">expériences</a> à faire valoir en tant que débutant, je vous propose, en lieu et place de rutilantes informations sur ma <a href="/php/cv.html#formation" title="Formation">formation</a> ou mes <a href="/php/cv.html#skills" title="Compétences">compétences</a>, de trouver ici compilées toutes les activités auxquelles je me livrerai durant mon apprentissage, de sorte que vous puissiez obtenir de moi non des promesses mais un aperçu concret de ce que je sais faire réellement.</p>

    </main>

<?php $content = ob_get_clean()?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php')?>