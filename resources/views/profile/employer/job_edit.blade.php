@extends('layouts.employer.profile')

@section('profile')
    <h3>Edit a job</h3>
    <x-profile.employer.job_edit :$job :$categories/>
@endsection