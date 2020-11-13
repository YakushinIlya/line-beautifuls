<a href="{{route('adminNewCreate')}}" class="btn btn-success">Добавить новость</a>
<hr>
<div class="card">
    <ul class="list-group list-group-flush">
        @if(isset($newsList[0]))
            @foreach($newsList as $new)
                <li class="list-group-item">
                    <a href="{{route('adminNewDelete', ['id'=>$new->id])}}" style="margin-right: 20px; color: red;">
                        <i class="fa fa-window-close"></i>
                    </a>
                    <a href="{{route('adminNewUpdate', ['id'=>$new->id])}}" style="margin-right: 50px; color: blue;">
                        <i class="fa fa-pen-alt"></i>
                    </a>
                    <a href="/new/{{$new->url}}" target="_blank">{{$new->head}}</a>
                </li>
            @endforeach
        @endif
    </ul>
</div>
