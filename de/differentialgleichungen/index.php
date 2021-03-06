<?php
$title = "Gew&ouml;hnliche Differentialgleichungen";
$description = "Auf diesen Seiten findest du Musterl&ouml;sungen zu Gew&ouml;hnlichen Differentialgleichungen";
include $_SERVER["DOCUMENT_ROOT"]."de/header.php";
?>

<div class="container">
<div class="row">

<div class="col-xs-10">

<h1>Gew&ouml;hnliche Differentialgleichungen</h1>

Eine Differentialgleichung ist eine Gleichung für eine gesuchte Funktion, in der auch Ableitungen dieser Funktion vorkommen.
Bei einer gew&ouml;hnlichen Differentialgleichung treten nur Ableitungen nach einer Variablen auf.
Differentialgleichungen werden oft verwendet, um das &Auml;nderungsverhalten von Gr&ouml;ßen bei Vorg&auml;ngen in der Natur zu beschreiben.

<h2>Trennung der Variablen</h2>

<div class="btn-group-vertical">
	<a href="/de/differentialgleichungen/trennung_der_variablen_1.php" class="btn btn-primary">x(t)' = 1+x(t)^2</a>
	<a href="/de/differentialgleichungen/trennung_der_variablen_2.php" class="btn btn-primary">(x²+1) y' = 2x y²</a>
</div>

<h2>Variation der Konstanten</h2>

<div class="btn-group-vertical">
	<a href="/de/differentialgleichungen/variation_der_konstanten_1.php" class="btn btn-primary">y' - 3y = x * exp(4x)</a>
	<a href="/de/differentialgleichungen/variation_der_konstanten_2.php" class="btn btn-primary">y' = -(y/x) + 1</a>
</div>

<h2>Lineare Gleichung mit konstanten Koeffizienten</h2>

<div class="btn-group-vertical">
	<a href="/de/differentialgleichungen/lineare_gleichung_konstanter_koeffizient_1.php" class="btn btn-primary">y'' -5y'+6y=exp(-2x)</a>
</div>

</div>

<div class="col-xs-2">

<a href="/en/differential_equations/index.php" class="btn btn-primary btn-xs">English</a><br />

</div>

</div>
</div>

<?php
include $_SERVER["DOCUMENT_ROOT"]."de/footer.php";
?>
