@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Crear Categoría
                    
                </div>
                <div class="panel-body">
                   {!! Form::open(['route' => 'categories.store']) !!}
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