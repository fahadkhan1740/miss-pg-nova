<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;
use Mdixon18\Fontawesome\Fontawesome;

class KidsFeature extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\KidsFeature::class;

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

            Text::make('Title (English)', 'title_en')
                ->rules('required', 'string', 'min:3', 'max:100'),

            Text::make('Title (Arabic)', 'title_ar')
                ->rules('required', 'string', 'min:3', 'max:100'),

            Textarea::make('Description (English)', 'description_en')
                ->rules('required', 'string', 'min:10', 'max:500')
                ->hideFromIndex(),

            Textarea::make('Description (Arabic)', 'description_ar')
                ->rules('required', 'string', 'min:10', 'max:500')
                ->hideFromIndex(),

            Image::make('Image', 'image_path')
                ->creationRules('required', 'mimes:png,jpg,jpeg')
                ->rules('mimes:png,jpg,jpeg')
                ->disk('public'),

            Boolean::make('Status')
                ->default(true)
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
        return 'Features';
    }

    public static function singularLabel()
    {
        return 'Features';
    }
}
