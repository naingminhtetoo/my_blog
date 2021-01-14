<div class="p-2 pl-3 sidebar-menu-item d-flex justify-content-between {{ $className }}">
    <a href="{{ $link }}" class="font-weight-bold text-dark">
        {{ $icon }}
        <span class="m-0">{{ $name }}</span>
    </a>
    @if(isset($total))
    {{ $total }}
    @endif
</div>
