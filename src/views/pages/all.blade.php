@extends('layouts.' . config('cms.default_layout', 'master'))

@section('content')

    @foreach($pages as $page)

        {{ $page->title }}

    @endforeach

@endsection
