<!DOCTYPE html>
<html lang="ht">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politik Konfidansyalite - YonKous</title>
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

        .intro-box {
            background: linear-gradient(135deg, rgba(255, 193, 7, 0.1) 0%, rgba(0, 0, 0, 0.3) 100%);
            border: 2px solid #FFC107;
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 3rem;
            text-align: center;
        }

        .intro-box svg {
            width: 60px;
            height: 60px;
            margin-bottom: 1rem;
            stroke: #FFC107;
            fill: none;
            stroke-width: 2;
        }

        .intro-box p {
            color: #ddd;
            font-size: 1.1rem;
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

        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin: 1.5rem 0;
        }

        .data-table th, .data-table td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid rgba(255, 193, 7, 0.2);
        }

        .data-table th {
            background: rgba(255, 193, 7, 0.1);
            color: #FFC107;
            font-weight: 600;
        }

        .data-table td {
            color: #ddd;
        }

        .highlight-box {
            background: rgba(255, 193, 7, 0.1);
            border-left: 4px solid #FFC107;
            padding: 1.5rem;
            margin: 1.5rem 0;
            border-radius: 5px;
        }

        .highlight-box p {
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

            .data-table {
                font-size: 0.9rem;
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
            <h1>Politik Konfidansyalite</h1>
            <p class="update-date">Dènye mizajou: Fevriye 2026</p>
        </div>

        <div class="intro-box">
            <svg viewBox="0 0 24 24">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
            </svg>
            <p>
                <strong>Vi prive w enpòtan pou nou.</strong><br>
                Dokiman sa a eksplike kijan nou kolekte, itilize, ak pwoteje enfòmasyon pèsonèl ou.
            </p>
        </div>

        <div class="content-section">
            <h2>1. Enfòmasyon Nou Kolekte</h2>

            <h3>1.1 Enfòmasyon Ou Bay Nou</h3>
            <p>Lè w enskri oswa itilize YonKous, nou ka kolekte:</p>

            <table class="data-table">
                <thead>
                    <tr>
                        <th>Tip Enfòmasyon</th>
                        <th>Egzanp</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Enfòmasyon Idantite</td>
                        <td>Non, prenon, dat nesans, idantite</td>
                    </tr>
                    <tr>
                        <td>Enfòmasyon Kontak</td>
                        <td>Nimewo telefòn, adrès email, adrès fizik</td>
                    </tr>
                    <tr>
                        <td>Enfòmasyon Peman</td>
                        <td>Detay kont, istorik tranzaksyon</td>
                    </tr>
                    <tr>
                        <td>Enfòmasyon Chofè</td>
                        <td>Dokiman moto, lisans (si aplikab), foto</td>
                    </tr>
                </tbody>
            </table>

            <h3>1.2 Enfòmasyon Nou Kolekte Otomatikman</h3>
            <ul>
                <li><strong>Lokalizasyon GPS:</strong> Pozisyon ou an tan reyèl pandan vwayaj yo</li>
                <li><strong>Enfòmasyon Aparèy:</strong> Modèl telefòn, sistèm operasyon, vèsyon aplikasyon</li>
                <li><strong>Enfòmasyon Itilizasyon:</strong> Kòman ou itilize aplikasyon an, kous ou fè, rating</li>
                <li><strong>Enfòmasyon Rezo:</strong> Adrès IP, tip koneksyon</li>
            </ul>

            <h3>1.3 Enfòmasyon Lòt Moun Bay</h3>
            <p>
                Nou ka resevwa enfòmasyon sou ou nan lòt itilizatè yo (tankou rating ak kòmantè), oswa nan patnè nou yo (tankou sèvis peman).
            </p>
        </div>

        <div class="content-section">
            <h2>2. Kijan Nou Itilize Enfòmasyon Ou</h2>

            <p>Nou itilize enfòmasyon ou pou:</p>

            <h3>2.1 Bay Sèvis</h3>
            <ul>
                <li>Konekte pasaje ak chofè</li>
                <li>Kalkile wout ak pri</li>
                <li>Trete peman</li>
                <li>Bay sipò kliyan</li>
                <li>Voye notifikasyon sou vwayaj yo</li>
            </ul>

            <h3>2.2 Amelyore Sekirite</h3>
            <ul>
                <li>Verifye idantite itilizatè yo</li>
                <li>Detekte ak anpeche fwod</li>
                <li>Ranfòse sekirite platfòm lan</li>
                <li>Rezoud dispits</li>
            </ul>

            <h3>2.3 Kominikasyon</h3>
            <ul>
                <li>Voye konfirmasyon ak resepsyon</li>
                <li>Enfòme w de chanjman nan sèvis la</li>
                <li>Reponn kesyon ou yo</li>
                <li>Voye pwomosyon (si w dakò)</li>
            </ul>

            <h3>2.4 Amelyorasyon Sèvis</h3>
            <ul>
                <li>Analize kòman itilizatè yo itilize aplikasyon an</li>
                <li>Devlope nouvo fonksyon</li>
                <li>Fè rechèch ak estatistik</li>
            </ul>
        </div>

        <div class="content-section">
            <h2>3. Pataj Enfòmasyon</h2>

            <div class="highlight-box">
                <p><strong>NOU PA VANN ENFÒMASYON PÈSONÈL OU.</strong></p>
            </div>

            <h3>3.1 Ant Itilizatè yo</h3>
            <p>Nou pataje enfòmasyon limit ant pasaje ak chofè pou fasilite vwayaj yo:</p>
            <ul>
                <li>Non, foto, rating</li>
                <li>Lokalizasyon pandan vwayaj la</li>
                <li>Nimewo telefòn (pou kontakte sèlman)</li>
            </ul>

            <h3>3.2 Ak Patnè Nou Yo</h3>
            <p>Nou ka pataje enfòmasyon ak:</p>
            <ul>
                <li><strong>Sèvis Peman:</strong> Pou trete tranzaksyon yo</li>
                <li><strong>Founisè Teknoloji:</strong> Pou opere platfòm lan</li>
                <li><strong>Sèvis Asirans:</strong> Pou pwoteje itilizatè yo</li>
            </ul>

            <h3>3.3 Rezon Legal</h3>
            <p>Nou ka revele enfòmasyon ou si:</p>
            <ul>
                <li>Lwa mande l</li>
                <li>Gen yon òd tribinal</li>
                <li>Pou pwoteje dwa nou oswa dwa lòt moun</li>
                <li>Pou anpeche aktivite ilegal</li>
            </ul>
        </div>

        <div class="content-section">
            <h2>4. Lokalizasyon ak Swivi</h2>

            <p>
                YonKous itilize lokalizasyon GPS ou pou bay sèvis transpò. Nou kolekte done lokalizasyon ou lè:
            </p>
            <ul>
                <li>Ou louvri aplikasyon an</li>
                <li>Ou komande yon kous</li>
                <li>Pandan vwayaj la (pou pasaje ak chofè)</li>
            </ul>

            <p>
                Ou ka desaktive sèvis lokalizasyon nan paramèt telefòn ou, men sa ap limite fonksyonalite aplikasyon an.
            </p>

            <div class="highlight-box">
                <p>Nou SÈLMAN kolekte lokalizasyon ou pandan ou itilize aplikasyon an, pa nan background.</p>
            </div>
        </div>

        <div class="content-section">
            <h2>5. Sekirite Done</h2>

            <p>Nou pran mezi teknik ak òganizasyonèl pou pwoteje enfòmasyon ou:</p>

            <h3>5.1 Mezi Teknik</h3>
            <ul>
                <li>Chifreman done (SSL/TLS)</li>
                <li>Stockaj sekirize sou sèvè pwoteje</li>
                <li>Otantifikasyon 2 faktè</li>
                <li>Monitoraj sekirite 24/7</li>
            </ul>

            <h3>5.2 Mezi Òganizasyonèl</h3>
            <ul>
                <li>Sèl anplwaye otorize gen aksè a done yo</li>
                <li>Fòmasyon sou pwoteksyon done pou tout ekip la</li>
                <li>Politik sekirite estrik</li>
            </ul>

            <p>
                Malgre tout mezi sa yo, okenn sistèm pa 100% sekirize. Nou ankouraje w pou kenbe modpas ou sekirize.
            </p>
        </div>

        <div class="content-section">
            <h2>6. Dwa Ou yo</h2>

            <p>Ou gen dwa pou:</p>

            <h3>6.1 Aksè ak Kopi</h3>
            <p>Mande yon kopi de tout enfòmasyon pèsonèl nou genyen sou ou.</p>

            <h3>6.2 Kòreksyon</h3>
            <p>Korije enfòmasyon ki pa egzat oswa konplè.</p>

            <h3>6.3 Efasman</h3>
            <p>Mande nou efase enfòmasyon ou (nan limit obligasyon legal nou yo).</p>

            <h3>6.4 Opozisyon</h3>
            <p>Opoze w a itilizasyon sèten enfòmasyon (tankou pou marketing).</p>

            <h3>6.5 Portabilite</h3>
            <p>Resevwa enfòmasyon ou nan yon fòma ki li pa machin.</p>

            <h3>6.6 Retirasyon Konsantman</h3>
            <p>Retire konsantman ou pou trete enfòmasyon ou nenpòt lè.</p>

            <p>
                Pou egèse dwa sa yo, kontakte nou sou WhatsApp: <a href="https://wa.me/50931071890" style="color: #FFC107;">+509 31-07-18-90</a>
            </p>
        </div>

        <div class="content-section">
            <h2>7. Retansyon Done</h2>

            <p>Nou konsève enfòmasyon ou pou:</p>
            <ul>
                <li><strong>Kont Aktif:</strong> Pandan w itilize sèvis la ak 5 an apre</li>
                <li><strong>Istorik Tranzaksyon:</strong> 10 an (pou rezon legal ak fiskal)</li>
                <li><strong>Done Sekirite:</strong> 3 an apre dènye aktivite</li>
                <li><strong>Kòrespondans:</strong> 2 an apre rezolisyon</li>
            </ul>

            <p>
                Apre peryòd sa yo, nou efase oswa anonimize done yo.
            </p>
        </div>

        <div class="content-section">
            <h2>8. Timoun</h2>

            <p>
                YonKous pa aksepte itilizatè ki gen mwens pase 18 an. Nou pa kolekte enfòmasyon sou timoun volontèman. Si nou dekouvri nou aksidantèlman resevwa enfòmasyon yon timoun, nou ap efase yo imedyatman.
            </p>
        </div>

        <div class="content-section">
            <h2>9. Cookies ak Teknoloji Sanble</h2>

            <p>Nou itilize cookies ak teknoloji sanble pou:</p>
            <ul>
                <li>Kenbe ou konekte</li>
                <li>Sonje preferans ou</li>
                <li>Analize itilizasyon aplikasyon an</li>
                <li>Amelyore pèfòmans</li>
            </ul>

            <p>
                Ou ka desaktive cookies nan paramèt navigatè w, men sa ka afekte fonksyonalite aplikasyon an.
            </p>
        </div>

        <div class="content-section">
            <h2>10. Chanjman nan Politik Sa a</h2>

            <p>
                Nou ka modifye politik konfidansyalite sa a pou reflete chanjman nan pratik nou oswa pou rezon legal. Nou ap enfòme w de chanjman enpòtan yo pa:
            </p>
            <ul>
                <li>Email</li>
                <li>Notifikasyon nan aplikasyon an</li>
                <li>Mesaj sou sit wèb nou an</li>
            </ul>

            <p>
                Nou ankouraje w pou revize politik sa a peryodikman.
            </p>
        </div>

        <div class="content-section">
            <h2>11. Kontak</h2>

            <p>Pou tout kesyon konsènan vi prive w oswa politik sa a:</p>

            <ul style="list-style: none; padding: 0;">
                <li style="margin-bottom: 1rem;">
                    <svg style="display: inline-block; width: 24px; height: 24px; vertical-align: middle; fill: #4CAF50; margin-right: 0.5rem;" viewBox="0 0 24 24">
                        <path d="M16.75 13.96c.25.13.41.2.46.3.06.11.04.61-.21 1.18-.2.56-1.24 1.1-1.7 1.12-.46.02-.47.36-2.96-.73-2.49-1.09-3.99-3.75-4.11-3.92-.12-.17-.96-1.38-.92-2.61.05-1.22.69-1.8.95-2.04.24-.26.51-.29.68-.26h.47c.15 0 .36-.06.55.45l.69 1.87c.06.13.1.28.01.44l-.27.41-.39.42c-.12.12-.26.25-.12.5.12.26.62 1.09 1.32 1.78.91.88 1.71 1.17 1.95 1.3.24.14.39.12.54-.04l.81-.94c.19-.25.35-.19.58-.11l1.67.88M12 2a10 10 0 0 1 10 10 10 10 0 0 1-10 10c-1.97 0-3.8-.57-5.35-1.55L2 22l1.55-4.65A9.969 9.969 0 0 1 2 12 10 10 0 0 1 12 2m0 2a8 8 0 0 0-8 8c0 1.72.54 3.31 1.46 4.61L4.5 19.5l2.89-.96A7.95 7.95 0 0 0 12 20a8 8 0 0 0 8-8 8 8 0 0 0-8-8z"/>
                    </svg>
                    <strong>WhatsApp:</strong> <a href="https://wa.me/50931071890" style="color: #FFC107;">+509 31-07-18-90</a>
                </li>
                <li>
                    <svg style="display: inline-block; width: 20px; height: 20px; vertical-align: middle; stroke: #FFC107; fill: none; stroke-width: 2; margin-right: 0.5rem;" viewBox="0 0 24 24">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                        <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                    <strong>Adrès:</strong> Pòtoprens, Ayiti
                </li>
                <li style="font-size: 0.9rem; color: #999; margin-top: 15px;">• Disponib 24/7</li>
            </ul>
        </div>

        <div style="text-align: center; margin-top: 3rem; padding: 2rem; background: rgba(255, 193, 7, 0.1); border-radius: 10px; border: 1px solid rgba(255, 193, 7, 0.3);">
            <svg style="width: 50px; height: 50px; margin-bottom: 1rem; stroke: #FFC107; fill: none; stroke-width: 2;" viewBox="0 0 24 24">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
            </svg>
            <p style="color: #ddd; font-size: 1rem;">
                <strong style="color: #FFC107;">Vi prive w enpòtan pou nou.</strong><br>
                Nou angaje nou pou pwoteje enfòmasyon pèsonèl ou epi respekte dwa w yo.
            </p>
        </div>
    </div>
    
    <p style="margin-top: 2rem; padding-top: 1.5rem; border-top: 1px solid #333; color: #999; font-size: 0.9rem; text-align: center;">
        Developper par <a href="https://sagacetech.com" target="_blank" style="color: #FFC107; text-decoration: none;">SagaceTech</a> | 
        Contact: <a href="tel:+15634680355" style="color: #FFC107; text-decoration: none;">+1 563-468-0355</a>
    </p>
</body>
</html>
