<x-dialog.header>
    @if (isset($titleIcon) && !empty($titleIcon))
        <span>{!! $titleIcon !!}</span>
    @endif
    {!! $title !!}
</x-dialog.header>
<article class="max-w-2xl">
    @include('partials.errors')
    @include($content)
</article>
<footer class="bg-base-200 flex flex-wrap gap-3 justify-between items-start p-3 md:rounded-b">
    @include('partials.forms.dialog.footer')
</footer>

