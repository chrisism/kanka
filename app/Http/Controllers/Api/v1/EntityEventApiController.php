<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Campaign;
use App\Models\Entity;
use App\Http\Requests\AddCalendarEvent as Request;
use App\Http\Resources\EntityEventResource as Resource;
use App\Models\EntityEvent;

class EntityEventApiController extends ApiController
{
    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index(Campaign $campaign, Entity $entity)
    {
        $this->authorize('access', $campaign);
        $this->authorize('view', $entity->child);
        return Resource::collection($entity->events()->paginate());
    }

    /**
     * @return Resource
     */
    public function show(Campaign $campaign, Entity $entity, EntityEvent $entityEvent)
    {
        $this->authorize('access', $campaign);
        $this->authorize('view', $entity->child);
        return new Resource($entityEvent);
    }

    /**
     * @return Resource
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function store(Request $request, Campaign $campaign, Entity $entity)
    {
        $this->authorize('access', $campaign);
        $this->authorize('update', $entity->child);
        $data = $request->all();
        $data['entity_id'] = $entity->id;
        $model = EntityEvent::create($data);
        return new Resource($model);
    }

    /**
     * @return Resource
     */
    public function update(Request $request, Campaign $campaign, Entity $entity, EntityEvent $entityEvent)
    {
        $this->authorize('access', $campaign);
        $this->authorize('update', $entity->child);
        $entityEvent->update($request->all());

        return new Resource($entityEvent);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(
        \Illuminate\Http\Request $request,
        Campaign $campaign,
        Entity $entity,
        EntityEvent $entityEvent
    ) {
        $this->authorize('access', $campaign);
        $this->authorize('update', $entity->child);
        $entityEvent->delete();

        return response()->json(null, 204);
    }
}
