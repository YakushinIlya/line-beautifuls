<form method="post" action="{{route('adminPageCreate')}}">
    <div class="form-group">
        <label for="head">Название страницы</label>
        <input type="text" class="form-control @error('head') is-invalid @enderror" id="head" aria-describedby="headHelp" placeholder="Введите название страницы">
    </div>
    <div class="form-group">
        <label for="body">Содержимое страницы</label>
        <textarea name="body" class="form-control" id="body" rows="5" placeholder="Введите текст содержимого страницы"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Сохранить</button>

    <hr>

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="titleHelp" placeholder="Введите title заголовок">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control" id="description" rows="2" placeholder="Введите description описание"></textarea>
    </div>
    <div class="form-group">
        <label for="keywords">Keywords</label>
        <input type="text" class="form-control @error('keywords') is-invalid @enderror" id="keywords" aria-describedby="keywordsHelp" placeholder="Введите keywords через запятую">
    </div>
</form>