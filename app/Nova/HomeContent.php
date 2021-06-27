<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class HomeContent extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\HomeContent::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title_en';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'title_en',
        'sub_title_en',
        'overview_en',
        'title_ar',
        'sub_title_ar',
        'overview_ar',
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

            Image::make('Image', 'image_path')
                ->deletable(false)
                ->creationRules('required', 'mimes:png,jpg,jpeg')
                ->rules('mimes:png,jpg,jpeg')
                ->disk('public')
                ->help('Please upload image of size 600x450px'),
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
        return 'Content';
    }

    public static function singularLabel()
    {
        return 'Content';
    }

    public static function authorizedToCreate(Request $request): bool
    {
        return !(\App\Models\HomeContent::query()->count() > 0);
    }

    public function authorizedToDelete(Request $request): bool
    {
        return false;
    }
}
