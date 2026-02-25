<!DOCTYPE html>
<html lang="ht">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - YonKous</title>
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

        .search-box {
            max-width: 600px;
            margin: 2rem auto;
            position: relative;
        }

        .search-box input {
            width: 100%;
            padding: 1.2rem 3.5rem 1.2rem 1.5rem;
            border: 2px solid rgba(255, 193, 7, 0.3);
            background: rgba(0, 0, 0, 0.3);
            color: #fff;
            border-radius: 30px;
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .search-box input:focus {
            outline: none;
            border-color: #FFC107;
            background: rgba(0, 0, 0, 0.5);
        }

        .search-icon {
            position: absolute;
            right: 1.5rem;
            top: 50%;
            transform: translateY(-50%);
            color: #FFC107;
        }

        .categories {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .category-card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            border: 1px solid rgba(255, 193, 7, 0.3);
            transition: all 0.3s;
            cursor: pointer;
        }

        .category-card:hover {
            transform: translateY(-5px);
            border-color: #FFC107;
            background: rgba(255, 193, 7, 0.1);
        }

        .category-icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 1rem;
            fill: #FFC107;
        }

        .category-card h3 {
            color: #FFC107;
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
        }

        .category-card p {
            color: #ddd;
            font-size: 0.9rem;
        }

        .faq-section {
            margin-bottom: 3rem;
        }

        .faq-section h2 {
            color: #FFC107;
            font-size: 2rem;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid rgba(255, 193, 7, 0.3);
        }

        .faq-item {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            margin-bottom: 1rem;
            overflow: hidden;
            border: 1px solid rgba(255, 193, 7, 0.2);
        }

        .faq-question {
            padding: 1.5rem;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s;
        }

        .faq-question:hover {
            background: rgba(255, 193, 7, 0.1);
        }

        .faq-question h3 {
            color: #FFC107;
            font-size: 1.1rem;
            font-weight: 600;
        }

        .faq-toggle {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: rgba(255, 193, 7, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #FFC107;
            font-weight: 700;
            font-size: 1.2rem;
        }

        .faq-answer {
            padding: 0 1.5rem 1.5rem;
            color: #ddd;
            line-height: 1.8;
            display: none;
        }

        .faq-item.active .faq-answer {
            display: block;
        }

        .faq-item.active .faq-toggle {
            background: #FFC107;
            color: #000;
        }

        @media (max-width: 768px) {
            .categories {
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
            <h1>Kesyon Yo Poze Souvan</h1>
            <p>Jwenn repons rapid pou kesyon ou yo. Si ou pa jwenn sa w ap chèche a, kontakte ekip sipò nou an.</p>

            <div class="search-box">
                <input type="text" placeholder="Chèche yon kesyon...">
                <svg class="search-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="11" cy="11" r="8"></circle>
                    <path d="m21 21-4.35-4.35"></path>
                </svg>
            </div>
        </div>

        <div class="categories">
            <div class="category-card">
                <svg class="category-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
                <h3>Pou Pasaje</h3>
                <p>Kesyon sou rezèvasyon, peman, elatriye</p>
            </div>
            <div class="category-card">
                <svg class="category-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="1" y="3" width="15" height="13"></rect>
                    <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                    <circle cx="5.5" cy="18.5" r="2.5"></circle>
                    <circle cx="18.5" cy="18.5" r="2.5"></circle>
                </svg>
                <h3>Pou Chofè</h3>
                <p>Enskripsyon, peman, règleman</p>
            </div>
            <div class="category-card">
                <svg class="category-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                </svg>
                <h3>Sekirite</h3>
                <p>Pwoteksyon, asirans, èd ijans</p>
            </div>
        </div>

        <div class="faq-section">
            <h2>Kesyon Jeneral</h2>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Ki sa YonKous ye?</h3>
                    <div class="faq-toggle">+</div>
                </div>
                <div class="faq-answer">
                    <p>YonKous se yon platfòm dijital ki konekte pasaje ak chofè moto taxi nan tout Ayiti. N ap itilize teknoloji modèn pou bay yon eksperyans transpò ki rapid, sekirize epi transparan.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Nan ki rejyon YonKous disponib?</h3>
                    <div class="faq-toggle">+</div>
                </div>
                <div class="faq-answer">
                    <p>Pou kounye a, n ap bay sèvis nan Pòtoprens ak anviwon li yo. N ap travay pou etann sèvis nou nan lòt vil yo byento.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Konbyen yon vwayaj koute?</h3>
                    <div class="faq-toggle">+</div>
                </div>
                <div class="faq-answer">
                    <p>Pri vwayaj yo depann de pri chofè a fikse. Aplikasyon an ap ba w yon estimasyon anvan w konfime vwayaj la. Pa gen ogmantasyon pri nan moman pik.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Kijan pou telechaje aplikasyon an?</h3>
                    <div class="faq-toggle">+</div>
                </div>
                <div class="faq-answer">
                    <p>Aplikasyon YonKous ap disponib byento sou Google Play Store (Android) ak Apple App Store (iOS). Nou ap anonse dat lançman an sou rezo sosyal nou yo.</p>
                </div>
            </div>
        </div>

        <div class="faq-section">
            <h2>Pou Pasaje</h2>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Kijan mwen ka komande yon kous?</h3>
                    <div class="faq-toggle">+</div>
                </div>
                <div class="faq-answer">
                    <p>1. Louvri aplikasyon an<br>2. Antre adrès destinasyon w<br>3. Chwazi yon chofè disponib<br>4. Konfime kous la<br>5. Swiv chofè a an tan reyèl</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Ki mòd peman ki disponib?</h3>
                    <div class="faq-toggle">+</div>
                </div>
                <div class="faq-answer">
                    <p>Ou ka peye ak balans YONKOUS ou. Rechaje balans ou ak MonCash oswa lòt metòd peman dijital. Tout tranzaksyon yo sekirize 100%.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Èske mwen ka kansel yon kous?</h3>
                    <div class="faq-toggle">+</div>
                </div>
                <div class="faq-answer">
                    <p>Wi, ou ka anile yon kous anvan chofè a deplase. Si w kansel apre chofè a nan wout vin jwenn ou, ou gen yon frè pou w ap peye, dok asire w ke w vle kous la.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Kijan pou pataje detay vwayaj mwen?</h3>
                    <div class="faq-toggle">+</div>
                </div>
                <div class="faq-answer">
                    <p>Pandan yon vwayaj, ou ka itilize fonksyon "Pataje Vwayaj" pou voye detay vwayaj la (chofè, wout, tan estimasyon) bay yon zanmi oswa manm fanmi. Fè fanmi w mete aplikasyon sou telefòn yo tou.</p>
                </div>
            </div>
        </div>

        <div class="faq-section">
            <h2>Pou Chofè</h2>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Kijan pou m vin chofè YonKous?</h3>
                    <div class="faq-toggle">+</div>
                </div>
                <div class="faq-answer">
                    <p>Ale sou paj "Vin Chofè" epi ranpli fòmilè enskripsyon an. W ap bezwen: idantite verifye, yon moto an bon kondisyon, yon smartphone, ak peye 100 GDS frè patisipasyon.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Konbyen tan li pran pou yo aksepte aplikasyon mwen?</h3>
                    <div class="faq-toggle">+</div>
                </div>
                <div class="faq-answer">
                    <p>Pwosesis verifikasyon an pran ant 24-48 èdtan. N ap rele w osi vit ke dokiman ou yo verifye.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Konbyen mwen ka fè pa jou?</h3>
                    <div class="faq-toggle">+</div>
                </div>
                <div class="faq-answer">
                    <p>Chofè ki travay 8-10 èdtan ka fè 4000-10000 GDS epi plis pa jou. Revni w depann de konbyen kous ou fè ak lè ou travay.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Kijan mwen resevwa lajan mwen?</h3>
                    <div class="faq-toggle">+</div>
                </div>
                <div class="faq-answer">
                    <p>Lajan w otomatikman ajoute nan balans ou apre chak kous. Ou ka retire lajan w gratis lakay ajan YonKous yo nenpòt lè.</p>
                </div>
            </div>
        </div>

        <div class="faq-section">
            <h2>Sekirite</h2>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Ki mezi sekirite YonKous mete an plas?</h3>
                    <div class="faq-toggle">+</div>
                </div>
                <div class="faq-answer">
                    <p>Nou verifye tout chofè, nou bay swivi GPS an tan reyèl, nou gen bouton ijans nan aplikasyon an, epi tout vwayaj yo gen kouvèti asirans.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Sa pou m fè nan ka ijans?</h3>
                    <div class="faq-toggle">+</div>
                </div>
                <div class="faq-answer">
                    <p>Peze bouton ijans nan aplikasyon an. N ap kontakte otorite konpetan yo imedyatman epi n ap voye sipò. Ou ka rele 911 tou oswa kontakte sipò YonKous 24/7.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Kijan pou rapòte yon pwoblèm ak yon chofè?</h3>
                    <div class="faq-toggle">+</div>
                </div>
                <div class="faq-answer">
                    <p>Apre vwayaj la, ou ka rapòte pwoblèm nan nan aplikasyon an. Ekip nou ap envestige imedyatman epi pran mezi apwopriye yo.</p>
                </div>
            </div>
        </div>

        <div style="text-align: center; margin-top: 3rem; padding: 3rem; background: linear-gradient(135deg, rgba(255, 193, 7, 0.1) 0%, rgba(0, 0, 0, 0.3) 100%); border-radius: 20px; border: 1px solid rgba(255, 193, 7, 0.2);">
            <h2 style="color: #FFC107; font-size: 2rem; margin-bottom: 1rem;">Ou pa jwenn repons ou a?</h2>
            <p style="font-size: 1.1rem; color: #ddd; margin-bottom: 2rem;">Kontakte sipò nou 24/7 pou yon asistans pèsonalize</p>
            <p style="font-size: 1.3rem; color: #FFC107; font-weight: 600; margin-bottom: 20px;">
                <svg style="width: 24px; height: 24px; fill: #4CAF50; vertical-align: middle; margin-right: 8px;" viewBox="0 0 24 24">
                    <path d="M16.75 13.96c.25.13.41.2.46.3.06.11.04.61-.21 1.18-.2.56-1.24 1.1-1.7 1.12-.46.02-.47.36-2.96-.73-2.49-1.09-3.99-3.75-4.11-3.92-.12-.17-.96-1.38-.92-2.61.05-1.22.69-1.8.95-2.04.24-.26.51-.29.68-.26h.47c.15 0 .36-.06.55.45l.69 1.87c.06.13.1.28.01.44l-.27.41-.39.42c-.12.12-.26.25-.12.5.12.26.62 1.09 1.32 1.78.91.88 1.71 1.17 1.95 1.3.24.14.39.12.54-.04l.81-.94c.19-.25.35-.19.58-.11l1.67.88M12 2a10 10 0 0 1 10 10 10 10 0 0 1-10 10c-1.97 0-3.8-.57-5.35-1.55L2 22l1.55-4.65A9.969 9.969 0 0 1 2 12 10 10 0 0 1 12 2m0 2a8 8 0 0 0-8 8c0 1.72.54 3.31 1.46 4.61L4.5 19.5l2.89-.96A7.95 7.95 0 0 0 12 20a8 8 0 0 0 8-8 8 8 0 0 0-8-8z"/>
                </svg>
                WhatsApp: +509 31-07-18-90
            </p>
            <a href="/contact" style="display: inline-block; background: #FFC107; color: #000; padding: 1rem 2.5rem; border-radius: 30px; font-weight: 700; text-decoration: none; transition: all 0.3s;">Kontakte Nou</a>
        </div>
    </div>

    <script>
        // FAQ accordion functionality
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const faqItem = question.parentElement;
                const isActive = faqItem.classList.contains('active');

                // Close all other items
                document.querySelectorAll('.faq-item').forEach(item => {
                    item.classList.remove('active');
                    item.querySelector('.faq-toggle').textContent = '+';
                });

                // Toggle current item
                if (!isActive) {
                    faqItem.classList.add('active');
                    question.querySelector('.faq-toggle').textContent = '−';
                }
            });
        });
    </script>
    
    <p style="margin-top: 2rem; padding-top: 1.5rem; border-top: 1px solid #333; color: #999; font-size: 0.9rem; text-align: center;">
        Developper par <a href="https://sagacetech.com" target="_blank" style="color: #FFC107; text-decoration: none;">SagaceTech</a> | 
        Contact: <a href="tel:+15634680355" style="color: #FFC107; text-decoration: none;">+1 563-468-0355</a>
    </p>
</body>
</html>
