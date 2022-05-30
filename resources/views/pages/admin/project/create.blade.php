@extends('layouts.admin')
@section('title')
  Create Project
@endsection

@push('addon-style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css"/>
@endpush

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">New Project</h2>
            <p class="dashboard-subtitle">Add new project</p>
        </div>

        <div class="dashboard-content">
            <div class="row justify-content-center">
                <div class="col-6 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                                @method('POST')
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name Project" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="name" class="form-label">Category</label>
                                    <select name="categories_id" id="categories_id" class="form-control" required>
                                        <option value="">Select</option>
                                        @foreach ($items as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="photo" class="form-label">Cover</label>
                                    <input type="file" class="form-control" id="photo" name="photo" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="page" class="form-label">Page</label>
                                    <input type="file" class="form-control" id="page" name="page" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="tools" class="form-label">Tools</label>
                                    <textarea name="tools" id="tools" cols="30" class="form-control" placeholder="Use commas (,) to sparate" required></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="url" class="form-label">Url</label>
                                    <textarea name="url" id="url" cols="30" class="form-control" placeholder="Project URL" required></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea name="description" id="description" cols="30" rows="5" class="form-control" placeholder="Description" required></textarea>
                                </div>
                                <div class="form-group float-end">
                                    <a href="{{ route('project.index') }}" class="btn btn-secondary px-4" type="button">Cancel</a>
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
