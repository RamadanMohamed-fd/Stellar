@extends('admin.layout')
@section('main')


    <div class="row">
        <div class="col-md-10 offset-1">
            <div class="card">
                <div class="card-header bg-danger text-light-danger">Edit Blog</div>
                <div class="card-body">
                    <form action="{{url('blog-update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="hidden_slug" value="{{$bm->slug}}">
                        <div class="form-group">
                            <label>Blog Title</label>
                            <input type="text" value="{{$bm->blog_title}}" class="form-control" name="blog_title" placeholder="Blog Title">
                        </div>
                        @error('blog_title')
                        <div class="text-danger" >
                            <b>{{$message}}</b>
                        </div>
                        @enderror
                        <br>

                        <div class="form-group">
                            <label>Cover Photo</label>
                            <input type="file" class="form-control" name="cover_photo">
                        </div>
                        <img src="{{asset('storage/app/public/media/blog')}}/{{$bm->cover_photo}}" style="width: 100px; height: 100px; border-radius: 50%">
                        @error('cover_photo')
                        <div class="text-danger" >
                            <b>{{$message}}</b>
                        </div>
                        @enderror
                        <br>

                        <div class="form-group">
                            <label>Blog Content</label>
                            <textarea id="summernote" name="blog_content">{{$bm->blog_content}}</textarea>
                        </div>
                        @error('blog_content')
                        <div class="text-danger" >
                            <b>{{$message}}</b>
                        </div>
                        @enderror
                        <br>
                        <input type="submit" class="btn btn-primary" name="submit" value="Update Blog">
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
