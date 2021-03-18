Crear nuevo proceso de donacion

<form action="{{url ('/donacion_1')}}" method="post">
{{ csrf_field()}} 


<label for="id_proceso">{{'Proceso de Donación N°'}}</label>
<input type="text" name="id_proceso" id="id_proceso" value="">
<br/>
<br/>

<label for="cuil_ablacionista">{{'Cuil Ablacionista'}}</label>
<input type="text" name="cuil_ablacionista" id="cuil_ablacionista" value="">
<br/>
<br/>



<input type="checkbox" id="coordinacion" name="coordinacion" value="1">
<label for="coordinacion"> Coordinación </label>
<br/>
<br/>

<input type="checkbox" id="deteccion" name="deteccion" value="1">
<label for="deteccion"> Detección </label>
<br/>
<br/>

<input type="checkbox" id="ev_hc_globo" name="ev_hc_globo" value="1">
<label for="ev_hc_globo"> Evaluación de Historia Clínica</label>
<br/>
<br/>

<input type="reset" value="Cancelar">

<input type="submit" value="Enviar">

</form>