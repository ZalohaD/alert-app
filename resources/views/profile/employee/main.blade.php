@extends('layouts.main')

@section('content')

    <div class="container text-center mt-5 mb-5">
        <div class="row">
            <h1 class="mb-5">Profile</h1>
            <!-- Лівий блок (1/3 частини) -->
            <div class="col-md-4">
                <div class="block">
                    <!-- Nav tabs -->
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link mb-3 active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
                        <button class="nav-link mb-3" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
                        <button class="nav-link mb-3" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
                        <button class="nav-link mb-3" id="v-pills-job-tab" data-bs-toggle="pill" data-bs-target="#v-pills-job" type="button" role="tab" aria-controls="v-pills-job" aria-selected="false">Post a job</button>
                        <button class="nav-link mb-3" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
                        <form method="POST" action="{{ route('auth.logout') }}">
                            @csrf
                            <button class="nav-link w-100 mb-3" type="submit">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Правий блок (2/3 частини) -->
            <div class="col-md-8">
                <div class="block">
                    <!-- Tab panes -->
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <!-- Content for Home tab -->
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <!-- Content for Profile tab -->
                            <div class="mb-3 row g-3">
                                <div class="col-sm-6">
                                    <label for="exampleFormControlInput1" class="form-label">First Name</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter first name">
                                </div>
                                <div class="col-sm-6">
                                    <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter last name">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                                <input type="password" class="form-control" id="inputPassword">
                            </div>
                            <div class="mb-3">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
                                        <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">HTML</a></li>
                                        <li><a href="#">CSS</a></li>
                                        <li><a href="#">JavaScript</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                            <!-- Content for Messages tab -->
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <!-- Content for Settings tab -->
                        </div>
                        <div class="tab-pane fade" id="v-pills-job" role="tabpanel" aria-labelledby="v-pills-job-tab">
                            <!-- Content for Post a job tab -->
                            <div class="mb-3">
                                <label for="jobTitle" class="form-label">Job Title</label>
                                <input type="text" class="form-control" id="jobTitle" placeholder="Enter job title">
                            </div>
                            <div class="mb-3">
                                <label for="jobDescription" class="form-label">Job Description</label>
                                <textarea class="form-control" id="jobDescription" rows="3" placeholder="Enter job description"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="jobRequirements" class="form-label">Job Requirements</label>
                                <textarea class="form-control" id="jobRequirements" rows="3" placeholder="Enter job requirements"></textarea>
                            </div>
                            <!-- Add more fields as needed -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
