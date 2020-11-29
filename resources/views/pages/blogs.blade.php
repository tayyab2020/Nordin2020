@extends("app")
@section("content")

    <!-- begin:content -->
    <div id="content">

        @if(Session::has('flash_message'))
            <div class="alert alert-success alert-box" style="text-align: center;font-size: 16px;position: fixed;top: 20%;z-index: 1000;padding-right: 35px;background-color: rgb(0 0 0);color: rgb(255 255 255);border: 0;max-width: 400px;border-radius: 0;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="position: absolute;top: 5px;right: 8px;font-size: 28px;line-height: 0.5;opacity: 0.8;font-weight: 100;text-shadow: none;color: #ffffff;">
                    <span aria-hidden="true">&times;</span></button>
                {{ Session::get('flash_message') }}
            </div>
        @endif


        <div class="container">

            @foreach($blogs as $blog)

            <div class="row">
                <div class="col-md-12">
                    <div class="post_img">

                            <h1 class="post_title" style="font-weight: 100;text-align: center;">
                                {{$blog->title}}
                            </h1>

                            <?php $date = $blog->created_at;
                            $date = date("M d, Y", strtotime($date)); ?>


                            <div class="post_meta_top" style="text-align: center;margin-bottom: 20px;">
                                <span class="post_meta_date">{{$date}}</span>
                            </div>

                            @if($blog->image)

                                <img src="{{ URL::asset('upload/blogs/'.$blog->image) }}" style="width: 100%;" alt="{{$blog->title}}">

                            @endif

                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 30px;display: flex;">
                <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12" style="margin: auto;">
                    <div class="blog_posts stander_blog_single_post">
                        <article>

                            <div class="post_content description-content">
                                {!! $blog->description !!}
                            </div>

                        </article>
                    </div>
                </div>
            </div>

                @endforeach


        </div>
    </div>
    <!-- end:content -->

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/flaticon.css') }}"/>


    <style>

        .description-content img
        {
            margin-left: 5px;
        }

        .description-content blockquote:before
        {
            content: '\f10d';
            font-family: 'FontAwesome';
            position: relative;
            left: -1em;
            top: 0;
            display: block;
            width: 20px;
            height: 20px;
            color: black;
            font-size: 10px;
        }

    </style>


@endsection
