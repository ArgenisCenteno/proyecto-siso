<div class="row">
    <!-- Name Field -->
    <div class="form-group col-sm-12 col-md-12">
        {!! Form::label('nombre', 'Nombre:', ['class' => 'bold']) !!}
        {!! Form::text('nombre', null, ['class' => 'form-control round', 'required']) !!}
    </div>
    <div class="form-group col-sm-12 col-md-12">
    {!! Form::label('categoria_id', 'Categoría:', ['class' => 'bold']) !!}
    {!! Form::select('categoria_id', $categorias, null, ['class' => 'form-control round', 'placeholder' => 'Selecciona una categoría', 'required']) !!}
</div>

    <div class="form-group col-sm-12 col-md-12">
        {!! Form::label('status', 'Estatus:', ['class' => 'bold']) !!}
        {!! Form::select('status', [
           '1' => 'Activo',
           '0' => 'Inactivo',
            ], null, ['class' => 'form-control round']) !!}

    </div>
</div>

<!-- Submit Field -->
<div class="float-end">
    {!! Form::submit('Aceptar', ['class' => 'btn btn-primary round']) !!}
  
</div>