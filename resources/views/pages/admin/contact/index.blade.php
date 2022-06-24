@extends('layouts.admin')
@section('title')
  Admin Emails
@endsection

@push('addon-style')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css"/>
@endpush

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Inbox</h2>
            <p class="dashboard-subtitle">List of Enail</p>
        </div>

        <div class="dashboard-content">
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="btn-group">
                        <button class="btn btn-outline-secondary">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                All
                            </label>
                        </button>
                        <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">None</a></li>
                            <li><a class="dropdown-item" href="#">Read</a></li>
                            <li><a class="dropdown-item" href="#">Unread</a></li>
                        </ul>
                    </div>
                    <a class="btn btn-outline-secondary mx-2" href="{{ route('contact.index') }}">
                        <bi class="bi bi-arrow-repeat"></bi>
                    </a>
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        More
                    </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#"><bi class="bi bi-pencil me-1"></bi> Mark as read</a></li>
                        <li><a class="dropdown-item" href="#"><bi class="bi bi-trash me-1"></bi> Delete</a></li>
                      </ul>

                </div>


                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover" id="example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Phone Number</th>
                                            <th>Subject</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($items as $item)
                                            <tr>
                                                <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->phone_number }}</td>
                                                <td>{{ $item->subject }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                          Action
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="{{ route('contact.index',$item->id) }}">Reply</a></li>
                                                            <li>
                                                                <form action="{{ route('category.destroy',$item->id) }}" method="POST">
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
    </script>
@endpush
