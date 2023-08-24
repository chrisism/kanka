<?php

namespace App\Http\Controllers\Campaign\Members;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use App\Models\CampaignUser;

class RoleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index(Campaign $campaign, CampaignUser $campaignUser)
    {
        $this->authorize('members', $campaign);

        $users = $campaign
            ->members()
            ->sort(request()->only(['o', 'k']), ['id' => 'desc'])
            ->with(['user', 'campaign', 'user.campaignRoles', 'user.campaignRoleUser'])
            ->paginate();

        $invitations = $campaign
            ->invites()
            ->where('is_active', true)
            ->with('role')
            ->paginate();

        $roles = $campaign->roles->where('is_public', false)->all();
        return view('campaigns.members.update', [
            'campaign' => $campaign,
            'roles' => $roles,
            'campaignUser' => $campaignUser,
            'invitations' => $invitations,
        ]);
    }

}
