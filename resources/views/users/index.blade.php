@extends('layouts.app')

@section('title', 'Users | POS Foundations')

@section('content')
<section class="page-hero compact">
    <div class="container">
        <p class="eyebrow">Team access</p>
        <h1>User Accounts</h1>
        <p class="lead">A role-based listing supplied by a static PHP array in UserController.</p>
    </div>
</section>

<section class="section table-section">
    <div class="container">
        <div class="table-meta"><span>{{ count($users) }} user records</span><span>Sample data</span></div>
        <div class="table-card">
            <table>
                <thead><tr><th>ID</th><th>User</th><th>Email</th><th>Role</th><th>Branch</th><th>Status</th></tr></thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td><strong>{{ $user['id'] }}</strong></td>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ $user['role'] }}</td>
                        <td>{{ $user['branch'] }}</td>
                        <td><span class="status {{ strtolower($user['status']) }}">{{ $user['status'] }}</span></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
