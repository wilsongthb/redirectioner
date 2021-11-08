<?php

namespace App\Models;

use App\Traits\HasHashColumn;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
  use HasFactory, HasHashColumn;
  protected $hashLength = 7;

  public function generateShortLink() {
    return url('') . '/' . $this->hash;
  }
}
