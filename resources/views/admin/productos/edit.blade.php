@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('admin.aside')
        <div class="col-md-6">
            {!!Form::open(['route'=>['admin.productos.update',$producto],'method'=>'PUT','files'=>true])!!}
            <div class="row form-group">
                {!!Form::label('slug','SLUG') !!}
            </div>
            <div class="row form-group">
                {!!Form::text('slug',$producto->slug,['clas'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('title','TITLE') !!}
            </div>
            <div class="row form-group">
                {!!Form::text('title',$producto->title,['clas'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('description','DESCRIPTION') !!}
            </div>
            <div class="row form-group">
                {!!Form::text('description',$producto->description,['clas'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('nombre','NOMBRE') !!}
            </div>
            <div class="row form-group">
                {!!Form::text('nombre',$producto->nombre,['clas'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('descripcion','DESCRIPCION') !!}
            </div>
            <div class="row form-group">
                {!!Form::textarea('descripcion',$producto->descripcion,['clas'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('precio','Precio') !!}
            </div>
            <div class="row form-group">
                {!!Form::text('precio',$producto->precio,['clas'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('stock','Stock') !!}
            </div>
            <div class="row form-group">
                {!!Form::text('stock',$producto->stock,['clas'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('orden','Orden') !!}
            </div>
            <div class="row form-group">
                {!!Form::text('orden',$producto->orden,['clas'=>'form-control']) !!}
            </div>
            <div class="row form-group">
                {!!Form::label('unidad','Unidad') !!}
            </div>
            <div class="row form-group">
                {!!Form::text('unidad',$producto->unidad,['clas'=>'form-control']) !!}
            </div> 
            <div class="row form-group">
                <img src="/img/productos/{{$producto->urlfoto}}">
                {!!Form::file('urlfoto') !!}
            </div>
            <div class="row form-group">
                <div class="col-sm-6">
                    {!!Form::checkbox('estado',null,$producto->estado) !!} Estado
                </div>
 
                <div class="col-sm-6">
                    {!!Form::submit('GUARDAR',['class'=>'btnn btn-success'])!!}
                </div>
 
                <div>
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('descripcion');
</script>
@endsection
 
