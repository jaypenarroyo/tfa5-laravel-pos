<?php

namespace Tests\Feature;

use Tests\TestCase;

class PosPagesTest extends TestCase
{
    public function test_all_required_pages_are_available(): void
    {
        $this->get('/')->assertOk()->assertSee('POS Foundations');
        $this->get('/about')->assertOk()->assertSee('Learning Laravel');
        $this->get('/customers')->assertOk()->assertSee('Customer Accounts')->assertSee('Alyssa Reyes');
        $this->get('/users')->assertOk()->assertSee('User Accounts')->assertSee('Administrator');
    }
}
