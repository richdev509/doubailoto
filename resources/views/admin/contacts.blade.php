<!DOCTYPE html>
<html lang="ht">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jere Mesaj - YonKous Admin</title>
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

        .badge-new {
            background: #FFF3CD;
            color: #856404;
        }

        .badge-in_progress {
            background: #D1ECF1;
            color: #0C5460;
        }

        .badge-resolved {
            background: #D4EDDA;
            color: #155724;
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

        .message-preview {
            max-width: 300px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
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

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            background: #fff;
            padding: 2rem;
            border-radius: 10px;
            max-width: 600px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .modal-header h3 {
            color: #333;
        }

        .close-btn {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: #999;
        }

        .detail-row {
            margin-bottom: 1rem;
        }

        .detail-label {
            font-weight: 600;
            color: #666;
            margin-bottom: 0.3rem;
        }

        .detail-value {
            padding: 0.5rem;
            background: #f9f9f9;
            border-radius: 5px;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-family: 'Poppins', sans-serif;
        }

        .form-group textarea {
            min-height: 100px;
            resize: vertical;
        }

        @media (max-width: 768px) {
            .table-container {
                font-size: 0.85rem;
            }

            th, td {
                padding: 0.7rem 0.5rem;
            }

            .message-preview {
                max-width: 150px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="header-content">
            <div class="logo">
                <h1>💬 Jere Mesaj</h1>
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
                        <th>Non</th>
                        <th>Telefòn</th>
                        <th>Sije</th>
                        <th>Mesaj</th>
                        <th>Estati</th>
                        <th>Dat</th>
                        <th>Aksyon</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($contacts as $contact)
                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ $contact->subject }}</td>
                            <td>
                                <div class="message-preview">
                                    {{ Str::limit($contact->message, 50) }}
                                </div>
                            </td>
                            <td>
                                @if($contact->status === 'new')
                                    <span class="badge badge-new">Nouvo</span>
                                @elseif($contact->status === 'in_progress')
                                    <span class="badge badge-in_progress">An Pwogre</span>
                                @else
                                    <span class="badge badge-resolved">Rezoud</span>
                                @endif
                            </td>
                            <td>{{ $contact->created_at->format('d/m/Y H:i') }}</td>
                            <td>
                                <button onclick="viewContact({{ $contact->id }})" class="btn btn-primary">
                                    Gade Detay
                                </button>
                                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $contact->phone) }}"
                                   target="_blank"
                                   class="btn btn-warning">
                                    💬 WhatsApp
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" style="text-align: center; padding: 2rem;">
                                Pa gen mesaj ankò
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="pagination">
            {{ $contacts->links() }}
        </div>
    </div>

    <!-- Modal pour voir et répondre -->
    <div id="contactModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Detay Mesaj</h3>
                <button class="close-btn" onclick="closeModal()">×</button>
            </div>
            <div id="modalBody">
                <!-- Contenu chargé dynamiquement -->
            </div>
        </div>
    </div>

    <script>
        const contacts = @json($contacts->items());

        function viewContact(contactId) {
            const contact = contacts.find(c => c.id === contactId);
            if (!contact) return;

            const modalBody = document.getElementById('modalBody');
            modalBody.innerHTML = `
                <div class="detail-row">
                    <div class="detail-label">Non:</div>
                    <div class="detail-value">${contact.name}</div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Telefòn:</div>
                    <div class="detail-value">${contact.phone}</div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Sije:</div>
                    <div class="detail-value">${contact.subject}</div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Mesaj:</div>
                    <div class="detail-value">${contact.message}</div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Dat:</div>
                    <div class="detail-value">${new Date(contact.created_at).toLocaleString('fr-HT')}</div>
                </div>
                ${contact.response ? `
                <div class="detail-row">
                    <div class="detail-label">Repons:</div>
                    <div class="detail-value">${contact.response}</div>
                </div>
                ` : ''}

                <form action="/admin/contacts/${contact.id}/update" method="POST" style="margin-top: 2rem;">
                    <input type="hidden" name="_token" value="${document.querySelector('meta[name="csrf-token"]')?.content || ''}">
                    <input type="hidden" name="_method" value="PATCH">

                    <div class="form-group">
                        <label>Estati:</label>
                        <select name="status" required>
                            <option value="new" ${contact.status === 'new' ? 'selected' : ''}>Nouvo</option>
                            <option value="in_progress" ${contact.status === 'in_progress' ? 'selected' : ''}>An Pwogre</option>
                            <option value="resolved" ${contact.status === 'resolved' ? 'selected' : ''}>Rezoud</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Repons (Opsyonèl):</label>
                        <textarea name="response" placeholder="Ekri yon repons...">${contact.response || ''}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%;">Mete Ajou</button>
                </form>
            `;

            document.getElementById('contactModal').style.display = 'flex';
        }

        function closeModal() {
            document.getElementById('contactModal').style.display = 'none';
        }

        // Fermer modal en cliquant dehors
        window.onclick = function(event) {
            const modal = document.getElementById('contactModal');
            if (event.target === modal) {
                closeModal();
            }
        }
    </script>
</body>
</html>
