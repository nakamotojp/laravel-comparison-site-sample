<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="{{ $viewport }}"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ $seo['title'] }}</title>
<meta name="description" content="{{ $seo['description'] }}"/>
<meta name="keywords" content="{{ $seo['keywords'] }}"/>
<meta property="og:title" content="{{ $seo['title'] }}">
<meta property="og:type" content="{{ $ogp_type }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:site_name" content="{{ $seo['title'] }}">
<meta property="og:description" content="{{ $seo['description'] }}">
<meta property="og:locale" content="ja_JP">
@if (file_exists(public_path('/img/ogp.png')))
    <meta property="og:image" content="{{ url('/img/ogp.png') }}">
@endif
<link rel="canonical" href="{{ url()->current() }}">
@if (file_exists(public_path('/img/favicon.ico')))
    <link rel="shortcut icon" href="/img/favicon.ico">
@endif
<link rel="stylesheet" href="/css/default/{{ Route::currentRouteName() }}.css">
</head>
<body>
    <div id="vgContainer">
        @yield('contents')
    </div>
    <script type="text/javascript" src="/js/app.js"></script>
</body>
</html>
