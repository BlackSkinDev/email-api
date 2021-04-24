<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Queue;
use App\Jobs\SendEmail;


class SenderTest extends TestCase
{

    /** @test */
    public function a_job_is_dispatched()
    {
        Queue::fake();
        $response=$this->json('POST','api/send',
            [
                'emails'=>[
                    [
                        "subject" => "Greetings",
                        "body" => "job 1",
                        "toEmail" => "azeezafeez212@gmail.com"
                    ],
                    [
                        "subject" => "Greetings",
                        "body" => "job 1",
                        "toEmail" => "azeezafeez212@gmail.com"
                    ],
                ]
            ]
        );

        $response->assertStatus(Response::HTTP_OK)
            ->assertExactJson([
                'msg'=>'Mail Sent'
            ]);
        //$this->expectsJobs(SendEmail::class);

    }
}
