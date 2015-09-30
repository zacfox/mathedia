<?php
$title = "Variation der Konstanten 1";
include $_SERVER["DOCUMENT_ROOT"]."de/header.php";
?>

<div class="container">

<h1>Variation der Konstanten 1</h1>

<h2>Aufgabe:</h2>
$$y'-3y=x\cdot e^{4x}$$

<h2>Lösung:</h2>
Zuerst löst man die homogene Gleichung durch Trennung der Variablen oder scharfes hinsehen:<br />

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

<?php
include $_SERVER["DOCUMENT_ROOT"]."de/footer.php";
?>
