<div class="sidebar">
    <a href="{{ route('dashboard.index') }}">
        <img src="{{ asset('assets/images/brand/brand-logo.svg') }}" alt="Brand Logo" width="170">
    </a>
    <div class="sidebar-link d-flex flex-column justify-content-between">
        <a href="{{ route('dashboard.index') }}" class="link-item {{ Route::is('dashboard.index') ? 'active' : '' }} d-flex align-items-center">
            <div class="dashboard-icon"></div>
            <p>Dashboard</p>
        </a>
        <a href="{{ route('agenda.index') }}" class="link-item {{ Route::is('agenda*') || Route::is('module*') || Route::is('sub-module*') ? 'active' : '' }} d-flex align-items-center">
            <div class="agenda-icon"></div>
            <p>Agenda</p>
        </a>
        <form class="w-100">
            <button type="button" class="link-item d-flex align-items-center">
                <div class="logout-icon"></div>
                <p>Logout</p>
            </button>
        </form>
    </div>
</div>

@push('js')
    <script>
        $('.hamburger').on('click', function() {
            $('.sidebar').toggleClass('show')
        })

        $('.link-item-parent').on('click', function() {
            $('.item-child').toggleClass('active')
        })
    </script>
@endpush
