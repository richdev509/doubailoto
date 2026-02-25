<!DOCTYPE html>
<html lang="ht">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sant Èd - YonKous</title>
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

        .help-categories {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .help-card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            padding: 2.5rem;
            text-align: center;
            border: 1px solid rgba(255, 193, 7, 0.3);
            transition: all 0.3s;
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .help-card:hover {
            transform: translateY(-5px);
            border-color: #FFC107;
            background: rgba(255, 193, 7, 0.1);
        }

        .help-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 1.5rem;
            fill: none;
            stroke: #FFC107;
            stroke-width: 2;
        }

        .help-card h3 {
            color: #FFC107;
            font-size: 1.4rem;
            margin-bottom: 0.8rem;
        }

        .help-card p {
            color: #ddd;
            font-size: 1rem;
        }

        .guides-section {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 20px;
            padding: 3rem;
            margin-bottom: 3rem;
            border: 1px solid rgba(255, 193, 7, 0.2);
        }

        .guides-section h2 {
            color: #FFC107;
            font-size: 2rem;
            margin-bottom: 2rem;
        }

        .guide-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }

        .guide-item {
            background: rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            padding: 1.5rem;
            display: flex;
            align-items: start;
            gap: 1rem;
            transition: all 0.3s;
            text-decoration: none;
            color: inherit;
            border-left: 4px solid rgba(255, 193, 7, 0.5);
        }

        .guide-item:hover {
            background: rgba(255, 193, 7, 0.1);
            border-left-color: #FFC107;
            transform: translateX(5px);
        }

        .guide-icon {
            width: 40px;
            height: 40px;
            flex-shrink: 0;
            fill: none;
            stroke: #FFC107;
            stroke-width: 2;
        }

        .guide-content h4 {
            color: #FFC107;
            font-size: 1.1rem;
            margin-bottom: 0.3rem;
        }

        .guide-content p {
            color: #bbb;
            font-size: 0.9rem;
        }

        .contact-section {
            background: linear-gradient(135deg, rgba(255, 193, 7, 0.1) 0%, rgba(0, 0, 0, 0.3) 100%);
            border-radius: 20px;
            padding: 3rem;
            text-align: center;
            border: 2px solid #FFC107;
        }

        .contact-section h2 {
            color: #FFC107;
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .contact-methods {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 2rem;
        }

        .contact-method {
            background: rgba(0, 0, 0, 0.3);
            border-radius: 15px;
            padding: 2rem;
            transition: all 0.3s;
        }

        .contact-method:hover {
            background: rgba(0, 0, 0, 0.5);
            transform: translateY(-3px);
        }

        .contact-method svg {
            width: 50px;
            height: 50px;
            margin: 0 auto 1rem;
            stroke: #FFC107;
            fill: none;
            stroke-width: 2;
        }

        .contact-method h3 {
            color: #FFC107;
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .contact-method p {
            color: #ddd;
            font-size: 0.95rem;
        }

        .contact-method a {
            color: #FFC107;
            text-decoration: none;
            font-weight: 600;
        }

        @media (max-width: 768px) {
            .help-categories {
                grid-template-columns: 1fr;
            }

            .guide-list {
                grid-template-columns: 1fr;
            }

            .contact-methods {
                grid-template-columns: 1fr;
            }

            .hero-section h1 {
                font-size: 2rem;
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
            <h1>Sant Èd YonKous</h1>
            <p>N ap isit la pou ede w. Chwazi yon kategori oswa gade gid nou yo pou jwenn enfòmasyon ou bezwen an.</p>
        </div>

        <div class="help-categories">
            <a href="#passenger-help" class="help-card">
                <svg class="help-icon" viewBox="0 0 24 24">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
                <h3>Èd pou Pasaje</h3>
                <p>Aprann kijan pou komande yon kous, peye, epi itilize aplikasyon an</p>
            </a>

            <a href="#driver-help" class="help-card">
                <svg class="help-icon" viewBox="0 0 24 24">
                    <rect x="1" y="3" width="15" height="13"></rect>
                    <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                    <circle cx="5.5" cy="18.5" r="2.5"></circle>
                    <circle cx="18.5" cy="18.5" r="2.5"></circle>
                </svg>
                <h3>Èd pou Chofè</h3>
                <p>Enskripsyon, jere kous, resevwa peman ak plis</p>
            </a>

            <a href="#account-help" class="help-card">
                <svg class="help-icon" viewBox="0 0 24 24">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
                <h3>Kont & Paramèt</h3>
                <p>Jere pwofil ou, enfòmasyon pèsonèl ak paramèt</p>
            </a>
        </div>

        <div class="guides-section" id="passenger-help">
            <h2>Gid Pasaje</h2>
            <div class="guide-list">
                <a href="#" class="guide-item">
                    <svg class="guide-icon" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                    <div class="guide-content">
                        <h4>Kijan pou komande yon kous</h4>
                        <p>Etap pa etap pou rezève premye vwayaj ou</p>
                    </div>
                </a>

                <a href="#" class="guide-item">
                    <svg class="guide-icon" viewBox="0 0 24 24">
                        <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                        <line x1="1" y1="10" x2="23" y2="10"></line>
                    </svg>
                    <div class="guide-content">
                        <h4>Mòd peman disponib</h4>
                        <p>Konnen tout fason pou peye vwayaj ou yo</p>
                    </div>
                </a>

                <a href="#" class="guide-item">
                    <svg class="guide-icon" viewBox="0 0 24 24">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                        <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                    <div class="guide-content">
                        <h4>Swivi vwayaj ou an tan reyèl</h4>
                        <p>Gade chofè a ap vini epi pataje pozisyon w</p>
                    </div>
                </a>

                <a href="#" class="guide-item">
                    <svg class="guide-icon" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                        <line x1="12" y1="17" x2="12.01" y2="17"></line>
                    </svg>
                    <div class="guide-content">
                        <h4>Rapòte yon pwoblèm</h4>
                        <p>Sa pou fè si ou gen yon enkyetid oswa pwoblèm</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="guides-section" id="driver-help">
            <h2>Gid Chofè</h2>
            <div class="guide-list">
                <a href="/become-driver" class="guide-item">
                    <svg class="guide-icon" viewBox="0 0 24 24">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="8.5" cy="7" r="4"></circle>
                        <line x1="20" y1="8" x2="20" y2="14"></line>
                        <line x1="23" y1="11" x2="17" y2="11"></line>
                    </svg>
                    <div class="guide-content">
                        <h4>Vin chofè YonKous</h4>
                        <p>Tout enfòmasyon pou enskri kòm chofè</p>
                    </div>
                </a>

                <a href="#" class="guide-item">
                    <svg class="guide-icon" viewBox="0 0 24 24">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                    </svg>
                    <div class="guide-content">
                        <h4>Aksepte epi konplete yon kous</h4>
                        <p>Kijan pou jere kous yo efikasman</p>
                    </div>
                </a>

                <a href="#" class="guide-item">
                    <svg class="guide-icon" viewBox="0 0 24 24">
                        <line x1="12" y1="1" x2="12" y2="23"></line>
                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                    </svg>
                    <div class="guide-content">
                        <h4>Resevwa peman ou</h4>
                        <p>Kijan peman yo fonksyone epi kijan pou retire lajan w</p>
                    </div>
                </a>

                <a href="#" class="guide-item">
                    <svg class="guide-icon" viewBox="0 0 24 24">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <div class="guide-content">
                        <h4>Amelyore rating ou</h4>
                        <p>Konsèy pou bay bon sèvis epi jwenn plis kous</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="guides-section" id="account-help">
            <h2>Kont & Sekirite</h2>
            <div class="guide-list">
                <a href="#" class="guide-item">
                    <svg class="guide-icon" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <div class="guide-content">
                        <h4>Modifye pwofil ou</h4>
                        <p>Chanje enfòmasyon pèsonèl, foto ak paramèt</p>
                    </div>
                </a>

                <a href="#" class="guide-item">
                    <svg class="guide-icon" viewBox="0 0 24 24">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                    </svg>
                    <div class="guide-content">
                        <h4>Sekirite kont ou</h4>
                        <p>Pwoteje kont ou ak otantifikasyon 2 faktè</p>
                    </div>
                </a>

                <a href="/privacy" class="guide-item">
                    <svg class="guide-icon" viewBox="0 0 24 24">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    </svg>
                    <div class="guide-content">
                        <h4>Vi prive & done</h4>
                        <p>Kijan nou pwoteje enfòmasyon pèsonèl ou</p>
                    </div>
                </a>

                <a href="#" class="guide-item">
                    <svg class="guide-icon" viewBox="0 0 24 24">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                    <div class="guide-content">
                        <h4>Jere adrès ou yo</h4>
                        <p>Anrejistre kay ou, travay ak lòt adrès</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="contact-section">
            <h2>Toujou bezwen èd?</h2>
            <p style="color: #ddd; font-size: 1.1rem; margin-bottom: 1rem;">Ekip sipò nou disponib 24/7 pou ede w</p>

            <div class="contact-methods">
                <div class="contact-method">
                    <svg viewBox="0 0 24 24">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                    <h3>Rele Nou</h3>
                    <p><a href="tel:+50931071890">+509 31-07-18-90</a></p>
                    <p style="font-size: 0.85rem; color: #bbb;">24/7</p>
                </div>

                <div class="contact-method">
                    <svg viewBox="0 0 24 24">
                        <path d="M16.75 13.96c.25.13.41.2.46.3.06.11.04.61-.21 1.18-.2.56-1.24 1.1-1.7 1.12-.46.02-.47.36-2.96-.73-2.49-1.09-3.99-3.75-4.11-3.92-.12-.17-.96-1.38-.92-2.61.05-1.22.69-1.8.95-2.04.24-.26.51-.29.68-.26h.47c.15 0 .36-.06.55.45l.69 1.87c.06.13.1.28.01.44l-.27.41-.39.42c-.12.12-.26.25-.12.5.12.26.62 1.09 1.32 1.78.91.88 1.71 1.17 1.95 1.3.24.14.39.12.54-.04l.81-.94c.19-.25.35-.19.58-.11l1.67.88M12 2a10 10 0 0 1 10 10 10 10 0 0 1-10 10c-1.97 0-3.8-.57-5.35-1.55L2 22l1.55-4.65A9.969 9.969 0 0 1 2 12 10 10 0 0 1 12 2m0 2a8 8 0 0 0-8 8c0 1.72.54 3.31 1.46 4.61L4.5 19.5l2.89-.96A7.95 7.95 0 0 0 12 20a8 8 0 0 0 8-8 8 8 0 0 0-8-8z"></path>
                    </svg>
                    <h3>WhatsApp</h3>
                    <p><a href="https://wa.me/50931071890">+509 31-07-18-90</a></p>
                    <p style="font-size: 0.85rem; color: #bbb;">Repons rapid</p>
                </div>

                <div class="contact-method">
                    <svg viewBox="0 0 24 24">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    </svg>
                    <h3>Fòmilè Kontak</h3>
                    <p><a href="/contact">Voye Mesaj</a></p>
                    <p style="font-size: 0.85rem; color: #bbb;">Repons nan 24h</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
