<?php

namespace App\Services;

use Auth;
use App\User;
use App\Repositories\UserRepository;
use App\Events\UserHasJustBeenCreated;
use League\OAuth2\Client\Provider\ResourceOwnerInterface;

class AuthentificationService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function loginByResource(ResourceOwnerInterface $resourceOwner)
    {
        $concretUser = $this->retrieveConcretUser($resourceOwner);

        $user = $this->userRepository->findByField('tracking_id', $concretUser['id']);

        if ($user->isEmpty()) {
            $user = $this->createUser($concretUser);
        }

        Auth::login($user->first());
    }

    protected function retrieveConcretUser(ResourceOwnerInterface $resourceOwner) :array
    {
        $concret = $resourceOwner->toArray();

        return $concret['data'][0];
    }    

    protected function createUser(array $concretUser) :User
    {
        $attributes = [
            'tracking_id' => $concretUser['id'],
            'login' => $concretUser['login'],
            'display_name' => $concretUser['display_name'],
            'profile_image_url' => $concretUser['profile_image_url'],
        ];

        $user = $this->userRepository->create($attributes);

        Event::fire(new UserHasJustBeenCreated($user));

        return $user;
    }
}
