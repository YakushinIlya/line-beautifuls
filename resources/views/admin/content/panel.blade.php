@if(date('H')<=10)
    <h2 class="h5">Доброе утро, {{$user->name}}!</h2>
    <p>{{$randAsk}}</p>
@elseif(date('H')>10 && date('H')<=18)
    <h2 class="h5">Добрый день, {{$user->name}}!</h2>
    <p>{{$randAsk}}</p>
@elseif(date('H')>18 && date('H')<23)
    <h2 class="h5">Доброй вечер, {{$user->name}}!</h2>
    <p>{{$randAsk}}</p>
@elseif(date('H')>18 && date('H')<04)
    <h2 class="h5">Доброй ночи, {{$user->name}}!</h2>
    <p>{{$randAsk}}</p>
@endif