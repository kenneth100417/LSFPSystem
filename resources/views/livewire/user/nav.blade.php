<li class="nav-item d-flex align-items-center">
    <a href="{{url('/cart')}}" class="nav-link text-body font-weight-bold px-0 position-relative">
        <i class="fa fa-cart-shopping me-sm-1 mx-2 nav-cart"></i>
        <span class="position-absolute translate-middle badge rounded-pill bg-danger" style="padding: 2px 5px; top: 6px; right: -13px;">
            <span style="font-size: 8px">{{$cartCount->count()}}</span>
            <span class="visually-hidden">Products</span>
          </span>
    </a>
</li>

<li class="nav-item d-flex align-items-center">
<a type="button" href="/notifications" class="position-relative nav-link text-body font-weight-bold px-0">
    <i class="fa fa-bell me-sm-1 mx-2 nav-bell"></i>
    <span class="position-absolute translate-middle badge rounded-pill bg-danger" style="padding: 2px 5px; top: 6px; right: -15px;">
        <span style="font-size: 8px">0</span>
        <span class="visually-hidden">Unread Notification</span>
    </span>
</a>
</li>