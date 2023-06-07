<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('home.css')

</head>

<body>

    @include('home.header')
    <section id="" class="text-center mt-5">
        <h6 class="display-3 text-white">User Post Edit</h6>
        <span class="lead " style="color: dark">Open your door to the world!</span><br>
        <span class="lead "
            style="color: dark;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">“Experience our
            World with the ones you love”</span>

    </section>
    <div class="register-form my-5">

        <div class="container">
            <div class="row">
                <div class="col-md-6 d-none d-md-block ">
                    <img src="https://tourisminmyanmar.com.mm/wp-content/uploads/2020/03/Temples-in-Bagan-1024x682.jpg"
                        alt="">
                </div>
                <div class="col-md-6 bg-dark">
                    <div class="mt-4">
                        @if (session()->has('success_update'))
                            <div class="alert alert-success">
                                {{ session()->get('success_update') }}
                            </div>
                        @endif
                    </div>
                    <form action="{{ url('my_post_update', $mypost_show->id) }}" class="p-4 text-white" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name"> Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $mypost_show->title }}">

                        </div>
                        <div class="form-group">
                            <label for="email"> Description</label>
                            <textarea type="text" name="description" cols="30" rows="10" placeholder="Enter Description"
                                class="form-control"> {{ $mypost_show->description }}</textarea>

                        </div>

                        <div class="form-group">
                            <label for="pwd">Old Images</label>
                            <img src="/postimage/{{ $mypost_show->image }}" alt="" width="130px">

                        </div>
                        <div class="form-group">
                            <label for="pwd"> Images</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">

                        </div>
                        <button type="submit" class="btn btn-warning mb-3 mt-3 float-right">Edit Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('home.footer')
