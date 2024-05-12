<form action="{{ route('employer.profile_store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="first_name">First name</label>
        <input type="text" class="form-control" name="first_name" value="{{ Auth::user()->first_name }}">
    </div>
    <div class="form-group mt-3">
        <label for="last_name">Last name</label>
        <input type="text" class="form-control" name="last_name" value="{{ Auth::user()->last_name }}">
    </div>
    <div class="form-group mt-3">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
    </div>
    <div class="form-group mt-3">
        @if (!Auth::user()->company_id)
            <p>Choose your company</p>
        @else
            <p>Your company: {{ $companies->find(Auth::user()->company_id)->name }}</p>
        @endif
        
    </div>
    <div class="form-group mt-3">
        <label for="company">Company</label>
        <select class="form-control" name="company">
            <option value="" selected disabled>Choose company</option>
            @foreach ($companies as $company)
                <option value="{{ $company->id }}">{{ $company->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group mt-3">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
</form>