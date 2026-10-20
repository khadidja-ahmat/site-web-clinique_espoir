<?php

namespace Tests\Feature;

use App\Models\Patient;
use App\Models\User;
use Database\Seeders\DemoDataSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ClinicTest extends TestCase
{
    use RefreshDatabase;

    /** @dataProvider publicPages */
    public function test_public_pages_are_reachable($url): void
    {
        $this->get($url)->assertOk();
    }

    public static function publicPages(): array
    {
        return [['/home'], ['/about'], ['/contact'], ['/login']];
    }

    public function test_root_redirects_to_home(): void
    {
        $this->get('/')->assertRedirect('/home');
    }

    /** @dataProvider protectedPages */
    public function test_protected_pages_redirect_guests_to_login($url): void
    {
        $this->get($url)->assertRedirect('/login');
    }

    public static function protectedPages(): array
    {
        return [['/patient'], ['/medecin'], ['/rendezvous'], ['/consultation'], ['/ordonnance'], ['/employe'], ['/historique']];
    }

    public function test_api_requires_authentication(): void
    {
        $this->getJson('/api/patients')->assertUnauthorized();
    }

    public function test_login_with_good_and_bad_credentials(): void
    {
        $user = User::factory()->create(['password' => bcrypt('secret-pass-123')]);

        $this->post('/login', ['email' => $user->email, 'password' => 'mauvais'])
            ->assertSessionHasErrors('email');
        $this->assertGuest();

        $this->post('/login', ['email' => $user->email, 'password' => 'secret-pass-123'])
            ->assertRedirect();
        $this->assertAuthenticatedAs($user);
    }

    public function test_logout(): void
    {
        $this->actingAs(User::factory()->create())->post('/logout')->assertRedirect();
        $this->assertGuest();
    }

    public function test_patient_creation_is_validated(): void
    {
        $this->actingAs(User::factory()->create())
            ->post(route('store.patient'), ['nom' => '', 'genre' => 'inconnu'])
            ->assertSessionHasErrors(['nom', 'genre', 'date_naissance', 'tel']);
        $this->assertDatabaseCount('patient', 0);
    }

    public function test_patient_can_be_created_and_listed(): void
    {
        $this->actingAs(User::factory()->create());
        $this->post(route('store.patient'), [
            'nom' => 'Test Patient', 'date_naissance' => '1990-01-01', 'genre' => 'femme',
            'adresse' => 'Rue 1', 'tel' => '+000 11 22 33 44', 'ACO' => 'Aucune', 'AFTO' => 'Aucune',
        ])->assertRedirect();
        $this->assertDatabaseHas('patient', ['nom' => 'Test Patient']);
        $this->get('/patient')->assertOk()->assertSee('Test Patient');
    }

    public function test_demo_seeder_and_all_lists_render(): void
    {
        $this->seed(DemoDataSeeder::class);
        $this->assertSame(5, Patient::count());
        $this->actingAs(User::factory()->create());
        foreach (['patient', 'medecin', 'rdv', 'consultation', 'ordonnance', 'employe', 'historique'] as $page) {
            $this->get(route("list.$page"))->assertOk();
        }
    }
}
