@extends('layout')

@section('content')

<div class="grid-container">
</div>
<div class="context-header ">
	<div class="grid-container">
		<nav class="breadcrumbs ">
			<a href="/">Home</a>

		</nav>
		<div class="item-header" data-view="itemHeader">
			<div class="item-header__title">
				<h1 class="t-heading -color-inherit -size-l h-remove-margin is-hidden-phone" itemprop="name">{{$data->name}}</h1>
				<h1 class="t-heading -color-inherit -size-xs h-remove-margin is-hidden-tablet-and-above">{{$data->name}}</h1>
			</div>
			<div class="item-header__price">
				<a href="/cart/configure_before_adding/12897637" class="js-item-header__cart-button e-btn--3d -color-primary -size-m" data-view="modalAjax" rel="nofollow" title="Add to Cart">
					<span class="item-header__cart-button-icon">
						<i class="e-icon -icon-cart -margin-right"></i>
					</span>
					<span class="t-heading -size-m -color-light -margin-none">
						<b class="t-currency"><span class="js-item-header__price"> {{$data->price}} ₫</span></b>
					</span>
				</a>
			</div>
		</div>
	<!-- Desktop Item Navigation -->
		<div class="is-hidden-tablet-and-below page-tabs">
			<ul>
				<li class="selected"><a href="" class="t-link -decoration-none">Mã sản phẩm: {{$data->code}}</a></li>

			</ul>
		</div>
	<!-- Table or below Item Navigation -->
		<div class="page-tabs--dropdown" data-view="replaceItemNavsWithRemote" data-target=".js-remote">
			<div class="page-tabs--dropdown__slt-custom-wlabel">
				<div class="slt-custom-wlabel--page-tabs--dropdown">
					<label>
					<span class="js-label">
					Item Details </span>
					<span class="slt-custom-wlabel__arrow">
					<i class="e-icon -icon-arrow-fill-down"></i>
					</span>
					</label>
				
				</div>
			</div>
		</div>
	</div>
</div>
<div class="content-main" id="content">
	<div class="grid-container">

		<div class="content-s">
			<div class="box--no-padding">
				<div class="item-preview -preview-live">
					<a href="{{url('/preview/'.$data->id.'-'.$data->alias.'.html')}}" target="_blank"><img alt="Obsolute | Ghost Blog Theme" itemprop="image" src="{{url('images/product/'.$data->image)}}"/></a>
					<div class="item-preview__actions">
						<div id="fullscreen" class="item-preview__preview-buttons">
							<a href="{{url('/preview/'.$data->id.'-'.$data->alias.'.html')}}" role="button" class="btn-icon live-preview" target="_blank" rel="nofollow">Live Preview</a>
						</div>
						<div class="item-preview__preview-buttons--social" data-view="socialButtons">
							<div class="btn-group">
								<div class="btn btn--label btn--group-item">
									Share
								</div>
								<a class="btn btn--group-item" data-social-network-link href="#"><i class="e-icon -icon-facebook -size-medium -line-height-small"><span class="e-icon__alt">Facebook</span></i></a>
								<a class="btn btn--group-item" data-social-network-link href="#"><i class="e-icon -icon-google-plus -size-medium -line-height-small"><span class="e-icon__alt">Google Plus</span></i></a>
								<a class="btn btn--group-item" data-social-network-link href="#"><i class="e-icon -icon-twitter -size-medium -line-height-small"><span class="e-icon__alt">Twitter</span></i></a>
								<a class="btn btn--group-item" data-social-network-link href="#"><i class="e-icon -icon-pinterest -size-medium -line-height-small"><span class="e-icon__alt">Pinterest</span></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div data-view="toggleItemDescription">
				<div class="js-item-description item-description" itemprop="description">
					<div class="user-html">
        				{!! $data->description !!}
    				</div>
				</div>

			</div>

		</div>
		<div class="sidebar-l sidebar-right">
			<div class="purchase-panel">
				<div id="purchase-form" class="purchase-form">
					<form accept-charset="UTF-8" action=""  method="post">
						<div style="margin:0;padding:0;display:inline">
							<input type="hidden" name="add_cart" value="1" />
						</div>
						<div itemprop="offers" itemscope >
							
							<div data-view="itemVariantSelector">
								<div class="purchase-form__selection">
									<span class="purchase-form__license-type">
								
								
									</span>
									<div class="js-purchase-heading purchase-form__price t-heading -size-xxl">
										<b class="t-currency"><span class="js-purchase-price">&nbsp;{{number_format($data->price)}} ₫</span></b>
									</div>
								</div>
				
				
					
							</div>
							<div class="purchase-form__button">
								<button class="js-purchase__add-to-cart btn btn--size-l-slim btn--dimensions-full-width btn--color-green-3d">
								<i class="e-icon -icon-cart -margin-right"></i><strong>Thêm vào giỏ hàng</strong>
								</button>
							</div>
			
						</div>
					</form>
				</div>
			</div>

			<style type="text/css">
				.tuongtu img{
					max-width: 100%;
				}
			</style>
			<div class="box -radius-all">
				<div class="rating-detailed--has-no-ratings">
					<strong style="font-size: 20px;">Theme tương tự</strong> 

					<ul class="tuongtu">
						<li>
							<a href="Brander-Premium-Responsive-Portfolio-HTML5-Theme-p8387.html">
								<img width="318" src="https://image-tf.s3.envato.com/files/82505026/Preview/01-Preview.__large_preview.png" />
								<br/>
								<span>Brander - Premium Responsive Portfolio HTML5 Theme</span>
							</a>
						</li>
						<li>
							<a href="Stillidea-Travel-Tour-Multipurpose-WP-Theme-p354.html">
								<img width="318" src="https://image-tf.s3.envato.com/files/152318821/01_preview1.__large_preview.jpg" />
								<br/>
								<span>Stillidea - Travel Tour Multipurpose WP Theme</span>
							</a>
						</li>
						<li>
							<a href="Remould--Construction-amp-Building-WordPress-Theme-p3871.html">
								<img width="318" src="https://image-tf.s3.envato.com/files/156746915/remould-590x300.__large_preview.png" />
								<br/>
								<span>Remould | Construction &amp; Building WordPress Theme</span>
							</a>
						</li>
						<li>
							<a href="Squarecut-Responsive-Landing-Page-template-p14368.html">
								<img width="318" src="https://image-tf.s3.envato.com/files/33514050/theme-preview/promo.__large_preview.jpg" />
							<br/>
							<span>Squarecut Responsive Landing Page template</span>
						</a>
						</li>
						<li>
							<a href="Minima-Responsive-One-Page-Template-p8454.html">
								<img width="318" src="https://image-tf.s3.envato.com/files/98087215/preview.__large_preview.png" />
								<br/>
								<span>Minima - Responsive One Page Template</span>
							</a>
						</li>
						<li>
							<a href="Suko-Spa-Salon-Template-p13722.html">
								<img width="318" src="https://image-tf.s3.envato.com/files/145484004/Theme%20preview.__large_preview.jpg" />
								<br/>
								<span>Suko - Spa Salon Template</span>
							</a>
						</li>
						<li>
							<a href="TATO-Portfolio-amp-Agency-WordPress-Theme-p1697.html">
								<img width="318" src="https://image-tf.s3.envato.com/files/137737659/preview/01_Preview.__large_preview.jpg" />
								<br/>
								<span>TATO - Portfolio &amp; Agency WordPress Theme</span>
							</a>
						</li>
						<li>
							<a href="Nicasio-Creative-Muse-Template-p13414.html">
								<img width="318" src="https://image-tf.s3.envato.com/files/129649286/Theme%20preview.__large_preview.jpg" />
								<br/>
								<span>Nicasio Creative Muse Template</span>
							</a>
						</li>
						<li>
							<a href="AppBox-App-Landing-PSD-Theme-p10741.html">
								<img width="318" src="https://image-tf.s3.envato.com/files/126670507/00_preview.__large_preview.jpg" />
								<br/>
								<span>AppBox - App Landing PSD Theme</span>
							</a>
						</li>
						<li>
							<a href="Uno-Creative-Photography-Template-p7274.html">
								<img width="318" src="https://image-tf.s3.envato.com/files/151294894/01_preview1.__large_preview.png" />
								<br/>
								<span>Uno - Creative Photography Template</span>
							</a>
						</li>

					</ul>
				</div>

			</div>

		</div>

	</div>

</div>

@endsection