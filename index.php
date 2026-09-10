<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Azure App Services CI/CD Test Page</title>
    <style>
        :root {
            --azure-blue: #0078D4;
            --azure-dark: #004578;
            --bg-color: #f3f2f1;
            --card-bg: #ffffff;
            --text-color: #323130;
            --success-color: #107c41;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: var(--card-bg);
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 2.5rem;
            max-width: 600px;
            width: 90%;
            text-align: center;
            position: relative;
        }

        .logo-header {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1.25rem;
            margin-bottom: 1.5rem;
        }

        .divider {
            width: 1px;
            height: 32px;
            background-color: #e1dfdd;
        }

        .logo-ms {
            height: 32px;
            width: auto;
        }

        .logo-azure {
            height: 36px;
            width: auto;
            object-fit: contain;
        }

        h1 {
            color: var(--azure-dark);
            margin-bottom: 0.5rem;
            font-size: 1.8rem;
        }

        .status-badge {
            display: inline-block;
            background-color: #dff6dd;
            color: var(--success-color);
            padding: 0.4rem 1rem;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 1.5rem;
            border: 1px solid #b7e1cd;
        }

        p {
            line-height: 1.6;
            color: #605e5c;
            margin-bottom: 1.5rem;
        }

        .info-card {
            background-color: #faf9f8;
            border-left: 4px solid var(--azure-blue);
            padding: 1rem;
            text-align: left;
            border-radius: 0 4px 4px 0;
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
        }

        .info-card div {
            margin-bottom: 0.5rem;
        }

        .info-card div:last-child {
            margin-bottom: 0;
        }

        .info-label {
            font-weight: 600;
            color: var(--azure-dark);
        }

        .timestamp {
            font-size: 0.8rem;
            color: #8a8886;
            margin-bottom: 1.5rem;
        }

        .footer-attribution {
            border-top: 1px solid #edebe9;
            padding-top: 1rem;
            font-size: 0.85rem;
            color: #605e5c;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .footer-attribution span {
            color: var(--azure-blue);
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Logos Header -->
        <div class="logo-header">
            <!-- Microsoft SVG Logo -->
            <svg class="logo-ms" viewBox="0 0 23 23" xmlns="http://www.w3.org/2000/svg">
                <path fill="#f35325" d="M1 1h10v10H1z"/>
                <path fill="#81bc06" d="M12 1h10v10H12z"/>
                <path fill="#05a6f0" d="M1 12h10v10H1z"/>
                <path fill="#ffba08" d="M12 12h10v10H12z"/>
            </svg>

            <div class="divider"></div>

            <!-- Azure Logo Image -->
            <img class="logo-azure" src="https://icon.icepanel.io/Technology/svg/Azure.svg" alt="Azure Logo">
        </div>

        <h1>PHP CI/CD Deployment Test</h1>
        <div class="status-badge">✓ Deployment Successful</div>

        <p>If you can see this page, your Azure App Service pipeline (GitHub Actions or Azure DevOps) successfully deployed the PHP application.</p>

        <div class="info-card">
            <div><span class="info-label">Environment:</span> Production-2</div>
            <div><span class="info-label">PHP Version:</span> <?php echo phpversion(); ?></div>
            <div><span class="info-label">Server Time (UTC):</span> <?php echo gmdate('Y-m-d H:i:s T'); ?></div>
        </div>

        <div class="timestamp">
            Client Local Time: <span id="local-time"></span>
        </div>

        <!-- Footer Tag -->
        <div class="footer-attribution">
            LAB BY <span>KZYS</span>
        </div>
    </div>

    <script>
        document.getElementById('local-time').textContent = new Date().toLocaleString();
    </script>
</body>
</html>