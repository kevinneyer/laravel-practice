@extends('template')
@extends('./layouts/app')

@section('content')
    <showpage :id="'{{ $id }}'"></showpage>
@endsection