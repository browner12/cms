@extends('layouts.master')

@section('content')

    <table class="table table-striped table-hover">

        <thead>
            <tr>
                <th>Title</th>
                <th>URL</th>
                <th>Actions</th>
            </tr>
        </thead>

        @forelse($pages as $page)
            <tr>
                <td>{{ $page->title }}</td>
                <td>{{ $page->url }}</td>
                <td>
                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3"></td>
            </tr>
        @endforelse

    </table>

@endsection
