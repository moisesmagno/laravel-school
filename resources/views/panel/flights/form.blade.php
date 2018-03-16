<div class="form-group">
    <label for="plane_id">Escolha o avião</label>
    {!! Form::select('plane_id', $planes, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    <label for="origem">Origem</label>
    {!! Form::select('origem', $aiports, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    <label for="destination">Destino</label>
    {!! Form::select('destination', $aiports,null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	<label for="date">Data</label>
	{!! Form::date('date', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
	<label for="time_duration">Duração</label>
	{!! Form::time('time_duration', null, ['class'=>'form-control','placeholder'=>'Duração']) !!}
</div>
<div class="form-group">
	<label for="time">Horas saída</label>
	{!! Form::time('time', null, ['class'=>'form-control', 'placeholder'=>'Hora da saída']) !!}
</div>
<div class="form-group">
	<label for="arrival_time">Horas Chegada</label>
	{!! Form::time('arrival_time', null, ['class'=>'form-control', 'placeholder'=>'Hora da chegada']) !!}
</div>
<div class="form-group">
	<label for="old_price">Preço anterior</label>
	{!! Form::text('old_price', null, ['class'=>'form-control', 'placeholder'=>'Preço anterior']) !!}
</div>
<div class="form-group">
	<label for="price">Preço</label>
	{!! Form::text('price', null, ['class'=>'form-control', 'placeholder'=>'Preço']) !!}
</div>
<div class="form-group">
	<label for="total_plots">Total de parcelas</label>
	{!! Form::text('total_plots', null, ['class'=>'form-control', 'Total de parcelas']) !!}
</div>
<div class="form-group">
	{!! Form::checkbox('is_promotion', null, null, ['id'=>'is_promotion']) !!}
	<label for="is_promotion">É promoção</label>
</div>
<div class="form-group">
	<label for="image">Foto</label>
	{!! Form::file('image', ['class'=>'form-control']) !!}
</div>
<div class="form-group">
	<label for="qty_stops">Quantidade de paradas</label>
	{!! Form::number('qty_stops', null, ['class'=>'form-control','placeholder'=>'Quantidade de paradas']) !!}
</div>
<div class="form-group">
	<label for="description">Descrição</label>
	{!! Form::textarea('description', null, ['class'=>'form-control','placeholder'=>'Descrição']) !!}
</div>
<div class="form-group">
    <button type="submit" class="btn btn-search">Cadastrar</button>
</div>