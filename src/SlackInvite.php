<?php

namespace Conlect\SlackInvite;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class SlackInvite
{
    public function __construct()
    {
        $this->client = new Client();
    }

    public function handle($email)
    {
        $this->client->request('POST',
            config('slack-invite.url').'/api/users.admin.invite?t='.time().'&email='.$email.'&token='.config('slack-invite.token').'&set_active=true&_attempts=1'
        );
    }
}
