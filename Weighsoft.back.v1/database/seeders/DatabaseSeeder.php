<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Company::create([
            'code' => 'COMP001',
            'registered_name' => 'Demo Mining Ltd',
            'tel' => '0511234567', 
            'fax' => '0511234568',
            'email' => 'info@demomining.co.za',
            'registration_number' => '2026/000001/07',
            'vat_nr' => '4123456789',
            'contact_person' => 'John Smith',
            'cell' => '0821234567',
            'street' => '1 Mining Road',
            'suburb1' => 'Industrial',
            'city1' => 'Bloemfontein',
            'postal_code1' => '9301',
            'po_box' => 'PO Box 100',
            'suburb2' => 'CBD',
            'city2' => 'Bloemfontein',
            'postal_code2' => '9300',
            'terms' => 'Payment due within 30 days',
            'smart_hauliers' => 'No'
        ]);

        Company::create([
            'code' => 'COMP002',
            'registered_name' => 'Demo Logistics Ltd',
            'tel' => '0119876543',
            'fax' => '0119876544',
            'email' => 'admin@demologistics.co.za',
            'registration_number' => '2026/000002/07',
            'vat_nr' => '4987654321',
            'contact_person' => 'Jane Doe',
            'cell' => '0839876543',
            'street' => '25 Transport Avenue',
            'suburb1' => 'Logistics Park',
            'city1' => 'Johannesburg',
            'postal_code1' => '2000',
            'po_box' => 'PO Box 200',
            'suburb2' => 'Business District',
            'city2' => 'Johannesburg',
            'postal_code2' => '2001',
            'terms' => 'Payment due within 14 days',
            'smart_hauliers' => 'Yes'
        ]);
    }
}
