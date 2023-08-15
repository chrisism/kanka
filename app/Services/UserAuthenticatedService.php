<?php

namespace App\Services;

use App\Models\Campaign;
use App\Models\CampaignUser;
use App\User;

class UserAuthenticatedService
{
    /**
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function authenticated(User $user)
    {
        // If the user is login in from a 403 page, go there now first
        $redirectTo = session()->get('login_redirect');
        if (!empty($redirectTo)) {
            session()->remove('login_redirect');
            return redirect()->to($redirectTo);
        }
        return redirect()->route('home');
    }
}
