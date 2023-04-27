@inject('attributeService', 'App\Services\AttributeService')
@inject('campaignService', 'App\Services\CampaignService')

<div class="entity-grid">

    @include('entities.components.header', [
        'model' => $model,
        'breadcrumb' => [
            ['url' => Breadcrumb::index('abilities'), 'label' => \App\Facades\Module::plural(config('entities.ids.ability'), __('entities.abilities'))],
            null
        ]
    ])

    @include($name . '._menu', ['active' => 'story'])

    <div class="entity-story-block">

        @include('entities.components.posts', ['withEntry' => true])
        @includeWhen($model->entity->entityAttributes->count() > 0, 'entities.pages.attributes._story', ['entity' => $model->entity])

        @includeWhen($model->abilities()->has('ability')->count() > 0, 'abilities.panels.abilities', ['onload' => true])
        @include('entities.pages.logs.history')
    </div>

    <div class="entity-sidebar">
        @include('entities.components.pins')
    </div>
</div>


