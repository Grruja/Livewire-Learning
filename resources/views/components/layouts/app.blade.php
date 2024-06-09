<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        <nav>
            <a wire:navigate href="/" @class(['current' => request()->is('/')])>Todo</a>
            <a wire:navigate href="/counter" @class(['current' => request()->is('counter')])>Counter</a>
            <a wire:navigate href="/posts" @class(['current' => request()->is('posts')])>Posts</a>
            <a wire:navigate href="/create-post" @class(['current' => request()->is('create-post')])>Create Posts</a>
            <hr>
        </nav>

        {{ $slot }}

        <style>
            .current {
                font-weight: bold;
            }

             .archived {
                 background: gray;
             }
        </style>
    </body>
</html>
