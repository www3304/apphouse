<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
<meta name="description" content="App House — software development, social media management, and gamified growth. Where ranking meets conversion. Offices in Kuala Lumpur, Singapore & Hong Kong." />
<title>App House — Where Ranking Meets Conversion</title>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400;12..96,500;12..96,600;12..96,700;12..96,800&family=JetBrains+Mono:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
<style>
/* ============================================================
   APP HOUSE — Redesign
   Design language: premium dark + warm "reward" gold,
   gamified-tech energy, glassmorphism, big type.
   ============================================================ */

:root{
  /* base */
  --bg:#faf7f2;
  --bg-2:#f3efe7;
  --bg-3:#efe9df;
  --surface:#ffffff;
  --surface-2:#f7f3ec;
  --surface-3:#efe9df;
  --line:rgba(28,22,12,.09);
  --line-2:rgba(28,22,12,.16);

  /* text */
  --tx:#1c1710;
  --tx-2:#5e574b;
  --tx-3:#8c8576;

  /* brand (Updated to Logo Blue) */
  --gold: #1f85c1;       /* Primary Logo Blue */
  --gold-2: #5ab6e6;     /* Lighter Logo Blue (Roof) */
  --amber: #156394;      /* Darker Logo Blue for depth */
  --mint: #0ea892;       
  --mint-2: #16c2a6;
  --blue: #3f6ef0;

  --grad-gold: linear-gradient(135deg, #5ab6e6 0%, #1f85c1 42%, #156394 100%);
  --glow-gold: 0 0 0 1px rgba(31, 133, 193, .18), 0 18px 50px -16px rgba(21, 99, 148, .28);

  /* type */
  --display:'Bricolage Grotesque',sans-serif;
  --body:'Plus Jakarta Sans',sans-serif;
  --mono:'JetBrains Mono',monospace;

  /* layout */
  --maxw:1240px;
  --gut:clamp(20px,5vw,40px);
  --radius:20px;
  --radius-lg:28px;
  --radius-sm:12px;
  --ease:cubic-bezier(.22,.61,.36,1);
}

*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth;-webkit-text-size-adjust:100%}
@media (prefers-reduced-motion:reduce){html{scroll-behavior:auto}}

body{
  font-family:var(--body);
  background:var(--bg);
  color:var(--tx);
  line-height:1.65;
  -webkit-font-smoothing:antialiased;
  text-rendering:optimizeLegibility;
  overflow-x:hidden;
}
body.no-scroll{overflow:hidden}

img{max-width:100%;display:block}
a{color:inherit;text-decoration:none}
button{font-family:inherit;cursor:pointer;border:none;background:none;color:inherit}
ul{list-style:none}

::selection{background:var(--gold);color:#fff}

/* scrollbar */
::-webkit-scrollbar{width:11px;height:11px}
::-webkit-scrollbar-track{background:var(--bg-2)}
::-webkit-scrollbar-thumb{background:#d9d2c5;border-radius:20px;border:3px solid var(--bg-2)}
::-webkit-scrollbar-thumb:hover{background:#c2baa9}

/* ---------- atmosphere / background ---------- */
.bg-atmos{position:fixed;inset:0;z-index:-2;overflow:hidden;pointer-events:none}
.bg-atmos .blob{position:absolute;border-radius:50%;filter:blur(90px);opacity:.32}
.bg-atmos .b1{width:46vw;height:46vw;top:-12vw;right:-8vw;background:radial-gradient(circle,rgba(31,133,193,.35),transparent 65%)}
.bg-atmos .b2{width:40vw;height:40vw;top:38vh;left:-14vw;background:radial-gradient(circle,rgba(20,194,166,.4),transparent 65%)}
.bg-atmos .b3{width:48vw;height:48vw;bottom:-16vw;right:-6vw;background:radial-gradient(circle,rgba(63,110,240,.28),transparent 65%)}
.bg-grid{position:fixed;inset:0;z-index:-2;pointer-events:none;
  background-image:linear-gradient(rgba(28,22,12,.045) 1px,transparent 1px),linear-gradient(90deg,rgba(28,22,12,.045) 1px,transparent 1px);
  background-size:64px 64px;
  -webkit-mask-image:radial-gradient(ellipse 90% 70% at 50% 0%,#000 35%,transparent 75%);
          mask-image:radial-gradient(ellipse 90% 70% at 50% 0%,#000 35%,transparent 75%);
}
.bg-noise{position:fixed;inset:0;z-index:-1;pointer-events:none;opacity:.05;mix-blend-mode:multiply;
  background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='160' height='160'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.85' numOctaves='3'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");
}

/* ---------- shared layout ---------- */
.wrap{max-width:var(--maxw);margin:0 auto;padding-inline:var(--gut)}
section{position:relative}
.section-pad{padding-block:clamp(72px,11vw,140px)}

.eyebrow{
  font-family:var(--mono);font-size:.74rem;font-weight:500;letter-spacing:.22em;
  text-transform:uppercase;color:var(--gold);display:inline-flex;align-items:center;gap:.6em;
}
.eyebrow::before{content:"";width:26px;height:1px;background:var(--gold);opacity:.7}
.eyebrow.center{justify-content:center}
.eyebrow.center::after{content:"";width:26px;height:1px;background:var(--gold);opacity:.7}

h1,h2,h3,h4{font-family:var(--display);font-weight:700;line-height:1.05;letter-spacing:-.02em}
.h-sec{font-size:clamp(2rem,4.6vw,3.5rem);font-weight:700;letter-spacing:-.03em;margin-top:.5rem}
.lead{color:var(--tx-2);font-size:clamp(1rem,1.4vw,1.15rem);max-width:56ch}
.sec-head{margin-bottom:clamp(40px,6vw,68px)}
.sec-head.center{text-align:center;display:flex;flex-direction:column;align-items:center}
.sec-head.center .lead{margin-inline:auto}

.text-grad{background:var(--grad-gold);-webkit-background-clip:text;background-clip:text;color:transparent}
.text-mint{background:var(--grad-mint);-webkit-background-clip:text;background-clip:text;color:transparent}

/* ---------- buttons ---------- */
.btn{display:inline-flex;align-items:center;gap:.6em;font-family:var(--body);font-weight:600;
  font-size:.95rem;padding:.95em 1.6em;border-radius:100px;transition:.35s var(--ease);
  white-space:nowrap;position:relative;line-height:1}
.btn svg{width:1.05em;height:1.05em;transition:transform .35s var(--ease)}
.btn-primary{background:var(--grad-gold);color:#1c1300;box-shadow:0 10px 30px -8px rgba(255,138,30,.5)}
.btn-primary:hover{transform:translateY(-3px);box-shadow:0 18px 40px -8px rgba(255,138,30,.65)}
.btn-primary:hover svg{transform:translateX(4px)}
.btn-ghost{background:rgba(28,22,12,.04);color:var(--tx);border:1px solid var(--line-2);backdrop-filter:blur(8px)}
.btn-ghost:hover{background:rgba(28,22,12,.07);border-color:rgba(28,22,12,.28);transform:translateY(-3px)}
.btn-lg{padding:1.1em 2em;font-size:1.02rem}

.link-arrow{display:inline-flex;align-items:center;gap:.45em;font-weight:600;font-size:.92rem;color:var(--gold);transition:gap .3s var(--ease)}
.link-arrow svg{width:1em;height:1em;transition:transform .3s var(--ease)}
.link-arrow:hover{gap:.75em}
.link-arrow:hover svg{transform:translateX(3px)}

/* ---------- reveal animation ---------- */
.reveal{opacity:0;transform:translateY(28px);transition:opacity .8s var(--ease),transform .8s var(--ease)}
.reveal.in{opacity:1;transform:none}
.reveal[data-d="1"]{transition-delay:.08s}
.reveal[data-d="2"]{transition-delay:.16s}
.reveal[data-d="3"]{transition-delay:.24s}
.reveal[data-d="4"]{transition-delay:.32s}
.reveal[data-d="5"]{transition-delay:.40s}
@media (prefers-reduced-motion:reduce){.reveal{opacity:1;transform:none;transition:none}}

/* ============================================================
   HEADER / NAV
   ============================================================ */
.header{position:fixed;top:0;left:0;right:0;z-index:100;transition:.4s var(--ease);padding-block:18px}
.header.scrolled{padding-block:10px;background:rgba(255,255,255,.78);backdrop-filter:blur(18px) saturate(1.4);border-bottom:1px solid var(--line);box-shadow:0 8px 30px -16px rgba(28,22,12,.25)}
.nav{max-width:var(--maxw);margin:0 auto;padding-inline:var(--gut);display:flex;align-items:center;gap:24px}

.logo{display:flex;align-items:center;gap:11px;font-family:var(--display);font-weight:700;font-size:1.32rem;letter-spacing:-.02em;z-index:2}
.logo-mark{width:38px;height:38px;border-radius:11px;background:var(--grad-gold);display:grid;place-items:center;flex:none;position:relative;box-shadow:0 6px 18px -6px rgba(255,138,30,.6)}
.logo-mark svg{width:21px;height:21px;color:#1c1300}
.logo span{color:var(--tx)}
.logo b{color:var(--gold);font-weight:700}

.nav-menu{display:flex;align-items:center;gap:4px;margin-left:auto}
.nav-link{position:relative;padding:9px 15px;font-size:.92rem;font-weight:500;color:var(--tx-2);border-radius:10px;transition:.25s var(--ease)}
.nav-link:hover{color:var(--tx);background:rgba(28,22,12,.05)}
.nav-link.has-drop{display:inline-flex;align-items:center;gap:5px}
.nav-link.has-drop svg{width:14px;height:14px;transition:transform .3s var(--ease)}

.nav-item{position:relative}
.nav-item .dropdown{position:absolute;top:calc(100% + 12px);left:50%;transform:translateX(-50%) translateY(8px);
  background:rgba(255,255,255,.98);backdrop-filter:blur(20px);border:1px solid var(--line-2);border-radius:16px;
  padding:8px;min-width:210px;opacity:0;visibility:hidden;transition:.3s var(--ease);box-shadow:0 24px 60px -16px rgba(28,22,12,.22)}
.nav-item:hover .dropdown{opacity:1;visibility:visible;transform:translateX(-50%) translateY(0)}
.nav-item:hover .has-drop svg{transform:rotate(180deg)}
.dropdown a{display:block;padding:11px 14px;font-size:.9rem;color:var(--tx-2);border-radius:10px;transition:.22s var(--ease)}
.dropdown a:hover{background:rgba(207,122,8,.1);color:var(--gold);padding-left:18px}

.nav-right{display:flex;align-items:center;gap:14px;z-index:2}
.lang-toggle{display:flex;align-items:center;background:rgba(28,22,12,.05);border:1px solid var(--line);border-radius:100px;padding:3px;font-family:var(--mono);font-size:.74rem;font-weight:600}
.lang-toggle button{padding:5px 11px;border-radius:100px;color:var(--tx-3);transition:.25s var(--ease)}
.lang-toggle button.active{background:var(--grad-gold);color:#1c1300}

.burger{display:none;width:42px;height:42px;border-radius:11px;background:rgba(28,22,12,.04);border:1px solid var(--line-2);position:relative;flex:none}
.burger span{position:absolute;left:11px;width:20px;height:2px;background:var(--tx);border-radius:2px;transition:.35s var(--ease)}
.burger span:nth-child(1){top:14px}
.burger span:nth-child(2){top:20px}
.burger span:nth-child(3){top:26px}
.burger.open span:nth-child(1){top:20px;transform:rotate(45deg)}
.burger.open span:nth-child(2){opacity:0}
.burger.open span:nth-child(3){top:20px;transform:rotate(-45deg)}

/* mobile drawer */
.drawer{position:fixed;inset:0;z-index:99;background:rgba(255,255,255,.98);backdrop-filter:blur(24px);
  display:flex;flex-direction:column;justify-content:center;padding:80px var(--gut) 40px;
  opacity:0;visibility:hidden;transform:translateY(-12px);transition:.45s var(--ease)}
.drawer.open{opacity:1;visibility:visible;transform:none}
.drawer-links{display:flex;flex-direction:column;gap:6px}
.drawer-links>a,.drawer-sub>summary{font-family:var(--display);font-size:1.0rem;font-weight:600;color:var(--tx);padding:11px 0;display:flex;align-items:center;gap:12px;transition:.25s var(--ease);border-bottom:1px solid var(--line)}
.drawer-links>a:hover,.drawer-sub>summary:hover{color:var(--gold);padding-left:8px}
.drawer-num{font-family:var(--mono);font-size:0.6rem;color:var(--gold);font-weight:500;opacity:.8}
.drawer-sub{border-bottom:1px solid var(--line)}
.drawer-sub summary{list-style:none;cursor:pointer;border-bottom:none}
.drawer-sub summary::-webkit-details-marker{display:none}
.drawer-sub summary .chev{margin-left:auto;width:18px;height:18px;transition:transform .3s var(--ease)}
.drawer-sub[open] summary .chev{transform:rotate(180deg)}
.drawer-sub .sub-links{padding:4px 0 14px 28px;display:flex;flex-direction:column;gap:10px}
.drawer-sub .sub-links a{color:var(--tx-2);font-size:0.8rem;font-weight:500}
.drawer-sub .sub-links a:hover{color:var(--gold)}
.drawer-foot{margin-top:32px;display:flex;flex-direction:column;gap:18px}
.drawer-foot .btn{justify-content:center}

/* ============================================================
   HERO
   ============================================================ */
.hero{min-height:100svh;display:flex;align-items:center;padding-top:120px;padding-bottom:60px;position:relative;overflow:hidden}
.hero-inner{display:grid;grid-template-columns:1.05fr .95fr;gap:clamp(30px,5vw,72px);align-items:center;width:100%}

.hero-badge{display:inline-flex;align-items:center;gap:9px;padding:7px 15px 7px 9px;border-radius:100px;
  background:rgba(28,22,12,.04);border:1px solid var(--line-2);font-size:.8rem;color:var(--tx-2);font-weight:500;margin-bottom:26px}
.hero-badge .dot{width:7px;height:7px;border-radius:50%;background:var(--mint);box-shadow:0 0 0 4px rgba(56,230,196,.18);animation:pulse 2.2s infinite}
@keyframes pulse{0%,100%{box-shadow:0 0 0 4px rgba(56,230,196,.18)}50%{box-shadow:0 0 0 7px rgba(56,230,196,.05)}}

/* sliding headline */
.hero-slides{position:relative;min-height:clamp(180px,26vw,300px)}
.hero-slide{position:absolute;inset:0;opacity:0;transform:translateY(22px);transition:opacity .7s var(--ease),transform .7s var(--ease);pointer-events:none}
.hero-slide.active{opacity:1;transform:none;pointer-events:auto;position:relative}
.hero-kick{font-family:var(--mono);font-size:.82rem;letter-spacing:.16em;text-transform:uppercase;color:var(--mint);font-weight:500;display:block;margin-bottom:18px}
.hero h1{font-size:clamp(2.6rem,6.4vw,5rem);font-weight:800;letter-spacing:-.035em;margin-bottom:20px}
.hero h1 em{font-style:normal;background:var(--grad-gold);-webkit-background-clip:text;background-clip:text;color:transparent}
.hero-sub{color:var(--tx-2);font-size:clamp(1rem,1.5vw,1.2rem);max-width:46ch;margin-bottom:34px}

.hero-cta{display:flex;flex-wrap:wrap;gap:14px;align-items:center}
.hero-dots{display:flex;gap:9px;margin-top:38px}
.hero-dots button{width:30px;height:4px;border-radius:4px;background:rgba(28,22,12,.14);transition:.4s var(--ease);padding:0}
.hero-dots button.active{width:46px;background:var(--grad-gold)}

.hero-stats{display:flex;gap:clamp(18px,3vw,40px);margin-top:clamp(40px,6vw,64px);flex-wrap:wrap}
.hstat .n{font-family:var(--display);font-weight:700;font-size:clamp(1.6rem,3vw,2.3rem);letter-spacing:-.02em;line-height:1}
.hstat .l{font-size:.82rem;color:var(--tx-3);margin-top:6px;font-weight:500}
.hstat{position:relative;padding-right:clamp(18px,3vw,40px)}
.hstat:not(:last-child)::after{content:"";position:absolute;right:0;top:6px;bottom:6px;width:1px;background:var(--line)}

/* hero visual — gamified reward orb */
.hero-visual{position:relative;display:grid;place-items:center;min-height:440px}
.orb{position:relative;width:min(360px,80%);aspect-ratio:1;border-radius:50%;
  background:radial-gradient(circle at 35% 30%,rgba(90,182,230,.9),rgba(31,133,193,.85) 45%,#0d4970 100%);
  box-shadow:0 0 80px -10px rgba(31,133,193,.6),inset 0 -20px 60px rgba(13,73,112,.5),inset 0 14px 40px rgba(255,255,255,.35);
  animation:float 6s ease-in-out infinite}
.orb::before{content:"";position:absolute;inset:14%;border-radius:50%;border:2px dashed rgba(255,255,255,.25)}
.orb-coin{position:absolute;inset:0;margin:auto;width:42%;height:42%;border-radius:50%;
  background:radial-gradient(circle at 38% 32%,#e0f2fe,#7dd3fc 55%,#0284c7);
  display:grid;place-items:center;box-shadow:inset 0 -6px 14px rgba(2,132,199,.5),inset 0 5px 10px rgba(255,255,255,.7),0 10px 24px rgba(0,0,0,.3)}
.orb-coin svg{width:46%;height:46%;color:#0c4a6e}

.ring{position:absolute;border-radius:50%;border:1px solid rgba(28,22,12,.12)}
.ring.r1{width:115%;height:115%;animation:spin 26s linear infinite}
.ring.r2{width:138%;height:138%;border-style:dashed;border-color:rgba(56,230,196,.25);animation:spin 40s linear infinite reverse}
.ring .pip{position:absolute;top:-5px;left:50%;width:10px;height:10px;border-radius:50%;background:var(--mint);transform:translateX(-50%);box-shadow:0 0 12px var(--mint)}
.ring.r1 .pip2{top:auto;bottom:-5px;background:var(--gold);box-shadow:0 0 12px var(--gold)}

@keyframes spin{to{transform:rotate(360deg)}}
@keyframes float{0%,100%{transform:translateY(0)}50%{transform:translateY(-16px)}}

/* floating glass cards on hero */
.float-card{position:absolute;background:rgba(255,255,255,.82);backdrop-filter:blur(16px);border:1px solid var(--line-2);
  border-radius:16px;padding:14px 16px;box-shadow:0 20px 50px -18px rgba(28,22,12,.3);animation:float 5s ease-in-out infinite}
.float-card .fc-icon{width:34px;height:34px;border-radius:10px;display:grid;place-items:center;flex:none}
.float-card .fc-icon svg{width:17px;height:17px}
.fc-top{top:8%;left:-4%;display:flex;align-items:center;gap:11px;animation-delay:.6s}
.fc-top .fc-icon{background:rgba(56,230,196,.16);color:var(--mint)}
.fc-bottom{bottom:6%;right:-6%;animation-delay:1.4s}
.float-card .fc-label{font-size:.7rem;color:var(--tx-3);font-weight:500}
.float-card .fc-val{font-family:var(--display);font-weight:700;font-size:1.18rem;line-height:1.1}
.fc-bottom .bars{display:flex;align-items:flex-end;gap:3px;height:26px;margin-top:8px}
.fc-bottom .bars i{width:6px;border-radius:2px;background:var(--grad-gold);display:block}

/* scroll cue */
.scroll-cue{position:absolute;bottom:26px;left:50%;transform:translateX(-50%);display:flex;flex-direction:column;align-items:center;gap:9px;color:var(--tx-3);font-size:.72rem;font-family:var(--mono);letter-spacing:.18em;text-transform:uppercase}
.scroll-cue .mouse{width:22px;height:34px;border:1.5px solid var(--line-2);border-radius:12px;position:relative}
.scroll-cue .mouse::after{content:"";position:absolute;top:6px;left:50%;width:3px;height:7px;background:var(--gold);border-radius:3px;transform:translateX(-50%);animation:wheel 1.6s infinite}
@keyframes wheel{0%{opacity:0;transform:translate(-50%,0)}40%{opacity:1}80%{opacity:0;transform:translate(-50%,10px)}}

/* ============================================================
   INTRO
   ============================================================ */
.intro-inner{display:grid;grid-template-columns:1fr 1fr;gap:clamp(36px,6vw,80px);align-items:center}
.intro h2{font-size:clamp(2rem,4.4vw,3.4rem);font-weight:700;letter-spacing:-.03em}
.intro .rotator{display:inline-block;min-height:1.1em}
.intro .rotate-word{background:var(--grad-gold);-webkit-background-clip:text;background-clip:text;color:transparent}
.intro p{color:var(--tx-2);margin-top:22px;font-size:1.06rem}
.intro-figure{position:relative;aspect-ratio:5/4;border-radius:var(--radius-lg);overflow:hidden;
  background:url('uploads/about.jpg') center/cover no-repeat;border:1px solid var(--line)}
.intro-figure .gmesh{position:absolute;inset:0;background:
  radial-gradient(circle at 22% 28%,rgba(255,138,30,.4),transparent 45%),
  radial-gradient(circle at 78% 72%,rgba(56,230,196,.3),transparent 45%)}
.intro-figure .badge-float{position:absolute;background:rgba(255,255,255,.8);backdrop-filter:blur(10px);border:1px solid var(--line-2);border-radius:14px;padding:12px 15px;box-shadow:0 12px 30px -16px rgba(28,22,12,.25)}
.intro-figure .bf1{top:18px;left:18px;font-family:var(--mono);font-size:.78rem;color:var(--mint)}
.intro-figure .bf2{bottom:18px;right:18px}
.intro-figure .bf2 .v{font-family:var(--display);font-weight:700;font-size:1.5rem}
.intro-figure .bf2 .l{font-size:.72rem;color:var(--tx-3)}
.platform-pills{display:flex;flex-wrap:wrap;gap:10px;margin-top:28px}
.platform-pills span{display:inline-flex;align-items:center;gap:7px;padding:8px 14px;border-radius:100px;background:var(--surface);border:1px solid var(--line);font-size:.84rem;color:var(--tx-2);font-weight:500}
.platform-pills span .d{width:7px;height:7px;border-radius:50%}

/* ============================================================
   SERVICES
   ============================================================ */
.svc-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:18px}
.svc-card{position:relative;background:var(--surface);border:1px solid var(--line);border-radius:var(--radius-lg);
  padding:clamp(26px,3vw,38px);overflow:hidden;transition:.4s var(--ease)}
.svc-card::before{content:"";position:absolute;inset:0;background:radial-gradient(circle at 50% 0%,rgba(255,185,56,.1),transparent 60%);opacity:0;transition:.4s var(--ease)}
.svc-card:hover{transform:translateY(-6px);border-color:var(--line-2);background:var(--surface-2)}
.svc-card:hover::before{opacity:1}
.svc-num{position:absolute;top:24px;right:28px;font-family:var(--display);font-weight:700;font-size:2.6rem;color:transparent;-webkit-text-stroke:1px rgba(28,22,12,.12);transition:.4s var(--ease)}
.svc-card:hover .svc-num{-webkit-text-stroke-color:rgba(255,185,56,.3)}
.svc-ico{width:58px;height:58px;border-radius:16px;background:rgba(255,185,56,.1);border:1px solid rgba(255,185,56,.2);display:grid;place-items:center;margin-bottom:22px;transition:.4s var(--ease)}
.svc-ico svg{width:27px;height:27px;color:var(--gold)}
.svc-card:hover .svc-ico{background:var(--grad-gold);transform:rotate(-6deg) scale(1.05)}
.svc-card:hover .svc-ico svg{color:#1c1300}
.svc-card h3{font-size:1.32rem;margin-bottom:12px;letter-spacing:-.01em}
.svc-card p{color:var(--tx-2);font-size:.96rem;margin-bottom:22px}
.svc-foot{margin-top:auto}

/* ============================================================
   CHAMPION + STATS
   ============================================================ */
.champ{position:relative;overflow:hidden}
.champ-inner{display:grid;grid-template-columns:1fr 1fr;gap:clamp(36px,6vw,80px);align-items:center}
.champ h2{font-size:clamp(2.4rem,5.4vw,4.2rem);font-weight:800;letter-spacing:-.03em;line-height:.98}
.champ h2 .text-grad{display:block}
.champ p{color:var(--tx-2);margin-top:24px;font-size:1.05rem;max-width:52ch}
.stat-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:14px}
.stat-box{background:var(--surface);border:1px solid var(--line);border-radius:var(--radius);padding:clamp(22px,3vw,32px) 20px;text-align:center;position:relative;overflow:hidden;transition:.35s var(--ease)}
.stat-box:hover{border-color:rgba(255,185,56,.3);transform:translateY(-4px)}
.stat-box .num{font-family:var(--display);font-weight:800;font-size:clamp(2.4rem,5vw,3.4rem);letter-spacing:-.03em;line-height:1;background:var(--grad-gold);-webkit-background-clip:text;background-clip:text;color:transparent}
.stat-box .suf{-webkit-text-fill-color:initial}
.stat-box .lbl{font-size:.86rem;color:var(--tx-2);margin-top:10px;font-weight:500}
.stat-box .spark{position:absolute;left:0;right:0;bottom:0;height:3px;background:var(--grad-gold);transform:scaleX(0);transform-origin:left;transition:transform 1.2s var(--ease)}
.stat-box.in .spark{transform:scaleX(1)}

/* ============================================================
   TEAM
   ============================================================ */
.team-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:16px}
.member{position:relative;border-radius:var(--radius);overflow:hidden;aspect-ratio:3/3.7;
  border:1px solid var(--line);transition:.4s var(--ease);isolation:isolate}
.member:hover{transform:translateY(-6px);border-color:var(--line-2)}
.member .ava{position:absolute;inset:0;display:grid;place-items:center}
.member .initials{font-family:var(--display);font-weight:700;font-size:2.6rem;color:rgba(255,255,255,.9)}
.member::after{content:"";position:absolute;inset:0;background:linear-gradient(to top,rgba(8,8,13,.92) 8%,rgba(8,8,13,.2) 50%,transparent 78%);z-index:1}
.member .info{position:absolute;left:0;right:0;bottom:0;padding:18px;z-index:2}
.member .role{font-family:var(--mono);font-size:.7rem;letter-spacing:.12em;text-transform:uppercase;color:var(--gold);margin-bottom:5px}
.member h4{font-size:1.12rem;font-weight:700;letter-spacing:-.01em;color:#ffffff;}
.member .socials{display:flex;gap:8px;margin-top:12px;opacity:0;transform:translateY(8px);transition:.35s var(--ease)}
.member:hover .socials{opacity:1;transform:none}
.member .socials a{width:30px;height:30px;border-radius:8px;background:rgba(255,255,255,.1);display:grid;place-items:center;transition:.25s var(--ease)}
.member .socials a:hover{background:var(--gold);color:#1c1300}
.member .socials svg{width:14px;height:14px}
.team-cta{text-align:center;margin-top:42px}

/* Team Modal Styles */
.member { cursor: pointer; }
.team-modal { position: fixed; inset: 0; z-index: 200; display: flex; align-items: center; justify-content: center; padding: var(--gut); opacity: 0; visibility: hidden; transition: .4s var(--ease); }
.team-modal.open { opacity: 1; visibility: visible; }
.team-modal-backdrop { position: absolute; inset: 0; background: rgba(8, 8, 13, .6); backdrop-filter: blur(12px); }
.team-modal-content { position: relative; width: 100%; max-width: 480px; background: rgba(255, 255, 255, .85); backdrop-filter: blur(20px) saturate(1.2); border: 1px solid var(--line-2); border-radius: 24px; overflow: hidden; box-shadow: 0 30px 80px -20px rgba(28, 22, 12, .4); transform: translateY(20px) scale(0.96); transition: .5s var(--ease); }
.team-modal.open .team-modal-content { transform: none; }
.team-modal-close { position: absolute; top: 16px; right: 16px; width: 36px; height: 36px; border-radius: 50%; background: rgba(255, 255, 255, .8); backdrop-filter: blur(4px); display: grid; place-items: center; z-index: 10; transition: .3s var(--ease); cursor: pointer; border: 1px solid var(--line); }
.team-modal-close:hover { background: var(--tx); color: #fff; transform: rotate(90deg); }
.team-modal-close svg { width: 18px; height: 18px; }
.tm-img-wrap { aspect-ratio: 16/10; width: 100%; position: relative; }
.tm-img { width: 100%; height: 100%; background-position: center 15%; background-size: cover; background-repeat: no-repeat; }
.tm-img-wrap::after { content: ""; position: absolute; inset: 0; background: linear-gradient(to top, rgba(255,255,255,.95), transparent 80%); }
.tm-body { padding: 0 32px 40px; position: relative; text-align: center; margin-top: -36px; z-index: 2; }
.tm-role { font-family: var(--mono); font-size: .75rem; letter-spacing: .08em; text-transform: uppercase; color: var(--gold); font-weight: 600; margin-bottom: 8px; }
.tm-name { font-size: 1.8rem; font-weight: 800; letter-spacing: -.02em; color: var(--tx); margin-bottom: 20px; }
.tm-desc { font-size: .95rem; line-height: 1.6; color: var(--tx-2); text-align: left; }
.tm-desc span { display: block; margin-bottom: 12px; }
.tm-desc span:last-child { margin-bottom: 0; }

/* ============================================================
   PORTFOLIO
   ============================================================ */
.filters{display:flex;flex-wrap:wrap;gap:10px;justify-content:center;margin-bottom:42px}
.filter-btn{padding:9px 20px;border-radius:100px;font-size:.88rem;font-weight:600;color:var(--tx-2);
  background:var(--surface);border:1px solid var(--line);transition:.3s var(--ease)}
.filter-btn:hover{color:var(--tx);border-color:var(--line-2)}
.filter-btn.active{background:var(--grad-gold);color:#1c1300;border-color:transparent}
.port-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:16px}
.port-item{position:relative;border-radius:var(--radius);overflow:hidden;aspect-ratio:1;border:1px solid var(--line);
  transition:opacity .45s var(--ease),transform .45s var(--ease);cursor:pointer}
.port-item.hide{opacity:0;transform:scale(.92);position:absolute;pointer-events:none;width:0;height:0;padding:0;margin:0;border:0;overflow:hidden}
.port-item .thumb{position:absolute;inset:0}
.port-item .thumb::after{content:"";position:absolute;inset:0;background:radial-gradient(circle at 70% 20%,rgba(255,255,255,.12),transparent 50%)}
.port-item .ov{position:absolute;inset:0;background:linear-gradient(to top,rgba(8,8,13,.94),rgba(8,8,13,.1) 70%);
  display:flex;flex-direction:column;justify-content:flex-end;padding:20px;z-index:2;opacity:0;transition:.4s var(--ease);transform:translateY(10px)}
.port-item:hover .ov{opacity:1;transform:none}
.port-item:hover{transform:translateY(-4px)}
.port-item .cat{font-family:var(--mono);font-size:.68rem;letter-spacing:.12em;text-transform:uppercase;color:var(--mint);margin-bottom:6px}
.port-item h4{font-size:1.18rem;font-weight:700}
.port-item .plus{position:absolute;top:16px;right:16px;width:40px;height:40px;border-radius:50%;background:var(--grad-gold);
  display:grid;place-items:center;z-index:2;opacity:0;transform:scale(.6) rotate(-90deg);transition:.4s var(--ease)}
.port-item:hover .plus{opacity:1;transform:none}
.port-item .plus svg{width:18px;height:18px;color:#1c1300}

/* ============================================================
   COMPANY EVENTS GALLERY
   ============================================================ */
.events-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:14px}
.event-photo{position:relative;border-radius:var(--radius);overflow:hidden;aspect-ratio:1;border:1px solid var(--line);
  transition:.4s var(--ease);cursor:pointer;background:var(--surface-2)}
.event-photo img{width:100%;height:100%;object-fit:cover;display:block;transition:transform .6s var(--ease)}
.event-photo:hover img{transform:scale(1.08)}
.event-photo .ov{position:absolute;inset:0;background:linear-gradient(to top,rgba(8,8,13,.92),rgba(8,8,13,.1) 60%);
  display:flex;flex-direction:column;justify-content:flex-end;padding:18px;z-index:2;opacity:0;transition:.4s var(--ease)}
.event-photo:hover .ov{opacity:1}
.event-photo:hover{transform:translateY(-4px)}
.event-photo .ev-cat{font-family:var(--mono);font-size:.68rem;letter-spacing:.12em;text-transform:uppercase;color:var(--mint);margin-bottom:4px}
.event-photo h4{font-size:1rem;font-weight:700;color:#fff;line-height:1.3}
.event-photo .plus{position:absolute;top:14px;right:14px;width:36px;height:36px;border-radius:50%;background:var(--grad-gold);
  display:grid;place-items:center;z-index:2;opacity:0;transform:scale(.6) rotate(-90deg);transition:.4s var(--ease)}
.event-photo:hover .plus{opacity:1;transform:none}
.event-photo .plus svg{width:16px;height:16px;color:#1c1300}
.event-photo.hide{opacity:0;transform:scale(.92);position:absolute;pointer-events:none;width:0;height:0;padding:0;margin:0;border:0;overflow:hidden}

/* Lightbox */
.lb{position:fixed;inset:0;z-index:300;background:rgba(0,0,0,.94);display:flex;align-items:center;justify-content:center;
  opacity:0;visibility:hidden;transition:.35s var(--ease)}
.lb.open{opacity:1;visibility:visible}
.lb-img{max-width:min(88vw,1100px);max-height:84vh;object-fit:contain;border-radius:10px;box-shadow:0 40px 100px rgba(0,0,0,.6)}
.lb-close{position:absolute;top:20px;right:20px;width:44px;height:44px;border-radius:50%;background:rgba(255,255,255,.1);
  border:1px solid rgba(255,255,255,.2);display:grid;place-items:center;cursor:pointer;transition:.3s var(--ease)}
.lb-close:hover{background:rgba(255,255,255,.22);transform:rotate(90deg)}
.lb-close svg{width:20px;height:20px;color:#fff}
.lb-prev,.lb-next{position:absolute;top:50%;transform:translateY(-50%);width:52px;height:52px;border-radius:50%;
  background:rgba(255,255,255,.12);border:1px solid rgba(255,255,255,.22);display:grid;place-items:center;cursor:pointer;transition:.3s var(--ease)}
.lb-prev:hover,.lb-next:hover{background:var(--grad-gold)}
.lb-prev:hover svg,.lb-next:hover svg{color:#1c1300}
.lb-prev{left:18px}.lb-next{right:18px}
.lb-prev svg,.lb-next svg{width:22px;height:22px;color:#fff}
.lb-caption{position:absolute;bottom:48px;left:50%;transform:translateX(-50%);text-align:center;
  color:rgba(255,255,255,.85);font-size:.92rem;font-weight:500;white-space:nowrap;max-width:90vw;overflow:hidden;text-overflow:ellipsis}
.lb-counter{position:absolute;bottom:22px;left:50%;transform:translateX(-50%);font-family:var(--mono);font-size:.74rem;
  color:rgba(255,255,255,.5);letter-spacing:.1em}
@media(max-width:1080px){.events-grid{grid-template-columns:repeat(3,1fr)}}
@media(max-width:640px){.events-grid{grid-template-columns:repeat(2,1fr);gap:10px}.lb-prev{left:8px}.lb-next{right:8px}}
@media(max-width:420px){.events-grid{grid-template-columns:repeat(2,1fr)}}

/* ============================================================
   WORKFLOW
   ============================================================ */
.flow-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:18px;position:relative}
.flow-line{position:absolute;top:36px;left:6%;right:6%;height:2px;background:repeating-linear-gradient(90deg,var(--line-2) 0 8px,transparent 8px 16px);z-index:0}
.flow-step{position:relative;z-index:1;text-align:center}
.flow-badge{width:72px;height:72px;border-radius:50%;margin:0 auto 22px;display:grid;place-items:center;position:relative;
  background:var(--surface);border:1px solid var(--line-2);transition:.4s var(--ease)}
.flow-badge svg{width:30px;height:30px;color:var(--gold);transition:.4s var(--ease)}
.flow-step:hover .flow-badge{background:var(--grad-gold);transform:translateY(-5px)}
.flow-step:hover .flow-badge svg{color:#1c1300}
.flow-step .fnum{position:absolute;top:-6px;right:-6px;width:26px;height:26px;border-radius:50%;background:var(--bg-3);border:1px solid var(--line-2);
  display:grid;place-items:center;font-family:var(--mono);font-size:.72rem;font-weight:700;color:var(--gold)}
.flow-step h4{font-size:1.1rem;font-weight:700;margin-bottom:8px}
.flow-step p{color:var(--tx-2);font-size:.9rem;max-width:24ch;margin:0 auto}

/* ============================================================
   MARKETING METRICS
   ============================================================ */
.metrics{background:linear-gradient(180deg,transparent,rgba(255,138,30,.03),transparent)}
.metrics-inner{display:grid;grid-template-columns:.9fr 1.1fr;gap:clamp(40px,6vw,80px);align-items:center}
.ring-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
.metric{display:flex;flex-direction:column;align-items:center;text-align:center}
.gauge{position:relative;width:clamp(110px,16vw,148px);aspect-ratio:1}
.gauge svg{width:100%;height:100%;transform:rotate(-90deg)}
.gauge .track{fill:none;stroke:rgba(28,22,12,.1);stroke-width:9}
.gauge .prog{fill:none;stroke:url(#goldgrad);stroke-width:9;stroke-linecap:round;stroke-dasharray:308;stroke-dashoffset:308;transition:stroke-dashoffset 1.6s var(--ease)}
.gauge .pct{position:absolute;inset:0;display:grid;place-items:center;font-family:var(--display);font-weight:800;font-size:1.5rem}
.metric .mlabel{margin-top:16px;font-weight:600;font-size:.98rem}
.metric .msub{font-size:.8rem;color:var(--tx-3);margin-top:2px}

/* ============================================================
   OFFICES
   ============================================================ */
.office-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
.office{position:relative;background:var(--surface);border:1px solid var(--line);border-radius:var(--radius-lg);
  padding:clamp(26px,3vw,34px);overflow:hidden;transition:.4s var(--ease)}
.office:hover{transform:translateY(-6px);border-color:var(--line-2);background:var(--surface-2)}
.office .flag{font-size:1.7rem;margin-bottom:18px;display:block}
.office .tag{font-family:var(--mono);font-size:.72rem;letter-spacing:.14em;text-transform:uppercase;color:var(--gold);font-weight:500}
.office h3{font-size:1.4rem;margin:6px 0 16px}
.office .addr{color:var(--tx-2);font-size:.95rem;line-height:1.6;margin-bottom:20px}
.office .contact{display:flex;flex-direction:column;gap:9px;font-size:.92rem}
.office .contact a{display:inline-flex;align-items:center;gap:10px;color:var(--tx-2);transition:.25s var(--ease)}
.office .contact a:hover{color:var(--gold)}
.office .contact svg{width:16px;height:16px;color:var(--gold);flex:none}
.office .hq-tag{position:absolute;top:22px;right:22px;font-family:var(--mono);font-size:.66rem;letter-spacing:.1em;
  padding:5px 10px;border-radius:100px;background:rgba(255,185,56,.12);color:var(--gold);border:1px solid rgba(255,185,56,.25)}

/* ============================================================
   CLIENTS MARQUEE
   ============================================================ */
.clients{padding-block:clamp(40px,6vw,64px);border-top:1px solid var(--line);border-bottom:1px solid var(--line)}
.clients-label{text-align:center;font-family:var(--mono);font-size:.76rem;letter-spacing:.18em;text-transform:uppercase;color:var(--tx-3);margin-bottom:34px}
.marquee{overflow:hidden;-webkit-mask-image:linear-gradient(90deg,transparent,#000 12%,#000 88%,transparent);mask-image:linear-gradient(90deg,transparent,#000 12%,#000 88%,transparent)}
.marquee-track{display:flex;gap:64px;width:max-content;animation:scroll 26s linear infinite}
.marquee:hover .marquee-track{animation-play-state:paused}
@keyframes scroll{to{transform:translateX(-50%)}}
.client-logo{font-family:var(--display);font-weight:700;font-size:1.5rem;color:var(--tx-3);letter-spacing:-.02em;
  white-space:nowrap;transition:.3s var(--ease);opacity:.6;display:flex;align-items:center;gap:9px}
.client-logo:hover{color:var(--tx);opacity:1}
.client-logo .lico{width:26px;height:26px;border-radius:7px;background:rgba(28,22,12,.06);display:grid;place-items:center;font-size:.9rem}

/* ============================================================
   TESTIMONIALS
   ============================================================ */
.testi{position:relative;overflow:hidden}
.testi-inner{max-width:920px;margin:0 auto;text-align:center}
.quote-mark{font-family:var(--display);font-size:6rem;line-height:.6;background:var(--grad-gold);-webkit-background-clip:text;background-clip:text;color:transparent;opacity:.5}
.testi-track{position:relative;min-height:230px}
.testi-slide{position:absolute;inset:0;opacity:0;transform:translateY(20px);transition:.6s var(--ease);pointer-events:none}
.testi-slide.active{opacity:1;transform:none;pointer-events:auto;position:relative}
.testi-slide blockquote{font-family:var(--display);font-weight:500;font-size:clamp(1.3rem,2.6vw,1.95rem);line-height:1.4;letter-spacing:-.01em;color:var(--tx)}
.testi-author{display:flex;flex-direction:column;align-items:center;gap:4px;margin-top:30px}
.testi-ava{width:54px;height:54px;border-radius:50%;display:grid;place-items:center;font-family:var(--display);font-weight:700;color:#1c1300;margin-bottom:8px}
.testi-author .name{font-weight:700;font-size:1.05rem}
.testi-author .stars{color:var(--gold);font-size:.9rem;letter-spacing:2px}
.testi-nav{display:flex;justify-content:center;gap:12px;margin-top:38px}
.testi-nav button{width:46px;height:46px;border-radius:50%;background:var(--surface);border:1px solid var(--line-2);display:grid;place-items:center;transition:.3s var(--ease)}
.testi-nav button:hover{background:var(--grad-gold);border-color:transparent}
.testi-nav button:hover svg{color:#1c1300}
.testi-nav svg{width:18px;height:18px;color:var(--tx-2)}

/* ============================================================
   BLOG
   ============================================================ */
.blog-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;justify-items:center}
.post{background:var(--surface);border:1px solid var(--line);border-radius:var(--radius-lg);overflow:hidden;transition:.4s var(--ease)}
.post:hover{transform:translateY(-6px);border-color:var(--line-2)}
.post .pthumb{aspect-ratio:16/10;position:relative;overflow:hidden}
.post .pthumb::after{content:"";position:absolute;inset:0;background:radial-gradient(circle at 30% 25%,rgba(255,255,255,.14),transparent 55%)}
.post .ptag{position:absolute;top:14px;left:14px;z-index:2;font-family:var(--mono);font-size:.68rem;letter-spacing:.1em;text-transform:uppercase;
  padding:5px 11px;border-radius:100px;background:rgba(8,8,13,.7);backdrop-filter:blur(8px);color:var(--mint);border:1px solid rgba(56,230,196,.3)}
.post .pbody{padding:24px}
.post .pmeta{display:flex;align-items:center;gap:14px;font-size:.8rem;color:var(--tx-3);margin-bottom:14px}
.post .pmeta span{display:inline-flex;align-items:center;gap:6px}
.post .pmeta svg{width:14px;height:14px}
.post h3{font-size:1.18rem;line-height:1.3;letter-spacing:-.01em;transition:.25s var(--ease)}
.post:hover h3{color:var(--gold)}
.post .pread{margin-top:18px}

/* ============================================================
   CTA
   ============================================================ */
.cta{position:relative}
.cta-box{position:relative;border-radius:var(--radius-lg);overflow:hidden;padding:clamp(48px,8vw,96px) var(--gut);text-align:center;
  background:linear-gradient(135deg,#1a1206,#0d0e16 60%);border:1px solid rgba(255,185,56,.18)}
.cta-box::before{content:"";position:absolute;inset:0;background:
  radial-gradient(circle at 20% 20%,rgba(255,138,30,.28),transparent 45%),
  radial-gradient(circle at 80% 80%,rgba(56,230,196,.18),transparent 45%);}
.cta-box>*{position:relative;z-index:1}
.cta-box .eyebrow{color:var(--gold-2)}
.cta-box .eyebrow::before,.cta-box .eyebrow::after{background:var(--gold-2);opacity:.8}
.cta-box h2{font-size:clamp(2.2rem,5.2vw,4rem);font-weight:800;letter-spacing:-.03em;line-height:1.02;max-width:18ch;margin:14px auto 0;color:#fff}
.cta-box p{color:rgba(255,255,255,.78);max-width:50ch;margin:22px auto 0;font-size:1.08rem}
.cta-box .hero-cta{justify-content:center;margin-top:38px}
.cta-box .btn-ghost{background:rgba(255,255,255,.08);color:#fff;border-color:rgba(255,255,255,.22)}
.cta-box .btn-ghost:hover{background:rgba(255,255,255,.14);border-color:rgba(255,255,255,.4)}
.cta-coins{position:absolute;font-size:2rem;opacity:.5;animation:float 5s ease-in-out infinite}

/* ============================================================
   FOOTER
   ============================================================ */
.footer{padding-top:clamp(64px,9vw,110px);padding-bottom:40px;border-top:1px solid var(--line);position:relative}
.foot-top{display:grid;grid-template-columns:1.6fr 1fr 1fr 1fr;gap:clamp(28px,4vw,56px);margin-bottom:64px}
.foot-brand .logo{margin-bottom:20px}
.foot-brand p{color:var(--tx-2);font-size:.96rem;max-width:34ch;margin-bottom:24px}
.foot-social{display:flex;gap:10px}
.foot-social a{width:42px;height:42px;border-radius:11px;background:var(--surface);border:1px solid var(--line-2);display:grid;place-items:center;transition:.3s var(--ease)}
.foot-social a:hover{background:var(--grad-gold);border-color:transparent;transform:translateY(-3px)}
.foot-social a:hover svg{color:#1c1300}
.foot-social svg{width:18px;height:18px;color:var(--tx-2)}
.foot-col h5{font-family:var(--mono);font-size:.74rem;letter-spacing:.16em;text-transform:uppercase;color:var(--tx-3);margin-bottom:20px;font-weight:600}
.foot-col ul{display:flex;flex-direction:column;gap:12px}
.foot-col a{color:var(--tx-2);font-size:.94rem;transition:.25s var(--ease)}
.foot-col a:hover{color:var(--gold)}
.foot-col address{font-style:normal;color:var(--tx-2);font-size:.9rem;line-height:1.7}
.foot-col address a{display:block;margin-top:6px}
.foot-bottom{display:flex;justify-content:space-between;align-items:center;gap:20px;flex-wrap:wrap;padding-top:30px;border-top:1px solid var(--line);font-size:.86rem;color:var(--tx-3)}
.foot-bottom .fb-links{display:flex;gap:22px}
.foot-bottom a:hover{color:var(--gold)}

/* scroll-to-top */
.to-top{position:fixed;bottom:26px;right:26px;width:50px;height:50px;border-radius:50%;background:var(--grad-gold);
  display:grid;place-items:center;z-index:90;box-shadow:0 12px 30px -8px rgba(255,138,30,.6);
  opacity:0;visibility:hidden;transform:translateY(16px) scale(.8);transition:.4s var(--ease)}
.to-top.show{opacity:1;visibility:visible;transform:none}
.to-top:hover{transform:translateY(-3px)}
.to-top svg{width:20px;height:20px;color:#1c1300}

/* toast */
.toast{position:fixed;bottom:28px;left:50%;transform:translateX(-50%) translateY(80px);z-index:120;
  background:rgba(255,255,255,.96);backdrop-filter:blur(14px);border:1px solid var(--line-2);border-radius:100px;
  padding:12px 22px;font-size:.88rem;color:var(--tx);box-shadow:0 18px 50px -16px rgba(28,22,12,.3);opacity:0;transition:.4s var(--ease)}
.toast.show{opacity:1;transform:translateX(-50%)}

/* ============================================================
   RESPONSIVE
   ============================================================ */
@media (max-width:1080px){
  .nav-menu{gap:0}
  .nav-link{padding:9px 11px;font-size:.88rem}
  .hero-inner{grid-template-columns:1fr;gap:48px}
  .hero-visual{order:-1;min-height:340px}
  .hero{padding-top:130px}
  .intro-inner,.champ-inner,.metrics-inner{grid-template-columns:1fr;gap:44px}
  .team-grid,.port-grid{grid-template-columns:repeat(3,1fr)}
  .flow-grid{grid-template-columns:repeat(2,1fr);gap:34px 18px}
  .flow-line{display:none}
  .office-grid{grid-template-columns:1fr;max-width:560px}
  .blog-grid{grid-template-columns:1fr}
  .post .pbody{padding:22px}
  .blog-grid .post{display:grid;grid-template-columns:200px 1fr}
  .blog-grid .post .pthumb{aspect-ratio:auto;height:100%}
}
@media (max-width:860px){
  .nav-menu,.nav-right .lang-toggle,.nav-right .btn{display:none}
  .nav-right{margin-left:auto;gap:0}
  .burger{display:block}
  .svc-grid{grid-template-columns:1fr}
}
@media (max-width:640px){
  :root{--radius-lg:22px}
  .team-grid,.port-grid{grid-template-columns:repeat(2,1fr);gap:12px}
  .stat-grid{grid-template-columns:1fr;gap:12px}
  .stat-box{display:flex;align-items:center;justify-content:space-between;text-align:left;padding:20px 22px}
  .stat-box .lbl{margin-top:0}
  .ring-grid{grid-template-columns:1fr;gap:24px;max-width:280px;margin:0 auto}
  .metric{flex-direction:row;gap:18px;text-align:left}
  .metric .gauge{width:96px;flex:none}
  .metric .mtext{text-align:left}
  .blog-grid .post{grid-template-columns:1fr}
  .blog-grid .post .pthumb{aspect-ratio:16/9}
  .hero-stats{gap:0;width:100%}
  .hstat{flex:1 1 45%;padding:14px 0;text-align:left}
  .hstat:not(:last-child)::after{display:none}
  .hero-visual{min-height:360px}
  .float-card{padding:11px 13px;transform:scale(.95)}
  .fc-top{top:2px;left:0}
  .fc-bottom{bottom:2px;right:0}
  .fc-bottom .bars{height:20px}
  .fc-bottom .bars i{width:5px}
  .member .initials{font-size:2rem}
  .foot-top{grid-template-columns:1fr 1fr;gap:32px 24px}
  .foot-brand{grid-column:1/-1}
  .foot-bottom{flex-direction:column;text-align:center}
  .to-top{bottom:18px;right:18px}
}
@media (max-width:420px){
  .team-grid{grid-template-columns:repeat(2,1fr)}
  .port-grid{grid-template-columns:1fr}
  .filters{gap:8px}
  .filter-btn{padding:8px 15px;font-size:.82rem}
}
</style>
</head>
<body>

<!-- ================= ATMOSPHERE ================= -->
<div class="bg-atmos" aria-hidden="true">
  <div class="blob b1"></div>
  <div class="blob b2"></div>
  <div class="blob b3"></div>
</div>
<div class="bg-grid" aria-hidden="true"></div>
<div class="bg-noise" aria-hidden="true"></div>

<!-- ================= HEADER ================= -->
<header class="header" id="header">
  <nav class="nav">
    <a href="#home" class="logo" aria-label="App House home">
      <img src="uploads/apphouselogo.png" alt="App House Logo" style="height: 42px; width: auto;" />
    </a>

    <ul class="nav-menu">
      <li class="nav-item"><a href="#home" class="nav-link" data-zh="首頁">Home</a></li>
      <li class="nav-item">
        <a href="#about" class="nav-link has-drop"><span data-zh="關於我們">About Us</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
        </a>
        <div class="dropdown">
          <a href="#about" data-zh="我們的歷史">Our History</a>
          <a href="#team" data-zh="我們的技能">Our Skills</a>
        </div>
      </li>
      <li class="nav-item"><a href="#services" class="nav-link" data-zh="服務">Services</a></li>
      <li class="nav-item"><a href="#blog" class="nav-link" data-zh="部落格">Blog</a></li>
      <li class="nav-item"><a href="#portfolio" class="nav-link" data-zh="公司活動">Company Events</a></li>
      <li class="nav-item"><a href="#contact" class="nav-link" data-zh="聯繫我們">Contacts</a></li>
    </ul>

    <div class="nav-right">
      <div class="lang-toggle" role="group" aria-label="Language">
        <button class="active" data-lang="en">EN</button>
        <button data-lang="zh">中</button>
      </div>
      <a href="#contact" class="btn btn-primary" data-zh="立即開始">Get Started
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
      <button class="burger" id="burger" aria-label="Open menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
  </nav>
</header>

<!-- ================= MOBILE DRAWER ================= -->
<div class="drawer" id="drawer">
  <div class="drawer-links">
    <a href="#home" data-close><span class="drawer-num">01</span><span data-zh="首頁">Home</span></a>
    <details class="drawer-sub">
      <summary><span class="drawer-num">02</span><span data-zh="關於我們">About Us</span>
        <svg class="chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
      </summary>
      <div class="sub-links">
        <a href="#about" data-close data-zh="我們的歷史">Our History</a>
        <a href="#team" data-close data-zh="我們的技能">Our Skills</a>
      </div>
    </details>
    <a href="#services" data-close><span class="drawer-num">03</span><span data-zh="服務">Services</span></a>
    <a href="#blog" data-close><span class="drawer-num">04</span><span data-zh="部落格">Blog</span></a>
    <a href="#portfolio" data-close><span class="drawer-num">05</span><span data-zh="公司活動">Company Events</span></a>
    <a href="#contact" data-close><span class="drawer-num">06</span><span data-zh="聯繫我們">Contacts</span></a>
  </div>
  <div class="drawer-foot">
    <a href="#contact" class="btn btn-primary" data-close data-zh="立即開始">Get Started
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
    </a>
    <div class="lang-toggle" style="align-self:flex-start" role="group" aria-label="Language">
      <button class="active" data-lang="en">EN</button>
      <button data-lang="zh">中</button>
    </div>
  </div>
</div>

<main>
<!-- ===== HERO ===== -->
<section class="hero" id="home">
  <div class="wrap hero-inner">
    <div class="hero-copy">
      <span class="hero-badge reveal"><span class="dot"></span> <span data-zh="軟件 · 社交 · 遊戲化增長">Software · Social · Gamified Growth</span></span>

      <div class="hero-slides">
        <div class="hero-slide active">
          <span class="hero-kick" data-zh="排名 × 轉換">Rankings × Conversions</span>
          <h1 data-zh="讓您的<em>業務</em>騰飛">Skyrocket your <em>business</em> growth</h1>
          <p class="hero-sub" data-zh="排名與轉換的完美結合——我們將曝光度轉化為收益，將點擊轉化為忠實客戶。">Where ranking meets conversion — we turn visibility into revenue, and clicks into loyal customers.</p>
        </div>
        <div class="hero-slide">
          <span class="hero-kick" data-zh="流量 × 潛在客戶">Traffic × Leads</span>
          <h1 data-zh="提升您的<em>線上業務</em>">Boost your <em>business</em> online</h1>
          <p class="hero-sub" data-zh="每天增加網站流量並獲取更多優質潛在客戶。">Increase website traffic and capture more qualified leads, every single day.</p>
        </div>
        <div class="hero-slide">
          <span class="hero-kick" data-zh="搜索 × 曝光">Search × Visibility</span>
          <h1 data-zh="在Google<br><em>排名第一</em>">Get Rank <em>#1</em><br> on Google</h1>
          <p class="hero-sub" data-zh="提升線上存在感，贏得來自Google、Yahoo和Bing的流量。">Grow your online presence and win traffic from Google, Yahoo, and Bing.</p>
        </div>
      </div>

      <div class="hero-cta reveal" data-d="2">
        <a href="#services" class="btn btn-primary btn-lg" data-zh="了解更多">Discover More
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
        <a href="#portfolio" class="btn btn-ghost btn-lg" data-zh="查看作品">View Our Work</a>
      </div>

      <div class="hero-dots" role="tablist" aria-label="Hero slides">
        <button class="active" aria-label="Slide 1"></button>
        <button aria-label="Slide 2"></button>
        <button aria-label="Slide 3"></button>
      </div>

      <div class="hero-stats reveal" data-d="3">
        <div class="hstat"><div class="n"><span data-count="12">0</span>+</div><div class="l" data-zh="年經驗">Years Experience</div></div>
        <div class="hstat"><div class="n"><span data-count="500">0</span>+</div><div class="l" data-zh="已交付項目">Projects Delivered</div></div>
        <div class="hstat"><div class="n"><span data-count="3">0</span></div><div class="l" data-zh="全球辦事處">Global Offices</div></div>
        <div class="hstat"><div class="n"><span data-count="50">0</span>+</div><div class="l" data-zh="服務行業">Industries Served</div></div>
      </div>
    </div>

    <div class="hero-visual reveal" data-d="1">
      <div class="orb">
        <div class="ring r1"><span class="pip"></span><span class="pip pip2"></span></div>
        <div class="ring r2"><span class="pip"></span></div>
        <div class="orb-coin">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 17l6-6 4 4 8-8"/><path d="M21 3v6h-6"/></svg>
        </div>
      </div>
      <div class="float-card fc-top">
        <span class="fc-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></span>
        <div><div class="fc-label" data-zh="互動率">Engagement</div><div class="fc-val" style="color: #1c1300;">+38.4%</div></div>
      </div>
      <div class="float-card fc-bottom">
        <div class="fc-label" data-zh="會員獎勵">Loyalty Rewards</div>
        <div class="fc-val">1,250 <span style="font-size:.7rem;color:var(--gold)">pts</span></div>
        <div class="bars">
          <i style="height:40%"></i><i style="height:60%"></i><i style="height:50%"></i><i style="height:80%"></i><i style="height:100%"></i><i style="height:70%"></i>
        </div>
      </div>
    </div>
  </div>

  <div class="scroll-cue" aria-hidden="true">
    <div class="mouse"></div>
    Scroll
  </div>
</section>

<!-- ===== CLIENTS ===== -->
<section class="clients">
  <div class="wrap">
    <p class="clients-label reveal" data-zh="受50多個行業品牌的信任">Trusted by brands across 50+ industries</p>
  </div>
  <div class="marquee">
    <div class="marquee-track">
      <span class="client-logo"><span class="lico">N</span>Nielsen</span>
      <span class="client-logo"><span class="lico">S</span>Shimono</span>
      <span class="client-logo"><span class="lico">S</span>SVCB</span>
      <span class="client-logo"><span class="lico">M</span>Maxis</span>
      <span class="client-logo"><span class="lico">E</span>EduPlus</span>
      <span class="client-logo"><span class="lico">A</span>AppHouse</span>
      <span class="client-logo"><span class="lico">N</span>Nielsen</span>
      <span class="client-logo"><span class="lico">S</span>Shimono</span>
      <span class="client-logo"><span class="lico">S</span>SVCB</span>
      <span class="client-logo"><span class="lico">M</span>Maxis</span>
      <span class="client-logo"><span class="lico">E</span>EduPlus</span>
      <span class="client-logo"><span class="lico">A</span>AppHouse</span>
    </div>
  </div>
</section>

<!-- ===== INTRO ===== -->
<section class="intro section-pad" id="about">
  <div class="wrap intro-inner">
    <div>
      <span class="eyebrow reveal" data-zh="你好，我們是App House">Hello, we are App House</span>
      <h2 class="reveal" data-d="1"><span data-zh="我們是">We are</span> <span class="rotator"><span class="rotate-word" id="rotWord" style="transition:opacity .3s ease">a Software Development Company.</span></span></h2>
      <p class="reveal" data-d="2" data-zh="App House是一家社交媒體管理和軟件開發公司。我們在Facebook、Instagram、Twitter和Pinterest上打造並運行頂尖的行銷活動，同時開發驅動業務增長的軟件，助您更快速達成目標。">App House is a social media management and software development company. We craft and run top-performing campaigns across Facebook, Instagram, Twitter, and Pinterest — and build the software that powers your growth, so your business can meet its goals faster.</p>
      <div class="platform-pills reveal" data-d="3">
        <span><i class="d" style="background:#1877f2"></i>Facebook</span>
        <span><i class="d" style="background:#e1306c"></i>Instagram</span>
        <span><i class="d" style="background:#1da1f2"></i>Twitter</span>
        <span><i class="d" style="background:#e60023"></i>Pinterest</span>
      </div>
    </div>
    <div class="intro-figure reveal" data-d="2">
      <div class="badge-float bf1">// accelerate.growth()</div>
      <div class="badge-float bf2"><div class="v text-grad">4.9★</div><div class="l">Average client rating</div></div>
    </div>
  </div>
</section>

<!-- ===== SERVICES ===== -->
<section class="services section-pad" id="services">
  <div class="wrap">
    <div class="sec-head center">
      <span class="eyebrow center reveal" data-zh="我們的服務">What We Do</span>
      <h2 class="h-sec reveal" data-d="1" data-zh="我們助您<span class='text-grad'>加速增長</span>">We help you <span class="text-grad">accelerate growth</span></h2>
      <p class="lead reveal" data-d="2" data-zh="從搜索排名到定制軟件，每項服務都旨在推動一個關鍵數字——您的盈利。">From search rankings to custom software, every service is built to move one number that matters — your bottom line.</p>
    </div>

    <div class="svc-grid">
      <article class="svc-card reveal" data-d="1">
        <span class="svc-num">01</span>
        <div class="svc-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/><path d="M11 8v6M8 11h6"/></svg></div>
        <h3 data-zh="谷歌行銷與分析">Google Marketing &amp; Analysis</h3>
        <p data-zh="基於Google生態系統的搜索優先策略。我們讓您被找到，並通過數據驅動的分析將搜索者轉化為客戶。">Search-first strategies built on Google's ecosystem. We get you found, then turn searchers into customers with data-driven analytics.</p>
        <div class="svc-foot"><a href="#contact" class="link-arrow" data-zh="了解更多">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></div>
      </article>

      <article class="svc-card reveal" data-d="2">
        <span class="svc-num">02</span>
        <div class="svc-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 6l-6 6 6 6"/><path d="M16 6l6 6-6 6"/></svg></div>
        <h3 data-zh="軟件定制">Software Customization</h3>
        <p data-zh="量身定制的敏捷軟件——擁有為馬來西亞、新加坡和香港客戶交付的成熟業績。">Bespoke, agile software tailored to your needs — with a proven track record delivering for clients across Malaysia, Singapore, and Hong Kong.</p>
        <div class="svc-foot"><a href="#contact" class="link-arrow" data-zh="了解更多">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></div>
      </article>

      <article class="svc-card reveal" data-d="3">
        <span class="svc-num">03</span>
        <div class="svc-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 12v9H4v-9"/><path d="M2 7h20v5H2z"/><path d="M12 22V7"/><path d="M12 7S10.5 3 8 3 5 6 8 7m4 0s1.5-4 4-4 3 3 0 4"/></svg></div>
        <h3 data-zh="忠誠度管理軟件">Loyalty Management Software</h3>
        <p data-zh="獎勵合適的客戶並達成目標。智能遊戲化忠誠度工具，將一次性買家轉化為終身忠實粉絲。">Reward the right customers and hit your targets. Smart, gamified loyalty tools that turn one-time buyers into lifelong fans.</p>
        <div class="svc-foot"><a href="#contact" class="link-arrow" data-zh="了解更多">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></div>
      </article>

      <article class="svc-card reveal" data-d="4">
        <span class="svc-num">04</span>
        <div class="svc-ico"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 00-3-3.87M16 3.13A4 4 0 0116 11"/></svg></div>
        <h3 data-zh="客戶關係系統">Customer Relationship System</h3>
        <p data-zh="統一每個客戶接觸點。管理整個生命週期的互動和數據，以提高留存率並推動銷售。">Unify every customer touchpoint. Manage interactions and data across the full lifecycle to grow retention and drive sales.</p>
        <div class="svc-foot"><a href="#contact" class="link-arrow" data-zh="了解更多">Learn more <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a></div>
      </article>
    </div>

    <div style="text-align:center;margin-top:46px" class="reveal">
      <a href="#contact" class="btn btn-ghost btn-lg" data-zh="探索所有服務">Explore All Services
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
    </div>
  </div>
</section>

<!-- ===== CHAMPION + STATS ===== -->
<section class="champ section-pad">
  <div class="wrap champ-inner">
    <div>
      <span class="eyebrow reveal" data-zh="小企業">The Small Business</span>
      <h2 class="reveal" data-d="1" data-zh="您的增長<span class='text-grad'>夥伴。</span>">Your growth<span class="text-grad">Champion.</span></h2>
      <p class="reveal" data-d="2" data-zh="我們的機構致力於幫助小企業成長。小企業是經濟的支柱——它們創造就業、引領創新、推動市場。然而，它們卻難以獲得負擔得起的機構服務。App House正是為小企業而建。">Our agency exists to help small businesses grow. Small businesses are the backbone of the economy — they create the jobs, lead innovation, and move markets. Yet they're underserved by agencies they can actually afford. App House was built with small businesses top-of-mind.</p>
      <div class="reveal" data-d="3" style="margin-top:30px">
        <a href="#contact" class="btn btn-primary" data-zh="與我們合作">Partner With Us
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
      </div>
    </div>
    <div class="stat-grid">
      <div class="stat-box reveal" data-d="1"><div class="num"><span data-count="12">0</span><span class="suf">+</span></div><div class="lbl" data-zh="年經驗">Years of Experience</div><span class="spark"></span></div>
      <div class="stat-box reveal" data-d="2"><div class="num"><span data-count="480">0</span><span class="suf">+</span></div><div class="lbl" data-zh="已啟動活動">Campaigns Launched</div><span class="spark"></span></div>
      <div class="stat-box reveal" data-d="3"><div class="num"><span data-count="350">0</span><span class="suf">+</span></div><div class="lbl" data-zh="滿意客戶">Happy Clients</div><span class="spark"></span></div>
    </div>
  </div>
</section>

<!-- ===== TEAM ===== -->
<section class="team section-pad" id="team">
  <div class="wrap">
    <div class="sec-head center">
      <span class="eyebrow center reveal" data-zh="我們是誰">Who We Are</span>
      <h2 class="h-sec reveal" data-d="1" data-zh="我們的<span class='text-grad'>創意團隊</span>">Our <span class="text-grad">creative team</span></h2>
      <p class="lead reveal" data-d="2" data-zh="成功的機構有一個共同點：使命感。認識建設、設計和發展App House的成員。">Successful agencies share one thing: a sense of purpose. Meet the people who build, design, and grow App House.</p>
    </div>

    <div class="team-grid">
      <article class="member reveal" data-d="1" data-img="uploads/Guan.webp" data-name="Guan" data-role="Senior Software Engineer | 高級軟件工程師" data-desc="<span>參與前端和後端的開發和測試， 維護和支持應用程序。</span><span>Responsible for developing and testing both front-end and back-end systems, as well as maintaining and supporting applications.</span>">
        <div class="ava" style="background: url('uploads/Guan.webp') center/cover no-repeat;"></div>
        <div class="info"><div class="role" data-zh="高級軟件工程師">Senior Software Engineer</div><h4>Guan</h4></div>
      </article>

      <article class="member reveal" data-d="2" data-img="uploads/teresa.webp" data-name="Teresa" data-role="Software Engineer | 軟件工程師" data-desc="<span>負責企業的分析、設計、開發、故障排除、調試和維護等活動。</span><span>Handles analysis, design, development, troubleshooting, debugging, and maintenance for enterprise systems.</span>">
        <div class="ava" style="background: url('uploads/teresa.webp') center/cover no-repeat;"></div>
        <div class="info"><div class="role" data-zh="軟件工程師">Software Engineer</div><h4>Teresa</h4></div>
      </article>

      <article class="member reveal" data-d="3" data-img="uploads/lai.webp" data-name="Lai Nee Nee" data-role="Graphic Designer | 平面設計師" data-desc="<span>她與業務發展總監和營銷主管密切合作，計劃、執行和管理公司的營銷活動。</span><span>Works closely with the Business Development Director and Marketing Manager to plan, execute, and manage the company’s marketing campaigns.</span>">
        <div class="ava" style="background: url('uploads/lai.webp') center/cover no-repeat;"></div>
        <div class="info"><div class="role" data-zh="平面設計師">Graphic Designer</div><h4>Lai Nee Nee</h4></div>
      </article>

      <article class="member reveal" data-d="4" data-img="uploads/vivian.webp" data-name="Vivian" data-role="Front Office Coordinator | 前廳協調員" data-desc="<span>她負責監督日常活動，並為整個辦公室提供前台支持和協助。</span><span>Oversees daily operations while providing front desk support and assistance across the office.</span>">
        <div class="ava" style="background: url('uploads/vivian.webp') center/cover no-repeat;"></div>
        <div class="info"><div class="role" data-zh="前廳協調員">Front Office Coordinator</div><h4>Vivian</h4></div>
      </article>

      <article class="member reveal" data-d="1" data-img="uploads/raman.webp" data-name="Raman" data-role="Java Software Engineer | Java軟件工程師" data-desc="<span>他負責確保設計符合規範。</span><span>Ensures that designs and implementations align with specifications.</span>">
        <div class="ava" style="background: url('uploads/raman.webp') center/cover no-repeat;"></div>
        <div class="info"><div class="role" data-zh="Java軟件工程師">Java Software Engineer</div><h4>Raman</h4></div>
      </article>

      <article class="member reveal" data-d="2" data-img="uploads/ang.webp" data-name="Ang" data-role="IT Administrator | IT管理員" data-desc="<span>他負責設計、開發和維護系統用戶界面。</span><span>Responsible for designing, developing, and maintaining system user interfaces.</span>">
        <div class="ava" style="background: url('uploads/ang.webp') center/cover no-repeat;"></div>
        <div class="info"><div class="role" data-zh="IT管理員">IT Administrator</div><h4>Ang</h4></div>
      </article>

      <article class="member reveal" data-d="3" data-img="uploads/jayjay.webp" data-name="Jay Jay" data-role="Front Office Coordinator | 前廳協調員" data-desc="<span>她負責監督日常活動，並為整個辦公室提供前台支持和協助。</span><span>Oversees daily operations while providing front desk support and assistance across the office.</span>">
        <div class="ava" style="background: url('uploads/jayjay.webp') center/cover no-repeat;"></div>
        <div class="info"><div class="role" data-zh="前廳協調員">Front Office Coordinator</div><h4>Jay Jay</h4></div>
      </article>

      <article class="member reveal" data-d="4" data-img="uploads/fate.webp" data-name="FATEJSIN" data-role="IT Administrator | IT管理員" data-desc="<span>他負責設計、開發和維護系統用戶界面。</span><span>Responsible for designing, developing, and maintaining system user interfaces.</span>">
        <div class="ava" style="background: url('uploads/fate.webp') center/cover no-repeat;"></div>
        <div class="info"><div class="role" data-zh="IT管理員">IT Administrator</div><h4>FATEJSIN</h4></div>
      </article>

      <article class="member reveal" data-d="1" data-img="uploads/team.webp" data-name="AI Team" data-role="AI Development Team | 人工智能開發團隊" data-desc="<span>一個負責為我們的服務開發人工智能係統的團隊。</span><span>A dedicated team focused on developing AI systems to power our services.</span>">
        <div class="ava" style="background: url('uploads/team.webp') center/cover no-repeat;"></div>
        <div class="info"><div class="role" data-zh="人工智能開發團隊">AI Development Team</div><h4>AI Team</h4></div>
      </article>

      <article class="member reveal" data-d="2" data-img="uploads/nicholas.webp" data-name="Nicholas Weipeng" data-role="Social Media Manager | 社交媒體管理員" data-desc="<span>他負責管理和創建社交媒體平台上的廣告。</span><span>Manages and creates advertising campaigns across social media platforms.</span>">
        <div class="ava" style="background: url('uploads/nicholas.webp') center/cover no-repeat;"></div>
        <div class="info"><div class="role" data-zh="社交媒體管理員">Social Media Manager</div><h4>Nicholas Weipeng</h4></div>
      </article>

      <article class="member reveal" data-d="3" data-img="uploads/apple.webp" data-name="Apple Lai" data-role="Software Developer | 軟件開發人員" data-desc="<span>她是針對開發軟件滿足客戶的需求。</span><span>Develops software solutions tailored to meet customer needs.</span>">
        <div class="ava" style="background: url('uploads/apple.webp') center/cover no-repeat;"></div>
        <div class="info"><div class="role" data-zh="軟件開發人員">Software Developer</div><h4>Apple Lai</h4></div>
      </article>

      <article class="member reveal" data-d="4" data-img="uploads/dominis.webp" data-name="Dominis" data-role="Google Specialist | 谷歌專家" data-desc="<span>負責提供谷歌推廣方面的服務，以及幫助解決這方面的疑難雜症。</span><span>Provides expertise in Google marketing and promotion, as well as resolving related challenges.</span>">
        <div class="ava" style="background: url('uploads/dominis.webp') center/cover no-repeat;"></div>
        <div class="info"><div class="role" data-zh="谷歌專家">Google Specialist</div><h4>Dominis</h4></div>
      </article>
    </div>

    <div class="team-cta reveal">
      <a href="#contact" class="btn btn-ghost btn-lg" data-zh="認識全體團隊">Meet the Full Team
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
    </div>
  </div>
</section>

<!-- ===== COMPANY EVENTS ===== -->
<section class="portfolio section-pad" id="portfolio">
  <div class="wrap">
    <div class="sec-head center">
      <span class="eyebrow center reveal" data-zh="時刻與回憶">Moments &amp; Memories</span>
      <h2 class="h-sec reveal" data-d="1" data-zh="公司<span class='text-grad'>活動</span>">Company <span class="text-grad">Events</span></h2>
      <p class="lead reveal" data-d="2" data-zh="精選我們在亞洲各地舉辦的會議、產品發布、合作和團隊聚會的精彩瞬間。">Highlights from our conferences, product launches, partnerships, and team gatherings across Asia.</p>
    </div>

    <div class="filters reveal">
      <button class="filter-btn active" data-filter="all" data-zh="全部">All</button>
      <button class="filter-btn" data-filter="conference" data-zh="會議">Conferences</button>
      <button class="filter-btn" data-filter="launch" data-zh="應用發布">App Launches</button>
      <button class="filter-btn" data-filter="ecommerce" data-zh="電子商務">E-Commerce</button>
      <button class="filter-btn" data-filter="office" data-zh="辦公室與團隊">Office &amp; Team</button>
    </div>

    <div class="events-grid">
      <article class="event-photo reveal" data-cat="office" data-lbsrc="https://apphouse.hk/uploads/apphouse.hk/events/00/WhatsApp-Image-2022-01-20-at-1.11.08-PM-1.jpeg" data-lbcap="IT Support Team">
        <img src="https://apphouse.hk/uploads/apphouse.hk/events/00/WhatsApp-Image-2022-01-20-at-1.11.08-PM-1.jpeg" alt="IT Support Team" loading="lazy">
        <span class="plus"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg></span>
        <div class="ov"><div class="ev-cat">Office &amp; Team</div><h4>IT Support Team</h4></div>
      </article>

      <article class="event-photo reveal" data-d="1" data-cat="office" data-lbsrc="https://apphouse.hk/uploads/apphouse.hk/events/00/WhatsApp-Image-2022-01-20-at-1.00.08-PM-1.jpeg" data-lbcap="IT Support Team — 2022">
        <img src="https://apphouse.hk/uploads/apphouse.hk/events/00/WhatsApp-Image-2022-01-20-at-1.00.08-PM-1.jpeg" alt="IT Support Team 2022" loading="lazy">
        <span class="plus"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg></span>
        <div class="ov"><div class="ev-cat">Office &amp; Team</div><h4>IT Support Team — 2022</h4></div>
      </article>

      <article class="event-photo reveal" data-d="2" data-cat="ecommerce" data-lbsrc="https://apphouse.hk/uploads/apphouse.hk/events/01/IMG-20201124-WA0007.jpg" data-lbcap="E-Commerce Opening Ceremony">
        <img src="https://apphouse.hk/uploads/apphouse.hk/events/01/IMG-20201124-WA0007.jpg" alt="E-Commerce Opening" loading="lazy">
        <span class="plus"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg></span>
        <div class="ov"><div class="ev-cat">E-Commerce</div><h4>E-Commerce Opening Ceremony</h4></div>
      </article>

      <article class="event-photo reveal" data-d="3" data-cat="ecommerce" data-lbsrc="https://apphouse.hk/uploads/apphouse.hk/events/01/IMG-20201124-WA0003.jpg" data-lbcap="E-Commerce Opening — Group Photo">
        <img src="https://apphouse.hk/uploads/apphouse.hk/events/01/IMG-20201124-WA0003.jpg" alt="E-Commerce Opening Group Photo" loading="lazy">
        <span class="plus"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg></span>
        <div class="ov"><div class="ev-cat">E-Commerce</div><h4>E-Commerce — Group Photo</h4></div>
      </article>

      <article class="event-photo reveal" data-d="4" data-cat="conference" data-lbsrc="https://apphouse.hk/uploads/apphouse.hk/events/03/WhatsApp-Image-2020-11-24-at-15.09.54.jpeg" data-lbcap="Education Minister Opening Ceremony">
        <img src="https://apphouse.hk/uploads/apphouse.hk/events/03/WhatsApp-Image-2020-11-24-at-15.09.54.jpeg" alt="Education Minister Opening" loading="lazy">
        <span class="plus"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg></span>
        <div class="ov"><div class="ev-cat">Conference</div><h4>Education Minister Opening</h4></div>
      </article>

      <article class="event-photo reveal" data-d="5" data-cat="conference" data-lbsrc="https://apphouse.hk/uploads/apphouse.hk/events/04/WhatsApp-Image-2020-11-24-at-15.14.41.jpeg" data-lbcap="Singapore Startup Factory Conference">
        <img src="https://apphouse.hk/uploads/apphouse.hk/events/04/WhatsApp-Image-2020-11-24-at-15.14.41.jpeg" alt="Singapore Startup Factory" loading="lazy">
        <span class="plus"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg></span>
        <div class="ov"><div class="ev-cat">Conference</div><h4>Singapore Startup Factory</h4></div>
      </article>

      <article class="event-photo reveal" data-d="1" data-cat="office" data-lbsrc="https://apphouse.hk/uploads/apphouse.hk/events/05/WhatsApp-Image-2020-11-24-at-15.22.16.jpeg" data-lbcap="Soho Suite KLCC Office Meeting">
        <img src="https://apphouse.hk/uploads/apphouse.hk/events/05/WhatsApp-Image-2020-11-24-at-15.22.16.jpeg" alt="KLCC Office Meeting" loading="lazy">
        <span class="plus"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg></span>
        <div class="ov"><div class="ev-cat">Office &amp; Team</div><h4>Soho Suite KLCC Office</h4></div>
      </article>

      <article class="event-photo reveal" data-d="2" data-cat="office" data-lbsrc="https://apphouse.hk/uploads/apphouse.hk/events/05/WhatsApp-Image-2020-11-24-at-15.22.53.jpeg" data-lbcap="Team Meeting Session — KLCC">
        <img src="https://apphouse.hk/uploads/apphouse.hk/events/05/WhatsApp-Image-2020-11-24-at-15.22.53.jpeg" alt="Team Meeting Session" loading="lazy">
        <span class="plus"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg></span>
        <div class="ov"><div class="ev-cat">Office &amp; Team</div><h4>Team Meeting Session</h4></div>
      </article>

      <article class="event-photo reveal" data-d="3" data-cat="conference" data-lbsrc="https://apphouse.hk/uploads/apphouse.hk/events/06/WhatsApp-Image-2020-11-25-at-13.55.48.jpeg" data-lbcap="Zhonggu Software Expo">
        <img src="https://apphouse.hk/uploads/apphouse.hk/events/06/WhatsApp-Image-2020-11-25-at-13.55.48.jpeg" alt="Zhonggu Software Expo" loading="lazy">
        <span class="plus"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg></span>
        <div class="ov"><div class="ev-cat">Conference</div><h4>Zhonggu Software Expo</h4></div>
      </article>

      <article class="event-photo reveal" data-d="4" data-cat="office" data-lbsrc="https://apphouse.hk/uploads/apphouse.hk/events/07/WhatsApp-Image-2020-11-25-at-13.58.15.jpeg" data-lbcap="Women's Group Partnership">
        <img src="https://apphouse.hk/uploads/apphouse.hk/events/07/WhatsApp-Image-2020-11-25-at-13.58.15.jpeg" alt="Women's Group Partnership" loading="lazy">
        <span class="plus"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg></span>
        <div class="ov"><div class="ev-cat">Office &amp; Team</div><h4>Women's Group Partnership</h4></div>
      </article>

      <article class="event-photo reveal" data-d="5" data-cat="launch" data-lbsrc="https://apphouse.hk/uploads/apphouse.hk/events/08/WhatsApp-Image-2020-11-25-at-15.49.48.jpeg" data-lbcap="Studybo App Launch — 654 Participants">
        <img src="https://apphouse.hk/uploads/apphouse.hk/events/08/WhatsApp-Image-2020-11-25-at-15.49.48.jpeg" alt="Studybo App Launch" loading="lazy">
        <span class="plus"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg></span>
        <div class="ov"><div class="ev-cat">App Launch</div><h4>Studybo App — 654 Participants</h4></div>
      </article>

      <article class="event-photo reveal" data-d="1" data-cat="launch" data-lbsrc="https://apphouse.hk/uploads/apphouse.hk/events/09/WhatsApp-Image-2020-11-25-at-15.59.13.jpeg" data-lbcap="Seagull Business School System">
        <img src="https://apphouse.hk/uploads/apphouse.hk/events/09/WhatsApp-Image-2020-11-25-at-15.59.13.jpeg" alt="Seagull Business School" loading="lazy">
        <span class="plus"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg></span>
        <div class="ov"><div class="ev-cat">App Launch</div><h4>Seagull Business School System</h4></div>
      </article>

      <article class="event-photo reveal" data-d="2" data-cat="ecommerce" data-lbsrc="https://apphouse.hk/uploads/apphouse.hk/events/10/WhatsApp-Image-2020-11-25-at-16.46.26.jpeg" data-lbcap="Singapore-Malaysia E-Commerce Event">
        <img src="https://apphouse.hk/uploads/apphouse.hk/events/10/WhatsApp-Image-2020-11-25-at-16.46.26.jpeg" alt="SG-MY E-Commerce Event" loading="lazy">
        <span class="plus"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg></span>
        <div class="ov"><div class="ev-cat">E-Commerce</div><h4>SG-MY E-Commerce Event</h4></div>
      </article>

      <article class="event-photo reveal" data-d="3" data-cat="launch" data-lbsrc="https://apphouse.hk/uploads/apphouse.hk/events/11/WhatsApp-Image-2020-11-25-at-16.08.36.jpeg" data-lbcap="Encore Med Doctor Appointment System">
        <img src="https://apphouse.hk/uploads/apphouse.hk/events/11/WhatsApp-Image-2020-11-25-at-16.08.36.jpeg" alt="Encore Med System Launch" loading="lazy">
        <span class="plus"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg></span>
        <div class="ov"><div class="ev-cat">App Launch</div><h4>Encore Med System Launch</h4></div>
      </article>

      <article class="event-photo reveal" data-d="4" data-cat="conference" data-lbsrc="https://apphouse.hk/uploads/apphouse.hk/events/12/WhatsApp-Image-2020-11-25-at-16.46.26-14-1.jpeg" data-lbcap="Singapore-Malaysia Matrix Global Event">
        <img src="https://apphouse.hk/uploads/apphouse.hk/events/12/WhatsApp-Image-2020-11-25-at-16.46.26-14-1.jpeg" alt="Matrix Global Event" loading="lazy">
        <span class="plus"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg></span>
        <div class="ov"><div class="ev-cat">Conference</div><h4>Matrix Global Event</h4></div>
      </article>

      <article class="event-photo reveal" data-d="5" data-cat="conference" data-lbsrc="https://apphouse.hk/uploads/apphouse.hk/events/04/WhatsApp-Image-2020-11-24-at-15.14.42-1.jpeg" data-lbcap="Singapore Startup Factory — Panel">
        <img src="https://apphouse.hk/uploads/apphouse.hk/events/04/WhatsApp-Image-2020-11-24-at-15.14.42-1.jpeg" alt="Singapore Startup Conference Panel" loading="lazy">
        <span class="plus"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"><path d="M12 5v14M5 12h14"/></svg></span>
        <div class="ov"><div class="ev-cat">Conference</div><h4>Startup Factory — Panel</h4></div>
      </article>
    </div>
  </div>
</section>

<!-- Lightbox -->
<div class="lb" id="lb" role="dialog" aria-modal="true" aria-label="Photo viewer">
  <button class="lb-close" id="lbClose" aria-label="Close lightbox">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6L6 18M6 6l12 12"/></svg>
  </button>
  <button class="lb-prev" id="lbPrev" aria-label="Previous photo">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
  </button>
  <img class="lb-img" id="lbImg" src="" alt="">
  <button class="lb-next" id="lbNext" aria-label="Next photo">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
  </button>
  <div class="lb-caption" id="lbCap"></div>
  <div class="lb-counter" id="lbCtr"></div>
</div>

<!-- ===== WORKFLOW ===== -->
<section class="workflow section-pad">
  <div class="wrap">
    <div class="sec-head center">
      <span class="eyebrow center reveal" data-zh="工作流程">Work Process</span>
      <h2 class="h-sec reveal" data-d="1" data-zh="我們如何<span class='text-grad'>工作</span>">How we <span class="text-grad">work</span></h2>
      <p class="lead reveal" data-d="2" data-zh="清晰、協作的流程——從最初構想到長期支持。">A clear, collaborative process — from first idea to long-term support.</p>
    </div>

    <div class="flow-grid">
      <div class="flow-line" aria-hidden="true"></div>
      <div class="flow-step reveal" data-d="1">
        <div class="flow-badge"><span class="fnum">01</span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18h6M10 22h4M12 2a7 7 0 00-4 12.7c.6.5 1 1.3 1 2.1h6c0-.8.4-1.6 1-2.1A7 7 0 0012 2z"/></svg></div>
        <h4 data-zh="策略與概念">Strategy &amp; Concept</h4>
        <p data-zh="我們定義目標、受眾和使您脫穎而出的核心理念。">We define goals, audience, and the big idea that sets you apart.</p>
      </div>
      <div class="flow-step reveal" data-d="2">
        <div class="flow-badge"><span class="fnum">02</span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/><path d="M8 12l2 2 4-4"/></svg></div>
        <h4 data-zh="搜索引擎優化">SEO</h4>
        <p data-zh="我們建立曝光度，讓合適的人首先找到您。">We build visibility so the right people find you first.</p>
      </div>
      <div class="flow-step reveal" data-d="3">
        <div class="flow-badge"><span class="fnum">03</span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 18l6-6-6-6M8 6l-6 6 6 6"/></svg></div>
        <h4 data-zh="開發">Development</h4>
        <p data-zh="我們設計並開發快速、可靠、美觀的軟件。">We design and engineer fast, reliable, beautiful software.</p>
      </div>
      <div class="flow-step reveal" data-d="4">
        <div class="flow-badge"><span class="fnum">04</span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg></div>
        <h4 data-zh="測試與支持">Testing &amp; Supporting</h4>
        <p data-zh="我們嚴格測試，並在發布後長期持續支持。">We test rigorously and stay on, long after launch.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===== METRICS ===== -->
<section class="metrics section-pad">
  <svg width="0" height="0" style="position:absolute" aria-hidden="true"><defs><linearGradient id="goldgrad" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#5ab6e6"/><stop offset="1" stop-color="#156394"/></linearGradient></defs></svg>
  <div class="wrap metrics-inner">
    <div>
      <span class="eyebrow reveal" data-zh="我們做到了">We Make It</span>
      <h2 class="h-sec reveal" data-d="1" data-zh="一家<span class='text-grad'>交付成果</span>的軟件公司">A software company that <span class="text-grad">delivers results</span></h2>
      <p class="lead reveal" data-d="2" data-zh="我們為企業創建和管理高效能的社交媒體活動——數字說明一切。">We create and manage top-performing social media campaigns for businesses — and the numbers speak for themselves.</p>
      <div class="reveal" data-d="3" style="margin-top:28px">
        <a href="#contact" class="btn btn-primary" data-zh="立即開始活動">Start a Campaign
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
      </div>
    </div>
    <div class="ring-grid">
      <div class="metric reveal" data-d="1">
        <div class="gauge" data-val="95">
          <svg viewBox="0 0 120 120"><circle class="track" cx="60" cy="60" r="49"/><circle class="prog" cx="60" cy="60" r="49"/></svg>
          <div class="pct">0%</div>
        </div>
        <div class="mtext"><div class="mlabel" data-zh="Facebook行銷">Facebook Marketing</div><div class="msub" data-zh="觸及率與互動">Reach &amp; engagement</div></div>
      </div>
      <div class="metric reveal" data-d="2">
        <div class="gauge" data-val="88">
          <svg viewBox="0 0 120 120"><circle class="track" cx="60" cy="60" r="49"/><circle class="prog" cx="60" cy="60" r="49"/></svg>
          <div class="pct">0%</div>
        </div>
        <div class="mtext"><div class="mlabel" data-zh="Instagram行銷">Instagram Marketing</div><div class="msub" data-zh="內容與增長">Content &amp; growth</div></div>
      </div>
      <div class="metric reveal" data-d="3">
        <div class="gauge" data-val="92">
          <svg viewBox="0 0 120 120"><circle class="track" cx="60" cy="60" r="49"/><circle class="prog" cx="60" cy="60" r="49"/></svg>
          <div class="pct">0%</div>
        </div>
        <div class="mtext"><div class="mlabel" data-zh="搜索引擎優化">S.E.O</div><div class="msub" data-zh="搜索表現">Search performance</div></div>
      </div>
    </div>
  </div>
</section>

<!-- ===== OFFICES ===== -->
<section class="offices section-pad" id="offices">
  <div class="wrap">
    <div class="sec-head center">
      <span class="eyebrow center reveal" data-zh="我們的位置">Where We Are</span>
      <h2 class="h-sec reveal" data-d="1" data-zh="我們在<span class='text-grad'>全球的辦事處</span>">Our offices <span class="text-grad">around the world</span></h2>
      <p class="lead reveal" data-d="2" data-zh="橫跨亞洲三個樞紐，一支團隊——始終貼近您的業務。">Three hubs across Asia, one team — always close to your business.</p>
    </div>

    <div class="office-grid">
      <article class="office reveal" data-d="1">
        <span class="hq-tag">HQ</span>
        <span class="flag">🇲🇾</span>
        <div class="tag" data-zh="馬來西亞">Malaysia</div>
        <h3>Kuala Lumpur</h3>
        <p class="addr">Unit B1-8-1, Soho Suites KLCC,<br>Jalan Perak Off P. Ramlee,<br>50450 Kuala Lumpur</p>
        <div class="contact">
          <a href="tel:+60123939699"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3.1 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3.1-8.7A2 2 0 014.1 2h3a2 2 0 012 1.7c.1.9.3 1.8.6 2.7a2 2 0 01-.5 2.1L8.1 9.9a16 16 0 006 6l1.4-1.1a2 2 0 012.1-.5c.9.3 1.8.5 2.7.6a2 2 0 011.7 2z"/></svg>+60 12 393 9699</a>
          <a href="mailto:apphouse222@gmail.com"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-10 6L2 7"/></svg>apphouse222@gmail.com</a>
        </div>
      </article>

      <article class="office reveal" data-d="2">
        <span class="flag">🇸🇬</span>
        <div class="tag" data-zh="新加坡">Singapore</div>
        <h3>Singapore</h3>
        <p class="addr">2 Venture Drive,<br>#11-03 Vision Exchange,<br>Singapore 608526</p>
        <div class="contact">
          <a href="tel:+6568718812"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3.1 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3.1-8.7A2 2 0 014.1 2h3a2 2 0 012 1.7c.1.9.3 1.8.6 2.7a2 2 0 01-.5 2.1L8.1 9.9a16 16 0 006 6l1.4-1.1a2 2 0 012.1-.5c.9.3 1.8.5 2.7.6a2 2 0 011.7 2z"/></svg>+65 6871 8812</a>
          <a href="mailto:apphouse222@gmail.com"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-10 6L2 7"/></svg>apphouse222@gmail.com</a>
        </div>
      </article>

      <article class="office reveal" data-d="3">
        <span class="flag">🇭🇰</span>
        <div class="tag" data-zh="香港">Hong Kong</div>
        <h3>Hong Kong</h3>
        <p class="addr">441 Lockhart Road,<br>Causeway Bay,<br>Hong Kong</p>
        <div class="contact">
          <a href="tel:+85281764488"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.9v3a2 2 0 01-2.2 2 19.8 19.8 0 01-8.6-3.1 19.5 19.5 0 01-6-6 19.8 19.8 0 01-3.1-8.7A2 2 0 014.1 2h3a2 2 0 012 1.7c.1.9.3 1.8.6 2.7a2 2 0 01-.5 2.1L8.1 9.9a16 16 0 006 6l1.4-1.1a2 2 0 012.1-.5c.9.3 1.8.5 2.7.6a2 2 0 011.7 2z"/></svg>+852 8176 4488</a>
          <a href="mailto:apphouse222@gmail.com"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-10 6L2 7"/></svg>apphouse222@gmail.com</a>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- ===== TESTIMONIALS ===== -->
<section class="testi section-pad">
  <div class="wrap">
    <div class="sec-head center">
      <span class="eyebrow center reveal" data-zh="客戶評價">Testimonials</span>
      <h2 class="h-sec reveal" data-d="1" data-zh="我們的<span class='text-grad'>客戶怎麼說</span>">What our <span class="text-grad">clients say</span></h2>
    </div>

    <div class="testi-inner reveal" data-d="2">
      <div class="quote-mark" aria-hidden="true">&ldquo;</div>
      <div class="testi-track">
        <div class="testi-slide active">
          <blockquote data-zh="App House 從零開始重建了我們的網絡形象。幾個月內，我們的查詢量翻了一倍，我們終於排在了客戶能找到我們的位置。">App House rebuilt our online presence from the ground up. Within months our enquiries doubled and we finally rank where our customers can find us.</blockquote>
          <div class="testi-author">
            <span class="testi-ava" style="background:linear-gradient(135deg,#ffd06b,#ff8a1e)">AC</span>
            <span class="name">Angie Chong Wei Foon</span>
            <span class="stars">★★★★★</span>
          </div>
        </div>
        <div class="testi-slide">
          <blockquote data-zh="真正懂業務的可靠夥伴。他們的忠誠度軟件讓我們的客戶一再回來，發布後的支持也從未停止。">A reliable partner that truly understands business. Their loyalty software keeps our customers coming back, and the support never stops after launch.</blockquote>
          <div class="testi-author">
            <span class="testi-ava" style="background:linear-gradient(135deg,#38e6c4,#1aa88c)">DK</span>
            <span class="name">Dato K.K. Goh</span>
            <span class="stars">★★★★★</span>
          </div>
        </div>
        <div class="testi-slide">
          <blockquote data-zh="專業、迅速、真正有創意。團隊按時交付了精良的產品，並讓整個過程從始至終都輕鬆愉快。">Professional, responsive, and genuinely creative. The team delivered a polished product on time and made the whole process easy from start to finish.</blockquote>
          <div class="testi-author">
            <span class="testi-ava" style="background:linear-gradient(135deg,#6b9bff,#3a63c4)">CW</span>
            <span class="name">C.K. Wong</span>
            <span class="stars">★★★★★</span>
          </div>
        </div>
      </div>
      <div class="testi-nav">
        <button id="tPrev" aria-label="Previous testimonial"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg></button>
        <button id="tNext" aria-label="Next testimonial"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg></button>
      </div>
    </div>
  </div>
</section>

<!-- ===== BLOG ===== -->
<section class="blog section-pad" id="blog">
  <div class="wrap">
    <div class="sec-head center">
      <span class="eyebrow center reveal" data-zh="最新文章">Latest Articles</span>
      <h2 class="h-sec reveal" data-d="1" data-zh="部落格與<span class='text-grad'>新聞</span>">Blog &amp; <span class="text-grad">news</span></h2>
      <p class="lead reveal" data-d="2" data-zh="關於營銷、軟件及現代企業增長的見解。">Insights on marketing, software, and growing a modern business.</p>
    </div>

    <div class="blog-grid">
      <article class="post reveal" data-d="1" style="max-width:520px;margin:0 auto">
        <div class="pthumb" style="background:linear-gradient(135deg,#5ab6e6 0%,#1f85c1 42%,#156394 100%)">
          <img src="https://apphouse.hk/uploads/blogs/1760434768_b665aa552783.jpg" alt="UI UX Design Malaysia" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0" loading="lazy" onerror="this.style.display='none'">
          <span class="ptag" data-zh="最新動態">Latest Updates</span>
        </div>
        <div class="pbody">
          <div class="pmeta">
            <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>14 Oct 2025</span>
            <span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>App House</span>
          </div>
          <h3 data-zh="馬來西亞UI UX設計 &#8211; 以現代以用戶為中心的設計方案提升數字體驗">UI UX Design Malaysia &#8211; Elevate Digital Experiences with Modern, User-Centric Design Solutions</h3>
          <a href="blog.php" class="link-arrow pread" data-zh="閱讀更多">Read more<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- ===== CTA ===== -->
<section class="cta section-pad">
  <div class="wrap">
    <div class="cta-box reveal">
      <span class="cta-coins" style="top:18%;left:10%">🪙</span>
      <span class="cta-coins" style="top:62%;left:16%;animation-delay:1.2s">🪙</span>
      <span class="cta-coins" style="top:24%;right:12%;animation-delay:.6s">🪙</span>
      <span class="cta-coins" style="top:68%;right:9%;animation-delay:1.8s">🪙</span>
      <span class="eyebrow center" data-zh="立即開始">Get Started</span>
      <h2 data-zh="準備好打造您業務的未來了嗎？">Ready to build the future of your business?</h2>
      <p data-zh="讓我們將您的想法轉化為軟件，將您的受眾轉化為忠實客戶。告訴我們您正在做什麼。">Let's turn your ideas into software and your audience into loyal customers. Tell us what you're working on.</p>
      <div class="hero-cta">
        <a href="#contact" class="btn btn-primary btn-lg" data-zh="立即報名">Sign Up Today
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
        <a href="#portfolio" class="btn btn-ghost btn-lg" data-zh="查看我們的作品">See Our Work</a>
      </div>
    </div>
  </div>
</section>
</main>

<!-- ================= FOOTER ================= -->
<footer class="footer" id="contact">
  <div class="wrap">
    <div class="foot-top">
      <div class="foot-brand">
        <a href="#home" class="logo">
          <img src="uploads/apphouse.png" alt="App House Logo" style="height: 50px; width: auto;" />
        </a>
        <p data-zh="軟件開發、社交媒體管理與遊戲化增長。我們將您的業務目標轉化為客戶喜愛的體驗。">Software development, social media management & gamified growth. We turn your business goals into experiences your customers love.</p>
        <div class="foot-social">
          <a href="https://www.facebook.com/apphousemy/" target="_blank" rel="noopener" aria-label="Facebook">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M22 12a10 10 0 10-11.6 9.9v-7H7.9V12h2.5V9.8c0-2.5 1.5-3.9 3.8-3.9 1.1 0 2.2.2 2.2.2v2.5h-1.3c-1.2 0-1.6.8-1.6 1.6V12h2.8l-.4 2.9h-2.4v7A10 10 0 0022 12z"/></svg>
          </a>
          <a href="#" aria-label="Instagram">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
          </a>
          <a href="#" aria-label="LinkedIn">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M4.98 3.5a2.5 2.5 0 11-.02 5 2.5 2.5 0 01.02-5zM3 9h4v12H3zM10 9h3.8v1.7h.05c.53-1 1.83-2.05 3.77-2.05 4 0 4.75 2.65 4.75 6.1V21h-4v-5.4c0-1.3 0-3-1.8-3s-2.1 1.4-2.1 2.9V21h-4z"/></svg>
          </a>
        </div>
      </div>

      <div class="foot-col">
        <h5 data-zh="導航">Navigate</h5>
        <ul>
          <li><a href="#home" data-zh="首頁">Home</a></li>
          <li><a href="#about" data-zh="關於我們">About Us</a></li>
          <li><a href="#services" data-zh="服務">Services</a></li>
          <li><a href="#portfolio" data-zh="公司活動">Company Events</a></li>
          <li><a href="#blog" data-zh="部落格與新聞">Blog & News</a></li>
        </ul>
      </div>

      <div class="foot-col">
        <h5 data-zh="總部 · 吉隆坡">Headquarters · KL</h5>
        <address>
          Unit B1-8-1, Soho Suites KLCC,<br>Jalan Perak Off P. Ramlee,<br>50450 Kuala Lumpur
          <a href="tel:+601233939699">+60 12 393 9699</a>
          <a href="mailto:apphouse222@gmail.com">apphouse222@gmail.com</a>
        </address>
      </div>

      <div class="foot-col">
        <h5 data-zh="新加坡 · 香港">Singapore · Hong Kong</h5>
        <address>
          2 Venture Drive, #11-03 Vision Exchange, SG 608526
          <a href="tel:+6568718812">+65 6871 8812</a>
        </address>
        <address style="margin-top:14px">
          441 Lockhart Road, Causeway Bay, HK
          <a href="tel:+85281764488">+852 8176 4488</a>
        </address>
      </div>
    </div>

    <div class="foot-bottom">
      <span data-zh="App House Pte. Ltd. © 2026. 版權所有。">App House Pte. Ltd. © 2026. All rights reserved.</span>
      <div class="fb-links">
        <a href="#" data-zh="隱私政策">Privacy</a>
        <a href="#" data-zh="條款">Terms</a>
        <a href="https://www.facebook.com/apphousemy/" target="_blank" rel="noopener">Facebook</a>
      </div>
    </div>
  </div>
</footer>

<div class="team-modal" id="teamModal">
  <div class="team-modal-backdrop" id="modalBackdrop"></div>
  <div class="team-modal-content">
    <button class="team-modal-close" id="modalClose" aria-label="Close modal">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6L6 18M6 6l12 12"/></svg>
    </button>
    <div class="tm-img-wrap">
      <div class="tm-img" id="tmImg"></div>
    </div>
    <div class="tm-body">
      <div class="tm-role" id="tmRole"></div>
      <h3 class="tm-name" id="tmName"></h3>
      <div class="tm-desc" id="tmDesc"></div>
    </div>
  </div>
</div>

<button class="to-top" id="toTop" aria-label="Scroll to top">
  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M12 19V5M6 11l6-6 6 6"/></svg>
</button>
<div class="toast" id="toast"></div>

<!-- ================= SCRIPTS ================= -->
<script>
(function(){
  "use strict";
  var prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ---- header scroll state ---- */
  var header = document.getElementById('header');
  var toTop = document.getElementById('toTop');
  function onScroll(){
    var y = window.scrollY || window.pageYOffset;
    header.classList.toggle('scrolled', y > 30);
    toTop.classList.toggle('show', y > 600);
  }
  window.addEventListener('scroll', onScroll, {passive:true});
  onScroll();

  toTop.addEventListener('click', function(){
    window.scrollTo({top:0, behavior: prefersReduced ? 'auto' : 'smooth'});
  });

  /* ---- mobile drawer ---- */
  var burger = document.getElementById('burger');
  var drawer = document.getElementById('drawer');
  function setDrawer(open){
    burger.classList.toggle('open', open);
    drawer.classList.toggle('open', open);
    burger.setAttribute('aria-expanded', open ? 'true' : 'false');
    document.body.classList.toggle('no-scroll', open);
  }
  burger.addEventListener('click', function(){ setDrawer(!drawer.classList.contains('open')); });
  drawer.querySelectorAll('[data-close]').forEach(function(el){
    el.addEventListener('click', function(){ setDrawer(false); });
  });
  document.addEventListener('keydown', function(e){ if(e.key==='Escape') setDrawer(false); });

  /* ---- smooth-scroll with header offset ---- */
  document.querySelectorAll('a[href^="#"]').forEach(function(a){
    a.addEventListener('click', function(e){
      var id = a.getAttribute('href');
      if(id.length < 2) return;
      var target = document.querySelector(id);
      if(!target) return;
      e.preventDefault();
      var top = target.getBoundingClientRect().top + window.scrollY - 76;
      window.scrollTo({top:top, behavior: prefersReduced ? 'auto' : 'smooth'});
    });
  });

  /* ---- reveal on scroll ---- */
  var revealEls = document.querySelectorAll('.reveal');
  if('IntersectionObserver' in window && !prefersReduced){
    var ro = new IntersectionObserver(function(entries){
      entries.forEach(function(en){
        if(en.isIntersecting){ en.target.classList.add('in'); ro.unobserve(en.target); }
      });
    }, {threshold:0.12, rootMargin:'0px 0px -8% 0px'});
    revealEls.forEach(function(el){ ro.observe(el); });
  } else {
    revealEls.forEach(function(el){ el.classList.add('in'); });
  }

  /* ---- count-up stats ---- */
  function countUp(el){
    var target = parseFloat(el.dataset.count);
    var dec = (el.dataset.count.indexOf('.') > -1) ? 1 : 0;
    var dur = 1700, start = null;
    function step(ts){
      if(!start) start = ts;
      var p = Math.min((ts - start)/dur, 1);
      var eased = 1 - Math.pow(1-p, 3);
      el.textContent = (target*eased).toFixed(dec);
      if(p < 1) requestAnimationFrame(step);
      else el.textContent = (dec ? target.toFixed(dec) : target);
    }
    requestAnimationFrame(step);
  }
  var counted = new WeakSet();
  if('IntersectionObserver' in window){
    var co = new IntersectionObserver(function(entries){
      entries.forEach(function(en){
        if(en.isIntersecting && !counted.has(en.target)){
          counted.add(en.target);
          if(prefersReduced){ en.target.textContent = en.target.dataset.count; }
          else countUp(en.target);
          var box = en.target.closest('.stat-box'); if(box) box.classList.add('in');
        }
      });
    }, {threshold:0.5});
    document.querySelectorAll('[data-count]').forEach(function(el){ co.observe(el); });
  } else {
    document.querySelectorAll('[data-count]').forEach(function(el){ el.textContent = el.dataset.count; });
  }

  /* ---- gauges ---- */
  if('IntersectionObserver' in window){
    var go = new IntersectionObserver(function(entries){
      entries.forEach(function(en){
        if(en.isIntersecting){
          var prog = en.target.querySelector('.prog');
          var pctEl = en.target.querySelector('.pct');
          var val = parseInt(en.target.dataset.val,10);
          var circ = 308;
          prog.style.strokeDashoffset = circ - (circ*val/100);
          if(prefersReduced){ pctEl.textContent = val+'%'; }
          else {
            var s=null;
            (function anim(){
              requestAnimationFrame(function tick(ts){
                if(!s) s=ts; var p=Math.min((ts-s)/1500,1);
                pctEl.textContent = Math.round(val*(1-Math.pow(1-p,3)))+'%';
                if(p<1) requestAnimationFrame(tick);
              });
            })();
          }
          go.unobserve(en.target);
        }
      });
    }, {threshold:0.5});
    document.querySelectorAll('.gauge').forEach(function(el){ go.observe(el); });
  }

  /* ---- hero slider ---- */
  var heroSlides = document.querySelectorAll('.hero-slide');
  var heroDots = document.querySelectorAll('.hero-dots button');
  var hi = 0, heroTimer;
  function heroGo(n){
    heroSlides.forEach(function(s,i){ s.classList.toggle('active', i===n); });
    heroDots.forEach(function(d,i){ d.classList.toggle('active', i===n); });
    hi = n;
  }
  function heroNext(){ heroGo((hi+1)%heroSlides.length); }
  function heroStart(){ if(!prefersReduced && heroSlides.length>1) heroTimer = setInterval(heroNext, 5200); }
  function heroReset(){ clearInterval(heroTimer); heroStart(); }
  heroDots.forEach(function(d,i){ d.addEventListener('click', function(){ heroGo(i); heroReset(); }); });
  heroStart();

  /* ---- events gallery filter ---- */
  var fBtns = document.querySelectorAll('.filter-btn');
  var ePhotos = document.querySelectorAll('.event-photo');
  fBtns.forEach(function(btn){
    btn.addEventListener('click', function(){
      fBtns.forEach(function(b){ b.classList.remove('active'); });
      btn.classList.add('active');
      var cat = btn.dataset.filter;
      ePhotos.forEach(function(it){
        var show = (cat==='all' || it.dataset.cat===cat);
        it.classList.toggle('hide', !show);
      });
    });
  });

  /* ---- lightbox ---- */
  var lb = document.getElementById('lb');
  var lbImg = document.getElementById('lbImg');
  var lbCap = document.getElementById('lbCap');
  var lbCtr = document.getElementById('lbCtr');
  var lbClose = document.getElementById('lbClose');
  var lbPrev = document.getElementById('lbPrev');
  var lbNext = document.getElementById('lbNext');
  var lbPhotos = [], lbIdx = 0;

  function buildLbPhotos(){
    lbPhotos = Array.from(document.querySelectorAll('.event-photo:not(.hide)'));
  }

  function lbOpen(idx){
    buildLbPhotos();
    lbIdx = idx;
    var ph = lbPhotos[lbIdx];
    lbImg.src = ph.dataset.lbsrc;
    lbImg.alt = ph.dataset.lbcap || '';
    lbCap.textContent = ph.dataset.lbcap || '';
    lbCtr.textContent = (lbIdx+1) + ' / ' + lbPhotos.length;
    lb.classList.add('open');
    document.body.classList.add('no-scroll');
  }
  function lbClose_fn(){
    lb.classList.remove('open');
    document.body.classList.remove('no-scroll');
  }
  function lbGo(dir){
    lbIdx = (lbIdx + dir + lbPhotos.length) % lbPhotos.length;
    var ph = lbPhotos[lbIdx];
    lbImg.src = ph.dataset.lbsrc;
    lbImg.alt = ph.dataset.lbcap || '';
    lbCap.textContent = ph.dataset.lbcap || '';
    lbCtr.textContent = (lbIdx+1) + ' / ' + lbPhotos.length;
  }

  ePhotos.forEach(function(ph, i){
    ph.addEventListener('click', function(){ lbOpen(Array.from(document.querySelectorAll('.event-photo:not(.hide)')).indexOf(ph)); });
  });
  if(lbClose) lbClose.addEventListener('click', lbClose_fn);
  if(lbPrev) lbPrev.addEventListener('click', function(){ lbGo(-1); });
  if(lbNext) lbNext.addEventListener('click', function(){ lbGo(1); });
  lb && lb.addEventListener('click', function(e){ if(e.target===lb) lbClose_fn(); });
  document.addEventListener('keydown', function(e){
    if(!lb || !lb.classList.contains('open')) return;
    if(e.key==='Escape') lbClose_fn();
    if(e.key==='ArrowLeft') lbGo(-1);
    if(e.key==='ArrowRight') lbGo(1);
  });

  /* ---- testimonials ---- */
  var tSlides = document.querySelectorAll('.testi-slide');
  var ti = 0, tTimer;
  function tGo(n){
    if(n<0) n = tSlides.length-1;
    if(n>=tSlides.length) n = 0;
    tSlides.forEach(function(s,i){ s.classList.toggle('active', i===n); });
    ti = n;
  }
  function tStart(){ if(!prefersReduced && tSlides.length>1) tTimer = setInterval(function(){ tGo(ti+1); }, 6500); }
  function tReset(){ clearInterval(tTimer); tStart(); }
  var tPrev = document.getElementById('tPrev'), tNext = document.getElementById('tNext');
  if(tPrev) tPrev.addEventListener('click', function(){ tGo(ti-1); tReset(); });
  if(tNext) tNext.addEventListener('click', function(){ tGo(ti+1); tReset(); });
  tStart();

  /* ---- intro word rotator ---- */
  var rotWords = ['a Software Development Company.','a Social Media Partner.','your Growth Engine.']; /* mutated by applyLang */
  var rotEl = document.getElementById('rotWord');
  if(rotEl && !prefersReduced){
    var wi = 0;
    setInterval(function(){
      wi = (wi+1)%rotWords.length;
      rotEl.style.opacity = 0;
      setTimeout(function(){ rotEl.textContent = rotWords[wi]; rotEl.style.opacity = 1; }, 300);
    }, 2800);
  }

  /* ---- language switcher ---- */
  var zhRotWords = ['一家軟件開發公司。','您的社交媒體夥伴。','您的增長引擎。'];
  var enRotWords = ['a Software Development Company.','a Social Media Partner.','your Growth Engine.'];

  function applyLang(lang){
    document.querySelectorAll('[data-zh]').forEach(function(el){
      if(!el.getAttribute('data-en')) el.setAttribute('data-en', el.innerHTML);
      el.innerHTML = (lang==='zh') ? el.getAttribute('data-zh') : el.getAttribute('data-en');
    });
    document.querySelectorAll('.lang-toggle button').forEach(function(b){
      b.classList.toggle('active', b.dataset.lang===lang);
    });
    rotWords = (lang==='zh') ? zhRotWords : enRotWords;
    localStorage.setItem('apphouse-lang', lang);
  }

  document.querySelectorAll('.lang-toggle').forEach(function(grp){
    grp.querySelectorAll('button').forEach(function(b){
      b.addEventListener('click', function(){ applyLang(b.dataset.lang); });
    });
  });

  var savedLang = localStorage.getItem('apphouse-lang');
  if(savedLang==='zh') applyLang('zh');
  
  /* ---- Team Modal Interaction ---- */
  var members = document.querySelectorAll('.member');
  var teamModal = document.getElementById('teamModal');
  var modalBackdrop = document.getElementById('modalBackdrop');
  var modalClose = document.getElementById('modalClose');
  var tmImg = document.getElementById('tmImg');
  var tmRole = document.getElementById('tmRole');
  var tmName = document.getElementById('tmName');
  var tmDesc = document.getElementById('tmDesc');

  if(teamModal) {
    function openTeamModal(el) {
      tmImg.style.backgroundImage = "url('" + el.dataset.img + "')";
      tmRole.textContent = el.dataset.role;
      tmName.textContent = el.dataset.name;
      tmDesc.innerHTML = el.dataset.desc;
      teamModal.classList.add('open');
      document.body.classList.add('no-scroll');
    }
    function closeTeamModal() {
      teamModal.classList.remove('open');
      document.body.classList.remove('no-scroll');
    }
    members.forEach(function(m) {
      m.addEventListener('click', function() { openTeamModal(m); });
    });
    modalClose.addEventListener('click', closeTeamModal);
    modalBackdrop.addEventListener('click', closeTeamModal);
    
    // Close on escape key
    document.addEventListener('keydown', function(e){
      if(e.key === 'Escape' && teamModal.classList.contains('open')) closeTeamModal();
    });
  }
})();
</script>

</body>
</html>