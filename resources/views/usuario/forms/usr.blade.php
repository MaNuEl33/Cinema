<div class="form-group">
  {!!Form::label('Nombre: ')!!}
  {!!Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de usuario'])!!}
</div>
<div class="form-group">
  {!!Form::label('Correo: ')!!}
  {!!Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el email del usuario'])!!}
</div>
<div class="form-group">
  {!!Form::label('Password: ')!!}
  {!!Form::password('password', ['class' => 'form-control', 'placeholder' => 'Ingrese el password del usuario'])!!}
</div>
