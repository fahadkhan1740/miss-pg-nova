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

class NewsEvents extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\NewsEvents::class;

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
        'short_description_en',
        'title_ar',
        'short_description_ar',
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

            Text::make('Title in English', 'title_en')
                ->rules('required', 'string', 'min:3', 'max:100'),

            Text::make('Title in Arabic', 'title_ar')
                ->rules('required', 'string', 'min:3', 'max:100'),

            Textarea::make('Short Description in English', 'short_description_en')
                ->rules('required', 'string', 'max:255'),

            Textarea::make('Short Description in Arabic', 'short_description_ar')
                ->rules('required', 'string', 'max:255'),

            Trix::make('Long Description in English', 'long_description_en')
                ->rules('required', 'string', 'min:10', 'max:2000'),

            Trix::make('Long Description in Arabic', 'long_description_ar')
                ->rules('required', 'string', 'min:10', 'max:2000'),

            Image::make('Banner', 'banner_path')
                ->creationRules('required', 'mimes:png,jpg,jpeg')
                ->rules('mimes:png,jpg,jpeg')
                ->disk('public')
                ->deletable(false),

            Boolean::make('Is Published', 'status')->default(true),
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
        return 'News & Events';
    }

    public static function singularLabel()
    {
        return 'News & Events';
    }

    public function authorizedToDelete(Request $request): bool
    {
        return false;
    }
}
