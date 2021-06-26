<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class Trainer extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Trainer::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name_en';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'name_en',
        'name_ar',
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

            Text::make('Name (English)', 'name_en')
                ->rules('required', 'string', 'min:3', 'max:200'),

            Text::make('Name (Arabic)', 'name_ar')
                ->rules('required', 'string', 'min:3', 'max:200'),

            Trix::make('Description (English)', 'description_en')
                ->rules('required', 'string', 'min:5', 'max:1000'),

            Trix::make('Description (Arabic)', 'description_ar')
                ->rules('required', 'string', 'min:5', 'max:1000'),

            Text::make('Tag (English)', 'category_en')
                ->rules('string', 'string', 'min:3', 'max:200')
                ->hideFromIndex(),

            Text::make('Tag (Arabic)', 'category_ar')
                ->rules('string', 'string', 'min:3', 'max:200')
                ->hideFromIndex(),

            Image::make('Image')
                ->deletable(false)
                ->creationRules('required', 'mimes:png,jpg,jpeg')
                ->rules( 'mimes:png,jpg,jpeg')
                ->help('Please upload image of size 450x300px'),

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
}
