<?php

namespace App\Http\Controllers\Entity;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReorderStories;
use App\Models\Campaign;
use App\Models\Entity;
use App\Services\Entity\StoryService;
use App\Traits\GuestAuthTrait;

class StoryController extends Controller
{
    use GuestAuthTrait;

    protected StoryService $service;

    public function __construct(StoryService $service)
    {
        $this->service = $service;
    }

    public function edit(Campaign $campaign, Entity $entity)
    {
        $this->authorize('update', $entity->child);

        return view('entities.pages.story.reorder', compact(
            'campaign',
            'entity'
        ));
    }

    public function save(ReorderStories $request, Campaign $campaign, Entity $entity)
    {
        $this->authorize('update', $entity->child);

        $this->service
            ->entity($entity)
            ->reorder($request);

        return redirect()
            ->to($entity->url())
            ->with('success', __('entities/story.reorder.success'));
    }

    /**
     * Load more posts to display to the user (partial view)
     */
    public function more(Campaign $campaign, Entity $entity)
    {
        $this->authorize('view', $entity->child);

        $posts = $entity->posts()->ordered()->paginate(15);

        return view('entities.components.posts')
            ->with('entity', $entity)
            ->with('model', $entity->child)
            ->with('more', true)
            ->with('campaign', $campaign)
            ->with('pinnedPosts', $posts);
    }
}
