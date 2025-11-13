@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-center mt-4">
        <div class="inline-flex items-center gap-3">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span aria-disabled="true" class="inline-flex items-center justify-center w-10 h-10 text-gray-400 bg-gray-50 rounded-md" aria-label="Previous">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </span>
            @else
                <button wire:click="gotoPage({{ $paginator->currentPage()-1 }})" type="button" class="inline-flex items-center justify-center w-10 h-10 text-cyan-700 bg-white border border-gray-100 rounded-md shadow-sm hover:bg-cyan-50" aria-label="Previous">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
            @endif

            {{-- Pagination Elements --}}
            <ul class="inline-flex items-center gap-2">
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li aria-disabled="true"><span class="px-3 py-2 text-sm text-gray-500">{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li aria-current="page">
                                    <span class="px-3 py-2 min-w-[40px] text-sm text-center bg-cyan-700 text-white font-medium rounded-md">{{ $page }}</span>
                                </li>
                            @else
                                <li>
                                    <button wire:click="gotoPage({{ $page }})" type="button" class="px-3 py-2 min-w-[40px] text-sm text-center text-gray-700 bg-white border border-gray-100 rounded-md hover:bg-cyan-50">{{ $page }}</button>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </ul>

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <button wire:click="gotoPage({{ $paginator->currentPage()+1 }})" type="button" class="inline-flex items-center justify-center w-10 h-10 text-cyan-700 bg-white border border-gray-100 rounded-md shadow-sm hover:bg-cyan-50" aria-label="Next">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            @else
                <span aria-disabled="true" class="inline-flex items-center justify-center w-10 h-10 text-gray-400 bg-gray-50 rounded-md" aria-label="Next">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </span>
            @endif
        </div>
    </nav>
@endif
