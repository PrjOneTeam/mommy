<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class OrderTask implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $data;
    protected $orderRepository;

    /**
     * Create a new job instance.
     */
    public function __construct($data, $orderRepository)
    {
        $this->data = $data;
        $this->orderRepository = $orderRepository;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $this->orderRepository->sendMail($this->data);
    }
}
