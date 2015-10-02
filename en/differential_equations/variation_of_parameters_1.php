<?php
$title = "Variation of parameters 1";
$description = "sample solution for the differential equation y'-3y=x * e^{4x}";
include $_SERVER["DOCUMENT_ROOT"]."en/header.php";
?>

<div class="container">
<div class="row">

<div class="col-xs-10">

<h1>Variation of parameters 1</h1>

<h2>Exercise:</h2>
Find the general solution of the non-homogeneous differential equation
$$y'-3y=x\cdot e^{4x}$$

<h2>Solution:</h2>
At first we need to solve the homogeneous equation, for example by <strong>separation of variables</strong> or by hard thinking:<br />

$$\begin{align*}y'-3y &= 0 \\ y_0 &= K\cdot e^{3x}\quad K\in\mathbb{R}\end{align*}$$<br />

To solve the non-homogeneous equation, we transform the constant <em>K</em> in a function of <em>x</em>:<br />

$$y = K(x)\cdot e^{3x}$$<br />

We derive this <em>y</em>:<br />

$$y'= K'(x)\cdot e^{3x} + 3~K(x)\cdot e^{3x}$$<br />

Those <em>y</em> and <em>y'</em> are plugged into the original non-homogeneous differential equation, which can be rearranged:<br />

$$\begin{align*}y'-3y &amp;=x\cdot e^{4x}\\\\ \Leftrightarrow K'(x)\cdot e^{3x} + 3~K(x)\cdot e^{3x}~-3~ K(x)\cdot e^{3x} &amp;=x\cdot e^{4x}\\\\ \Leftrightarrow K'(x)\cdot e^{3x} &amp;=x\cdot e^{4x}\\\\ \Leftrightarrow K'(x) &amp;=x\cdot e^{x}\end{align*}$$<br />

Now we can find <em>K(x)</em> by a (more or less) simple integration:<br />

$$\begin{align*}K(x) &amp;= \int K'(x)~dx\\\\ &amp;= \int x\cdot e^{x}~dx\\\\ &amp;= (x-1)\cdot e^x +C \quad C\in \mathbb{R}\end{align*}$$<br />

To get the general solution of the non-homogeneous differential equation, we substitute the <em>K(x)</em> with the above.<br />

$$\begin{align*}y &amp;= K(x)\cdot e^{3x} \\\\ &amp;= ((x-1)\cdot e^x +C)\cdot e^{3x} \\\\ &amp;= (x-1)\cdot e^{4x}~+~C\cdot e^{3x}\end{align*}$$<br />

</div>

<div class="col-xs-2">

<a href="/de/differentialgleichungen/variation_der_konstanten_1.php" class="btn btn-primary btn-xs">Deutsch</a><br />

</div>

</div>
</div>

<?php
include $_SERVER["DOCUMENT_ROOT"]."en/footer.php";
?>
