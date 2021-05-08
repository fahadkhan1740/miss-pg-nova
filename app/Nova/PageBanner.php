<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Http\Requests\NovaRequest;

class PageBanner extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\PageBanner::class;

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

            Select::make('Page')
                ->options([
                    'projects' => 'Projects',
                    'our-companies' => 'Our Companies',
                    'our-history' => 'Our History',
                    'ceo-message' => 'CEO Message',
                    'mission-vision' => 'Mission and Vision',
                    'board-of-directors' => 'Board of Directors',
                    'management-team' => 'Management Team',
                    'news' => 'News and Announcements',
                    'photo-video' => 'Photo and Video',
                    'social-media' => 'Social Media',
                    'financial-highlights' => 'Financial Highlights',
                    'annual-reports' => 'Annual Reports',
                    'corporate-profile' => 'Corporate Profile',
                    'join-us' => 'Join Us',
                    'contact-us' => 'Contact Us'
                ])
                ->rules('required', 'unique:page_banners,page'),

            Image::make('Banner', 'banner_image')
                ->creationRules('required', 'mimes:jpg,png,gif')
                ->rules('mimes:jpg,png,gif'),
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
