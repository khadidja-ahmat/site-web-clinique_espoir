<?php

namespace Database\Seeders;

use App\Models\Consultation;
use App\Models\Employe;
use App\Models\Historique;
use App\Models\Medecin;
use App\Models\Ordonnance;
use App\Models\Patient;
use App\Models\Rendezvous;
use Illuminate\Database\Seeder;

/**
 * Données de démonstration 100 % fictives (aucune personne réelle).
 * Lancer avec : php artisan db:seed --class=DemoDataSeeder
 */
class DemoDataSeeder extends Seeder
{
    public function run(): void
    {
        $patients = collect([
            ['Aminata Diallo', '1990-04-12', 'femme', 'Quartier Centre', '+000 11 22 33 01', 'Aucune', 'Aucune'],
            ['Moussa Traoré', '1984-09-03', 'homme', 'Quartier Nord', '+000 11 22 33 02', 'Pénicilline', 'Hypertension'],
            ['Fatou Camara', '2001-01-25', 'femme', 'Quartier Sud', '+000 11 22 33 03', 'Aucune', 'Asthme'],
            ['Ibrahim Keita', '1975-11-30', 'homme', 'Quartier Est', '+000 11 22 33 04', 'Aucune', 'Diabète'],
            ['Awa Sow', '1996-06-18', 'femme', 'Quartier Ouest', '+000 11 22 33 05', 'Arachides', 'Aucune'],
        ])->map(fn ($p) => Patient::create([
            'nom' => $p[0], 'date_naissance' => $p[1], 'genre' => $p[2], 'adresse' => $p[3],
            'tel' => $p[4], 'ACO' => $p[5], 'AFTO' => $p[6],
        ]));

        $medecins = collect([
            ['Dr Exemple Un', 'femme', 'Cardiologie'],
            ['Dr Exemple Deux', 'homme', 'Pédiatrie'],
            ['Dr Exemple Trois', 'homme', 'Médecine générale'],
        ])->map(fn ($m, $i) => Medecin::create([
            'noms' => $m[0], 'genre' => $m[1], 'specialité' => $m[2], 'adresse' => 'Clinique Espoir',
            'tel' => '+000 44 55 66 0'.($i + 1), 'email' => 'medecin'.($i + 1).'@example.com', 'image' => null,
        ]));

        Employe::create(['noms' => 'Employé Exemple', 'genre' => 'femme', 'poste' => 'Secrétaire', 'adresse' => 'Clinique Espoir', 'tel' => '+000 77 88 99 01', 'email' => 'secretaire@example.com', 'image' => null]);
        Employe::create(['noms' => 'Employé Exemple 2', 'genre' => 'homme', 'poste' => 'Infirmier', 'adresse' => 'Clinique Espoir', 'tel' => '+000 77 88 99 02', 'email' => 'infirmier@example.com', 'image' => null]);

        foreach ($patients as $i => $patient) {
            $medecin = $medecins[$i % $medecins->count()];
            Rendezvous::create(['dates' => now()->addDays($i + 1)->toDateString(), 'patient_id' => $patient->id, 'medecin_id' => $medecin->id, 'type' => 'Consultation', 'statut' => ['planifié', 'encours', 'annulé'][$i % 3]]);
            Consultation::create(['date' => now()->subDays($i + 1)->toDateString(), 'patient_id' => $patient->id, 'medecin_id' => $medecin->id, 'type' => 'Contrôle', 'resultat' => 'Résultat fictif de démonstration.']);
            Ordonnance::create(['patient_id' => $patient->id, 'nom_medicament' => 'Paracétamol', 'dosage' => '500 mg', 'frequence_utilisation' => '3 fois par jour', 'date_prescription' => now()->toDateString(), 'duree_prescription' => now()->addDays(7)->toDateString(), 'date_expiration' => now()->addDays(30)->toDateString()]);
            Historique::create(['patient_id' => $patient->id, 'resultat' => 'Bon état général', 'prescription' => 'Repos et hydratation', 'antecedant' => 'Aucun antécédent notable', 'resultat_test' => 'Normal']);
        }
    }
}
