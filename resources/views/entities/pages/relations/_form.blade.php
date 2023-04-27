{{ csrf_field() }}

@include('cruds.fields.entity', [
    'name' => 'target_id',
    'required' => true,
    'preset' => !empty($relation) && $relation->target ? $relation->target : null,
    'label' => __('entities/relations.fields.target'),
    'placeholder' => __('entities/relations.placeholders.target'),
    'dropdownParent' => request()->ajax() ? '#entity-modal' : null,
    'allowClear' => false,
])
<div class="form-group required">
    <label>{{ __('entities/relations.fields.relation') }}</label>
    {!! Form::text('relation', null, ['placeholder' => __('entities/relations.placeholders.relation'), 'class' => 'form-control', 'maxlength' => 191, 'required']) !!}
</div>

<div class="row">
    <div class="col-sm-6">
        @include('cruds.fields.colour_picker', request()->ajax() ? ['dropdownParent' => '#entity-modal'] : [])
    </div>
    <div class="col-sm-6">
        @include('cruds.fields.attitude')
    </div>
</div>

@if(empty($relation) && (!isset($mirror) || $mirror == true))
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>
                    {!! Form::checkbox('two_way') !!}
                    {{ __('entities/relations.fields.two_way') }}
                    <i class="fa-solid fa-question-circle hidden-xs hidden-sm" title="{{ __('entities/relations.hints.two_way') }}" data-toggle="tooltip"></i>
                </label>
                <p class="help-block visible-xs visible-sm">{{ __('entities/relations.hints.two_way') }}</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group" style="display:none" id="two-way-relation">
                <label>
                    {!! __('entities/relations.fields.target_relation') !!}
                    <i class="fa-solid fa-question-circle hidden-xs hidden-sm" title="{{ __('entities/relations.hints.target_relation') }}" data-toggle="tooltip"></i>
                </label>
                {!! Form::text('target_relation', null, ['class' => 'form-control', 'maxlength' => 191, 'placeholder' => __('entities/relations.placeholders.target_relation')]) !!}
                <p class="help-block visible-xs visible-sm">{{ __('entities/relations.hints.target_relation') }}</p>
            </div>
        </div>
    </div>
@endif

<div class="row">
    <div class="col-md-6">
        @include('cruds.fields.pinned', ['model' => $relation ?? null])
    </div>
</div>

@if (!empty($relation) && !empty($relation->isMirrored()))
    <div class="alert alert-info">
        <h4>{{ __('entities/relations.hints.mirrored.title') }}</h4>
        <p>{!! __('entities/relations.hints.mirrored.text', [
        'link' => '<a href="' . $relation->target->url() . '" data-toggle="tooltip-ajax" data-id="' . $relation->target_id . '" data-url="' . route('entities.tooltip', $relation->target->id) . "\">" . $relation->target->name . '</a>'
        ]) !!}</p>
        <p>
            <div class="form-group">
                {!! Form::hidden('unmirror', 0) !!}
                <label>{!! Form::checkbox('unmirror', 1)!!}
                    {{ __('entities/relations.fields.unmirror') }}
                </label>
            </div>
        </p>
    </div>
@endif

@include('cruds.fields.visibility_id', ['model' => isset($relation) ? $relation : null])

@if (!empty($mode))
    <input type="hidden" name="mode" value="{{ $mode }}" />
@endif
