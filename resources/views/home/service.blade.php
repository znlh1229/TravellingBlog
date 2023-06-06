{{-- <div class="services_section layout_padding">
    <div class="container">
        <h1 class="services_taital">Services </h1>
        <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority
            have suffered alteration</p>
        <div class="services_section_2">
            <div class="row">
                @foreach ($post as $posts)
                <div class="col-md-4 my-2">
                    <div><img src="/postimage/{{ $posts->image }}" class="services_img"></div>
                </div>
                <p>{{ $posts->title }}</p>
                <p>Post By : {{ $posts->name }}</p>
                <div class="btn_main"><a href="#">Rafting</a></div>

                @endforeach

            </div>




            {!! $post->withQueryString()->links("pagination::bootstrap-5") !!}

        </div>
    </div>

</div>
</div> --}}

<!-- services section start -->
<div class="services_section layout_padding">
    <div class="container">
        <h1 class="services_taital">Services</h1>
        <p class="services_text">

        </p>
        <div class="services_section_2">
            <div class="row">
                @foreach ($post as $posts)
                <div class="col-md-4 mt-3">
                    <div>
                        <img src="/postimage/{{ $posts->image }}" class="services_img" />
                    </div>
                    <span>{{ $posts->title }}</span> &nbsp;&nbsp;&nbsp;
                    <span>Post By : {{ $posts->name }}</span> <br><br>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem numquam itaque ea culpa sed
                        mollitia illo deserunt odio incidunt unde.....</span>
                    <div class="btn_main"><a href="{{ url('post_detail',$posts->id) }}">Read More</a></div>
                </div>
                @endforeach
            </div>
            {{-- <div style="margin-top:30px">
                {!! $post->withQueryString()->links("pagination::bootstrap-5") !!}
            </div> --}}
        </div>
    </div>
</div>
