<?php

use App\User;
use Faker\Generator as Faker;

/* @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(User::class, function (Faker $faker) {
    return [
        'id'           => $id = $faker->randomNumber(),
        'name'         => $name = $faker->name,
        'nickname'     => $username = $faker->userName,
        'token'        => 'some-random-token',
        'token_secret' => 'some-random-secret-token',
        'data'         => json_decode('{"id": ' . $id . ', "id_str": "' . $id . '", "name": "' . $name . '", "screen_name": "' . $username . '", "location": "", "description": "", "url": "http://t.co/abcdefg123", "entities": {"url": {"urls": [] }, "description": {"urls": [] } }, "protected": false, "followers_count": 1, "friends_count": 1, "listed_count": 1, "created_at": "Tue May 11 17:48:52 +0000 2010", "favourites_count": 1, "utc_offset": null, "time_zone": null, "geo_enabled": false, "verified": false, "statuses_count": 1, "lang": null, "status": {}, "contributors_enabled": false, "is_translator": false, "is_translation_enabled": false, "profile_background_color": "191817", "profile_background_image_url": "", "profile_background_image_url_https": "", "profile_background_tile": true, "profile_image_url": "", "profile_image_url_https": "", "profile_banner_url": "", "profile_link_color": "F2AE00", "profile_sidebar_border_color": "000000", "profile_sidebar_fill_color": "DDEEF6", "profile_text_color": "333333", "profile_use_background_image": false, "has_extended_profile": false, "default_profile": false, "default_profile_image": false, "following": false, "follow_request_sent": false, "notifications": false, "translator_type": "none"}'),
        'followers'    => [],
        'friends'      => [],
        'muted'        => [],
        'blocked'      => [],
    ];
});
