<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $vendedore->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidoP') }}
            {{ Form::text('apellidoP', $vendedore->apellidoP, ['class' => 'form-control' . ($errors->has('apellidoP') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('apellidoP', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidoM') }}
            {{ Form::text('apellidoM', $vendedore->apellidoM, ['class' => 'form-control' . ($errors->has('apellidoM') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('apellidoM', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('distribuidora') }}
            {{ Form::text('distribuidora', $vendedore->distribuidora, ['class' => 'form-control' . ($errors->has('distribuidora') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('distribuidora', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>