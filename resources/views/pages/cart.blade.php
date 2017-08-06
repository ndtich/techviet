@extends('layout')

@section('content')

<div class="grid-container">
</div>
<div class="context-header ">
	<div class="grid-container">
		<nav class="breadcrumbs ">
			<a href="{{url('/')}}">Home</a>
			<a href="">Shopping Cart</a>
		</nav>
		
		<div class="page-title__result-count h-pull-left">
		</div>
		<div class="h-clear">
		</div>
	</div>
</div>
<div class="content-main--basic" id="content">
	<div class="">
		<section class="page-section" data-view="cartPage">
			<div class="grid-container">
					<div class="layout__main-content">
						<div class="cart-header">
							<span class="cart-header__left">
								<a href="{{url('/')}}" class="btn">Tiếp tục mua hàng</a>
							</span>
							
							<form accept-charset="UTF-8" action="{{url('/destroycart')}}" class="cart-header__right" method="post">
							{{ csrf_field() }}
								<div style="margin:0;padding:0;display:inline">
			                    	<input type="hidden" name="del_cart" value="1" />
								</div>
								<button class="js-cart__empty btn btn--color-dark" name="button" type="submit">Xóa giỏ hàng</button>
							</form>
						</div>
					<div class="shopping-cart">

						@foreach(Cart::content() as $rowCart)
        				<div class="shopping-cart__group">
							<article class="shopping-cart__entry">
								<div class="item-result">
									<div class="item-result__thumbnail">
										<a href="Inspire-Bootstrap-4-Admin-Template-p21498.html">
											<img  height="80" src="{{ url('images/product/'.$rowCart->options->img) }}" width="80"/>
										</a>
									</div>
									<div class="item-result__details">
										<div class="cart-entry">
											<div class="cart-entry__title">
												<h5 class="t-body -weight-bold h-remove-margin"><a href="Inspire-Bootstrap-4-Admin-Template-p21498.html">{{$rowCart->name}}</a></h5>
											</div>
										</div>
									</div>
									<div class="item-result__price">
										<div class="cart-entry__remove">
											<form accept-charset="UTF-8" action="{{url('/deletecartitem')}}" method="post">
											{{ csrf_field() }}
												<div style="margin:0;padding:0;display:inline">
			                                    	<input type="hidden" name="rowid" value="{{$rowCart->rowId}}" />
												</div>
												<button class="js-cart__remove-entry btn-link">
													<span>Xóa</span><i class="e-icon -icon-cancel -margin-left"></i>
												</button>
											</form>
										</div>
										<div class="cart-entry__price">
											<h6 class="t-heading -size-l h-remove-margin">
												<b class="js-item-upgrade__item-price t-currency">
											{{number_format($rowCart->price)}} ₫ </b>
											</h6>
										</div>
									</div>
								</div>
				
							</article>
						</div>
						@endforeach
        				
                
						<footer class="cart-footer ">
							<div class="cart-footer__subtotal">
								<span class="t-heading -size-s -weight-normal">Tổng tiền</span>
								<span class="t-heading -size-l">
									<b class="js-item-upgrade__cart-total t-currency"> {{Cart::subtotal() }} ₫ </b>
								</span>
							</div>
							<div class="cart-footer__controls">
								<span class="cart-footer__continue">
								<a href="{{url('/')}}" class="btn">Tiếp tục mua hàng</a>
								</span>
								<span class="cart-footer__checkout">
			                        <input type="hidden" name="checkout" value="1" />
									<div>
										<a href="{{url('/checkout.html')}}">
											<input class="btn btn--primary-large-full" type="button" value="Đặt mua"/>
										</a>
									</div>
								</span>
							</div>
						</footer>
					</div>
				</div>
				<aside class="layout__sidebar">
					<div class="box -radius-all is-hidden-tablet-and-below">
						<div class="shopping-cart__checkout-primary">
							<h3 class="t-heading -size-s -weight-normal">Tổng giỏ hàng</h3>
							<h4 class="t-heading -size-xl h-spacing-below--small">
							<b class="js-item-upgrade__cart-total t-currency">
								{{Cart::subtotal() }} ₫ </b>
							</h4>
							
							<div>
		                    <input type="hidden" name="checkout" value="1" />
		                    	<a href="{{url('/checkout.html')}}">
									<input class="btn btn--primary-large-full" type="button" value="Đặt mua"/>
								</a>
							</div>
						</div>
					</div>
				</aside>
			</div>
		</section>
	</div>
</div>

@endsection