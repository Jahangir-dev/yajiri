                        @if ($paginator->hasPages())
                        <nav aria-label="Page navigation example">
                                    <ul class="pagination"
                                        style="justify-content: space-between;width: 22rem;margin: auto;">
                                         @if ($paginator->onFirstPage())

                                       <!--  <li class="disabled page-item"><a class="page-link" id="pagination-num"
                                                href="#">&rsaquo;</a>
                                        </li> -->

                                         @else
                                        <li class="page-item"><a class="page-link" id="pagination-num"
                                                href="{{ $paginator->previousPageUrl() }}"> < </a>
                                        </li>

                                         @endif

                                             @foreach ($elements as $element)
                                            {{-- "Three Dots" Separator --}}
                                            @if (is_string($element))
                                                 <li class="disabled page-item"><a class="page-link" id="pagination-num"
                                                        href="#">{{ $element }}</a>
                                                </li>
                                            @endif

                                            {{-- Array Of Links --}}
                                            @if (is_array($element))
                                                @foreach ($element as $page => $url)
                                                    @if ($page == $paginator->currentPage())
                                                         <li class="page-item"><a class="page-link" id="pagination-num"
                                                                href="{{ $url }}"> {{$page}} </a>
                                                        </li>
                                                    @else
                                                         <li class="page-item"><a class="page-link" id="pagination-num"
                                                                href="{{ $url }}"> {{$page}} </a>
                                                        </li>                                                        
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach      


                                        @if ($paginator->hasMorePages())
                                           

                                            <li class="page-item"><a class="page-link" id="pagination-num"
                                                                href="{{ $paginator->nextPageUrl() }}"> &rsaquo; </a>
                                                        </li>
                                        @else

                                             <li class="disabled page-item"><a class="page-link" id="pagination-num"
                                                                href="{{ $paginator->nextPageUrl() }}"> &rsaquo; </a>
                                                        </li>

                                        @endif                                   

                                        

                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next" style="border:none;">
                                                <span aria-hidden="true">
                                                    <img src="{{asset('theme/icons/ic_keyboard_arrow_right_-1.png')}}"
                                                        style="width:0.5rem;">
                                                    <img src="{{asset('theme/icons/ic_keyboard_arrow_right_-1.png')}}"
                                                        style="width:0.5rem;">
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                           @endif     

