@extends('layouts.main')

@section('content')
<div class="container-xxl py-5">
    <div class="container-fluid">
        <h1 class="text-center mb-5" data-wow-delay="0.1s">Profile</h1>
        <div class="row">

            <div class="col-md-4">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="d-flex align-items-center text-start mx-3 pb-3 active" data-bs-toggle="pill" href="#tab-1">Profile</a>
                    <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">My jobs</a>
                    <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-3">Create job</a>
                </div>
                <form method="POST" action="{{ route('auth.logout') }}">
                    @csrf
                    <button class="btn text-danger" type="submit">Logout</button>
                </form>
            </div>

            <div class="col-md-8">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="profile-tab">
                        <h3>Update your profile</h3>
                        <div class="card bg-white mt-4 mb-4">
                            <div class="card-body">
                                <form action="{{ route('employer.profile_store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="first_name">First name</label>
                                        <input type="text" class="form-control" name="first_name" value="{{ Auth::user()->first_name }}">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="last_name">Last name</label>
                                        <input type="text" class="form-control" name="last_name" value="{{ Auth::user()->last_name }}">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
                                    </div>
                                    {{-- <div class="form-group mt-3">
                                        <label for="email">Company</label>
                                        <input type="email" class="form-control" name="company" value="">
                                    </div> --}}
                                    <div class="form-group mt-3">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="vacancies-tab">
                        <h3>My Jobs</h3>
                        <table class="table text-center">
                            <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Job Title:</th>
                                <th scope="col">Job City:</th>
                                <th scope="col">Job Posted:</th>
                                <th scope="col">Status:</th>
                                <th scope="col">Action:</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($jobs as $index => $job)
                                    <tr>
                                        <th>{{ $index + 1 }}</th>
                                        <td>{{ $job->title }}</td>
                                        <td>{{ $job->city }}</td>
                                        <td>{{ $job->created_at }}</td>
                                        <td>status</td>
                                        <td>
                                            <a href="{{ route('job_show', $job->id) }}" class="btn btn-success btn-sm">View</a>
                                            <a href="{{ route('job_edit', $job->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('job_delete', $job->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    
                    <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="create-tab">
                        {{-- Create job form --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection