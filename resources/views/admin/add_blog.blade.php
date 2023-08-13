@extends('admin.layout')
@section('main')


    <div class="row">
        <div class="col-md-10 offset-1">
            <div class="card">
                <div class="card-header bg-danger text-light-danger">Add New Blog</div>
                <div class="card-body">
                    <form action="{{url('store-blog')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Blog Title</label>
                            <input type="text" class="form-control" name="blog_title" placeholder="Blog Title">
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
                        @error('cover_photo')
                        <div class="text-danger" >
                            <b>{{$message}}</b>
                        </div>
                        @enderror
                        <br>

                        <div class="form-group">
                            <label>Blog Content</label>
                            <textarea id="summernote" name="blog_content"></textarea>
                        </div>
                        @error('blog_content')
                        <div class="text-danger" >
                            <b>{{$message}}</b>
                        </div>
                        @enderror
                        <br>
                        <input type="submit" class="btn btn-primary" name="submit" value="Add Blog">
                    </form>
                </div>
            </div>
        </div>
    </div>


    @endsection
