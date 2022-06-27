<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;

class CommonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
	        CitiesTableSeeder::class,
	        ClientsTableSeeder::class,
	        ContractTypesTableSeeder::class,
	        CountriesTableSeeder::class,
	        EducationsTableSeeder::class,
	        GendersTableSeeder::class,
	        MaritalStatusesTableSeeder::class,
	        MembershipsTableSeeder::class,
	        ReligionsTableSeeder::class,
	        StatesTableSeeder::class,
	        CurrencySeeder::class,
	        PartnerSeeder::class,
	        OfficeSeeder::class,
        ]);
    }
}
