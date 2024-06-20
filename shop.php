<?php

include("inc/site_header.php");


?>

<section id="advertisement">
	<div class="container">
		<img src="images/shop/advertisement.jpg" alt="" />
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<?php

			include("inc/side_site.php");

			?>

			<div class="col-sm-9 padding-right">
				<div class="features_items"><!--features_items-->
					<h2 class="title text-center"><?= __('Features Items') ?></h2>
					<?php

					if (isset($_GET['catid'])) {
						$cat_id = $_GET['catid'];
						$select = "SELECT * FROM products WHERE cat = '$cat_id'";
					} elseif (isset($_GET['brandid'])) {
						$brand_id = $_GET['brandid'];
						$select = "SELECT * FROM products WHERE brand = '$brand_id'";
					} else {
						$select = "SELECT * FROM products ";
					}

					$result = $conn->query($select);
					while ($row = $result->fetch_assoc()) {
					?>

						<a href="product-details.php?id=<?= $row['id'] ?>">
							<div class="col-sm-4">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="admin/img/<?= $row['image'] ?>" style="width:200px;height:200px" />
											<h2>$<?= $row['price'] ?></h2>
											<p><?= $row['name'] ?></p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i><?= __('Add to cart') ?></a>
										</div>
										<!-- <img src="images/home/sale.png" class="new" alt="" /> new -->
									</div>
									<div class="choose">
										<ul class="nav nav-pills nav-justified">
											<li><a href="#"><i class="fa fa-plus-square"></i><?= __('Add to wishlist') ?></a></li>
											<li><a href="#"><i class="fa fa-plus-square"></i><? __('Add to compare') ?></a></li>
										</ul>
									</div>
								</div>
							</div>
						</a>
					<?php
					}
					?>




					<ul class="pagination">
						<li class="active"><a href="">1</a></li>
						<li><a href="">2</a></li>
						<li><a href="">3</a></li>
						<li><a href="">&raquo;</a></li>
					</ul>
				</div><!--features_items-->
			</div>
		</div>
	</div>
</section>

<?php

include("inc/footer.php");

?>