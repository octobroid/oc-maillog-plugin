<?php namespace Octobro\MailLog\Listeners;

use Octobro\MailLog\Models\Log;

class Send
{
    public function handle($mailer, $view, $message)
    {
        $msg = $message->getSymfonyMessage();
        
        $log = Log::whereCode(substr($view, 0, 255))->get()->last();
        
        if ($log === null) return;

        $log->sent = true;
        $log->save();
    }
}