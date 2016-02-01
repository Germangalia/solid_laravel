<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendSubscriptionEmail extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;
    protected $user;

    /**
     * SendSubscriptionEmail constructor.
     * @param $user
     */
    public function __construct($user)
    {
        $this->user = $user;
    }


    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::send('emails.reminder', ['user' => $user], function ($m) use ($user) {
            $m->from('no-replay@myapp.com', 'My App');

            $m->to($this->user->email)->subject('Welcome!');
        });
    }
}
