<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Minister;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\MinisterController
 */
class MinisterControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $ministers = Minister::factory()->count(3)->create();

        $response = $this->get(route('minister.index'));

        $response->assertOk();
        $response->assertViewIs('minister.index');
        $response->assertViewHas('ministers');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('minister.create'));

        $response->assertOk();
        $response->assertViewIs('minister.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\MinisterController::class,
            'store',
            \App\Http\Requests\MinisterStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $response = $this->post(route('minister.store'));

        $response->assertRedirect(route('minister.index'));
        $response->assertSessionHas('minister.id', $minister->id);

        $this->assertDatabaseHas(ministers, [ /* ... */ ]);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $minister = Minister::factory()->create();

        $response = $this->get(route('minister.show', $minister));

        $response->assertOk();
        $response->assertViewIs('minister.show');
        $response->assertViewHas('minister');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $minister = Minister::factory()->create();

        $response = $this->get(route('minister.edit', $minister));

        $response->assertOk();
        $response->assertViewIs('minister.edit');
        $response->assertViewHas('minister');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\MinisterController::class,
            'update',
            \App\Http\Requests\MinisterUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $minister = Minister::factory()->create();

        $response = $this->put(route('minister.update', $minister));

        $minister->refresh();

        $response->assertRedirect(route('minister.index'));
        $response->assertSessionHas('minister.id', $minister->id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $minister = Minister::factory()->create();

        $response = $this->delete(route('minister.destroy', $minister));

        $response->assertRedirect(route('minister.index'));

        $this->assertModelMissing($minister);
    }
}
