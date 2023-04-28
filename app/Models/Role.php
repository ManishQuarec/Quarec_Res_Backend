<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Role extends Model
{
    use HasFactory,SoftDeletes;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
    ];

    /**
     * Update slug to convert from string to slug.
     *
     * @param $value Slug value
     */
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug(strip_tags($value));
    }

    /**
     * The `permissions()` function returns a collection of all the permissions that are associated
     * with the role.
     *
     * @return A collection of permissions
     */
    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'roles_permissions');
    }

    /**
     * > The `users()` function returns a collection of users that belong to the current role.
     *
     * @return A collection of users that belong to the role.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'users_roles');
    }
}
