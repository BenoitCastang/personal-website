<?php session_start() ?>
<?php $title = 'MH'?>

<?php ob_start() ?>

    <main class="main">

        <h1 class="main__h1">MH</h1>

				<p>Lance:</p>				
				<p>Raw attack: Divide attack by raw power. Lance raw power is 2.3. 100 becomes 43.</p>				
				<p>Attack up changes the raw attack value. Attack Up L is +20 so it adds 20*2.3=46 to the raw attack.</p>				
				<p>Sharpness multiplies raw attack: .50 red, .75 orange, 1 yellow, 1.05 green, 1.20 blue, 1.32 white, 1.45 pink.</p>				

    </main>

<?php $content = ob_get_clean() ?>

<?php require($_SERVER['DOCUMENT_ROOT'].'/php/includes/template.php')?>
