<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YonKous - Moto Taxi Rapide et Fiable en Haïti</title>
    <meta name="description" content="Commandez un moto taxi en quelques secondes. Service rapide, sécurisé et abordable dans toute la région.">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/images/favicon.png">
    <link rel="shortcut icon" type="image/png" href="/images/favicon.png">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://yonkous.ht/">
    <meta property="og:title" content="YonKous - Moto Taxi Rapide et Fiable en Haïti">
    <meta property="og:description" content="Jwenn yon moto taxi nan mwens pase 2 minit. Sèvis 24/7 nan tout rejyon an. Rapid, sekirize ak afordab.">
    <meta property="og:image" content="https://yonkous.ht/images/share.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://yonkous.ht/">
    <meta property="twitter:title" content="YonKous - Moto Taxi Rapide et Fiable en Haïti">
    <meta property="twitter:description" content="Jwenn yon moto taxi nan mwens pase 2 minit. Sèvis 24/7 nan tout rejyon an.">
    <meta property="twitter:image" content="https://yonkous.ht/images/share.png">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            overflow-x: hidden;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
            width: 100%;
            max-width: 100vw;
        }

        /* Header */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            z-index: 1000;
        }

        .navbar {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            text-decoration: none;
        }

        .logo-text {
            font-size: 1.8rem;
            font-weight: 900;
            display: flex;
        }

        .logo-text .yon {
            color: #FFC107;
            -webkit-text-stroke: 3px #000;
            text-stroke: 3px #000;
            paint-order: stroke fill;
            font-weight: 900;
        }

        .logo-text .kous {
            color: #fff;
            -webkit-text-stroke: 3px #000;
            text-stroke: 3px #000;
            paint-order: stroke fill;
            font-weight: 900;
        }

        .logo-icon {
            width: 45px;
            height: 45px;
            background: linear-gradient(135deg, #FFC107, #FFD54F);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #FFC107;
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 1.8rem;
            cursor: pointer;
            color: #333;
            padding: 0.5rem;
            z-index: 1001;
        }

        .mobile-menu-btn:hover {
            color: #FFC107;
        }

        .btn-primary {
            background: #FFC107;
            color: #000;
            padding: 0.8rem 2rem;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s;
        }

        .btn-primary:hover {
            background: #FFD54F;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 193, 7, 0.3);
        }

        .btn-secondary {
            background: white;
            color: #000;
            padding: 0.8rem 2rem;
            border: 2px solid #FFC107;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s;
        }

        .btn-secondary:hover {
            background: #FFC107;
        }

        /* Hero Section */
        .hero {
            margin-top: 80px;
            min-height: 90vh;
            background: linear-gradient(135deg, #FFC107 0%, #FFD54F 100%);
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            width: 600px;
            height: 600px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            top: -200px;
            right: -200px;
        }

        /* Parallax Elements */
        .parallax-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
        }

        .road-lines {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 200%;
            height: 100px;
            background: repeating-linear-gradient(
                90deg,
                transparent,
                transparent 40px,
                rgba(0,0,0,0.1) 40px,
                rgba(0,0,0,0.1) 80px
            );
            animation: roadMove 3s linear infinite;
        }

        @keyframes roadMove {
            0% { transform: translateX(0); }
            100% { transform: translateX(-80px); }
        }

        .speed-lines {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .speed-line {
            position: absolute;
            height: 2px;
            background: linear-gradient(90deg, transparent, rgba(0,0,0,0.3), transparent);
            animation: speedLine 1.5s linear infinite;
        }

        .speed-line:nth-child(1) { top: 20%; width: 30%; animation-delay: 0s; }
        .speed-line:nth-child(2) { top: 40%; width: 40%; animation-delay: 0.3s; }
        .speed-line:nth-child(3) { top: 60%; width: 35%; animation-delay: 0.6s; }
        .speed-line:nth-child(4) { top: 80%; width: 45%; animation-delay: 0.9s; }

        @keyframes speedLine {
            0% {
                right: -50%;
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            100% {
                right: 100%;
                opacity: 0;
            }
        }

        .building {
            position: absolute;
            bottom: 0;
            background: rgba(0,0,0,0.2);
            transition: transform 0.1s linear;
        }

        .building-1 { left: 10%; width: 80px; height: 200px; }
        .building-2 { left: 25%; width: 60px; height: 150px; }
        .building-3 { right: 30%; width: 100px; height: 250px; }
        .building-4 { right: 10%; width: 70px; height: 180px; }

        .hero-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 2rem;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .hero-promo {
            background: rgba(0, 0, 0, 0.3);
            border: 2px solid #FFC107;
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
        }

        .hero-promo-badge {
            background: #FFC107;
            color: #000;
            padding: 0.4rem 1rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 700;
            display: inline-block;
            margin-bottom: 1rem;
        }

        .hero-promo h3 {
            font-size: 1.5rem;
            color: #fff;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .hero-promo-price {
            font-size: 3rem;
            color: #FFC107;
            font-weight: 900;
            margin: 1rem 0;
        }

        .hero-promo-features {
            text-align: left;
            margin: 1.5rem 0;
        }

        .hero-promo-features li {
            color: #ddd;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
            list-style: none;
            padding-left: 1.5rem;
            position: relative;
        }

        .hero-promo-features li:before {
            content: '✓';
            color: #FFC107;
            font-weight: 700;
            position: absolute;
            left: 0;
        }

        .hero-promo .btn-promo-hero {
            display: block;
            background: #FFC107;
            color: #000;
            padding: 0.9rem 2rem;
            border-radius: 30px;
            font-weight: 700;
            text-decoration: none;
            margin-top: 1.5rem;
            transition: all 0.3s;
        }

        .hero-promo .btn-promo-hero:hover {
            background: #FFD54F;
            transform: translateY(-2px);
        }

        .hero-text h1 {
            font-size: 3.5rem;
            font-weight: 800;
            color: #000;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .hero-text p {
            font-size: 1.3rem;
            color: #333;
            margin-bottom: 2rem;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .hero-image {
            position: relative;
        }

        .phone-mockup {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            filter: drop-shadow(0 20px 40px rgba(0,0,0,0.2));
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        /* Features */
        .features {
            padding: 6rem 2rem;
            background: linear-gradient(180deg, #fff 0%, #f9f9f9 100%);
            position: relative;
        }

        .features-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .features-hero {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            margin-bottom: 4rem;
        }

        .features-image-container {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .features-main-image {
            width: 100%;
            max-width: 500px;
            height: auto;
            position: relative;
            z-index: 2;
            filter: drop-shadow(0 20px 40px rgba(0,0,0,0.2));
        }

        .features-main-image.riding {
            animation: motoRide 3s ease-in-out infinite;
        }

        @keyframes motoRide {
            0%, 100% { transform: translateY(0) translateX(0); }
            50% { transform: translateY(-15px) translateX(10px); }
        }

        .speed-ring {
            position: absolute;
            border: 3px solid #FFC107;
            border-radius: 50%;
            opacity: 0;
        }

        .speed-ring.active {
            animation: speedRing 2s ease-out infinite;
        }

        .speed-ring:nth-child(1) {
            width: 300px;
            height: 300px;
            animation-delay: 0s;
        }

        .speed-ring:nth-child(2) {
            width: 400px;
            height: 400px;
            animation-delay: 0.5s;
        }

        .speed-ring:nth-child(3) {
            width: 500px;
            height: 500px;
            animation-delay: 1s;
        }

        @keyframes speedRing {
            0% {
                transform: scale(0.5);
                opacity: 0.8;
            }
            100% {
                transform: scale(1.5);
                opacity: 0;
            }
        }

        .features-intro {
            position: relative;
        }

        .features-intro h2 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            color: #000;
            line-height: 1.2;
        }

        .features-intro .highlight {
            color: #FFC107;
            position: relative;
            display: inline-block;
        }

        .features-intro .highlight::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 8px;
            background: #FFC107;
            opacity: 0.3;
            border-radius: 4px;
        }

        .features-intro p {
            font-size: 1.2rem;
            color: #666;
            line-height: 1.8;
            margin-bottom: 2rem;
        }

        .stats-row {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 2rem;
        }

        .stat-item {
            text-align: center;
            padding: 1.5rem;
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: transform 0.3s;
        }

        .stat-item:hover {
            transform: translateY(-5px) !important;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: #FFC107;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 0.9rem;
            color: #666;
            font-weight: 600;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 3rem;
            color: #000;
        }

        .features-grid {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            background: white;
            padding: 2.5rem;
            border-radius: 20px;
            text-align: left;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 2px solid transparent;
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #FFC107, #FFD54F);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s ease;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(255, 193, 7, 0.2);
            border-color: #FFC107;
        }

        .feature-card:hover::before {
            transform: scaleX(1);
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #FFC107, #FFD54F);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin-bottom: 1.5rem;
            transition: transform 0.3s;
            box-shadow: 0 8px 20px rgba(255, 193, 7, 0.3);
        }

        .feature-card:hover .feature-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .feature-card h3 {
            font-size: 1.4rem;
            margin-bottom: 1rem;
            color: #000;
            font-weight: 700;
        }

        .feature-card p {
            color: #666;
            line-height: 1.8;
            font-size: 1rem;
        }

        .feature-badge {
            display: inline-block;
            background: #FFC107;
            color: #000;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            margin-top: 1rem;
        }

        /* How it Works */
        .how-it-works {
            padding: 3rem 2rem;
            background: #fff;
        }

        .section-title {
            text-align: center;
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 2rem;
            color: #000;
        }

        .steps {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
            position: relative;
        }

        .steps::before {
            content: '';
            position: absolute;
            top: 25px;
            left: 10%;
            right: 10%;
            height: 2px;
            background: linear-gradient(90deg, #FFC107, #FFD54F, #FFC107);
            z-index: 0;
        }

        .step {
            flex: 1;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .step-number {
            width: 50px;
            height: 50px;
            background: #FFC107;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            font-weight: 700;
            margin: 0 auto 0.8rem;
            border: 3px solid #fff;
            box-shadow: 0 4px 15px rgba(255, 193, 7, 0.3);
        }

        .step h3 {
            font-size: 1rem;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .step p {
            font-size: 0.85rem;
            color: #666;
            line-height: 1.4;
        }

        /* CTA Section */
        .cta {
            padding: 6rem 2rem;
            background: #000;
            color: white;
            text-align: center;
        }

        .cta .section-title {
            color: #fff;
        }

        .cta h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .cta p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .app-download {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .download-btn {
            background: white;
            color: #000;
            padding: 1rem 2rem;
            border-radius: 12px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 600;
            transition: transform 0.3s;
        }

        .download-btn:hover {
            transform: scale(1.05);
        }

        /* Footer */
        .footer {
            background: #1a1a1a;
            color: white;
            padding: 3rem 2rem 1rem;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            margin-bottom: 1rem;
            color: #FFC107;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 0.5rem;
        }

        .footer-section a {
            color: #ddd;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section a:hover {
            color: #FFC107;
        }

        .footer-bottom {
            max-width: 1200px;
            margin: 2rem auto 0;
            padding-top: 2rem;
            border-top: 1px solid #333;
            text-align: center;
            color: #999;
        }

        .social-share {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin: 1.5rem 0;
        }

        .social-share a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            text-decoration: none;
            font-size: 1.3rem;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .social-share a:hover {
            transform: translateY(-3px);
            border-color: #FFC107;
            background: rgba(255, 193, 7, 0.15);
        }

        .social-share a.facebook:hover { background: #1877F2; border-color: #1877F2; }
        .social-share a.twitter:hover { background: #1DA1F2; border-color: #1DA1F2; }
        .social-share a.whatsapp:hover { background: #25D366; border-color: #25D366; }
        .social-share a.linkedin:hover { background: #0A66C2; border-color: #0A66C2; }

        .share-text {
            color: #FFC107;
            font-weight: 600;
            margin-bottom: 0.8rem;
            font-size: 0.95rem;
        }

        .social-share {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin: 1.5rem 0;
        }

        .social-share a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            text-decoration: none;
            font-size: 1.3rem;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .social-share a:hover {
            transform: translateY(-3px);
            border-color: #FFC107;
            background: rgba(255, 193, 7, 0.15);
        }

        .social-share a.facebook:hover { background: #1877F2; border-color: #1877F2; }
        .social-share a.twitter:hover { background: #1DA1F2; border-color: #1DA1F2; }
        .social-share a.whatsapp:hover { background: #25D366; border-color: #25D366; }
        .social-share a.linkedin:hover { background: #0A66C2; border-color: #0A66C2; }

        .share-text {
            color: #FFC107;
            font-weight: 600;
            margin-bottom: 0.8rem;
            font-size: 0.95rem;
        }

        .social-share {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin: 1.5rem 0;
        }

        .social-share a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            text-decoration: none;
            font-size: 1.3rem;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .social-share a:hover {
            transform: translateY(-3px);
            border-color: #FFC107;
            background: rgba(255, 193, 7, 0.15);
        }

        .social-share a.facebook:hover {
            background: #1877F2;
            border-color: #1877F2;
        }

        .social-share a.twitter:hover {
            background: #1DA1F2;
            border-color: #1DA1F2;
        }

        .social-share a.whatsapp:hover {
            background: #25D366;
            border-color: #25D366;
        }

        .social-share a.linkedin:hover {
            background: #0A66C2;
            border-color: #0A66C2;
        }

        .share-text {
            color: #FFC107;
            font-weight: 600;
            margin-bottom: 0.8rem;
            font-size: 0.95rem;
        }

        /* Mobile Menu */
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Payment Flow Section */
        .payment-flow {
            background: linear-gradient(135deg, #000 0%, #1a1a1a 100%);
            padding: 6rem 2rem;
            position: relative;
            overflow: hidden;
        }

        .payment-flow::before {
            content: '';
            position: absolute;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(255, 193, 7, 0.1), transparent);
            top: -200px;
            right: -200px;
            border-radius: 50%;
        }

        .payment-flow-container {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .payment-flow h2 {
            text-align: center;
            font-size: 3rem;
            font-weight: 800;
            color: #fff;
            margin-bottom: 1rem;
        }

        .payment-flow-subtitle {
            text-align: center;
            font-size: 1.3rem;
            color: #FFC107;
            margin-bottom: 4rem;
            font-weight: 600;
        }

        .payment-steps-visual {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            position: relative;
            margin-bottom: 4rem;
        }

        .payment-steps-visual::before {
            content: '';
            position: absolute;
            top: 80px;
            left: 20%;
            right: 20%;
            height: 3px;
            background: linear-gradient(90deg, #FFC107, #FFD54F, #FFC107);
            z-index: 0;
        }

        .payment-step-visual {
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .payment-step-circle {
            width: 160px;
            height: 160px;
            margin: 0 auto 2rem;
            background: linear-gradient(135deg, #FFC107, #FFD54F);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            box-shadow: 0 20px 60px rgba(255, 193, 7, 0.4);
            animation: pulseGlow 3s ease-in-out infinite;
        }

        .payment-step-circle svg {
            width: 60px;
            height: 60px;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
        }

        .payment-step-circle::before {
            content: '';
            position: absolute;
            width: 180px;
            height: 180px;
            border: 3px solid #FFC107;
            border-radius: 50%;
            opacity: 0.3;
        }

        .payment-step-visual:nth-child(2) .payment-step-circle {
            animation-delay: 0.5s;
        }

        .payment-step-visual:nth-child(3) .payment-step-circle {
            animation-delay: 1s;
        }

        @keyframes pulseGlow {
            0%, 100% {
                box-shadow: 0 20px 60px rgba(255, 193, 7, 0.4);
                transform: scale(1);
            }
            50% {
                box-shadow: 0 20px 80px rgba(255, 193, 7, 0.6);
                transform: scale(1.05);
            }
        }

        .payment-step-number {
            position: absolute;
            top: -10px;
            right: 10px;
            width: 35px;
            height: 35px;
            background: #000;
            color: #FFC107;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 1.2rem;
            border: 2px solid #FFC107;
        }

        .payment-step-visual h3 {
            font-size: 1.5rem;
            color: #FFC107;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .payment-step-visual p {
            color: #ddd;
            font-size: 1rem;
            line-height: 1.6;
        }

        .payment-benefits {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
            margin-top: 4rem;
        }

        .payment-benefit-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 193, 7, 0.3);
            border-radius: 12px;
            padding: 1.5rem;
            text-align: center;
            transition: all 0.3s;
        }

        .payment-benefit-card:hover {
            background: rgba(255, 193, 7, 0.1);
            border-color: #FFC107;
            transform: translateY(-3px);
        }

        .payment-benefit-icon {
            font-size: 2rem;
            margin-bottom: 1rem;
            opacity: 0.9;
        }

        .payment-benefit-card h4 {
            font-size: 1.1rem;
            color: #FFC107;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .payment-benefit-card p {
            color: #bbb;
            line-height: 1.6;
            font-size: 0.9rem;
        }

        .payment-highlight {
            text-align: center;
            margin-top: 4rem;
            padding: 3rem;
            background: linear-gradient(135deg, #FFC107, #FFD54F);
            border-radius: 30px;
            position: relative;
            box-shadow: 0 20px 60px rgba(255, 193, 7, 0.4);
        }

        .payment-highlight h3 {
            font-size: 2.5rem;
            color: #000;
            font-weight: 800;
            margin-bottom: 1rem;
        }

        .payment-highlight p {
            font-size: 1.3rem;
            color: #333;
            line-height: 1.8;
            font-weight: 500;
        }

        /* Promo Driver Section */
        .promo-driver {
            background: linear-gradient(135deg, #1a1a1a 0%, #000 100%);
            padding: 5rem 2rem;
            position: relative;
            overflow: hidden;
        }

        .promo-driver::before {
            content: '🏍️';
            position: absolute;
            font-size: 20rem;
            opacity: 0.03;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(-15deg);
        }

        .promo-container {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .promo-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .promo-badge {
            display: inline-block;
            background: #FFC107;
            color: #000;
            padding: 0.5rem 1.5rem;
            border-radius: 30px;
            font-weight: 700;
            font-size: 0.9rem;
            margin-bottom: 1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .promo-header h2 {
            font-size: 3rem;
            color: #fff;
            font-weight: 800;
            margin-bottom: 1rem;
        }

        .promo-header .promo-amount {
            font-size: 4rem;
            color: #FFC107;
            font-weight: 900;
            text-shadow: 0 0 30px rgba(255, 193, 7, 0.5);
        }

        .promo-header p {
            font-size: 1.2rem;
            color: #ddd;
            margin-top: 1rem;
        }

        .promo-benefits {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .promo-benefit-item {
            background: rgba(255, 193, 7, 0.05);
            border: 2px solid rgba(255, 193, 7, 0.3);
            border-radius: 16px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s;
        }

        .promo-benefit-item:hover {
            background: rgba(255, 193, 7, 0.1);
            border-color: #FFC107;
            transform: translateY(-5px);
        }

        .promo-benefit-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #FFC107, #FFD54F);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            margin: 0 auto 1.5rem;
            box-shadow: 0 10px 30px rgba(255, 193, 7, 0.3);
        }

        .promo-benefit-item h4 {
            font-size: 1.3rem;
            color: #FFC107;
            margin-bottom: 0.8rem;
            font-weight: 700;
        }

        .promo-benefit-item p {
            color: #bbb;
            line-height: 1.6;
        }

        .promo-cta {
            text-align: center;
            margin-top: 3rem;
        }

        .promo-cta .btn-promo {
            display: inline-block;
            background: #FFC107;
            color: #000;
            padding: 1.2rem 3rem;
            border-radius: 50px;
            font-size: 1.2rem;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s;
            box-shadow: 0 10px 30px rgba(255, 193, 7, 0.4);
        }

        .promo-cta .btn-promo:hover {
            background: #FFD54F;
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(255, 193, 7, 0.6);
        }

        .promo-timer {
            margin-top: 2rem;
            color: #FFC107;
            font-size: 0.9rem;
            font-weight: 600;
        }

        @media (max-width: 768px) {
            .promo-header h2 {
                font-size: 2rem;
            }

            .promo-header .promo-amount {
                font-size: 3rem;
            }

            .promo-benefits {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .payment-steps-visual {
                grid-template-columns: 1fr;
            }

            .payment-steps-visual::before {
                display: none;
            }

            .payment-benefits {
                grid-template-columns: repeat(2, 1fr);
                gap: 1rem;
            }

            .navbar {
                padding: 0.8rem 1rem;
                max-width: 100%;
            }

            .logo {
                flex-shrink: 0;
            }

            .logo-text {
                font-size: 1.4rem;
            }

            .logo img {
                height: 40px !important;
            }

            .nav-links {
                position: fixed;
                top: 0;
                right: -100%;
                width: 70%;
                max-width: 300px;
                height: 100vh;
                background: white;
                flex-direction: column;
                padding: 5rem 2rem 2rem;
                box-shadow: -5px 0 15px rgba(0,0,0,0.2);
                transition: right 0.3s ease;
                z-index: 999;
            }

            .nav-links.active {
                right: 0;
            }

            .nav-links li {
                margin: 0;
                padding: 0;
            }

            .nav-links a {
                display: block;
                padding: 1rem 0;
                font-size: 1.1rem;
                border-bottom: 1px solid #eee;
            }

            .mobile-menu-btn {
                display: block;
            }

            .mobile-overlay {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0,0,0,0.5);
                z-index: 998;
            }

            .mobile-overlay.active {
                display: block;
            }

            .hero-content {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 2rem;
            }

            .hero-promo {
                order: 1;
            }

            .hero-image {
                order: 2;
            }

            .hero-text {
                order: 3;
            }

            .hero-text h1 {
                font-size: 2.5rem;
            }

            .hero-buttons {
                justify-content: center;
            }

            .phone-mockup {
                max-width: 300px;
            }

            .features-hero {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .features-intro h2 {
                font-size: 2rem;
                text-align: center;
            }

            .features-intro p {
                text-align: center;
            }

            .stats-row {
                grid-template-columns: 1fr;
            }

            .features-main-image {
                max-width: 350px;
            }

            .features-image-container {
                order: -1;
            }

            .steps {
                flex-direction: column;
                gap: 2rem;
            }

            .steps::before {
                display: none;
            }

            .step h3 {
                font-size: 1.1rem;
            }

            .step p {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <nav class="navbar">
            <a href="/" class="logo">
                <img src="/images/logo/logo_yonkous.png" alt="YonKous" style="height: 50px; width: auto;">
                <div class="logo-text">
                    <span class="yon">YON</span><span class="kous">KOUS</span>
                </div>
            </a>
            <ul class="nav-links">
                <li><a href="#features">Fonksyonalite</a></li>
                <li><a href="#how-it-works">Kijan li fonksyone</a></li>
                <li><a href="#download">Telechaje</a></li>
                <li style="display: none;"><a href="/login">Konekte</a></li>
            </ul>
            <button class="mobile-menu-btn">☰</button>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="parallax-bg">
            <div class="road-lines"></div>
            <div class="speed-lines" id="speedLines">
                <div class="speed-line"></div>
                <div class="speed-line"></div>
                <div class="speed-line"></div>
                <div class="speed-line"></div>
            </div>
            <div class="building building-1"></div>
            <div class="building building-2"></div>
            <div class="building building-3"></div>
            <div class="building building-4"></div>
        </div>
        <div class="hero-content">
            <div class="hero-promo">
                <div class="hero-promo-badge">Chofè Moto</div>
                <h3>Vin Chofè YonKous</h3>
                <div class="hero-promo-price">100 GDS</div>
                <p style="color: #bbb; font-size: 0.9rem; margin-bottom: 1rem;">Frè Patisipasyon</p>
                <ul class="hero-promo-features">
                    <li>Asirans aksidan</li>
                    <li>Rabè gaz</li>
                    <li>Priyorite kous</li>
                </ul>
                <a href="/driver/register" class="btn-promo-hero">Enskri Jodi a</a>
            </div>

            <div class="hero-image">
                <div class="phone-mockup" style="position: relative; width: 100%; max-width: 400px; margin: 0 auto;">
                    <svg viewBox="0 0 300 600" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 100%; height: auto; filter: drop-shadow(0 20px 40px rgba(0,0,0,0.2));">
                        <rect width="300" height="600" rx="30" fill="#1a1a1a"/>
                        <rect x="10" y="10" width="280" height="580" rx="25" fill="#FFC107"/>
                        <circle cx="150" cy="300" r="100" fill="#000" opacity="0.1"/>
                        <path d="M120 280 L150 250 L180 280" stroke="#000" stroke-width="4" stroke-linecap="round"/>
                    </svg>
                    <img src="/images/logo/logo_yonkous.png" alt="YonKous App" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 40%; height: auto; filter: drop-shadow(0 10px 20px rgba(0,0,0,0.3));">
                </div>
            </div>

            <div class="hero-text">
                <h1>Yon Kous Rapid, Sekirize ki Kontwole</h1>
                <p>Jwenn yon moto taxi nan mwens pase 2 minit. Sèvis 24/7 nan tout rejyon an.</p>
                <div class="hero-buttons">
                    <a href="#how-it-works" class="btn-secondary">Aprann Plis</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="features-container">
            <div class="features-hero">
                <div class="features-intro">
                    <h2>Poukisa Chwazi <span class="highlight">YonKous?</span></h2>
                    <p>Nou se premye sèvis moto taxi dijital nan peyi a. Ak YonKous, w ap jwenn yon kous rapid, sekirize epi bon mache 24/7.</p>

                    <div class="stats-row">
                        <div class="stat-item">
                            <div class="stat-number">2min</div>
                            <div class="stat-label">Tan Atant Mwayen</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">24/7</div>
                            <div class="stat-label">Disponib Toutan</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">100%</div>
                            <div class="stat-label">Chofè Verifye</div>
                        </div>
                    </div>
                </div>

                <div class="features-image-container">
                    <div class="speed-ring"></div>
                    <div class="speed-ring"></div>
                    <div class="speed-ring"></div>
                    <img src="/images/motor_images1.png" alt="YonKous Moto Taxi" class="features-main-image">
                </div>
            </div>
        </div>
    </section>

    <!-- How it Works -->
    <section class="how-it-works" id="how-it-works">
        <h2 class="section-title">Kijan li Fonksyone?</h2>
        <div class="steps">
            <div class="step">
                <div class="step-number">1</div>
                <h3>Antre Destinasyon w</h3>
                <p>Di nou kote w vle ale epi nou ap kalkulle pri a pou ou.</p>
            </div>
            <div class="step">
                <div class="step-number">2</div>
                <h3>Chwazi Chofè w</h3>
                <p>Wè chofè ki disponib nan zòn nan epi chwazi youn.</p>
            </div>
            <div class="step">
                <div class="step-number">3</div>
                <h3>Suiv Vwayaj ou</h3>
                <p>Gade chofè a ap vini chache w an tan reyèl.</p>
            </div>
            <div class="step">
                <div class="step-number">4</div>
                <h3>Rive</h3>
                <p>Chofè a jwenn kòb li otomatikman lè w rive.</p>
            </div>
        </div>
    </section>

    <!-- Payment Section -->
    <section class="payment-flow">
        <div class="payment-flow-container">
            <h2>Sistèm Peman YonKous</h2>
            <p class="payment-flow-subtitle">100% Dijital • 0% Konplikasyon</p>

            <div class="payment-steps-visual">
                <div class="payment-step-visual">
                    <div class="payment-step-circle">
                        <span class="payment-step-number">1</span>
                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="2" y="5" width="20" height="14" rx="2" stroke="#000" stroke-width="1.5"/>
                            <path d="M2 10h20" stroke="#000" stroke-width="1.5"/>
                            <path d="M6 15h4" stroke="#000" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3>Rechaje Kont</h3>
                    <p>Kliyann rechaje kont YonKous yo ak MonCash an 2 segond</p>
                </div>

                <div class="payment-step-visual">
                    <div class="payment-step-circle">
                        <span class="payment-step-number">2</span>
                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 3L4 9v10l8 5 8-5V9l-8-6z" stroke="#000" stroke-width="1.5" stroke-linejoin="round"/>
                            <path d="M12 13L12 8M12 13l-3-1.5M12 13l3-1.5" stroke="#000" stroke-width="1.5" stroke-linecap="round"/>
                            <circle cx="9" cy="15" r="1.5" fill="#000"/>
                            <circle cx="15" cy="15" r="1.5" fill="#000"/>
                        </svg>
                    </div>
                    <h3>Peye Chofè</h3>
                    <p>Peman otomatik dirèk bay chofè apre vwayaj la</p>
                </div>

                <div class="payment-step-visual">
                    <div class="payment-step-circle">
                        <span class="payment-step-number">3</span>
                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="3" y="7" width="18" height="13" rx="1" stroke="#000" stroke-width="1.5"/>
                            <path d="M3 10h18M7 3v4M17 3v4" stroke="#000" stroke-width="1.5" stroke-linecap="round"/>
                            <path d="M8 14h3v3H8z" fill="#000"/>
                            <circle cx="15" cy="15.5" r="1" fill="#000"/>
                        </svg>
                    </div>
                    <h3>Retrè Gratis</h3>
                    <p>Chofè retire lajan yo gratis lakay ajan afilye YonKous</p>
                </div>
            </div>

            <div class="payment-benefits">
                <div class="payment-benefit-card">
                    <div class="payment-benefit-icon">�</div>
                    <h4>Pa Bezwen Kach</h4>
                    <p>100% dijital, rapid, sekirize</p>
                </div>

                <div class="payment-benefit-card">
                    <div class="payment-benefit-icon">⚡</div>
                    <h4>Peman Enstan</h4>
                    <p>Lajan dirèk apre vwayaj</p>
                </div>

                <div class="payment-benefit-card">
                    <div class="payment-benefit-icon">🏪</div>
                    <h4>Retrè Gratis</h4>
                    <p>Nan tout ajan YonKous</p>
                </div>

                <div class="payment-benefit-card">
                    <div class="payment-benefit-icon">🔒</div>
                    <h4>100% Sekirize</h4>
                    <p>Teknoloji modèn pwoteksyon</p>
                </div>
            </div>

            <div class="payment-highlight">
                <h3>🎯 Avantaj YonKous</h3>
                <p>
                    Sistèm peman YonKous se pi bon solisyon pou moto taxi nan peyi a.
                    Kliyann peye fasil ak balans YONKOUS li, chofè jwenn lajan yo rapid, epi retrè gratis lakay ajan.
                    <strong>Pa gen komisyon kache, pa gen konplikasyon!</strong>
                </p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta" id="download">
        <h2>Aplikasyon an Ap Vini Byento!</h2>
        <p>N ap travay di pou ba w pi bon eksperyans moto taxi. Rete konekte!</p>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <div style="display: flex; align-items: center; gap: 0.8rem; margin-bottom: 1rem;">
                    <img src="/images/logo/logo_yonkous.png" alt="YonKous" style="height: 60px; width: auto;">
                    <div class="logo-text" style="font-size: 2rem;">
                        <span class="yon">YON</span><span class="kous">KOUS</span>
                    </div>
                </div>
                <p>Moto taxi rapid, sekirize ak afordab nan tout peyi a.</p>
            </div>
            <div class="footer-section">
                <h3>Lyen Rapid</h3>
                <ul>
                    <li><a href="/about">Konsènan Nou</a></li>
                    <li><a href="/become-driver">Vin Chofè</a></li>
                    <li><a href="/security">Sekirite</a></li>
                    <li><a href="/contact">Kontakte Nou</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Sipò</h3>
                <ul>
                    <li><a href="/faq">FAQ</a></li>
                    <li><a href="/help">Sant Èd</a></li>
                    <li><a href="/terms">Kondisyon</a></li>
                    <li><a href="/privacy">Konfidansyalite</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Kontakte</h3>
                <p>� WhatsApp: +509 31-07-18-90</p>
                <p>📍 Port-au-Prince, Ayiti</p>
                <p style="font-size: 0.85rem; color: #999; margin-top: 10px;">Disponib 24/7</p>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="share-text">Pataje YonKous ak zanmi w yo</div>
            <div class="social-share">
                <a href="https://www.facebook.com/sharer/sharer.php?u=https://yonkous.ht" target="_blank" rel="noopener" class="facebook" title="Pataje sou Facebook">
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </a>
                <a href="https://twitter.com/intent/tweet?url=https://yonkous.ht&text=Jwenn%20yon%20moto%20taxi%20rapid%20ak%20YonKous!" target="_blank" rel="noopener" class="twitter" title="Pataje sou Twitter">
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor">
                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                    </svg>
                </a>
                <a href="https://api.whatsapp.com/send?text=Gade%20YonKous%20-%20Moto%20taxi%20rapid!%20https://yonkous.ht" target="_blank" rel="noopener" class="whatsapp" title="Pataje sou WhatsApp">
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                    </svg>
                </a>
                <a href="https://www.linkedin.com/sharing/share-offsite/?url=https://yonkous.ht" target="_blank" rel="noopener" class="linkedin" title="Pataje sou LinkedIn">
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                </a>
            </div>
            <p>&copy; 2026 YonKous. Tout dwa rezève.</p>
            <p style="margin-top: 0.5rem; font-size: 0.9rem; color: #999;">
                Developper par <a href="https://sagacetech.com" target="_blank" style="color: #FFC107; text-decoration: none;">SagaceTech</a> |
                Contact: <a href="tel:+15634680355" style="color: #FFC107; text-decoration: none;">+1 563-468-0355</a>
            </p>
        </div>
    </footer>

    <script>
        // Parallax scroll effect
        let lastScrollY = 0;
        let ticking = false;
        let rideAnimationStarted = false;
        const isMobile = window.innerWidth <= 768;
        let animatedElements = new Map(); // Track animated elements

        function updateParallax() {
            const scrollY = window.scrollY;
            const scrollSpeed = Math.abs(scrollY - lastScrollY);
            const scrollDirection = scrollY > lastScrollY ? 'down' : 'up';

            // Effets parallax pour desktop et mobile avec gestion dynamique
            // Effets parallax pour desktop et mobile avec gestion dynamique

            // Speed lines (desktop uniquement)
            if (!isMobile) {
                const speedLines = document.getElementById('speedLines');
                if (speedLines) {
                    speedLines.style.opacity = Math.min(scrollSpeed / 20, 1);
                }

                const buildings = document.querySelectorAll('.building');
                buildings.forEach((building, index) => {
                    const speed = (index + 1) * 0.3;
                    const yPos = scrollY * speed;
                    building.style.transform = `translateY(${yPos}px)`;
                });

                const heroContent = document.querySelector('.hero-content');
                if (heroContent) {
                    heroContent.style.transform = `translateY(${scrollY * 0.5}px)`;
                }
            }

            // Features section - actif sur desktop et mobile
            const featuresSection = document.querySelector('.features-hero');
            if (featuresSection) {
                const rect = featuresSection.getBoundingClientRect();
                const windowHeight = window.innerHeight;

                // Vérifier si la section est visible
                const isInViewport = rect.top < windowHeight && rect.bottom > 0;
                const sectionKey = 'features-section';

                if (isInViewport) {
                    let scrollProgress = 0;
                    if (rect.top < windowHeight) {
                        scrollProgress = Math.min(1, (windowHeight - rect.top) / (windowHeight * 0.8));
                    }

                    const motoImage = document.querySelector('.features-main-image');
                    if (motoImage) {
                        const motoStartPos = isMobile ? -100 : -150;
                        const motoEndPos = 0;
                        const currentMotoPos = motoStartPos + (scrollProgress * (motoEndPos - motoStartPos));
                        const opacity = Math.min(1, scrollProgress * 1.5);

                        motoImage.style.transform = `translateX(${currentMotoPos}%)`;
                        motoImage.style.opacity = opacity;

                        // Marquer comme animé
                        animatedElements.set('moto', true);

                        if (scrollProgress > 0.9 && !rideAnimationStarted) {
                            motoImage.classList.add('riding');
                            rideAnimationStarted = true;
                        }
                    }

                    const featuresIntro = document.querySelector('.features-intro');
                    if (featuresIntro) {
                        const textStartPos = isMobile ? -50 : -100;
                        const textEndPos = 0;
                        const textProgress = Math.max(0, scrollProgress - 0.1);
                        const currentTextPos = textStartPos + (textProgress * (textEndPos - textStartPos));
                        const textOpacity = Math.min(1, textProgress * 1.5);

                        featuresIntro.style.transform = `translateX(${currentTextPos}px)`;
                        featuresIntro.style.opacity = textOpacity;
                    }

                    const statItems = document.querySelectorAll('.stat-item');
                    statItems.forEach((stat, index) => {
                        const statStartPos = isMobile ? -40 : -80;
                        const statEndPos = 0;
                        const delay = index * 0.1;
                        const statProgress = Math.max(0, scrollProgress - 0.2 - delay);
                        const currentStatPos = statStartPos + (statProgress * (statEndPos - statStartPos));
                        const statOpacity = Math.min(1, statProgress * 2);

                        stat.style.transform = `translateX(${currentStatPos}px)`;
                        stat.style.opacity = statOpacity;
                    });

                    if (!isMobile) {
                        const speedRings = document.querySelectorAll('.speed-ring');
                        if (scrollProgress > 0.7) {
                            speedRings.forEach(ring => {
                                ring.classList.add('active');
                            });
                        }
                    }
                } else if (animatedElements.get('moto')) {
                    // Section sortie du viewport - fixer l'état final
                    if (rect.bottom < 0 && scrollDirection === 'down') {
                        // Section passée - rester à l'état final
                        const motoImage = document.querySelector('.features-main-image');
                        if (motoImage && !motoImage.style.transform.includes('translateX(0')) {
                            motoImage.style.transform = 'translateX(0%)';
                            motoImage.style.opacity = '1';
                        }
                    } else if (rect.top > windowHeight && scrollDirection === 'up') {
                        // Section pas encore atteinte - revenir à l'état initial
                        animatedElements.delete('moto');
                    }
                }
            }

            // Features cards
            const features = document.querySelectorAll('.feature-card');
            features.forEach((feature, index) => {
                const rect = feature.getBoundingClientRect();
                const windowHeight = window.innerHeight;
                const isInViewport = rect.top < windowHeight && rect.bottom > 0;

                if (isInViewport) {
                    const scrollProgress = (windowHeight - rect.top) / windowHeight;
                    const translateY = isMobile ? Math.max(0, (1 - scrollProgress) * 20) : Math.max(0, (1 - scrollProgress) * 50);
                    feature.style.transform = `translateY(${translateY}px)`;
                    feature.style.opacity = Math.min(scrollProgress * 2, 1);
                    animatedElements.set(`feature-${index}`, true);
                } else if (animatedElements.get(`feature-${index}`)) {
                    // Fixer l'état quand on sort
                    if (rect.bottom < 0) {
                        feature.style.transform = 'translateY(0)';
                        feature.style.opacity = '1';
                    }
                }
            });

            // Steps
            const steps = document.querySelectorAll('.step');
            steps.forEach((step, index) => {
                const rect = step.getBoundingClientRect();
                const windowHeight = window.innerHeight;
                const isInViewport = rect.top < windowHeight && rect.bottom > 0;

                if (isInViewport) {
                    const scrollProgress = (windowHeight - rect.top) / windowHeight;
                    const translateY = isMobile ? Math.max(0, (1 - scrollProgress) * 15) : Math.max(0, (1 - scrollProgress) * 30);
                    const delay = index * 0.1;
                    step.style.transform = `translateY(${translateY}px)`;
                    step.style.opacity = Math.min((scrollProgress - delay) * 2, 1);
                    animatedElements.set(`step-${index}`, true);
                } else if (animatedElements.get(`step-${index}`)) {
                    if (rect.bottom < 0) {
                        step.style.transform = 'translateY(0)';
                        step.style.opacity = '1';
                    }
                }
            });

            lastScrollY = scrollY;
            ticking = false;
        }

        function requestTick() {
            if (!ticking) {
                window.requestAnimationFrame(updateParallax);
                ticking = true;
            }
        }

        window.addEventListener('scroll', requestTick);

        // Initial state
        document.addEventListener('DOMContentLoaded', () => {
            // Set initial state for features elements
            const motoImage = document.querySelector('.features-main-image');
            if (motoImage) {
                motoImage.style.transform = isMobile ? 'translateX(-100%)' : 'translateX(-150%)';
                motoImage.style.opacity = '0';
                motoImage.style.transition = isMobile ? 'all 0.4s ease-out' : 'all 0.6s ease-out';
            }

            const featuresIntro = document.querySelector('.features-intro');
            if (featuresIntro) {
                featuresIntro.style.transform = isMobile ? 'translateX(-50px)' : 'translateX(-100px)';
                featuresIntro.style.opacity = '0';
                featuresIntro.style.transition = isMobile ? 'all 0.4s ease-out' : 'all 0.6s ease-out';
            }

            document.querySelectorAll('.stat-item').forEach(stat => {
                stat.style.transform = isMobile ? 'translateX(-40px)' : 'translateX(-80px)';
                stat.style.opacity = '0';
                stat.style.transition = isMobile ? 'all 0.4s ease-out' : 'all 0.6s ease-out';
            });

            // Set initial opacity for features cards
            document.querySelectorAll('.feature-card').forEach(feature => {
                feature.style.opacity = 0;
                feature.style.transition = isMobile ? 'all 0.4s ease-out' : 'all 0.6s ease-out';
            });

            document.querySelectorAll('.step').forEach(step => {
                step.style.opacity = 0;
                step.style.transition = isMobile ? 'all 0.4s ease-out' : 'all 0.6s ease-out';
            });

            updateParallax();
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
                // Close mobile menu if open
                if (window.innerWidth <= 768) {
                    const navLinks = document.querySelector('.nav-links');
                    const overlay = document.querySelector('.mobile-overlay');
                    navLinks.classList.remove('active');
                    if (overlay) overlay.classList.remove('active');
                }
            });
        });

        // Mobile menu toggle
        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        const navLinks = document.querySelector('.nav-links');
        let mobileOverlay = document.querySelector('.mobile-overlay');

        // Create overlay if it doesn't exist
        if (!mobileOverlay) {
            mobileOverlay = document.createElement('div');
            mobileOverlay.className = 'mobile-overlay';
            document.body.appendChild(mobileOverlay);
        }

        mobileMenuBtn.addEventListener('click', function() {
            navLinks.classList.toggle('active');
            mobileOverlay.classList.toggle('active');
        });

        // Close menu when clicking overlay
        mobileOverlay.addEventListener('click', function() {
            navLinks.classList.remove('active');
            mobileOverlay.classList.remove('active');
        });
    </script>
</body>
</html>
