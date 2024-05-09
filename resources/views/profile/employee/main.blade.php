@extends('layouts.main')

@section('content')
<form method="POST" action="{{ route('auth.logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
@endsection
