<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class IpAddress extends Model
{
  use HasFactory;

  public static function getIdByAddress(string $address)
  {
    $id =  IpAddress::where('ip', $address)->min('id');
    if (!isset($id)) {
      $id = DB::table('ip_addresses')->insertGetId(['ip' => $address]);
    }
    return $id;
  }
}
