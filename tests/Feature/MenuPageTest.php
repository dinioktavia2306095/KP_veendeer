<?php

namespace Tests\Feature;

use Tests\TestCase;

class MenuPageTest extends TestCase
{
    public function test_menu_page_renders_from_legacy_php_url(): void
    {
        $response = $this->get('/menu.php');

        $response->assertOk();
        $response->assertSee('From our kitchen');
        $response->assertSee('Signature Coffee');
        $response->assertDontSee('Rp 25.000');
        $response->assertDontSee('ORDER WA');
        $response->assertSee(route('full-menu'));
    }

    public function test_full_menu_page_displays_the_supplied_menu_image(): void
    {
        $response = $this->get('/full-menu');

        $response->assertOk();
        $response->assertSee('/assets/img/full-menu.jpg');
    }
}
