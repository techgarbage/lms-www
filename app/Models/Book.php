<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model {

    /**
     * Fillable fields for this model.
     *
     * @var array
     */
    public $fillable = [
        'book_name',
        'isbn',
        'edition',
    ];

    /**
     * Defines a relationship with Publication Model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function publication() {
        return $this->belongsTo('App\Models\Publication');
    }
}