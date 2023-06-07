<?php

namespace Pyz\Yves\AntelopePage\Plugin\Router;

use Spryker\Yves\Router\Plugin\RouteProvider\AbstractRouteProviderPlugin;
use Spryker\Yves\Router\Route\RouteCollection;

class AntelopePageRouteProviderPlugin extends AbstractRouteProviderPlugin
{
    public const ANTELOPE_INDEX = 'antelope-index';

    /**
     * @inheritDoc
     */
    public function addRoutes(RouteCollection $routeCollection): RouteCollection
    {
        $routeCollection = $this->addAntelopeIndexRoute($routeCollection);

        return $routeCollection;
    }

    /**
     * @param \Spryker\Yves\Router\Route\RouteCollection $routeCollection
     *
     * @return \Spryker\Yves\Router\Route\RouteCollection
     */
    private function addAntelopeIndexRoute(RouteCollection $routeCollection): RouteCollection
    {
        // TODO-1: Add the right module name and controller name to the `buildRoute` method
        // Hint-1: The controller we want to use is defined in `src/Pyz/Yves/AntelopePage/Controller/IndexController.php`
        $route = $this->buildRoute('/antelope/{name}', 'TODO-1A', 'TODO-1B', 'indexAction');
        $route = $route->setMethods(['GET']);
        $routeCollection->add(static::ANTELOPE_INDEX, $route);

        return $routeCollection;
    }
}
