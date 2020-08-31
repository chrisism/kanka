<?php /** @var \App\Models\Inventory $inventory */?>
{{ csrf_field() }}
<div class="row">
    <div class="col-md-6">
        <div class="form-group required">
            {!! Form::select2(
                'item_id',
                (!empty($inventory) && $inventory->item ? $inventory->item: null),
                App\Models\Item::class,
                false,
                'crud.fields.item',
                'items.find',
                'crud.placeholders.item'
            ) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group required">
            <label>{{ trans('entities/inventories.fields.name') }}</label>
            {!! Form::text(
                'name',
                null,
                [
                    'placeholder' => __('entities/inventories.placeholders.name'),
                    'class' => 'form-control',
                    'max-length' => 45
                ]
            ) !!}
        </div>
    </div>
</div>
<div class="form-group required">
    <label>{{ trans('entities/inventories.fields.amount') }}</label>
    {!! Form::text('amount', null, ['placeholder' => trans('entities/inventories.placeholders.amount'), 'class' => 'form-control', 'maxlength' => 191]) !!}
</div>

<div class="form-group required">
    <label>{{ trans('entities/inventories.fields.position') }}</label>
    {!! Form::text('position', null, [
        'placeholder' => trans('entities/inventories.placeholders.position'),
        'class' => 'form-control',
        'maxlength' => 191,
        'list' => 'position-list',
        'autocomplete' => 'off'
    ]) !!}
</div>
<div class="hidden">
    <datalist id="position-list">
        @foreach (\App\Models\Inventory::positionList() as $name)
            <option value="{{ e($name) }}">{{ e($name) }}</option>
        @endforeach
    </datalist>
</div>

<div class="form-group">
    <label>{{ trans('entities/inventories.fields.description') }}</label>
    {!! Form::text('description', null, ['placeholder' => trans('entities/inventories.placeholders.description'), 'class' => 'form-control', 'maxlength' => 191]) !!}
</div>


<div class="form-group">
    {!! Form::hidden('is_equipped', 0) !!}
    <label>{!! Form::checkbox('is_equipped', 1, isset($inventory) ? $inventory->is_equipped : null) !!}
        {{ __('entities/inventories.fields.is_equipped') }}
    </label>
</div>

@include('cruds.fields.visibility', ['model' => isset($inventory) ? $inventory : null])
