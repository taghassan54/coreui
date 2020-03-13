<li class="nav-item {{ Request::is('sliders*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('sliders.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Sliders</span>
    </a>
</li>
<li class="nav-item {{ Request::is('programmAndServices*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('programmAndServices.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>P A S</span>
    </a>
</li>
<li class="nav-item {{ Request::is('contactuses*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('contactuses.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Contact us</span>
    </a>
</li>
