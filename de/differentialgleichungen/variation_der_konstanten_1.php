<?php
$title = "Variation der Konstanten 1";
$description = "Musterlösung der Differentialgleichung y'-3y=x * e^{4x}";
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

<h1>Variation der Konstanten 1</h1>

<h2>Aufgabe:</h2>
Finde die allgemeine Lösung der inhomogenen Differentialgleichung
$$y'-3y=x\cdot e^{4x}$$

<h2>Lösung:</h2>
Zuerst löst man die homogene Gleichung durch <strong>Trennung der Variablen</strong> oder scharfes hinsehen:<br />

$$\begin{align*}y'-3y &= 0 \\ y_0 &= K\cdot e^{3x}\quad K\in\mathbb{R}\end{align*}$$<br />

Um die inhomogene Gleichung zu lösen, verwandelt man die Konstante <em>K</em> in eine Funktion von <em>x</em>:<br />

$$y = K(x)\cdot e^{3x}$$<br />

Nun bildet man noch die Ableitung von diesem <em>y</em>:<br />

$$y'= K'(x)\cdot e^{3x} + 3~K(x)\cdot e^{3x}$$<br />

Dieses <em>y</em> und <em>y'</em> setzt man in die ursprüngliche inhomogene Dgl ein und vereinfacht:<br />

$$\begin{align*}y'-3y &amp;=x\cdot e^{4x}\\\\ \Leftrightarrow K'(x)\cdot e^{3x} + 3~K(x)\cdot e^{3x}~-3~ K(x)\cdot e^{3x} &amp;=x\cdot e^{4x}\\\\ \Leftrightarrow K'(x)\cdot e^{3x} &amp;=x\cdot e^{4x}\\\\ \Leftrightarrow K'(x) &amp;=x\cdot e^{x}\end{align*}$$<br />

Jetzt kann man mit einer (mehr oder weniger) einfachen Integration <em>K(x)</em> bestimmen:<br />

$$\begin{align*}K(x) &amp;= \int K'(x)~dx\\\\ &amp;= \int x\cdot e^{x}~dx\\\\ &amp;= (x-1)\cdot e^x +C \quad C\in \mathbb{R}\end{align*}$$<br />

Dies können wir wieder oben für <em>K(x)</em> einsetzen und erhalten die allgemeine Lösung der inhomogenen Differentialgleichung:<br />

$$\begin{align*}y &amp;= K(x)\cdot e^{3x} \\\\ &amp;= ((x-1)\cdot e^x +C)\cdot e^{3x} \\\\ &amp;= (x-1)\cdot e^{4x}~+~C\cdot e^{3x}\end{align*}$$<br />

</div>

<div class="col-sm-2">

<a href="/en/differential_equations/variation_of_parameters_1.php" class="btn btn-primary btn-xs">English</a><br /><br />

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
