Crear nuevo proceso de donacion

<form action="{{url ('/donacion_1')}}" method="post">
{{ csrf_field()}} 


<label for="PD">{{'Proceso de Donación N°'}}</label>
<input type="text" name="PD" id="PD" value="">
<br>

<label for="Ablacionista">{{'Ablacionista'}}</label>
<select name="Ablacionista" id="Ablacionista" form="" value="">
<br>
<br>

<label for="Fecha_defun">{{'Fecha de Defunción'}}</label>
<input type="datetime-local" id="Fecha_defun" name="Fecha_defun" value="" form="">
<br>

<label for="Provincia">{{'Provincia'}}</label>
<select name="Provincia" id="Provincia" form="" value="">
<br>

<label for="Inst_donante">{{'Institución Donante'}}</label>
<select name="Inst_donante" id="Inst_donante" form="" value="">
<br>

<label for="Voluntad">{{'Expresión de Voluntad'}}</label>
<select name="Voluntad" id="Voluntad" form="" value="">
<br>

<label for="Viabilidad">{{'Viabilidad'}}</label>
<select name="Viabilidad" id="Viabilidad" form="" value="">
<br>

<label for="Motivo_desc">{{'Motivo de Descarte'}}</label>
<select name="Motiv_desc" id="Motiv_desc" form="" value="">
<br>

<input type="checkbox" id="Coordinacion" name="Coordinacion" value="Coordinacion">
<label for="Coordinacion"> Coordinación </label>
<br>
<input type="checkbox" id="Deteccion" name="Deteccion" value="Deteccion">
<label for="Deteccion"> Detección </label>
<br>
<input type="checkbox" id="Eval_hc" name="Eval_hc" value="Eval_hc">
<label for="Eval_hc"> Evaluación de Historia Clínica</label>
<br>
<br>
<input type="reset" value="Cancelar">

<input type="submit" value="Enviar">

</form>