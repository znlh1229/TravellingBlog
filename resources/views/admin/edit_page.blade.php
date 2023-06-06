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
            @if(session()->has('success_update'))
            <div class="alert alert-success">
                {{ session()->get('success_update') }}
            </div>
            @endif
            <h1 class="post_title">Edit Post</h1>
            <div class="col-md-6 offset-3">
                <form action="{{ url('update_post',$edit->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="">Title</label>
                        <input type="text" name="title" placeholder="Enter title" class="form-control"
                            value="{{ $edit->title }}">
                        @error('title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="">Description</label>
                        {{-- <input type="text" name="description" placeholder="Enter Description" class="form-control">
                        --}}
                        <textarea name="description" id="" cols="30" rows="10"
                            class="form-control bg-white">{{ $edit->description }}</textarea>
                        @error('description')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="">Old Image</label>
                        <img src="/postimage/{{ $edit->image }}" alt="" width="220px">
                    </div>

                    <div>
                        <label for="">Update Image</label>
                        <input type="file" name="image" class="bg-white form-control">
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