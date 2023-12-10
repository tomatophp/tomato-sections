<?php

namespace TomatoPHP\TomatoSections\Sections;

use TomatoPHP\TomatoThemes\Services\Abstract\Section;

class TomatoHeaderSection extends Section
{
    public ?string $label = null;
    public ?string $group = "headers";
    public ?string $icon = "bx bx-menu";
    public ?string $description = "use it to show categories in home page";

    public function label(): string
    {
        return __('Tomato Header');
    }

    public function form(): string
    {
        return 'tomato-sections::sections.forms.header';
    }

    public function section(): string
    {
        return 'tomato-sections::sections.header';
    }

    public function config(): array
    {
        return [];
    }
}
