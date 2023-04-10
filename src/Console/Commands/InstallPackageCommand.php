<?php

namespace Laravelir\Cacheable\Console\Commands;

use Illuminate\Console\Command;

class InstallPackageCommand extends Command
{
    protected $signature = 'cacheable:install';

    protected $description = 'Install the cacheable Cacheable';

    public function handle()
    {
        $this->line("\t... Welcome To Cacheable Installer ...");


        // if (!empty(File::glob(database_path('migrations\*_create_cacheables_tables.php')))) {

        //     $list  = File::glob(database_path('migrations\*_create_cacheables_tables.php'));
        //     collect($list)->each(function ($item) {
        //         File::delete($item);
        //     });

        //     $this->publishMigration();
        // } else {
        //     $this->publishMigration();
        // }

        // if (!empty(File::glob(database_path('migrations\*_create_cacheable_table.php')))) {
        //     $list  = File::glob(database_path('migrations\*_create_cacheable_table.php'));
        //     collect($list)->each(function ($item) {
        //         File::delete($item);
        //         $this->warn("Deleted: " . $item);
        //     });
        //     $this->publishMigration();
        // } else {
        //     $this->publishMigration();
        // }

        $this->info("Cacheable Successfully Installed.\n");
        $this->info("\t\tGood Luck.");
    }

    //       //config
    //       if (File::exists(config_path('cacheable.php'))) {
    //         $confirm = $this->confirm("cacheable.php already exist. Do you want to overwrite?");
    //         if ($confirm) {
    //             $this->publishConfig();
    //             $this->info("config overwrite finished");
    //         } else {
    //             $this->info("skipped config publish");
    //         }
    //     } else {
    //         $this->publishConfig();
    //         $this->info("config published");
    //     }

    //     //assets
    //     if (File::exists(public_path('cacheable'))) {
    //         $confirm = $this->confirm("cacheable directory already exist. Do you want to overwrite?");
    //         if ($confirm) {
    //             $this->publishAssets();
    //             $this->info("assets overwrite finished");
    //         } else {
    //             $this->info("skipped assets publish");
    //         }
    //     } else {
    //         $this->publishAssets();
    //         $this->info("assets published");
    //     }

    //     //migration
    //     if (File::exists(database_path("migrations/$migrationFile"))) {
    //         $confirm = $this->confirm("migration file already exist. Do you want to overwrite?");
    //         if ($confirm) {
    //             $this->publishMigration();
    //             $this->info("migration overwrite finished");
    //         } else {
    //             $this->info("skipped migration publish");
    //         }
    //     } else {
    //         $this->publishMigration();
    //         $this->info("migration published");
    //     }

    //     $this->call('migrate');
    // }

    // private function publishConfig()
    // {
    //     $this->call('vendor:publish', [
    //         '--provider' => "Laravelir\\Cacheable\\Providers\\CacheableServiceProvider",
    //         '--tag'      => 'cacheable-config',
    //         '--force'    => true
    //     ]);
    // }

    // private function publishMigration()
    // {
    //     $this->call('vendor:publish', [
    //         '--provider' => "Laravelir\\Cacheable\\Providers\\CacheableServiceProvider",
    //         '--tag'      => 'cacheable-migrations',
    //         '--force'    => true
    //     ]);
    // }

    // private function publishAssets()
    // {
    //     $this->call('vendor:publish', [
    //         '--provider' => "Laravelir\\Cacheable\\Providers\\CacheableServiceProvider",
    //         '--tag'      => 'cacheable-assets',
    //         '--force'    => true
    //     ]);
    // }
}
