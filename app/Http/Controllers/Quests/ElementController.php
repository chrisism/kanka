<?php

namespace App\Http\Controllers\Quests;

use App\Datagrids\Sorters\QuestElementSorter;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuestElement;
use App\Models\Campaign;
use App\Models\Quest;
use App\Models\QuestElement;
use App\Services\MultiEditingService;
use App\Traits\CampaignAware;
use App\Traits\GuestAuthTrait;

class ElementController extends Controller
{
    use CampaignAware;
    use GuestAuthTrait;

    public function index(Campaign $campaign, Quest $quest)
    {
        if (empty($quest->entity)) {
            abort(404);
        }
        // Policies will always fail if they can't resolve the user.
        $this->campaign($campaign)->authView($quest);

        $datagridSorter = new QuestElementSorter();
        $datagridSorter->request(request()->all());

        $model = $quest;
        $elements = $quest
            ->elements()
            ->with('entity')
            ->simpleSort($datagridSorter)
            ->paginate();

        return view('quests.elements.index', compact(
            'campaign',
            'model',
            'elements',
            'datagridSorter'
        ));
    }

    public function create(Campaign $campaign, Quest $quest)
    {
        $this->authorize('update', $quest);

        return view('quests.elements.create', compact(
            'campaign',
            'quest'
        ));
    }

    public function store(StoreQuestElement $request, Campaign $campaign, Quest $quest)
    {
        $this->authorize('update', $quest);

        if ($request->ajax()) {
            return response()->json(['success' => true]);
        }

        $data = $request->only([
            'entity_id', 'name', 'role', 'description', 'colour', 'visibility_id'
        ]);
        $data['quest_id'] = $quest->id;

        $element = new QuestElement();
        $element = $element->create($data);

        if ($request->has('submit-update')) {
            return redirect()
                ->route('quests.quest_elements.edit', [$campaign, 'quest_element' => $element, 'quest' => $quest])
                ->with('success', __('quests.elements.create.success', [
                    'entity' => $element->name()
                ]));
        } elseif ($request->has('submit-new')) {
            return redirect()
                ->route('quests.quest_elements.create', [$campaign, $quest])
                ->with('success', __('quests.elements.create.success', [
                    'entity' => $element->name()
                ]));
        }
        return redirect()
            ->route('quests.quest_elements.index', [$campaign, $quest])
            ->with('success', __('quests.elements.create.success', [
                'entity' => $element->name()
            ]));
    }

    public function show(Campaign $campaign, Quest $quest, QuestElement $questElement)
    {
        abort(404);
    }

    public function edit(Campaign $campaign, Quest $quest, QuestElement $questElement)
    {
        $this->authorize('update', $quest);
        $model = $questElement;

        $editingUsers = null;

        if ($campaign->hasEditingWarning()) {
            /** @var MultiEditingService $editingService */
            $editingService = app()->make(MultiEditingService::class);
            $editingUsers = $editingService->model($questElement)->user(auth()->user())->users();
            // If no one is editing the quest element, we are now editing it
            if (empty($editingUsers)) {
                $editingService->edit();
            }
        }

        return view('quests.elements.update', compact(
            'campaign',
            'quest',
            'model',
            'editingUsers'
        ));
    }

    public function update(StoreQuestElement $request, Campaign $campaign, Quest $quest, QuestElement $questElement)
    {
        $this->authorize('update', $quest);

        if ($request->ajax()) {
            return response()->json(['success' => true]);
        }

        $data = $request->only(['entity_id', 'name', 'role', 'description', 'colour', 'visibility_id']);

        $questElement->update($data);
        $questElement->refresh();

        /** @var MultiEditingService $editingService */
        $editingService = app()->make(MultiEditingService::class);
        $editingService->model($questElement)
            ->user($request->user())
            ->finish();


        if ($request->has('submit-update')) {
            return redirect()
                ->route('quests.quest_elements.edit', [$campaign, 'quest_element' => $questElement, 'quest' => $quest])
                ->with('success', __('quests.elements.edit.success', [
                    'entity' => $questElement->name()
                ]));
        } elseif ($request->has('submit-new')) {
            return redirect()
                ->route('quests.quest_elements.create', [$campaign, $quest])
                ->with('success', __('quests.elements.create.success', [
                    'entity' => $questElement->name()
                ]));
        }
        return redirect()
            ->route('quests.quest_elements.index', [$campaign, $quest])
            ->with('success', __('quests.elements.edit.success', [
                'entity' => $questElement->name()
            ]));
    }

    public function destroy(Campaign $campaign, Quest $quest, QuestElement $questElement)
    {
        $this->authorize('update', $quest);

        $questElement->delete();

        return redirect()
            ->route('quests.quest_elements.index', [$campaign, $quest])
            ->with('success', __('quests.elements.destroy.success', [
                'entity' => $questElement->name()
            ]));
    }
}
