<?php
$title = "Separation of variables 2";
$description = "sample solution of the initial value problem (x²+1) * y' = 2x * y² \"separation of variables\"";
include $_SERVER["DOCUMENT_ROOT"]."en/header.php";
?>

<div class="container">
<div class="row">

<div class="col-xs-10">

<h1>Separation of variables 1</h1>

<h2>Exercise:</h2>
Solve this initial value problem by separation of variables:
$$\begin{align}(x^2+1)\cdot y' &amp;= 2x \cdot y^2 \\\\ x(0) &amp;= \frac{1}{2}\end{align}$$

<h2>Solution:</h2>
We bring the factor <em>x</em> to the right side and use for <em>y'</em> the other notation <em>dy/dx</em>.<br />

$$\begin{align}(x^2+1)\cdot y' &amp;= 2x \cdot y^2 \\\\ y' &amp;= (x^2+1)^{-1}\cdot 2x \cdot y^2 \\\\ \frac{dy}{dx} &amp;= (x^2+1)^{-1} \cdot 2x\cdot y^2\end{align}$$<br />

We use <em>dy/dx</em> like a fraction and bring the "denominator" <em>dx</em> to the right side and all <em>y</em> to the left side:

$$\begin{align}y^{-2} dy &amp;= (x^2+1)^{-1}\cdot 2x \; dx\end{align}$$<br />

Now we integrate both sides:<br />

$$\begin{align}\int y^{-2} dy &amp;= \int (x^2+1)^{-1}\cdot 2x \; dx \\\\ -y^{-1} &amp;= \int (x^2+1)^{-1}\cdot 2x \; dx \end{align}$$<br />

For the right side we use <a href="https://en.wikipedia.org/wiki/Integration_by_substitution">the substitution rule for integrals</a>:<br />

$$\begin{align}u(x) := x^2+1\end{align}$$<br />

The derivation is<br />

$$\begin{align}\frac{du}{dx} &amp;= 2x \\\\ du &amp;= 2x \; dx \end{align}$$<br />

We can plug this in<br />

$$\begin{align}\int (x^2+1)^{-1}\cdot 2x \; dx \\\\ &amp;= \int u^{-1}du \\\\ &amp;= ln(u)+c, \; c\in \mathbb{R}\end{align}$$<br />

Resubstitution (for <em>u</em> we plug in <em>x² + 1</em>)<br />

$$\begin{align}-y^{-1} &amp;= ln(x^2+1)+c \\\\ y &amp;= -(ln(x^2+1)+c)^{-1}\end{align}$$<br />

To find the particular solution we plug in <em>0</em> for <em>x</em> and <em>1/2</em> for <em>y^2</em><br />

$$\begin{align}y(0) &amp;= \frac{1}{2} \\\\ -(ln(0^2+1)+c)^{-1} &amp;= \frac{1}{2} \\\\ c &amp;= -2\end{align}$$<br />

We found <em>c</em> and can plug this in the general solution to find the solution for our initial value problem<br />

$$y(x) = -(ln(x^2+1)-2)^{-1}$$<br />

</div>

<div class="col-xs-2">

<a href="/de/differentialgleichungen/trennung_der_variablen_2.php" class="btn btn-primary btn-xs">Deutsch</a><br />

</div>

</div>
</div>

<?php
include $_SERVER["DOCUMENT_ROOT"]."en/footer.php";
?>
