<?php

namespace TomatoPHP\TomatoSections\Sections;

use TomatoPHP\TomatoThemes\Services\Abstract\Section;

class TomatoPageTitleSection extends Section
{
    public ?string $label = null;
    public ?string $group = "headers";
    public ?string $icon = "bx bx-bold";
    public ?string $description = "use it to show faq in home page";

    public function label(): string
    {
        return __('Tomato Page Title');
    }

    public function form(): string
    {
        return 'tomato-sections::sections.forms.page-header';
    }

    public function section(): string
    {
        return 'tomato-sections::sections.pages.page-header';
    }

    public function config(): array
    {
        return [];
    }
}
