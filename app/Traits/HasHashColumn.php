<?php

namespace App\Traits;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

trait HasHashColumn
{
  protected function getHashColumnLength(): int
  {
    return $this->hashLength ?? 15;
  }

  public function makeHashAndSave()
  {
    $this->hash = $this->generateUniqueHash();
    $this->save();
  }

  protected function generateUniqueHash()
  {
    $hash = Str::random($this->getHashColumnLength());
    if (DB::table($this->getTable())->where('hash', $hash)->count()) {
      return $this->generateUniqueHash();
    }
    return $hash;
  }
}
