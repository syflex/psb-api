<?php

use Illuminate\Database\Seeder;


class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supplier = new  App\Supplier;
        $supplier->name = 'Supplier One';
        $supplier->email = 'supplierone@email.com';
        $supplier->phone = '07067822618';
        $supplier->address = 'N015 Bwari Abuja';
        $supplier->save();

        $supplier_bank = new  App\SupplierBankDetail;
        $supplier_bank->supplier_id = $supplier->id;
        $supplier_bank->account_name = 'Supplier One';
        $supplier_bank->bank_name = 'GTB';
        $supplier_bank->account_number = '0004523457';
        $supplier_bank->sort_code = '';
        $supplier_bank->save();

    }
}
