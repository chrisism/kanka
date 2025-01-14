<?php
/**
 * @var \App\Models\CampaignDashboardWidget $widget
 * @var \App\Models\MiscModel $model
 */
$model = $model ?? $widget->entity->child;
$entity = $entity ?? $widget->entity;

if (empty($model)) {
    return;
}

$specificPreview = 'dashboard.widgets.previews.' . $entity->type();
$customName = !empty($widget->conf('text')) ? str_replace('{name}', $model->name, $widget->conf('text')) : null;

\App\Facades\Dashboard::add($entity);
?>
<x-box padding="0" css="widget-calendar widget-list {{ $widget->customClass($campaign) }} entity-{{ $entity->id }}" id="dashboard-widget-{{ $widget->id }}">
@if(view()->exists($specificPreview))
    @include($specificPreview, ['entity' => $entity])
@else
        <x-widgets.previews.head :widget="$widget" :campaign="$campaign" :entity="$entity" />
        <x-widgets.previews.body :widget="$widget" :campaign="$campaign" :entity="$entity" :model="$model" />
@endif
</x-box>
