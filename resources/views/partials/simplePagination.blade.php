@if ($paginator->hasPages())
    <div class="join grid grid-cols-10">

            @if ($paginator->onFirstPage())
        <a class="join-item btn btn-disabled" aria-disabled="true" aria-label="@lang('simplePagination.previous')">&lsaquo;</a>

            @else
        <a href="{{ $paginator->previousPageUrl() }}" class="join-item btn btn-outline" rel="prev" aria-label="@lang('simplePagination.previous')">&lsaquo;</a>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="join-item btn btn-outline" rel="next" aria-label="@lang('simplePagination.next')" >&rsaquo;</a>

            @else
        <a  class="join-item btn btn-disabled" aria-disabled="true" aria-label="@lang('simplePagination.next')" >&rsaquo;</a>


            @endif
    </div>
@endif
