<?php

namespace Tests\Feature;

use App\Database\Seeds\PosSeeder;
use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\DatabaseTestTrait;
use CodeIgniter\Test\FeatureTestTrait;

final class PagesTest extends CIUnitTestCase
{
    use DatabaseTestTrait;
    use FeatureTestTrait;

    protected $namespace = 'App';
    protected $basePath  = APPPATH . 'Database';
    protected $seed      = PosSeeder::class;

    public function testHomePageLoads(): void
    {
        $result = $this->get('/');

        $result->assertStatus(200);
        $result->assertSee('Your first POS application');
    }

    public function testAboutPageLoads(): void
    {
        $result = $this->get('/about');

        $result->assertStatus(200);
        $result->assertSee('Built to demonstrate CodeIgniter foundations');
    }

    public function testCustomersPageListsFiveRecords(): void
    {
        $result = $this->get('/customers');

        $result->assertStatus(200);
        $result->assertSee('Customer Accounts');
        $result->assertSee('Maria Santos');
        $result->assertSee('Nicole Garcia');

        $this->seeInDatabase('customers', ['email' => 'maria.santos@example.com']);
    }

    public function testUsersPageListsFiveRecords(): void
    {
        $result = $this->get('/users');

        $result->assertStatus(200);
        $result->assertSee('User Accounts');
        $result->assertSee('admin');
        $result->assertSee('inventory01');

        $this->seeInDatabase('users', ['username' => 'admin']);
    }
}
