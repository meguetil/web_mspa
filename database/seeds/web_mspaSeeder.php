<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Permisos\Models\Role;
use App\Permisos\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class web_mspaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //truncate de foreignkeys
        DB::statement("SET foreign_key_checks=0");
            DB::table('role_user')->truncate();
            DB::table('permission_role')->truncate();
            Permission::truncate();
            Role::truncate();
        DB::statement("SET foreign_key_checks=1");

        // Creacion de usuario (Administrador)
        $UserAdmin = User::where('email','admin@mspa.cl')->first();
        if($UserAdmin){
            $UserAdmin->delete();
        }
        $UserAdmin = User::create([
            'name' => 'Admin',
            'email' =>'admin@mspa.cl',
            'password' => hash::make('admin'),
            'rol' => ('Administrador')

        ]);

        //Creacion del Rol de Administración
        $rolAdmin = Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'description' => 'Todos los privilegios',
            'full-access' => 'yes'

        ]);

    // Se añade rol de administración a usuario Administrador
        $UserAdmin->Roles()->Sync([$rolAdmin->id]);

    // Creacion de arreglo para almacenar varios permisos y luego linkearlo a un rol
        $permissions_all = [];

    //Creacion de permisos asociados a roles
        //Listar Rol
        $permission = Permission::create([
            'name' => 'List Role' ,
            'slug' => 'role.list' ,
            'description' => 'Permiso para listar un Rol'
        ]);
        $permissions_all = $permission->id; //Se añade id de permiso recién creado al arreglo.
        //Mostrar Rol
        $permission = Permission::create([
            'name' => 'Show Role' ,
            'slug' => 'role.show' ,
            'description' => 'Permiso para visualizar un Rol'
        ]);
        $permissions_all = $permission->id; //Se añade id de permiso recién creado al arreglo.
        //Crear Rol
        $permission = Permission::create([
            'name' => 'Create Role' ,
            'slug' => 'role.create' ,
            'description' => 'Permiso para crear un Rol'
        ]);
        $permissions_all = $permission->id; //Se añade id de permiso recién creado al arreglo.
        //Editar Rol
        $permission = Permission::create([
            'name' => 'Edit Role' ,
            'slug' => 'role.edit' ,
            'description' => 'Permiso para editar un Rol'
        ]);
        $permissions_all = $permission->id; //Se añade id de permiso recién creado al arreglo.
        //Eliminar Rol
        $permission = Permission::create([
            'name' => 'Delete Role' ,
            'slug' => 'role.delete' ,
            'description' => 'Permiso para eliminar un Rol'
        ]);
        $permissions_all = $permission->id; //Se añade id de permiso recién creado al arreglo.

    //Creacion de permisos asociados a usuarios
        //Listar Rol
        $permission = Permission::create([
            'name' => 'List User' ,
            'slug' => 'user.list' ,
            'description' => 'Permiso para listar un Usuario'
        ]);
        $permissions_all = $permission->id; //Se añade id de permiso recién creado al arreglo.
        //Mostrar Rol
        $permission = Permission::create([
            'name' => 'Show User' ,
            'slug' => 'user.show' ,
            'description' => 'Permiso para visualizar un Usuario'
        ]);
        $permissions_all = $permission->id; //Se añade id de permiso recién creado al arreglo.
        //Crear Rol
        $permission = Permission::create([
            'name' => 'Create User' ,
            'slug' => 'user.create' ,
            'description' => 'Permiso para crear un Usuario'
        ]);
        $permissions_all = $permission->id; //Se añade id de permiso recién creado al arreglo.
        //Editar Rol
        $permission = Permission::create([
            'name' => 'Edit User' ,
            'slug' => 'user.edit' ,
            'description' => 'Permiso para editar un Usuario'
        ]);
        $permissions_all = $permission->id; //Se añade id de permiso recién creado al arreglo.
        //Eliminar Rol
        $permission = Permission::create([
            'name' => 'Delete User' ,
            'slug' => 'user.delete' ,
            'description' => 'Permiso para eliminar un Usuario'
        ]);
        $permissions_all = $permission->id; //Se añade id de permiso recién creado al arreglo.

    // Se añade permisos creados a rol de administración.
        $rolAdmin->Permissions()->Sync($permissions_all);
    }
}
