<?php

namespace App\Services;

use App\Models\ParentProfile;
use App\Models\User;

class ParentProfileService
{
    public function create(array $data, User $user): ParentProfile
    {
        $data['user_id'] = $user->id;

        return ParentProfile::create($data);
    }

    public function update(ParentProfile $profile, array $data): ParentProfile
    {
        $profile->update($data);

        return $profile;
    }
}
