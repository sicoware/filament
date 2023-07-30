<div class="fi-global-search flex items-center gap-4">
    {{ \Filament\Support\Facades\FilamentView::renderHook('panels::global-search.start') }}

    <div class="relative">
        <x-filament-panels::global-search.field />

        @if ($results !== null)
            <x-filament-panels::global-search.results-container
                :results="$results"
            />
        @endif
    </div>

    {{ \Filament\Support\Facades\FilamentView::renderHook('panels::global-search.end') }}
</div>
