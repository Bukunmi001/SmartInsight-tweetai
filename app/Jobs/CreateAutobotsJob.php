<?php

namespace App\Jobs;

use App\Models\Autobot;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class CreateAutobotsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Fetch users from jsonplaceholder.typicode.com
        $response = Http::get('https://jsonplaceholder.typicode.com/users');
        $users = $response->json();

        // Loop through each user to create an Autobot
        foreach ($users as $user) {
            $autobot = Autobot::create([
                'name' => $user['name'],
            ]);

            // Create 10 posts for each Autobot
            for ($i = 0; $i < 10; $i++) {
                $post = $autobot->posts()->create([
                    'title' => $user['username'] . ' Post ' . $i, // Ensure unique post titles
                    'body' => 'This is a body for post ' . $i . ' by ' . $user['username'],
                ]);

                // Create 10 comments for each post
                for ($j = 0; $j < 10; $j++) {
                    $post->comments()->create([
                        'body' => 'This is a comment ' . $j . ' on post ' . $i,
                    ]);
                }
            }
        }
    }
}
