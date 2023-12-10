<?php

namespace TomatoPHP\TomatoSections\Sections;

use TomatoPHP\TomatoThemes\Services\Abstract\Section;

class TomatoFAQSection extends Section
{
    public ?string $label = null;
    public ?string $group = "sections";
    public ?string $icon = "bx bx-question-mark";
    public ?string $description = "use it to show faq in home page";

    public function label(): string
    {
        return __('Tomato FAQ');
    }

    public function form(): string
    {
        return 'tomato-sections::sections.forms.faq';
    }

    public function section(): string
    {
        return 'tomato-sections::sections.pages.faq';
    }

    public function config(): array
    {
        return [];
    }
}
