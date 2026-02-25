<!DOCTYPE html>
<html lang="ht">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - YonKous</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;700;900&family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #0a0a0a;
            color: #fff;
            overflow-x: hidden;
        }

        .parallax-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background:
                radial-gradient(ellipse at 20% 30%, rgba(255, 193, 7, 0.15) 0%, transparent 50%),
                radial-gradient(ellipse at 80% 70%, rgba(255, 193, 7, 0.1) 0%, transparent 50%),
                linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 100%);
            z-index: -2;
        }

        .grid-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:
                linear-gradient(rgba(255, 193, 7, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 193, 7, 0.03) 1px, transparent 1px);
            background-size: 50px 50px;
            z-index: -1;
            animation: gridMove 20s linear infinite;
        }

        @keyframes gridMove {
            0% { transform: translateY(0); }
            100% { transform: translateY(50px); }
        }

        .speed-lines {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
            overflow: hidden;
        }

        .speed-line {
            position: absolute;
            height: 2px;
            background: linear-gradient(90deg, transparent, rgba(255, 193, 7, 0.3), transparent);
            animation: speedLine 3s linear infinite;
        }

        @keyframes speedLine {
            0% { left: -100%; width: 20%; }
            100% { left: 100%; width: 20%; }
        }

        .speed-line:nth-child(1) { top: 20%; animation-delay: 0s; }
        .speed-line:nth-child(2) { top: 40%; animation-delay: 1s; }
        .speed-line:nth-child(3) { top: 60%; animation-delay: 2s; }
        .speed-line:nth-child(4) { top: 80%; animation-delay: 1.5s; }

        .header {
            background: linear-gradient(135deg, rgba(0,0,0,0.95) 0%, rgba(26,26,26,0.9) 100%);
            backdrop-filter: blur(20px);
            border-bottom: 2px solid rgba(255, 193, 7, 0.2);
            color: #fff;
            padding: 1.5rem 2rem;
            box-shadow: 0 10px 40px rgba(255, 193, 7, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-content {
            max-width: 1800px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .logo-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #FFC107 0%, #FFD54F 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            box-shadow: 0 5px 25px rgba(255, 193, 7, 0.4);
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        .logo h1 {
            font-family: 'Orbitron', sans-serif;
            font-size: 1.8rem;
            font-weight: 900;
            background: linear-gradient(135deg, #FFC107 0%, #FFD54F 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .user-info span {
            color: #aaa;
            font-size: 0.95rem;
        }

        .container {
            max-width: 1800px;
            margin: 3rem auto;
            padding: 0 3rem;
            position: relative;
            z-index: 1;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 3rem;
        }

        .stat-card {
            background: linear-gradient(135deg, rgba(26, 26, 26, 0.9) 0%, rgba(15, 15, 15, 0.95) 100%);
            border: 1px solid rgba(255, 193, 7, 0.15);
            border-radius: 16px;
            padding: 1.5rem;
            position: relative;
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
            backdrop-filter: blur(10px);
            display: flex;
            flex-direction: column;
            gap: 0.8rem;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, #FFC107 0%, transparent 100%);
            opacity: 0;
            transition: opacity 0.3s;
        }

        .stat-card:hover::before {
            opacity: 1;
        }

        .stat-card::after {
            content: '';
            position: absolute;
            bottom: -50%;
            right: -50%;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(255, 193, 7, 0.08) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.3s;
        }

        .stat-card:hover::after {
            opacity: 1;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            border-color: rgba(255, 193, 7, 0.4);
            box-shadow: 0 15px 40px rgba(255, 193, 7, 0.15);
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            position: relative;
            z-index: 1;
            background: linear-gradient(135deg, rgba(255, 193, 7, 0.15) 0%, rgba(255, 213, 79, 0.08) 100%);
            border: 1px solid rgba(255, 193, 7, 0.2);
        }

        .stat-value {
            font-family: 'Orbitron', sans-serif;
            font-size: 2.2rem;
            font-weight: 900;
            background: linear-gradient(135deg, #FFC107 0%, #FFD54F 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            line-height: 1;
            margin: 0;
        }

        .stat-label {
            color: #999;
            font-size: 0.85rem;
            font-weight: 400;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .quick-actions {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
        }

        .action-card {
            background: linear-gradient(135deg, rgba(26, 26, 26, 0.9) 0%, rgba(15, 15, 15, 0.95) 100%);
            border: 1px solid rgba(255, 193, 7, 0.15);
            border-radius: 16px;
            padding: 2rem;
            position: relative;
            overflow: hidden;
            transition: all 0.3s;
            text-align: left;
        }

        .action-card::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(90deg, #FFC107 0%, transparent 100%);
            opacity: 0;
            transition: opacity 0.3s;
        }

        .action-card:hover::after {
            opacity: 1;
        }

        .action-card:hover {
            border-color: rgba(255, 193, 7, 0.4);
            box-shadow: 0 15px 40px rgba(255, 193, 7, 0.15);
        }

        .action-card h3 {
            font-family: 'Orbitron', sans-serif;
            font-size: 1.2rem;
            margin-bottom: 0.8rem;
            color: #FFC107;
            font-weight: 700;
        }

        .action-card p {
            color: #888;
            margin-bottom: 1.5rem;
            line-height: 1.5;
            font-size: 0.9rem;
        }

        .btn {
            background: linear-gradient(135deg, #FFC107 0%, #FFD54F 100%);
            color: #000;
            text-decoration: none;
            padding: 0.8rem 1.5rem;
            border-radius: 10px;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(255, 193, 7, 0.3);
            font-family: 'Inter', sans-serif;
            font-size: 0.85rem;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 25px rgba(255, 193, 7, 0.5);
        }

        .btn-logout {
            background: linear-gradient(135deg, #f44336 0%, #e91e63 100%);
            color: #fff;
            padding: 0.7rem 1.5rem;
            box-shadow: 0 5px 20px rgba(244, 67, 54, 0.3);
        }

        .btn-logout:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 30px rgba(244, 67, 54, 0.5);
        }

        @media (max-width: 768px) {
            .container {
                padding: 0 1.5rem;
            }

            .header {
                padding: 1rem 1.5rem;
            }

            .stats-grid,
            .quick-actions {
                grid-template-columns: 1fr;
            }

            .stat-value {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="parallax-bg"></div>
    <div class="grid-overlay"></div>
    <div class="speed-lines">
        <div class="speed-line"></div>
        <div class="speed-line"></div>
        <div class="speed-line"></div>
        <div class="speed-line"></div>
    </div>

    <div class="header">
        <div class="header-content">
            <div class="logo">
                <div class="logo-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="width: 28px; height: 28px; color: #000;">
                        <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                        <polygon points="12 15 17 21 7 21 12 15"></polygon>
                    </svg>
                </div>
                <h1>YonKous Control</h1>
            </div>
            <div class="user-info">
                <span>{{ auth()->user()->email }}</span>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn-logout">Dekonekte</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 style="font-family: 'Orbitron', sans-serif; font-size: 2rem; margin-bottom: 2rem; position: relative; display: inline-block;">📊 Estatistik</h2>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 24px; height: 24px; color: #FFC107;">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                </div>
                <div class="stat-value">{{ $totalDrivers }}</div>
                <div class="stat-label">Total Chofè</div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 24px; height: 24px; color: #FFC107;">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                </div>
                <div class="stat-value">{{ $pendingDrivers }}</div>
                <div class="stat-label">An Atant</div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 24px; height: 24px; color: #4CAF50;">
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                </div>
                <div class="stat-value">{{ $approvedDrivers }}</div>
                <div class="stat-label">Apwouve</div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 24px; height: 24px; color: #4CAF50;">
                        <line x1="12" y1="1" x2="12" y2="23"></line>
                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                    </svg>
                </div>
                <div class="stat-value">{{ $paidDrivers }}</div>
                <div class="stat-label">Peye 100 GDS</div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 24px; height: 24px; color: #2196F3;">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    </svg>
                </div>
                <div class="stat-value">{{ $totalContacts }}</div>
                <div class="stat-label">Total Mesaj</div>
            </div>

            <div class="stat-card">
                <div class="stat-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 24px; height: 24px; color: #2196F3;">
                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                    </svg>
                </div>
                <div class="stat-value">{{ $newContacts }}</div>
                <div class="stat-label">Nouvo Mesaj</div>
            </div>
        </div>

        <h2 style="font-family: 'Orbitron', sans-serif; font-size: 2rem; margin-bottom: 2rem; margin-top: 3rem;">⚡ Aksyon Rapid</h2>

        <div class="quick-actions">
            <div class="action-card">
                <h3>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; margin-right: 8px;">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                    Jere Chofè
                </h3>
                <p>Gade, apwouve oswa rejte enskrisyon chofè yo. Verifye peman 100 GDS.</p>
                <a href="{{ route('admin.drivers') }}" class="btn">Gade Chofè →</a>
            </div>

            <div class="action-card">
                <h3>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 20px; height: 20px; display: inline-block; vertical-align: middle; margin-right: 8px;">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    </svg>
                    Jere Mesaj
                </h3>
                <p>Konsulte epi reponn mesaj kliyan yo. Mete ajou estati kontak yo.</p>
                <a href="{{ route('admin.contacts') }}" class="btn">Gade Mesaj →</a>
            </div>
        </div>
    </div>
</body>
</html>
