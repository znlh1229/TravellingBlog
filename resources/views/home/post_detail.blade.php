<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('home.css')


    <style>
        #header {
        background:
        url(https://images.unsplash.com/photo-1415795854641-f4a487a0fdc8?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80) center
        center / cover no-repeat ;
        }
    </style>
</head>

<body>
    <!-- header section start -->
    {{-- @include('home.header') --}}
    <!-- banner section start -->

    <!-- banner section end -->

{{--

    <section id="header" class="jumbotron text-center">
        <h1 class="display-3">{{ $post_detail->title }}</h1>
        <span class="lead">Post by : {{ $post_detail->usertype }}</span> &nbsp;&nbsp;&nbsp;&nbsp;
        <span class="lead">Date    : {{ $post_detail->created_at->diffForHumans() }}</span>
<div class="my-3 mx-3">
    <img src="/postimage/{{ $post_detail->image }}" alt="">
    <p>{{ $post_detail->description }}</p>
</div>
    </section> --}}

<nav class="bg-dark navbar-dark">
    <div class="container">
        <a href="" class="navbar-brand"><i class="fas fa-tree mr-2"></i>{{$post_detail->title  }}</a>
    </div>

</nav>
<section id="header" class="jumbotron text-center">
   <h1 class="display-3">{{ $post_detail->title }}</h1>
    <span class="lead " style="color: white">Post by : {{ $post_detail->usertype }}</span> &nbsp;&nbsp;&nbsp;&nbsp;
    <span class="lead" style="color: white">Date : {{ $post_detail->created_at->diffForHumans() }}</span>

</section>

<div class="col-md-4 offset-4">

    <img src="/postimage/{{ $post_detail->image }}" alt="" class="">
    <p>{{ $post_detail->description }}</p>
</div>


    @include('home.footer')
</body>

</html>
