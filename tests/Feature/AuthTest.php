<?php
namespace Packages\Tests\Feature;

use App\Models\User;
use Tests\TestCase;
use function Pest\Laravel\actingAs;

uses(TestCase::class);




it('does not allow guests to access the admin panel', function () {
    $this->get('/admin')
        ->assertRedirect(route('filament.admin.auth.login'));
});

it('does not allow users with unverified emails to access the admin panel', function () {
    actingAs(User::factory()->unverified()->create())
        ->get('/admin')
        ->assertForbidden();
});

it('allows logged in users with a verified email to access the panel', function () {
        actingAs(User::factory()->create())
        ->get('/admin')
        ->assertSuccessful();
});