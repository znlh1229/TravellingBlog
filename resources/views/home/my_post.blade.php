<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
</head>

<body>
    <!-- header section start -->
    @include('home.header')


    <div class="services_section layout_padding ">
        <div class="container">
            <div class="text-danger">
                @if (session()->has('delete_my_post'))
                    <div class="alert alert-success">
                        {{ session()->get('delete_my_post') }}
                    </div>
                @endif
            </div>
            <h1 class="services_taital text-white">My Post</h1>
            <p class="services_text">
                Leading Worldwide Online Hotel Wholesaler with over 200,000 hotels worldwide. We are only proud
                exclusive partner in Myanmar.
            </p>
            <div class="services_section_2 ">
                <div class="row ">

                    @foreach ($data as $datas)
                        <div class="card " style="width: 16rem; margin:30px">
                            <img class="card-img-top" src="/postimage/{{ $datas->image }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title" style="font-size:20px">{{ $datas->title }}</h4>
                                <span class="card-title" style="font-size:15px">Post By : {{ $datas->name }}</span>

                                <br>
                                <span class="card-title">Date : {{ $datas->created_at->diffForHumans() }}</span>
                                <br>
                                <span class="card-text">Lorem ipsum dolor sit amet consec adipisicing elit. Quasi,
                                    et!
                                </span> <br> <br>
                                <a href="{{ url('post_detail', $datas->id) }}" class="btn btn-primary"> Detail</a>
                                <a href="{{ url('my_post_edit', $datas->id) }}" class="btn btn-success">
                                    Edit
                                </a>
                                <a href="{{ url('my_post_delete', $datas->id) }}" class="btn btn-danger"
                                    onclick="return confirm('Are You Sure You Want To Delete This')">
                                    Delete
                                </a>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</body>

</html>
