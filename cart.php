<?php
include("inc/site_header.php");
?>

<section id="cart_items">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active"><?= __('Shopping Cart') ?></li>
			</ol>
		</div>
		<div class="table-responsive cart_info">
			<table class="table table-condensed">
				<thead>
					<tr class="cart_menu">
						<td class="image"><?= __('Item') ?></td>
						<td class="description"></td>
						<td class="price"><?= __('Price') ?></td>
						<td class="quantity"><?= __('Quantity') ?></td>
						<td class="total"><?= __('Total') ?></td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					<?php
					$select = "SELECT * FROM products LIMIT 3";
					$result = $conn->query($select);
					while ($row = $result->fetch_assoc()) {
					?>
						<tr>
							<td class="cart_product">
								<a href=""><img src="admin/img/<?= $row['image'] ?>" style="width:150px;height:150px"></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?= $row['name'] ?></a></h4>
								<p><?= __('Web ID') ?>: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$<?= $row['price'] ?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$<?= $row['price'] ?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
					<?php
					}
					?>



				</tbody>
			</table>
		</div>
	</div>
</section> <!--/#cart_items-->

<section id="do_action">
	<div class="container">
		<div class="heading">
			<h3><?= __('What would you like to do next?') ?></h3>
			<p><?= __('Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.') ?></p>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="chose_area">
					<ul class="user_option">
						<li>
							<input type="checkbox">
							<label><?= __('Use Coupon Code') ?></label>
						</li>
						<li>
							<input type="checkbox">
							<label><?= __('Use Gift Voucher') ?></label>
						</li>
						<li>
							<input type="checkbox">
							<label><?= __('Estimate Shipping & Taxes') ?></label>
						</li>
					</ul>
					<ul class="user_info">
						<li class="single_field">
							<label><?= __('Country') ?>:</label>
							<select>
								<option><?= __('Egypt') ?></option>
								<option><?= __('United States') ?></option>
								<option><?= __('UK') ?></option>
								<option><?= __('Germany') ?></option>
								<option><?= __('France') ?></option>
								<option><?= __('Spain') ?></option>
								<option><?= __('Canada') ?></option>
								<option><?= __('Dubai') ?></option>
							</select>

						</li>
						<li class="single_field">
							<label><?= __('Region / State') ?>:</label>
							<select>
								<option><?= __('Select') ?></option>
								<option><?= __('Mansoura') ?></option>
								<option><?= __('Texas') ?></option>
								<option><?= __('London') ?></option>
								<option><?= __('Berlin') ?></option>
								<option><?= __('Alaska') ?></option>
								<option><?= __('Canada') ?></option>
								<option><?= __('Dubai') ?></option>
							</select>

						</li>
						<li class="single_field zip-field">
							<label><?= __('Zip Code') ?>:</label>
							<input type="text">
						</li>
					</ul>
					<a class="btn btn-default update" href=""><?= __('Get Quotes') ?></a>
					<a class="btn btn-default check_out" href=""><?= __('Continue') ?></a>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="total_area">
					<ul>
						<li><?= __('Cart Sub Total') ?> <span>$59</span></li>
						<li><?= __('Eco Tax') ?><span>$2</span></li>
						<li><?= __('Shipping Cost') ?> <span><?= __('Free') ?></span></li>
						<li><?= __('Total') ?> <span>$61</span></li>
					</ul>
					<a class="btn btn-default update" href=""><?= __('Update') ?></a>
					<a class="btn btn-default check_out" href=""><?= __('Check Out') ?></a>
				</div>
			</div>
		</div>
	</div>
</section><!--/#do_action-->

<?php

include("inc/footer.php");

?>