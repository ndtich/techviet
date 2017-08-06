@extends('layout')

@section('content')

<div class="grid-container">
</div>
<div class="context-header ">
	<div class="grid-container">
		<nav class="breadcrumbs ">
			<a href="{{url('/')}}">Home</a>
			<a href="{{url('/listproductpa/'.$categoryParent->id.'-'.$categoryParent->alias.'.html')}}">{{$categoryParent->name}}</a>
			<a href="{{url('/listproduct/'.$categoryChild->id.'-'.$categoryChild->alias.'.html')}}">{{$categoryChild->name}}</a>
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
								<a href="{{ url('addcart/'.$data->id.'-'.$data->alias.'.html') }}" class="js-purchase__add-to-cart btn btn--size-l-slim btn--dimensions-full-width btn--color-green-3d">
									<i class="e-icon -icon-cart -margin-right"></i><strong>Thêm vào giỏ hàng</strong>
								</a>
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
						@foreach($productRelative as $row)
						<li>
							<a href="{{url('/detailproduct/'.$row->id.'-'.$row->alias.'.html')}}">
								<img width="318" src="{{url('images/product/'.$row->image)}}" />
								<br/>
								<span>{{$row->name}}</span>
							</a>
						</li>
						@endforeach

					</ul>
				</div>

			</div>

		</div>

	</div>

</div>

@endsection