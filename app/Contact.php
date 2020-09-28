<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Contact extends Model
{
  protected $table = 'contact';
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'nama', 'nohp', 'wa', 'alamat', 'ig'
  ];
}
