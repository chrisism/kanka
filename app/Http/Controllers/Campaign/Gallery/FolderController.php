<?php

namespace App\Http\Controllers\Campaign\Gallery;

use App\Http\Controllers\Controller;
use App\Http\Requests\Campaigns\GalleryImageFolderStore;
use App\Models\Campaign;
use App\Models\Image;
use App\Services\Campaign\GalleryService;
use Illuminate\Support\Facades\Request;

class FolderController extends Controller
{
    protected GalleryService $service;

    public function __construct(GalleryService $service)
    {
        $this->middleware('auth');
        $this->middleware('campaign.member');
        $this->service = $service;
    }

    public function create(Campaign $campaign)
    {
        $this->authorize('gallery', $campaign);
        $folder = request()->get('folder');
        if (!empty($folder)) {
            $folder = Image::where('is_default', false)
                ->where('is_folder', 1)
                ->where('id', $folder)->first();
        }
        return view('gallery.folders.create')
            ->with('campaign', $campaign)
            ->with('folder', $folder);
    }
    /**
     * Create a new folder
     */
    public function folder(GalleryImageFolderStore $request, Campaign $campaign)
    {
        $this->authorize('gallery', $campaign);
        if ($request->ajax()) {
            return response()->json(['success' => true]);
        }

        $folder = $this->service
            ->campaign($campaign)
            ->user(auth()->user())
            ->createFolder($request);

        $params = [$campaign];
        if (!empty($folder->folder_id)) {
            $params['folder_id'] = $folder->folder_id;
        }

        return redirect()
            ->route('campaign.gallery.index', $params);
    }
}
