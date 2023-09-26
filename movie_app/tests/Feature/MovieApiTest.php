<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MovieApiTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_movies_api_request(): void
    {
        $response_movies = $this->get('/api/movies/');
        $response_movies->assertStatus(200);

        $response_movies_by_id = $this->get("/api/movies/5/");
        $response_movies_by_id->assertStatus(200);

        $response_movies_create = $this->get("/create");
        $response_movies_create->assertStatus(200);

        $response_movies_edit = $this->get("/edit/5");
        $response_movies_edit->assertStatus(200);

        $response_movies_delete = $this->get("/delete/4");
        $response_movies_delete->assertStatus(200);
    }
}
