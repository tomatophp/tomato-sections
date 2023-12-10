<?php

namespace TomatoPHP\TomatoSections\Sections;

use TomatoPHP\TomatoThemes\Services\Abstract\Section;

class TomatoFooterSection extends Section
{
    public ?string $label = null;
    public ?string $group = "footers";
    public ?string $icon = "bx bx-copyright";
    public ?string $description = "use it to show categories in home page";

    public function label(): string
    {
        return __('Tomato Footer');
    }

    public function form(): string
    {
        return 'tomato-sections::sections.forms.footer';
    }

    public function section(): string
    {
        return 'tomato-sections::sections.footer';
    }

    public function config(): array
    {
        return [];
    }
}
