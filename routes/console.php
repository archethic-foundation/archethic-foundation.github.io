<?php


//Artisan::command('test', function () {
//    $this->info('This is a test command');
//
//    //exec
//    dispatch(function () {
//        dd('This is a test job');
//    });
//
//})->describe('This is a test command for scheduler and queued jobs')->everyFiveSeconds();


Schedule::command('scheduled:cache:warm')->environments('production')->everyFiveMinutes();



