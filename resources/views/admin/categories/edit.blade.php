@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar Categoría
                    
                </div>
                <div class="panel-body">
                   {!! Form::model($category,['route' => ['categories.update', $category->id],
                   'method' => 'PUT']) !!}
                        @include('admin.categories.partials.form')
                   {!! Form::close() !!}
                   <a href="{{ route('categories.index') }}" 
                    class="btn btn-sm btn-primary pull-right">
                        Volver
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection