<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkVisit extends Model
{
  use HasFactory;
  public $timestamps = false;
  protected $table = 'link_visits';
}
