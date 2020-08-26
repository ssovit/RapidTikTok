# RapidTikTok
[![GitHub issues](https://img.shields.io/github/issues/ssovit/RapidTikTok?style=for-the-badge)](https://github.com/ssovit/RapidTikTok/issues) ![Packagist Downloads](https://img.shields.io/packagist/dm/ssovit/RapidTikTok?style=for-the-badge) ![GitHub Workflow Status](https://img.shields.io/github/workflow/status/ssovit/RapidTikTok/Create%20Tag?style=for-the-badge) [![GitHub license](https://img.shields.io/github/license/ssovit/RapidTikTok?style=for-the-badge)](https://github.com/ssovit/RapidTikTok/blob/master/LICENSE)

TikTok API Wrapper library for TikTok endpoints on RapidAPI https://rapidapi.com/wppressapi-wppressapi-default/api/tiktok9

# Installation
`composer require ssovit/rapid-tiktok`

# Usage
Follow examples in `/example` directory

```php
$api=new \RapidTikTok\Api(array(['api-key'=>"RAPID_API_KEY"]));

$userData=$api->getUser("tiktok");

$userFeed=$api->getUserFeed("tiktok");

$challenge=$api->getChallenge("foryourpage");

$challengeFeed=$api->getChallengeFeed("foryourpage");

$musc=$api->getMusic("6798898508385585925");

$musicFeed=$api->getMusicFeed("6798898508385585925");

$videoData=$api->getVideoByUrl("https://www.tiktok.com/@zachking/video/6829303572832750853");

```

# Available Options
```php
$api=new \RapidTikTok\Api(array(
		"api-key"=>"RAPID_API_KEY"
		"user-agent"     => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Safari/537.36',
        "proxy-host"     => false,
        "proxy-port"     => false,
        "proxy-username" => false,
        "proxy-password" => false
    ));
```

# Proxy Support
To use proxy, provide `proxy-host`, `proxy-port`, `proxy-username`, `proxy-password`
It's highly recommended that you use proxy to prevent your IP from getting banned.

# Available methods
- `getUser` - Get profile data for TikTok User `getUser($username)`
- `getUserFeed` - Get user feed by ID `getUserFeed($user_id,$maxCursor)`
- `getChallenge` - Get challenge/hashtag info `getChallenge($challenge)`
- `getChallengeFeed` - Get challenge feed by ID `getChallengeFeed($challenge_id, $maxCursor)`
- `getMusic` - Get music info `getMusic($music_id)`
- `getMusicFeed` - Get music feed `getMusicFeed($music_id,$maxCursor)`
- `getVideoByUrl` - Get video by URL `getVideoByUrl($video_url)`

`$maxCursor` defaults to `0`, and is offset for results page. `maxCursor` for next page is exposed on current page call feed object.