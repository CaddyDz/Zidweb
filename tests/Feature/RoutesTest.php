<?php

namespace Tests\Feature;

use Tests\TestCase;

class RoutesTest extends TestCase
{
	/**
	 * Test the main index route.
	 *
	 * @return void
	 */
	public function test_main_route(): void
	{
		$response = $this->get('/');

		$response->assertStatus(200);
	}

	/**
	 * Test the about page route.
	 *
	 * @return void
	 */
	public function test_about_route(): void
	{
		$response = $this->get('/about');

		$response->assertStatus(200);
	}

	/**
	 * Test the contact page route.
	 *
	 * @return void
	 */
	public function test_contact_route(): void
	{
		$response = $this->get('/contact');

		$response->assertStatus(200);
	}
}
