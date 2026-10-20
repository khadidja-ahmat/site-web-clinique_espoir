<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Crée (ou met à jour) le compte qui peut se connecter à la gestion de la clinique.
     *
     * L'e-mail et le mot de passe sont lus dans le fichier .env
     * (ADMIN_EMAIL, ADMIN_PASSWORD) : aucun identifiant n'est écrit dans le code.
     */
    public function run(): void
    {
        $email = env('ADMIN_EMAIL');
        $password = env('ADMIN_PASSWORD');

        if (empty($email) || empty($password)) {
            $this->command->error(
                'ADMIN_EMAIL et ADMIN_PASSWORD doivent être définis dans le fichier .env avant de lancer le seeder.'
            );

            return;
        }

        User::updateOrCreate(
            ['email' => $email],
            [
                'name' => env('ADMIN_NAME', 'Administrateur'),
                'password' => Hash::make($password),
            ]
        );

        $this->command->info("Compte prêt : {$email}");
    }
}
