@extends('layouts.master')

@section('content')
    {{ $name === null ? 'you' : $name }}
@endsection