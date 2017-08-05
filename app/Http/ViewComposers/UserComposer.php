<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\User;

class UserComposer {

    public $userArray = [];

    /**
     * Create a user composer.
     *
     * @return void
     */
    public function __construct() {
        if (isset($_COOKIE['user_id'])) {
            $userObj = User::where('id', '=', $_COOKIE['user_id'])->first();

            if ($userObj) {
                $this->userArray = [
                    $userObj->id,
                    $userObj->group_id,
                    $userObj->first_name,
                    $userObj->last_name,
                    $userObj->email,
                    $userObj->bio,
                    $userObj->image,
                ];
            }
        }
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view) {
        $view->with('userArray', $this->userArray);
    }

}
