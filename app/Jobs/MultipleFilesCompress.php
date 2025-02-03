<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Tinify\Tinify;

class MultipleFilesCompress implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $files;

    public function __construct(array $files)
    {
        $this->files = $files;
    }

    public function handle(): void
    {
        \Tinify\setKey(env('TINIFY_API_KEY'));
        foreach ($this->files as $file) {
            \Tinify\fromFile('storage/app/public/'.$file)->toFile('storage/app/public/'.$this->array[$this->key]);
        }
    }
}
