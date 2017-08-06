@extends('layout')

@section('content')


<div class="grid-container">
</div>
<div class="context-header ">
	<div class="grid-container">
		<nav class="breadcrumbs ">
			<a href="{{url('/')}}">Home</a>
	        <a rel="nofollow" href="{{url('/cart.html')}}">Shopping Cart</a>
	        <a rel="nofollow" href="">Checkout</a>
		</nav>
		<div class="page-title__result-count h-pull-left">
		</div>
		<div class="h-clear">
		</div>
	</div>
</div>
<div class="content-main--basic" id="content">
	<div class="">
		<section class="page-section -size-compact -color-white">
			<div data-view="checkoutPage" class="grid-container">
				<div class="js-checkout">
					<div class="layout__main-content">
						<div id="billing-details" class="e-fieldset">
							<header class="e-fieldset__header -divider-bottom">
								<div class="e-fieldset__title">
									<h3 class="t-heading -size-s h-remove-margin">
										Billing Details
									</h3>
									<div class="e-fieldset__subtitle" style="color: red;">
			                        
									</div>
								</div>
							</header>
							<form method="post" id="new_billing_details_form" data-view="billingDetails" class="form js-checkout__billing-details e-form -layout-vertical-inline" action="" accept-charset="UTF-8" novalidate="novalidate">
							<div style="margin:0;padding:0;display:inline">
							</div>
							<div class="e-fieldset__body">
								<div am-grid="">
									<div am-grid-row="l:start" am-grid-col="l:5">
										<div class="e-form__group">
											<div class="e-form__label">
												<label for="billing_details_form_first_name">Full name <abbr title="required">*</abbr></label>
											</div>
											<div class="e-form__input">
												<input type="text" value="" size="50" name="fullname"  class="f-input -type-string -width-full">
											</div>
										
										</div>
									</div>
									<div am-grid-row="l:end" am-grid-col="l:6">
										<div class="e-form__group">
											<div class="e-form__label">
												<label for="billing_details_form_last_name">Phone <abbr title="required">*</abbr></label>
											</div>
											<div class="e-form__input">
												<input type="text" value="" size="50" name="tel"  class="f-input -type-string -width-full">
											</div>
										
										</div>
									</div>
									<div am-grid-row="l:start l:end" am-grid-col="l:11">
										<div class="e-form__group">
											<div class="e-form__label">
												<label for="billing_details_form_company_name">Email <abbr title="required">*</abbr></label>
											</div>
											<div class="e-form__input">
												<input type="text" size="50" name="email" maxlength="100" value=""  class="f-input -type-string -width-full">
											</div>
										</div>
								
										<div class="e-form__group">
											<div class="e-form__label">
												<label for="billing_details_form_address_line1">Address <abbr title="required">*</abbr></label>
											</div>
											<div class="e-form__input">
												<input type="text" size="50" name="address" value="" maxlength="100" id="billing_details_form_address_line1" class="f-input -type-string -width-full">
											</div>
										</div>
									
									</div>
													
													
													
									<div class="js-vat-verification h-clear is-hidden--js">
										<div class="e-form__group">
											<div class="e-form__label">
												<label for="billing_details_form_vat_number">Captcha <abbr title="required">*</abbr></label><br/>
												<i class="js-vat-verification__local-lang t-body -size-s"></i>
											</div>
											<div class="e-form__input">
												<div am-grid-row="s:start s:end m:start l:start" am-grid-col="s:4 m:2 l:4">
													<input type="text" size="50" name="code"  class="f-input -type-string js-vat-verification__input -width-full h-spacing-below--xsmall" placeholder="">
												</div>
												<div am-grid-row="s:start s:end m:end l:end" am-grid-col="s:4 m:6 l:7">
                                                	<img src="captcha.php"/>
												</div>
													<div class="js-vat-verification__response e-form__response h-clear">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<footer class="e-fieldset__footer">
									<input type="submit" value="Finish" name="commit" data-disable-with="Saving..." class="button btn btn--color-green-3d">
								</footer>
							</form>
						</div>
					</div>
					<aside class="layout__sidebar is-hidden-tablet-and-below">
						<div class="e-fieldset -color-dark">
							<header class="e-fieldset__header -divider-bottom">
								<div class="e-fieldset__title">
									<h3 class="t-heading -size-xs h-remove-margin">Tóm tắt giỏ hàng</h3>
								</div>
							</header>
							<div class="e-fieldset__body">
								<div class="order-summary">
									<div class="order-summary__group">
							    		<div class="order-summary__entry">
											<div title="Barber - Html Template for Barbers and Hair Salon" class="order-summary__description -text-truncated">
											 Inspire - Bootstrap 4 Admin Template
											</div>
											<div class="order-summary__price">
												500,000 ₫
											</div>
										</div>
										<div class="order-summary__entry">
											<div title="Barber - Html Template for Barbers and Hair Salon" class="order-summary__description -text-truncated">
											 Beast - Responsive Admin Template
											</div>
											<div class="order-summary__price">
											280,000 ₫
											</div>
										</div>
								
									</div>
									<div class="order-summary__group -divider-top">
										<div class="order-summary__entry h-remove-margin">
											<div class="order-summary__description">
												<h4 class="t-heading -size-s h-remove-margin">Tổng tiền:</h4>
											</div>
											<div class="order-summary__total">
												<h4 class="t-heading -size-s h-remove-margin">
												<b class="t-currency">780,000 ₫</b>
												</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</aside>
				</div>
			</div>
		</section>
	</div>
</div>

@endsection