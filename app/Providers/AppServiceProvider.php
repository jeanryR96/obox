<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use Illuminate\Support\Facades\{Auth, Schema};
// use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        Schema::defaultStringLength(191);
        $events->listen(BuildingMenu::class,function(BuildingMenu $event){
            //$role = Auth::user()->name;
            //$event->menu->add('LOGIN AS : '.strtoupper($role));
            $event->menu->add(
                /**[
                    'type'         => 'navbar-search',
                    'text'         => 'search',
                    'topnav_right' => true,
                ],
                [
                    'type'         => 'fullscreen-widget',
                    'topnav_right' => true,
                ], */
                [
                    'text'      => 'Dashboard',
                    'url'       => 'home',
                    'icon'      => 'fas fa-fw fa-tachometer-alt',
                ],

                ['header'       => 'FORMS'],
                [
                    'text'      => 'Risiko Kredit',
                    'icon'      => 'fas fa-fw fa-balance-scale-right',
                    'submenu'   => [
                        [
                            'text'          => 'Form ~ CR006-A',
                            'url'           => '/kredit/Form/CR006A',
                            'icon_color'    => 'blue',
                        ],
                    
                        [
                            'text'          => 'Form ~ CR007-A',
                            'url'           => '/kredit/Form/CR007A',
                            'icon_color'    => 'blue',
                        ],
                    
                        [
                            'text'          => 'Form ~ CR008-A',
                            'url'           => '/kredit/Form/CR008A',
                            'icon_color'    => 'blue',
                        ],
                     
                        [
                            'text'          => 'Form ~ CR009-A',
                            'url'           => '/kredit/Form/CR009A',
                            'icon_color'    => 'blue',
                        ],
                    ],
                ],
                [
                    'text'  => 'Risiko Operational',
                    'icon'  => 'fas fa-fw fa-compact-disc',
                    'submenu'   => [
                        [
                            'text'          => 'Form ~ OP001-A',
                            'url'           => 'operasional/Form/OP001A',
                            'icon_color'    => 'yellow'
                        ],
                        
                        [
                            'text'          => 'Form ~ OP002-A',
                            'url'           => 'operasional/Form/OP002A',
                            'icon_color'    => 'yellow'
                        ],
                       
                        [
                            'text'          => 'Form ~ OP003-A',
                            'url'           => 'operasional/Form/OP003A',
                            'icon_color'    => 'yellow'
                        ],
                    ],
                ],
                [
                    'text'  => 'Risiko Likuiditas',
                    'icon'  => 'fas fa-fw fa-stream',
                    'submenu'   => [
                        [
                            'text'          => 'Form ~ LQ003-A',
                            'url'           => 'likuiditas/form/LQ003A',
                            'icon_color'    => 'success',
                        ],
                        [
                            'text'          => 'Form ~ LQ004-A',
                            'url'           => 'likuiditas/form/LQ004A',
                            'icon_color'    => 'success',
                        ],
                        [
                            'text'          => 'Form ~ LQ005-A',
                            'url'           => 'likuiditas/form/LQ005A',
                            'icon_color'    => 'success',
                        ],
                        [
                            'text'          => 'Form ~ LQ006-A',
                            'url'           => 'likuiditas/form/LQ006A',
                            'icon_color'    => 'success',
                        ],
                    ],
                ],
                [
                    'header'  => 'Data Add-Hoc'
                ],
                [
                    'text'          => 'Form ~ LL001UN-A',
                    'url'           => '#',
                    'icon_color'    => 'info'
                ],
                [
                    'header'    => 'REFERENSI'
                ],
                [
                    'text'      => 'Table Referensi',
                    'url'       => 'referensi/sandi',
                    'icon'      => 'fas fa-fw fa-table'
                ],
            );
        });
    }
}
