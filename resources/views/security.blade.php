<!DOCTYPE html>
<html lang="ht">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sekirite - YonKous</title>
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

        .security-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .security-card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            border: 1px solid rgba(255, 193, 7, 0.3);
            transition: all 0.3s;
        }

        .security-card:hover {
            transform: translateY(-5px);
            border-color: #FFC107;
            background: rgba(255, 193, 7, 0.1);
        }

        .security-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .security-card h3 {
            color: #FFC107;
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
        }

        .security-card p {
            color: #ddd;
        }

        .content-section {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 20px;
            padding: 3rem;
            margin-bottom: 2rem;
            border: 1px solid rgba(255, 193, 7, 0.2);
        }

        .content-section h2 {
            color: #FFC107;
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }

        .content-section p {
            font-size: 1.1rem;
            margin-bottom: 1rem;
            color: #ddd;
        }

        .feature-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            margin-top: 1.5rem;
        }

        .feature-item {
            display: flex;
            align-items: start;
            gap: 1rem;
            padding: 1rem;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            border-left: 4px solid #FFC107;
        }

        .feature-icon {
            font-size: 1.5rem;
            color: #FFC107;
        }

        .feature-item p {
            color: #ddd;
            font-size: 1rem;
        }

        .emergency-section {
            background: linear-gradient(135deg, rgba(255, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.3) 100%);
            border: 2px solid #ff4444;
            border-radius: 20px;
            padding: 3rem;
            text-align: center;
            margin-bottom: 2rem;
        }

        .emergency-section h2 {
            color: #ff4444;
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .emergency-button {
            display: inline-block;
            background: #ff4444;
            color: #fff;
            padding: 1.2rem 3rem;
            border-radius: 30px;
            font-weight: 700;
            font-size: 1.2rem;
            text-decoration: none;
            transition: all 0.3s;
            margin-top: 1rem;
        }

        .emergency-button:hover {
            background: #ff6666;
            transform: translateY(-3px);
        }

        .tips-section {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 20px;
            padding: 3rem;
            border: 1px solid rgba(255, 193, 7, 0.2);
        }

        .tips-section h2 {
            color: #FFC107;
            font-size: 2rem;
            margin-bottom: 2rem;
            text-align: center;
        }

        .tip-item {
            display: flex;
            align-items: start;
            gap: 1.5rem;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 10px;
        }

        .tip-number {
            width: 40px;
            height: 40px;
            background: #FFC107;
            color: #000;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 900;
            flex-shrink: 0;
        }

        .tip-content h3 {
            color: #FFC107;
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .tip-content p {
            color: #ddd;
        }

        @media (max-width: 768px) {
            .security-grid {
                grid-template-columns: 1fr;
            }

            .feature-list {
                grid-template-columns: 1fr;
            }

            .hero-section h1 {
                font-size: 2rem;
            }

            .content-section {
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
            <h1>🛡️ Sekirite Ou Se Priyorite Nou</h1>
            <p>YonKous mete tout mezi an plas pou asire sekirite tout pasaje ak chofè yo. Vwayaje ak kè kontan.</p>
        </div>

        <div class="security-grid">
            <div class="security-card">
                <div class="security-icon">✅</div>
                <h3>Chofè Verifye</h3>
                <p>Tout chofè pase nan yon pwosesis verifikasyon estrik ak fòmasyon.</p>
            </div>
            <div class="security-card">
                <div class="security-icon">📍</div>
                <h3>Swivi an Tan Reyèl</h3>
                <p>Gade vwayaj ou an tan reyèl epi pataje pozisyon w ak fanmi w.</p>
            </div>
            <div class="security-card">
                <div class="security-icon">🆘</div>
                <h3>Bouton Ijans</h3>
                <p>Aksè rapid a sèvis ijans nan ka pwoblèm.</p>
            </div>
            <div class="security-card">
                <div class="security-icon">🛡️</div>
                <h3>Asirans</h3>
                <p>Nou gen sevis aisirans pou asire chofè ak kliyan.</p>
            </div>
            <div class="security-card">
                <div class="security-icon">⭐</div>
                <h3>Sistèm Rating</h3>
                <p>Evalye chofè yo pou ede nou kenbe bon kalite sèvis.</p>
            </div>
            <div class="security-card">
                <div class="security-icon">📞</div>
                <h3>Sipò 24/7</h3>
                <p>Ekip sipò nou disponib pou w nenpòt lè, nenpòt kote.</p>
            </div>
        </div>

        <div class="content-section">
            <h2>Mezi Sekirite pou Pasaje</h2>
            <div class="feature-list">
                <div class="feature-item">
                    <span class="feature-icon">🔍</span>
                    <p><strong>Verifye Chofè:</strong> Gade foto, non, ak nimewo plak moto a anvan monte</p>
                </div>
                <div class="feature-item">
                    <span class="feature-icon">📱</span>
                    <p><strong>Pataje Vwayaj:</strong> Voye detay vwayaj ou bay zanmi oswa fanmi w</p>
                </div>
                <div class="feature-item">
                    <span class="feature-icon">🎧</span>
                    <p><strong>Kask:</strong> Asire w chofè ba w yon kask pwòp epi an sekirite</p>
                </div>
                <div class="feature-item">
                    <span class="feature-icon">💬</span>
                    <p><strong>Rapòte Pwoblèm:</strong> Rapòte nenpòt konpòtman ki pa apwopriye imedyatman</p>
                </div>
                <div class="feature-item">
                    <span class="feature-icon">⭐</span>
                    <p><strong>Rating Chofè:</strong> Evalye chak vwayaj pou ede lòt pasaje yo</p>
                </div>
                <div class="feature-item">
                    <span class="feature-icon">🔒</done><strong>Done Pwoteje:</strong> Enfòmasyon pèsonèl ou an sekirite</p>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h2>Mezi Sekirite pou Chofè</h2>
            <div class="feature-list">
                <div class="feature-item">
                    <span class="feature-icon">👤</span>
                    <p><strong>Profil Pasaje:</strong> Wè enfòmasyon ak rating pasaje anvan aksepte kous</p>
                </div>
                <div class="feature-item">
                    <span class="feature-icon">📍</span>
                    <p><strong>GPS Traking:</strong> Sistèm swivi pou sekirite w pandan vwayaj</p>
                </div>
                <div class="feature-item">
                    <span class="feature-icon">🛡️</span>
                    <p><strong>Asirans Aksidan:</strong> Kouvèti konplè pou aksidan pandan travay</p>
                </div>
                <div class="feature-item">
                    <span class="feature-icon">🚨</span>
                    <p><strong>Bouton Ijans:</strong> Kontakte rapid otorite yo nan ka danje</p>
                </div>
                <div class="feature-item">
                    <span class="feature-icon">💰</span>
                    <p><strong>Peman Dijital:</strong> Pa bezwen manyen lajan kach, diminye risk</p>
                </div>
                <div class="feature-item">
                    <span class="feature-icon">📞</span>
                    <p><strong>Sipò Rapid:</strong> Jwenn èd imedyatman nan nenpòt sitiyasyon</p>
                </div>
            </div>
        </div>

        <div class="emergency-section">
            <h2>🆘 Nan Ka Ijans</h2>
            <p style="color: #ddd; font-size: 1.1rem; margin-bottom: 1rem;">
                Si w nan yon sitiyasyon ki mande yon aksyon imedyat, sèvi ak bouton ijans nan aplikasyon an.
            </p>
            <p style="color: #ddd; font-size: 1.1rem; margin-bottom: 2rem;">
                N ap kontakte otorite konpetan yo imedyatman epi n ap voye sipò pou ede w.
            </p>
            <a href="tel:911" class="emergency-button">📞 Rele 911</a>
            <p style="color: #bbb; font-size: 0.9rem; margin-top: 1rem;">
                Sipò YonKous: <strong style="color: #FFC107;">+509 XXXX-XXXX</strong> (24/7)
            </p>
        </div>

        <div class="tips-section">
            <h2>Konsèy Sekirite</h2>

            <div class="tip-item">
                <div class="tip-number">1</div>
                <div class="tip-content">
                    <h3>Verifye Anvan Monte</h3>
                    <p>Toujou verifye foto chofè a, non li, ak nimewo plak moto a koresponn ak sa ki nan aplikasyon an.</p>
                </div>
            </div>

            <div class="tip-item">
                <div class="tip-number">2</div>
                <div class="tip-content">
                    <h3>Pataje Detay Vwayaj ou</h3>
                    <p>Itilize fonksyon "Pataje Vwayaj" pou voye pozisyon w ak detay kous la bay yon zanmi oswa yon manm fanmi.</p>
                </div>
            </div>

            <div class="tip-item">
                <div class="tip-number">3</div>
                <div class="tip-content">
                    <h3>Sèvi ak Kask</h3>
                    <p>Toujou mete kask pou pwoteje tèt ou. Asire w kask la pwòp epi li byen ajiste.</p>
                </div>
            </div>

            <div class="tip-item">
                <div class="tip-number">4</div>
                <div class="tip-content">
                    <h3>Rete Alèt</h3>
                    <p>Fè atansyon nan wout la epi kominike ak chofè a si ou wè nenpòt pwoblèm.</p>
                </div>
            </div>

            <div class="tip-item">
                <div class="tip-number">5</div>
                <div class="tip-content">
                    <h3>Itilize Peman Dijital</h3>
                    <p>Peye ak aplikasyon an pou evite manyen lajan kach epi gade yon dosye klè de tout tranzaksyon ou yo.</p>
                </div>
            </div>

            <div class="tip-item">
                <div class="tip-number">6</div>
                <div class="tip-content">
                    <h3>Rapòte Pwoblèm</h3>
                    <p>Si ou gen nenpòt enkyetid konsènan konpòtman chofè a oswa sekirite vwayaj la, rapòte l imedyatman.</p>
                </div>
            </div>
        </div>

        <div style="text-align: center; margin-top: 3rem; padding: 3rem; background: linear-gradient(135deg, rgba(255, 193, 7, 0.1) 0%, rgba(0, 0, 0, 0.3) 100%); border-radius: 20px;">
            <h2 style="color: #FFC107; font-size: 2rem; margin-bottom: 1rem;">Gen yon Kesyon?</h2>
            <p style="font-size: 1.1rem; color: #ddd; margin-bottom: 2rem;">Ekip sekirite nou disponib 24/7 pou reponn tout kesyon ou yo.</p>
            <p style="font-size: 1.3rem; color: #FFC107; font-weight: 600; margin-bottom: 20px;">
                <svg style="width: 24px; height: 24px; fill: #4CAF50; vertical-align: middle; margin-right: 8px;" viewBox="0 0 24 24">
                    <path d="M16.75 13.96c.25.13.41.2.46.3.06.11.04.61-.21 1.18-.2.56-1.24 1.1-1.7 1.12-.46.02-.47.36-2.96-.73-2.49-1.09-3.99-3.75-4.11-3.92-.12-.17-.96-1.38-.92-2.61.05-1.22.69-1.8.95-2.04.24-.26.51-.29.68-.26h.47c.15 0 .36-.06.55.45l.69 1.87c.06.13.1.28.01.44l-.27.41-.39.42c-.12.12-.26.25-.12.5.12.26.62 1.09 1.32 1.78.91.88 1.71 1.17 1.95 1.3.24.14.39.12.54-.04l.81-.94c.19-.25.35-.19.58-.11l1.67.88M12 2a10 10 0 0 1 10 10 10 10 0 0 1-10 10c-1.97 0-3.8-.57-5.35-1.55L2 22l1.55-4.65A9.969 9.969 0 0 1 2 12 10 10 0 0 1 12 2m0 2a8 8 0 0 0-8 8c0 1.72.54 3.31 1.46 4.61L4.5 19.5l2.89-.96A7.95 7.95 0 0 0 12 20a8 8 0 0 0 8-8 8 8 0 0 0-8-8z"/>
                </svg>
                WhatsApp: +509 31-07-18-90
            </p>
            <a href="/contact" style="display: inline-block; background: #FFC107; color: #000; padding: 1rem 2.5rem; border-radius: 30px; font-weight: 700; text-decoration: none; transition: all 0.3s;">Kontakte Nou</a>
        </div>
    </div>
</body>
</html>
