<?php

namespace TCG\Voyager\Widgets;

use Illuminate\Support\Facades\Auth;
use App\Models\Notes;
use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class NoteDimmer extends AbstractWidget
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
      
        $count = Notes::count();
        $string = trans_choice('voyager::dimmer.note', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-receipt',
            'title'  => "{$count} Notes/Questions",
            'text'   => __('Vous avez '.$count.' Notes/Questions dans votre base de données. Cliquez sur le bouton ci-dessous pour voir tous les Notes/Questions.
            ', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => "afficher tout les Notes/Questions",
                'link' => route('voyager.notes.index'),
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
