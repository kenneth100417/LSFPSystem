
<li class="nav-item d-flex align-items-center">
    <a type="button" href="/admin_notifications" class="position-relative nav-link text-body font-weight-bold px-0">
        <i class="fa fa-bell me-sm-1 mx-2 nav-bell"></i>
        <span class="position-absolute translate-middle badge rounded-pill bg-danger" style="padding: 5px 5px; top: 8px; right: -5px;" {{$notifCount->count() == '0' ? 'hidden':''}}>
            {{-- <span style="font-size: 9px">{{$notifCount->count()}}</span>
            <span class="visually-hidden">Unread Notification</span> --}}
        </span>
    </a>
</li>