<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.ensure_production_settings_command' shared service.

$this->privates['doctrine.ensure_production_settings_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand();

$instance->setName('doctrine:ensure-production-settings');

return $instance;
