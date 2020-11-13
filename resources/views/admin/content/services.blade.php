<a href="{{route('adminServicesCreate')}}" class="btn btn-success">Добавить услугу</a>
<hr>
<div class="card">
    <ul class="list-group list-group-flush">
        @if(isset($servicesList[0]))
            @foreach($servicesList as $service)
                <li class="list-group-item">
                    <a href="{{route('adminServicesDelete', ['id'=>$service->id])}}" style="margin-right: 20px; color: red;">
                        <i class="fa fa-window-close"></i>
                    </a>
                    <a href="{{route('adminServicesUpdate', ['id'=>$service->id])}}" style="margin-right: 50px; color: blue;">
                        <i class="fa fa-pen-alt"></i>
                    </a>
                    <a href="/service/{{$service->url}}" target="_blank">{{$service->head}}</a>
                </li>
            @endforeach
        @endif
    </ul>
</div>
