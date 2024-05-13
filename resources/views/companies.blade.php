@extends('layouts.main')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Featured Companies</h1>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
            <div class="row">
                @foreach ($companies as $company)
                    <x-company :$company/>
                @endforeach
        
            </div>
            <div class="row">
                <div class="col-md-12 text-center mt-5">
                    {{ $companies->links() }}
                  </div>
            </div>
        </div>
    </div>
</div>
        
@endsection