@if ($paginator->hasPages())
<div class="pagination">
    @if ($paginator->onFirstPage())
    <a href="#" disabled>&laquo;</a>
@else
<a class="active-page" href="{{$paginator->previousPageUrl()}}">&laquo;</a>
@endif
@foreach ($elements as $element)
<a href="">{{$element}}</a>
@if (is_array($element))
@foreach ($element as $page => $url)
@if ($page == $paginator->currentPage())
<a class="active-page" href="#">{{$page}}</a>
@else
<a class="{{$url}}" href="#">{{$page}}</a>
@endif
@endforeach
@endif
@endforeach
                        
                        @if($paginator->hasMorePages())
                        <a href="{{$paginator->nextPageUrl()}}">&raquo;</a>
                        @else
                    <a href="#">&raquo;</a>
                        @endif
                        
                    </div>
@endif