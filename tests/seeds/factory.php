<?php

$factory->define(Tests\Models\User::class, function () {
    return [
        'username' => fake()->userName(),
        'email'    => fake()->email(),
        'mobile'   => fake()->phoneNumber(),
        'avatar'   => fake()->imageUrl(),
        'password' => '$2y$10$U2WSLymU6eKJclK06glaF.Gj3Sw/ieDE3n7mJYjKEgDh4nzUiSESO', // bcrypt(123456)
    ];
});

$factory->define(Tests\Models\Profile::class, function () {
    return [
        'first_name' => fake()->firstName(),
        'last_name'  => fake()->lastName(),
        'postcode'   => fake()->postcode(),
        'address'    => fake()->address(),
        'latitude'   => fake()->latitude(),
        'longitude'  => fake()->longitude(),
        'color'      => fake()->hexColor(),
        'start_at'   => fake()->dateTime(),
        'end_at'     => fake()->dateTime(),
    ];
});

$factory->define(Tests\Models\Tag::class, function () {
    return [
        'name' => fake()->word,
    ];
});
