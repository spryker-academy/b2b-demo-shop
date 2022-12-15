<?php

namespace Pyz\Yves\TrainingPage\Plugin\Router;

use Spryker\Yves\Router\Plugin\RouteProvider\AbstractRouteProviderPlugin;
use Spryker\Yves\Router\Route\RouteCollection;

class TrainingPageRouteProviderPlugin extends AbstractRouteProviderPlugin
{
    public const ROUTE_NAME_TRAINING_ANTELOPE_NAME = 'training/antelope/_name_';

    public function addRoutes(RouteCollection $routeCollection): RouteCollection
    {
        $routeCollection = $this->addTrainingAntelopeGetRoute($routeCollection);

        return $routeCollection;
    }

    private function addTrainingAntelopeGetRoute(RouteCollection $routeCollection): RouteCollection
    {
        // TODO: Replace the placeholders for module and controller name with the right naming
        // based on src/Pyz/Yves/TrainingPage/Controller/AntelopeController.php::getAction()
        $route = $this->buildRoute('training/antelope/{name}', '<module-name>', '<controller-name>', 'getAction');
        $route = $route->setMethods(['GET']);
        $routeCollection->add(static::ROUTE_NAME_TRAINING_ANTELOPE_NAME, $route);

        return $routeCollection;
    }
}
