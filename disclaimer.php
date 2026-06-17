<?php include 'header.php'; ?>

<style>
.legal-hero {
    background:var(--bg);
    background-image:linear-gradient(rgba(255,229,0,0.03) 1px,transparent 1px),linear-gradient(90deg,rgba(255,229,0,0.03) 1px,transparent 1px);
    background-size:44px 44px;
    border-bottom:3px solid var(--mint);
    padding:80px 0 60px;
}
.legal-eyebrow { font-family:'Space Mono',monospace;font-size:0.6rem;font-weight:700;color:var(--mint);text-transform:uppercase;letter-spacing:0.22em;display:flex;align-items:center;gap:8px;margin-bottom:12px; }
.legal-eyebrow::before { content:'//'; color:var(--muted); }
.legal-h1 { font-family:'Boogaloo',cursive;font-size:clamp(2.4rem,7vw,4rem);color:var(--white);letter-spacing:0.02em;line-height:1;margin-bottom:18px; }
.legal-h1 span { color:var(--mint); }
.legal-meta { font-family:'Space Mono',monospace;font-size:0.65rem;color:var(--muted);letter-spacing:0.06em; }
.legal-wrap { max-width:860px;margin:0 auto;padding:80px 0 100px; }
.legal-card { background:var(--bg2);border:2px solid var(--border);padding:40px 44px;margin-bottom:16px;position:relative; }
.legal-card::before { content:'';position:absolute;top:-2px;left:0;width:60px;height:4px;background:var(--mint); }
.lc-title { font-family:'Boogaloo',cursive;font-size:1.3rem;color:var(--mint);letter-spacing:0.04em;text-transform:uppercase;margin-bottom:16px;display:flex;align-items:center;gap:12px; }
.lc-num { font-family:'Space Mono',monospace;font-size:0.55rem;font-weight:700;color:var(--muted);padding:4px 10px;border:1px solid var(--border);background:var(--card);letter-spacing:0.12em; }
.lc-body { font-family:'Space Mono',monospace;font-size:0.75rem;color:var(--muted);line-height:1.95; }
.lc-body p { margin-bottom:14px; }
.lc-body p:last-child { margin-bottom:0; }
.lc-body ul { padding-left:20px;margin-bottom:14px; }
.lc-body li { margin-bottom:8px; }
.lc-body a { color:var(--mint);text-decoration:none; }
.lc-body a:hover { text-decoration:underline; }
@media (max-width:640px) { .legal-hero{padding:60px 0 44px} .legal-card{padding:26px 20px} .legal-wrap{padding:52px 0 72px} }
@media (max-width:480px) { .legal-h1{font-size:clamp(2rem,8vw,2.6rem)} .legal-card{padding:22px 16px} }
</style>

<section class="legal-hero">
    <div class="container">
        <div class="legal-eyebrow">Legal</div>
        <h1 class="legal-h1">DISCLAIMER</h1>
        <div class="legal-meta">Last Updated: January 1, 2025 &nbsp;·&nbsp; 8BitArenaCo.com</div>
    </div>
</section>

<div class="legal-wrap">
    <div class="container">

        <div class="legal-card">
            <div class="lc-title"><span class="lc-num">01</span> General Disclaimer</div>
            <div class="lc-body">
                <p>The information and services provided on 8BitArenaCo.com are for general entertainment and informational purposes only. While we strive to keep our game library and content up to date, we make no representations or warranties of any kind — express or implied — about the completeness, accuracy, reliability, or availability of the site or games.</p>
            </div>
        </div>

        <div class="legal-card">
            <div class="lc-title"><span class="lc-num">02</span> No Endorsement</div>
            <div class="lc-body">
                <p>The games hosted on 8BitArenaCo are provided by third-party developers. Inclusion of any game on this platform does not constitute an endorsement, recommendation, or approval by 8BitArenaCo of that game, its developers, or any affiliated products or services.</p>
                <p>All trademarks and game titles belong to their respective owners and are used on this site for identification purposes only.</p>
            </div>
        </div>

        <div class="legal-card">
            <div class="lc-title"><span class="lc-num">03</span> Availability</div>
            <div class="lc-body">
                <p>We do not guarantee that 8BitArenaCo.com or any games will be available at all times without interruption. The site may be temporarily unavailable due to technical issues, maintenance, or events beyond our control.</p>
                <p>Games from third-party providers may be modified, removed, or become unavailable at any time without notice. We are not responsible for the continued availability of any third-party game.</p>
            </div>
        </div>

        <div class="legal-card">
            <div class="lc-title"><span class="lc-num">04</span> External Links</div>
            <div class="lc-body">
                <p>Our website may contain links to external websites. These links are provided for convenience only. We have no control over the content, accuracy, or availability of these external sites and accept no responsibility for them or for any loss or damage that may arise from your use of them.</p>
                <p>Following any external link from 8BitArenaCo is done entirely at your own risk.</p>
            </div>
        </div>

        <div class="legal-card">
            <div class="lc-title"><span class="lc-num">05</span> Advertising Disclaimer</div>
            <div class="lc-body">
                <p>8BitArenaCo is supported by third-party advertising (including Google AdSense). Advertisements displayed on this site are selected and managed by third-party platforms and do not constitute an endorsement by us of the advertised products or services.</p>
                <p>We are not responsible for the accuracy, content, or practices of any advertiser, nor for any damages arising from your engagement with advertisements displayed on this platform.</p>
            </div>
        </div>

        <div class="legal-card">
            <div class="lc-title"><span class="lc-num">06</span> Age & Content</div>
            <div class="lc-body">
                <p>While we curate our game library to be broadly suitable for users aged 13 and above, individual games sourced from third-party developers may contain content (violence, mature themes) that is not appropriate for all audiences. Parents and guardians are encouraged to supervise younger players.</p>
                <p>8BitArenaCo makes no guarantees about the content rating or suitability of third-party games for any specific age group.</p>
            </div>
        </div>

        <div class="legal-card">
            <div class="lc-title"><span class="lc-num">07</span> Limitation of Liability</div>
            <div class="lc-body">
                <p>To the maximum extent permitted by applicable law, 8BitArenaCo and its operators shall not be liable for any direct, indirect, incidental, consequential, or punitive damages arising out of your access to or use of this website, including but not limited to technical failures, game performance issues, or reliance on any content on this site.</p>
                <p>By continuing to use 8BitArenaCo.com, you agree to this disclaimer in full. Questions? Reach us at <a href="mailto:support@8bitarenaco.com">support@8bitarenaco.com</a>.</p>
            </div>
        </div>

    </div>
</div>

<?php include 'footer.php'; ?>