<?php
namespace App\models;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model {

	protected $table = 'admission';
	protected $fillable = ['stdName','nationality','class','session','dob','photo','campus','keeping','fatherName','fatherCellNo','motherName','motherCellNo'];

}
