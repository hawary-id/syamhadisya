@extends('layouts.admin')
@section('title')
  Admin Dashboard
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Admin Dashboard</h2>
            <p class="dashboard-subtitle">Look what you have made today!</p>
        </div>

        <div class="dashboard-content">
            <div class="row">
                <div class="col-6 col-md-3">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">Projects</div>
                            <div class="dashboard-card-subtitle">{{ $projects }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">Posts</div>
                            <div class="dashboard-card-subtitle">{{ $posts }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">Skills</div>
                            <div class="dashboard-card-subtitle">{{ $skills }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">Emails</div>
                            <div class="dashboard-card-subtitle">{{ $contacts }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dashboard-card-title mb-2 border-bottom">New Email</div>
                            <div class="dashboard-card-body">
                                <div class="row">
                                    <div class="col-4 border-end">
                                        <div class="list-group" id="list-tab" role="tablist">
                                            @if($count>0)
                                                <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-{{ $new->id }}" role="tab" aria-controls="list-home">{{ $new->name }} <small class="float-end">{{ $new->created_at }}</small></a>

                                                @foreach ($emails as $email)
                                                    <a class="list-group-item list-group-item-action" id="list-home-list" data-bs-toggle="list" href="#list-{{ $email->id }}" role="tab" aria-controls="list-home">{{ $email->name }} <small class="float-end">{{ $email->created_at }}</small></a>
                                                @endforeach
                                            @endif
                                        </div>
                                      </div>
                                      <div class="col-8">
                                        <div class="tab-content" id="nav-tabContent">
                                            @if($count>0)
                                                <div class="tab-pane fade show active" id="list-{{ $new->id }}" role="tabpanel" aria-labelledby="list-home-list">
                                                    <h5>From : {{ $new->name }} ( {{ $new->email }} )</h5>
                                                    <h6>Phone Number : {{ $new->phone_number }}</h6>
                                                    <small>Date : {{ $new->created_at }}</small>
                                                    <hr>
                                                    <p class="mt-3 mb-5">{{ $new->message }}</p>
                                                    <hr>
                                                    <div class="col-12 text-center">
                                                        <a href="{{ route('contact-store',$new->id) }}"style="text-decoration:none;"><i class="bi bi-reply-fill me-1"></i>Reply</a>
                                                    </div>
                                                </div>
                                                @foreach ($emails as $email)
                                                    <div class="tab-pane fade show" id="list-{{ $email->id }}" role="tabpanel" aria-labelledby="list-home-list">
                                                        <h5>From : {{ $email->name }} ( {{ $email->email }} )</h5>
                                                        <h6>Phone Number : {{ $email->phone_number }}</h6>
                                                        <small>Date : {{ $email->created_at }}</small>
                                                        <hr>
                                                        <p class="mt-3 mb-5">{{ $email->message }}</p>
                                                        <hr>
                                                        <div class="col-12 text-center">
                                                            <a href="{{ route('contact-store',$new->id) }}"style="text-decoration:none;"><i class="bi bi-reply-fill me-1"></i>Reply</a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
