<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trains = [
            [
                'azienda' => 'Captrain ',
                'stazione_di_partenza' => 'Roma Termini',
                'stazione_di_arrivo' => 'Milano Centrale',
                'orario_di_partenza' => '2024-12-05 12:55:00',
                'orario_di_arrivo' => '2024-12-05 13:55:00',
                'codice_treno' => 'PFG876',
                'numero_di_carrozze' => '9',
                'in_orario' => '1',
                'cancellato' => '0',
            ],
            [            
                'azienda' => 'Captrain ',
                'stazione_di_partenza' => 'Roma Termini',
                'stazione_di_arrivo' => 'Milano Centrale',
                'orario_di_partenza' => '2024-12-05 12:55:00',
                'orario_di_arrivo' => '2024-12-05 13:55:00',
                'codice_treno' => 'PFG876',
                'numero_di_carrozze' => '9',
                'in_orario' => '1',
                'cancellato' => '0',
            ],

            [
                'azienda' => 'Nuova Azienda',
                'stazione_di_partenza' => 'Napoli Centrale',
                'stazione_di_arrivo' => 'Firenze Santa Maria Novella',
                'orario_di_partenza' => '2024-12-06 08:30:00',
                'orario_di_arrivo' => '2024-12-06 11:15:00',
                'codice_treno' => 'ABC123',
                'numero_di_carrozze' => '6',
                'in_orario' => '1',
                'cancellato' => '0',
            ],

            [
                'azienda' => 'Treni Italia',
                'stazione_di_partenza' => 'Torino Porta Nuova',
                'stazione_di_arrivo' => 'Venezia Santa Lucia',
                'orario_di_partenza' => '2024-12-07 15:45:00',
                'orario_di_arrivo' => '2024-12-07 19:20:00',
                'codice_treno' => 'XYZ789',
                'numero_di_carrozze' => '8',
                'in_orario' => '1',
                'cancellato' => '0',
            ],
            
        ];
        foreach ($trains as $train) {
            $newTrain = new Train(); 
            $newTrain->azienda = $train['azienda'];
            $newTrain->stazione_di_partenza = $train['stazione_di_partenza'];
            $newTrain->stazione_di_arrivo = $train['stazione_di_arrivo'];
            $newTrain->orario_di_partenza = $train['orario_di_partenza'];
            $newTrain->orario_di_arrivo = $train['orario_di_arrivo'];
            $newTrain->codice_treno = $train['codice_treno'];
            $newTrain->numero_di_carrozze = $train['numero_di_carrozze'];
            $newTrain->in_orario = $train['in_orario'];
            $newTrain->cancellato = $train['cancellato'];
            $newTrain->save();
        }
    }
}
