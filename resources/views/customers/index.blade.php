@extends('layouts.app')

@section('title', 'Customers | POS Foundations')

@section('content')
<section class="page-hero compact">
    <div class="container">
        <p class="eyebrow">Account directory</p>
        <h1>Customer Accounts</h1>
        <p class="lead">A temporary data listing supplied by a static PHP array in CustomerController.</p>
    </div>
</section>

<section class="section table-section">
    <div class="container">
        <div class="table-meta"><span>{{ count($customers) }} customer records</span><span>Sample data</span></div>
        <div class="table-card">
            <table>
                <thead><tr><th>ID</th><th>Customer</th><th>Contact</th><th>Phone</th><th>Tier</th><th>Status</th></tr></thead>
                <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td><strong>{{ $customer['id'] }}</strong></td>
                        <td>{{ $customer['name'] }}</td>
                        <td>{{ $customer['email'] }}</td>
                        <td>{{ $customer['phone'] }}</td>
                        <td><span class="tier tier-{{ strtolower($customer['tier']) }}">{{ $customer['tier'] }}</span></td>
                        <td><span class="status {{ strtolower($customer['status']) }}">{{ $customer['status'] }}</span></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
