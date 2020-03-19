

<li class="nav-item  nav-dropdown  ">
    <a class="nav-link  nav-dropdown-toggle " href="#">
        community
    </a>
    <ul class="nav-dropdown-items">

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


    </ul>
</li>



<li class="nav-item  nav-dropdown  ">
    <a class="nav-link  nav-dropdown-toggle " href="#">
        memberships
    </a>
    <ul class="nav-dropdown-items">
        <li class="nav-item {{ Request::is('memberships*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('memberships.index') }}">
                <i class="nav-icon icon-cursor"></i>
                <span>Memberships</span>
            </a>
        </li>

        <li class="nav-item {{ Request::is('countriys*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('countriys.index') }}">
                <i class="nav-icon icon-cursor"></i>
                <span>Countriys</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('cities*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('cities.index') }}">
                <i class="nav-icon icon-cursor"></i>
                <span>Cities</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('contactInfos*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('contactInfos.index') }}">
                <i class="nav-icon icon-cursor"></i>
                <span>Contact Infos</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('ageRanges*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('ageRanges.index') }}">
                <i class="nav-icon icon-cursor"></i>
                <span>Age Ranges</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('nationalities*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('nationalities.index') }}">
                <i class="nav-icon icon-cursor"></i>
                <span>Nationalities</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('universities*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('universities.index') }}">
                <i class="nav-icon icon-cursor"></i>
                <span>Universities</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('specializations*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('specializations.index') }}">
                <i class="nav-icon icon-cursor"></i>
                <span>Specializations</span>
            </a>
        </li>


    </ul>
</li>


<li class="nav-item  nav-dropdown  ">
    <a class="nav-link  nav-dropdown-toggle " href="#">
        personals
    </a>
    <ul class="nav-dropdown-items">

        <li class="nav-item {{ Request::is('partners*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('partners.index') }}">
                <i class="nav-icon icon-cursor"></i>
                <span>Partners</span>
            </a>
        </li>

        <li class="nav-item {{ Request::is('ourTeams*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('ourTeams.index') }}">
                <i class="nav-icon icon-cursor"></i>
                <span>Our Teams</span>
            </a>
        </li>


    </ul>
</li>

<li class="nav-item  nav-dropdown  ">
    <a class="nav-link  nav-dropdown-toggle " href="#">
        utilities
    </a>
    <ul class="nav-dropdown-items">



<li class="nav-item {{ Request::is('galleries*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('galleries.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Galleries</span>
    </a>
</li>

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

        <li class="nav-item {{ Request::is('privacyPolicies*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('privacyPolicies.index') }}">
                <i class="nav-icon icon-cursor"></i>
                <span>Privacy Policies</span>
            </a>
        </li>

        <li class="nav-item {{ Request::is('frequentlyAskedQuestions*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('frequentlyAskedQuestions.index') }}">
                <i class="nav-icon icon-cursor"></i>
                <span>Frequently Asked Questions</span>
            </a>
        </li>

        <li class="nav-item {{ Request::is('joinAs*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('joinAs.index') }}">
                <i class="nav-icon icon-cursor"></i>
                <span>Join As</span>
            </a>
        </li>

        <li class="nav-item {{ Request::is('fsooFields*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('fsooFields.index') }}">
                <i class="nav-icon icon-cursor"></i>
                <span>Fsoo Fields</span>
            </a>
        </li>

        <li class="nav-item {{ Request::is('footers*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('footers.index') }}">
                <i class="nav-icon icon-cursor"></i>
                <span>Footers</span>
            </a>
        </li>

    </ul>
</li>

<li class="nav-item {{ Request::is('contactuses*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('contactuses.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Contact us</span>
    </a>
</li>


{{--    --}}
{{--  <li class="nav-item  nav-dropdown  ">
    <a class="nav-link  nav-dropdown-toggle " href="#">
        personals
    </a>
    <ul class="nav-dropdown-items">



    </ul>
</li>  --}}
{{--    --}}
<li class="nav-item {{ Request::is('news*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('news.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>News</span>
    </a>
</li>

<li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('users.index') !!}">
        <i class="nav-icon icon-cursor"></i>
        <span>Users</span>
    </a>
</li>
