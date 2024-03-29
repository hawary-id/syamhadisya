@extends('layouts.admin')
@section('title')
  Edit Skill
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Edit Skill</h2>
            <p class="dashboard-subtitle">Edit skill</p>
        </div>

        <div class="dashboard-content">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('skill.update',$item->id) }}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Skill Name" value="{{ $item->name }}" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="image" class="form-label">Cover</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                    <div class="form-text">Kosongkan jika tidak ingin diganti</div>
                                </div>
                                <div class="form-group float-end">
                                    <a href="{{ route('skill.index') }}" class="btn btn-secondary px-4" type="button">Cancel</a>
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
