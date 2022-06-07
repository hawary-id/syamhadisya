@extends('layouts.admin')
@section('title')
  Edit Blog
@endsection

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Edit Blog</h2>
                <p class="dashboard-subtitle">Edit blog</p>
            </div>

            <div class="dashboard-content">
                <div class="row justify-content-center">
                    <div class="col-12 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('blog.update',$item->id) }}" method="POST" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="name" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Blog Title" value="{{ $item->title }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="name" class="form-label">Keyword</label>
                                        <textarea class="form-control" id="keyword" name="keyword" placeholder="Keyword">{{ $item->keyword }}</textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="name" class="form-label">Description</label>
                                        <textarea class="my-editor form-control" id="my-editor" name="description" placeholder="Description">{{ $item->description }}</textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" class="form-control" id="image" name="image">
                                        <div class="form-text">Kosongkan jika tidak ingin diganti</div>
                                    </div>
                                    <div class="form-group float-end">
                                        <a href="{{ route('blog.index') }}" class="btn btn-secondary px-4" type="button">Cancel</a>
                                        <button class="btn btn-primary px-4" type="submit">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('addon-script')
    <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('my-editor');
    </script>
@endpush
