<!DOCTYPE html>
<html>

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
            @if (session()->has('delete_success'))
                <div class="alert alert-danger">
                    {{ session()->get('delete_success') }}
                </div>
            @endif
            @if (session()->has('accept'))
                <div class="alert alert-success">
                    {{ session()->get('accept') }}
                </div>
            @endif

            <h1 class="post_title">Show Post</h1>

            {{-- <div class="col-md-6 offset-3"> --}}
            <table class="table table-striped table-dark">
                <thead>
                    <tr style="background:#B9B9B9">
                        <th scope="col">#</th>
                        <th scope="col">Post Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Post By</th>
                        <th scope="col">Post Status</th>
                        <th scope="col">UserType</th>
                        <th scope="col">Image</th>
                        <th scope="col">Accept</th>
                        <th scope="col">Reject</th>


                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                @php
                    $no = '1';
                @endphp
                @foreach ($post as $posts)
                    <tbody>
                        <tr>
                            <th scope="row">{{ $no }}</th>
                            <td>{{ $posts->title }}</td>
                            <td class="description">{{ $posts->description }}</td>
                            <td>{{ $posts->name }}</td>
                            <td>{{ $posts->post_status }}</td>
                            <td>{{ $posts->usertype }}</td>
                            <td>
                                <img src="/postimage/{{ $posts->image }}" alt="" class="show_image">
                            </td>
                            <td>
                                <a href="{{ url('accept_post', $posts->id) }}" class="btn btn-success ">Accept</a>


                            </td>
                            <td><a href="{{ url('reject_post', $posts->id) }}" class="btn btn-danger text-center"
                                    onclick="return confirm('Are You Sure You Want To Reject Post ?')">
                                    Reject
                                </a>
                            </td>
                            <td>
                                <a href="{{ url('edit_post', $posts->id) }}" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                                <a href="{{ url('delete_post', $posts->id) }}" class="btn btn-danger"
                                    onclick="return confirm('Are You Sure You Want To Delete This ?')">Delete</a>
                            </td>

                        </tr>
                    </tbody>
                    @php
                        $no++;
                    @endphp
                @endforeach
            </table>
        </div>



        @include('admin.footer')

    </div>
</body>

</html
