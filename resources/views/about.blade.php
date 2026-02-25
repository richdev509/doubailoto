<!DOCTYPE html>
<html lang="ht">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konsènan Nou - YonKous</title>
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

        .mission-vision {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            margin-top: 3rem;
        }

        .mission-box, .vision-box {
            background: rgba(255, 193, 7, 0.1);
            border-radius: 15px;
            padding: 2rem;
            border: 2px solid #FFC107;
        }

        .mission-box h3, .vision-box h3 {
            color: #FFC107;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 2rem;
        }

        .value-card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            border: 1px solid rgba(255, 193, 7, 0.3);
            transition: all 0.3s;
        }

        .value-card:hover {
            transform: translateY(-5px);
            border-color: #FFC107;
            background: rgba(255, 193, 7, 0.1);
        }

        .value-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .value-card h4 {
            color: #FFC107;
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
        }

        @media (max-width: 768px) {
            .mission-vision {
                grid-template-columns: 1fr;
            }

            .values-grid {
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
            <h1>Konsènan YonKous</h1>
            <p>N ap revolisyone transpò nan Ayiti ak solisyon moto taxi ki rapid, sekirize epi afordab.</p>
        </div>

        <div class="content-section">
            <h2>Ki sa YonKous ye?</h2>
            <p>
                YonKous se yon platfòm dijital inovatif ki konekte pasaje ak chofè moto taxi nan tout peyi a.
                N ap itilize teknoloji modèn pou bay yon eksperyans transpò ki rapid, sekirize epi transparan.
            </p>
            <p>
                Misyon nou se pou nou fasilite mobilite pou tout moun nan Ayiti, pandan n ap kreye opòtinite travay
                pou chofè moto yo epi n ap kontribye nan ekonomi peyi a.
            </p>
        </div>

        <div class="mission-vision">
            <div class="mission-box">
                <h3>🎯 Misyon Nou</h3>
                <p>
                    Bay yon solisyon transpò ki aksesib, sekirize epi efikas pou tout Ayisyen,
                    pandan n ap sipòte chofè moto yo ak yon platfòm ki respekte dwa yo epi ki bay yo
                    opòtinite pou yo jwenn lavi.
                </p>
            </div>
            <div class="vision-box">
                <h3>🚀 Vizyon Nou</h3>
                <p>
                    Vin lidè nan transpò dijital nan Karayib la, epi kreye yon sistèm transpò ki entegre,
                    modèn epi ekolojik ki sèvi tout kominote nan Ayiti.
                </p>
            </div>
        </div>

        <div class="content-section">
            <h2>Valè Nou Yo</h2>
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">🛡️</div>
                    <h4>Sekirite</h4>
                    <p>Sekirite pasaje ak chofè yo se priyorite nimewo 1 nou.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">⚡</div>
                    <h4>Efikasite</h4>
                    <p>N ap travay pou bay sèvis rapid ak kalite siperyè.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">💎</div>
                    <h4>Transparans</h4>
                    <p>Pri klè, pa gen frè kache, pa gen konplikasyon.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">🤝</div>
                    <h4>Respè</h4>
                    <p>N ap trete tout itilizatè ak respè epi diyite.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">🌟</div>
                    <h4>Inovasyon</h4>
                    <p>N ap itilize teknoloji pou amelyore eksperyans ou.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">🇭🇹</div>
                    <h4>Angajman Lokal</h4>
                    <p>N ap travay pou devlopman kominote ayisyen yo.</p>
                </div>
            </div>
        </div>

        <div class="content-section">
            <h2>Poukisa Chwazi YonKous?</h2>
            <p>✓ <strong>Sèvis 24/7:</strong> Disponib nenpòt lè, nenpòt kote</p>
            <p>✓ <strong>Pri Jis:</strong> Pa gen ogmantasyon pri nan moman pik</p>
            <p>✓ <strong>Chofè Verifye:</strong> Tout chofè pase nan pwosesis seleksyon estrik</p>
            <p>✓ <strong>Peman Dijital:</strong> Sistèm peman sekirize 100% dijital</p>
            <p>✓ <strong>Sipò Kliyan:</strong> Ekip sipò ki disponib pou ede w</p>
            <p>✓ <strong>Asirans:</strong> Pwoteksyon pou chak vwayaj</p>
        </div>

        <div class="content-section" style="background: rgba(255, 193, 7, 0.1); border: 2px solid #FFC107; border-radius: 15px; padding: 30px; text-align: center;">
            <h2 style="color: #FFC107; margin-bottom: 20px;">Kontakte Nou</h2>
            <p style="font-size: 1.1rem; margin-bottom: 15px;">
                <svg style="width: 24px; height: 24px; fill: #4CAF50; vertical-align: middle; margin-right: 8px;" viewBox="0 0 24 24">
                    <path d="M16.75 13.96c.25.13.41.2.46.3.06.11.04.61-.21 1.18-.2.56-1.24 1.1-1.7 1.12-.46.02-.47.36-2.96-.73-2.49-1.09-3.99-3.75-4.11-3.92-.12-.17-.96-1.38-.92-2.61.05-1.22.69-1.8.95-2.04.24-.26.51-.29.68-.26h.47c.15 0 .36-.06.55.45l.69 1.87c.06.13.1.28.01.44l-.27.41-.39.42c-.12.12-.26.25-.12.5.12.26.62 1.09 1.32 1.78.91.88 1.71 1.17 1.95 1.3.24.14.39.12.54-.04l.81-.94c.19-.25.35-.19.58-.11l1.67.88M12 2a10 10 0 0 1 10 10 10 10 0 0 1-10 10c-1.97 0-3.8-.57-5.35-1.55L2 22l1.55-4.65A9.969 9.969 0 0 1 2 12 10 10 0 0 1 12 2m0 2a8 8 0 0 0-8 8c0 1.72.54 3.31 1.46 4.61L4.5 19.5l2.89-.96A7.95 7.95 0 0 0 12 20a8 8 0 0 0 8-8 8 8 0 0 0-8-8z"/>
                </svg>
                <strong style="color: #FFC107; font-size: 1.3rem;">WhatsApp: +509 31-07-18-90</strong>
            </p>
            <p style="color: #ccc; font-size: 0.95rem;">Disponib 24/7 pou kesyon ak sipò</p>
        </div>
    </div>
</body>
</html>
