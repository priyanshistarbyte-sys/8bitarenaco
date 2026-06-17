<?php include 'header.php'; ?>

<style>
.legal-hero {
    background:var(--bg);
    background-image:linear-gradient(rgba(255,229,0,0.03) 1px,transparent 1px),linear-gradient(90deg,rgba(255,229,0,0.03) 1px,transparent 1px);
    background-size:44px 44px;
    border-bottom:3px solid var(--red);
    padding:80px 0 60px;
}
.legal-eyebrow { font-family:'Space Mono',monospace;font-size:0.6rem;font-weight:700;color:var(--red);text-transform:uppercase;letter-spacing:0.22em;display:flex;align-items:center;gap:8px;margin-bottom:12px; }
.legal-eyebrow::before { content:'//'; color:var(--muted); }
.legal-h1 { font-family:'Boogaloo',cursive;font-size:clamp(2.4rem,7vw,4rem);color:var(--white);letter-spacing:0.02em;line-height:1;margin-bottom:18px; }
.legal-h1 span { color:var(--red); }
.legal-meta { font-family:'Space Mono',monospace;font-size:0.65rem;color:var(--muted);letter-spacing:0.06em; }
.legal-wrap { max-width:860px;margin:0 auto;padding:80px 0 100px; }
.legal-card { background:var(--bg2);border:2px solid var(--border);padding:40px 44px;margin-bottom:16px;position:relative; }
.legal-card::before { content:'';position:absolute;top:-2px;left:0;width:60px;height:4px;background:var(--red); }
.lc-title { font-family:'Boogaloo',cursive;font-size:1.3rem;color:var(--red);letter-spacing:0.04em;text-transform:uppercase;margin-bottom:16px;display:flex;align-items:center;gap:12px; }
.lc-num { font-family:'Space Mono',monospace;font-size:0.55rem;font-weight:700;color:var(--muted);padding:4px 10px;border:1px solid var(--border);background:var(--card);letter-spacing:0.12em; }
.lc-body { font-family:'Space Mono',monospace;font-size:0.75rem;color:var(--muted);line-height:1.95; }
.lc-body p { margin-bottom:14px; }
.lc-body p:last-child { margin-bottom:0; }
.lc-body ul { padding-left:20px;margin-bottom:14px; }
.lc-body li { margin-bottom:8px; }
.lc-body a { color:var(--red);text-decoration:none; }
.lc-body a:hover { text-decoration:underline; }
@media (max-width:640px) { .legal-hero{padding:60px 0 44px} .legal-card{padding:26px 20px} .legal-wrap{padding:52px 0 72px} }
@media (max-width:480px) { .legal-h1{font-size:clamp(2rem,8vw,2.6rem)} .legal-card{padding:22px 16px} }
</style>

<section class="legal-hero">
    <div class="container">
        <div class="legal-eyebrow">Legal</div>
        <h1 class="legal-h1">TERMS OF <span>SERVICE</span></h1>
        <div class="legal-meta">Last Updated: January 1, 2025 &nbsp;·&nbsp; 8BitArenaCo.com</div>
    </div>
</section>

<div class="legal-wrap">
    <div class="container">

        <div class="legal-card">
            <div class="lc-title"><span class="lc-num">01</span> Acceptance of Terms</div>
            <div class="lc-body">
                <p>By accessing or using 8BitArenaCo.com, you agree to these Terms of Service. If you do not agree, please do not use our site. We reserve the right to update these terms at any time; your continued use after changes constitutes acceptance.</p>
            </div>
        </div>

        <div class="legal-card">
            <div class="lc-title"><span class="lc-num">02</span> Use of the Site</div>
            <div class="lc-body">
                <p>8BitArenaCo provides free browser-based games for personal, non-commercial entertainment. By using this site, you agree to:</p>
                <ul>
                    <li>Use the service only for lawful purposes</li>
                    <li>Not attempt to reverse-engineer, copy, or redistribute games or content</li>
                    <li>Not use automated tools (bots, scrapers) to access or collect data</li>
                    <li>Not engage in any activity that disrupts or damages the platform</li>
                </ul>
            </div>
        </div>

        <div class="legal-card">
            <div class="lc-title"><span class="lc-num">03</span> Intellectual Property</div>
            <div class="lc-body">
                <p>All original content on 8BitArenaCo.com — including site design, layout, text, graphics, and code — is the property of 8BitArenaCo and may not be reproduced without explicit written permission.</p>
                <p>Third-party games embedded on this platform remain the intellectual property of their respective developers and publishers. We do not claim ownership of any third-party game content.</p>
            </div>
        </div>

        <div class="legal-card">
            <div class="lc-title"><span class="lc-num">04</span> Third-Party Games & Content</div>
            <div class="lc-body">
                <p>Games on 8BitArenaCo are provided by third-party developers. We make no warranties regarding the accuracy, availability, or content of these games. We are not responsible for any issues arising from your use of third-party content.</p>
                <p>Links to external sites or services are provided for convenience only. We do not endorse and are not responsible for external content, products, or services.</p>
            </div>
        </div>

        <div class="legal-card">
            <div class="lc-title"><span class="lc-num">05</span> Advertising</div>
            <div class="lc-body">
                <p>8BitArenaCo is supported by advertising, including Google AdSense. By using this site, you consent to the display of advertisements. Advertisements are provided by third parties and are subject to their own terms and privacy policies.</p>
                <p>We are not responsible for the content, accuracy, or practices of third-party advertisers.</p>
            </div>
        </div>

        <div class="legal-card">
            <div class="lc-title"><span class="lc-num">06</span> Disclaimers</div>
            <div class="lc-body">
                <p>8BitArenaCo is provided on an "as is" and "as available" basis without warranties of any kind — express or implied — including fitness for a particular purpose, non-infringement, or uninterrupted service.</p>
                <p>We do not guarantee that the site will be error-free or available at all times. We reserve the right to modify, suspend, or discontinue any part of the service without notice.</p>
            </div>
        </div>

        <div class="legal-card">
            <div class="lc-title"><span class="lc-num">07</span> Limitation of Liability</div>
            <div class="lc-body">
                <p>To the fullest extent permitted by law, 8BitArenaCo and its operators shall not be liable for any indirect, incidental, special, or consequential damages arising from your use of the site, including loss of data, profits, or goodwill.</p>
                <p>In no event shall our total liability exceed the amount you have paid us in the preceding 12 months (which, given we are a free service, is $0).</p>
            </div>
        </div>

        <div class="legal-card">
            <div class="lc-title"><span class="lc-num">08</span> Governing Law</div>
            <div class="lc-body">
                <p>These Terms are governed by applicable laws without regard to conflict of law provisions. Any disputes shall be resolved in the appropriate courts of competent jurisdiction.</p>
                <p>For any questions regarding these Terms, contact us at <a href="mailto:support@8bitarenaco.com">support@8bitarenaco.com</a>.</p>
            </div>
        </div>

    </div>
</div>

<?php include 'footer.php'; ?>