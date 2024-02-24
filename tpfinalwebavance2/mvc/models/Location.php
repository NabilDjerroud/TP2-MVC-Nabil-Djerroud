<?php
namespace App\Models;
use App\Models\CRUD;

class Location extends CRUD{
    protected $table = 'location';
    protected $primaryKey = 'id';
    protected $fillable = ['date_location', 'client_id', 'date_retour','voiture_id'];
}


