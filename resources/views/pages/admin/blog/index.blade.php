@extends('layouts.admin')
@section('title')
  Admin Blogs
@endsection

@push('addon-style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css"/>
@endpush

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">My Blogs</h2>
            <p class="dashboard-subtitle">Manage your blogs!</p>
        </div>

        <div class="dashboard-content">
            <div class="row">
                <div class="col-12 mb-3">
                    <a href="{{ route('blog.create') }}" class="btn btn-primary rounded">+ Add New Blog</a>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover" id="example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>Keyword</th>
                                            <th>Description</th>
                                            <th>Images</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($items as $item)
                                            <tr>
                                                <td>{{ $no }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td>
                                                    @foreach(explode(', ', $item->keyword) as $keyword)
                                                        <span class="badge rounded-pill bg-primary">{{ $keyword }}</span>
                                                    @endforeach
                                                </td>
                                                <td>{!! $item->description !!}</td>
                                                <td>
                                                    <a href="" data-bs-toggle="modal" data-bs-target="#imagesModal{{ $item->id }}">
                                                        <img src="{{ Storage::url($item->image) }}" width="50">
                                                    </a>
                                                    <!-- Modal -->
                                                    <div class="modal fade imageModal" id="imagesModal{{ $item->id }}" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">{{ $item->title }}</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <img src="{{ Storage::url($item->image) }}" alt="" class="img-fluid w-100">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                          Action
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="{{ route('blog.edit',$item->id) }}">Edit</a></li>
                                                            <li>
                                                                <form action="{{ route('blog.destroy',$item->id) }}" method="POST">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <button type="submit" class="dropdown-item text-danger">
                                                                        Delete
                                                                    </button>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                      </div>
                                                </td>
                                            </tr>
                                            @php $no++; @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('addon-script')
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
        $('.imageModal').appendTo("body");
    </script>
@endpush
