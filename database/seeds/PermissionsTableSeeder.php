<?php

use Illuminate\Database\Seeder;

use App\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'access-deactivated-clips',
            'update-clip-visibility',
        ];

        foreach ($permissions as $permission) {
            
            factory(Permission::class)->create([
                'name' => $permission,
            ]);
        }
    }
}
