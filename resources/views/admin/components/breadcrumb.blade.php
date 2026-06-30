<nav aria-label="breadcrumb" class="mb-6">
    <ol class="flex items-center gap-2 text-sm">
        <li>
            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-1.5 text-slate-600 hover:text-slate-900 transition-colors">
                <i data-lucide="layout-dashboard" class="size-4"></i>
                <span>Dashboard</span>
            </a>
        </li>
        @foreach (($items ?? []) as $label => $url)
            <li class="flex items-center gap-2">
                <i data-lucide="chevron-right" class="size-4 text-slate-400"></i>
                @if ($url)
                    <a href="{{ $url }}" class="text-slate-600 hover:text-slate-900 transition-colors">{{ $label }}</a>
                @else
                    <span class="font-semibold text-slate-900">{{ $label }}</span>
                @endif
            </li>
        @endforeach
    </ol>
</nav>