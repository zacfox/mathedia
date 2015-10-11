<?php
$title = "Trennung der Variablen 1";
$description = "Musterlösung des Anfangswertproblems x(t)' = 1+x(t)^2 mit der Methode \"Trennung der Variablen\"";
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

<h1>Trennung der Variablen 1</h1>

<h2>Aufgabe:</h2>
Finde die Lösung des Anfangswertproblems
$$x(t)' = 1+x(t)^2 \\\\ x(\frac{\pi}{4}) = -1$$

<h2>Lösung:</h2>
\(1+x(t)^2\), also die Steigung der gesuchten Funktion, ist überall ungleich 0. Es gibt also <strong>keine station&auml;re L&ouml;sung</strong>.<br />

Desweiteren ist \(1+x(t)^2\) auf ganz \(\mathbb{R}^2\) stetig und lokal Lipschitz bezüglich <em>x</em>, daher ist dieses Anfangswertproblem <strong>eindeutig l&ouml;sbar</strong>.<br />

F&uuml;r die Ableitung <em>x'</em> verwenden wir die <a href="https://de.wikipedia.org/wiki/Differentialrechnung#Notationen">Notation von Leibniz</a> und tun so, als sei es ein normaler Bruch.<br />

$$\frac{dx}{dt} = 1+x^2$$<br />

Nun bringen wir alle <em>x</em> auf eine Seite und alle <em>t</em> auf die andere. Dann können wir mit Hilfe einer Integration nach <em>x</em> aufl&ouml;sen:<br />

$$\begin{align} \frac{dx}{1+x^2} &amp;= 1 \; dt \\\\ \int \frac{dx}{1+x^2} &amp;= \int 1 \; dt \\\\ \arctan (x) &amp;= t+c \quad (c\in \mathbb{R}) \\\\ x &amp;= \tan(t + c)\end{align}$$<br />

Um <em>c</em> zu finden k&ouml;nnen wir <em>x</em> und <em>t</em> aus der Anfangsbedingung einsetzen:<br />

$$\tan(\frac{\pi}{4} + c) = -1$$<br />

Daraus folgt<br />

$$c=-\frac{\pi}{2}$$<br />

denn<br />

$$\tan(\frac{\pi}{4} -\frac{\pi}{2}) = \tan(-\frac{\pi}{4}) = -1$$<br />

Somit lautet die Lösung des Anfangswertproblems:<br />

$$x(t)=\tan(t-\frac{\pi}{2})$$<br />

</div>

<div class="col-sm-2">
	<a href="/en/differential_equations/separation_of_variables_1.php" class="btn btn-primary btn-xs">English</a><br /><br />
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
