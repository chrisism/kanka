@if (!$campaignService->enabled('families'))
    <?php return ?>
@endif

@php
    $preset = null;
    if (isset($model) && $model->family) {
        $preset = $model->family;
    } elseif (!isset($bulk)) {
        $preset = FormCopy::field('family')->select($isParent ?? false, \App\Models\Family::class);
    }
@endphp
<x-forms.foreign
    name="family_id"
    key="family"
    entityType="families"
    :allowNew="$allowNew ?? true"
    :allowClear="$allowClear ?? true"
    :parent="$isParent ?? false"
    :route="route('families.find', isset($model) ? ['exclude' => $model->id] : null)"
    :class="\App\Models\Family::class"
    :selected="$preset"
    :dropdownParent="$dropdownParent ?? null"
    :entityTypeID="config('entities.ids.family')">
</x-forms.foreign>
