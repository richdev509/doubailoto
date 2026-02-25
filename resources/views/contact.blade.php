<!DOCTYPE html>
<html lang="ht">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakte Nou - YonKous</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
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
            line-height: 1.6;
        }

        .header {
            background: rgba(0, 0, 0, 0.95);
            padding: 1rem 2rem;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            border-bottom: 2px solid #FFC107;
        }

        .header-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 0.8rem;
        }

        .logo-container img {
            height: 50px;
            width: auto;
        }

        .logo-text {
            font-size: 1.8rem;
            font-weight: 900;
        }

        .yon {
            color: #FFC107;
            -webkit-text-stroke: 3px #000;
            text-stroke: 3px #000;
            paint-order: stroke fill;
        }

        .kous {
            color: #fff;
            -webkit-text-stroke: 3px #000;
            text-stroke: 3px #000;
            paint-order: stroke fill;
        }

        .back-link {
            color: #FFC107;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
        }

        .back-link:hover {
            color: #FFD54F;
        }

        .container {
            max-width: 1200px;
            margin: 120px auto 60px;
            padding: 2rem;
        }

        .hero-section {
            text-align: center;
            margin-bottom: 4rem;
        }

        .hero-section h1 {
            font-size: 3rem;
            color: #FFC107;
            margin-bottom: 1rem;
        }

        .hero-section p {
            font-size: 1.2rem;
            color: #ddd;
            max-width: 700px;
            margin: 0 auto;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .contact-info {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 20px;
            padding: 3rem;
            border: 1px solid rgba(255, 193, 7, 0.2);
        }

        .contact-info h2 {
            color: #FFC107;
            font-size: 2rem;
            margin-bottom: 2rem;
        }

        .contact-item {
            display: flex;
            align-items: start;
            gap: 1.5rem;
            margin-bottom: 2rem;
            padding: 1.5rem;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            transition: all 0.3s;
        }

        .contact-item:hover {
            background: rgba(255, 193, 7, 0.1);
            transform: translateX(5px);
        }

        .contact-icon {
            font-size: 2rem;
            color: #FFC107;
        }

        .contact-details h3 {
            color: #FFC107;
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .contact-details p {
            color: #ddd;
            font-size: 1rem;
        }

        .contact-details a {
            color: #FFC107;
            text-decoration: none;
            transition: all 0.3s;
        }

        .contact-details a:hover {
            color: #FFD54F;
        }

        .contact-form {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 20px;
            padding: 3rem;
            border: 1px solid rgba(255, 193, 7, 0.2);
        }

        .contact-form h2 {
            color: #FFC107;
            font-size: 2rem;
            margin-bottom: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            color: #FFC107;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 1rem;
            border: 2px solid rgba(255, 193, 7, 0.3);
            background: rgba(0, 0, 0, 0.3);
            color: #fff;
            border-radius: 10px;
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: #FFC107;
            background: rgba(0, 0, 0, 0.5);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 150px;
        }

        .submit-btn {
            width: 100%;
            padding: 1.2rem;
            background: #FFC107;
            color: #000;
            border: none;
            border-radius: 10px;
            font-weight: 700;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s;
        }

        .submit-btn:hover {
            background: #FFD54F;
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(255, 193, 7, 0.3);
        }

        .social-section {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 20px;
            padding: 3rem;
            text-align: center;
            border: 1px solid rgba(255, 193, 7, 0.2);
        }

        .social-section h2 {
            color: #FFC107;
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .social-section p {
            color: #ddd;
            font-size: 1.1rem;
            margin-bottom: 2rem;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .social-link {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            padding: 1rem 2rem;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            text-decoration: none;
            color: #fff;
            font-weight: 600;
            transition: all 0.3s;
            border: 2px solid rgba(255, 193, 7, 0.3);
        }

        .social-link:hover {
            background: rgba(255, 193, 7, 0.1);
            border-color: #FFC107;
            transform: translateY(-3px);
        }

        .social-icon {
            font-size: 1.5rem;
        }

        .faq-section {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 20px;
            padding: 3rem;
            margin-top: 3rem;
            border: 1px solid rgba(255, 193, 7, 0.2);
        }

        .faq-section h2 {
            color: #FFC107;
            font-size: 2rem;
            margin-bottom: 2rem;
            text-align: center;
        }

        .faq-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
        }

        .faq-item {
            padding: 1.5rem;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            border-left: 4px solid #FFC107;
        }

        .faq-item h3 {
            color: #FFC107;
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
        }

        .faq-item p {
            color: #ddd;
            font-size: 0.95rem;
        }

        @media (max-width: 768px) {
            .contact-grid {
                grid-template-columns: 1fr;
            }

            .faq-grid {
                grid-template-columns: 1fr;
            }

            .social-links {
                flex-direction: column;
                align-items: center;
            }

            .social-link {
                width: 100%;
                justify-content: center;
            }

            .hero-section h1 {
                font-size: 2rem;
            }

            .contact-info,
            .contact-form {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="header-content">
            <div class="logo-container">
                <img src="/images/logo/logo_yonkous.png" alt="YonKous">
                <div class="logo-text">
                    <span class="yon">YON</span><span class="kous">KOUS</span>
                </div>
            </div>
            <a href="/" class="back-link">← Retounen Lakay</a>
        </div>
    </header>

    <div class="container">
        <div class="hero-section">
            <h1>📞 Kontakte Nou</h1>
            <p>N ap isit la pou ede w. Voye yon mesaj oswa rele nou, n ap reponn ou rapid.</p>
        </div>

        <div class="contact-grid">
            <div class="contact-info">
                <h2>Enfòmasyon Kontak</h2>

                <div class="contact-item">
                    <div class="contact-icon">📱</div>
                    <div class="contact-details">
                        <h3>Telefòn</h3>
                        <p><a href="tel:+50931071890">+509 31-07-18-90</a></p>
                        <p style="font-size: 0.9rem; color: #bbb;">Disponib 24/7</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">📍</div>
                    <div class="contact-details">
                        <h3>Adrès</h3>
                        <p>Pòtoprens, Ayiti</p>
                        <p style="font-size: 0.9rem; color: #bbb;">Lendi - Vandredi: 8am - 6pm</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">💬</div>
                    <div class="contact-details">
                        <h3>WhatsApp</h3>
                        <p><a href="https://wa.me/50931071890">+509 31-07-18-90</a></p>
                        <p style="font-size: 0.9rem; color: #bbb;">Chèche nou sou WhatsApp</p>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <h2>Voye yon Mesaj</h2>

                @if(session('success'))
                    <div style="background: rgba(76, 175, 80, 0.2); border: 1px solid #4CAF50; color: #81C784; padding: 15px; border-radius: 10px; margin-bottom: 20px;">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div style="background: rgba(244, 67, 54, 0.2); border: 1px solid #f44336; color: #EF5350; padding: 15px; border-radius: 10px; margin-bottom: 20px;">
                        <strong>Genyen erè:</strong>
                        <ul style="margin-top: 10px; margin-left: 20px;">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Non Konplè *</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                        @error('name')
                            <div style="color: #f44336; font-size: 0.85rem; margin-top: 5px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="phone">Telefòn / WhatsApp *</label>
                        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" placeholder="+509 xxxx-xxxx" required>
                        @error('phone')
                            <div style="color: #f44336; font-size: 0.85rem; margin-top: 5px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="subject">Sijè *</label>
                        <select id="subject" name="subject" required>
                            <option value="">Chwazi yon sijè</option>
                            <option value="support" {{ old('subject') == 'support' ? 'selected' : '' }}>Sipò Teknik</option>
                            <option value="driver" {{ old('subject') == 'driver' ? 'selected' : '' }}>Kesyon Chofè</option>
                            <option value="security" {{ old('subject') == 'security' ? 'selected' : '' }}>Sekirite</option>
                            <option value="billing" {{ old('subject') == 'billing' ? 'selected' : '' }}>Faktiration</option>
                            <option value="suggestion" {{ old('subject') == 'suggestion' ? 'selected' : '' }}>Sijesyon</option>
                            <option value="other" {{ old('subject') == 'other' ? 'selected' : '' }}>Lòt</option>
                        </select>
                        @error('subject')
                            <div style="color: #f44336; font-size: 0.85rem; margin-top: 5px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="message">Mesaj *</label>
                        <textarea id="message" name="message" required>{{ old('message') }}</textarea>
                        @error('message')
                            <div style="color: #f44336; font-size: 0.85rem; margin-top: 5px;">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="submit-btn">Voye Mesaj 📤</button>
                </form>
            </div>
        </div>

        <div class="social-section">
            <h2>Swiv Nou sou Rezo Sosyal</h2>
            <p>Rete konekte ak YonKous pou dènye nouvèl yo ak pwomosyon espesyal</p>
            <div class="social-links">
                <a href="https://facebook.com/yonkous" class="social-link" target="_blank">
                    <span class="social-icon">📘</span>
                    <span>Facebook</span>
                </a>
                <a href="https://instagram.com/yonkous" class="social-link" target="_blank">
                    <span class="social-icon">📷</span>
                    <span>Instagram</span>
                </a>
                <a href="https://twitter.com/yonkous" class="social-link" target="_blank">
                    <span class="social-icon">🐦</span>
                    <span>Twitter</span>
                </a>
                <a href="https://youtube.com/yonkous" class="social-link" target="_blank">
                    <span class="social-icon">🎥</span>
                    <span>YouTube</span>
                </a>
            </div>
        </div>

        <div class="faq-section">
            <h2>Kesyon Rapid</h2>
            <div class="faq-grid">
                <div class="faq-item">
                    <h3>Ki lè n ap reponn?</h3>
                    <p>N ap reponn tout mesaj yo nan mwens pase 24 èdtan. Pou kesyon ijan, kontakte nou pa telefòn.</p>
                </div>
                <div class="faq-item">
                    <h3>Kijan pou rapòte yon pwoblèm?</h3>
                    <p>Itilize fòmilè a oswa rele sipò nou 24/7. Pou ijan, sèvi ak bouton ijans nan aplikasyon an.</p>
                </div>
                <div class="faq-item">
                    <h3>Kote biwo nou ye?</h3>
                    <p>Biwo presipal nou nan Pòtoprens. N ap travay pou louvri plis sant sèvis nan lòt vil yo.</p>
                </div>
                <div class="faq-item">
                    <h3>Ou ka kontakte nou nan kijan lang?</h3>
                    <p>N ap bay sèvis an Kreyòl, Fransè, ak Anglè pou tout itilizatè nou yo.</p>
                </div>
            </div>
        </div>

        <div style="text-align: center; margin-top: 3rem; padding: 3rem; background: linear-gradient(135deg, rgba(255, 193, 7, 0.1) 0%, rgba(0, 0, 0, 0.3) 100%); border-radius: 20px;">
            <h2 style="color: #FFC107; font-size: 2rem; margin-bottom: 1rem;">Bezwen Èd Rapid?</h2>
            <p style="font-size: 1.1rem; color: #ddd; margin-bottom: 2rem;">Rele sipò nou 24/7 pou yon asistans imedyat</p>
            <a href="tel:+50937000000" style="display: inline-block; background: #FFC107; color: #000; padding: 1rem 2.5rem; border-radius: 30px; font-weight: 700; text-decoration: none; transition: all 0.3s;">📞 Rele Kounye a</a>
        </div>
    </div>
    
    <p style="margin-top: 2rem; padding-top: 1.5rem; border-top: 1px solid #333; color: #999; font-size: 0.9rem; text-align: center;">
        Developper par <a href="https://sagacetech.com" target="_blank" style="color: #FFC107; text-decoration: none;">SagaceTech</a> | 
        Contact: <a href="tel:+15634680355" style="color: #FFC107; text-decoration: none;">+1 563-468-0355</a>
    </p>
</body>
</html>
