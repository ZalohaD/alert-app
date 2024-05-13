@extends('layouts.employer.profile')

@section('profile')
    <h3>Update your profile</h3>
    <div class="card bg-white mt-4 mb-4">
        <div class="card-body">
            <x-profile.employer.info :$companies />
        </div>
    </div>
@endsection