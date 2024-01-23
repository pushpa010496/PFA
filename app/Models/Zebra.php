<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class Zebra extends Model
{
   protected $gaurded = ['id'];
}