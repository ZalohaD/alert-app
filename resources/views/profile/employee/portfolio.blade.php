@extends('layouts.employee.profile')

@section('profile')
<form action="{{ route('employee.store_portfolio') }}" method="POST">
    @csrf
    <div class="form-group mt-3">
        <label for="about">About Me</label>
        <textarea class="form-control" name="about" rows="5" required>{{ Auth::user()->portfolio ? Auth::user()->portfolio->about : '' }}</textarea>
    </div>
    <div class="form-group mt-3">
        <label for="skills">Skills</label>
        <input type="text" class="form-control" name="skills" value="{{ Auth::user()->portfolio ? Auth::user()->portfolio->skills : '' }}" required>
    </div>
    <div class="form-group mt-3">
        <label for="experience">Experience</label>
        <textarea class="form-control" name="experience" rows="5" required>{{ Auth::user()->portfolio ? Auth::user()->portfolio->experience : '' }}</textarea>
    </div>
    <div class="form-group mt-3">
        <label for="education">Education</label>
        <textarea class="form-control" name="education" rows="5" required>{{ Auth::user()->portfolio ? Auth::user()->portfolio->education : '' }}</textarea>
    </div>
    <div class="form-group mt-3">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
</form>
@endsection
