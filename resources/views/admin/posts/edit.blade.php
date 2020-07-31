@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar Entrada
                    
                </div>
                <div class="panel-body">
                   {!! Form::model($post,['route' => ['posts.update', $post->id],
                   'method' => 'PUT', 'files' => true]) !!}
                        @include('admin.posts.partials.form')
                   {!! Form::close() !!}
                   <a href="{{ route('posts.index') }}" 
                    class="btn btn-sm btn-primary pull-right">
                        Volver
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection