<?php

namespace TomatoPHP\TomatoSections\Sections;

use TomatoPHP\TomatoThemes\Services\Abstract\Section;

class TomatoBlogSection extends Section
{
    public ?string $label = null;
    public ?string $group = "sections";
    public ?string $icon = "bx bx-paperclip";
    public ?string $description = "use it to show blogs in home page";

    public function label(): string
    {
        return __('Tomato Blog');
    }

    public function form(): string
    {
        return 'tomato-sections::sections.forms.blog';
    }

    public function section(): string
    {
        return 'tomato-sections::sections.blog.blog';
    }

    public function config(): array
    {
        return [];
    }
}
