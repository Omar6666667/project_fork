<?php

include("inc/site_header.php");
include("inc/slider.php");

?>


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

					$select = "SELECT * FROM products LIMIT 6 "; // ASC
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

									</div>
									<div class="choose">
										<ul class="nav nav-pills nav-justified">
											<li><a href="#"><i class="fa fa-plus-square"></i><?= __('Add to wishlist') ?></a></li>
											<li><a href="#"><i class="fa fa-plus-square"></i><?= __('Add to compare') ?></a></li>
										</ul>
									</div>
								</div>
							</div>
						</a>
					<?php
					}
					?>
				</div><!--features_items-->





			</div>
		</div>
	</div>
</section>

<?php

include("inc/footer.php");

?>