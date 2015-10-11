<?php
$title = "Lineare Differentialgleichung mit konstanten Koeffizienten";
$description = "Allgemeine L&ouml;sung einer Differentialgleichung mit konstanten Koeffizienten y'' -5y'+6y=exp(-2x)";
include $_SERVER["DOCUMENT_ROOT"]."de/header.php";
?>

<div class="container">
<div class="row">

<div class="col-sm-2">
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- Mathedia Responsive -->
	<ins class="adsbygoogle"
		 style="display:block"
		 data-ad-client="ca-pub-4504580659323549"
		 data-ad-slot="9051615914"
		 data-ad-format="auto"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
</div>

<div class="col-sm-8">

<h1>Lineare Differentialgleichung mit konstanten Koeffizienten 1</h1>

<h2>Aufgabe:</h2>
Gesucht ist die allgemeine L&ouml;sung der <strong>lineare Gleichung mit konstanten Koeffizienten</strong>
$$y'' -5y'+6y=e^{-2x}$$

<h2>L&ouml;sung:</h2>
Die homogene Gleichung lautet:

$$y'' -5y'+6y=0$$

Das <a href="https://de.wikipedia.org/wiki/Charakteristische_Gleichung">charateristische Polynom</a> lautet:

$$\chi(\lambda)=\lambda^2 -5\lambda +6 = (\lambda-2)(\lambda-3)$$

Das ergibt die beiden einfachen Eigenwerte:

$$\lambda_1 = 2 \qquad \lambda_2 = 3$$

Das ergibt das Fundamentalsystem:

$$y_1=e^{2x} \qquad y_2=e^{3x}$$

Die inhomogene Gleichung lautet:

$$y'' -5y'+6y=e^{-2x}$$

Das St&ouml;rglied lautet \(e^{-2x}\) und da \(\lambda = -2\) keine Nullstelle von \(\chi(\lambda)\) ist, liegt keine Resonanz vor.

Der Ansatz f&uuml;r die spezielle L&ouml;sung ist:

$$y_s = A e^{-2x}$$

Durch Einsetzen und Koeffizientenvergleich folgt:

$$A=\frac{1}{20}$$

Damit lautet die allgemeine L&ouml;sung:

$$y=y_s + C_1~y_1+C_2~y_2\\\\ y=\frac{1}{20}~e^{-2x}+C_1~e^{2x}+C_2~e^{3x}$$

</div>

<div class="col-sm-2">
	<a href="/en/differential_equations/linear_equation_constant_factors_1.php" class="btn btn-primary btn-xs">English</a><br /><br />
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- Mathedia Large Sky -->
			<ins class="adsbygoogle"
				 style="display:inline-block;width:300px;height:600px"
				 data-ad-client="ca-pub-4504580659323549"
				 data-ad-slot="7782445511"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
</div>

</div>
</div>

<?php
include $_SERVER["DOCUMENT_ROOT"]."de/footer.php";
?>
