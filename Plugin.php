<?php namespace Octobro\MailLog;

use Backend;
use System\Classes\PluginBase;

/**
 * Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'MailLog',
            'description' => 'No description provided yet...',
            'author'      => 'Octobro',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Octobro\MailLog\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any backend permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        // return []; // Remove this line to activate

        return [
            'octobro.maillog.manage' => [
                'tab' => 'MailLog',
                'label' => 'Manage Mail Log'
            ],
        ];
    }

    /**
     * Registers backend navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        // return []; // Remove this line to activate

        return [
            'maillog' => [
                'label'       => 'Mail Log',
                'url'         => Backend::url('octobro/maillog/logs'),
                'icon'        => 'icon-paper-plane-o',
                'permissions' => ['octobro.maillog.*'],
                'order'       => 500,
                'sideMenu'    => [
                    'logs' => [
                        'label'       => 'Mail Log',
                        'url'         => Backend::url('octobro/maillog/logs'),
                        'icon'        => 'icon-paper-plane-o',
                        'permissions' => ['octobro.maillog.*'],
                        'order'       => 500
                    ]
                ]
            ],
        ];
    }
}
