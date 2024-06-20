<?php

include("inc/site_header.php");

?>

<section id="cart_items">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active"><?= __('Check out') ?></li>
			</ol>
		</div><!--/breadcrums-->

		<div class="step-one">
			<h2 class="heading"><?= __('Step') ?>1</h2>
		</div>
		<div class="checkout-options">
			<h3><?= __('New User') ?></h3>
			<p><?= __('Checkout options') ?></p>
			<ul class="nav">
				<li>
					<label><input type="checkbox"> <?= __('Register Account') ?></label>
				</li>
				<li>
					<label><input type="checkbox"> <?= __('Guest Checkout') ?></label>
				</li>
				<li>
					<a href=""><i class="fa fa-times"></i><?= __('Cancel') ?></a>
				</li>
			</ul>
		</div><!--/checkout-options-->

		<div class="register-req">
			<p><?= __('Please use Register And Checkout to easily get access to your order history, or use Checkout as Guest') ?></p>
		</div><!--/register-req-->

		<div class="shopper-informations">
			<div class="row">
				<div class="col-sm-3">
					<div class="shopper-info">
						<p><?= __('Shopper Information') ?></p>
						<form>
							<input type="text" placeholder=<?= __("Display Name") ?>>
							<input type="text" placeholder=<?= __("User Name") ?>>
							<input type="password" placeholder=<?= __("Password") ?>>
							<input type="password" placeholder=<?= __("Confirm password") ?>>
						</form>
						<a class="btn btn-primary" href=""><?= __('Get Quotes') ?></a>
						<a class="btn btn-primary" href=""><?= __('Continue') ?></a>
					</div>
				</div>
				<div class="col-sm-5 clearfix">
					<div class="bill-to">
						<p><?= __('Bill To') ?></p>
						<div class="form-one">
							<form>
								<input type="text" placeholder=<?= __("Company Name") ?>>
								<input type="text" placeholder=<?= __("Email") ?>*>
								<input type="text" placeholder=<?= __("Title") ?>>
								<input type="text" placeholder=<?= __("First Name") ?>*>
								<input type="text" placeholder=<?= __("Middle Name") ?>>
								<input type="text" placeholder=<?= __("Last Name") ?>*>
								<input type="text" placeholder=<?= __("Address") ?>1*>
								<input type="text" placeholder=<?= __("Address") ?>2>
							</form>
						</div>
						<div class="form-two">
							<form>
								<input type="text" placeholder=<?= __("Zip / Postal Code") ?> *>
								<select>
									<option>-- <?= __('Country') ?> --</option>
									<option><?= __('Egypt') ?></option>
									<option><?= __('United States') ?></option>
									<option><?= __('UK') ?></option>
									<option><?= __('Germany') ?></option>
									<option><?= __('France') ?></option>
									<option><?= __('Spain') ?></option>
									<option><?= __('Canada') ?></option>
									<option><?= __('Dubai') ?></option>
								</select>
								<select>
									<option>-- <?= __('State / Province / Region') ?> --</option>
									<option><?= __('Egypt') ?></option>
									<option><?= __('United States') ?></option>
									<option><?= __('UK') ?></option>
									<option><?= __('Germany') ?></option>
									<option><?= __('France') ?></option>
									<option><?= __('Spain') ?></option>
									<option><?= __('Canada') ?></option>
									<option><?= __('Dubai') ?></option>
								</select>
								<input type="password" placeholder=<?= __("Confirm password") ?>>
								<input type="text" placeholder=<?= __("Phone") ?> *>
								<input type="text" placeholder=<?= __("Mobile Phone") ?>>
								<input type="text" placeholder=<?= __("Fax") ?>>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="order-message">
						<p><?= __('Shipping Order') ?></p>
						<textarea name="message" placeholder=<?= __("Notes about your order, Special Notes for Delivery") ?> rows="16"></textarea>
						<label><input type="checkbox"> <?= __('Shipping to bill address') ?></label>
					</div>
				</div>
			</div>
		</div>
		<div class="review-payment">
			<h2><?= __('Review & Payment') ?></h2>
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

					$select = "SELECT * FROM products LIMIT 4";
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
		<div class="payment-options">
			<span>
				<label><input type="checkbox"> <?= __('Direct Bank Transfer') ?></label>
			</span>
			<span>
				<label><input type="checkbox"> <?= __('Check Payment') ?></label>
			</span>
			<span>
				<label><input type="checkbox"> <?= __('Paypal') ?></label>
			</span>
		</div>
	</div>
</section> <!--/#cart_items-->



<?php

include("inc/footer.php");

?>