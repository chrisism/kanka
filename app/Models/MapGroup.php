<?php

namespace App\Models;

use App\Facades\CampaignLocalization;
use App\Models\Concerns\Blameable;
use App\Models\Concerns\Paginatable;
use App\Traits\VisibilityIDTrait;
use App\Models\Concerns\SortableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class MapGroup
 * @package App\Models
 *
 * @property int $id
 * @property int $map_id
 * @property string $name
 * @property int $position
 * @property boolean $is_shown
 *
 * @property Map $map
 *
 * @method static self|Builder ordered()
 */
class MapGroup extends Model
{
    use Blameable;
    use Paginatable;
    use SortableTrait;
    use VisibilityIDTrait;

    protected $sortable = [
        'name',
        'position',
    ];

    /** @var string[]  */
    protected $fillable = [
        'map_id',
        'name',
        'position',
        'visibility_id',
        'is_shown',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function map()
    {
        return $this->belongsTo(Map::class, 'map_id');
    }

    /**
     * @return Builder
     */
    public function scopeOrdered(Builder $query)
    {
        return $query
            ->orderByDesc('position')
            ->orderBy('name');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function markers()
    {
        return $this->hasMany(MapMarker::class, 'group_id');
    }

    /**
     */
    public function markerGroupHtml(): string
    {
        $data = [];
        /** @var MapMarker[] $markers */
        $markers = $this->markers()->with('entity', 'group')->get();
        foreach ($markers as $marker) {
            if ($marker->visible()) {
                $data[] = 'marker' . $marker->id;
            }
        }

        return implode(',', $data);
    }

    /**
     * Functions for the datagrid2
     */
    public function url(string $where): string
    {
        return 'maps.map_groups.' . $where;
    }
    public function routeParams(array $options = []): array
    {
        return $options + ['map' => $this->map_id, 'map_group' => $this->id];
    }

    /**
     * Patch an entity from the datagrid2 batch editing
     */
    public function patch(array $data): bool
    {
        return $this->updateQuietly($data);
    }

    /**
     * Override the get link
     */
    public function getLink(): string
    {
        $campaign = CampaignLocalization::getCampaign();
        return route('maps.map_groups.edit', [$campaign, 'map' => $this->map_id, $this->id]);
    }

    /**
     * Override the tooltiped link for the datagrid
     */
    public function tooltipedLink(string $displayName = null): string
    {
        return '<a href="' . $this->getLink() . '">' .
            (!empty($displayName) ? $displayName : e($this->name)) .
        '</a>';
    }
}
