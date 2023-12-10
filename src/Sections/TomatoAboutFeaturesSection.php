<?php

namespace TomatoPHP\TomatoSections\Sections;

use TomatoPHP\TomatoThemes\Services\Abstract\Section;

class TomatoAboutFeaturesSection extends Section
{
    public ?string $label = null;
    public ?string $group = "sections";
    public ?string $icon = "bx bx-cheese";
    public ?string $description = "use it to show features in home page";

    public function label(): string
    {
        return __('Tomato About Features');
    }

    public function form(): string
    {
        return 'tomato-sections::sections.forms.about-features';
    }

    public function section(): string
    {
        return 'tomato-sections::sections.pages.about-features';
    }

    public function config(): array
    {
        return [];
    }
}
