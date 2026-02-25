<!DOCTYPE html>
<html lang="ht">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enskripsyon Chofè - YONKOUS</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #000 0%, #1a1a1a 100%);
            color: #fff;
            min-height: 100vh;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            max-width: 500px;
            width: 100%;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            border: 1px solid rgba(255, 193, 7, 0.3);
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo img {
            width: 120px;
            height: auto;
        }

        h1 {
            text-align: center;
            color: #FFC107;
            font-size: 1.8rem;
            margin-bottom: 10px;
        }

        .subtitle {
            text-align: center;
            color: #ccc;
            margin-bottom: 40px;
            font-size: 0.95rem;
            line-height: 1.5;
        }

        .alert {
            padding: 15px 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            font-size: 0.95rem;
        }

        .alert-success {
            background: rgba(76, 175, 80, 0.2);
            border: 1px solid #4CAF50;
            color: #81C784;
        }

        .alert-error {
            background: rgba(244, 67, 54, 0.2);
            border: 1px solid #f44336;
            color: #EF5350;
        }

        .form-group {
            margin-bottom: 25px;
        }

        label {
            display: block;
            color: #FFC107;
            margin-bottom: 8px;
            font-weight: 500;
            font-size: 0.95rem;
        }

        label span.required {
            color: #f44336;
        }

        input[type="text"],
        input[type="tel"] {
            width: 100%;
            padding: 14px 18px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 193, 7, 0.3);
            border-radius: 10px;
            color: #fff;
            font-size: 1rem;
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="tel"]:focus {
            outline: none;
            border-color: #FFC107;
            background: rgba(255, 255, 255, 0.15);
            box-shadow: 0 0 0 3px rgba(255, 193, 7, 0.1);
        }

        .phone-input-group {
            display: flex;
            gap: 10px;
            align-items: stretch;
        }

        .phone-prefix {
            padding: 15px 20px;
            background: rgba(255, 193, 7, 0.15);
            border: 1px solid rgba(255, 193, 7, 0.4);
            border-radius: 10px;
            color: #FFC107;
            font-size: 1rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            white-space: nowrap;
        }

        .phone-input-group input[type="tel"] {
            flex: 1;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 15px;
            background: rgba(255, 193, 7, 0.05);
            border-radius: 10px;
            border: 1px solid rgba(255, 193, 7, 0.2);
        }

        input[type="checkbox"] {
            width: 22px;
            height: 22px;
            cursor: pointer;
            accent-color: #FFC107;
        }

        .checkbox-group label {
            margin-bottom: 0;
            color: #fff;
            font-weight: 400;
        }

        .form-hint {
            font-size: 0.85rem;
            color: #999;
            margin-top: 6px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .form-hint svg {
            width: 16px;
            height: 16px;
            fill: #FFC107;
        }

        .error {
            color: #f44336;
            font-size: 0.85rem;
            margin-top: 5px;
        }

        .submit-btn {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, #FFC107 0%, #FFD54F 100%);
            color: #000;
            font-size: 1.1rem;
            font-weight: 600;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(255, 193, 7, 0.4);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            color: #FFC107;
            text-decoration: none;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }

        .back-link:hover {
            color: #FFD54F;
            padding-left: 5px;
        }

        .whatsapp-icon {
            display: inline-block;
            width: 20px;
            height: 20px;
            vertical-align: middle;
            margin-left: 5px;
        }

        @media (max-width: 768px) {
            .container {
                padding: 30px 20px;
            }

            h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="/images/logo/logo_yonkous.png" alt="YONKOUS Logo">
        </div>

        <h1>Vin Chofè YONKOUS</h1>
        <p class="subtitle">Ranpli enfòmasyon debaz yo pou w enskri. N ap kontakte w sou WhatsApp!</p>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-error">
                <strong>Genyen erè:</strong>
                <ul style="margin-top: 10px; margin-left: 20px;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('driver.register.submit') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Prenon <span class="required">*</span></label>
                <input type="text" name="first_name" value="{{ old('first_name') }}" placeholder="Ex: Jean" required autofocus>
                @error('first_name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Non <span class="required">*</span></label>
                <input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Ex: Baptiste" required>
                @error('last_name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label>Nimewo Telefòn <span class="required">*</span></label>
                <div class="phone-input-group">
                    <div class="phone-prefix">+509</div>
                    <input type="tel" 
                           name="phone" 
                           id="phone" 
                           value="{{ old('phone') }}" 
                           placeholder="2345-6789" 
                           maxlength="8"
                           pattern="[2-5][0-9]{7}"
                           required>
                </div>
                <div class="form-hint">
                    <svg viewBox="0 0 24 24">
                        <path d="M16.75 13.96c.25.13.41.2.46.3.06.11.04.61-.21 1.18-.2.56-1.24 1.1-1.7 1.12-.46.02-.47.36-2.96-.73-2.49-1.09-3.99-3.75-4.11-3.92-.12-.17-.96-1.38-.92-2.61.05-1.22.69-1.8.95-2.04.24-.26.51-.29.68-.26h.47c.15 0 .36-.06.55.45l.69 1.87c.06.13.1.28.01.44l-.27.41-.39.42c-.12.12-.26.25-.12.5.12.26.62 1.09 1.32 1.78.91.88 1.71 1.17 1.95 1.3.24.14.39.12.54-.04l.81-.94c.19-.25.35-.19.58-.11l1.67.88M12 2a10 10 0 0 1 10 10 10 10 0 0 1-10 10c-1.97 0-3.8-.57-5.35-1.55L2 22l1.55-4.65A9.969 9.969 0 0 1 2 12 10 10 0 0 1 12 2m0 2a8 8 0 0 0-8 8c0 1.72.54 3.31 1.46 4.61L4.5 19.5l2.89-.96A7.95 7.95 0 0 0 12 20a8 8 0 0 0 8-8 8 8 0 0 0-8-8z"/>
                    </svg>
                    8 chif sèlman (pa kòmanse ak 0, 1, 6, 7, 8 oswa 9)
                </div>
                @error('phone')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <div class="checkbox-group">
                    <input type="checkbox" name="has_whatsapp" id="has_whatsapp" value="1" checked>
                    <label for="has_whatsapp">
                        Mwen gen WhatsApp sou nimewo sa
                        <svg class="whatsapp-icon" viewBox="0 0 24 24">
                            <path fill="#4CAF50" d="M16.75 13.96c.25.13.41.2.46.3.06.11.04.61-.21 1.18-.2.56-1.24 1.1-1.7 1.12-.46.02-.47.36-2.96-.73-2.49-1.09-3.99-3.75-4.11-3.92-.12-.17-.96-1.38-.92-2.61.05-1.22.69-1.8.95-2.04.24-.26.51-.29.68-.26h.47c.15 0 .36-.06.55.45l.69 1.87c.06.13.1.28.01.44l-.27.41-.39.42c-.12.12-.26.25-.12.5.12.26.62 1.09 1.32 1.78.91.88 1.71 1.17 1.95 1.3.24.14.39.12.54-.04l.81-.94c.19-.25.35-.19.58-.11l1.67.88M12 2a10 10 0 0 1 10 10 10 10 0 0 1-10 10c-1.97 0-3.8-.57-5.35-1.55L2 22l1.55-4.65A9.969 9.969 0 0 1 2 12 10 10 0 0 1 12 2m0 2a8 8 0 0 0-8 8c0 1.72.54 3.31 1.46 4.61L4.5 19.5l2.89-.96A7.95 7.95 0 0 0 12 20a8 8 0 0 0 8-8 8 8 0 0 0-8-8z"/>
                        </svg>
                    </label>
                </div>
            </div>

            <button type="submit" class="submit-btn">Enskri Kounye a 🚀</button>
        </form>

        <a href="/become-driver" class="back-link">← Retounen</a>
    </div>

    <script>
        // Validation du champ téléphone
        const phoneInput = document.getElementById('phone');
        
        phoneInput.addEventListener('input', function(e) {
            // Supprimer tout ce qui n'est pas un chiffre
            let value = e.target.value.replace(/\D/g, '');
            
            // Limiter à 8 chiffres
            if (value.length > 8) {
                value = value.slice(0, 8);
            }
            
            e.target.value = value;
        });
        
        phoneInput.addEventListener('blur', function(e) {
            const value = e.target.value;
            
            if (value.length > 0) {
                // Vérifier que c'est exactement 8 chiffres
                if (value.length !== 8) {
                    e.target.setCustomValidity('Nimewo telefòn dwe gen 8 chif');
                    return;
                }
                
                // Vérifier que le premier chiffre est valide (2, 3, 4, ou 5)
                const firstDigit = value[0];
                if (!['2', '3', '4', '5'].includes(firstDigit)) {
                    e.target.setCustomValidity('Nimewo a dwe kòmanse ak 2, 3, 4 oswa 5');
                    return;
                }
            }
            
            // Réinitialiser la validation si tout est OK
            e.target.setCustomValidity('');
        });
        
        // Réinitialiser la validation lors de la saisie
        phoneInput.addEventListener('input', function(e) {
            e.target.setCustomValidity('');
        });
    </script>
</body>
</html>
