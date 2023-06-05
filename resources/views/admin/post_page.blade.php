<!DOCTYPE html>
<html>

<head>
    @include('admin.admin_css')
</head>

<body>
    <header class="header">
        @include('admin.header')
    </header>
    <div class="d-flex align-items-stretch">
        <nav id="sidebar">
            @include('admin.sidebar')
        </nav>


        <div class="page-content">
            @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
            @endif
            <h1 class="post_title">Add Post</h1>
            <div class="col-md-6 offset-3">
                <form action="{{ url('add_post') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="">Title</label>
                        <input type="text" name="title" placeholder="Enter title" class="form-control">
                        @error('title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="">Description</label>
                        <input type="text" name="description" placeholder="Enter Description" class="form-control">
                        @error('description')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="">Image</label>
                        <input type="file" name="image" class="form-control bg-white ">
                        @error('image')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <input type="submit" class="btn btn-danger">
                    </div>
                </form>
            </div>
        </div>


        @include('admin.footer')
    </div>
</body>

</html