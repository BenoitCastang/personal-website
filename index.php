<?php session_start() ?>
<?php $title = 'Main page'?>

<?php ob_start()?>

    <main class="main">

        <h1 class="main__h1">Main page</h1>

        <div class="main__text">
            <p>Bienvenue sur mon portfolio !</p>
            <p>Vous pourrez trouvez ici mon CV mais surtout une illustration concrète de mes compétences à travers les différentes rubriques : le CSS/Sass, maintenable et responsive, le JavaScript, à travers le jeu de casse-briques, et le PHP, architecture MVC/orienté objet, illustré par le système de connexion, le chat et le blog qui interagissent avec une base de données sous MySQL.</p>
            <p>A présent présentons-nous ! Je m'appelle Benoît Castang et j'ai 24 ans.</p>
            <p>Je suis un littéraire des langues anciennes reconverti dans le développement web. Je suis donc un développeur très à l'aise à l'écrit comme à l'oral. Je suis d'un naturel extraverti et joyeux, très enclin à l'humour, tout en étant solitaire dans l'âme et travailleur acharné.</p>
            <p>Le latin et le grec ancien, sujet de mes études devenu sujet de mes loisirs, m'ont apporté la rigueur et la volonté d'aller au fond des choses, surtout de comprendre et de maîtriser ces choses. Dans mon apprentissage, cela se traduit par une volonté de pas griller les étapes, de ne jamais écrire du code que je ne comprends pas, de toujours m'interroger sur la qualité de mon code, sur sa simplicité et sa maintenabilité.</p>
            <p>Après mes études, j'ai du faire tout un parcours de projet professionnel pour trouver un métier qui me motiverait réellement : projet professionnel généraliste avec la Mission Locale, au cours duquel j'ai découvert l'informatique avec le logiciel Scratch, puis projet professionel spécialisé Métiers du numérique, où j'ai découvert l'ensemble du secteur et choisi de m'orienter vers le développement web. C'est à l'issue de cette période qu'en janvier 2021 j'ai intégré une formation de développeur web à l'ADRAR, où j'ai appris les fondamentaux en HTML/CSS et JavaScript. </p>
            <p>Rapidement, j'ai également commencé à me former en autonomie au PHP grâce aux cours d'OpenClassrooms, et ai réellement découvert à ce moment ma passion pour le développement qui représente à présent l'essentiel de mon temps. Je cherche donc actuellement à me spécialiser dans cette technologie et désire trouver une boîte avec laquelle faire une alternance pour passer le titre de développeur PHP/Symphony d'OpenClassrooms.</p>
            <p>Vous trouverez sur mon profil Linkedin tout ce qu'il faut pour me contacter ainsi que des posts que je publie régulièrement pour faire état de ma progression.</p>
            <p>Enfin et surtout, il y a mon site, benoitcastang.fr qui fait office à la fois de CV et de portfolio et sur lequel vous pouvez trouver tout ce que j'ai fait depuis que j'ai commencé à coder il y a quelques mois.</p>
            <p>Au plaisir de se parler ;) </p>
            </p>
        </div>

    </main>

<?php $content = ob_get_clean()?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php')?>