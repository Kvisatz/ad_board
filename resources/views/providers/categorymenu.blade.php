<div class="navigation-menu dropdown bl-inl al-mid">
    <div data-toggle="dropdown" class="btn-nav point a-hov sp-now s15">Категории</div>
    <div class="dropdown-menu lihover">
        <ul>
            @foreach($categories as $category)
                
                @if($category->parent_id == null)
                    <li class="dropdown dropdown-hover dropdown-submenu">
                        <a href="{{ url('/category', [$category->id]) }}" class="sp-now">
                            <img src="/assets/images/cat/{{ $category->img }}" alt="{{ $category->name }}">
                            {{ $category->name }}
                        </a>

                        <ul class="dropdown-menu hidden-xs">
                            @foreach($category->supcategories as $supcategory)
                                <li>
                                    <a class="sp-now" href="https://universal.elite-board.org/Avtotransport/sale/">
                                        {{ $supcategory->name }}
                                        <span class="cat-count b-f c-7">9</span>
                                    </a>
                                </li>
                            @endforeach
                            
                        </ul>
                    </li>
                @endif   
            @endforeach
        </ul>
    </div>
</div>