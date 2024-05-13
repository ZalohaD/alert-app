<form action="{{ route('employee.profile_store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="first_name">First name</label>
        <input type="text" class="form-control" name="first_name" value="{{ Auth::user()->first_name }}">
        @error('first_name')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group mt-3">
        <label for="last_name">Last name</label>
        <input type="text" class="form-control" name="last_name" value="{{ Auth::user()->last_name }}">
        @error('last_name')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group mt-3">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
</form>