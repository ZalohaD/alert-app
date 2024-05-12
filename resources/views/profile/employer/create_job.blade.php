@extends('layouts.profile')

@section('profile')
    <h3>Post a job</h3>
    <x-profile.employer.create :$categories />
@endsection