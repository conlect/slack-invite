# Laravel 5 Slack Invite

Automatically invite users to your Slack team when they register for your site.

## Usage

### Step 1: Install Through Composer

```
composer require conlect/slack-invite
```

### Step 2: Add the Service Provider

Update the `providers` array in `config/app.php`.

```
Conlect\SlackInvite\SlackInviteServiceProvider::class,
```

### Step 3: Publish Package Config

```
php artisan vendor:publish
```

### Step 4: Edit Package Config


### Step 5: Add Environmental Variable

```
SLACK_TOKEN=yourslacktoken
```
