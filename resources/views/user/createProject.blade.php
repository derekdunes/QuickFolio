 
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Projects</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.updateProject') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name of Project</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name[]" value="" required  autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="url" class="col-md-4 col-form-label text-md-right">Project WebLink</label>

                            <div class="col-md-6">
                                <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url[]" value="" required  autofocus>
                                @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">Project Sample Image</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image[]" value="" required accept="image/*">

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="more">
                            
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-2 offset-md-4">
                                <button class="btn btn-primary" onclick="createForm()">
                                    Add More Data
                                </button>
                            </div>
                            
                            <div class="col-md-1"></div>

                            <div class="col-md-2">
                                <button class="btn btn-primary" onclick="removeForm()">
                                    Remove Last Data
                                </button>
                            </div>
                        </div>

                        <br>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Create Project
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
        function createForm(){

        var $more_forms = $("div[class='more']");

        var $parent_div = $("<div>", {id:"clones"});

        //create name
            var $form_group_div = $("<div>", {class: "form-group row"});

            var $label = $("<label>", {class: "col-md-4 col-form-label text-md-right", for: "name"});

            $label.append("Name of Project");

            var $col_div = $("<div>", {class: "col-md-6"});

            var $titleInput = $("<input>", {id: "name", type: "text", class: "form-control @error('name') is-invalid @enderror", name:"name[]", required: true});

            $col_div.append($titleInput);
            
            $form_group_div.append($label);
            $form_group_div.append($col_div);

            $parent_div.append($form_group_div);


        //create Title

            var $form_group_div = $("<div>", {class: "form-group row"});

            var $label = $("<label>", {class: "col-md-4 col-form-label text-md-right", for: "url"});

            $label.append("Project WebLink");

            var $col_div = $("<div>", {class: "col-md-6"});

            var $titleInput = $("<input>", {id: "url", type: "text", class: "form-control @error('url') is-invalid @enderror", name:"url[]", required: true});

            $col_div.append($titleInput);
            
            $form_group_div.append($label);
            $form_group_div.append($col_div);

            $parent_div.append($form_group_div);


        //create image input    

            var $form_group_div = $("<div>", {class: "form-group row"});

            var $label = $("<label>", {class: "col-md-4 col-form-label text-md-right", for: "image"});

            $label.append("Project Sample Image");

            var $col_div = $("<div>", {class: "col-md-6"});

            var $imgInput = $("<input>", {id: "image", type: "file", class: "form-control @error('image') is-invalid @enderror", name:"image[]", accept:"image/*", required: true});

            $col_div.append($imgInput);
            
            $form_group_div.append($label);
            $form_group_div.append($col_div);

            $parent_div.append($form_group_div);

            $more_forms.append($parent_div);

        }

        function removeForm(){
            $("#clones").last().remove();

        }
</script>

@endsection
