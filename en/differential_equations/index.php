<?php
$title = "Ordinary differential equations";
$description = "On these pages you find sample solutions to ordinary differential equations";
include $_SERVER["DOCUMENT_ROOT"]."en/header.php";
?>

<div class="container">
<div class="row">

<div class="col-xs-10">

<h1>Ordinary differential equations</h1>
A differential equation is an equation that relates some function with its derivatives.
An ordinary differential equation is an equation containing a function of only one independent variable and its derivatives.
Differential equations are used to describe processes in nature involving varying quantities and their rates of change

<h2>Separation of variables</h2>

<div class="btn-group-vertical">
	<a href="/en/differential_equations/separation_of_variables_1.php" class="btn btn-primary">x(t)' = 1+x(t)^2</a>
	<a href="/en/differential_equations/separation_of_variables_2.php" class="btn btn-primary">(x²+1) y' = 2x y²</a>
</div>

<h2>Variation of parameters</h2>

<div class="btn-group-vertical">
	<a href="/en/differential_equations/variation_of_parameters_1.php" class="btn btn-primary">y' - 3y = x * exp(4x)</a>
	<a href="/en/differential_equations/variation_of_parameters_2.php" class="btn btn-primary">y' = -(y/x) + 1</a>
</div>

<h2>Linear equations with constant factors</h2>

<div class="btn-group-vertical">
	<a href="/en/differential_equations/linear_equation_constant_factors_1.php" class="btn btn-primary">y'' -5y'+6y=exp(-2x)</a>
</div>

</div>

<div class="col-xs-2">

<a href="/de/differentialgleichungen/index.php" class="btn btn-primary btn-xs">Deutsch</a><br />

</div>

</div>
</div>

<?php
include $_SERVER["DOCUMENT_ROOT"]."en/footer.php";
?>
