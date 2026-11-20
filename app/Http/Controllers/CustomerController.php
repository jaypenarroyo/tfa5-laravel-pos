<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CustomerController extends Controller
{
    public function index(): View
    {
        $customers = [
            ['id' => 'C-1001', 'name' => 'Alyssa Reyes', 'email' => 'alyssa.reyes@example.com', 'phone' => '0917 123 4501', 'tier' => 'Gold', 'status' => 'Active'],
            ['id' => 'C-1002', 'name' => 'Marco Santos', 'email' => 'marco.santos@example.com', 'phone' => '0918 234 5602', 'tier' => 'Silver', 'status' => 'Active'],
            ['id' => 'C-1003', 'name' => 'Bea Navarro', 'email' => 'bea.navarro@example.com', 'phone' => '0919 345 6703', 'tier' => 'Gold', 'status' => 'Active'],
            ['id' => 'C-1004', 'name' => 'Carlo Mendoza', 'email' => 'carlo.mendoza@example.com', 'phone' => '0920 456 7804', 'tier' => 'Bronze', 'status' => 'Inactive'],
            ['id' => 'C-1005', 'name' => 'Denise Lim', 'email' => 'denise.lim@example.com', 'phone' => '0921 567 8905', 'tier' => 'Silver', 'status' => 'Active'],
            ['id' => 'C-1006', 'name' => 'Enzo Villanueva', 'email' => 'enzo.villanueva@example.com', 'phone' => '0922 678 9006', 'tier' => 'Bronze', 'status' => 'Active'],
        ];

        return view('customers.index', compact('customers'));
    }
}
