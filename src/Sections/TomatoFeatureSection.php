<?php

namespace TomatoPHP\TomatoSections\Sections;

use TomatoPHP\TomatoThemes\Services\Abstract\Section;

class TomatoFeatureSection extends Section
{
    public ?string $label = null;
    public ?string $group = "sections";
    public ?string $icon = "bx bx-rocket";
    public ?string $description = "use it to show categories in home page";

    public function label(): string
    {
        return __('Tomato Feature');
    }

    public function form(): string
    {
        return 'tomato-sections::sections.forms.feature';
    }

    public function section(): string
    {
        return 'tomato-sections::sections.pages.feature';
    }

    public function config(): array
    {
        return [];
    }
}
