<?php
$title = "Variation der Konstanten 2";
$description = "Musterl&ouml;sung der Differentialgleichung y' = -(y/x) + 1";
include $_SERVER["DOCUMENT_ROOT"]."de/header.php";
?>

<div class="container">
<div class="row">

<div class="col-xs-10">

<h1>Variation der Konstanten 2</h1>

<h2>Aufgabe:</h2>
Finde die L&ouml;sung des Anfangswertproblems:
$$\begin{align*}y'&=-\frac{y}{x}+1 \\\\ y(2)&=\frac{3}{2}\end{align*}$$

<h2>L&ouml;sung:</h2>
Zuerst l&ouml;st man die homogene Gleichung durch <a href="https://de.wikipedia.org/wiki/Trennung_der_Ver%C3%A4nderlichen">Trennung der Variablen</a>:

$$\begin{align*}y'&=-\frac{y}{x} \\\\ \frac{dy}{dx}&=-\frac{y}{x} \\\\ \frac{1}{y}dy&=-\frac{1}{x}dx \\\\ \int\frac{1}{y}dy&=-\int\frac{1}{x}dx \\\\ \ln(|y|)&=-\ln(|x|)+k_0 \quad\quad k_0\in\mathbb{R} \\\\ y&=\exp(-\ln(|x|)+k_0) \\\\ y&=\exp(-\ln(|x|))\cdot \exp(k_0) \\\\ y_h&=\frac{1}{x} \cdot k \quad\quad k\in\mathbb{R}\end{align*}$$

Bemerkung zum Betrag:<br />
Die L&ouml;sungen einer homogenen linearen Differentialgleichung ist entweder die Nulll&ouml;sung oder stets von Null verschieden, also in jedem Intervall nur positiv oder nur negativ. Sind sie nur positiv, kann man die Betragsstriche weglassen, sind sie nur negativ, dann kann man sie mit -1 multiplitzieren und erh&auml;lt wieder eine L&ouml;sung der homogenen Dgl. Deshalb kann man in diesem Fall den Betrag auch weglassen.<br /><br />

Um die inhomogene Gleichung zu l&ouml;sen, verwandelt man die Konstante <em>k</em> in eine Funktion von <em>x</em>:

$$y = K(x)\cdot \frac{1}{x}$$

Nun bildet man noch die Ableitung von diesem <em>y</em>:

$$y'= K(x)\cdot (-\frac{1}{x^2}) + K'(x)\cdot \frac{1}{x}$$

Dieses <em>y</em> und <em>y'</em> setzt man in die urspr&uuml;ngliche inhomogene Dgl ein und vereinfacht:

$$\begin{align*}y'&=-\frac{y}{x}+1 \\\\ \Leftrightarrow K(x)\cdot (-\frac{1}{x^2}) + K'(x)\cdot \frac{1}{x}&=K(x)\cdot \frac{1}{x}\cdot (-\frac{1}{x}) +1 \\\\ \Leftrightarrow K(x)\cdot (-\frac{1}{x^2}) + K'(x)\cdot \frac{1}{x}&=K(x)\cdot (-\frac{1}{x^2}) +1 \\\\ \Leftrightarrow K'(x)\cdot \frac{1}{x}&=1 \\\\ \Leftrightarrow K'(x)&=x \\\\ \Leftrightarrow K(x)&=\frac{1}{2}x^2+c\quad\quad c\in\mathbb{R}\end{align*}$$

Dies k&ouml;nnen wir wieder oben f&uuml;r <em>K(x)</em> einsetzen und erhalten die allgemeine L&ouml;sung der inhomogenen Differentialgleichung:

$$\begin{align*}y &= K(x)\cdot \frac{1}{x} \\\\ &= (\frac{1}{2}x^2+c)\cdot \frac{1}{x} \\\\ &= \frac{x}{2}+\frac{c}{x}\end{align*}$$

Zur L&ouml;sung des Anfangswertproblems, das heißt zur Bestimmung der Konstanten <em>c</em>, werden einfach <em>x = 2</em> und <em>y = 3/2</em> eingesetzt:

$$\frac{3}{2}=\frac{2}{2}+\frac{c}{2} \\\\ \Rightarrow c=1$$

Damit lautet die L&ouml;sung des AWP:

$$y=\frac{x}{2}+\frac{1}{x}$$

</div>

<div class="col-xs-2">

<a href="/en/differential_equations/variation_of_parameters_2.php" class="btn btn-primary btn-xs">English</a><br />

</div>

</div>
</div>

<?php
include $_SERVER["DOCUMENT_ROOT"]."de/footer.php";
?>