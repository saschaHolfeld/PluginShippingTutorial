<?php

namespace PluginShippingTutorial\Providers;

use Plenty\Modules\Order\Shipping\ServiceProvider\Services\ShippingServiceProviderService;
use Plenty\Plugin\ServiceProvider;

/**
 * Class ShippingTutorialServiceProvider
 * @package PluginShippingTutorial\Providers
 */
class ShippingTutorialServiceProvider extends ServiceProvider
{

	/**
	 * Register the service provider.
	 */
	public function register()
	{
		// add REST routes by registering a RouteServiceProvider if necessary
		//	     $this->getApplication()->register(ShippingTutorialRouteServiceProvider::class);
	}

	public function boot(ShippingServiceProviderService $shippingServiceProviderService)
	{

		$shippingServiceProviderService->registerShippingProvider(
				'PluginShippingTutorial',
				['de' => '*** Plenty shipping tutorial ***', 'en' => '*** Plenty shipping tutorial ***'],
				[
						'PluginShippingTutorial\\Controllers\\ShippingController@registerShipments',
						'PluginShippingTutorial\\Controllers\\ShippingController@deleteShipments',
				]);
	}
}

?>