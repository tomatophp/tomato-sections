<?php

namespace TomatoPHP\TomatoSections\Sections;

use TomatoPHP\TomatoThemes\Services\Abstract\Section;

class TomatoContactUsSection extends Section
{
    public ?string $label = null;
    public ?string $group = "sections";
    public ?string $icon = "bx bx-phone";
    public ?string $description = "use it to show contact us in home page";

    public function label(): string
    {
        return __('Tomato Contact Us');
    }

    public function form(): string
    {
        return 'tomato-sections::sections.forms.contact';
    }

    public function section(): string
    {
        return 'tomato-sections::sections.pages.contact';
    }

    public function config(): array
    {
        return [];
    }
}
