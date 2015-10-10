<?php
$title = "Variation of parameters 2";
$description = "sample solution for the differential equation y' = -(y/x) + 1";
include $_SERVER["DOCUMENT_ROOT"]."en/header.php";
?>

<div class="container">
<div class="row">

<div class="col-xs-10">

<h1>Variation of parameters 2</h1>

<h2>Exercise:</h2>
Find the solution for the initial value problem:
$$\begin{align*}y'&=-\frac{y}{x}+1 \\\\ y(2)&=\frac{3}{2}\end{align*}$$

<h2>Solution:</h2>
At first we solve the homogeneous equation by <a href="https://en.wikipedia.org/wiki/Separation_of_variables">separation of variables</a>:

$$\begin{align*}y'&=-\frac{y}{x} \\\\ \frac{dy}{dx}&=-\frac{y}{x} \\\\ \frac{1}{y}dy&=-\frac{1}{x}dx \\\\ \int\frac{1}{y}dy&=-\int\frac{1}{x}dx \\\\ \ln(|y|)&=-\ln(|x|)+k_0 \quad\quad k_0\in\mathbb{R} \\\\ y&=\exp(-\ln(|x|)+k_0) \\\\ y&=\exp(-\ln(|x|))\cdot \exp(k_0) \\\\ y_h&=\frac{1}{x} \cdot k \quad\quad k\in\mathbb{R}\end{align*}$$

Comment about the absolute value:<br />
The solution of a homogeneous linear differential equation is either zero or always different from zero, meaning in each interval either positive or negative. If it is positive, we can forget the absolute value sign. If it is negative, we can multiply by -1 an get another solution of the homogeneous differential equation. That is why we can forget the absolute value sign in this case.<br /><br />

To solve the non-homogeneous equation, we transform the constant <em>k</em> into a function of <em>x</em>:

$$y = K(x)\cdot \frac{1}{x}$$

Let's derive <em>y</em>:

$$y'= K(x)\cdot (-\frac{1}{x^2}) + K'(x)\cdot \frac{1}{x}$$

These <em>y</em> and <em>y'</em> are plugged into the initial non-homogeneous equation:

$$\begin{align*}y'&=-\frac{y}{x}+1 \\\\ \Leftrightarrow K(x)\cdot (-\frac{1}{x^2}) + K'(x)\cdot \frac{1}{x}&=K(x)\cdot \frac{1}{x}\cdot (-\frac{1}{x}) +1 \\\\ \Leftrightarrow K(x)\cdot (-\frac{1}{x^2}) + K'(x)\cdot \frac{1}{x}&=K(x)\cdot (-\frac{1}{x^2}) +1 \\\\ \Leftrightarrow K'(x)\cdot \frac{1}{x}&=1 \\\\ \Leftrightarrow K'(x)&=x \\\\ \Leftrightarrow K(x)&=\frac{1}{2}x^2+c\quad\quad c\in\mathbb{R}\end{align*}$$

To get the general solution plug this into the above for <em>K(x)</em>:

$$\begin{align*}y &= K(x)\cdot \frac{1}{x} \\\\ &= (\frac{1}{2}x^2+c)\cdot \frac{1}{x} \\\\ &= \frac{x}{2}+\frac{c}{x}\end{align*}$$

To solve the initial value problem, meaning finding the constant <em>c</em>, we simply plug in <em>x = 2</em> and <em>y = 3/2</em>:

$$\frac{3}{2}=\frac{2}{2}+\frac{c}{2} \\\\ \Rightarrow c=1$$

Therefore the solution is:

$$y=\frac{x}{2}+\frac{1}{x}$$

</div>

<div class="col-xs-2">

<a href="/de/differentialgleichungen/variation_der_konstanten_2.php" class="btn btn-primary btn-xs">Deutsch</a><br />

</div>

</div>
</div>

<?php
include $_SERVER["DOCUMENT_ROOT"]."en/footer.php";
?>
