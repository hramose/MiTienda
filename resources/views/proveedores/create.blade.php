@extends('app')

@section('content')

<div class="col-md-12">
<!-- show registration form, but only if we didn't submit already -->
    <form method="GET" action="create\confirmar" name="formularionuevo" class="form-horizontal">
        <div class="form-group">
            <label class="col-sm-2" for="nombre"><?php echo "Nombre de fabrica"; ?></label>
            <div class="col-sm-10">
                <input id="nombre" type="text" name="nombre"  class="form-control" />
                @if ($errors->any())
                    <div class="alert alert-danger">{{ $errors->first('nombre') }}</div>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2" for="direccion"><?php echo "Dirección"; ?></label>
            <div class="col-sm-10">
                <input id="direccion" type="text" name="direccion" class="form-control"  />
                @if ($errors->any())
                    <div class="alert alert-danger">{{ $errors->first('direccion') }}</div>
                @endif
            </div>                
        </div>
        <div class="form-group">
            <label class="col-sm-2" for="pais"><?php echo "Pais"; ?></label>
            <div class="col-sm-10">
                <input id="pais" type="text" name="pais" class="form-control"  />
                @if ($errors->any())
                    <div class="alert alert-danger">{{ $errors->first('pais') }}</div>
                @endif
            </div>

        </div>
        <div class="form-group">
            <label class="col-sm-2" for="telefono"><?php echo "Telefono"; ?></label>
            <div class="col-sm-10">
            <?php $css_error = ''; ?>            
            @if ($errors->first('telefono'))
                <?php $css_error = 'alert alert-danger'; ?>
            @endif
                <input id="telefono" type="text" name="telefono" class="form-control {{ $css_error }}" value="{{ old('telefono') }}" />        
                    {{ $errors->first('telefono') }}
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2" for="descripcion"><?php echo "Descripción"; ?></label>
            <div class="col-sm-10">
                <textarea id="descripcion" name="descripcion" rows="5" class="form-control" ></textarea>
                @if ($errors->any())
                    <div class="alert alert-danger">{{ $errors->first('descripcion') }}</div>
                @endif
            </div>
        </div>
        <input type="hidden" name="users_user_id" value="{{ Auth::user()->id }}">


        <input type="submit" name="crearProveedor" class="btn btn-success" value="<?php echo 'hola'; ?>" />
        <a class="btn btn-danger" href="/">Cancelar</a>
    </form>
</div>
<div class="col-md-10">
	@include('errors.list')

</div>


@endsection