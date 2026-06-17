<?php
$ROOT_URL = (str_contains($_SERVER['SERVER_NAME'], "localhost")) ? "http://localhost/8bitarenaco/" : "https://" . $_SERVER['SERVER_NAME'] . "/";
$primary_id = 0;
if (isset($_REQUEST['id'])) { $primary_id = $_REQUEST['id']; }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8BitArenaCo — Play Hard. Go Free. Level Up.</title>
    <meta name="description" content="8BitArenaCo: 300+ free online games, zero downloads, zero sign-up. Enter the arena and battle your way to the top.">
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='80'>🕹</text></svg>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Boogaloo&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'a-bg':     '#111111',
                        'a-bg2':   '#1a1a1a',
                        'a-card':  '#1c1c1c',
                        'a-yellow':'#FFE500',
                        'a-red':   '#FF3300',
                        'a-mint':  '#00FFAA',
                        'a-white': '#FFFFFF',
                        'a-muted': '#888888',
                        'a-border':'#2a2a2a',
                    },
                    fontFamily: {
                        'boog': ['Boogaloo', 'cursive'],
                        'mono': ['"Space Mono"', 'monospace'],
                    }
                }
            }
        }
    </script>
    <script>
        var ROOT_URL   = "<?php echo $ROOT_URL; ?>";
        var PRIMARY_ID = '<?php echo $primary_id; ?>';
    </script>
    <script>
        window.googletag = window.googletag || { cmd: [] };
        googletag.cmd.push(() => {
            googletag.defineSlot("/22583435288/display_1",[[970,90],[728,90],[300,250]],"banner-ad").addService(googletag.pubads());
            googletag.enableServices();
        });
        let anchorSlot;
        googletag.cmd.push(() => {
            anchorSlot = googletag.defineOutOfPageSlot("/22583435288/ancher_1",
                document.body.clientWidth<=500
                    ? googletag.enums.OutOfPageFormat.BOTTOM_ANCHOR
                    : googletag.enums.OutOfPageFormat.BOTTOM_ANCHOR);
            if (anchorSlot) anchorSlot.addService(googletag.pubads());
            googletag.pubads().enableSingleRequest();
            googletag.enableServices();
        });
    </script>

    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --bg:     #111111;
            --bg2:    #1a1a1a;
            --card:   #1c1c1c;
            --yellow: #FFE500;
            --red:    #FF3300;
            --mint:   #00FFAA;
            --white:  #FFFFFF;
            --muted:  #777777;
            --border: #2a2a2a;
        }

        html { scroll-behavior: smooth; }

        body {
            background-color: var(--bg);
            color: var(--white);
            font-family: 'Space Mono', monospace;
            min-height: 100vh;
            overflow-x: hidden;
        }

        .container { max-width: 1280px; margin: 0 auto; padding: 0 24px; width: 100%; }

        /* ── BUTTONS ── */
        .btn-primary {
            display: inline-flex; align-items: center; gap: 8px;
            background: var(--yellow); color: #000;
            font-family: 'Boogaloo', cursive;
            font-size: 1.05rem; letter-spacing: 0.06em; text-transform: uppercase;
            padding: 13px 32px; border: 2px solid var(--yellow); border-radius: 0;
            cursor: pointer; transition: all 0.18s; text-decoration: none;
            white-space: nowrap;
        }
        .btn-primary:hover { background: var(--red); border-color: var(--red); color: #fff; box-shadow: 4px 4px 0 rgba(255,255,255,0.15); }

        .btn-secondary {
            display: inline-flex; align-items: center; gap: 8px;
            background: transparent; color: var(--yellow);
            font-family: 'Boogaloo', cursive;
            font-size: 1.05rem; letter-spacing: 0.06em; text-transform: uppercase;
            padding: 13px 32px; border: 2px solid var(--yellow); border-radius: 0;
            cursor: pointer; transition: all 0.18s; text-decoration: none;
            white-space: nowrap;
        }
        .btn-secondary:hover { background: var(--yellow); color: #000; box-shadow: 4px 4px 0 rgba(255,229,0,0.3); }

        /* ── NAV ── */
        .site-nav {
            position: sticky; top: 0; z-index: 100;
            background: var(--bg);
            border-bottom: 3px solid var(--yellow);
        }

        .logo-icon {
            width: 42px; height: 42px;
            background: var(--yellow); color: #000;
            font-family: 'Boogaloo', cursive; font-size: 1.6rem;
            display: flex; align-items: center; justify-content: center;
            flex-shrink: 0; font-weight: 400;
        }
        .logo-text-main {
            font-family: 'Boogaloo', cursive;
            font-size: 1.2rem; letter-spacing: 0.04em;
            color: var(--white); line-height: 1;
        }
        .logo-text-main .yel { color: var(--yellow); }
        .logo-sub {
            font-family: 'Space Mono', monospace;
            font-size: 0.44rem; color: var(--muted);
            letter-spacing: 0.22em; text-transform: uppercase; margin-top: 2px;
        }

        .nav-link {
            font-family: 'Space Mono', monospace;
            font-size: 0.72rem; font-weight: 700;
            color: var(--muted); text-transform: uppercase;
            letter-spacing: 0.1em; text-decoration: none;
            padding: 6px 12px;
            border-bottom: 2px solid transparent;
            transition: all 0.18s;
        }
        .nav-link:hover { color: var(--yellow); border-bottom-color: var(--yellow); }

        .search-wrap { position: relative; }
        .search-bar {
            background: var(--card); border: 2px solid var(--border);
            border-radius: 0; color: var(--white);
            font-family: 'Space Mono', monospace; font-size: 0.72rem;
            padding: 8px 14px 8px 36px; width: 180px; outline: none;
            transition: border-color 0.2s;
        }
        .search-bar::placeholder { color: #444; }
        .search-bar:focus { border-color: var(--yellow); width: 210px; }
        .search-icon { position:absolute; left:12px; top:50%; transform:translateY(-50%); color:#555; font-size:0.75rem; }

        .btn-nav {
            background: var(--yellow); color: #000;
            font-family: 'Boogaloo', cursive; font-size: 0.95rem;
            letter-spacing: 0.06em; text-transform: uppercase;
            padding: 9px 20px; border: 2px solid var(--yellow);
            border-radius: 0; cursor: pointer; transition: all 0.18s; white-space: nowrap;
        }
        .btn-nav:hover { background: var(--red); border-color: var(--red); color: #fff; }

        #mobile-menu { display: none; }
        #mobile-menu.open { display: block; }

        /* ── MOBILE NAV ── */
        @media (max-width: 640px) {
            .search-bar:focus { width: 100%; }
        }
        @media (max-width: 480px) {
            .logo-text-main { font-size: 1.05rem; }
            .logo-sub { display: none; }
            .btn-nav { font-size: 0.82rem; padding: 8px 14px; }
        }
        @media (max-width: 360px) {
            .logo-icon { width: 34px; height: 34px; font-size: 1.3rem; }
            .logo-text-main { font-size: 0.9rem; }
            .btn-nav { font-size: 0.75rem; padding: 7px 10px; }
            .container { padding: 0 14px; }
        }
        @media (max-width: 320px) {
            .logo-icon { width: 28px; height: 28px; font-size: 1.1rem; }
            .logo-text-main { font-size: 0.78rem; }
            .btn-nav { font-size: 0.68rem; padding: 6px 8px; }
        }
    </style>
</head>
<body>

<!-- NAV -->
<nav class="site-nav">
    <div class="container">
        <div class="flex justify-between items-center" style="height:68px">

            <a href="<?php echo $ROOT_URL; ?>index.php" style="display:flex;align-items:center;gap:10px;text-decoration:none">
                <div class="logo-icon">8</div>
                <div>
                    <div class="logo-text-main"><span class="yel">8BIT</span>ARENA<span class="yel">CO</span></div>
                    <div class="logo-sub">Free Arcade Arena</div>
                </div>
            </a>

            <div class="hidden md:flex items-center gap-1">
                <a href="<?php echo $ROOT_URL; ?>index.php"          class="nav-link">Home</a>
                <a href="<?php echo $ROOT_URL; ?>index.php#games"    class="nav-link">Games</a>
                <a href="<?php echo $ROOT_URL; ?>index.php#features" class="nav-link">Features</a>
                <a href="<?php echo $ROOT_URL; ?>index.php#contact"  class="nav-link">Contact</a>
            </div>

            <div class="flex items-center gap-2">
                <div class="search-wrap hidden lg:block">
                    <span class="search-icon">🔍</span>
                    <input type="text" id="desktop-search" placeholder="Search games…" class="search-bar">
                </div>
                <button class="btn-nav" onclick="document.getElementById('games').scrollIntoView({behavior:'smooth'})">▶ PLAY FREE</button>
                <button id="mobile-menu-btn" class="md:hidden" style="background:none;border:2px solid var(--yellow);padding:7px 9px;cursor:pointer;color:var(--yellow);line-height:0;flex-shrink:0">
                    <svg width="18" height="18" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu" style="border-top:2px solid var(--yellow);padding:18px 0;background:var(--bg)">
            <div style="display:flex;flex-direction:column;gap:0;margin-bottom:14px">
                <a href="<?php echo $ROOT_URL; ?>index.php"          class="nav-link" style="padding:11px 0;border-bottom:1px solid var(--border)">Home</a>
                <a href="<?php echo $ROOT_URL; ?>index.php#games"    class="nav-link" style="padding:11px 0;border-bottom:1px solid var(--border)">Games</a>
                <a href="<?php echo $ROOT_URL; ?>index.php#features" class="nav-link" style="padding:11px 0;border-bottom:1px solid var(--border)">Features</a>
                <a href="<?php echo $ROOT_URL; ?>index.php#contact"  class="nav-link" style="padding:11px 0">Contact</a>
            </div>
            <div class="search-wrap">
                <span class="search-icon">🔍</span>
                <input type="text" id="mobile-search" placeholder="Search games…" class="search-bar" style="width:100%">
            </div>
        </div>
    </div>
</nav>

<div id="page-wrap">