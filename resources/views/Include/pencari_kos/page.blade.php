<div class="row">
            <div class="col-sm-12">
@if ($paginator->hasPages())
    <ul class="pagination justify-content-end">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled page-item"><span><a class='page-link' href="{{ $paginator->previousPageUrl() }}" rel="prev">{{ __('Prev') }}</a></span></li>
        @else
            <li class='page-item'><a class='page-link' href="{{ $paginator->previousPageUrl() }}" rel="prev">{{ __('Prev') }}</a></li>
        @endif
        
        
        
        {{ "Page " . $paginator->currentPage() . "  of  " . $paginator->lastPage() }}
       
        
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class='page-item'><a class='page-link' href="{{ $paginator->nextPageUrl() }}" rel="next">{{ __('Next') }}</a></li>
        @else
            <li class="disabled page-item"><a class='page-link' href="{{ $paginator->nextPageUrl() }}" rel="next">{{ __('Next') }}</a></li>
        @endif
    </ul>
@endif
</div>
        </div>