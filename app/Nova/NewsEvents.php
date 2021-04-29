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
     * Custom priority level of the resource.
     *
     * @var int
     */
    public static $priority = 6;

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
        'short_description'
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

            Text::make('Title')
                ->rules('required', 'string', 'min:3', 'max:100'),

            Textarea::make('Short Description')
                ->rules('required', 'string', 'max:255'),

            Trix::make('Long Description')
                ->rules('required', 'string', 'min:10', 'max:2000'),

            Image::make('Banner', 'banner_path')
                ->creationRules('required', 'mimes:png,jpg,jpeg')
                ->rules('mimes:png,jpg,jpeg')
                ->disk('public'),

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
