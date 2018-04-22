<?php

namespace App\Mail;

use App\Team;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CommentRecived extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $team;

    public function __construct(Team $team)
    {
        $this->team =$team;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $team = $this->team;

        return $this->view('emails.comment-recived',['team'=>$team]);
    }
}
