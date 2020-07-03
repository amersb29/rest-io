<p>
  Buenas días.
</p>
<p>
  Envío mis datos de contacto ya que me gustaría
  recibir información del evento <b>"{{ $course }}"</b>.
</p> 

<ul>
  <li><b>Nombre:</b> {{ $name }}</li>
  <li><b>Correo:</b> {{ $email }}</li>
  @if( $phone ) 
    <li><b>Móvil:</b> {{ $phone }}</li>
  @endif
</ul>

<p>
  Quedo en espera de su pronta respuesta.
  <br>
  Saludos.
</p>