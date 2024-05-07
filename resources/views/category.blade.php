@extends('layouts.main')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">{{ $category->name }}</h1>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
            @foreach ($category->jobs as $job)
                <x-job :$job />
            @endforeach
        </div>
    </div>
</div>
@endsection