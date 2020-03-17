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

<li class="nav-item {{ Request::is('posts*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('posts.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Posts</span>
    </a>
</li>
<li class="nav-item {{ Request::is('events*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('events.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Events</span>
    </a>
</li>
<li class="nav-item {{ Request::is('blogCategories*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('blogCategories.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Blog Categories</span>
    </a>
</li>
<li class="nav-item {{ Request::is('contactuses*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('contactuses.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Contact us</span>
    </a>
</li>
{{-- <li class="nav-item {{ Request::is('blogPostTags*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('blogPostTags.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Blog Post Tags</span>
    </a>
</li> --}}
<li class="nav-item {{ Request::is('footers*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('footers.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Footers</span>
    </a>
</li>
<li class="nav-item {{ Request::is('galleries*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('galleries.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Galleries</span>
    </a>
</li>
