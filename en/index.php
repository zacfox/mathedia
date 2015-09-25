<?php
// Die Variable $title wird vor der Einbindung von header.php definiert damit sie in dieser Datei ver&uuml;gbar ist
$title = "higher mathematics problems and solutions";
include $_SERVER["DOCUMENT_ROOT"]."en/header.php";
?>

	<div class="container">
		<div style="background:#008cba; color:white !important" class="jumbotron">
			<h1>Mathedia</h1>
			<h2>higher mathematics problems and solutions</h2>
		</div>
	</div>
	
	<div class="container">
			On Mathedia you will find a lot of problems with complete solutions of all disciplines of higher mathematics.<br />
			This page should help students of colleges and universities. High school students will find an overview of how higher mathematics works. Students can use this page to get a proper routine in solving problems and to prepare for exams.			
			
			<br /><br />
			The problems<br />
			<div class="btn-group-vertical">
				<a href="http://mathedia.com/en/calculus/" class="btn btn-primary">Calculus</a>
				<a href="http://mathedia.com/en/differential_equations/" class="btn btn-primary">Differential equations</a>
			</div>
			
			<br /><br />

			Um auf die deutschen Seiten zu kommen drücke auf <a href="/de/index.php" class="btn btn-primary btn-xs">Deutsch</a><br />
	</div>
	
<?php
include $_SERVER["DOCUMENT_ROOT"]."en/footer.php";
?>