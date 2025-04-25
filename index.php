<?php

// Null safe operator

class User
{
    public function profile(): Profile|null
    {
        return new Profile; // if this method returned null it will cause call to a member function on null
    }
}

class Profile
{
    public function employment(): string|null
    {
        return 'Backend Developer';
    }
}

$user = new User;
// to prevent if profile equal null we can use

//$profile = $user->profile();
//if($profile){
//echo $user->profile()->employment();
//}

// or

echo $user?->profile()?->employment() ?? 'Not provided';