<?php

use Illuminate\Database\Seeder;

class BackupDataRowsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_rows')->delete();
        
        \DB::table('data_rows')->insert(array (
            0 => 
            array (
                'id' => 1,
                'data_type_id' => 1,
                'field' => 'id',
                'type' => 'number',
                'display_name' => 'ID',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'data_type_id' => 1,
                'field' => 'name',
                'type' => 'text',
                'display_name' => 'Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'data_type_id' => 1,
                'field' => 'email',
                'type' => 'text',
                'display_name' => 'Email',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'data_type_id' => 1,
                'field' => 'password',
                'type' => 'password',
                'display_name' => 'Password',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => '{}',
                'order' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                'data_type_id' => 1,
                'field' => 'remember_token',
                'type' => 'text',
                'display_name' => 'Remember Token',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 5,
            ),
            5 => 
            array (
                'id' => 6,
                'data_type_id' => 1,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 6,
            ),
            6 => 
            array (
                'id' => 7,
                'data_type_id' => 1,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 7,
            ),
            7 => 
            array (
                'id' => 8,
                'data_type_id' => 1,
                'field' => 'avatar',
                'type' => 'image',
                'display_name' => 'Avatar',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 8,
            ),
            8 => 
            array (
                'id' => 9,
                'data_type_id' => 1,
                'field' => 'user_belongsto_role_relationship',
                'type' => 'relationship',
                'display_name' => 'Role',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsTo","column":"role_id","key":"id","label":"display_name","pivot_table":"roles","pivot":"0","taggable":"0"}',
                'order' => 10,
            ),
            9 => 
            array (
                'id' => 10,
                'data_type_id' => 1,
                'field' => 'user_belongstomany_role_relationship',
                'type' => 'relationship',
                'display_name' => 'Roles',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsToMany","column":"id","key":"id","label":"display_name","pivot_table":"user_roles","pivot":"1","taggable":"0"}',
                'order' => 11,
            ),
            10 => 
            array (
                'id' => 11,
                'data_type_id' => 1,
                'field' => 'settings',
                'type' => 'hidden',
                'display_name' => 'Settings',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 12,
            ),
            11 => 
            array (
                'id' => 12,
                'data_type_id' => 2,
                'field' => 'id',
                'type' => 'number',
                'display_name' => 'ID',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'data_type_id' => 2,
                'field' => 'name',
                'type' => 'text',
                'display_name' => 'Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => NULL,
                'order' => 2,
            ),
            13 => 
            array (
                'id' => 14,
                'data_type_id' => 2,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 3,
            ),
            14 => 
            array (
                'id' => 15,
                'data_type_id' => 2,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 4,
            ),
            15 => 
            array (
                'id' => 16,
                'data_type_id' => 3,
                'field' => 'id',
                'type' => 'number',
                'display_name' => 'ID',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'data_type_id' => 3,
                'field' => 'name',
                'type' => 'text',
                'display_name' => 'Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => NULL,
                'order' => 2,
            ),
            17 => 
            array (
                'id' => 18,
                'data_type_id' => 3,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 3,
            ),
            18 => 
            array (
                'id' => 19,
                'data_type_id' => 3,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 4,
            ),
            19 => 
            array (
                'id' => 20,
                'data_type_id' => 3,
                'field' => 'display_name',
                'type' => 'text',
                'display_name' => 'Display Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => NULL,
                'order' => 5,
            ),
            20 => 
            array (
                'id' => 21,
                'data_type_id' => 1,
                'field' => 'role_id',
                'type' => 'text',
                'display_name' => 'Role',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 9,
            ),
            21 => 
            array (
                'id' => 22,
                'data_type_id' => 4,
                'field' => 'id',
                'type' => 'text',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'data_type_id' => 4,
                'field' => 'name',
                'type' => 'text',
                'display_name' => 'Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 2,
            ),
            23 => 
            array (
                'id' => 24,
                'data_type_id' => 4,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 0,
                'delete' => 1,
                'details' => '{}',
                'order' => 3,
            ),
            24 => 
            array (
                'id' => 25,
                'data_type_id' => 4,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 4,
            ),
            25 => 
            array (
                'id' => 26,
                'data_type_id' => 5,
                'field' => 'id',
                'type' => 'text',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 1,
            ),
            26 => 
            array (
                'id' => 27,
                'data_type_id' => 5,
                'field' => 'name',
                'type' => 'text',
                'display_name' => 'Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 2,
            ),
            27 => 
            array (
                'id' => 28,
                'data_type_id' => 5,
                'field' => 'categories_id',
                'type' => 'text',
                'display_name' => 'Categories Id',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 3,
            ),
            28 => 
            array (
                'id' => 29,
                'data_type_id' => 5,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 0,
                'delete' => 1,
                'details' => '{}',
                'order' => 4,
            ),
            29 => 
            array (
                'id' => 30,
                'data_type_id' => 5,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 5,
            ),
            30 => 
            array (
                'id' => 31,
                'data_type_id' => 5,
                'field' => 'sub_category_belongsto_category_relationship',
                'type' => 'relationship',
                'display_name' => 'categories',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"model":"App\\\\Category","table":"categories","type":"belongsTo","column":"categories_id","key":"id","label":"name","pivot_table":"categories","pivot":"0","taggable":"0"}',
                'order' => 6,
            ),
            31 => 
            array (
                'id' => 32,
                'data_type_id' => 6,
                'field' => 'id',
                'type' => 'text',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 1,
            ),
            32 => 
            array (
                'id' => 33,
                'data_type_id' => 6,
                'field' => 'name',
                'type' => 'text',
                'display_name' => 'Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 2,
            ),
            33 => 
            array (
                'id' => 34,
                'data_type_id' => 6,
                'field' => 'sub_categories_id',
                'type' => 'text',
                'display_name' => 'Sub Categories Id',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 3,
            ),
            34 => 
            array (
                'id' => 35,
                'data_type_id' => 6,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 0,
                'delete' => 1,
                'details' => '{}',
                'order' => 4,
            ),
            35 => 
            array (
                'id' => 36,
                'data_type_id' => 6,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 5,
            ),
            36 => 
            array (
                'id' => 37,
                'data_type_id' => 6,
                'field' => 'type_belongsto_sub_category_relationship',
                'type' => 'relationship',
                'display_name' => 'sub_categories',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"model":"App\\\\SubCategory","table":"sub_categories","type":"belongsTo","column":"sub_categories_id","key":"id","label":"name","pivot_table":"categories","pivot":"0","taggable":"0"}',
                'order' => 6,
            ),
            37 => 
            array (
                'id' => 38,
                'data_type_id' => 7,
                'field' => 'id',
                'type' => 'text',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 1,
            ),
            38 => 
            array (
                'id' => 39,
                'data_type_id' => 7,
                'field' => 'name',
                'type' => 'text',
                'display_name' => 'Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 2,
            ),
            39 => 
            array (
                'id' => 40,
                'data_type_id' => 7,
                'field' => 'rgb',
                'type' => 'text',
                'display_name' => 'Rgb',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 3,
            ),
            40 => 
            array (
                'id' => 41,
                'data_type_id' => 7,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 0,
                'delete' => 1,
                'details' => '{}',
                'order' => 4,
            ),
            41 => 
            array (
                'id' => 42,
                'data_type_id' => 7,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 5,
            ),
            42 => 
            array (
                'id' => 43,
                'data_type_id' => 8,
                'field' => 'id',
                'type' => 'text',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 1,
            ),
            43 => 
            array (
                'id' => 44,
                'data_type_id' => 8,
                'field' => 'size',
                'type' => 'text',
                'display_name' => 'Size',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 2,
            ),
            44 => 
            array (
                'id' => 45,
                'data_type_id' => 8,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 0,
                'delete' => 1,
                'details' => '{}',
                'order' => 3,
            ),
            45 => 
            array (
                'id' => 46,
                'data_type_id' => 8,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 4,
            ),
            46 => 
            array (
                'id' => 47,
                'data_type_id' => 9,
                'field' => 'id',
                'type' => 'text',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 1,
            ),
            47 => 
            array (
                'id' => 48,
                'data_type_id' => 9,
                'field' => 'quantity',
                'type' => 'text',
                'display_name' => 'Quantity',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 2,
            ),
            48 => 
            array (
                'id' => 49,
                'data_type_id' => 9,
                'field' => 'item_id',
                'type' => 'text',
                'display_name' => 'Item Id',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 3,
            ),
            49 => 
            array (
                'id' => 50,
                'data_type_id' => 9,
                'field' => 'color_id',
                'type' => 'text',
                'display_name' => 'Color Id',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 4,
            ),
            50 => 
            array (
                'id' => 51,
                'data_type_id' => 9,
                'field' => 'size_id',
                'type' => 'text',
                'display_name' => 'Size Id',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 5,
            ),
            51 => 
            array (
                'id' => 52,
                'data_type_id' => 9,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 0,
                'delete' => 1,
                'details' => '{}',
                'order' => 6,
            ),
            52 => 
            array (
                'id' => 53,
                'data_type_id' => 9,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 7,
            ),
            53 => 
            array (
                'id' => 54,
                'data_type_id' => 9,
                'field' => 'quantity_belongsto_item_relationship',
                'type' => 'relationship',
                'display_name' => 'items',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"model":"App\\\\Item","table":"items","type":"belongsTo","column":"item_id","key":"id","label":"name","pivot_table":"categories","pivot":"0","taggable":null}',
                'order' => 8,
            ),
            54 => 
            array (
                'id' => 55,
                'data_type_id' => 9,
                'field' => 'quantity_belongsto_color_relationship',
                'type' => 'relationship',
                'display_name' => 'colors',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"model":"App\\\\Color","table":"colors","type":"belongsTo","column":"color_id","key":"id","label":"name","pivot_table":"categories","pivot":"0","taggable":null}',
                'order' => 9,
            ),
            55 => 
            array (
                'id' => 56,
                'data_type_id' => 9,
                'field' => 'quantity_belongsto_size_relationship',
                'type' => 'relationship',
                'display_name' => 'sizes',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"model":"App\\\\Size","table":"sizes","type":"belongsTo","column":"size_id","key":"id","label":"size","pivot_table":"categories","pivot":"0","taggable":null}',
                'order' => 10,
            ),
            56 => 
            array (
                'id' => 57,
                'data_type_id' => 10,
                'field' => 'id',
                'type' => 'text',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 1,
            ),
            57 => 
            array (
                'id' => 58,
                'data_type_id' => 10,
                'field' => 'name',
                'type' => 'text',
                'display_name' => 'Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 2,
            ),
            58 => 
            array (
                'id' => 59,
                'data_type_id' => 10,
                'field' => 'price',
                'type' => 'number',
                'display_name' => 'Price',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 3,
            ),
            59 => 
            array (
                'id' => 60,
                'data_type_id' => 10,
                'field' => 'photo',
                'type' => 'multiple_images',
                'display_name' => 'Photo',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 4,
            ),
            60 => 
            array (
                'id' => 61,
                'data_type_id' => 10,
                'field' => 'status',
                'type' => 'checkbox',
                'display_name' => 'Status',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 5,
            ),
            61 => 
            array (
                'id' => 62,
                'data_type_id' => 10,
                'field' => 'sub_categories_id',
                'type' => 'text',
                'display_name' => 'Sub Categories Id',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 6,
            ),
            62 => 
            array (
                'id' => 63,
                'data_type_id' => 10,
                'field' => 'brand_id',
                'type' => 'text',
                'display_name' => 'Brand Id',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 7,
            ),
            63 => 
            array (
                'id' => 64,
                'data_type_id' => 10,
                'field' => 'vendor_id',
                'type' => 'text',
                'display_name' => 'Vendor Id',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 8,
            ),
            64 => 
            array (
                'id' => 65,
                'data_type_id' => 10,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 0,
                'delete' => 1,
                'details' => '{}',
                'order' => 9,
            ),
            65 => 
            array (
                'id' => 66,
                'data_type_id' => 10,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 10,
            ),
            66 => 
            array (
                'id' => 67,
                'data_type_id' => 10,
                'field' => 'item_hasmany_quantity_relationship',
                'type' => 'relationship',
                'display_name' => 'quantities',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"model":"App\\\\Quantity","table":"quantities","type":"hasMany","column":"item_id","key":"id","label":"quantity","pivot_table":"items","pivot":"0","taggable":"0"}',
                'order' => 11,
            ),
            67 => 
            array (
                'id' => 68,
                'data_type_id' => 10,
                'field' => 'item_belongsto_sub_category_relationship',
                'type' => 'relationship',
                'display_name' => 'sub_categories',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{"model":"App\\\\SubCategory","table":"sub_categories","type":"belongsTo","column":"sub_categories_id","key":"id","label":"name","pivot_table":"categories","pivot":"0","taggable":"0"}',
                'order' => 12,
            ),
            68 => 
            array (
                'id' => 69,
                'data_type_id' => 1,
                'field' => 'email_verified_at',
                'type' => 'timestamp',
                'display_name' => 'Email Verified At',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 6,
            ),
            69 => 
            array (
                'id' => 70,
                'data_type_id' => 1,
                'field' => 'contact',
                'type' => 'number',
                'display_name' => 'Contact',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 8,
            ),
            70 => 
            array (
                'id' => 71,
                'data_type_id' => 1,
                'field' => 'point',
                'type' => 'number',
                'display_name' => 'Point',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 9,
            ),
            71 => 
            array (
                'id' => 72,
                'data_type_id' => 10,
                'field' => 'highlight',
                'type' => 'checkbox',
                'display_name' => 'Highlight',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 6,
            ),
        ));
        
        
    }
}