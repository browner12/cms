@extends('layouts.master')

@section('content')

    @foreach($pages as $page)

        {{ $page->title }}

    @endforeach

@endsection
