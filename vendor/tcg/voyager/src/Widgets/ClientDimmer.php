<?php

namespace TCG\Voyager\Widgets;

use Illuminate\Support\Facades\Auth;
use App\Models\Clients;
use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class ClientDimmer extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
      
        $count = Clients::count();
        $string = trans_choice('voyager::dimmer.note', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-people',
            'title'  => "{$count} Clients",
            'text'   => __('Vous avez '.$count.' Clients dans votre base de données. Cliquez sur le bouton ci-dessous pour voir tous les Clients.
            ', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => "afficher tout les Clients",
                'link' => route('voyager.clients.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/01.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', Voyager::model('User'));
    }
}
