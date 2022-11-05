<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" translate="no">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google" content="notranslate">

    <title>Scaffolding</title>
</head>
<body id="bm__body">

@include("project-scaffolding::components.navbar")

<div class="container-fluid">
    <div class="row">
        @include("project-scaffolding-management::components.sidebar")

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 my-sm-3 my-2 position-relative" id="bm__main">
            <div class="d-flex align-items-center" id="bm__heading">
                @yield("heading")
            </div>

            <hr />

            @include("project-scaffolding-management::components.status")

            @yield("content")
        </main>
    </div>
</div>

</body>
</html>
