<?php include 'header.php'; ?>

<style>
/* ════════════════════════════════
   8BITARENACO — NEO-BRUTALIST ARCADE
   index.php styles
════════════════════════════════ */

/* ── HERO ── */
.hero-section {
    position: relative;
    min-height: 100vh;
    display: flex;
    align-items: center;
    padding: 100px 0 80px;
    overflow: hidden;
    background-color: var(--bg);
    background-image:
        linear-gradient(rgba(255,229,0,0.035) 1px, transparent 1px),
        linear-gradient(90deg, rgba(255,229,0,0.035) 1px, transparent 1px);
    background-size: 44px 44px;
}

.hero-layout {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 64px;
    align-items: center;
}

.insert-coin {
    display: inline-flex; align-items: center; gap: 8px;
    font-family: 'Space Mono', monospace;
    font-size: 0.65rem; font-weight: 700;
    letter-spacing: 0.22em; text-transform: uppercase;
    color: var(--yellow); margin-bottom: 28px;
}
.ic-dots { display: flex; gap: 4px; }
.ic-dot {
    width: 6px; height: 6px;
    background: var(--yellow); border-radius: 50%;
    animation: dot-blink 1.4s infinite;
}
.ic-dot:nth-child(2) { animation-delay: 0.2s; }
.ic-dot:nth-child(3) { animation-delay: 0.4s; }
@keyframes dot-blink { 0%,60%,100%{opacity:1} 30%{opacity:0.15} }

.hero-h1 {
    font-family: 'Boogaloo', cursive;
    font-size: clamp(3.2rem, 9vw, 6.5rem);
    line-height: 0.95;
    letter-spacing: 0.01em;
    color: var(--white);
    margin-bottom: 28px;
}
.hero-h1 .line-yellow { color: var(--yellow); display: block; }
.hero-h1 .line-red { color: var(--red); display: block; }
.hero-h1 .line-mint { color: var(--mint); display: block; }

.hero-desc {
    font-family: 'Space Mono', monospace;
    font-size: 0.82rem;
    color: var(--muted);
    line-height: 1.9;
    max-width: 480px;
    margin-bottom: 36px;
}

.hero-btns {
    display: flex; gap: 16px; flex-wrap: wrap;
    margin-bottom: 44px;
}

.hero-tags {
    display: flex; flex-wrap: wrap; gap: 8px;
}
.hero-tag {
    font-family: 'Space Mono', monospace;
    font-size: 0.58rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.12em;
    color: var(--muted);
    border: 1px solid var(--border);
    padding: 5px 12px;
    background: var(--card);
}

/* Arcade screen mockup */
.arcade-screen {
    border: 3px solid var(--yellow);
    background: #000;
    padding: 24px 22px;
    box-shadow: 8px 8px 0 var(--yellow);
    font-family: 'Space Mono', monospace;
    position: relative;
}
.arcade-screen::before {
    content: '';
    position: absolute;
    inset: 6px;
    border: 1px solid rgba(255,229,0,0.15);
    pointer-events: none;
}
.as-header {
    font-size: 0.58rem; font-weight: 700;
    color: var(--yellow); letter-spacing: 0.2em; text-transform: uppercase;
    display: flex; align-items: center; gap: 8px;
    margin-bottom: 20px; padding-bottom: 12px;
    border-bottom: 1px solid #1f1f1f;
}
.as-dot { width: 7px; height: 7px; border-radius: 50%; flex-shrink: 0; }
.as-score-lbl { font-size: 0.55rem; color: #555; letter-spacing: 0.2em; text-transform: uppercase; }
.as-score {
    font-family: 'Boogaloo', cursive;
    font-size: 3.8rem; color: var(--yellow);
    line-height: 1; margin: 4px 0 18px;
}
.as-divider { height: 1px; background: #1a1a1a; margin: 14px 0; }
.as-stat {
    font-size: 0.68rem; color: var(--white);
    letter-spacing: 0.06em; padding: 5px 0;
    display: flex; align-items: center; gap: 10px;
    border-bottom: 1px solid #111;
}
.as-stat:last-of-type { border-bottom: none; }
.as-blink {
    font-size: 0.65rem; font-weight: 700;
    color: var(--yellow); letter-spacing: 0.22em;
    text-align: center; margin-top: 18px;
    animation: ablink 1s steps(1) infinite;
}
@keyframes ablink { 0%,49%{opacity:1} 50%,100%{opacity:0.1} }

/* ── TICKER ── */
.ticker-wrap {
    background: var(--yellow);
    border-top: 3px solid #000;
    border-bottom: 3px solid #000;
    overflow: hidden; padding: 10px 0;
}
.ticker-track {
    display: inline-flex; white-space: nowrap;
    animation: ticker 28s linear infinite;
}
.ticker-track span {
    font-family: 'Space Mono', monospace;
    font-size: 0.72rem; font-weight: 700;
    letter-spacing: 0.08em; text-transform: uppercase;
    color: #000; padding: 0 20px;
}
@keyframes ticker { from{transform:translateX(0)} to{transform:translateX(-50%)} }

/* ── STAT STRIP ── */
.stat-strip {
    display: grid; grid-template-columns: repeat(4, 1fr);
    background: var(--bg2);
    border-bottom: 2px solid var(--border);
}
.stat-item {
    padding: 28px 24px;
    border-right: 2px solid var(--border);
    position: relative;
    transition: background 0.2s;
}
.stat-item:last-child { border-right: none; }
.stat-item:hover { background: #222; }
.stat-item::before {
    content: '';
    position: absolute; left: 0; top: 0; bottom: 0;
    width: 4px; background: var(--yellow);
}
.stat-num {
    font-family: 'Boogaloo', cursive;
    font-size: 3rem; color: var(--yellow);
    line-height: 1; margin-bottom: 6px;
}
.stat-num.red { color: var(--red); }
.stat-num.mint { color: var(--mint); }
.stat-lbl {
    font-family: 'Space Mono', monospace;
    font-size: 0.6rem; font-weight: 700;
    color: var(--muted); text-transform: uppercase; letter-spacing: 0.12em;
}

/* ── GAMES SECTION ── */
.games-section {
    padding: 100px 0;
    background: var(--bg);
    border-bottom: 2px solid var(--border);
}
.sec-label {
    font-family: 'Space Mono', monospace;
    font-size: 0.6rem; font-weight: 700;
    color: var(--yellow); text-transform: uppercase; letter-spacing: 0.22em;
    margin-bottom: 8px; display: flex; align-items: center; gap: 10px;
}
.sec-label::before { content: '//'; color: var(--muted); }
.sec-title {
    font-family: 'Boogaloo', cursive;
    font-size: clamp(2rem, 5vw, 3.2rem);
    color: var(--white); letter-spacing: 0.02em;
    line-height: 1; margin-bottom: 0;
}
.sec-title span { color: var(--yellow); }
.sec-bar {
    width: 60px; height: 4px;
    background: var(--yellow); margin-top: 16px;
}

/* Category buttons */
.cat-btn {
    display: inline-flex; align-items: center; gap: 6px;
    background: var(--card); border: 2px solid var(--border);
    color: var(--muted);
    font-family: 'Space Mono', monospace;
    font-size: 0.65rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.08em;
    padding: 7px 16px; border-radius: 0;
    cursor: pointer; transition: all 0.18s; white-space: nowrap;
}
.cat-btn:hover { border-color: var(--yellow); color: var(--yellow); }
.cat-btn.active {
    background: var(--yellow); border-color: var(--yellow);
    color: #000; box-shadow: 3px 3px 0 rgba(255,229,0,0.3);
}

/* Game card */
.game-card {
    background: var(--card); border: 2px solid var(--border);
    border-radius: 0; overflow: hidden; cursor: pointer;
    transition: all 0.18s; position: relative;
}
.game-card:hover {
    border-color: var(--yellow);
    box-shadow: 5px 5px 0 var(--yellow);
    transform: translate(-2px, -2px);
}
.game-card:hover .gc-img { filter: brightness(1.05) saturate(1.1); transform: scale(1.04); }
.gc-img {
    width: 100%; height: 160px; object-fit: cover;
    transition: all 0.3s; filter: brightness(0.88) saturate(0.85);
}
.gc-badge-new {
    background: var(--yellow); color: #000;
    font-family: 'Space Mono', monospace; font-size: 0.5rem; font-weight: 700;
    padding: 3px 8px; letter-spacing: 0.06em; text-transform: uppercase;
}
.gc-badge-hot {
    background: var(--red); color: #fff;
    font-family: 'Space Mono', monospace; font-size: 0.5rem; font-weight: 700;
    padding: 3px 8px; letter-spacing: 0.06em; text-transform: uppercase;
}
.gc-play {
    width: 100%; background: var(--border); border: none;
    color: var(--yellow);
    font-family: 'Boogaloo', cursive; font-size: 0.88rem;
    letter-spacing: 0.08em; text-transform: uppercase;
    padding: 9px; cursor: pointer; transition: all 0.18s;
    border-top: 2px solid var(--border); border-radius: 0; margin-top: 8px;
}
.gc-play:hover { background: var(--yellow); color: #000; }

.btn-load {
    background: transparent; color: var(--yellow);
    font-family: 'Boogaloo', cursive; font-size: 1rem;
    letter-spacing: 0.08em; text-transform: uppercase;
    padding: 13px 44px; border: 2px solid var(--yellow); border-radius: 0;
    cursor: pointer; transition: all 0.18s;
}
.btn-load:hover { background: var(--yellow); color: #000; box-shadow: 4px 4px 0 rgba(255,229,0,0.25); }

/* ── FEATURE STRIPS ── */
.feat-strip {
    padding: 90px 0;
    border-bottom: 2px solid var(--border);
}
.feat-strip-yellow {
    background: var(--yellow);
    border-top: 2px solid #000;
    border-bottom: 2px solid #000;
}
.feat-inner {
    display: flex; align-items: center; gap: 64px;
}
.feat-inner.rev { flex-direction: row-reverse; }

.feat-icon-box {
    width: 130px; height: 130px;
    background: var(--yellow); color: #000;
    font-size: 4rem;
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
    border: 2px solid var(--yellow);
    box-shadow: 6px 6px 0 rgba(255,229,0,0.3);
}
.feat-strip-yellow .feat-icon-box {
    background: #000; color: var(--yellow);
    border-color: #000; box-shadow: 6px 6px 0 rgba(0,0,0,0.25);
}

.feat-num {
    font-family: 'Boogaloo', cursive;
    font-size: 7rem; color: rgba(255,255,255,0.04);
    line-height: 1; margin-bottom: -30px;
}
.feat-strip-yellow .feat-num { color: rgba(0,0,0,0.08); }

.feat-eyebrow {
    font-family: 'Space Mono', monospace;
    font-size: 0.6rem; font-weight: 700;
    color: var(--yellow); text-transform: uppercase; letter-spacing: 0.2em;
    margin-bottom: 10px; position: relative; z-index: 1;
}
.feat-strip-yellow .feat-eyebrow { color: #000; }

.feat-h {
    font-family: 'Boogaloo', cursive;
    font-size: clamp(1.6rem, 3.5vw, 2.4rem);
    color: var(--white); letter-spacing: 0.03em;
    line-height: 1.1; margin-bottom: 18px; position: relative; z-index: 1;
}
.feat-strip-yellow .feat-h { color: #000; }

.feat-p {
    font-family: 'Space Mono', monospace;
    font-size: 0.78rem; color: var(--muted);
    line-height: 1.95; max-width: 480px; position: relative; z-index: 1;
}
.feat-strip-yellow .feat-p { color: #333; }

.feat-tags { display: flex; flex-wrap: wrap; gap: 8px; margin-top: 24px; position: relative; z-index: 1; }
.feat-tag {
    font-family: 'Space Mono', monospace; font-size: 0.58rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.1em;
    padding: 5px 12px; border: 1px solid var(--border); color: var(--muted);
}
.feat-strip-yellow .feat-tag { border-color: rgba(0,0,0,0.2); color: #333; }

/* ── HOW IT WORKS ── */
.how-section {
    padding: 100px 0;
    background: var(--bg2);
    border-bottom: 2px solid var(--border);
}
.how-grid {
    display: grid; grid-template-columns: repeat(3,1fr);
    gap: 0;
    border: 2px solid var(--border);
    margin-top: 56px;
}
.how-step {
    padding: 44px 36px;
    border-right: 2px solid var(--border);
    position: relative;
    transition: background 0.2s;
}
.how-step:last-child { border-right: none; }
.how-step:hover { background: #1f1f1f; }
.how-step-bar {
    width: 100%; height: 4px;
    margin-bottom: 28px;
}
.how-big-num {
    font-family: 'Boogaloo', cursive;
    font-size: 5.5rem; color: rgba(255,255,255,0.04);
    line-height: 1; position: absolute; top: 24px; right: 24px;
}
.how-icon {
    width: 60px; height: 60px;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.8rem; margin-bottom: 20px;
    border: 2px solid var(--border);
}
.how-h {
    font-family: 'Boogaloo', cursive;
    font-size: 1.4rem; color: var(--white);
    letter-spacing: 0.04em; margin-bottom: 12px;
    text-transform: uppercase;
}
.how-p {
    font-family: 'Space Mono', monospace;
    font-size: 0.72rem; color: var(--muted); line-height: 1.85;
}

/* ── CONTACT ── */
.contact-section {
    padding: 100px 0;
    background: var(--bg);
    border-bottom: 2px solid var(--border);
}
.contact-wrap {
    max-width: 720px; margin: 0 auto;
    background: var(--bg2); border: 2px solid var(--border);
    padding: 52px 48px; position: relative;
}
.contact-wrap::before {
    content: '';
    position: absolute; top: -2px; left: -2px;
    width: 80px; height: 5px;
    background: var(--yellow);
}
.contact-wrap::after {
    content: '';
    position: absolute; bottom: -2px; right: -2px;
    width: 80px; height: 5px;
    background: var(--red);
}
.contact-label {
    display: block;
    font-family: 'Space Mono', monospace;
    font-size: 0.6rem; font-weight: 700;
    color: var(--yellow); text-transform: uppercase; letter-spacing: 0.18em;
    margin-bottom: 8px;
}
.contact-input {
    width: 100%;
    background: var(--card); border: 2px solid var(--border); border-radius: 0;
    color: var(--white);
    font-family: 'Space Mono', monospace; font-size: 0.82rem;
    padding: 13px 16px; outline: none; transition: border-color 0.2s;
}
.contact-input:focus { border-color: var(--yellow); }
.contact-input::placeholder { color: #3a3a3a; }
.btn-submit {
    background: var(--yellow); color: #000;
    font-family: 'Boogaloo', cursive; font-size: 1.15rem;
    letter-spacing: 0.06em; text-transform: uppercase;
    padding: 14px 52px; border: 2px solid var(--yellow); border-radius: 0;
    cursor: pointer; transition: all 0.18s;
}
.btn-submit:hover { background: transparent; color: var(--yellow); box-shadow: 5px 5px 0 var(--yellow); }

/* ── RESPONSIVE ── */
@media (max-width: 1024px) {
    .feat-inner { gap: 44px; }
    .feat-icon-box { width: 110px; height: 110px; font-size: 3.2rem; }
}
@media (max-width: 900px) {
    .how-grid { grid-template-columns: 1fr 1fr; }
    .how-step:nth-child(2) { border-right: none; }
    .how-step:nth-child(3) { border-top: 2px solid var(--border); grid-column: span 2; }
    .stat-strip { grid-template-columns: 1fr 1fr; }
    .stat-item:nth-child(2) { border-right: none; }
    .stat-item:nth-child(3),
    .stat-item:nth-child(4) { border-top: 2px solid var(--border); }
}
@media (max-width: 768px) {
    .hero-layout { grid-template-columns: 1fr; gap: 48px; }
    .arcade-screen { max-width: 400px; }
    .feat-inner, .feat-inner.rev { flex-direction: column; gap: 32px; text-align: center; }
    .feat-icon-box { width: 90px; height: 90px; font-size: 2.8rem; }
    .feat-p { max-width: 100%; }
    .feat-tags { justify-content: center; }
    .contact-wrap { padding: 36px 28px; }
}
@media (max-width: 640px) {
    .hero-section { padding: 80px 0 60px; min-height: auto; }
    .hero-h1 { font-size: clamp(2.6rem, 9vw, 3.5rem); }
    .hero-btns { flex-direction: column; align-items: flex-start; }
    .games-section, .feat-strip, .how-section, .contact-section { padding: 64px 0; }
    .contact-row-2col { grid-template-columns: 1fr !important; }
}
@media (max-width: 480px) {
    .hero-h1 { font-size: clamp(2.2rem, 9.5vw, 3rem); margin-bottom: 18px; }
    .hero-desc { font-size: 0.72rem; }
    .insert-coin { font-size: 0.58rem; margin-bottom: 18px; }
    .stat-num { font-size: 2.4rem; }
    .stat-item { padding: 20px 16px; }
    .feat-icon-box { width: 72px; height: 72px; font-size: 2.2rem; }
    .feat-h { font-size: 1.5rem; }
    .feat-strip { padding: 52px 0; }
    .how-step { padding: 28px 22px; }
    .how-icon { width: 48px; height: 48px; font-size: 1.4rem; }
    .how-h { font-size: 1.1rem; }
    .btn-primary, .btn-secondary { font-size: 0.9rem; padding: 11px 22px; }
    .sec-title { font-size: clamp(1.6rem, 6vw, 2.2rem); }
    .contact-wrap { padding: 28px 18px; }
    .arcade-screen { padding: 18px 16px; }
    .as-score { font-size: 3rem; }
}
@media (max-width: 360px) {
    .hero-h1 { font-size: clamp(1.9rem, 10vw, 2.5rem); }
    .stat-strip { grid-template-columns: 1fr 1fr; }
    .stat-num { font-size: 2rem; }
    .how-grid { grid-template-columns: 1fr; }
    .how-step:nth-child(2) { border-right: none; border-top: 2px solid var(--border); }
    .how-step:nth-child(3) { grid-column: span 1; }
    .btn-primary, .btn-secondary { font-size: 0.82rem; padding: 10px 18px; }
}
</style>


<!-- ══════════ HERO ══════════ -->
<section class="hero-section">
    <div class="container">
        <div class="hero-layout">

            <!-- Left: Text -->
            <div>
                <div class="insert-coin">
                    INSERT COIN
                    <span class="ic-dots">
                        <span class="ic-dot"></span>
                        <span class="ic-dot"></span>
                        <span class="ic-dot"></span>
                    </span>
                </div>

                <h1 class="hero-h1">
                    FREE GAMES.
                    <span class="line-yellow">NO LIMITS.</span>
                    <span class="line-red">PLAY NOW.</span>
                </h1>

                <p class="hero-desc">
                    8BitArenaCo drops 300+ free games straight to your browser. No downloads, no accounts, no waiting. Just hit play and go.
                </p>

                <div class="hero-btns">
                    <a href="#games" class="btn-primary" onclick="event.preventDefault();document.getElementById('games').scrollIntoView({behavior:'smooth'})">▶ ENTER ARENA</a>
                    <a href="#features" class="btn-secondary" onclick="event.preventDefault();document.getElementById('features').scrollIntoView({behavior:'smooth'})">VIEW FEATURES</a>
                </div>

                <div class="hero-tags">
                    <span class="hero-tag">🎮 Action</span>
                    <!-- <span class="hero-tag">🕹 Arcade</span> -->
                    <span class="hero-tag">🧩 Puzzle</span>
                    <span class="hero-tag">🏆 Sports</span>
                    <span class="hero-tag">🧠 Strategy</span>
                    <span class="hero-tag">🗺 Adventure</span>
                </div>
            </div>

            <!-- Right: Arcade Screen Mockup -->
            <div>
                <div class="arcade-screen">
                    <div class="as-header">
                        <span class="as-dot" style="background:var(--red)"></span>
                        <span class="as-dot" style="background:var(--yellow)"></span>
                        <span class="as-dot" style="background:var(--mint)"></span>
                        STAGE SELECT
                    </div>
                    <div class="as-score-lbl">HIGH SCORE</div>
                    <div class="as-score">99,999</div>
                    <div class="as-divider"></div>
                    <div class="as-stat">🎮 &nbsp;300+ GAMES LOADED</div>
                    <div class="as-stat">⚡ &nbsp;ZERO LOAD TIME</div>
                    <div class="as-stat">🚫 &nbsp;NO SIGN-UP NEEDED</div>
                    <div class="as-stat">💰 &nbsp;100% FREE FOREVER</div>
                    <div class="as-stat">📱 &nbsp;ALL DEVICES READY</div>
                    <div class="as-divider"></div>
                    <div class="as-blink">▶ PRESS START</div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ══════════ TICKER ══════════ -->
<div class="ticker-wrap">
    <div class="ticker-track">
        <span>🎮 ACTION &nbsp;★&nbsp; 🕹 ARCADE &nbsp;★&nbsp; 🧩 PUZZLE &nbsp;★&nbsp; 🏆 SPORTS &nbsp;★&nbsp; 🧠 STRATEGY &nbsp;★&nbsp; 🗺 ADVENTURE &nbsp;★&nbsp; 🔥 HOT PICKS &nbsp;★&nbsp; ⚡ INSTANT PLAY &nbsp;★&nbsp; 🎯 FREE FOREVER &nbsp;★&nbsp; 🚀 300+ GAMES &nbsp;★&nbsp;</span>
        <span>🎮 ACTION &nbsp;★&nbsp; 🕹 ARCADE &nbsp;★&nbsp; 🧩 PUZZLE &nbsp;★&nbsp; 🏆 SPORTS &nbsp;★&nbsp; 🧠 STRATEGY &nbsp;★&nbsp; 🗺 ADVENTURE &nbsp;★&nbsp; 🔥 HOT PICKS &nbsp;★&nbsp; ⚡ INSTANT PLAY &nbsp;★&nbsp; 🎯 FREE FOREVER &nbsp;★&nbsp; 🚀 300+ GAMES &nbsp;★&nbsp;</span>
    </div>
</div>


<!-- ══════════ STAT STRIP ══════════ -->
<div class="stat-strip">
    <div class="stat-item">
        <div class="stat-num">300+</div>
        <div class="stat-lbl">Free Games</div>
    </div>
    <div class="stat-item">
        <div class="stat-num red">0s</div>
        <div class="stat-lbl">Load Time</div>
    </div>
    <div class="stat-item">
        <div class="stat-num mint">∞</div>
        <div class="stat-lbl">Free Plays</div>
    </div>
    <div class="stat-item">
        <div class="stat-num" style="font-size:2.2rem;padding-top:4px">ALL<br>DEVICES</div>
        <div class="stat-lbl">Desktop · Mobile · Tablet</div>
    </div>
</div>


<!-- ══════════ GAMES ══════════ -->
<section id="games" class="games-section">
    <div class="container">

        <div style="display:flex;justify-content:space-between;align-items:flex-end;flex-wrap:wrap;gap:20px;margin-bottom:36px">
            <div>
                <div class="sec-label">GAME VAULT</div>
                <h2 class="sec-title">CHOOSE YOUR <span>BATTLE</span></h2>
                <div class="sec-bar"></div>
            </div>
            <p style="font-family:'Space Mono',monospace;font-size:0.7rem;color:var(--muted);max-width:220px;text-align:right;line-height:1.8">New games drop every week. Stay ready.</p>
        </div>

        <!-- Category buttons -->
        <div style="display:flex;flex-wrap:wrap;gap:6px;margin-bottom:40px">
            <button data-category="all"       class="cat-btn active">🎮 All</button>
            <button data-category="popular"   class="cat-btn">🔥 Hot</button>
            <button data-category="action"    class="cat-btn">⚡ Action</button>
            <!-- <button data-category="arcade"    class="cat-btn">🕹 Arcade</button> -->
            <button data-category="strategy"  class="cat-btn">🧠 Strategy</button>
            <button data-category="adventure" class="cat-btn">🗺 Adventure</button>
            <button data-category="puzzle"    class="cat-btn">🧩 Puzzle</button>
            <button data-category="sports"    class="cat-btn">⚽ Sports</button>
        </div>

        <!-- Game grid -->
        <div id="games-grid" style="display:grid;grid-template-columns:repeat(auto-fill,minmax(190px,1fr));gap:12px;margin-bottom:44px">
            <!-- JS rendered -->
        </div>

        <div style="text-align:center">
            <button id="load-more" class="btn-load">LOAD MORE GAMES ↓</button>
        </div>
    </div>
</section>


<!-- ══════════ FEATURES ══════════ -->
<div id="features">

    <!-- Strip 1 — INSTANT PLAY (dark) -->
    <div class="feat-strip">
        <div class="container">
            <div class="feat-inner">
                <div class="feat-icon-box">🚀</div>
                <div>
                    <div class="feat-num">01</div>
                    <div class="feat-eyebrow">01 — Instant Access</div>
                    <h3 class="feat-h">Lightning Fast,<br>No Installs</h3>
                    <p class="feat-p">Every game in the vault launches right in your browser — no download, no app store, no waiting. Click Play and you're in within seconds.</p>
                    <div class="feat-tags">
                        <span class="feat-tag">Browser-Based</span>
                        <span class="feat-tag">No Downloads</span>
                        <span class="feat-tag">Instant Launch</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Strip 2 — FREE FOREVER (YELLOW background) -->
    <div class="feat-strip feat-strip-yellow">
        <div class="container">
            <div class="feat-inner rev">
                <div class="feat-icon-box">🎁</div>
                <div>
                    <div class="feat-num">02</div>
                    <div class="feat-eyebrow">02 — Free Forever</div>
                    <h3 class="feat-h">100% Free.<br>Always. No Catch.</h3>
                    <p class="feat-p">No paywalls. No subscriptions. No premium tiers. Every single game across every category is completely free — zero strings attached.</p>
                    <div class="feat-tags">
                        <span class="feat-tag">No Paywalls</span>
                        <span class="feat-tag">No Subscriptions</span>
                        <span class="feat-tag">Zero Accounts</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Strip 3 — ALL DEVICES (dark) -->
    <div class="feat-strip">
        <div class="container">
            <div class="feat-inner">
                <div class="feat-icon-box">📱</div>
                <div>
                    <div class="feat-num">03</div>
                    <div class="feat-eyebrow">03 — All Devices</div>
                    <h3 class="feat-h">Play on Every<br>Screen. Anywhere.</h3>
                    <p class="feat-p">Desktop, tablet, or phone — 8BitArenaCo is fully optimized for every screen size. Game at home, on the bus, or wherever your battlefield takes you.</p>
                    <div class="feat-tags">
                        <span class="feat-tag">Desktop</span>
                        <span class="feat-tag">Mobile</span>
                        <span class="feat-tag">Tablet</span>
                        <span class="feat-tag">All Browsers</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- ══════════ HOW IT WORKS ══════════ -->
<section id="about" class="how-section">
    <div class="container">
        <div>
            <div class="sec-label">HOW IT WORKS</div>
            <h2 class="sec-title">3 STEPS TO <span>BATTLE</span></h2>
            <div class="sec-bar"></div>
        </div>

        <div class="how-grid">

            <div class="how-step">
                <div class="how-step-bar" style="background:var(--yellow)"></div>
                <div class="how-big-num">01</div>
                <div class="how-icon" style="border-color:var(--yellow);color:var(--yellow)">🎮</div>
                <div class="how-h" style="color:var(--yellow)">Choose a Game</div>
                <p class="how-p">Browse 300+ titles by category or search for your favorite. Action, arcade, puzzle, strategy — it's all here.</p>
            </div>

            <div class="how-step">
                <div class="how-step-bar" style="background:var(--red)"></div>
                <div class="how-big-num">02</div>
                <div class="how-icon" style="border-color:var(--red);color:var(--red)">⚡</div>
                <div class="how-h" style="color:var(--red)">Click & Play</div>
                <p class="how-p">Hit Play and your game loads instantly in the browser. Zero downloads, zero sign-up, zero friction.</p>
            </div>

            <div class="how-step">
                <div class="how-step-bar" style="background:var(--mint)"></div>
                <div class="how-big-num">03</div>
                <div class="how-icon" style="border-color:var(--mint);color:var(--mint)">🏆</div>
                <div class="how-h" style="color:var(--mint)">Dominate & Win</div>
                <p class="how-p">Master the game, climb the scores, and come back for more. New titles every week keep the vault growing.</p>
            </div>

        </div>
    </div>
</section>


<!-- ══════════ CONTACT ══════════ -->
<section id="contact" class="contact-section">
    <div class="container">
        <div style="margin-bottom:52px">
            <div class="sec-label">GET IN TOUCH</div>
            <h2 class="sec-title">CONTACT <span>THE ARENA</span></h2>
            <div class="sec-bar"></div>
            <p style="font-family:'Space Mono',monospace;font-size:0.75rem;color:var(--muted);line-height:1.9;margin-top:18px;max-width:500px">Game requests, bug reports, or anything — we read every message and reply within 24 hours.</p>
        </div>

        <div class="contact-wrap">
            <form style="display:flex;flex-direction:column;gap:20px">
                <div class="contact-row-2col" style="display:grid;grid-template-columns:1fr 1fr;gap:16px">
                    <div>
                        <label class="contact-label">Your Name</label>
                        <input type="text" placeholder="Enter your name…" class="contact-input">
                    </div>
                    <div>
                        <label class="contact-label">Email Address</label>
                        <input type="email" placeholder="you@example.com" class="contact-input">
                    </div>
                </div>
                <div>
                    <label class="contact-label">Subject</label>
                    <input type="text" placeholder="What's on your mind?" class="contact-input">
                </div>
                <div>
                    <label class="contact-label">Message</label>
                    <textarea rows="5" placeholder="Write your message…" class="contact-input" style="resize:vertical;font-family:'Space Mono',monospace"></textarea>
                </div>
                <div>
                    <button type="submit" class="btn-submit">▶ SEND MESSAGE</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>