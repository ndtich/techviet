@extends('layout')

@section('content')



<div class="js-search-header page-section -theme-themeforest -size-xcompact">
  <div data-view="searchBar" data-facet-id="searchFacets">
    <div class="h-padding">
      <form class="huge-search--search-home" action="/search.html" method="GET">
        <input name="q" placeholder="Tìm kiếm mẫu website" type="search" value=""/>
        <input type="hidden" name="category" value="93" />
        <button type="submit"><span class="e-icon__alt">Search</span></button>
      </form>
    </div>

    <div class="search-header__results-count">
      <h1>Chúng tôi có: 185 mẫu Ghost Themes Themes</h1>
    </div>

  </div>
</div>



<div class="content-main--basic" id="content">
  <style type="text/css">
    .vanlan_left img{
      max-width: 100% !important;
    }
  </style>
  <div class="">
    <div class="faceted-search js-faceted-search" data-view="pjaxFacetedSearch">
      <div class="grid-container">
        <div class="sidebar-s -size-fixed-tablet is-hidden-phone vanlan_left">
          <div class="search-facet">

            <div class="search-facet--no-margin">
              <div class="search-facet-box js-search-facet-panel__header search-facet-panel__header--start">
                <div class="search-facet-box__inner">
                  <form method="post" action="">
                    <h2 class="search-facet-box__heading"><i class="e-icon -icon-dollar -margin-right"></i>Tìm theo giá</h2>

                    <div class="search-facet-range__inputs">
                      <div class="js-search-facet-range__input search-facet-range__input--with-prefix">
                        <label for="price_min">Từ </label>
                        <input type="text"  name="price_min" id="price_min" value="" />
                      </div>

                      <div class="js-search-facet-range__input search-facet-range__input--with-prefix">
                        <label for="price_max">Đến</label>
                        <input type="text"  name="price_max" id="price_max" value="" />
                      </div>

                      <div class="search-facet-range__input--submit">
                        <button type="submit" class="btn btn--size-m-inline no-label">
                          <i class="e-icon -icon-search">
                            <span class="e-icon__alt">Apply</span>
                          </i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div>
  
        </div>
        <div class="content-l -size-scale-tablet content-right">
          <div data-view="productList">
            <ul class="product-list" data-view="bookmarkStatesLoader">
              @foreach($data as $row_product)

              <li class="js-google-analytics__list-event-container" data-item-id="12897637">

                <div class="product-list__columns-container">
                  <div class="product-list__column-detail">
                    <div class="product-list__item-thumbnail">
                      <div class="item-thumbnail">
                        <div class="item-thumbnail__image">
                          <a href="{{url('/detailproduct/'.$row_product->id.'-'.$row_product->alias.'.html')}}" class="js-google-analytics__list-event-trigger">
                            <img  border="0" class="preload no_preview landscape-image-magnifier" data-item-author="" data-item-category="Ghost Themes " data-item-cost="{{number_format($row_product->price)}}" data-item-name="{{$row_product->name}}" data-preview-url="{{url('images/product/'.$row_product->image)}}" height="80" src="{{url('images/product/'.$row_product->image_logo)}}" title="{{$row_product->name}}" width="80">
                          </a>
                          <div class="item-thumbnail__preview">
                            <a href="{{url('/preview/'.$row_product->id.'-'.$row_product->alias.'.html')}}" target="_blank">Live preview</a>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="product-list__adjacent-thumbnail">
                      <h3 class="product-list__heading">
                        <a href="{{url('/detailproduct/'.$row_product->id.'-'.$row_product->alias.'.html')}}" class="js-google-analytics__list-event-trigger t-link -color-inherit -decoration-reversed">{{$row_product->name}}</a>
                      </h3>

                    <div class="product-list__price">
                      <p class="t-body -size-m -color-inherit -weight-bold h-remove-margin"> {{number_format($row_product->price)}} ₫</p>        </div>

                    </div>

                    <div class="h-clear">
                      <div class="product-list__item-thumbnail-actions">
                        <div class="item-thumbnail-actions -width-full">
                          <ul class="item-thumbnail-actions__list">
                            <li class="item-thumbnail-actions__control -icon-cart -responsive-size-l">
                              <span>
                                <a href="cart.html?add=1&id=19613" class="js-google-analytics__list-add-to-cart" data-bind="item-cart-status:12897637" data-view="modalAjax" rel="nofollow" title="Add to Cart"><span>Add to Cart</span></a>
                                </span>

                            </li>
                          </ul>
                        </div>

                      </div>
                    </div>
                  </div>

                  <div class="product-list__column-category">
                    <p class="t-body -size-s h-remove-margin">
                        
                      {!! $row_product->summary !!}
                    </p>
                  </div>

                  <div class="product-list__column-price">
                    <p class="product-list__price-desktop"> 	{{number_format($row_product->price)}} ₫</p>
                    
                  </div>
                </div>
              </li>

              @endforeach
              

    

    

    

    

            </ul>


          </div>

          <nav class="js-pagination pagination">
            <ul class="pagination__list">
              <li><a href="Ghost-Themes-s93-page-1"><img src="{{url('images/page_first.gif')}}"></a></li> <li><a href="Ghost-Themes-s93-page-1">1</a></li>
              <li><a href="Ghost-Themes-s93-page-2">2</a></li><li><a href="Ghost-Themes-s93-page-3">3</a></li><li><a href="Ghost-Themes-s93-page-4">4</a></li>
              <li><a href="Ghost-Themes-s93-page-5">5</a></li><li><a href="Ghost-Themes-s93-page-6">6</a></li><li class="phantrang1"><span>7</span></li> 
            </ul>
          </nav>

        </div>


  
      </div>
    </div>


  </div>
</div>

@endsection