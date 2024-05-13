@extends('layouts.employer.profile')

@section('profile')
    <h3>My Jobs</h3>
    <x-profile.employer.jobs :$jobs />
@endsection