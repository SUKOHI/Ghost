# Ghost
A Laravel package to generate a dummy model instance.

# Installation

Execute composer command.

    composer require sukohi/ghost:2.*

Register the service provider in app.php

    'providers' => [
        ...Others...,
        Sukohi\Ghost\GhostServiceProvider::class,
    ]

Also alias

    'aliases' => [
        ...Others...,
        'Ghost'   => Sukohi\Ghost\Facades\Ghost::class,
    ]

# Usage

    $dummy_model = \Ghost::make();
    echo $dummy_model->title;       // (Empty)
    echo $dummy_model->description; // (Empty)
    echo $dummy_model->created_at;  // (Empty)
		
# License

This package is licensed under the MIT License.

Copyright 2016 Sukohi Kuhoh