<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
</head>

<body>
    <!-- header section start -->
    @include('home.header')


    <div class="services_section layout_padding">
        <div class="container">
            <h1 class="services_taital text-white">My Post</h1>
            <p class="services_text">
                Leading Worldwide Online Hotel Wholesaler with over 200,000 hotels worldwide. We are only proud
                exclusive partner in Myanmar.
            </p>
            <div class="services_section_2 m-6 ">
                <div class="row ">

                    @foreach ($data as $datas)
                        <div class="card " style="width: 16rem;padding:10px">
                            <img class="card-img-top" src="/postimage/{{ $datas->image }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">{{ $datas->title }}</h4>
                                <span class="card-title">Post By : {{ $datas->name }}</span>

                                <br>
                                <span class="card-title">Date : {{ $datas->created_at->diffForHumans() }}</span>
                                <br>
                                <span class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi,
                                    et!
                                </span> <br>
                                <a href="{{ url('post_detail', $datas->id) }}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>
        </div>
    </div>

</body>

</html>
