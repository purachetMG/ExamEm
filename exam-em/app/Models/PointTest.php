<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointTest extends Model
{
    use HasFactory;

    protected $fillable = [
        'point',
        'user_id',
        'sub_test_id',
    ];

    public function subTest()
    {
        return $this->belongsTo(SubTest::class);
    }
}
