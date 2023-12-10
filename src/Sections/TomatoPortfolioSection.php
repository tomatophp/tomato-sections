<?php

namespace TomatoPHP\TomatoSections\Sections;

use TomatoPHP\TomatoThemes\Services\Abstract\Section;

class TomatoPortfolioSection extends Section
{
    public ?string $label = null;
    public ?string $group = "sections";
    public ?string $icon = "bx bx-image";
    public ?string $description = "use it to show faq in home page";

    public function label(): string
    {
        return __('Tomato Portfolio');
    }

    public function form(): string
    {
        return 'tomato-sections::sections.forms.projects';
    }

    public function section(): string
    {
        return 'tomato-sections::sections.cms.projects';
    }

    public function config(): array
    {
        return [];
    }
}
