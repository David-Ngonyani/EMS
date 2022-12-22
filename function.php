<?php

function Component($productname, $price, $image,$description,$prod_id)
{
$element="
<div class='col-md-2 col-sm-2 my-2 my-md-2'>
			<form action='store.php' method='post'>
				<div class='card shadow'>
					<div><img src='$image' alt='image1' class='img-fluid  card-img-top' ></div
    <div class='card-body px-4'>
	<h5 class='card-title'> $productname</h5>
	<span class='card-title'> $description</span>
	<span class='price'>Tshs: $price</span>
</h5>


<button  type='submit' name='Add' class='btn btn-primary' >Add to Cart <i class='fas fa-shopping-cart' ></i>
<input type='hidden' name='product_id' value='$prod_id'>
</button>

</div>
    </form>
		</div>

";
echo $element;


}

function Cartproduct($image,$productname, $price,$prod_id ){
	$Element="

<form action='cart.php?action=remove&id=$prod_id' method='post' class='cart-items'>
				<div class='border rounded'>
					<div class='row bg-light'>
						<div class='col-md-3'>
							<img src='$image' width='200px' height='200px' alt='Noimage' class='img-fluid'>
						</div>
						<div class='col-md-6'>
							<h5 class='pt-2'>$productname</h5>
							<small class='text-primary'>Seller:G37</small>
							<h5 class='pt-0'>Tshs:$price</h5>
							<button type='submit' class='btn btn-warning mx-2'>Save For later</button>
							<button type='submit' class='btn btn-danger mx-1' name='remove'>Remove</button>
						</div>
						<div class='col-md-3 py-5'>
							<div><button type='button' class='btn bg-light border rounded-circle'><i class='fas fa-minus'></i></button><input type='text' value='1' class='form-control w-25 d-inline' name=''>
								<button type='button' class='btn bg-light border rounded-circle'><i class='fas fa-plus'></i></button></div>
						</div></div>
						</div>
                              </form>";

echo $Element;

}
 
?>