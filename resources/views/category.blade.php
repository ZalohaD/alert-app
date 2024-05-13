@extends('layouts.main')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">{{ $jobs->first()->category->name }}</h1>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
            @foreach ($jobs as $job)
                <x-job :$job />
            @endforeach
        </div>
        <div>
            {{ $jobs->withQueryString()->links() }}
        </div>
    </div>
</div>
@endsection