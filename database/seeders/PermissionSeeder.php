<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            // Dashboard read
            [
                'name'               => 'Dashboard Read',
                'slug'               => 'dashboard-read',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            // Dashboard read end
            // User management
            [
                'name'               => 'User Management Read',
                'slug'               => 'user-management-read',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            // User management end
            // Role
            [
                'name'               => 'Role read',
                'slug'               => 'role-read',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Role create',
                'slug'               => 'role-create',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Role edit',
                'slug'               => 'role-edit',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Role update',
                'slug'               => 'role-update',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Role delete',
                'slug'               => 'role-delete',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            // Role end
            // Permission
            [
                'name'               => 'Permission read',
                'slug'               => 'permission-read',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Permission create',
                'slug'               => 'permission-create',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Permission edit',
                'slug'               => 'permission-edit',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Permission update',
                'slug'               => 'permission-update',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Permission delete',
                'slug'               => 'permission-delete',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            // Permission end
           
            // Admin user
            [
                'name'               => 'Admin user read',
                'slug'               => 'admin-user-read',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Admin user create',
                'slug'               => 'admin-user-create',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Admin user edit',
                'slug'               => 'admin-user-edit',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Admin user update',
                'slug'               => 'admin-user-update',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Admin user delete',
                'slug'               => 'admin-user-delete',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            // Admin user end
           
            //categories management
            [
                'name'               => 'Categories management Read',
                'slug'               => 'categories-management-read',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            //category
            [
                'name'               => 'Category read',
                'slug'               => 'category-read',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Category create',
                'slug'               => 'category-create',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Category edit',
                'slug'               => 'category-edit',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Category update',
                'slug'               => 'category-update',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Category delete',
                'slug'               => 'category-delete',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            // Category end
             //Blog Management
            [
                'name'               => 'Blog Management Read',
                'slug'               => 'blog-management-read',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
             //Blog 
             [
                'name'               => 'Blog read',
                'slug'               => 'blog-read',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Blog create',
                'slug'               => 'blog-create',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Blog edit',
                'slug'               => 'blog-edit',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Blog update',
                'slug'               => 'blog-update',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Blog delete',
                'slug'               => 'blog-delete',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            // Blog end
            [
                'name'               => 'Portfolio Management Read',
                'slug'               => 'portfolio-management-read',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
             //Portfolio
             [
                'name'               => 'Portfolio read',
                'slug'               => 'portfolio-read',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Portfolio create',
                'slug'               => 'portfolio-create',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Portfolio edit',
                'slug'               => 'portfolio-edit',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Portfolio update',
                'slug'               => 'portfolio-update',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Portfolio delete',
                'slug'               => 'portfolio-delete',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            // Portfolio end
            //Content management
            [
                'name'               => 'JobPosition Management Read',
                'slug'               => 'jobposition-management-read',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            //JobPosition
            [
                'name'               => 'JobPosition read',
                'slug'               => 'jobposition-read',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'JobPosition create',
                'slug'               => 'jobposition-create',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'JobPosition edit',
                'slug'               => 'jobposition-edit',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'JobPositione update',
                'slug'               => 'jobposition-update',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'JobPosition delete',
                'slug'               => 'jobposition-delete',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            // JobPosition end
            //User settings management
            [
                'name'               => 'Review Management Read',
                'slug'               => 'review-management-read',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            
            //Review
            [
                'name'               => 'Review read',
                'slug'               => 'review-read',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Review create',
                'slug'               => 'review-create',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Review edit',
                'slug'               => 'review-edit',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Review update',
                'slug'               => 'review-update',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Review delete',
                'slug'               => 'review-delete',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            //Review ends
            [
                'name'               => 'Resume Management Read',
                'slug'               => 'resume-management-read',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            //resume
            [
                'name'               => 'Resume read',
                'slug'               => 'resume-read',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Resume create',
                'slug'               => 'resume-create',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Resume edit',
                'slug'               => 'resume-edit',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Resume update',
                'slug'               => 'resume-update',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Resume delete',
                'slug'               => 'resume-delete',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            //resume ends
           
            //Contact Management
            [
                'name'               => 'Contact Management Read',
                'slug'               => 'contact-management-read',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            //Contact start
            [
                'name'               => 'Contact read',
                'slug'               => 'contact-read',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Contact create',
                'slug'               => 'contact-create',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Contact edit',
                'slug'               => 'contact-edit',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Contact update',
                'slug'               => 'contact-update',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'name'               => 'Contact delete',
                'slug'               => 'contact-delete',
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            //Contact end

        ];

        Permission::insert($permissions);
    }
}
