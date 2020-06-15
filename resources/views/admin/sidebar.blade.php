<div class="col-md-3">
    @foreach($laravelAdminMenus->menus as $section)
        @if($section->items)
            @if($section->section == "Resources")
            <div class="card">
                <div class="card-header">
                    {{ $section->section }}
                </div>

                <div class="card-body">
                    <ul class="nav flex-column" role="tablist">
                        @foreach($section->items as $menu)
                            @if($menu->title == "Users")
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" href="{{ url($menu->url) }}">
                                        {{ $menu->title }}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <br/>
            @endif
        @endif
    @endforeach
</div>
