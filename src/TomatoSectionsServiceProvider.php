<?php

namespace TomatoPHP\TomatoSections;

use Illuminate\Support\ServiceProvider;
use TomatoPHP\TomatoSections\Sections\TomatoAboutFeaturesSection;
use TomatoPHP\TomatoSections\Sections\TomatoBlogSection;
use TomatoPHP\TomatoSections\Sections\TomatoCategorySection;
use TomatoPHP\TomatoSections\Sections\TomatoContactUsSection;
use TomatoPHP\TomatoSections\Sections\TomatoFAQSection;
use TomatoPHP\TomatoSections\Sections\TomatoFeatureSection;
use TomatoPHP\TomatoSections\Sections\TomatoFooterSection;
use TomatoPHP\TomatoSections\Sections\TomatoHeaderSection;
use TomatoPHP\TomatoSections\Sections\TomatoHeroSection;
use TomatoPHP\TomatoSections\Sections\TomatoPageBodySection;
use TomatoPHP\TomatoSections\Sections\TomatoPageTitleSection;
use TomatoPHP\TomatoSections\Sections\TomatoPortfolioSection;
use TomatoPHP\TomatoSections\Sections\TomatoProductsSection;
use TomatoPHP\TomatoSections\Sections\TomatoShopSection;
use TomatoPHP\TomatoThemes\Facades\TomatoThemes;


class TomatoSectionsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //Register generate command
        $this->commands([
           \TomatoPHP\TomatoSections\Console\TomatoSectionsInstall::class,
        ]);

        //Register Config file
        $this->mergeConfigFrom(__DIR__.'/../config/tomato-sections.php', 'tomato-sections');

        //Publish Config
        $this->publishes([
           __DIR__.'/../config/tomato-sections.php' => config_path('tomato-sections.php'),
        ], 'tomato-sections-config');

        //Register Migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        //Publish Migrations
        $this->publishes([
           __DIR__.'/../database/migrations' => database_path('migrations'),
        ], 'tomato-sections-migrations');
        //Register views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'tomato-sections');

        //Publish Views
        $this->publishes([
           __DIR__.'/../resources/views' => resource_path('views/vendor/tomato-sections'),
        ], 'tomato-sections-views');

        //Register Langs
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'tomato-sections');

        //Publish Lang
        $this->publishes([
           __DIR__.'/../resources/lang' => base_path('lang/vendor/tomato-sections'),
        ], 'tomato-sections-lang');

        //Register Routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

    }

    public function boot(): void
    {
        $this->loadSections();
    }


    /**
     * @return void
     */
    private function loadSections(): void
    {
        //Tomato Ecommerce Sections
        TomatoThemes::registerSection(new TomatoAboutFeaturesSection());
        TomatoThemes::registerSection(new TomatoBlogSection());
        TomatoThemes::registerSection(new TomatoCategorySection());
        TomatoThemes::registerSection(new TomatoContactUsSection());
        TomatoThemes::registerSection(new TomatoFAQSection());
        TomatoThemes::registerSection(new TomatoFeatureSection());
        TomatoThemes::registerSection(new TomatoFooterSection());
        TomatoThemes::registerSection(new TomatoHeaderSection());
        TomatoThemes::registerSection(new TomatoHeroSection());
        TomatoThemes::registerSection(new TomatoPageBodySection());
        TomatoThemes::registerSection(new TomatoPageTitleSection());
        TomatoThemes::registerSection(new TomatoPortfolioSection());
        TomatoThemes::registerSection(new TomatoProductsSection());
        TomatoThemes::registerSection(new TomatoShopSection());
    }
}
