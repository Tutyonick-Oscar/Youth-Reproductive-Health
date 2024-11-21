<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Tinify\Tinify;

class Compress implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $array;
    public $key;
    public function __construct(array $array,string $key)
    {
        $this->array = $array;
        $this->key = $key;
    }

    public function handle(): void
    {
        \Tinify\setKey(env('TINIFY_API_KEY'));
        \Tinify\fromFile('storage/app/public/'.$this->array[$this->key])->toFile('storage/app/public/'.$this->array[$this->key]);
    }
}
