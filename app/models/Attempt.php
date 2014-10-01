<?php

class Attempt extends Eloquent {

    // MASS ASSIGNMENT -------------------------------------------------------
    // define which attributes are mass assignable (for security)
    // we only want these 3 attributes able to be filled
    protected $fillable = array('remote_ip');

    // DEFINE RELATIONSHIPS --------------------------------------------------
    // each attempt HAS many suspect headers
    public function suspect_headers() {
        return $this->hasMany('SuspectHeader', 'attempt_id'); // this matches the Eloquent model
    }

    // each attempt has one full header
    public function full_headers() {
        return $this->hasOne('FullHeader', 'attempt_id');
    }

}
