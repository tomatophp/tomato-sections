<?php

namespace TomatoPHP\TomatoSections\Sections;

use TomatoPHP\TomatoThemes\Services\Abstract\Section;

class TomatoHeroSection extends Section
{
    public ?string $label = null;
    public ?string $group = "sections";
    public ?string $icon = "bx bx-home";
    public ?string $description = "use it to show categories in home page";

    public function label(): string
    {
        return __('Tomato Hero');
    }

    public function form(): string
    {
        return 'tomato-sections::sections.forms.hero';
    }

    public function section(): string
    {
        return 'tomato-sections::sections.pages.hero';
    }

    public function config(): array
    {
        return [];
    }
}
