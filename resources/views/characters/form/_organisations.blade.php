<?php
/**
 * @var \App\Models\OrganisationMember $organisation
 * @var \App\Models\Character $model
 * @var \App\Services\FormService $formService
 */
$organisations = isset($model) ?
    $model->organisations()->with('organisation')->orderBy('role', 'ASC')->get() :
    $formService->prefillCharacterOrganisation($source);
$isAdmin = Auth::user()->isAdmin();
?>
<div class="character-organisations">
    @foreach ($organisations as $organisation)
        <div class="form-group">
            <div class="row">
                <div class="col-xs-5">
                    <select name="organisations[{{ $organisation->id }}]" class="form-control select2" style="width: 100%"
                        data-url="{{ route('organisations.find') }}"
                        data-placeholder="{{ __('crud.placeholders.organisation') }}"
                        data-language="{{ LaravelLocalization::getCurrentLocale() }}"
                    >
                        <option value="{{ $organisation->organisation->id }}">{{ $organisation->organisation->name }}</option>
                    </select>
                </div>
                <div class="col-xs-5">
                    {!! Form::text('organisation_roles[' . $organisation->id . ']', $organisation->role, [
                        'class' => 'form-control',
                        'placeholder' => __('organisations.members.placeholders.role'),
                    ]) !!}
                </div>
                @if ($isAdmin)
                    <div class="col-xs-1 text-center">
                        {!! Form::hidden('organisation_privates[' . $organisation->id . ']', $organisation->is_private) !!}
                        <i class="fa @if($organisation->is_private) fa-lock @else fa-unlock-alt @endif fa-2x" data-toggle="private" data-private="{{ __('crud.attributes.visibility.private') }}" data-public="{{ __('crud.attributes.visibility.public') }}"></i>
                    </div>
                @endif
                <div class="col-xs-1 text-right">
                    <span class="member-delete btn btn-danger" title="{{ __('crud.remove') }}">
                        <i class="fa fa-trash"></i>
                    </span>
                </div>
            </div>
        </div>
    @endforeach
</div>

<button class="btn btn-default" id="add_organisation" href="#" title="{{ __('characters.actions.add_organisation') }}">
    <i class="fa fa-plus"></i> {{ __('characters.actions.add_organisation') }}
</button>

<div id="template_organisation" style="display: none">
    <div class="row">
        <div class="col-xs-5">
            <select name="organisations[]" class="form-control tmp-org" style="width: 100%"
                    data-url="{{ route('organisations.find') }}"
                    data-placeholder="{{ __('crud.placeholders.organisation') }}"
                    data-language="{{ LaravelLocalization::getCurrentLocale() }}"
            >
            </select>
        </div>
        <div class="col-xs-5">
            {!! Form::text('organisation_roles[]', null, [
                'class' => 'form-control',
                'placeholder' => __('organisations.members.placeholders.role'),
            ]) !!}
        </div>
        @if ($isAdmin)
            <div class="col-xs-1 text-center">
                {!! Form::hidden('organisation_privates[]', 0) !!}
                <i class="fa fa-unlock-alt fa-2x" data-toggle="private" data-private="{{ __('crud.attributes.visibility.private') }}" data-public="{{ __('crud.attributes.visibility.public') }}"></i>
            </div>
        @endif
        <div class="col-xs-1 text-right">
            <span class="member-delete btn btn-danger" title="{{ __('crud.remove') }}">
                <i class="fa fa-trash"></i>
            </span>
        </div>
    </div>
</div>

