<?php

namespace HMD\Handlers\Commands;

use HMD\Commands\RegisterCommand;
use HMD\Repositories\UserRepository;
use HMD\User;
use Illuminate\Queue\InteractsWithQueue;

class RegisterCommandHandler
{
    protected $userRepo;

    function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    /**
     * Handle the command.
     *
     * @param  RegisterCommand  $command
     * @return void
     */
    public function handle(RegisterCommand $command)
    {
        $user = User::register($command->first_name, $command->last_name, $command->email, $command->password, $command->address, $command->city, $command->state, $command->zip_code, $command->country);

        $this->userRepo->persist($user);
    }
}
