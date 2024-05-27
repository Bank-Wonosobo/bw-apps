<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class HasilSlik extends Model
{
    use HasFactory;

    protected $keyTypr = 'string';
    public $incrementing = false;
    protected $table = 'hasil_slik';
    protected $guarded = [];

    public static function boot() {
        parent::boot();

        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });
    }
}
