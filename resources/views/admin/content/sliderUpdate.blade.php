<div class="alert alert-secondary" role="alert">
    Перед загрузкой изображения убедитесь что оно имеет размер не менее 1200х400 пикселей. В противном случае изображение будет помещено на белый фон.
</div>

@if(!empty($slider[0]))
    @foreach($slider as $slide)
        <form method="post" action="{{route('adminSliderUpdate')}}" enctype="multipart/form-data"
              style="padding:10px; margin-top: 10px; background: #EEE; border: 1px solid #CCC;">
            @csrf
            <input type="hidden" name="ids" value="{{$slide->id}}">
            <img src="/uploads/slider/{{$slide->imglink}}" class="img-thumbnail" style="height: 150px;">
            <div class="form-group">
                <label for="head">Заголовок</label>
                <input type="text" name="alttext" class="form-control" id="head" value="{{$slide->alttext}}">
            </div>
            <div class="form-group">
                <label for="images">Изображение</label>
                <input type="file" name="images" class="form-control-file" id="images">
            </div>
            <button type="submit" class="btn btn-primary">Сохранить</button>
            <a class="btn btn-danger" href="{{route('adminSliderDelete', ['id'=>$slide->id])}}">Удалить</a>
        </form>
    @endforeach
@endif

<h3 class="h4 mt-5">Добавить новый слайд</h3>
<form method="post" action="{{route('adminSliderUpdate')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="head">Заголовок</label>
        <input type="text" name="alttext" class="form-control" id="head">
    </div>
    <div class="form-group">
        <label for="images">Изображение</label>
        <input type="file" name="images" class="form-control-file" id="images">
    </div>
    <button type="submit" class="btn btn-primary">Добавить слайд и сохранить</button>
</form>

<div class="mt-5"></div>