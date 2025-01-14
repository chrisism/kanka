<?php

namespace App\Http\Resources;

use App\Models\Creature;

class CreatureResource extends EntityResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        /** @var Creature $model */
        $model = $this->resource;
        $locationIDs = $model->locations()->pluck('locations.id');

        return $this->entity([
            'type' => $model->type,
            'creature_id' => $model->creature_id,
            'locations' => $locationIDs
        ]);
    }
}
