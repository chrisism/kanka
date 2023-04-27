@if (!isset($preset))
    @php
        $preset = null;
        if (isset($model) && $model->entity) {
            $preset = $model->entity;
        } elseif (!isset($bulk)) {
            $preset = FormCopy::field('entity')->select($isParent ?? false, \App\Models\Entity::class);
        }
    @endphp
@endif
@if (isset($required))
    @php $allowClear = false;@endphp
@endif


<x-forms.foreign
    :name="$name ?? 'entity_id'"
    :key="$key ?? 'entity'"
    :required="$required ?? false"
    :label="$label ?? null"
    :placeholder="$placeholder ?? null"
    :allowClear="$allowClear ?? true"
    :route="route($route ?? 'search.entities-with-relations', isset($model) ? ['exclude' => $model->id] : null)"
    :selected="$preset"
    :helper="$helper ?? null"
    :dropdownParent="$dropdownParent ?? null">
</x-forms.foreign>
