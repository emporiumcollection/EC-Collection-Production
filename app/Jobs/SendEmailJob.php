<?php
namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Bus\SelfHandling;
//use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Mail\SendEmailInvitation;
use Mail;

class SendEmailJob implements ShouldQueue, SelfHandling
{
//    use DispatchesJobs, InteractsWithQueue, Queueable, SerializesModels;
    use InteractsWithQueue, Queueable, SerializesModels;
    protected $details;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new SendEmailInvitation($this->details);
        //Mail::to($this->details['email'])->send($email);
        $user = $this->details;
         $etemp = 'Invitation';
        Mail::send('user.emails.' . $etemp,['user' => $user], function ($m) use ($user) {
            $m->from('chavdamahesh@gmail.com', 'Voyage Collection');
            $m->to($user['email'], "Demoname")->subject('Invitation!');
        });
    }
}

?>