<?php
/**
 * @var \App\Models\MapMarker $marker
 * @var \App\Models\Campaign $campaign
 */
$boosted = $campaign->boosted();
$class = $backgroundImage = null;
$markerNameCss = "py-3";
if ($marker->entity && $marker->entity->hasImage($boosted)) {
    $class = 'with-image cover-background';
    $backgroundImage = "background-image: url('" . $marker->entity->getEntityImageUrl($boosted, 400, 200) . "');";
    $markerNameCss = 'py-6';
}
?>
@if (!request()->has('mobile'))
<div class="marker-header flex {{ $class }}" style="{{ $backgroundImage }}">

    <div class="marker-header-fade grow flex gap-2">
        <div class="marker-header-lower grow self-end">
            <div class="marker-name overflow-hidden text-2xl text-bold grow p-2 {{ $markerNameCss }}">
            @if ($marker->entity)
                <a href="{{ $marker->entity->url() }}" target="_blank">
                    @if (!empty($marker->name))
                        {!! $marker->name !!}
                    @else
                        {!! $marker->entity->name !!}
                    @endif
                </a>
            @else
                    {{ $marker->name }}
            @endif
            </div>
        </div>
        <div class="marker-top px-1 py-1">
            <span class="marker-close" title="{{ __('crud.click_modal.close') }}"><i class="fa-solid fa-close"></i></span>
        </div>
    </div>
</div>

@endif

@if ($marker->entity)
    @if($marker->entity->isMap())
        <div class="marker-map-link text-center m-3">
            <a href="{{ $marker->entity->url('explore') }}" target="_blank" class="btn2 btn-primary btn-sm">
                <x-icon class="map"></x-icon> {{ __('maps.actions.explore') }}
            </a>
        </div>
    @endif

    @if($marker->entity->isLocation() && !$marker->entity->child->maps->isEmpty())
        <div class="marker-explore-links text-center m-3">
            @foreach ($marker->entity->child->maps as $map)
                <a href="{{ route('maps.explore', [$campaign, $map]) }}" class="btn2 btn-block btn-primary btn-sm" target="_blank">
                    <x-icon class="map"></x-icon>
                    {{ __('maps.actions.explore') }} {!! $map->name !!}
                </a>
            @endforeach
        </div>
    @endif
@endif

@if ($marker->hasEntry())
    <div class="marker-entry entity-content">
        {!! \App\Facades\Mentions::mapAny($marker) !!}
    </div>
@endif
@if ($marker->entity && $marker->entity->child->hasEntry())
    <div class="marker-entry entity-content">
        {!! $marker->entity->child->entry() !!}
    </div>
@endif

@can('update', $marker->map)
    <div class="marker-actions text-center">
        <div class="join">
            <a href="{{ route('maps.map_markers.edit', [$campaign, $marker->map, $marker, 'from' => 'explore']) }}" class="btn2 btn-primary btn-outline btn-sm join-item">
                <x-icon class="fa-solid fa-map-pin"></x-icon>
                {{ __('maps/markers.actions.update') }}
            </a>

            <x-button.delete-confirm css="join-item" target="#delete-marker-confirm-form-{{ $marker->id }}" />
        </div>
    </div>
    {!! Form::open(['method' => 'DELETE', 'route' => ['maps.map_markers.destroy', $campaign, $marker->map, $marker, 'from' => 'map'], 'style' => 'display:inline', 'id' => 'delete-marker-confirm-form-' . $marker->id]) !!}
    {!! Form::close() !!}

@endcan
