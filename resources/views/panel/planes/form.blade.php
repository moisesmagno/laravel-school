<div class="form-group">
    <label for="qty_passengers">Quantidade de passageiros</label>
    {!! Form::number('qty_passengers', null, ['class' => 'form-control', 'placeholder' => 'Total de passageiros']) !!}
</div>
<div class="form-group">
    <label for="qty_passengers">Classe</label>
    {!! Form::select('class', $classes, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    <label for="qty_passengers">Marca</label>
    {!! Form::select('brand_id', $brands, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    <button type="submit" class="btn btn-search">Cadastrar</button>
</div>