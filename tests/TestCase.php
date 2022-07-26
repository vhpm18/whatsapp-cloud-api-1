<?php

namespace Sdkconsultoria\WhatsappCloudApi\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Sdkconsultoria\WhatsappCloudApi\ServiceProvider;
use Faker\Factory;

abstract class TestCase extends OrchestraTestCase
{
    protected $faker;

    public function setUp(): void
    {
        parent::setUp();
        $this->faker = Factory::create();
    }

    /**
     * @param  \Illuminate\Foundation\Application  $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            ServiceProvider::class,
        ];
    }

    /**
     * Ignore package discovery from.
     *
     * @return array
     */
    public function ignorePackageDiscoveriesFrom()
    {
        return [];
    }
}
