<?php
$title = "Separation of variables 1";
$description = "sample solution of the initial value problem x(t)' = 1+x(t)^2 by \"separation of variables\"";
include $_SERVER["DOCUMENT_ROOT"]."en/header.php";
?>

<div class="container">
<div class="row">

<div class="col-xs-10">

<h1>Separation of variables 1</h1>

<h2>Exercise:</h2>
Solve this initial value problem by separation of variables:
$$x(t)' = 1+x(t)^2 \\\\ x(\frac{\pi}{4}) = -1$$

<h2>Solution:</h2>
\(1+x(t)^2\), the slope of the wanted function, is nowhere zero. There is <strong>no stationary solution</strong>.<br />

Furthermore \(1+x(t)^2\) is continuous on \(\mathbb{R}^2\) and locally Lipschitz continuous relative to <em>x</em>, therefore the <strong>initial value problem</strong> has a unique solution.<br />

For the derivation <em>x'</em> we use <a href="https://en.wikipedia.org/wiki/Leibniz's_notation">Leibniz's notation</a> and use it as a normal fraction.<br />

$$\frac{dx}{dt} = 1+x^2$$<br />

Now we bring all <em>x</em> to one side and all <em>t</em> to the other. Then we can find <em>x</em> with the help of an integration<br />

$$\begin{align} \frac{dx}{1+x^2} &amp;= 1 \; dt \\\\ \int \frac{dx}{1+x^2} &amp;= \int 1 \; dt \\\\ \arctan (x) &amp;= t+c \quad (c\in \mathbb{R}) \\\\ x &amp;= \tan(t + c)\end{align}$$<br />

To find <em>c</em> we can put in the initial values <em>x</em> and <em>t</em><br />

$$\tan(\frac{\pi}{4} + c) = -1$$<br />

That implies<br />

$$c=-\frac{\pi}{2}$$<br />

because<br />

$$\tan(\frac{\pi}{4} -\frac{\pi}{2}) = \tan(-\frac{\pi}{4}) = -1$$<br />

Therefore the solution of the initial value problem is:<br />

$$x(t)=\tan(t-\frac{\pi}{2})$$<br />

</div>

<div class="col-xs-2">

<a href="/de/differentialgleichungen/trennung_der_variablen_1.php" class="btn btn-primary btn-xs">Deutsch</a><br />

</div>

</div>
</div>

<?php
include $_SERVER["DOCUMENT_ROOT"]."en/footer.php";
?>
