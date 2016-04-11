@extends('layouts.master')

@section('content')

    <div class="page-header">

        <a href="{{ route('pages.create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus-circle"></i> Create</a>

        <div class="title">Manage Pages</div>

        <div class="subtitle">{{ count($pages) }} Total</div>

        <div class="clearfix"></div>

    </div>

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
                <td class="actions">
                    <a href="{{ route('pages.edit', [$page->id])  }}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{ route('pages.destroy', [$page->id]) }}" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No Pages</td>
            </tr>
        @endforelse

    </table>

@endsection
