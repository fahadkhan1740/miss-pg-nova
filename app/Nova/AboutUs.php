<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class AboutUs extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\AboutUs::class;

    /**
     * Custom priority level of the resource.
     *
     * @var int
     */
    public static $priority = 3;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
        'title',
        'sub_title',
        'overview',
        'mission',
        'core_values'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Select::make('Language', 'locale')->options([
                'en' => 'English',
                'ar' => 'Arabic',
            ])->rules('required'),
            Text::make('Title')->rules('string'),
            Text::make('Sub Title')->rules('string'),
            Image::make('Banner', 'banner_path')->disk('public'),
            Image::make('Image', 'image_path')->disk('public'),
            Trix::make('Overview')->alwaysShow(),
            Trix::make('History & Vision', 'history_vision'),
            Trix::make('Mission', 'mission')->rules('min:5', 'max:500'),
            Trix::make('Core Values', 'core_values')->rules('min:5', 'max:500'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }

    public static function label(): string
    {
        return 'About Us';
    }

    public static function singularLabel()
    {
        return 'About Us';
    }

    public static function authorizedToCreate(Request $request): bool
    {
        return !(\App\Models\AboutUs::query()->count() > 1);
    }

    public function authorizedToDelete(Request $request): bool
    {
        return false;
    }

    // TODO: Add HR above mission
    // TODO: Add black bar in navbar
}
