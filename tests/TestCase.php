<?php

namespace Kiukishenkaec\Supervisor\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Kiukishenkaec\Supervisor\SupervisorServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Kiukishenkaec\\Supervisor\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            SupervisorServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_supervisor_table.php.stub';
        $migration->up();
        */
    }
}
