<?php
$title = "Trennung der Variablen 2";
$description = "Musterl&ouml;sung des Anfangswertproblems (x²+1) * y' = 2x * y² mit der Methode \"Trennung der Variablen\"";
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

<h1>Trennung der Variablen 2</h1>

<h2>Aufgabe:</h2>
Finde die L&ouml;sung des Anfangswertproblems
$$\begin{align}(x^2+1)\cdot y' &amp;= 2x \cdot y^2 \\\\ x(0) &amp;= \frac{1}{2}\end{align}$$

<h2>L&ouml;sung:</h2>
Wir bringen den Faktor mit <em>x</em> auf die rechte Seite und verwenden f&uuml;r <em>y'</em> die andere Schreibweise <em>dy/dx</em>.<br />

$$\begin{align}(x^2+1)\cdot y' &amp;= 2x \cdot y^2 \\\\ y' &amp;= (x^2+1)^{-1}\cdot 2x \cdot y^2 \\\\ \frac{dy}{dx} &amp;= (x^2+1)^{-1} \cdot 2x\cdot y^2\end{align}$$<br />

Nun behandeln wir <em>dy/dx</em> wie einen normalen Bruch und bringen den "Nenner" <em>dx</em> auf die rechte Seite und alle <em>y</em> auf die linke Seite<br />

$$\begin{align}y^{-2} dy &amp;= (x^2+1)^{-1}\cdot 2x \; dx\end{align}$$<br />

Dann k&ouml;nnen wir beide Seiten integrieren<br />

$$\begin{align}\int y^{-2} dy &amp;= \int (x^2+1)^{-1}\cdot 2x \; dx \\\\ -y^{-1} &amp;= \int (x^2+1)^{-1}\cdot 2x \; dx \end{align}$$<br />

Die Integration der rechten Seite erfolgt durch <a href="https://de.wikipedia.org/wiki/Integration_durch_Substitution">Substitution</a><br />

$$\begin{align}u(x) := x^2+1\end{align}$$<br />

Die Ableitung davon ist<br />

$$\begin{align}\frac{du}{dx} &amp;= 2x \\\\ du &amp;= 2x \; dx \end{align}$$<br />

Das k&ouml;nnen wir nun Einsetzen<br />

$$\begin{align}\int (x^2+1)^{-1}\cdot 2x \; dx \\\\ &amp;= \int u^{-1}du \\\\ &amp;= ln(u)+c, \; c\in \mathbb{R}\end{align}$$<br />

R&uuml;cksubstitution (f&uuml;r <em>u</em> setzen wir wieder <em>x² + 1</em> ein)<br />

$$\begin{align}-y^{-1} &amp;= ln(x^2+1)+c \\\\ y &amp;= -(ln(x^2+1)+c)^{-1}\end{align}$$<br />

Bestimmung der speziellen L&ouml;sung mit der Anfangsbedingung (f&uuml;r <em>x</em> wird <em>0</em> eingesetzt und f&uuml;r <em>y 1/2</em>)<br />

$$\begin{align}y(0) &amp;= \frac{1}{2} \\\\ -(ln(0^2+1)+c)^{-1} &amp;= \frac{1}{2} \\\\ c &amp;= -2\end{align}$$<br />

Wie haben nun <em>c</em> bestimmt, das k&ouml;nnen wir oben in die allgemeine L&ouml;sung einsetzen, somit lautet die L&ouml;sung des Anfangswertproblems<br />

$$y(x) = -(ln(x^2+1)-2)^{-1}$$<br />

</div>

<div class="col-sm-2">

<a href="/en/differential_equations/separation_of_variables_2.php" class="btn btn-primary btn-xs">English</a><br /><br />

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
