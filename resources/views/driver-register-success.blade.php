<!DOCTYPE html>
<html lang="ht">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enskripsyon Reyisi - YONKOUS</title>
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
            max-width: 600px;
            width: 100%;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 50px 40px;
            border: 1px solid rgba(255, 193, 7, 0.3);
            text-align: center;
        }

        .success-icon {
            width: 100px;
            height: 100px;
            margin: 0 auto 30px;
            background: linear-gradient(135deg, #4CAF50 0%, #81C784 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: scaleIn 0.5s ease-out;
        }

        .success-icon svg {
            width: 60px;
            height: 60px;
            fill: #fff;
        }

        @keyframes scaleIn {
            0% {
                transform: scale(0);
                opacity: 0;
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        .logo {
            margin-bottom: 20px;
        }

        .logo img {
            width: 100px;
            height: auto;
        }

        h1 {
            color: #FFC107;
            font-size: 2rem;
            margin-bottom: 15px;
            animation: fadeInUp 0.6s ease-out 0.2s both;
        }

        .subtitle {
            color: #81C784;
            font-size: 1.2rem;
            margin-bottom: 30px;
            font-weight: 500;
            animation: fadeInUp 0.6s ease-out 0.3s both;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .info-box {
            background: rgba(255, 193, 7, 0.1);
            border: 2px solid #FFC107;
            border-radius: 15px;
            padding: 30px;
            margin: 30px 0;
            animation: fadeInUp 0.6s ease-out 0.4s both;
        }

        .info-box h2 {
            color: #FFC107;
            font-size: 1.3rem;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .info-box h2 svg {
            width: 28px;
            height: 28px;
            fill: #FFC107;
        }

        .contact-info {
            background: rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
        }

        .phone-number {
            font-size: 1.8rem;
            font-weight: 700;
            color: #FFC107;
            margin: 10px 0;
            letter-spacing: 1px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .phone-number svg {
            width: 32px;
            height: 32px;
            fill: #4CAF50;
        }

        .warning-box {
            background: rgba(244, 67, 54, 0.1);
            border: 2px solid #f44336;
            border-radius: 10px;
            padding: 15px;
            margin-top: 20px;
            font-size: 0.95rem;
            color: #EF5350;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .warning-box svg {
            width: 24px;
            height: 24px;
            fill: #f44336;
            flex-shrink: 0;
        }

        .description {
            color: #ccc;
            font-size: 1rem;
            line-height: 1.7;
            margin: 20px 0;
        }

        .description strong {
            color: #FFC107;
        }

        .next-steps {
            text-align: left;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 10px;
            padding: 25px;
            margin: 30px 0;
            animation: fadeInUp 0.6s ease-out 0.5s both;
        }

        .next-steps h3 {
            color: #FFC107;
            font-size: 1.2rem;
            margin-bottom: 15px;
            text-align: center;
        }

        .next-steps ol {
            margin-left: 20px;
            color: #ccc;
        }

        .next-steps li {
            margin-bottom: 12px;
            line-height: 1.6;
        }

        .btn-home {
            display: inline-block;
            padding: 15px 40px;
            background: linear-gradient(135deg, #FFC107 0%, #FFD54F 100%);
            color: #000;
            font-size: 1.1rem;
            font-weight: 600;
            text-decoration: none;
            border-radius: 12px;
            margin-top: 30px;
            transition: all 0.3s ease;
            animation: fadeInUp 0.6s ease-out 0.6s both;
        }

        .btn-home:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(255, 193, 7, 0.4);
        }

        @media (max-width: 768px) {
            .container {
                padding: 40px 25px;
            }

            h1 {
                font-size: 1.6rem;
            }

            .phone-number {
                font-size: 1.4rem;
                flex-direction: column;
            }

            .info-box {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="success-icon">
            <svg viewBox="0 0 24 24">
                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
            </svg>
        </div>

        <div class="logo">
            <img src="/images/logo/logo_yonkous.png" alt="YONKOUS Logo">
        </div>

        <h1>Enskripsyon Reyisi! 🎉</h1>
        <p class="subtitle">Felisitasyon! Ou fèk enskri nan Klèb Chofè YONKOUS</p>

        <div class="info-box">
            <h2>
                <svg viewBox="0 0 24 24">
                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                </svg>
                Nou Pral Kontakte W!
            </h2>

            <p class="description">
                Ekip YONKOUS la pral rele w <strong>sou nimewo telefòn ou bay la</strong> pou pale de <strong>frè patisipasyon 100 GDS</strong> la ak pwochen etap yo.
            </p>

            <div class="contact-info">
                <p style="color: #ccc; margin-bottom: 10px;">Sèlman nimewo sa autorize pou kontak:</p>
                <div class="phone-number">
                    <svg viewBox="0 0 24 24">
                        <path d="M16.75 13.96c.25.13.41.2.46.3.06.11.04.61-.21 1.18-.2.56-1.24 1.1-1.7 1.12-.46.02-.47.36-2.96-.73-2.49-1.09-3.99-3.75-4.11-3.92-.12-.17-.96-1.38-.92-2.61.05-1.22.69-1.8.95-2.04.24-.26.51-.29.68-.26h.47c.15 0 .36-.06.55.45l.69 1.87c.06.13.1.28.01.44l-.27.41-.39.42c-.12.12-.26.25-.12.5.12.26.62 1.09 1.32 1.78.91.88 1.71 1.17 1.95 1.3.24.14.39.12.54-.04l.81-.94c.19-.25.35-.19.58-.11l1.67.88M12 2a10 10 0 0 1 10 10 10 10 0 0 1-10 10c-1.97 0-3.8-.57-5.35-1.55L2 22l1.55-4.65A9.969 9.969 0 0 1 2 12 10 10 0 0 1 12 2m0 2a8 8 0 0 0-8 8c0 1.72.54 3.31 1.46 4.61L4.5 19.5l2.89-.96A7.95 7.95 0 0 0 12 20a8 8 0 0 0 8-8 8 8 0 0 0-8-8z"/>
                    </svg>
                    +509 31-07-18-90
                </div>
            </div>

            <div class="warning-box">
                <svg viewBox="0 0 24 24">
                    <path d="M12 2L1 21h22M12 6l7.53 13H4.47M11 10v4h2v-4m-2 6v2h2v-2"/>
                </svg>
                <div style="text-align: left;">
                    <strong>ATANSYON:</strong> Pa janm bay lajan pou okenn lòt nimewo. Sèlman nimewo sa ki otorize: <strong>+509 31-07-18-90</strong>
                </div>
            </div>
        </div>

        <div class="next-steps">
            <h3>Pwochen Etap Yo</h3>
            <ol>
                <li>Atann apèl nou sou WhatsApp oswa telefòn ou</li>
                <li>Konfime enfòmasyon ou yo ak nou</li>
                <li>Peye frè patisipasyon 100 GDS la sou nimewo <strong>+509 31-07-18-90</strong></li>
                <li>Resevwa konfimasyson ak pwochen enstriksyon yo</li>
            </ol>
        </div>

        <a href="/" class="btn-home">Retounen Lakay</a>
    </div>
</body>
</html>
