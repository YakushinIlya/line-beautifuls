<form method="post" action="{{route('adminNewUpdate', ['id'=>$service['id']])}}" enctype="multipart/form-data">
    @csrf
    @if(!empty($service['imglink']))
        <img src="/uploads/services/{{$service['imglink']}}" class="img-thumbnail" style="height:150px !important;">
    @endif
    <div class="form-group">
        <label for="images">Изображение (желательно)</label>
        <input type="file" name="images" class="form-control-file" id="images">
    </div>
    <div class="form-group">
        <label for="head">Название услуги</label>
        <input type="text" name="head" class="form-control @error('head') is-invalid @enderror" value="{{$service['head']}}" id="head" aria-describedby="headHelp" placeholder="Введите название услуги">
    </div>
    <div class="form-group">
        <label for="body">Содержимое страницы</label>
        <textarea name="body" class="form-control" id="body" placeholder="Введите текст содержимого страницы">{{$service['body']}}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Сохранить</button>

    <hr>

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{$service['title']}}" id="title" aria-describedby="titleHelp" placeholder="Введите title заголовок">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control" id="description" rows="2" placeholder="Введите description описание">{{$service['description']}}</textarea>
    </div>
    <div class="form-group">
        <label for="keywords">Keywords</label>
        <input type="text" name="keywords" class="form-control @error('keywords') is-invalid @enderror" value="{{$service['keywords']}}" id="keywords" aria-describedby="keywordsHelp" placeholder="Введите keywords через запятую">
    </div>
</form>