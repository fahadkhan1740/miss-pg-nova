<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class Home extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Home::class;

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
        'title_ar',
        'sub_title_ar',
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

            Trix::make('Sub Title in English', 'sub_title_en')
                ->rules('required', 'string', 'min:3', 'max:100'),

            Trix::make('Sub Title in Arabic', 'sub_title_ar')
                ->rules('required', 'string', 'min:3', 'max:100'),

            Text::make('Button Text in English', 'button_text_en')
                ->rules('required', 'string', 'min:3', 'max:100'),

            Text::make('Button Text in Arabic', 'button_text_ar')
                ->rules('required', 'string', 'min:3', 'max:100')
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
        return 'Home Banner Titles';
    }

    public static function singularLabel()
    {
        return 'Home Banner Titles';
    }

    public static function authorizedToCreate(Request $request): bool
    {
        return !(\App\Models\Home::query()->count() > 0);
    }

    public function authorizedToDelete(Request $request): bool
    {
        return false;
    }
}
