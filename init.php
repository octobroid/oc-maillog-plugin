<?php

Event::listen('mailer.prepareSend', 'Octobro\MailLog\Listeners\PrepareSend');
Event::listen('mailer.send', 'Octobro\MailLog\Listeners\Send');

