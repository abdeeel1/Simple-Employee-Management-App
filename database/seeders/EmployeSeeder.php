<?php

namespace Database\Seeders;

use App\Models\Employe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Employe::insert([
            [
                "nom" => "Alami Khalid",
                "email" => "alamikhalid@gmail.com",
                "poste" => "Comptable",
                "salaire" => 9500.00,
                "status" => "active"
            ],
            [
                "nom" => "Mansouri Imane",
                "email" => "mansouriimane@gmail.com",
                "poste" => "RH",
                "salaire" => 8200.00,
                "status" => "inactive"
            ],
            [
                "nom" => "Tazi Omar",
                "email" => "taziomar@gmail.com",
                "poste" => "IT Support",
                "salaire" => 7500.00,
                "status" => "active"
            ],
            [
                "nom" => "Bennani Salma",
                "email" => "bennanisalma@gmail.com",
                "poste" => "Project Manager",
                "salaire" => 15000.00,
                "status" => "active"
            ],
            [
                "nom" => "El Amrani Youssef",
                "email" => "elamrani.y@gmail.com",
                "poste" => "Full Stack Developer",
                "salaire" => 12500.00,
                "status" => "active"
            ],
            [
                "nom" => "Mansouri Driss",
                "email" => "mansouridriss@outlook.com",
                "poste" => "Network Administrator",
                "salaire" => 9000.00,
                "status" => "inactive"
            ],
            [
                "nom" => "Chraibi Kenza",
                "email" => "kenza.chraibi@yahoo.com",
                "poste" => "UI/UX Designer",
                "salaire" => 11000.00,
                "status" => "active"
            ],
            [
                "nom" => "Fassi Mehdi",
                "email" => "fassimehdi88@gmail.com",
                "poste" => "Data Analyst",
                "salaire" => 13500.00,
                "status" => "active"
            ],
            [
                "nom" => "Lahlou Zineb",
                "email" => "lahlouzineb@gmail.com",
                "poste" => "HR Specialist",
                "salaire" => 8500.00,
                "status" => "active"
            ],
            [
                "nom" => "Alami Hamza",
                "email" => "alamihamza@workmail.com",
                "poste" => "Cybersecurity Analyst",
                "salaire" => 16000.00,
                "status" => "inactive"
            ],
            [
                "nom" => "Berrada Amina",
                "email" => "berrada.amina@gmail.com",
                "poste" => "Marketing Manager",
                "salaire" => 10500.00,
                "status" => "active"
            ],
            [
                "nom" => "Slaoui Walid",
                "email" => "slaouiwalid@gmail.com",
                "poste" => "DevOps Engineer",
                "salaire" => 18000.00,
                "status" => "active"
            ],
            [
                "nom" => "Idrissi Sara",
                "email" => "idrissisara.pro@gmail.com",
                "poste" => "QA Tester",
                "salaire" => 8000.00,
                "status" => "active"
            ],
        ]);
    }
}
