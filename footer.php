<div id="banner-ad" style="text-align:center;margin:20px 0;height:250px"></div>
<script>googletag.cmd.push(() => { googletag.display("banner-ad"); });</script>

<!-- ══════════ FOOTER ══════════ -->
<footer style="background:var(--bg2);border-top:3px solid var(--yellow);position:relative;overflow:hidden">

    <div class="container" style="padding-top:64px;padding-bottom:0;position:relative;z-index:1">

        <div style="display:grid;grid-template-columns:1.6fr 1fr 1fr;gap:56px;margin-bottom:52px" class="ftr-grid">

            <!-- Brand -->
            <div>
                <a href="<?php echo $ROOT_URL; ?>index.php" style="text-decoration:none;display:inline-flex;align-items:center;gap:10px;margin-bottom:22px">
                    <div style="width:44px;height:44px;background:var(--yellow);color:#000;font-family:'Boogaloo',cursive;font-size:1.7rem;display:flex;align-items:center;justify-content:center;flex-shrink:0">8</div>
                    <div>
                        <div style="font-family:'Boogaloo',cursive;font-size:1.2rem;color:var(--white);letter-spacing:0.04em"><span style="color:var(--yellow)">8BIT</span>ARENA<span style="color:var(--yellow)">CO</span></div>
                        <div style="font-family:'Space Mono',monospace;font-size:0.44rem;color:var(--muted);letter-spacing:0.22em;text-transform:uppercase;margin-top:2px">Free Arcade Arena</div>
                    </div>
                </a>
                <p style="font-family:'Space Mono',monospace;color:var(--muted);font-size:0.75rem;line-height:1.9;max-width:300px;margin-bottom:28px">
                    8BitArenaCo packs 300+ free browser games into one brutalist arena. No accounts, no downloads. Just raw play.
                </p>

                <!-- Socials -->
                <div style="display:flex;gap:8px;margin-bottom:28px">
                    <?php foreach([['f','Facebook'],['𝕏','Twitter'],['▶','YouTube'],['💬','Discord']] as [$icon,$title]): ?>
                    <a href="#" title="<?php echo $title ?>"
                       style="width:38px;height:38px;border:2px solid var(--border);background:var(--card);display:flex;align-items:center;justify-content:center;text-decoration:none;color:var(--muted);font-family:'Space Mono',monospace;font-size:0.78rem;transition:all 0.18s"
                       onmouseover="this.style.borderColor='var(--yellow)';this.style.color='var(--yellow)';this.style.background='rgba(255,229,0,0.08)'"
                       onmouseout="this.style.borderColor='var(--border)';this.style.color='var(--muted)';this.style.background='var(--card)'">
                       <?php echo $icon ?>
                    </a>
                    <?php endforeach; ?>
                </div>

                <!-- Status -->
                <div style="display:inline-flex;align-items:center;gap:8px;background:rgba(0,255,170,0.06);border:2px solid rgba(0,255,170,0.2);padding:8px 16px">
                    <span style="width:7px;height:7px;border-radius:50%;background:var(--mint);animation:ftr-blink 2s infinite;flex-shrink:0"></span>
                    <span style="font-family:'Space Mono',monospace;font-size:0.5rem;font-weight:700;color:var(--mint);letter-spacing:0.15em;text-transform:uppercase">ARENA ONLINE</span>
                </div>
            </div>

            <!-- Navigate -->
            <div>
                <div style="font-family:'Space Mono',monospace;font-size:0.55rem;font-weight:700;letter-spacing:0.14em;color:var(--yellow);margin-bottom:22px;padding-bottom:10px;border-bottom:2px solid var(--yellow);text-transform:uppercase">Navigate</div>
                <ul style="list-style:none;display:flex;flex-direction:column;gap:4px">
                    <?php foreach([
                        ['index.php',          'Home'],
                        ['index.php#games',    'Game Vault'],
                        ['index.php#features', 'Features'],
                        ['index.php#about',    'About'],
                        ['index.php#contact',  'Contact'],
                    ] as [$href,$label]): ?>
                    <li>
                        <a href="<?php echo $ROOT_URL.$href ?>"
                           style="font-family:'Space Mono',monospace;color:var(--muted);font-size:0.72rem;font-weight:700;text-decoration:none;transition:color 0.18s;display:flex;align-items:center;gap:8px;text-transform:uppercase;letter-spacing:0.08em;padding:8px 0;border-bottom:1px solid var(--border)"
                           onmouseover="this.style.color='var(--yellow)'" onmouseout="this.style.color='var(--muted)'">
                            <span style="color:var(--yellow);font-size:0.5rem">►</span><?php echo $label ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Legal -->
            <div>
                <div style="font-family:'Space Mono',monospace;font-size:0.55rem;font-weight:700;letter-spacing:0.14em;color:var(--red);margin-bottom:22px;padding-bottom:10px;border-bottom:2px solid var(--red);text-transform:uppercase">Legal</div>
                <ul style="list-style:none;display:flex;flex-direction:column;gap:4px;margin-bottom:28px">
                    <?php foreach([
                        ['privacy.php',    'Privacy Policy'],
                        ['terms.php',      'Terms of Service'],
                        ['disclaimer.php', 'Disclaimer'],
                    ] as [$href,$label]): ?>
                    <li>
                        <a href="<?php echo $ROOT_URL.$href ?>"
                           style="font-family:'Space Mono',monospace;color:var(--muted);font-size:0.72rem;font-weight:700;text-decoration:none;transition:color 0.18s;display:flex;align-items:center;gap:8px;text-transform:uppercase;letter-spacing:0.08em;padding:8px 0;border-bottom:1px solid var(--border)"
                           onmouseover="this.style.color='var(--red)'" onmouseout="this.style.color='var(--muted)'">
                            <span style="color:var(--red);font-size:0.5rem">►</span><?php echo $label ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <!-- Contact card -->
                <div style="background:var(--card);border:2px solid var(--yellow);padding:16px;position:relative">
                    <div style="position:absolute;top:-2px;left:0;width:32px;height:4px;background:var(--yellow)"></div>
                    <div style="font-family:'Space Mono',monospace;font-size:0.5rem;font-weight:700;color:var(--yellow);letter-spacing:0.12em;text-transform:uppercase;margin-bottom:6px">Support</div>
                    <div style="font-family:'Space Mono',monospace;font-size:0.72rem;color:var(--white);word-break:break-all">support@8bitarenaco.com</div>
                </div>
            </div>

        </div>

        <!-- Bottom bar -->
        <div class="ftr-bottom-bar" style="border-top:2px solid var(--border);padding:20px 0;display:flex;flex-wrap:wrap;justify-content:space-between;align-items:center;gap:10px">
            <p style="font-family:'Space Mono',monospace;font-size:0.62rem;color:var(--muted);letter-spacing:0.08em;text-transform:uppercase">&copy; 2025 8BITARENACO — ALL RIGHTS RESERVED</p>
            <div style="display:flex;gap:20px;flex-wrap:wrap">
                <?php foreach([['privacy.php','Privacy'],['terms.php','Terms'],['disclaimer.php','Disclaimer']] as [$href,$label]): ?>
                <a href="<?php echo $ROOT_URL.$href ?>"
                   style="font-family:'Space Mono',monospace;font-size:0.62rem;color:var(--muted);text-decoration:none;transition:color 0.18s;letter-spacing:0.08em;text-transform:uppercase"
                   onmouseover="this.style.color='var(--yellow)'" onmouseout="this.style.color='var(--muted)'"><?php echo $label ?></a>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</footer>

</div><!-- #page-wrap -->

<style>
    @keyframes ftr-blink { 0%,100%{opacity:1} 50%{opacity:0.3} }
    @media (max-width:900px) { .ftr-grid { grid-template-columns:1fr 1fr !important; gap:36px !important; } }
    @media (max-width:560px) { .ftr-grid { grid-template-columns:1fr !important; gap:28px !important; } }
    @media (max-width:480px) { .ftr-bottom-bar { flex-direction:column; align-items:flex-start !important; gap:12px !important; } }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
    $('#mobile-menu-btn').click(function(){
        $('#mobile-menu').toggleClass('open');
    });
    $('#desktop-search, #mobile-search').on('input', function(){
        searchTerm = $(this).val().toLowerCase();
        if (typeof renderGames === 'function') renderGames();
    });
    $('[data-category]').click(function(){
        $('[data-category]').removeClass('active');
        $(this).addClass('active');
        currentCategory = $(this).data('category');
        displayedGames  = 12;
        if (typeof renderGames === 'function') renderGames();
    });
});
</script>

<script>googletag.cmd.push(() => { googletag.display(anchorSlot); });</script>

<script>
let games = [], displayedGames = 12, currentCategory = 'all', searchTerm = '';

async function loadGames() {
    try {
        const data = await (await fetch(ROOT_URL + 'data.json')).json();
        games = data.map((g, i) => ({
            id:       i + 1,
            title:    g.name.replace(/-/g,' ').replace(/\b\w/g, c => c.toUpperCase()),
            category: g.category.split(',')[0],
            image:    ROOT_URL + g.img,
            rating:   (Math.random()*1.5+3.5).toFixed(1),
            players:  Math.floor(Math.random()*2000+100),
            featured: g.category.includes('popular'),
            isNew:    Math.random() > 0.7,
            url:      ROOT_URL + g.url
        }));
        renderGames();
    } catch(e) { console.error('8BitArenaCo: load error —', e); }
}

function renderGames() {
    const grid = document.getElementById('games-grid');
    if (!grid) return;
    const list = games
        .filter(g => (currentCategory==='all'||g.category===currentCategory) && (!searchTerm||g.title.toLowerCase().includes(searchTerm)))
        .sort((a,b) => b.rating - a.rating)
        .slice(0, displayedGames);

    grid.innerHTML = list.map(g => `
        <div class="game-card" onclick="window.open('${g.url}','_blank')">
            <div style="position:relative;overflow:hidden">
                <img src="${g.image}" alt="${g.title}" class="gc-img">
                <div style="position:absolute;top:8px;left:8px;display:flex;gap:4px">
                    ${g.isNew    ? '<span class="gc-badge-new">NEW</span>'    : ''}
                    ${g.featured ? '<span class="gc-badge-hot">🔥 HOT</span>' : ''}
                </div>
                <div style="position:absolute;top:8px;right:8px;background:rgba(0,0,0,0.75);padding:3px 8px;font-family:'Space Mono',monospace;font-size:0.55rem;font-weight:700;color:#fff">★ ${g.rating}</div>
            </div>
            <div style="padding:12px 12px 0">
                <h3 style="font-family:'Boogaloo',cursive;font-size:0.95rem;color:var(--white);margin-bottom:4px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;letter-spacing:0.04em;text-transform:uppercase">${g.title}</h3>
                <p style="font-family:'Space Mono',monospace;font-size:0.55rem;color:var(--muted);margin-bottom:8px;text-transform:uppercase;letter-spacing:0.06em">${g.players.toLocaleString()} plays</p>
            </div>
            <button class="gc-play">▶ PLAY NOW</button>
        </div>
    `).join('');
}

document.addEventListener('DOMContentLoaded', () => {
    loadGames();
    document.getElementById('load-more')?.addEventListener('click', () => { displayedGames += 8; renderGames(); });
});
</script>
</body>
</html>