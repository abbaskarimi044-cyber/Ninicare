<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreParentProfileRequest;
use App\Http\Requests\UpdateParentProfileRequest;
use App\Models\ParentProfile;
use App\Services\ParentProfileService;
use Illuminate\Http\Request;

class ParentProfileController extends Controller
{
    protected ParentProfileService $service;

    public function __construct(ParentProfileService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        return response()->json(
            $request->user()->parentProfile
        );
    }

    public function store(StoreParentProfileRequest $request)
    {
        if ($request->user()->parentProfile) {

            return response()->json([
                'message' => 'Parent profile already exists.'
            ],409);

        }

        $profile = $this->service->create(
            $request->validated(),
            $request->user()
        );

        return response()->json($profile,201);
    }

    public function show(ParentProfile $parentProfile)
    {
        return response()->json($parentProfile);
    }

    public function update(UpdateParentProfileRequest $request, ParentProfile $parentProfile)
    {
        $profile = $this->service->update(
            $parentProfile,
            $request->validated()
        );

        return response()->json($profile);
    }

    public function destroy(ParentProfile $parentProfile)
    {
        $parentProfile->delete();

        return response()->json([
            'message'=>'Deleted successfully'
        ]);
    }
}
