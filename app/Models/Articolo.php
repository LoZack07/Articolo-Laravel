<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Articolo extends Model
{
/**
* The table associated with the model.
*
* @var string
*/
protected $table = 'articoli';
/**
* The attributes that are mass assignable.
*
* @var array
*/
protected $fillable = ['nome','descrizione'];
public function getNome(){
return $this->attributes['nome'];
}
}