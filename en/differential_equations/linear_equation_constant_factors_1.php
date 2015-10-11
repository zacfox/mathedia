<?php
$title = "Linear equation with constant factor";
$description = "sample solution of the linear equations with constant factor y'' -5y'+6y=exp(-2x)";
include $_SERVER["DOCUMENT_ROOT"]."en/header.php";
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

<h1>Linear differential equation with constant factors 1</h1>

<h2>Exercise:</h2>
Find the general solution of the linear equation with constant factors:
$$y'' -5y'+6y=e^{-2x}$$

<h2>Solution:</h2>
The homogeneous equation is:

$$y'' -5y'+6y=0$$

The <a href="https://en.wikipedia.org/wiki/Characteristic_equation_%28calculus%29">characteristic polynomial</a> is:

$$\chi(\lambda)=\lambda^2 -5\lambda +6 = (\lambda-2)(\lambda-3)$$

This gives the two eigenvalues:

$$\lambda_1 = 2 \qquad \lambda_2 = 3$$

This yields the fundamental system:

$$y_1=e^{2x} \qquad y_2=e^{3x}$$

The non-homogeneous equation is:

$$y'' -5y'+6y=e^{-2x}$$

The perturbation is \(e^{-2x}\) and since \(\lambda = -2\) is not a root of \(\chi(\lambda)\), there is no resonance.

For the particular solution we have:

$$y_s = A e^{-2x}$$

Plugging in and comparing the coefficients implies:

$$A=\frac{1}{20}$$

Therefore the general solution is:

$$y=y_s + C_1~y_1+C_2~y_2\\\\ y=\frac{1}{20}~e^{-2x}+C_1~e^{2x}+C_2~e^{3x}$$

</div>

<div class="col-sm-2">

<a href="/de/differentialgleichungen/lineare_gleichung_konstanter_koeffizient_1.php" class="btn btn-primary btn-xs">Deutsch</a><br /><br />

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
include $_SERVER["DOCUMENT_ROOT"]."en/footer.php";
?>
