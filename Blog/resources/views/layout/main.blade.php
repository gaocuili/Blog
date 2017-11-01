
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">

    <meta name="csrf-token" content="MESUY3topeHgvFqsy9EcM916UWQq6khiGHM91wHy">


    <title>laravel for blog</title>

    <link href="/static/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="/css/blog.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/wangEditor-1.3.12.css">


</head>

<body>

@include('layout.nav')

<div class="container">

    <div class="blog-header">
    </div>

    <div class="row">
       @yield("content")
        @include("layout.sidebar")
    </div><!-- /.row -->
</div><!-- /.container -->

@include("layout.footer")
@yield("pagejs")

<script src="/static/jquery-3.2.1.js"></script>
<script src="/static/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/wangEditor-1.3.12.js"></script>
<script src="/js/ylaravel.js"></script>

</body>
</html>
