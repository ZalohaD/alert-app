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
                                <x-profile.employer.info :$companies />
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="vacancies-tab">
                        <h3>My Jobs</h3>
                        <x-profile.employer.jobs :$jobs />
                    </div>
                    
                    <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="create-tab">
                        <h3>Post a job</h3>
                        <x-profile.employer.create :$categories />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection