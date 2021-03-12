@extends('template')
@extends('layouts.app')

@section('content')
  <slash :user="{{ $user }}"></slash>
@endsection