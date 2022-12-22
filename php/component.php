<?php

function Component($productname, $price, $image)
{
$element="

<div class=\"col-md-8 col-sm-3 my-2 my-md-6\">
			<form action=\"index.php\" action=\"post\">
				<div class=\"card shadow\">
					<div><img src=\"$image\" alt=\"image1\" class=\"img-fluid  card-img-top\" ></div
    <div class=\"card-body\">
	<h5 class=\"card-title\"> $productname</h5>
	

	<small><s class=\"text-secondary\">$price</s></small>
	<span class=\"price\">$price</span>
</h5>

<button type=\"submit\" class=\"btn btn-warning my-3\" name=\"Add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>

</div>
    </form>
		</div>
";
echo $element;


}

?>