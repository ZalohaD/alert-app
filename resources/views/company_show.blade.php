@extends('layouts.main')

@section('content')
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gy-5 gx-4">
            <div class="col-lg-8">
                <div class="d-flex align-items-center mb-5">
                    <div class="text-start">
                        <h3 class="mb-3">{{ $company->name }}</h3>
                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $company->address }}</span>
                        <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>{{ $company->employees }} Employees</span>
                    </div>
                </div>

                <div class="mb-5">
                    <h4 class="mb-3">About company</h4>
                    <p>{{ $company->description }}</p>
                    <h4 class="mb-3">History</h4>
                    <p>Magna et elitr diam sed lorem. Diam diam stet erat no est est. Accusam sed lorem stet voluptua sit sit at stet consetetur, takimata at diam kasd gubergren elitr dolor</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Dolor justo tempor duo ipsum accusam</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Elitr stet dolor vero clita labore gubergren</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Rebum vero dolores dolores elitr</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Est voluptua et sanctus at sanctus erat</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Diam diam stet erat no est est</li>
                    </ul>
                    <h4 class="mb-3">How it's goin</h4>
                    <p>Magna et elitr diam sed lorem. Diam diam stet erat no est est. Accusam sed lorem stet voluptua sit sit at stet consetetur, takimata at diam kasd gubergren elitr dolor</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Dolor justo tempor duo ipsum accusam</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Elitr stet dolor vero clita labore gubergren</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Rebum vero dolores dolores elitr</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Est voluptua et sanctus at sanctus erat</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Diam diam stet erat no est est</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="bg-light rounded p-5 mb-4 wow slideInUp" data-wow-delay="0.1s">
                    <h4 class="mb-4">Company Details</h4>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Number of employees: {{ $company->employees }}</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Number of vacancies: {{ $company->jobs->count() }}</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Website: <a href="{{ $company->website }}">{{ $company->website }}</a></p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Address: {{ $company->address }}</p>
                    <a class="btn btn-primary me-3 mt-4" href="{{ route('company_jobs', ['company' => $company]) }}">Show vacancies</a>
                </div>

                
            </div>
        </div>
    </div>
</div>
@endsection