<?php

namespace HMD\Handlers\Commands;

use HMD\Commands\AddOrderCommand;
use HMD\Order;
use HMD\Repositories\OrderRepository;
use Illuminate\Queue\InteractsWithQueue;

class AddOrderCommandHandler
{
    /**
     * @var OrderRepository
     */
    protected $orderRepo;

    function __construct(OrderRepository $orderRepo)
    {
        $this->orderRepo = $orderRepo;
    }

    /**
     * Handle the command.
     *
     * @param  AddOrderCommand  $command
     * @return void
     */
    public function handle(AddOrderCommand $command)
    {
        $this->orderRepo->persist($command);
    }
}
