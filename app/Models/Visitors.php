<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitors extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'ip_address', 'date_visitors'
    ];
    protected $primaryKey = 'id_visitors';
 	protected $table = 'tbl_visitors';
}
