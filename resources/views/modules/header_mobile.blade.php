<div class="page__off-canvas--left overthrow">
      <div class="off-canvas-left js-off-canvas-left">
        <ul>
        @foreach($category_parent_list as $category_parent)
          <li>
            <a href="{{url('/listproductpa/'.$category_parent->id.'-'.$category_parent->alias.'.html')}}" class="off-canvas-category-link" data-dropdown-target="#section{{$category_parent->id}}" data-view="dropdown">
              {{$category_parent->name}}
            </a>
            <ul class="is-hidden" id="section{{$category_parent->id}}">
            @foreach($category_parent->categoryChild as $category_child)
              <li><a href="{{url('/listproduct/'.$category_child->id.'-'.$category_child->alias.'.html')}}" class="off-canvas-category-link--sub">{{$category_child->name}}</a> </li>
            @endforeach
            </ul>     
          </li>
        @endforeach
        </ul>

      </div>

    </div>
    <div class="page__off-canvas--right overthrow">
      <div class="off-canvas-right">
        <a href="/cart.html" class="off-canvas-right__link--cart">
          Guest Cart
          <div class="shopping-cart-summary " data-view="cartCount">
            <span class="js-cart-summary-count shopping-cart-summary__count">0</span>
            <i class="e-icon -icon-cart"></i>
          </div>
        </a>
        <a  style="display: none;"  href="/sign_up" class="off-canvas-right__link">
          Create an Envato Account
          <i class="e-icon -icon-envato"></i>
        </a>
        <a style="display: none;"  href="/sign_in" class="off-canvas-right__link" rel="nofollow">
          Sign In
          <i class="e-icon -icon-login"></i>
        </a>
      </div>

    </div>