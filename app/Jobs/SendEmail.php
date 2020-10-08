<?php

namespace App\Jobs;

use App\Mail\AfterImportEmail;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    /**
     * @var User
     */
    protected $details;

    /**
     * @var Mailable
     */
    protected $email;

    /**
     * SendEmail constructor.
     * @param $email
     * @param $details
     */
    public function __construct($email, $details)
    {
        $this->details = $details;
        $this->email = $email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to($this->email)->send(new AfterImportEmail($this->details) );

    }
}
