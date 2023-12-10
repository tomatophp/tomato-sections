<?php

namespace TomatoPHP\TomatoSections\Sections;

use TomatoPHP\TomatoThemes\Services\Abstract\Section;

class TomatoProductsSection extends Section
{
    public ?string $label = null;
    public ?string $group = "sections";
    public ?string $icon = "bx bx-cart";
    public ?string $description = "use it to show categories in home page";

    public function label(): string
    {
        return __('Tomato Products');
    }

    public function form(): string
    {
        return 'tomato-sections::sections.forms.products-section';
    }

    public function section(): string
    {
        return 'tomato-sections::sections.shop.products-section';
    }

    public function config(): array
    {
        return [];
    }
}
