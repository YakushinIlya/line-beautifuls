<form method="post" action="{{route('adminNewUpdate', ['id'=>$new['id']])}}" enctype="multipart/form-data">
    @csrf
    @if(!empty($new['imglink']))
        <img src="/uploads/news/{{$new['imglink']}}" class="img-thumbnail" style="height:150px !important;">
    @endif
    <div class="form-group">
        <label for="images">Изображение (желательно)</label>
        <input type="file" name="images" class="form-control-file" id="images">
    </div>
    <div class="form-group">
        <label for="head">Название страницы</label>
        <input type="text" name="head" class="form-control @error('head') is-invalid @enderror" value="{{$new['head']}}" id="head" aria-describedby="headHelp" placeholder="Введите название страницы">
    </div>
    <div class="form-group">
        <label for="body">Содержимое страницы</label>
        <textarea name="body" class="form-control" id="body" placeholder="Введите текст содержимого страницы">{{$new['body']}}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Сохранить</button>

    <hr>

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{$new['title']}}" id="title" aria-describedby="titleHelp" placeholder="Введите title заголовок">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control" id="description" rows="2" placeholder="Введите description описание">{{$new['description']}}</textarea>
    </div>
    <div class="form-group">
        <label for="keywords">Keywords</label>
        <input type="text" name="keywords" class="form-control @error('keywords') is-invalid @enderror" value="{{$new['keywords']}}" id="keywords" aria-describedby="keywordsHelp" placeholder="Введите keywords через запятую">
    </div>
</form>