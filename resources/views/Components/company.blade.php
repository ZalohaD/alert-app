<div class="col-lg-4 mb-2 mt-2">
    <div class="card company-card">
        <div class="card-header bg-transparent border-0">
            <img  src="{{url('/img/com-logo-1.jpg')}}" style="border-radius: 50px" width="50" height="50" alt="">
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $company->name }}</h5>
            <p class="card-text mb-2">{{ Str::limit($company->description, 100) }}</p>
            <a href="{{ route('company_show', [$company->id]) }}" class="btn btn-primary">Visit company</a>
        </div>
    </div>
</div>
