<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Profile;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ProfileController
 */
class ProfileControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $profiles = Profile::factory()->count(3)->create();

        $response = $this->get(route('profile.index'));

        $response->assertOk();
        $response->assertViewIs('profile.index');
        $response->assertViewHas('profiles');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('profile.create'));

        $response->assertOk();
        $response->assertViewIs('profile.create');
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ProfileController::class,
            'store',
            \App\Http\Requests\ProfileStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves_and_redirects()
    {
        $telephone = $this->faker->word;
        $profile_details = $this->faker->word;
        $profile_image = $this->faker->word;
        $last_login_at = $this->faker->dateTime();
        $last_login_ip = $this->faker->word;
        $user_id = $this->faker->numberBetween(-100000, 100000);

        $response = $this->post(route('profile.store'), [
            'telephone' => $telephone,
            'profile_details' => $profile_details,
            'profile_image' => $profile_image,
            'last_login_at' => $last_login_at,
            'last_login_ip' => $last_login_ip,
            'user_id' => $user_id,
        ]);

        $profiles = Profile::query()
            ->where('telephone', $telephone)
            ->where('profile_details', $profile_details)
            ->where('profile_image', $profile_image)
            ->where('last_login_at', $last_login_at)
            ->where('last_login_ip', $last_login_ip)
            ->where('user_id', $user_id)
            ->get();
        $this->assertCount(1, $profiles);
        $profile = $profiles->first();

        $response->assertRedirect(route('profile.index'));
        $response->assertSessionHas('profile.id', $profile->id);
    }


    /**
     * @test
     */
    public function show_displays_view()
    {
        $profile = Profile::factory()->create();

        $response = $this->get(route('profile.show', $profile));

        $response->assertOk();
        $response->assertViewIs('profile.show');
        $response->assertViewHas('profile');
    }


    /**
     * @test
     */
    public function edit_displays_view()
    {
        $profile = Profile::factory()->create();

        $response = $this->get(route('profile.edit', $profile));

        $response->assertOk();
        $response->assertViewIs('profile.edit');
        $response->assertViewHas('profile');
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\ProfileController::class,
            'update',
            \App\Http\Requests\ProfileUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_redirects()
    {
        $profile = Profile::factory()->create();
        $telephone = $this->faker->word;
        $profile_details = $this->faker->word;
        $profile_image = $this->faker->word;
        $last_login_at = $this->faker->dateTime();
        $last_login_ip = $this->faker->word;
        $user_id = $this->faker->numberBetween(-100000, 100000);

        $response = $this->put(route('profile.update', $profile), [
            'telephone' => $telephone,
            'profile_details' => $profile_details,
            'profile_image' => $profile_image,
            'last_login_at' => $last_login_at,
            'last_login_ip' => $last_login_ip,
            'user_id' => $user_id,
        ]);

        $profile->refresh();

        $response->assertRedirect(route('profile.index'));
        $response->assertSessionHas('profile.id', $profile->id);

        $this->assertEquals($telephone, $profile->telephone);
        $this->assertEquals($profile_details, $profile->profile_details);
        $this->assertEquals($profile_image, $profile->profile_image);
        $this->assertEquals($last_login_at, $profile->last_login_at);
        $this->assertEquals($last_login_ip, $profile->last_login_ip);
        $this->assertEquals($user_id, $profile->user_id);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_redirects()
    {
        $profile = Profile::factory()->create();

        $response = $this->delete(route('profile.destroy', $profile));

        $response->assertRedirect(route('profile.index'));

        $this->assertModelMissing($profile);
    }
}
