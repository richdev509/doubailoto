<!DOCTYPE html>
<html lang="ht">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jere Chofè - YonKous Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f5f5f5;
            color: #333;
        }

        .header {
            background: linear-gradient(135deg, #000 0%, #1a1a1a 100%);
            color: #fff;
            padding: 1.5rem 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .header-content {
            max-width: 1600px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo h1 {
            color: #FFC107;
            font-size: 1.5rem;
        }

        .nav-links {
            display: flex;
            gap: 1rem;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .nav-links a:hover {
            background: rgba(255, 193, 7, 0.2);
        }

        .container {
            max-width: 1600px;
            margin: 2rem auto;
            padding: 0 2rem;
        }

        .alert {
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
        }

        .alert-success {
            background: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
        }

        .filters {
            background: #fff;
            padding: 1.5rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .filters h3 {
            margin-bottom: 1rem;
        }

        .filter-buttons {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 0.6rem 1.5rem;
            border: 2px solid #ddd;
            background: #fff;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .filter-btn.active {
            background: #FFC107;
            border-color: #FFC107;
            color: #000;
            font-weight: 600;
        }

        .table-container {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #333;
            color: #fff;
            padding: 1rem;
            text-align: left;
            font-weight: 600;
        }

        td {
            padding: 1rem;
            border-bottom: 1px solid #eee;
        }

        tr:hover {
            background: #f9f9f9;
        }

        .badge {
            display: inline-block;
            padding: 0.4rem 0.8rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .badge-pending {
            background: #FFF3CD;
            color: #856404;
        }

        .badge-approved {
            background: #D4EDDA;
            color: #155724;
        }

        .badge-rejected {
            background: #F8D7DA;
            color: #721C24;
        }

        .badge-paid {
            background: #D1ECF1;
            color: #0C5460;
        }

        .actions {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
        }

        .btn {
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.85rem;
            font-weight: 600;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .btn-success {
            background: #4CAF50;
            color: #fff;
        }

        .btn-danger {
            background: #f44336;
            color: #fff;
        }

        .btn-primary {
            background: #2196F3;
            color: #fff;
        }

        .btn-warning {
            background: #FFC107;
            color: #000;
        }

        .btn:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }

        .checkbox-payment {
            width: 24px;
            height: 24px;
            cursor: pointer;
            accent-color: #4CAF50;
        }

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 2rem;
            gap: 0.5rem;
        }

        .pagination a,
        .pagination span {
            padding: 0.5rem 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-decoration: none;
            color: #333;
        }

        .pagination .active {
            background: #FFC107;
            border-color: #FFC107;
            color: #000;
            font-weight: 600;
        }

        @media (max-width: 768px) {
            .table-container {
                font-size: 0.85rem;
            }

            th, td {
                padding: 0.7rem 0.5rem;
            }

            .actions {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="header-content">
            <div class="logo">
                <h1>🏍️ Jere Chofè</h1>
            </div>
            <div class="nav-links">
                <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                <a href="{{ route('admin.drivers') }}">Chofè</a>
                <a href="{{ route('admin.contacts') }}">Mesaj</a>
            </div>
        </div>
    </div>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Prenon</th>
                        <th>Non</th>
                        <th>Telefòn</th>
                        <th>WhatsApp</th>
                        <th>Estati</th>
                        <th>100 GDS Peye</th>
                        <th>Dat Enskripsyon</th>
                        <th>Aksyon</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($drivers as $driver)
                        <tr>
                            <td>{{ $driver->id }}</td>
                            <td>{{ $driver->first_name ?? 'N/A' }}</td>
                            <td>{{ $driver->last_name ?? 'N/A' }}</td>
                            <td>{{ $driver->phone }}</td>
                            <td>
                                @if($driver->has_whatsapp)
                                    <span style="color: #4CAF50;">✓ Wi</span>
                                @else
                                    <span style="color: #999;">✗ Non</span>
                                @endif
                            </td>
                            <td>
                                @if($driver->status === 'pending')
                                    <span class="badge badge-pending">An Atant</span>
                                @elseif($driver->status === 'approved')
                                    <span class="badge badge-approved">Apwouve</span>
                                @else
                                    <span class="badge badge-rejected">Rejte</span>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('admin.drivers.toggle-payment', $driver->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('PATCH')
                                    <input type="checkbox"
                                           class="checkbox-payment"
                                           {{ $driver->payment_completed ? 'checked' : '' }}
                                           onchange="this.form.submit()">
                                </form>
                            </td>
                            <td>{{ $driver->created_at->format('d/m/Y H:i') }}</td>
                            <td>
                                <div class="actions">
                                    @if($driver->status === 'pending')
                                        <form action="{{ route('admin.drivers.approve', $driver->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('PATCH')
                                            <button type="submit" class="btn btn-success">Apwouve</button>
                                        </form>
                                        <button onclick="showRejectModal({{ $driver->id }})" class="btn btn-danger">Rejte</button>
                                    @endif
                                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $driver->phone) }}"
                                       target="_blank"
                                       class="btn btn-primary">
                                        💬 WhatsApp
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" style="text-align: center; padding: 2rem;">
                                Pa gen chofè enskri ankò
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="pagination">
            {{ $drivers->links() }}
        </div>
    </div>

    <!-- Modal pour rejeter -->
    <div id="rejectModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000; align-items: center; justify-content: center;">
        <div style="background: #fff; padding: 2rem; border-radius: 10px; max-width: 500px; width: 90%;">
            <h3 style="margin-bottom: 1rem;">Rejte Chofè</h3>
            <form id="rejectForm" method="POST">
                @csrf
                @method('PATCH')
                <label style="display: block; margin-bottom: 0.5rem;">Rezon:</label>
                <textarea name="reason" style="width: 100%; padding: 0.8rem; border: 1px solid #ddd; border-radius: 5px; min-height: 100px;" required></textarea>
                <div style="display: flex; gap: 1rem; margin-top: 1rem;">
                    <button type="submit" class="btn btn-danger">Konfime Rejte</button>
                    <button type="button" onclick="closeRejectModal()" class="btn" style="background: #999; color: #fff;">Anile</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function showRejectModal(driverId) {
            document.getElementById('rejectModal').style.display = 'flex';
            document.getElementById('rejectForm').action = `/admin/drivers/${driverId}/reject`;
        }

        function closeRejectModal() {
            document.getElementById('rejectModal').style.display = 'none';
        }
    </script>
</body>
</html>
