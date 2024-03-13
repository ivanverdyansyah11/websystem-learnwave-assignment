<div class="sidebar">
    <a href="{{ route('homepage.show', 1) }}">
        <img src="{{ asset('assets/images/brand/brand-logo.svg') }}" alt="Brand Logo" width="170">
    </a>
    <div class="sidebar-link d-flex flex-column justify-content-between">
        <a href="{{ route('homepage.show', 1) }}" class="link-item link-item-parent active d-flex align-items-center">
            <p>Array</p>
        </a>
        <div class="item-child d-flex flex-column active">
            <a href="{{ route('homepage.show', 1) }}" class="child-item active">Array 1 Dimensional</a>
            <a href="{{ route('homepage.show', 1) }}" class="child-item">Multidimensional Array</a>
        </div>
        <a href="{{ route('homepage.show', 1) }}" class="link-item d-flex align-items-center">
            <p>Record</p>
        </a>
        <a href="{{ route('homepage.show', 1) }}" class="link-item d-flex align-items-center">
            <p>Pointer</p>
        </a>
        <a href="{{ route('homepage.show', 1) }}" class="link-item d-flex align-items-center">
            <p>Linked List</p>
        </a>
        <a href="{{ route('homepage.show', 1) }}" class="link-item d-flex align-items-center">
            <p>Searching</p>
        </a>
        <a href="{{ route('homepage.show', 1) }}" class="link-item d-flex align-items-center">
            <p>Sorting</p>
        </a>
        <a href="{{ route('homepage.show', 1) }}" class="link-item d-flex align-items-center">
            <p>Stack</p>
        </a>
        <a href="{{ route('homepage.show', 1) }}" class="link-item d-flex align-items-center">
            <p>Queue</p>
        </a>
        <a href="{{ route('homepage.show', 1) }}" class="link-item d-flex align-items-center">
            <p>Tree</p>
        </a>
        <a href="{{ route('homepage.index') }}" class="link-item d-flex align-items-center mt-4">
            <p>Back to Page</p>
        </a>
    </div>
</div>

@push('js')
    <script>
        $('.hamburger').on('click', function() {
            $('.sidebar').toggleClass('show')
        })

        // $('.link-item-parent').on('click', function() {
        //     $('.item-child').toggleClass('active')
        // })
    </script>
@endpush
