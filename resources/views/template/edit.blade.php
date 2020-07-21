@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Upadate Template</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('template.update', $template->id) }}" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name of Template</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $template->name }}" required  autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="path" class="col-md-4 col-form-label text-md-right">Template Folder Path</label>

                            <div class="col-md-6">
                                <input id="path" type="text" class="form-control @error('name') is-invalid @enderror" name="path" value="{{ $template->path }}" required  autofocus>
                                @error('path')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Template Image</label>

                            <div class="col-md-6">
                                <img src="{{ url(Config::get('image.theme_folder') .
                     '/' . $template->image) }}" style="width: 25%; height: 25% }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Template Sample Image</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="" accept="image/*">

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Template
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
