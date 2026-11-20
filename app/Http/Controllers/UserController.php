<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        $users = [
            ['id' => 'U-001', 'name' => 'Jay Penarroyo', 'email' => 'jay@pos.local', 'role' => 'Administrator', 'branch' => 'Main Branch', 'status' => 'Active'],
            ['id' => 'U-002', 'name' => 'Mika Garcia', 'email' => 'mika@pos.local', 'role' => 'Manager', 'branch' => 'Main Branch', 'status' => 'Active'],
            ['id' => 'U-003', 'name' => 'Noel Cruz', 'email' => 'noel@pos.local', 'role' => 'Cashier', 'branch' => 'North Branch', 'status' => 'Active'],
            ['id' => 'U-004', 'name' => 'Paula Ramos', 'email' => 'paula@pos.local', 'role' => 'Cashier', 'branch' => 'South Branch', 'status' => 'Active'],
            ['id' => 'U-005', 'name' => 'Rico Flores', 'email' => 'rico@pos.local', 'role' => 'Inventory Clerk', 'branch' => 'Main Branch', 'status' => 'Inactive'],
            ['id' => 'U-006', 'name' => 'Tina Aquino', 'email' => 'tina@pos.local', 'role' => 'Supervisor', 'branch' => 'North Branch', 'status' => 'Active'],
        ];

        return view('users.index', compact('users'));
    }
}
