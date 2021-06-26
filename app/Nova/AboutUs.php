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
        'title_en',
        'sub_title_en',
        'overview_en',
        'mission_en',
        'core_values_en',
        'title_ar',
        'sub_title_ar',
        'overview_ar',
        'mission_ar',
        'core_values_ar',
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
            ID::make(__('ID'), 'id')
                ->sortable()
                ->hideFromIndex()
                ->hideFromDetail(),

            Text::make('Title (English)', 'title_en')->rules('string'),
            Text::make('Title (Arabic)', 'title_ar')->rules('string'),

            Text::make('Sub Title (English)', 'sub_title_en')->rules('string'),
            Text::make('Sub Title (Arabic)', 'sub_title_ar')->rules('string'),

            Trix::make('Overview (English)', 'overview_en')->alwaysShow(),
            Trix::make('Overview (Arabic)', 'overview_ar')->alwaysShow(),

            Trix::make('History & Vision (English)', 'history_vision_en'),
            Trix::make('History & Vision (Arabic)', 'history_vision_ar'),

            Trix::make('Mission (English)', 'mission_en')->rules('min:5', 'max:1500'),
            Trix::make('Mission (Arabic)', 'mission_ar')->rules('min:5', 'max:1500'),

            Trix::make('Core Values (English)', 'core_values_en')->rules('min:5', 'max:1500'),
            Trix::make('Core Values (Arabic)', 'core_values_ar')->rules('min:5', 'max:1500'),

            Image::make('Image', 'image_path')->disk('public'),
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
        return !(\App\Models\AboutUs::query()->count() > 0);
    }

    public function authorizedToDelete(Request $request): bool
    {
        return false;
    }
}
