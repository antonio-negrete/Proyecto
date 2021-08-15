<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $cliente->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidoP') }}
            {{ Form::text('apellidoP', $cliente->apellidoP, ['class' => 'form-control' . ($errors->has('apellidoP') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('apellidoP', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidoM') }}
            {{ Form::text('apellidoM', $cliente->apellidoM, ['class' => 'form-control' . ($errors->has('apellidoM') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('apellidoM', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $cliente->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>