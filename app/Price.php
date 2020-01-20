<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Payment;
use App\Sport;
use App\Membership;
use App\Categorie;


class Price extends Model
{
    //
    protected $fillable = ['id','sport_id','categorie_id','membership_id','amount'];

    use SoftDeletes;
    public function payment(){
    	return $this->belongsTo(Payment::class);
    }

    public function sport(){
    	return $this->belongsTo(Sport::class);
    }
    public function membership(){
    	return $this->belongsTo(Membership::class);
    }

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }

}
