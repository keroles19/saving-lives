<?php

namespace App\Nova;

use Ajhaupt7\ImageUploadPreview\ImageUploadPreview;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\MorphedByMany;
use Laravel\Nova\Fields\MorphMany;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Donor extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Donor::class;


    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'full_name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'full_name', 'email', 'phone', 'address','national_number', 'blood_type',
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
            Text::make('Full Name'),
            Text::make('Email'),
            Text::make('Phone')->onlyOnDetail(),
            Text::make('Address')->onlyOnDetail(),
            Text::make('National Number','national_number'),
            Text::make('Blood Type','blood_type'),
            Text::make('Description')->onlyOnDetail(),
//            ImageUploadPreview::make('Files')->disk('files')->onlyOnDetail(),
            MorphedByMany::make('Organ')->onlyOnDetail(),
            BelongsTo::make('Hospital', 'Hospital', 'App\Nova\Hospital'),
            Boolean::make('Status')
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
