<?php

namespace TomatoPHP\TomatoSections\Sections;

use TomatoPHP\TomatoThemes\Services\Abstract\Section;

class TomatoShopSection extends Section
{
    public ?string $label = null;
    public ?string $group = "sections";
    public ?string $icon = "bx bx-store";
    public ?string $description = "use it to show categories in home page";

    public function label(): string
    {
        return __('Tomato Shop');
    }

    public function form(): string
    {
        return 'tomato-sections::sections.forms.shop';
    }

    public function section(): string
    {
        return 'tomato-sections::sections.shop.shop';
    }

    public function config(): array
    {
        return [];
    }
}
