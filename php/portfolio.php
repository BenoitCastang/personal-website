<?php session_start() ?>
<?php $title = 'Portfolio'?>

<?php ob_start()?>

    <main class="portfolio">

        <p>Mon portfolio est actuellement en construction. Revenez ici régulièrement pour le voir évoluer :)</p>
        <p>A défaut de nombreuses <a href="/index.html#experience" title="Expériences">expériences</a> à faire valoir en tant que débutant, je vous propose, en lieu et place de rutilantes informations sur ma <a href="/index.html#formation" title="Formation">formation</a> ou mes <a href="/index.html#skills" title="Compétences">compétences</a>, de trouver ici compilées toutes les activités auxquelles je me livrerai durant mon apprentissage, de sorte que vous puissiez obtenir de moi non des promesses mais un aperçu concret de ce que je sais faire réellement.</p>

    </main>

<?php $content = ob_get_clean()?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php')?>