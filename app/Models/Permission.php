<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Permission extends Model
{
    use HasFactory,SoftDeletes;

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
     * > The `roles()` function returns a collection of all the roles that are associated with the
     * current permission.
     *
     * @return A collection of roles that are associated with the permission.
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'roles_permissions');
    }

    /**
     * This permission belongs to many users through the users_permissions table.
     *
     * @return A collection of permissions that user have.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'users_permissions');
    }
}
