<ul class="nav nav-pills mt-3 mb-5">
    <li class="nav-item ml-3">
        <a href="{{ route('get-admin-page') }}" class="nav-link">Admin Home</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('get-res-admin-page') }}" id="resAdminLink" class="nav-link">Residential Applications</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('get-comm-admin-page') }}" id="commAdminLink" class="nav-link">Commercial Applications</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('get-res-job-admin') }}" id="resJobAdminLink" class="nav-link">Residential Job Admin</a>
    </li>
    <script src="{{ asset('jscript/activeNavLink.js') }}"></script>
</ul>
