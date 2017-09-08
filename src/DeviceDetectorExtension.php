<?php

namespace Bolt\Extension\PandaMadness\DeviceDetector;


use Bolt\Extension\SimpleExtension;
use Silex\Application;
use Mobile_Detect;

class DeviceDetectorExtension extends SimpleExtension
{
    protected function registerServices(Application $app)
    {
        $app['device-detector'] = $app->share(function($app) {
            return new Mobile_Detect();
        });
    }

    protected function registerTwigFunctions()
    {
        return [
            'is' => 'is',
            'isMobile' => 'isMobile',
            'isMobileOnly' => 'isMobileOnly',
            'isTablet' => 'isTablet',
            'isDesktop' => 'isDesktop',
        ];
    }

    public function is($key) {
        $app = $this->getContainer();

        return $app['device-detector']->is($key);
    }

    public function isMobile()
    {
        $app = $this->getContainer();

        return $app['device-detector']->isMobile();
    }

    public function isMobileOnly()
    {
        $app = $this->getContainer();

        return $app['device-detector']->isMobile() && !$app['device-detector']->isTablet();
    }

    public function isTablet()
    {
        $app = $this->getContainer();

        return $app['device-detector']->isTablet();
    }

    public function isDesktop()
    {
        $app = $this->getContainer();

        return ! $app['device-detector']->isMobile();
    }
}