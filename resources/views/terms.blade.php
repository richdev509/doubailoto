<!DOCTYPE html>
<html lang="ht">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kondisyon Itilizasyon - YonKous</title>
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
            line-height: 1.8;
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
            max-width: 900px;
            margin: 120px auto 60px;
            padding: 2rem;
        }

        .hero-section {
            text-align: center;
            margin-bottom: 3rem;
        }

        .hero-section h1 {
            font-size: 2.5rem;
            color: #FFC107;
            margin-bottom: 1rem;
        }

        .update-date {
            color: #bbb;
            font-size: 0.9rem;
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
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid rgba(255, 193, 7, 0.3);
        }

        .content-section h3 {
            color: #FFD54F;
            font-size: 1.3rem;
            margin: 2rem 0 1rem;
        }

        .content-section p {
            color: #ddd;
            margin-bottom: 1rem;
            text-align: justify;
        }

        .content-section ul, .content-section ol {
            margin: 1rem 0 1rem 2rem;
            color: #ddd;
        }

        .content-section li {
            margin-bottom: 0.8rem;
        }

        .important-note {
            background: rgba(255, 193, 7, 0.1);
            border-left: 4px solid #FFC107;
            padding: 1.5rem;
            margin: 1.5rem 0;
            border-radius: 5px;
        }

        .important-note p {
            margin: 0;
            color: #FFD54F;
        }

        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2rem;
            }

            .content-section {
                padding: 1.5rem;
            }

            .container {
                padding: 1rem;
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
            <h1>Kondisyon Itilizasyon</h1>
            <p class="update-date">Dènye mizajou: Fevriye 2026</p>
        </div>

        <div class="content-section">
            <h2>1. Akseptasyon Kondisyon yo</h2>
            <p>
                Lè w itilize platfòm YonKous, w dakò pou respekte kondisyon itilizasyon sa yo. Si w pa dakò ak kondisyon yo, tanpri pa itilize sèvis nou an.
            </p>
            <p>
                YonKous rezève dwa pou modifye kondisyon sa yo nenpòt lè. N ap enfòme w de chanjman yo pa email oswa nan aplikasyon an. Kontinye itilize sèvis la apre chanjman yo vle di w aksepte nouvo kondisyon yo.
            </p>
        </div>

        <div class="content-section">
            <h2>2. Definisyon</h2>
            <ul>
                <li><strong>"YonKous"</strong> oswa <strong>"Nou"</strong>: se platfòm transpò moto taxi dijital la</li>
                <li><strong>"Itilizatè"</strong> oswa <strong>"Ou"</strong>: moun ki itilize sèvis nou an, tankou pasaje oswa chofè</li>
                <li><strong>"Pasaje"</strong>: itilizatè ki mande yon sèvis transpò</li>
                <li><strong>"Chofè"</strong>: itilizatè ki bay sèvis transpò</li>
                <li><strong>"Sèvis"</strong>: platfòm YonKous ak tout fonksyon li yo</li>
            </ul>
        </div>

        <div class="content-section">
            <h2>3. Enskripsyon ak Kont</h2>

            <h3>3.1 Kondisyon Jeneral</h3>
            <p>Pou itilize YonKous, ou dwe:</p>
            <ul>
                <li>Gen omwen 18 an</li>
                <li>Bay enfòmasyon egzat epi ajou</li>
                <li>Verifye idantite w</li>
                <li>Konsève yon adrès email valid</li>
            </ul>

            <h3>3.2 Sekirite Kont</h3>
            <p>Ou responsab pou:</p>
            <ul>
                <li>Kenbe modpas ou sekirize</li>
                <li>Pa pataje enfòmasyon kont ou ak lòt moun</li>
                <li>Enfòme nou imedyatman si gen yon itilizasyon ki pa otorize</li>
            </ul>

            <h3>3.3 Kondisyon Espesyal pou Chofè</h3>
            <p>Pou vin chofè, ou dwe tou:</p>
            <ul>
                <li>Gen idantite verifye</li>
                <li>Gen yon moto an bon kondisyon</li>
                <li>Peye frè patisipasyon 100 GDS</li>
                <li>Pase yon pwosesis verifikasyon</li>
            </ul>
        </div>

        <div class="content-section">
            <h2>4. Itilizasyon Sèvis la</h2>

            <h3>4.1 Règ Jeneral</h3>
            <p>Lè w itilize YonKous, ou dakò pou:</p>
            <ul>
                <li>Respekte lwa ayisyen yo</li>
                <li>Pa itilize sèvis la pou aktivite ilegal</li>
                <li>Respekte lòt itilizatè yo</li>
                <li>Pa atake sistèm teknolojik nou an</li>
            </ul>

            <h3>4.2 Pou Pasaje</h3>
            <ul>
                <li>Bay adrès egzat pou pran w ak adrès destinasyon</li>
                <li>Rete disponib lè chofè a rive</li>
                <li>Respekte chofè a ak moto a</li>
                <li>Peye pou sèvis ou resevwa a</li>
            </ul>

            <h3>4.3 Pou Chofè</h3>
            <ul>
                <li>Kondwi an sekirite epi respekte kòd wout la</li>
                <li>Prezante pwòp epi pwofesyonèl</li>
                <li>Respekte wout ki endike nan aplikasyon an</li>
                <li>Pa mande peman anplis sou sa aplikasyon an endike</li>
                <li>Bay bon sèvis kliyan</li>
            </ul>
        </div>

        <div class="content-section">
            <h2>5. Peman ak Pri</h2>

            <h3>5.1 Kalkilasyon Pri</h3>
            <p>
                Pri yo kalkile according to distans, tan, ak kondisyon trafik. YonKous pa gen ogmantasyon pri nan moman pik. Pri final la ap parèt nan aplikasyon an anvan w konfime kous la.
            </p>

            <h3>5.2 Metòd Peman</h3>
            <p>
                Pasaje yo peye ak balans YONKOUS yo. Ou ka rechaje balans ou ak MonCash oswa lòt metòd peman dijital. Tout tranzaksyon yo sekirize.
            </p>

            <h3>5.3 Peman Chofè</h3>
            <p>
                Chofè yo resevwa peman yo otomatikman apre chak kous. Yo ka retire lajan yo gratis lakay ajan YonKous ki otorize yo.
            </p>

            <h3>5.4 Frè ak Komisyon</h3>
            <p>
                YonKous pran yon komisyon sou chak kous. Detay sou komisyon yo disponib pou chofè yo pandan pwosesis enskripsyon an.
            </p>
        </div>

        <div class="content-section">
            <h2>6. Kansèlasyon ak Ranbousman</h2>

            <h3>6.1 Kansèlasyon Pasaje</h3>
            <p>
                Pasaje yo ka kansel yon kous anvan chofè a kòmanse deplase san okenn frè. Apre sa, yon frè kansèlasyon ka aplike.
            </p>

            <h3>6.2 Kansèlasyon Chofè</h3>
            <p>
                Chofè yo ka refize oswa kansel yon kous, men yo dwe bay yon rezon valab. Twòp kansèlasyon san rezon ka afekte rating yo.
            </p>

            <h3>6.3 Ranbousman</h3>
            <p>
                Ranbousman yo posib nan ka pwoblèm teknik oswa pwoblèm ak sèvis la. Demann ranbousman yo dwe fèt nan 7 jou apre vwayaj la.
            </p>
        </div>

        <div class="content-section">
            <h2>7. Responsablite ak Garanti</h2>

            <div class="important-note">
                <p><strong>ENPÒTAN:</strong> YonKous se yon platfòm ki konekte pasaje ak chofè. Nou pa yon konpayi transpò epi nou pa responsab pou aksyon chofè yo.</p>
            </div>

            <h3>7.1 Limit Responsablite</h3>
            <p>YonKous pa responsab pou:</p>
            <ul>
                <li>Aksidan oswa domaj pandan vwayaj yo</li>
                <li>Pèt oswa domaj byen pèsonèl</li>
                <li>Dispits ant pasaje ak chofè</li>
                <li>Pwoblèm teknik ki anpeche itilizasyon sèvis la</li>
            </ul>

            <h3>7.2 Asirans</h3>
            <p>
                YonKous ofri yon sèvis asirans pou asire chofè ak kliyan nan ka aksidan. Detay sou kouvèti a disponib sou demand.
            </p>
        </div>

        <div class="content-section">
            <h2>8. Règ Konpòtman</h2>

            <p>Nou ka sispann oswa fèmen kont ou si w:</p>
            <ul>
                <li>Vyole kondisyon itilizasyon sa yo</li>
                <li>Maltrete lòt itilizatè yo</li>
                <li>Bay move enfòmasyon oswa dokiman fo</li>
                <li>Fè aktivite ilegal</li>
                <li>Reziste peye</li>
                <li>Resevwa twòp plent negatif</li>
            </ul>
        </div>

        <div class="content-section">
            <h2>9. Vi Prive</h2>
            <p>
                Itilizasyon enfòmasyon pèsonèl ou gouvène pa <a href="/privacy" style="color: #FFC107; text-decoration: underline;">Politik Konfidansyalite</a> nou an. Li enpòtan pou w li epi konprann kijan nou itilize done w yo.
            </p>
        </div>

        <div class="content-section">
            <h2>10. Pwopryete Entelektyèl</h2>
            <p>
                Tout kontan sou platfòm YonKous (logo, tèks, imaj, kòd, elatriye) se pwopryete YonKous oswa patnè nou yo. Ou pa gen dwa pou kopye, distribye, oswa modifye kontan sa yo san pèmisyon.
            </p>
        </div>

        <div class="content-section">
            <h2>11. Tèminazon</h2>
            <p>
                Ou ka fèmen kont ou nenpòt lè. YonKous rezève dwa tou pou sispann oswa fèmen kont ou si w vyole kondisyon sa yo oswa si nou deside sispann sèvis nou an.
            </p>
        </div>

        <div class="content-section">
            <h2>12. Lwa ki Aplike</h2>
            <p>
                Kondisyon sa yo gouvène pa lwa Repiblik Ayiti. Tout dispits ap rezoud nan tribinal konpetan Ayisyen yo.
            </p>
        </div>

        <div class="content-section">
            <h2>13. Kontak</h2>
            <p>
                Si w gen kesyon sou kondisyon sa yo, kontakte nou:
            </p>
            <ul>
                <li>
                    <svg style="width: 20px; height: 20px; fill: #4CAF50; vertical-align: middle; margin-right: 5px;" viewBox="0 0 24 24">
                        <path d="M16.75 13.96c.25.13.41.2.46.3.06.11.04.61-.21 1.18-.2.56-1.24 1.1-1.7 1.12-.46.02-.47.36-2.96-.73-2.49-1.09-3.99-3.75-4.11-3.92-.12-.17-.96-1.38-.92-2.61.05-1.22.69-1.8.95-2.04.24-.26.51-.29.68-.26h.47c.15 0 .36-.06.55.45l.69 1.87c.06.13.1.28.01.44l-.27.41-.39.42c-.12.12-.26.25-.12.5.12.26.62 1.09 1.32 1.78.91.88 1.71 1.17 1.95 1.3.24.14.39.12.54-.04l.81-.94c.19-.25.35-.19.58-.11l1.67.88M12 2a10 10 0 0 1 10 10 10 10 0 0 1-10 10c-1.97 0-3.8-.57-5.35-1.55L2 22l1.55-4.65A9.969 9.969 0 0 1 2 12 10 10 0 0 1 12 2m0 2a8 8 0 0 0-8 8c0 1.72.54 3.31 1.46 4.61L4.5 19.5l2.89-.96A7.95 7.95 0 0 0 12 20a8 8 0 0 0 8-8 8 8 0 0 0-8-8z"/>
                    </svg>
                    WhatsApp: <a href="https://wa.me/50931071890" style="color: #FFC107;">+509 31-07-18-90</a>
                </li>
                <li>📍 Adrès: Pòtoprens, Ayiti</li>
                <li style="font-size: 0.9rem; color: #999; margin-top: 10px;">Disponib 24/7</li>
            </ul>
        </div>

        <div style="text-align: center; margin-top: 3rem; padding: 2rem; background: rgba(255, 193, 7, 0.1); border-radius: 10px; border: 1px solid rgba(255, 193, 7, 0.3);">
            <p style="color: #ddd; font-size: 0.9rem;">
                Pa itilize sèvis YonKous si w pa dakò ak kondisyon sa yo. Kontakte nou si w gen nenpòt kesyon.
            </p>
        </div>
    </div>
    
    <p style="margin-top: 2rem; padding-top: 1.5rem; border-top: 1px solid #333; color: #999; font-size: 0.9rem; text-align: center;">
        Developper par <a href="https://sagacetech.com" target="_blank" style="color: #FFC107; text-decoration: none;">SagaceTech</a> | 
        Contact: <a href="tel:+15634680355" style="color: #FFC107; text-decoration: none;">+1 563-468-0355</a>
    </p>
</body>
</html>
