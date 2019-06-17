<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        $this->call(BackupCategoriesTableSeeder::class);
        $this->call(BackupColorsTableSeeder::class);
        $this->call(BackupDataRowsTableSeeder::class);
        $this->call(BackupDataTypesTableSeeder::class);
        $this->call(BackupItemsTableSeeder::class);
        $this->call(BackupMenusTableSeeder::class);
        $this->call(BackupMenuItemsTableSeeder::class);
        $this->call(BackupPermissionsTableSeeder::class);
        $this->call(BackupPermissionRoleTableSeeder::class);
        $this->call(BackupQuantitiesTableSeeder::class);
        $this->call(BackupRolesTableSeeder::class);
        $this->call(BackupSettingsTableSeeder::class);
        $this->call(BackupSizesTableSeeder::class);
        $this->call(BackupSubCategoriesTableSeeder::class);
        $this->call(BackupTypesTableSeeder::class);
        $this->call(BackupUsersTableSeeder::class);
        $this->call(BackupDistrictsTableSeeder::class);
        $this->call(BackupShippingAddressesTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
