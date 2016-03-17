@extends('layouts.master')

@section('content')
    
    <form name="createCms" method="post" action="{{ route('cms.store') }}">

        <!--hidden-->
        <input name="_token" type="hidden" value="{{ csrf_token() }}" />

        <!--title-->
        <div class="form-group row {{ validation_state($errors, ['title']) }}">
            <label for="title" class="col-sm-2 form-control-label">Title</label>
            <div class="col-sm-10">
                <input name="title" type="text" class="form-control" id="title" placeholder="Title" value="{{ old('title') }}" />
            </div>
        </div>

        <!--url-->
        <div class="form-group row {{ validation_state($errors, ['url']) }}">
            <label for="url" class="col-sm-2 form-control-label">URL</label>
            <div class="col-sm-10">
                <input name="url" type="text" class="form-control" id="url" placeholder="URL" value="{{ old('url') }}" />
            </div>
        </div>

        <!--body-->
        <div class="form-group row {{ validation_state($errors, ['body']) }}">
            <label for="body" class="col-sm-2 form-control-label">Body</label>
            <div class="col-sm-10">
                <textarea name="body" rows="10" class="form-control" id="body" placeholder="Body">{{ old('body') }}</textarea>
            </div>
        </div>

        <!--submit-->
        <div class="form-group row">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Save <i class="fa fa-check-circle"></i></button>
            </div>
        </div>

    </form>

@endsection
