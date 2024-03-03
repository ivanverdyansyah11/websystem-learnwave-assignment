<div class="sidebar">
    <a href="{{ route('dashboard.index') }}">
        <img src="{{ asset('assets/images/brand/brand-logo.svg') }}" alt="Brand Logo" width="170">
    </a>
    <div class="sidebar-link d-flex flex-column justify-content-between">
        <div class="wrapper d-flex flex-column">
            <a href="{{ route('dashboard.index') }}" class="link-item {{ Route::is('dashboard.index') ? 'active' : '' }} d-flex align-items-center">
                <div class="dashboard-icon"></div>
                <p>Dashboard</p>
            </a>
            <button type="button" class="link-item {{ Route::is('agenda*') || Route::is('module*') || Route::is('sub-module*') ? 'active' : '' }} link-item-parent d-flex align-items-center">
                <div class="agenda-icon"></div>
                <p>Agenda</p>
            </button>
            <div class="item-child d-flex flex-column {{ Route::is('agenda*') || Route::is('module*') || Route::is('sub-module*') ? 'active' : '' }}">
                <a href="{{ route('module.index') }}" class="child-item">Array</a>
                <a href="{{ route('module.index') }}" class="child-item">Record</a>
                <a href="{{ route('module.index') }}" class="child-item">Pointer</a>
                <a href="{{ route('module.index') }}" class="child-item">Linked List</a>
                <a href="{{ route('module.index') }}" class="child-item">Searching</a>
                <a href="{{ route('module.index') }}" class="child-item">Sorting</a>
                <a href="{{ route('module.index') }}" class="child-item">Stack</a>
                <a href="{{ route('module.index') }}" class="child-item">Queue</a>
                <a href="{{ route('module.index') }}" class="child-item">Tree</a>
            </div>
        </div>
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
