@extends('layouts.main')

@section('content')
<div class="container-xxl py-5">
    <div class="container-fluid">
        <h1 class="text-center mb-5" data-wow-delay="0.1s">Profile</h1>
        <div class="row">

            <div class="col-md-4 mb-5">
                <a class="d-flex align-items-center text-start mx-3 pb-3 active" href="{{ route('employer.home') }}">Profile</a>
                <a class="d-flex align-items-center text-start mx-3 pb-3" href="{{ route('employer.jobs') }}">My jobs</a>
                <a class="d-flex align-items-center text-start mx-3 pb-3" href="{{ route('employer.create_job') }}">Create job</a>
                <a class="d-flex align-items-center text-start mx-3 pb-3" href="{{ route('employer.settings') }}">Settings</a>
                <form method="POST" action="{{ route('auth.logout') }}">
                    @csrf
                    <button class="btn text-danger mb-5" type="submit">Logout</button>
                </form>
            </div>

            
            <div class="col-md-8">
                <div class="tab-content" id="v-pills-tabContent">
                    @yield('profile')
                </div>
            </div>

        </div>
    </div>
</div>
@endsection