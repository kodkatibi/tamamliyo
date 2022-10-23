<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function policies()
    {
        return $this->hasMany(InsurancePolicy::class);
    }

    public function byTckn(int $tckn): Model|\Illuminate\Database\Eloquent\Builder
    {
        return self::query()->where(['tckn' => $tckn])->firstOrFail();
    }

}
