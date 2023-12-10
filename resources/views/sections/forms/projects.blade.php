<div class="flex flex-col gap-4">
    <div class="flex justify-between gap-4">
        <x-splade-input class="w-full" label="{{__('Title [AR]')}}" name="title_ar" placeholder="{{__('Title [AR]')}}" />
        <x-splade-input class="w-full" label="{{__('Title [EN]')}}" name="title_en" placeholder="{{__('Title [AR]')}}" />
    </div>
    <x-splade-textarea label="{{__('Description [AR]')}}" name="description_ar" placeholder="{{__('Description [AR]')}}" />
    <x-splade-textarea label="{{__('Description [EN]')}}" name="description_en" placeholder="{{__('Description [AR]')}}" />
    <x-splade-select
        choices
        label="{{__('Projects')}}"
        name="projects"
        :options="\TomatoPHP\TomatoCms\Models\Portfolio::all()"
        option-label="title"
        option-value="id"
        multiple
    />
</div>
