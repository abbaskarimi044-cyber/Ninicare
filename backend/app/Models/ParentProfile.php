<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentProfile extends Model
{
    use HasFactory;

    /**
     * فیلدهای قابل مقداردهی
     */
    protected $fillable = [
        'user_id',
        'father_name',
        'mother_name',
        'father_mobile',
        'mother_mobile',
        'email',
        'national_code',
        'city',
        'address',
    ];

    /**
     * ارتباط با کاربر
     * هر پروفایل والد متعلق به یک User است.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * ارتباط با فرزندان
     * هر والد می‌تواند چند کودک داشته باشد.
     */
    public function children()
    {
        return $this->hasMany(Child::class);
    }
}
