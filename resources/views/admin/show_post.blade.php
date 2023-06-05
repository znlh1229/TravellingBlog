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
            @if(session()->has('delete_success'))
            <div class="alert alert-danger">
                {{ session()->get('delete_success') }}
            </div>
            @endif
            <h1 class="post_title">Show Post</h1>

            {{-- <div class="col-md-6 offset-3"> --}}
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Post Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Post By</th>
                            <th scope="col">Post Status</th>
                            <th scope="col">UserType</th>
                            <th scope="col">Image</th>
                            <th scope="col">Delete</th>

                        </tr>
                    </thead>
                    @php
                    $no='1';
                    @endphp
                    @foreach ($post as $posts)


                    <tbody>
                        <tr>
                            <th scope="row">{{ $no }}</th>
                            <td>{{ $posts->title}}</td>
                            <td class="description">{{ $posts->description }}</td>
                            <td>{{ $posts->name }}</td>
                            <td>{{ $posts->post_status }}</td>
                            <td>{{ $posts->usertype }}</td>
                            <td>
                                <img src="/postimage/{{ $posts->image }}" alt="" class="show_image">
                            </td>
                            <td>
                                <a href="{{ url('delete_post',$posts->id) }}" class="btn btn-danger"
                                    onclick="return confirm('Are You Sure You Want To Delete this?')">Delete</a>
                            </td>
                        </tr>

                    </tbody>

                    @php
                    $no++;
                    @endphp
                    @endforeach
                </table>
                {{--
            </div> --}}
        </div>



        @include('admin.footer')
    </div>
</body>

</html