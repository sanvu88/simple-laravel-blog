@extends('layouts.admin.template')

@section('content')

    <div class="row">
        <div class="col-md-12">
            @include('includes.admin.alerts')

            {{Form::model($post, ['route' => ['posts.update', $post],'method'=>'PATCH','files'=>true])}}
            @include('admin.posts.form')
            <div class="form-group text-center">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
            {{Form::close()}}
        </div>

    </div>

@endsection