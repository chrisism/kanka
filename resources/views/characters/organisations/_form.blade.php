@php
$options = [
'' => __('organisations.members.pinned.none'),
\App\Models\OrganisationMember::PIN_CHARACTER => __('organisations.members.pinned.character'),
\App\Models\OrganisationMember::PIN_ORGANISATION => __('organisations.members.pinned.organisation'),
\App\Models\OrganisationMember::PIN_BOTH => __('organisations.members.pinned.both'),
];
$statuses = [
    \App\Models\OrganisationMember::STATUS_ACTIVE => __('organisations.members.status.active'),
    \App\Models\OrganisationMember::STATUS_INACTIVE => __('organisations.members.status.inactive'),
    \App\Models\OrganisationMember::STATUS_UNKNOWN => __('organisations.members.status.unknown'),
];

$fromOrg = request()->get('from') === 'org';
@endphp
{{ csrf_field() }}
@if ($fromOrg)
   {!! Form::hidden('organisation_id') !!}
@else
    @include('cruds.fields.organisation', [
        'preset' => !empty($member) && $member->organisation ? $member->organisation : null,
        'allowNew' => false,
        'required' => true,
        'allowClear' => false,
        'dropdownParent' => request()->ajax() ? '#entity-modal' : null,
    ])
@endif

@if ($fromOrg)
    <input type="hidden" name="parent_id" value="" />
    @include('cruds.fields.character', [
        'name' => 'parent_id',
        'preset' => !empty($member) && $member->parent ? $member->parent : null,
        'allowNew' => false,
        'allowClear' => true,
        'label' => __('organisations.members.fields.parent'),
        'placeholder' => __('organisations.members.placeholders.parent'),
        'route' => 'search.organisation-member',
        'model' => $member->organisation,
        'dropdownParent' => request()->ajax() ? '#entity-modal' : null,
    ])
@endif

<div class="form-group">
    <label>{{ __('characters.organisations.fields.role') }}</label>
    {!! Form::text('role', null, ['placeholder' => __('organisations.members.placeholders.role'), 'class' => 'form-control', 'maxlength' => 45]) !!}
</div>

<div class="form-group">
    <label>
        {{ __('organisations.members.fields.status') }}
    </label>
    {!! Form::select('status_id', $statuses, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label>
        {{ __('organisations.members.fields.pinned') }}
        <i class="fa-solid fa-question-circle hidden-xs hidden-sm" data-toggle="tooltip" title="{{ __('organisations.members.helpers.pinned') }}"></i>
    </label>
    {!! Form::select('pin_id', $options, null, ['class' => 'form-control']) !!}
</div>

@includeWhen(auth()->user()->isAdmin(), 'cruds.fields.privacy_callout', ['model' => !empty($member) ? $member : null])


