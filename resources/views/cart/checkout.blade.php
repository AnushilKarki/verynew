@extends('layouts.app')
@section('content')




		<!-- End Breadcrumbs -->
				
		<!-- Start Checkout -->
        	<!-- Form -->
							<form class="form" method="post" action="{{ route('orders.store') }}">
                            @csrf
		<section class="shop checkout section">
			<div class="container">
				<div class="row"> 
					<div class="col-lg-8 col-12">
						<div class="checkout-form">
							<h2>Make Your Checkout Here</h2>
							<p>Please register in order to checkout more quickly</p>
						
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Full Name<span>*</span></label>
											<input type="text" name="shipping_fullname" placeholder="" required="required">
										</div>
									</div>
								
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Email Address<span>*</span></label>
											<input type="email" name="email" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Phone Number<span>*</span></label>
											<input type="number" name="shipping_phone" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Country<span>*</span></label>
											<select name="country_name" id="country">
												
										
												<option value="NP">Nepal</option>
											
											
										
									
											</select>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>State / Divition<span>*</span></label>
											<select name="shipping_state" id="state-province">
												<option value="divition" selected="selected">1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
												<option>6</option>
												<option>7</option>
											</select>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>city<span>*</span></label>
											<input type="text" name="shipping_city" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Address <span>*</span></label>
											<input type="text" name="shipping_address" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>zip Code<span>*</span></label>
											<input type="text" name="shipping_zipcode" placeholder="" required="required">
										</div>
									</div>
								
									<div class="col-12">
										<div class="form-group create-account">
											<input id="cbox" type="checkbox">
											<label>Create an account?</label>
										</div>
									</div>
								</div>
						
							<!--/ End Form -->
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="order-details">
							<!-- Order Widget -->
							<div class="single-widget">
								<h2>CART  TOTALS</h2>
								<div class="content">
									<ul>
										<li>Sub Total<span>{{ \Cart::session(auth()->id())->getTotal() }}</span></li>
										<li>(+) Shipping<span>$10.00</span></li>
										<li class="last">Total<span>{{\Cart::session(auth()->id())->getTotal()}}</span></li>
									</ul>
								</div>
							</div>
							<!--/ End Order Widget -->
							<!-- Order Widget -->
							<div class="single-widget">
								<h2>Payments</h2>
								<div class="content">
									<div class="checkbox">
								
										<label class="checkbox-inline" for="2"><input name="payment_method" id="2" type="checkbox" value="cash_on_delivery"> Cash On Delivery</label>
										<label class="checkbox-inline" for="3"><input name="payment_method" id="3" type="checkbox" value="paypal"> PayPal</label>
									</div>
								</div>
							</div>
							<!--/ End Order Widget -->
							<!-- Payment Method Widget -->
							<div class="single-widget payement">
								<div class="content">
									<img src="images/payment-method.png" alt="#">
								</div>
							</div>
							<!--/ End Payment Method Widget -->
							<!-- Button Widget -->
							<div class="single-widget get-button">
								<div class="content">
									<div class="button">
                                    <button type="submit">place order</button>
									</div>
								</div>
							</div>
							<!--/ End Button Widget -->
						</div>
					</div>
				</div>
			</div>
		</section>
        </form>
		<!--/ End Checkout -->

@endsection
