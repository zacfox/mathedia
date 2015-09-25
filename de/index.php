<?php
// Die Variable $title wird vor der Einbindung von header.php definiert damit sie in dieser Datei ver&uuml;gbar ist
$title = "Aufgaben und L&ouml;sungen zur H&ouml;heren Mathematik";
include $_SERVER["DOCUMENT_ROOT"]."de/header.php";
?>

	<div class="container">
		<div style="background:#008cba; color:white; text-align:center !important" class="jumbotron">
			<h1>Mathedia</h1>
			<h2>Aufgaben und L&ouml;sungen zur H&ouml;heren Mathematik</h2>
		</div>
	</div>
	
	<div class="container">
			Auf Mathedia findest du zahlreiche Aufgaben mit vollst&auml;ndigen L&ouml;sungen aus allen Teilgebieten der H&ouml;heren Mathematik.<br />
			Die Seite soll Studenten von Universit&auml;ten und Hochschulen im Mathematikstudium helfen. Sie bietet aber auch interessierten Sch&uuml;lern einen &Uuml;berblick dar&uuml;ber, worauf es im Mathematikstudium ankommt. Das Nachvollziehen von "Musterl&ouml;sungen" hilft, eine gewisse Routine zu bekommen, um dann andere Aufgaben leichter selbst l&ouml;sen zu k&ouml;nnen. Aus diesem Grunde kann Mathedia auch zur Vorbereitung auf Pr&uuml;fungen genutzt werden.
			
			<br /><br />
			Zu den Aufgaben<br />
			<div class="btn-group-vertical">
				<a href="http://mathedia.com/de/analysis/" class="btn btn-primary">Analysis</a>
				<a href="http://mathedia.com/de/differentialgleichungen/" class="btn btn-primary">Gew&ouml;hnliche Differentialgleichungen</a>
			</div>
			
			<br /><br />
			Um &uuml;ber Mathematik zu reden, um Aufgaben und L&ouml;sungen zu diskutieren, um eigene L&ouml;sungswege vorzustellen und auf Richtigkeit &uuml;berpr&uuml;fen zu lassen, gibt es im Internet eine Reihe guter Foren. Zum Beispiel w&auml;ren da:<br />
			<div class="btn-group-vertical">
				<a title="Matroids Matheplanet" href="http://www.matheplanet.de" target="_blank" class="btn btn-primary">Matroids Matheplanet</a>
				<a title="Raum f&uuml;r Mathematik Offene Informations- und Vorhilfegemeinschaft" href="http://www.matheraum.de" target="_blank" class="btn btn-primary">Matheraum</a>
				<a title="mathe online verstehen" href="http://www.matheboard.de/" target="_blank" class="btn btn-primary">Mathe Board</a>
			</div>
			<br /><br />
			To visit the english pages of Mathedia hit <a href="/en/index.php" class="btn btn-primary btn-xs">English</a><br />
	</div>
	
<?php
include $_SERVER["DOCUMENT_ROOT"]."de/footer.php";
?>