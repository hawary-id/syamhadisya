@extends('layouts.admin')
@section('title')
  Create Category
@endsection

@push('addon-style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css"/>
@endpush

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">New Category</h2>
            <p class="dashboard-subtitle">Add new category</p>
        </div>

        <div class="dashboard-content">
            <div class="row justify-content-center">
                <div class="col-6 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('category.store') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Category Name">
                                </div>
                                <div class="form-group float-end">
                                    <a href="{{ route('category.index') }}" class="btn btn-secondary px-4" type="button">Cancel</a>
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
