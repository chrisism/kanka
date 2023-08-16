<?php

namespace App\Http\Controllers\Entity;

use App\Exceptions\TranslatableException;
use App\Http\Controllers\Controller;
use App\Http\Requests\MoveEntityRequest;
use App\Models\Campaign;
use App\Models\Entity;
use App\Services\Entity\MoveService;
use App\Services\EntityService;
use App\Traits\GuestAuthTrait;
use Illuminate\Support\Facades\Auth;

class MoveController extends Controller
{
    /**
     * Guest Auth Trait
     */
    use GuestAuthTrait;

    protected MoveService $service;

    public function __construct(MoveService $service)
    {
        $this->service = $service;
    }

    /**
     * @param Entity $entity
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index(Campaign $campaign, Entity $entity)
    {
        $this->authorize('view', $entity->child);

        $campaigns = auth()->user()->moveCampaignList();
        $campaigns[0] = __('entities/move.fields.select_one');

        return view('entities.pages.move.index', compact(
            'campaign',
            'entity',
            'campaigns'
        ));
    }

    /**
     * @param MoveEntityRequest $request
     * @param Entity $entity
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function move(MoveEntityRequest $request, Campaign $campaign, Entity $entity)
    {
        $this->authorize('view', $entity->child);

        $copied = $request->filled('copy');
        try {
            $this->service
                ->entity($entity)
                ->campaign($campaign)
                ->user($request->user())
                ->to($request->get('campaign'))
                ->copy($copied)
                ->validate()
                ->process()
            ;

            return redirect()
                ->route($entity->pluralType() . '.index', $campaign)
                ->with('success_raw', __('entities/move.success' . ($copied ? '_copy' : null), ['name' => $entity->name, 'campaign' => $this->service->target()->name]));
        } catch (TranslatableException $ex) {
            return redirect()
                ->to($entity->url())
                ->with('error', __($ex->getMessage(), ['name' => $entity->name]));
        }
    }
}
