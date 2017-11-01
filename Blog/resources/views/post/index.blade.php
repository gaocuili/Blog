@extends("layout.main")

@section('content')
    <div class="col-sm-8 blog-main">
        @include("post.carousel")
        <div style="height: 20px;">
        </div>
        <div>


            {{--$post->id--}}
            @foreach ($posts as $post)
                <div class="blog-post">
                    <h2><a href="/posts/{{$post->id}}" >{{$post->title}}</a></h2>
                    {{--<p>{{$post->id}}</p>--}}
                    <p class="blog-post-meta">{{$post->created_at}}by <a href="#">11111</a></p>
                    <p>{{str_limit($post->content,3,"...")}}</p>
                    <p class="blog-post-meta">赞 0  | 评论 0</p>
                </div>
            @endforeach

            {{ $posts->links() }}
        </div><!-- /.blog-main -->
    </div>

    @endsection