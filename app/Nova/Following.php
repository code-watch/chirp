<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Code;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\BelongsTo;

class Following extends Resource
{
    /**
     * The model the resource corresponds to.
     */
    public static $model = \App\Following::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     */
    public static $search = [
        'id',
        'name',
    ];

    /**
     * Get the fields displayed by the resource.
     */
    public function fields(Request $request) : array
    {
        return [
            ID::make()->sortable(),

            Text::make('Name')
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Nickname')
                ->sortable()
                ->rules('required', 'max:255'),

            Code::make('Data')
                ->json()
                ->nullable(),

            BelongsTo::make('Followed by', 'user', User::class)
                ->rules('required'),
        ];
    }

    /**
     * Get the cards available for the request.
     */
    public function cards(Request $request) : array
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     */
    public function filters(Request $request) : array
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     */
    public function lenses(Request $request) : array
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     */
    public function actions(Request $request) : array
    {
        return [];
    }
}
