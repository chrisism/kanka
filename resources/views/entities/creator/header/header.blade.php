<div class="quick-creator-header pb-4 ">
    <div class="flex gap-1">
        <div class="flex-grow flex flex-col gap-2">
            <div class="qq-mode text-sm text-uppercase sm:w-96">
                @if ($mode === 'bulk')
                    {{ __('entities.creator.modes.bulk') }}
                @elseif ($mode === 'templates')
                    {{ __('entities.creator.modes.templates') }}
                @else
                    {{ __('entities.creator.modes.default') }}
                @endif
            </div>
            @if (empty($target))
                <div class="dropdown">
                    <div role="button" class="text-2xl text-2xl" data-dropdown aria-expanded="false">
                        {!! $newLabel !!}
                        <x-icon class="fa-solid fa-chevron-down" />
                        <span class="sr-only">Change type</span>
                    </div>
                    <div class="dropdown-menu hidden" role="menu">
                        @foreach ($orderedEntityTypes as $module => $name)
                            @includeWhen(isset($entities[$module]), 'entities.creator.header._dropdown', ['dropType' => $module, 'trans' => $name])
                        @endforeach
                        <hr class="m-0" />
                            @php $data = ['toggle' => 'entity-creator', 'url' => route('entity-creator.selection', $campaign), 'entity-type' => 'return']; @endphp
                            <x-dropdowns.item link="#" icon="fa-solid fa-arrow-left" :data="$data">
                                {{ __('entities.creator.back') }}
                            </x-dropdowns.item>
                    </div>
                </div>
            @else
                <div>
                    <div class="text-2xl text-2xl">
                        {!! $newLabel !!}
                    </div>
                </div>
            @endif
        </div>
        @if (empty($target))
            <div class="qq-toggles flex text-right items-center content-center justify-end gap-2">
                <div class="qq-mode-toggle btn2 btn-sm self-end @if (empty($mode)) btn-outline  @endif" data-mode="single" data-url="{{ route('entity-creator.form', [$campaign, 'type' => $type]) }}" aria-label="{{ __('entities.creator.modes.default') }}" data-title="{{ __('entities.creator.modes.default') }}" data-toggle="tooltip">
                    <x-icon class="fa-regular fa-user"></x-icon>
                </div>
                @if ($type !== 'posts')
                    <div class="qq-mode-toggle btn2 btn-sm self-end @if ($mode == 'bulk') btn-outline  @endif" data-mode="bulk" data-url="{{ route('entity-creator.form', [$campaign, 'type' => $type, 'mode' => 'bulk']) }}" aria-label="{{ __('entities.creator.modes.bulk') }}" data-title="{{ __('entities.creator.modes.bulk') }}" data-toggle="tooltip">
                        <x-icon class="fa-solid fa-users"></x-icon>
                    </div>
                    <div class="qq-mode-toggle btn2 btn-sm self-end @if ($mode == 'templates') btn-outline  @endif" data-mode="templates" data-url="{{ route('entity-creator.form', [$campaign, 'type' => $type, 'mode' => 'templates']) }}" aria-label="{{ __('entities.creator.modes.templates') }}" data-title="{{ __('entities.creator.modes.templates') }}" data-toggle="tooltip">
                        <x-icon class="fa-solid fa-address-book"></x-icon>
                    </div>
                @endif
            </div>
        @endif
    </div>
</div>
