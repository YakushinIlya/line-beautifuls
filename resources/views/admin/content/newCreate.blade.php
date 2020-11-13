<form method="post" action="{{route('adminNewCreate')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="images">Изображение (желательно)</label>
        <input type="file" name="images" class="form-control-file" id="images">
    </div>
    <div class="form-group">
        <label for="head">Название новости</label>
        <input type="text" name="head" class="form-control @error('head') is-invalid @enderror" value="{{old('head')}}" id="head" aria-describedby="headHelp" placeholder="Введите название новости">
    </div>
    <div class="form-group">
        <label for="body">Содержимое новости</label>
        <textarea name="body" class="form-control" id="body" placeholder="Введите текст содержимого новости">{{old('body')}}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Сохранить</button>

    <hr>

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}" id="title" aria-describedby="titleHelp" placeholder="Введите title заголовок">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control" id="description" rows="2" placeholder="Введите description описание">{{old('description')}}</textarea>
    </div>
    <div class="form-group">
        <label for="keywords">Keywords</label>
        <input type="text" name="keywords" class="form-control @error('keywords') is-invalid @enderror" value="{{old('keywords')}}" id="keywords" aria-describedby="keywordsHelp" placeholder="Введите keywords через запятую">
    </div>
</form>