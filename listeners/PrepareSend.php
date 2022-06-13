<?php namespace Octobro\MailLog\Listeners;

use Octobro\MailLog\Models\Log;

class PrepareSend
{
    public function handle($mailer, $view, $message)
    {
        $msg = $message->getSymfonyMessage();
        
        $log = new Log;
        $log->code =  $view ? substr($view, 0, 255) : null;
        $log->to = $this->getAddress($msg->getTo());
        $log->cc = $this->getAddress($msg->getCc());
        $log->bcc = $this->getAddress($msg->getBcc());
        $log->subject = $msg->getSubject();
        $log->body = $msg->getHtmlBody();
        $log->sender = $this->getAddress($msg->getFrom());
        $log->reply_to = $this->getAddress($msg->getReplyTo());
        $log->date = $msg->getDate();
        $log->save();
    }

    protected function getAddress($address)
    {
        return implode(',', collect($address)->map(function ($item) {
                return $item->getAddress();
            })->all()
        );
    }
}