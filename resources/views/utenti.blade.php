@extends('layouts.main')

@section('content')
<div id="root">
    <ul>
        @foreach ($users as $user)
        <li>
            <img src="{{ $user->image }}" alt=""><br><h3>{{ $user->first_name }}</h3> <br>{{ $user->last_name }}<br>{{ $user->gender }}
        </li>
        @endforeach    
    </ul>

@endsection