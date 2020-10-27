<a href="{{route('adminPageCreate')}}" class="btn btn-success">Добавить страницу</a>
<hr>
<div class="card">
    <ul class="list-group list-group-flush">
        @if(isset($pagesList[0]))
            @foreach($pagesList as $page)
                <li class="list-group-item">
                    <a href="{{route('adminPageDelete', ['id'=>$page->id])}}" style="margin-right: 20px; color: red;">
                        <i class="fa fa-window-close"></i>
                    </a>
                    <a href="{{route('adminPageUpdate', ['id'=>$page->id])}}" style="margin-right: 50px; color: blue;">
                        <i class="fa fa-pen-alt"></i>
                    </a>
                    <a href="/{{$page->url}}" target="_blank">{{$page->head}}</a>
                </li>
            @endforeach
        @endif
    </ul>
</div>
