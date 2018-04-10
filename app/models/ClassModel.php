<?php
namespace App\models;

use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model {
	 protected $table = 'Class';
	protected $fillable = ['name','code','description','combinePass'];

}
