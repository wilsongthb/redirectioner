<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserAgent extends Model
{
  use HasFactory;

  public static function getIdByContent(string $userAgent)
  {
    $md5UserAgent = md5($userAgent);
    $id = DB::table('user_agents')
      ->where('md5', $md5UserAgent)
      ->min('id');

    if (!isset($id)) {
      $id = DB::table('user_agents')->insertGetId([
        'user_agent' => $userAgent,
        'md5' => $md5UserAgent
      ]);
    }

    return $id;
  }
}
