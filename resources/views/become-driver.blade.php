<!DOCTYPE html>
<html lang="ht">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vin Chofè - YonKous</title>
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
            background: linear-gradient(135deg, rgba(255, 193, 7, 0.1) 0%, rgba(0, 0, 0, 0.3) 100%);
            border-radius: 20px;
            padding: 3rem;
            border: 2px solid #FFC107;
        }

        .hero-section h1 {
            font-size: 3rem;
            color: #FFC107;
            margin-bottom: 1rem;
        }

        .hero-section .price {
            font-size: 4rem;
            color: #FFC107;
            font-weight: 900;
            margin: 1rem 0;
        }

        .hero-section .subtitle {
            font-size: 1.2rem;
            color: #bbb;
            margin-bottom: 2rem;
        }

        .cta-button {
            display: inline-block;
            background: #FFC107;
            color: #000;
            padding: 1.2rem 3rem;
            border-radius: 30px;
            font-weight: 700;
            font-size: 1.2rem;
            text-decoration: none;
            transition: all 0.3s;
            margin-top: 1rem;
        }

        .cta-button:hover {
            background: #FFD54F;
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(255, 193, 7, 0.3);
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .benefit-card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            border: 1px solid rgba(255, 193, 7, 0.3);
            transition: all 0.3s;
        }

        .benefit-card:hover {
            transform: translateY(-5px);
            border-color: #FFC107;
            background: rgba(255, 193, 7, 0.1);
        }

        .benefit-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .benefit-card h3 {
            color: #FFC107;
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
        }

        .benefit-card p {
            color: #ddd;
        }

        .requirements-section {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 20px;
            padding: 3rem;
            margin-bottom: 2rem;
            border: 1px solid rgba(255, 193, 7, 0.2);
        }

        .requirements-section h2 {
            color: #FFC107;
            font-size: 2rem;
            margin-bottom: 2rem;
            text-align: center;
        }

        .requirements-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }

        .requirement-item {
            display: flex;
            align-items: start;
            gap: 1rem;
            padding: 1rem;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 10px;
        }

        .requirement-icon {
            font-size: 1.5rem;
            color: #FFC107;
        }

        .requirement-item p {
            color: #ddd;
            font-size: 1rem;
        }

        .process-section {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 20px;
            padding: 3rem;
            margin-bottom: 2rem;
            border: 1px solid rgba(255, 193, 7, 0.2);
        }

        .process-section h2 {
            color: #FFC107;
            font-size: 2rem;
            margin-bottom: 2rem;
            text-align: center;
        }

        .process-steps {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
        }

        .process-step {
            text-align: center;
        }

        .step-number {
            width: 60px;
            height: 60px;
            background: #FFC107;
            color: #000;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 900;
            margin: 0 auto 1rem;
        }

        .process-step h3 {
            color: #FFC107;
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
        }

        .process-step p {
            color: #bbb;
            font-size: 0.9rem;
        }

        .faq-section {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 20px;
            padding: 3rem;
            border: 1px solid rgba(255, 193, 7, 0.2);
        }

        .faq-section h2 {
            color: #FFC107;
            font-size: 2rem;
            margin-bottom: 2rem;
            text-align: center;
        }

        .faq-item {
            margin-bottom: 2rem;
            padding: 1.5rem;
            background: rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            border-left: 4px solid #FFC107;
        }

        .faq-item h3 {
            color: #FFC107;
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .faq-item p {
            color: #ddd;
        }

        @media (max-width: 768px) {
            .benefits-grid {
                grid-template-columns: 1fr;
            }

            .requirements-list {
                grid-template-columns: 1fr;
            }

            .process-steps {
                grid-template-columns: 1fr;
            }

            .hero-section h1 {
                font-size: 2rem;
            }

            .hero-section .price {
                font-size: 3rem;
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
            <h1>Vin Chofè YonKous Jodi a!</h1>
            <div class="price">100 GDS</div>
            <p class="subtitle">Frè Patisipasyon</p>
            <p style="color: #ddd; font-size: 1.1rem; margin-bottom: 1rem;">
                Jwenn opòtinite pou w travay ak libète, fè lajan ou chak jou, epi benefisye avantaj ekskizif.
            </p>
            <p style="color: #bbb; font-size: 0.95rem; margin-bottom: 1.5rem; padding: 1rem; background: rgba(255, 193, 7, 0.1); border-radius: 10px; border-left: 4px solid #FFC107;">
                💡 Frè 100 GDS la ede nou kontinye mete sèvis la an plas epi amelyore eksperyans tout chofè yo.
            </p>
            <a href="/driver/register" class="cta-button">Enskri Kounye a 🚀</a>
        </div>

        <div class="benefits-grid">
            <div class="benefit-card">
                <div class="benefit-icon">💰</div>
                <h3>Revni Stab</h3>
                <p>Jwenn peman rapid chak jou. Ou kontwole konbyen ou vle travay.</p>
            </div>
            <div class="benefit-card">
                <div class="benefit-icon">🛡️</div>
                <h3>Asirans Aksidan</h3>
                <p>Tout chofè YonKous gen asirans konplè an ka aksidan.</p>
            </div>
            <div class="benefit-card">
                <div class="benefit-icon">⛽</div>
                <h3>Rabè Gaz</h3>
                <p>Jwenn rabè espesyal nan estasyon sèvis patené nou yo.</p>
            </div>
            <div class="benefit-card">
                <div class="benefit-icon">🚀</div>
                <h3>Priyorite Kous</h3>
                <p>Manm fidèl yo jwenn plis kous ak bonifikasyon espesyal.</p>
            </div>
            <div class="benefit-card">
                <div class="benefit-icon">📱</div>
                <h3>App Fasil</h3>
                <p>Aplikasyon ki senp e klè pou jere tout kous ou yo.</p>
            </div>
            <div class="benefit-card">
                <div class="benefit-icon">🤝</div>
                <h3>Sipò 24/7</h3>
                <p>Ekip sipò nou disponib pou ede w nenpòt lè.</p>
            </div>
        </div>

        <div class="requirements-section">
            <h2>Kondisyon pou Vin Chofè</h2>
            <div class="requirements-list">
                <div class="requirement-item">
                    <span class="requirement-icon">✓</span>
                    <p><strong>Idantite:</strong> Idantite w dwe verifye</p>
                </div>
                <div class="requirement-item">
                    <span class="requirement-icon">✓</span>
                    <p><strong>Moto:</strong> Gen moto ki an bon kondisyon</p>
                </div>
                <div class="requirement-item">
                    <span class="requirement-icon">✓</span>
                    <p><strong>Smartphone:</strong> Gen yon telefòn Android oswa iPhone</p>
                </div>
                <div class="requirement-item">
                    <span class="requirement-icon">✓</span>
                    <p><strong>Dokiman:</strong> Kopi lisans, CIN, foto moto ak kat gri</p>
                </div>
                <div class="requirement-item">
                    <span class="requirement-icon">✓</span>
                    <p><strong>Eksperyans:</strong> Konnen kondi moto byen epi konnen wout yo</p>
                </div>
                <div class="requirement-item">
                    <span class="requirement-icon">✓</span>
                    <p><strong>Frè Patisipasyon:</strong> Peye 100 GDS pou antre nan klib la</p>
                </div>
            </div>
        </div>

        <div class="process-section">
            <h2>Kijan pou Enskri?</h2>
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h3>Ranpli Fòmilè</h3>
                    <p>Soumèt enfòmasyon ou ak dokiman yo</p>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h3>Verifikasyon</h3>
                    <p>N ap verifye dokiman ou yo</p>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h3>Fòmasyon</h3>
                    <p>Aprann itilize aplikasyon an</p>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h3>Kòmanse!</h3>
                    <p>Kòmanse resevwa kous epi fè lajan</p>
                </div>
            </div>
        </div>

        <div class="faq-section">
            <h2>Kesyon Yo Poze Souvan</h2>

            <div class="faq-item">
                <h3>❓ Konbyen mwen ka fè chak jou?</h3>
                <p>Sa depann de konbyen kous ou fè. Chofè ki travay 8-10 èdtan ka fè 4000-10000 GDS epi plis.</p>
            </div>

            <div class="faq-item">
                <h3>❓ Ki lè mwen ka travay?</h3>
                <p>Ou chwazi pwòp orè travay ou. Ou ka travay nenpòt lè, 24/7.</p>
            </div>

            <div class="faq-item">
                <h3>❓ Kijan mwen resevwa lajan mwen?</h3>
                <p>Ou jwenn lajan w otomatikman apre chak kous. Ou ka retire lajan w gratis lakay ajan YonKous.</p>
            </div>

            <div class="faq-item">
                <h3>❓ YonKous pran konbyen komisyon?</h3>
                <p>N ap bay detay sou komisyon yo pandan pwosesis enskripsyon an.</p>
            </div>

            <div class="faq-item">
                <h3>❓ Èske mwen bezwen moto pa m?</h3>
                <p>Wi, ou dwe gen moto pa w ki an bon kondisyon.</p>
            </div>

            <div class="faq-item">
                <h3>❓ 100 GDS la se pou kisa?</h3>
                <p>Se frè patisipasyon ki pèmèt w antre nan Klèb YonKous la epi jwenn asirans, rabè gaz, ak tout avantaj yo.</p>
            </div>
        </div>

        <div style="text-align: center; margin-top: 3rem; padding: 3rem; background: linear-gradient(135deg, rgba(255, 193, 7, 0.1) 0%, rgba(0, 0, 0, 0.3) 100%); border-radius: 20px;">
            <h2 style="color: #FFC107; font-size: 2rem; margin-bottom: 1rem;">Pare pou Kòmanse?</h2>
            <p style="font-size: 1.2rem; color: #ddd; margin-bottom: 2rem;">Enskri jodi a epi kòmanse fè lajan demen!</p>
            <a href="/driver/register" class="cta-button">Enskri Kounye a 🏍️</a>

            <div style="margin-top: 40px; padding-top: 30px; border-top: 2px solid rgba(255, 193, 7, 0.3);">
                <p style="color: #ccc; margin-bottom: 10px;">Gen kesyon? Kontakte nou:</p>
                <p style="font-size: 1.3rem; color: #FFC107; font-weight: 600;">
                    <svg style="width: 24px; height: 24px; fill: #4CAF50; vertical-align: middle; margin-right: 8px;" viewBox="0 0 24 24">
                        <path d="M16.75 13.96c.25.13.41.2.46.3.06.11.04.61-.21 1.18-.2.56-1.24 1.1-1.7 1.12-.46.02-.47.36-2.96-.73-2.49-1.09-3.99-3.75-4.11-3.92-.12-.17-.96-1.38-.92-2.61.05-1.22.69-1.8.95-2.04.24-.26.51-.29.68-.26h.47c.15 0 .36-.06.55.45l.69 1.87c.06.13.1.28.01.44l-.27.41-.39.42c-.12.12-.26.25-.12.5.12.26.62 1.09 1.32 1.78.91.88 1.71 1.17 1.95 1.3.24.14.39.12.54-.04l.81-.94c.19-.25.35-.19.58-.11l1.67.88M12 2a10 10 0 0 1 10 10 10 10 0 0 1-10 10c-1.97 0-3.8-.57-5.35-1.55L2 22l1.55-4.65A9.969 9.969 0 0 1 2 12 10 10 0 0 1 12 2m0 2a8 8 0 0 0-8 8c0 1.72.54 3.31 1.46 4.61L4.5 19.5l2.89-.96A7.95 7.95 0 0 0 12 20a8 8 0 0 0 8-8 8 8 0 0 0-8-8z"/>
                    </svg>
                    WhatsApp: +509 31-07-18-90
                </p>
                <p style="color: #999; font-size: 0.9rem;">Disponib 24/7</p>
            </div>
        </div>
    </div>
</body>
</html>
