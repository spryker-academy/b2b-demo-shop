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
        $route = $this->buildRoute('/antelope/{name}', 'AntelopePage', 'Index', 'indexAction');
        $route = $route->setMethods(['GET']);
        $routeCollection->add(static::ANTELOPE_INDEX, $route);

        return $routeCollection;
    }
}
