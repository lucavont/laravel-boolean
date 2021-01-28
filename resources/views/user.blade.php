@extends('layouts.main')

@section('content')
   
    <div class="wrapperUser">
        <img src="{{ $user->image }}" alt="">
        <h4>{{ $user->first_name }} {{ $user->last_name }}</h4>
        <span>{{ $user->email }}</span>
        <span>{{ $user->gender }}</span>
    </div>

@endsection