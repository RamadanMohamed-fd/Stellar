@extends('admin.layout')
@section('main')


    <div class="row">
        <div class="col-md-10 offset-1">
            <div class="card">

                <div class="card-body">
                    <br>
                    @if(session()->has('delete'))
                        <br>

                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> {{session('delete')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
                        </div>

<br>
                    @endif
                    @if(session()->has('added'))
                        <br>

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> {{session('added')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
                        </div>

                        <br>
                    @endif

                    @if(session()->has('updated'))
                        <br>

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> {{session('updated')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
                        </div>

                        <br>
                    @endif

        <table class="table table-bordered table-striped table-hover table-condensed">
            <thead>
            <th>Blog Title</th>
            <th>Cover Photo</th>
            <th>Edit</th>
            <th>Delete</th>
            </thead>
            <tbody>
            @foreach( $bm as $bm)


            <tr>
                <td>{{$bm->blog_title}}</td>
                <td>
                    <img src="{{asset('storage/app/public/media/blog')}}/{{$bm->cover_photo}}" style="width: 100px; height: 100px; border-radius: 50%">
                </td>
                <td>
                    <a href="{{url('blog-edit')}}/{{ $bm->slug}}" class="btn btn-info btn-sm">Edit</a>
                </td>
                <td>
                    <a href="{{url('blog-delete')}}/{{ $bm->slug}}" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>

            @endforeach
            </tbody>
        </table>
                </div>
            </div>
        </div>
    </div>


@endsection
