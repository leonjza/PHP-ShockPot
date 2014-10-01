<?php

class FullHeader extends Eloquent {

    // MASS ASSIGNMENT -------------------------------------------------------
    // define which attributes are mass assignable (for security)
    // we only want these 3 attributes able to be filled
    protected $fillable = array('headers', 'attempt_id');

    // DEFINE RELATIONSHIPS --------------------------------------------------
    public function attempt() {
        return $this->belongsTo('Attempt');
    }

}