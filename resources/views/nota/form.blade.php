<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('observacion') }}
            {{ Form::text('observacion', $nota->observacion, ['class' => 'form-control' . ($errors->has('observacion') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('observacion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $nota->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estatus') }}
            {{ Form::text('estatus', $nota->estatus, ['class' => 'form-control' . ($errors->has('estatus') ? ' is-invalid' : ''), 'placeholder' => '']) }}
            {!! $errors->first('estatus', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>