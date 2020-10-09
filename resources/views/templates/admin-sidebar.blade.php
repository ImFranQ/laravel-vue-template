<div class="list-group list-group-flush">
    <a class="side-link list-group-item bg-transparent border-0 text-decoration-none justify-content-between" href="">
        <i class="fas fa-home list-item-icon mr-3"></i>
        <span class="grow-1 menu-label">{{ __('Dashboard') }}</span>
        {{-- <span class="ext-right badge badge-primary badge-pill">
            <i class="fas fa-bell mr-2"></i>2
        </span> --}}
    </a>
    <a class="side-link list-group-item bg-transparent border-0 text-decoration-none justify-content-between text-danger" href="#"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
    >
        <i class="fas fa-power-off fa-md list-item-icon mr-3"></i> 
        <span class="grow-1 menu-label">{{ __('Sign out') }}</span>
    </a>
</div>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>