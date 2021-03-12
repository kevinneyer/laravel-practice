@extends('template')
@extends('/layouts.app')

@section('content')
    <profile :user='{{ $user }}' :favorites="{{ $user->favorites }}"></profile>
@endsection