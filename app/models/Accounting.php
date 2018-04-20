<?php
namespace App\models;
use Illuminate\Database\Eloquent\Model;
class Accounting extends Model {
	protected $table = 'accounting';
	protected $fillable = ['name','type','amount','date','description'];
}
