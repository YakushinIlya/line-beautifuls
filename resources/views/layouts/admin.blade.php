<!doctype html>
<html lang="ru" class="h-100">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/frontend/media/css/bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/media/css/all.min.css">
    <link rel="stylesheet" href="/backend/media/css/dashboard.css">
    <link rel="stylesheet" href="/backend/media/css/style.css">
    <script src="https://cdn.tiny.cloud/1/35fwwbnhirflx3s8m4jg0atfen3af8rg5u6oa6u126lalwut/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script type="text/javascript">
        function example_image_upload_handler (blobInfo, success, failure, progress) {
            var xhr, formData;

            xhr = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST', '/api/v1/uploads');

            xhr.upload.onprogress = function (e) {
                progress(e.loaded / e.total * 100);
            };

            xhr.onload = function() {
                var json;

                if (xhr.status === 403) {
                    failure('HTTP Error: ' + xhr.status, { remove: true });
                    return;
                }

                if (xhr.status < 200 || xhr.status >= 300) {
                    failure('HTTP Error: ' + xhr.status);
                    return;
                }

                json = JSON.parse(xhr.responseText);

                if (!json || typeof json.location != 'string') {
                    failure('Invalid JSON: ' + xhr.responseText);
                    return;
                }

                success(json.location);
            };

            xhr.onerror = function () {
                failure('Image upload failed due to a XHR Transport error. Code: ' + xhr.status);
            };

            formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());

            xhr.send(formData);
        };

        tinyMCE.init({
            // General options
            mode : "exact",
            elements: 'body',
            language: 'ru',
            plugins: [
                "image","code","autoresize","media","link","imagetools"],
            default_link_target: "_blank",
            images_upload_handler: example_image_upload_handler,
            automatic_uploads: true,
            content_css: '/backend/media/css/tinymce.css',
            body_id: 'new-journal-editor',
            height : "300",
            toolbar1: "insertfile undo | redo | styleselect | bold | italic | alignleft | aligncenter | alignright | alignjustify | bullist | numlist | outdent | indent | link | image | media | code",
            toolbar2: "",
            menubar : false,
            statusbar : false,
            convert_urls: false,
        });
    </script>
</head>
<body class="d-flex flex-column h-100">

<div class="d-flex flex-column h-100" id="app">

    <nav class="navbar navbar-dark sticky-top bg-dark p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">{{config('app.name')}}</a>
        <ul class="navbar-nav px-3">
            <li class="nav-item">
                <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out-alt"></i> {{__('Выход')}}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            @yield('sidebar')
            @yield('content')
        </div>
    </div>

@yield('footer')
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="/frontend/media/js/bootstrap.min.js"></script>
<script src="/frontend/media/js/bootstrap.bundle.min.js"></script>
<script src="/frontend/media/js/all.min.js"></script>

<script type="text/javascript">
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>

</body>
</html>