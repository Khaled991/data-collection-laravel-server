<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use CrudTrait;
    use HasFactory;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    // protected $table = 'surveys';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function regions()
    {
        return $this->belongsToMany(Region::class, 'region_surveys');
    }

    public function submittedSurveys()
    {
        return $this->hasMany(SubmittedSurvey::class);
    }

    public function textQuestions()
    {
        return $this->hasMany(TextQuestion::class);
    }

    public function activeTextQuestions()
    {
        return $this->textQuestions()->where(['is_active' => true]);
    }

    public function optionQuestions()
    {
        return $this->hasMany(OptionQuestion::class);
    }

    public function activeOptionQuestions()
    {
        return $this->optionQuestions()->where(['is_active' => true]);
    }
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
