<?php

namespace App\Mail;

<<<<<<< HEAD
use App\Models\User;
=======
>>>>>>> Chapter4
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
<<<<<<< HEAD

class NewUserIntroduction extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $subject = '新しいユーザーが追加されました！';
    public User $toUser;
    public User $newUser;

    /**
     * Create a new message instance.
=======
use App\Models\User;

class NewUserIntroduction extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = '新しいユーザーが追加されました';
    public User $toUser;
    public User $newUser;


    /**
     * Create a new message instance.
     *
>>>>>>> Chapter4
     * @return void
     */
    public function __construct(User $toUser, User $newUser)
    {
        $this->toUser = $toUser;
        $this->newUser = $newUser;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.new_user_introduction');
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> Chapter4
