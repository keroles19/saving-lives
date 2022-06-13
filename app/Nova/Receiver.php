<?php

namespace App\Nova;

use Ajhaupt7\ImageUploadPreview\ImageUploadPreview;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\MorphMany;
use Laravel\Nova\Fields\MorphToMany;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Sloveniangooner\SearchableSelect\SearchableSelect;
use Techouse\SelectAutoComplete\SelectAutoComplete as AutoSelect;

class Receiver extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Receiver::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */


    public static function indexQuery(NovaRequest $request, $query)
    {
       if(!isAdmin()){
           return $query->where('status',1)->whereDoesntHave('donor')
               ->orWhere('hospital_id',auth()->user()->id);
       }
    }

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
   //'full_name', 'email', 'phone', 'address', 'password'
        //// 'national_number', 'blood_type', 'files', 'description',
        /// 'donor_id', 'organ_id', 'status', 'hospital_id');
        return [
//            ID::make(__('ID'), 'id')->sortable(),
            Text::make('Full Name')->readonly(),
//            BelongsTo::make('Donor', 'donor', 'App\Nova\Donor'),
            Text::make('Email')->readonly()->canSee(function (){
                return isAdmin();
            }),
            Text::make('Phone')->readonly(),
            Text::make('Address')->readonly(),
            Text::make('National Number','national_number'),
            Text::make('Blood Type','blood_type')->sortable(),
            Text::make('Description')->readonly(),
            ImageUploadPreview::make('Files')->disk('files')->onlyOnDetail(),

            SearchableSelect::make("Donor", "donor_id")->resource(\App\Nova\Donor::class)
            ,

            BelongsTo::make('Hospital', 'Hospital', 'App\Nova\User')->canSee(function (){
                return isAdmin();
            }),
            Boolean::make('Status')->canSee(function (){
                return isAdmin();
            })
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
