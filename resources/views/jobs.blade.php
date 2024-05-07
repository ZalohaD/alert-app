@extends('layouts.main')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job Listing</h1>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
            <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                        <h6 class="mt-n1 mb-0">All Jobs</h6>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                        <h6 class="mt-n1 mb-0">Full Time</h6>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                        <h6 class="mt-n1 mb-0">Part Time</h6>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                        
                    @foreach ($jobs as $job)
                        <x-job :job='$job'></x-job>
                    @endforeach

                </div>
                <div id="tab-2" class="tab-pane fade show p-0">
                    
                    @foreach ($jobs as $job)
                        @if ($job->worktime == 'full time')
                            <x-job :job='$job'></x-job>
                        @endif
                    @endforeach

                </div>
                <div id="tab-3" class="tab-pane fade show p-0">
                    
                    @foreach ($jobs as $job)
                        @if ($job->worktime == 'part time')
                            <x-job :job='$job'></x-job>
                        @endif
                    @endforeach

                </div>
            </div>
            <div>
                {{ $jobs->links() }}
            </div>
        </div>
    </div>
</div>
@endsection