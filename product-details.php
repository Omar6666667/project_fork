<?php

include("inc/site_header.php");

?>

<section>
	<div class="container">
		<div class="row">
			<?php

			include("inc/side_site.php");
			$id = $_GET['id'];
			$selectPro = "SELECT * FROM products WHERE id = '$id'";
			$resultPro = $conn->query($selectPro);
			$pro = $resultPro->fetch_assoc();

			$oldView = $pro['views'];
			$newView = $oldView + 1;

			$update = "UPDATE products SET views = '$newView' WHERE id = '$id";
			$conn->query($update);

			?>

			<div class="col-sm-9 padding-right">
				<div class="product-details"><!--product-details-->
					<div class="col-sm-5">
						<div class="view-product">
							<img src="admin/img/<?= $pro['image'] ?>" alt="" />
							<h3><?= __('ZOOM') ?></h3>
						</div>


					</div>
					<div class="col-sm-7">
						<div class="product-information"><!--/product-information-->
							<img src="images/product-details/new.jpg" class="newarrival" alt="" />
							<h2><?= $pro['name'] ?></h2>
							<p><?= __('Web ID') ?>: 1089772</p>
							<img src="images/product-details/rating.png" alt="" />
							<span>
								<span>US $<?= $pro['price'] ?></span>
								<label><?= __('Quantity') ?>:</label>
								<input type="text" value="<?= $pro['count'] ?>" />
								<button type="button" class="btn btn-fefault cart">
									<i class="fa fa-shopping-cart"></i>
									<?= __('Add to cart') ?>
								</button>
							</span>
							<p><b><?= __('Availability') ?>:</b>
								<?= $pro['count'] > 0 ? __("In Of Stock") : __("Out Of Stock") ?></p>
							<p><b><?= __('Views') ?>:</b> <?= $newView ?></p>
							<?php
							$select = "SELECT * FROM brand";
							$result = $conn->query($select);
							$row = $result->fetch_assoc();

							?>
							<p><b><?= __('Brand') ?>:</b><?= $row['name'] ?></p>
							<a href=""><img src="images/product-details/share.png" class="share img-responsive" alt="" /></a>
						</div><!--/product-information-->
					</div>
				</div><!--/product-details-->

				<div class="category-tab shop-details-tab"><!--category-tab-->
					<div class="col-sm-12">
						<ul class="nav nav-tabs">
							<li class=""><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
						</ul>
					</div>
					<div class="tab-content">
						<div class="tab-pane fade active in" id="reviews">
							<div class="col-sm-12">
								<ul>
									<li><a href=""><i class="fa fa-user"></i>Salah</a></li>
									<li><a href=""><i class="fa fa-clock-o"></i><?php /*date_default_timezone_set('Africa/Cairo'); */
																				echo date('H:i'); ?></a></li>
									<li><a href=""><i class="fa fa-calendar-o"></i><?= date('d-m-y'); ?></a></li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
								<p><b><?= __('Write Your Review') ?></b></p>

								<form action="#">
									<span>
										<input type="text" placeholder=<?= __("Your Name") ?> />
										<input type="email" placeholder=<?= __("Email Address") ?> />
									</span>
									<textarea name=""></textarea>
									<b><?= __('Rating') ?>: </b> <img src="images/product-details/rating.png" alt="" />
									<button type="submit" class="btn btn-default pull-right">
										<?= __('Submit') ?>
									</button>
								</form>
							</div>
						</div>

					</div>
				</div><!--/category-tab-->


			</div>
		</div>
	</div>
</section>

<?php

include("inc/footer.php");

?>