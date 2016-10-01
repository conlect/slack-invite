<?php

namespace Conlect\SlackInvite;

use App\User;
use Conlect\SlackInvite\SlackInvite;
use Illuminate\Support\ServiceProvider;

class SlackInviteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        if (config('slack-invite.auto')) {
            $this->watchUserCreated();
        }

        $this->publishes([
            __DIR__.'/../config/slack-invite.php' => config_path('slack-invite.php'),
        ], 'config');
    }

    public function watchUserCreated()
    {
        User::created(function ($user) {
            (new SlackInvite())->handle($user);
        });
    }
}
