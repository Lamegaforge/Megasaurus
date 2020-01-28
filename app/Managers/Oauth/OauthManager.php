<?php

namespace App\Managers\Oauth;

use Illuminate\Support\Manager;
use App\Managers\Oauth\Contracts\Driver;

class OauthManager extends Manager
{
    public function createHelixDriver()
    {
        $config = $this->app['config']['manager']['oauth']['drivers']['helix'];

        $driver = new Drivers\Helix($config);

        return $this->getRepository($driver);
    }
   
    public function getRepository(Driver $driver)
    {
        return new Repository($driver);
    }

    public function getDefaultDriver()
    {
        return $this->app['config']['manager']['oauth']['default_driver'];
    }
}
