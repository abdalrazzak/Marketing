<?php
namespace  App\Presenters;
use Laracasts\Presenter\Presenter;

/**
 * Created by PhpStorm.
 * User: abc horizon
 * Date: 10/12/2017
 * Time: 6:47 PM
 */
class UserPresenter extends Presenter
{

    public function fullName()
    {
        return $this->first_name . ' '. $this->last_name;
    }
}