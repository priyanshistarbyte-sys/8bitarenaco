<?php include 'header.php'; ?>

<style>
.legal-hero {
    background: var(--bg);
    background-image:
        linear-gradient(rgba(255,229,0,0.03) 1px,transparent 1px),
        linear-gradient(90deg,rgba(255,229,0,0.03) 1px,transparent 1px);
    background-size:44px 44px;
    border-bottom:3px solid var(--yellow);
    padding:80px 0 60px;
}
.legal-eyebrow {
    font-family:'Space Mono',monospace;
    font-size:0.6rem;font-weight:700;
    color:var(--yellow);text-transform:uppercase;letter-spacing:0.22em;
    display:flex;align-items:center;gap:8px;margin-bottom:12px;
}
.legal-eyebrow::before { content:'//'; color:var(--muted); }
.legal-h1 {
    font-family:'Boogaloo',cursive;
    font-size:clamp(2.4rem,7vw,4rem);
    color:var(--white);letter-spacing:0.02em;line-height:1;
    margin-bottom:18px;
}
.legal-h1 span { color:var(--yellow); }
.legal-meta {
    font-family:'Space Mono',monospace;
    font-size:0.65rem;color:var(--muted);
    letter-spacing:0.06em;
}
.legal-wrap {
    max-width:860px;margin:0 auto;
    padding:80px 0 100px;
}
.legal-card {
    background:var(--bg2);
    border:2px solid var(--border);
    padding:40px 44px;
    margin-bottom:16px;
    position:relative;
}
.legal-card::before {
    content:'';position:absolute;
    top:-2px;left:0;width:60px;height:4px;
    background:var(--yellow);
}
.lc-title {
    font-family:'Boogaloo',cursive;
    font-size:1.3rem;color:var(--yellow);
    letter-spacing:0.04em;text-transform:uppercase;
    margin-bottom:16px;
    display:flex;align-items:center;gap:12px;
}
.lc-num {
    font-family:'Space Mono',monospace;
    font-size:0.55rem;font-weight:700;
    color:var(--muted);padding:4px 10px;
    border:1px solid var(--border);
    background:var(--card);letter-spacing:0.12em;
}
.lc-body {
    font-family:'Space Mono',monospace;
    font-size:0.75rem;color:var(--muted);
    line-height:1.95;
}
.lc-body p { margin-bottom:14px; }
.lc-body p:last-child { margin-bottom:0; }
.lc-body ul { padding-left:20px;margin-bottom:14px; }
.lc-body li { margin-bottom:8px; }
.lc-body a { color:var(--yellow);text-decoration:none; }
.lc-body a:hover { text-decoration:underline; }
@media (max-width:640px) {
    .legal-hero { padding:60px 0 44px; }
    .legal-card { padding:26px 20px; }
    .legal-wrap { padding:52px 0 72px; }
}
@media (max-width:480px) {
    .legal-h1 { font-size:clamp(2rem,8vw,2.6rem); }
    .legal-card { padding:22px 16px; }
}
</style>

<!-- Hero -->
<section class="legal-hero">
    <div class="container">
        <div class="legal-eyebrow">Legal</div>
        <h1 class="legal-h1">PRIVACY <span>POLICY</span></h1>
        <div class="legal-meta">Last Updated: January 1, 2025 &nbsp;·&nbsp; 8BitArenaCo.com</div>
    </div>
</section>

<div class="legal-wrap">
    <div class="container">

        <div class="legal-card">
            <div class="lc-title"><span class="lc-num">01</span> Introduction</div>
            <div class="lc-body">
                <p>Welcome to 8BitArenaCo.com ("we," "us," or "our"). This Privacy Policy explains how we collect, use, and protect your information when you use our free online gaming platform at <a href="https://8bitarenaco.com">https://8bitarenaco.com</a>.</p>
                <p>By accessing or using our website, you agree to this Privacy Policy. If you disagree with any part, please discontinue use of our site.</p>
            </div>
        </div>

        <div class="legal-card">
            <div class="lc-title"><span class="lc-num">02</span> Information We Collect</div>
            <div class="lc-body">
                <p>We collect information automatically when you visit, including:</p>
                <ul>
                    <li>IP address and browser type</li>
                    <li>Pages visited and time spent on site</li>
                    <li>Referring URLs and search terms</li>
                    <li>Device type and operating system</li>
                </ul>
                <p>We do <strong style="color:var(--white)">not</strong> require account registration or collect personal details such as your name or email unless you contact us directly.</p>
            </div>
        </div>

        <div class="legal-card">
            <div class="lc-title"><span class="lc-num">03</span> Cookies & Tracking</div>
            <div class="lc-body">
                <p>We use cookies and similar technologies to improve your experience, analyze site traffic, and serve relevant advertisements. Third-party partners including Google (AdSense/AdMob) may use cookies to display ads based on your prior visits.</p>
                <p>You can opt out of personalized advertising through <a href="https://adssettings.google.com" target="_blank">Google's Ad Settings</a> or the <a href="https://optout.networkadvertising.org" target="_blank">NAI opt-out page</a>. Disabling cookies in your browser may limit some site functionality.</p>
            </div>
        </div>

        <div class="legal-card">
            <div class="lc-title"><span class="lc-num">04</span> How We Use Your Data</div>
            <div class="lc-body">
                <p>Information collected is used to:</p>
                <ul>
                    <li>Operate and improve the site and game library</li>
                    <li>Understand how visitors engage with content</li>
                    <li>Display advertisements to support our free service</li>
                    <li>Detect and prevent abuse, fraud, or security issues</li>
                </ul>
                <p>We do not sell, rent, or trade your personal information to third parties for their marketing purposes.</p>
            </div>
        </div>

        <div class="legal-card">
            <div class="lc-title"><span class="lc-num">05</span> Third-Party Services</div>
            <div class="lc-body">
                <p>Our site may include games and content hosted by third parties. These services operate under their own privacy policies, which we encourage you to review. We are not responsible for the privacy practices of third-party game providers.</p>
                <p>We use Google Analytics to analyze site traffic. Google's use of this data is governed by <a href="https://policies.google.com/privacy" target="_blank">Google's Privacy Policy</a>.</p>
            </div>
        </div>

        <div class="legal-card">
            <div class="lc-title"><span class="lc-num">06</span> Children's Privacy</div>
            <div class="lc-body">
                <p>8BitArenaCo is intended for users aged 13 and older. We do not knowingly collect personal information from children under 13. If you believe we have inadvertently collected such data, please contact us immediately at <a href="mailto:support@8bitarenaco.com">support@8bitarenaco.com</a> and we will promptly delete it.</p>
            </div>
        </div>

        <div class="legal-card">
            <div class="lc-title"><span class="lc-num">07</span> Your Rights</div>
            <div class="lc-body">
                <p>Depending on your location, you may have rights to access, correct, or request deletion of your personal data. To exercise any of these rights, contact us at <a href="mailto:support@8bitarenaco.com">support@8bitarenaco.com</a>. We will respond within 30 days.</p>
            </div>
        </div>

        <div class="legal-card">
            <div class="lc-title"><span class="lc-num">08</span> Updates to This Policy</div>
            <div class="lc-body">
                <p>We may update this Privacy Policy periodically. Changes will be posted on this page with an updated "Last Updated" date. Continued use of the site after any changes constitutes acceptance of the updated policy.</p>
                <p>Questions? Email us at <a href="mailto:support@8bitarenaco.com">support@8bitarenaco.com</a>.</p>
            </div>
        </div>

    </div>
</div>

<?php include 'footer.php'; ?>