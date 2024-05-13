@extends('layouts.main')

@section('content')
<div class="container-xxl py-5">
    <div class="container-fluid">
        <h1 class="text-center mb-5" data-wow-delay="0.1s">Job Listing</h1>
        <div class="row">

            <div class="col-md-8" id="job-list">
                <div class="tab-class text-center" data-wow-delay="0.1s">
                    <div id="tab-1" class="tab-pane fade show p-0 active">

                        @foreach ($jobs as $job)
                            <x-job :job="$job" />
                        @endforeach

                    </div>
                </div>
                <div>
                    {{ $jobs->withQueryString()->links() }}
                </div>
            </div>

            @include('Components/filter')

        </div>
    </div>
</div>
@endsection
