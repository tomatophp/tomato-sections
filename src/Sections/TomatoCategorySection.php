<?php

namespace TomatoPHP\TomatoSections\Sections;

use TomatoPHP\TomatoThemes\Services\Abstract\Section;

class TomatoCategorySection extends Section
{
    public ?string $label = null;
    public ?string $group = "sections";
    public ?string $icon = "bx bx-category";
    public ?string $description = "use it to show categories in home page";

    public function label(): string
    {
        return __('Tomato Category');
    }

    public function form(): string
    {
        return 'tomato-sections::sections.forms.category';
    }

    public function section(): string
    {
        return 'tomato-sections::sections.shop.category';
    }

    public function config(): array
    {
        return [];
    }
}
