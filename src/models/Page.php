<?php namespace claritytech\cms\models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    /**RELATIONSHIPS**/

    /**
     * owner
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
