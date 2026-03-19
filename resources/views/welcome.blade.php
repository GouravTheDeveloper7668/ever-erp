<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Everthings Solutions Pvt. Ltd. | IT Services & Software | Ranchi, Jharkhand</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
/* ─── TOKENS ─────────────────────────────────────────── */
:root{
  --yellow:#F5A800;
  --yellow-deep:#D48900;
  --yellow-pale:#FFF7E6;
  --yellow-light:#FEF0C7;
  --blue:#0A2D6B;
  --blue-mid:#1A4499;
  --blue-light:#EEF3FF;
  --green:#1A6B3A;
  --green-mid:#228B4A;
  --green-light:#E8F5ED;
  --cream:#FDFAF4;
  --white:#FFFFFF;
  --text:#1A1A2E;
  --text-mid:#3D3D5C;
  --text-soft:#6B6B8A;
  --border:#E8E2D4;
  --shadow-sm:0 2px 12px rgba(10,45,107,.08);
  --shadow-md:0 8px 32px rgba(10,45,107,.12);
  --shadow-lg:0 20px 60px rgba(10,45,107,.16);
  --r:12px;
}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{font-family:'Plus Jakarta Sans',sans-serif;background:var(--cream);color:var(--text);overflow-x:hidden;line-height:1.6}
::-webkit-scrollbar{width:5px}
::-webkit-scrollbar-track{background:#f0ece2}
::-webkit-scrollbar-thumb{background:var(--yellow);border-radius:4px}
img,svg{max-width:100%}
a{text-decoration:none;color:inherit}

/* ─── UTILITIES ─────────────────────────────── */
.container{max-width:1240px;margin:0 auto;padding:0 1.75rem}
.section-eyebrow{display:inline-flex;align-items:center;gap:.5rem;font-size:.72rem;font-weight:700;letter-spacing:.16em;text-transform:uppercase;padding:.35rem .9rem;border-radius:50px;margin-bottom:1rem}
.eyebrow-yellow{background:var(--yellow-light);color:var(--yellow-deep);border:1px solid #F5C452}
.eyebrow-blue{background:var(--blue-light);color:var(--blue);border:1px solid #B8CCFF}
.eyebrow-green{background:var(--green-light);color:var(--green);border:1px solid #A0D4B4}
.section-title{font-family:'Playfair Display',serif;font-size:clamp(2rem,4vw,2.85rem);font-weight:800;line-height:1.1;letter-spacing:-.02em;color:var(--blue);margin-bottom:1.1rem}
.section-title span{color:var(--yellow-deep)}
.section-title em{font-style:normal;color:var(--green)}
.section-sub{font-size:1rem;color:var(--text-soft);line-height:1.8;max-width:560px;font-weight:400}
.tc{text-align:center}.tc .section-sub{margin:0 auto}

/* ─── BUTTONS ───────────────────────────────── */
.btn{display:inline-flex;align-items:center;gap:.55rem;font-family:'Plus Jakarta Sans',sans-serif;font-weight:700;font-size:.9rem;padding:.8rem 1.75rem;border-radius:var(--r);border:none;cursor:pointer;transition:all .25s;text-decoration:none;letter-spacing:.01em}
.btn-yellow{background:var(--yellow);color:var(--blue);}
.btn-yellow:hover{background:var(--yellow-deep);transform:translateY(-2px);box-shadow:0 8px 24px rgba(245,168,0,.35)}
.btn-blue{background:var(--blue);color:#fff}
.btn-blue:hover{background:var(--blue-mid);transform:translateY(-2px);box-shadow:0 8px 24px rgba(10,45,107,.3)}
.btn-outline-blue{background:transparent;color:var(--blue);border:2px solid var(--blue)}
.btn-outline-blue:hover{background:var(--blue);color:#fff;transform:translateY(-2px)}
.btn-outline-yellow{background:transparent;color:var(--yellow-deep);border:2px solid var(--yellow)}
.btn-outline-yellow:hover{background:var(--yellow);color:var(--blue)}
.btn-green{background:var(--green);color:#fff}
.btn-green:hover{background:var(--green-mid);transform:translateY(-2px);box-shadow:0 8px 24px rgba(26,107,58,.3)}
.btn-lg{padding:1rem 2.25rem;font-size:1rem}

/* ─── HEADER ────────────────────────────────── */
header{position:fixed;top:0;left:0;right:0;z-index:900;background:rgba(253,250,244,.96);border-bottom:1px solid var(--border);backdrop-filter:blur(12px);transition:box-shadow .3s}
header.scrolled{box-shadow:var(--shadow-md)}
.hdr-inner{display:flex;align-items:center;justify-content:space-between;height:72px}
.logo{display:flex;align-items:center;gap:.7rem}
.logo-mark{width:42px;height:42px;flex-shrink:0}
.logo-words{display:flex;flex-direction:column;line-height:1.15}
.logo-words strong{font-family:'Playfair Display',serif;font-size:1.15rem;font-weight:800;color:var(--blue)}
.logo-words span{font-size:.6rem;letter-spacing:.15em;text-transform:uppercase;color:var(--yellow-deep);font-weight:700}
nav{display:flex;align-items:center;gap:.15rem}
nav a{font-size:.875rem;font-weight:600;color:var(--text-mid);padding:.5rem .9rem;border-radius:8px;transition:all .2s;white-space:nowrap}
nav a:hover,nav a.active{color:var(--blue);background:var(--blue-light)}
.hdr-cta{margin-left:.5rem}
.ham{display:none;flex-direction:column;gap:5px;cursor:pointer;padding:.5rem;border:none;background:none}
.ham span{width:22px;height:2px;background:var(--blue);border-radius:2px;transition:.3s}
.mob-nav{display:none;position:fixed;top:72px;left:0;right:0;background:var(--white);border-bottom:2px solid var(--border);padding:1rem 1.75rem 1.5rem;z-index:899;flex-direction:column;gap:.4rem;box-shadow:var(--shadow-lg)}
.mob-nav a{font-size:.95rem;font-weight:600;color:var(--text-mid);padding:.75rem 1rem;border-radius:8px;transition:.2s}
.mob-nav a:hover{background:var(--blue-light);color:var(--blue)}
.mob-nav.open{display:flex}

/* ─── HERO ──────────────────────────────────── */
.hero{padding:140px 0 80px;background:var(--white);position:relative;overflow:hidden}
.hero::before{content:'';position:absolute;top:0;right:0;width:55%;height:100%;background:linear-gradient(135deg,var(--blue-light) 0%,var(--yellow-pale) 100%);clip-path:polygon(12% 0,100% 0,100% 100%,0% 100%);z-index:0}
.hero::after{content:'';position:absolute;top:0;right:0;width:55%;height:100%;background:url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%230A2D6B' fill-opacity='0.04'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");clip-path:polygon(12% 0,100% 0,100% 100%,0% 100%);z-index:0}
.hero-inner{display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center;position:relative;z-index:1}
.hero-tag{display:inline-flex;align-items:center;gap:.5rem;background:var(--yellow-light);border:1px solid var(--yellow);color:var(--yellow-deep);font-size:.75rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;padding:.4rem 1rem;border-radius:50px;margin-bottom:1.5rem}
.hero-tag i{font-size:.6rem;animation:blink 1.8s infinite}
@keyframes blink{0%,100%{opacity:1}50%{opacity:.3}}
h1.hero-h1{font-family:'Playfair Display',serif;font-size:clamp(2.4rem,4.8vw,3.6rem);font-weight:900;line-height:1.08;letter-spacing:-.025em;color:var(--blue);margin-bottom:1.5rem}
h1.hero-h1 .accent-y{color:var(--yellow-deep)}
h1.hero-h1 .accent-g{color:var(--green)}
.hero-desc{font-size:1.05rem;color:var(--text-soft);line-height:1.8;margin-bottom:2rem;max-width:480px}
.hero-btns{display:flex;gap:.9rem;flex-wrap:wrap;margin-bottom:2.5rem}
.hero-kpis{display:flex;gap:2rem}
.kpi{display:flex;flex-direction:column}
.kpi-n{font-family:'Playfair Display',serif;font-size:2rem;font-weight:900;color:var(--blue);line-height:1}
.kpi-l{font-size:.72rem;color:var(--text-soft);text-transform:uppercase;letter-spacing:.1em;margin-top:.2rem}
.kpi-sep{width:1px;background:var(--border)}
/* hero illustration */
.hero-visual{position:relative;animation:floatIn 1s ease both}
@keyframes floatIn{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:translateY(0)}}
.hero-card{background:var(--white);border-radius:16px;padding:1.25rem 1.5rem;box-shadow:var(--shadow-md);border:1px solid var(--border)}
.hero-card-top{display:flex;align-items:center;gap:.6rem;margin-bottom:.75rem}
.hc-dot{width:10px;height:10px;border-radius:50%}
.hero-bars{display:flex;flex-direction:column;gap:.5rem}
.bar-row{display:flex;align-items:center;gap:.75rem}
.bar-lbl{font-size:.72rem;font-weight:600;color:var(--text-soft);width:60px;flex-shrink:0}
.bar-track{flex:1;height:8px;background:#EEF3FF;border-radius:4px;overflow:hidden}
.bar-fill{height:100%;border-radius:4px;transition:width 1.2s ease}
.bar-val{font-size:.72rem;font-weight:700;color:var(--blue);width:32px;text-align:right;flex-shrink:0}
.hero-float-card{position:absolute;background:var(--white);border-radius:12px;box-shadow:var(--shadow-md);border:1px solid var(--border);padding:1rem 1.25rem}
.hfc1{top:-24px;right:0;width:168px;animation:fc1 4s ease-in-out infinite}
.hfc2{bottom:16px;left:-32px;width:160px;animation:fc2 5s ease-in-out infinite}
@keyframes fc1{0%,100%{transform:translateY(0)}50%{transform:translateY(-10px)}}
@keyframes fc2{0%,100%{transform:translateY(0)}50%{transform:translateY(8px)}}
.hfc-label{font-size:.65rem;font-weight:700;text-transform:uppercase;letter-spacing:.1em;color:var(--text-soft);margin-bottom:.35rem}
.hfc-val{font-family:'Playfair Display',serif;font-size:1.6rem;font-weight:900;color:var(--blue);line-height:1}
.hfc-sub{font-size:.68rem;color:var(--green);font-weight:600;margin-top:.2rem}

/* ─── TICKER ────────────────────────────────── */
.ticker{background:var(--blue);padding:.6rem 0;overflow:hidden}
.tick-track{display:flex;width:max-content;animation:tick 22s linear infinite}
.tick-track span{padding:0 2rem;font-size:.78rem;font-weight:600;color:rgba(255,255,255,.85);text-transform:uppercase;letter-spacing:.1em;white-space:nowrap;display:flex;align-items:center;gap:.75rem}
.tick-track span::after{content:'◈';color:var(--yellow);font-size:.5rem}
@keyframes tick{from{transform:translateX(0)}to{transform:translateX(-50%)}}

/* ─── SERVICES ──────────────────────────────── */
.services{padding:6rem 0;background:var(--cream)}
.svc-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;margin-top:3rem}
.svc-card{background:var(--white);border:1.5px solid var(--border);border-radius:18px;padding:2rem;transition:all .3s;position:relative;overflow:hidden}
.svc-card::after{content:'';position:absolute;bottom:0;left:0;right:0;height:3px;border-radius:0 0 18px 18px;background:var(--yellow);transform:scaleX(0);transform-origin:left;transition:transform .35s}
.svc-card:hover{transform:translateY(-6px);box-shadow:var(--shadow-lg);border-color:var(--yellow)}
.svc-card:hover::after{transform:scaleX(1)}
.svc-icon{width:54px;height:54px;border-radius:14px;display:flex;align-items:center;justify-content:center;font-size:1.4rem;margin-bottom:1.4rem;flex-shrink:0}
.ic-y{background:var(--yellow-light);color:var(--yellow-deep)}
.ic-b{background:var(--blue-light);color:var(--blue)}
.ic-g{background:var(--green-light);color:var(--green)}
.svc-card h3{font-family:'Playfair Display',serif;font-size:1.15rem;font-weight:700;color:var(--blue);margin-bottom:.6rem}
.svc-card p{font-size:.875rem;color:var(--text-soft);line-height:1.75}
.svc-tags{display:flex;flex-wrap:wrap;gap:.4rem;margin-top:1.1rem}
.stag{font-size:.68rem;font-weight:600;padding:.25rem .6rem;border-radius:50px;background:var(--blue-light);color:var(--blue);border:1px solid #C8D8FF}

/* ─── CAROUSEL TECH ─────────────────────────── */
.tech-bar{background:var(--white);padding:2.5rem 0;border-top:1px solid var(--border);border-bottom:1px solid var(--border);overflow:hidden;position:relative}
.tech-bar::before,.tech-bar::after{content:'';position:absolute;top:0;bottom:0;width:120px;z-index:2}
.tech-bar::before{left:0;background:linear-gradient(90deg,var(--white),transparent)}
.tech-bar::after{right:0;background:linear-gradient(-90deg,var(--white),transparent)}
.tech-track{display:flex;width:max-content;gap:1.5rem;animation:techScroll 22s linear infinite}
.tech-item{background:var(--cream);border:1.5px solid var(--border);border-radius:10px;padding:.75rem 1.4rem;display:flex;align-items:center;gap:.65rem;white-space:nowrap;flex-shrink:0;transition:.25s}
.tech-item:hover{border-color:var(--yellow);background:var(--yellow-pale);transform:translateY(-2px)}
.tech-item i{font-size:1.1rem;color:var(--blue)}
.tech-item span{font-size:.82rem;font-weight:600;color:var(--text-mid)}
@keyframes techScroll{from{transform:translateX(0)}to{transform:translateX(-50%)}}

/* ─── PRODUCTS ──────────────────────────────── */
.products{padding:6rem 0;background:var(--blue)}
.products .section-title{color:var(--white)}
.products .section-title span{color:var(--yellow)}
.products .section-sub{color:rgba(255,255,255,.65)}
.prod-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:1.5rem;margin-top:3rem}
.prod-card{background:rgba(255,255,255,.06);border:1.5px solid rgba(255,255,255,.12);border-radius:20px;padding:2.25rem;transition:.35s;position:relative;overflow:hidden}
.prod-card::before{content:'';position:absolute;top:-80px;right:-80px;width:220px;height:220px;border-radius:50%;background:radial-gradient(circle,rgba(245,168,0,.12),transparent 65%)}
.prod-card:hover{background:rgba(255,255,255,.1);border-color:rgba(245,168,0,.4);transform:translateY(-5px);box-shadow:0 20px 50px rgba(0,0,0,.25)}
.prod-badge{display:inline-flex;align-items:center;gap:.4rem;background:rgba(245,168,0,.15);border:1px solid rgba(245,168,0,.3);color:var(--yellow);font-size:.68rem;font-weight:700;text-transform:uppercase;letter-spacing:.1em;padding:.28rem .7rem;border-radius:50px;margin-bottom:1.1rem}
.prod-icon-box{width:58px;height:58px;border-radius:16px;display:flex;align-items:center;justify-content:center;font-size:1.7rem;margin-bottom:1.1rem}
.pb-yellow{background:rgba(245,168,0,.15);border:1px solid rgba(245,168,0,.25)}
.pb-green{background:rgba(26,107,58,.25);border:1px solid rgba(46,204,113,.2)}
.prod-card h3{font-family:'Playfair Display',serif;font-size:1.5rem;font-weight:800;color:var(--white);margin-bottom:.3rem}
.prod-card h4{font-size:.75rem;text-transform:uppercase;letter-spacing:.12em;color:var(--yellow);font-weight:700;margin-bottom:.9rem}
.prod-card p{font-size:.875rem;color:rgba(255,255,255,.6);line-height:1.75;margin-bottom:1.4rem}
.prod-features{display:flex;flex-direction:column;gap:.5rem}
.pf-item{display:flex;align-items:center;gap:.6rem;font-size:.82rem;color:rgba(255,255,255,.75)}
.pf-item i{color:var(--yellow);font-size:.7rem;width:14px;flex-shrink:0}
.prod-link{display:inline-flex;align-items:center;gap:.45rem;color:var(--yellow);font-size:.82rem;font-weight:700;text-decoration:none;margin-top:1.5rem;transition:.2s}
.prod-link:hover{gap:.8rem}

/* ─── ABOUT ─────────────────────────────────── */
.about{padding:6rem 0;background:var(--white)}
.about-wrap{display:grid;grid-template-columns:1fr 1fr;gap:5rem;align-items:center}
.about-svg-wrap{position:relative;border-radius:24px;overflow:hidden;border:1.5px solid var(--border);box-shadow:var(--shadow-lg)}
.about-badge{position:absolute;bottom:-16px;right:-16px;background:var(--yellow);border-radius:16px;padding:1.25rem;text-align:center;box-shadow:0 8px 24px rgba(245,168,0,.3);min-width:110px}
.ab-n{font-family:'Playfair Display',serif;font-size:2.2rem;font-weight:900;color:var(--blue);line-height:1}
.ab-l{font-size:.65rem;font-weight:700;text-transform:uppercase;letter-spacing:.06em;color:var(--blue);margin-top:.2rem}
.about-text h2{margin-bottom:1rem}
.about-text p{font-size:.93rem;color:var(--text-soft);line-height:1.85;margin-bottom:.9rem}
.about-vals{display:grid;grid-template-columns:1fr 1fr;gap:1rem;margin-top:1.75rem}
.aval{background:var(--cream);border:1.5px solid var(--border);border-radius:12px;padding:1.25rem;transition:.3s}
.aval:hover{border-color:var(--yellow);background:var(--yellow-pale);transform:translateY(-3px)}
.aval i{font-size:1.2rem;margin-bottom:.55rem;display:block}
.aval.av-y i{color:var(--yellow-deep)}
.aval.av-b i{color:var(--blue)}
.aval.av-g i{color:var(--green)}
.aval h4{font-family:'Playfair Display',serif;font-size:.95rem;font-weight:700;color:var(--blue);margin-bottom:.3rem}
.aval p{font-size:.78rem;color:var(--text-soft);line-height:1.6;margin:0}

/* ─── TESTIMONIALS ───────────────────────────── */
.testi{padding:6rem 0;background:var(--cream)}
.testi-wrap{margin-top:3rem;position:relative;overflow:hidden}
.testi-track{display:flex;transition:transform .6s cubic-bezier(.25,.1,.25,1)}
.testi-slide{min-width:100%}
.testi-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem}
.tc-card{background:var(--white);border:1.5px solid var(--border);border-radius:18px;padding:1.75rem;transition:.3s;position:relative}
.tc-card:hover{box-shadow:var(--shadow-md);border-color:var(--yellow);transform:translateY(-4px)}
.tc-card .quote-mark{font-family:Georgia,serif;font-size:3.5rem;color:var(--yellow-light);line-height:.8;margin-bottom:.5rem;display:block}
.stars{color:var(--yellow);font-size:.85rem;letter-spacing:.1em;margin-bottom:.75rem}
.tc-text{font-size:.875rem;color:var(--text-mid);line-height:1.8;font-style:italic;margin-bottom:1.25rem}
.tc-author{display:flex;align-items:center;gap:.75rem}
.tc-av{width:42px;height:42px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-family:'Playfair Display',serif;font-weight:900;font-size:.95rem;color:var(--white);flex-shrink:0}
.av-y{background:var(--yellow-deep)}
.av-b{background:var(--blue)}
.av-g{background:var(--green)}
.tc-author-name{font-size:.88rem;font-weight:700;color:var(--blue)}
.tc-author-role{font-size:.73rem;color:var(--text-soft);margin-top:.1rem}
.testi-ctrl{display:flex;align-items:center;justify-content:center;gap:1rem;margin-top:2.5rem}
.tctrl-btn{width:42px;height:42px;border-radius:50%;border:1.5px solid var(--border);background:var(--white);color:var(--blue);cursor:pointer;display:flex;align-items:center;justify-content:center;transition:.25s;font-size:.85rem}
.tctrl-btn:hover{background:var(--blue);color:var(--white);border-color:var(--blue)}
.tctrl-dots{display:flex;gap:.5rem}
.td{width:8px;height:8px;border-radius:50%;background:var(--border);cursor:pointer;transition:.3s}
.td.on{background:var(--yellow);width:24px;border-radius:4px}

/* ─── BANNER CTA ─────────────────────────────── */
.cta-banner{background:linear-gradient(120deg,var(--green) 0%,var(--green-mid) 55%,#1D7A3F 100%);padding:4.5rem 0;position:relative;overflow:hidden}
.cta-banner::before{content:'';position:absolute;top:-100px;right:-100px;width:400px;height:400px;border-radius:50%;background:rgba(255,255,255,.05)}
.cta-banner::after{content:'';position:absolute;bottom:-80px;left:10%;width:260px;height:260px;border-radius:50%;background:rgba(0,0,0,.06)}
.cta-inner{position:relative;z-index:1;display:flex;align-items:center;justify-content:space-between;gap:2.5rem;flex-wrap:wrap}
.cta-inner h2{font-family:'Playfair Display',serif;font-size:clamp(1.6rem,3.5vw,2.4rem);font-weight:900;color:var(--white);margin-bottom:.6rem}
.cta-inner p{font-size:.97rem;color:rgba(255,255,255,.75);line-height:1.7}
.cta-btns{display:flex;gap:1rem;flex-wrap:wrap;flex-shrink:0}

/* ─── CONTACT ────────────────────────────────── */
.contact{padding:6rem 0;background:var(--white)}
.contact-wrap{display:grid;grid-template-columns:1fr 1.25fr;gap:4rem;margin-top:3rem}
.cinfo-items{display:flex;flex-direction:column;gap:1.25rem}
.cinfo-item{display:flex;gap:1rem;padding:1.4rem;background:var(--cream);border:1.5px solid var(--border);border-radius:14px;transition:.3s}
.cinfo-item:hover{border-color:var(--yellow);background:var(--yellow-pale);transform:translateX(4px)}
.cinfo-icon{width:44px;height:44px;border-radius:11px;display:flex;align-items:center;justify-content:center;font-size:1.05rem;flex-shrink:0}
.ci-y{background:var(--yellow-light);color:var(--yellow-deep);border:1px solid var(--yellow)}
.ci-b{background:var(--blue-light);color:var(--blue);border:1px solid #B8CCFF}
.ci-g{background:var(--green-light);color:var(--green);border:1px solid #A0D4B4}
.cinfo-text h4{font-size:.78rem;font-weight:700;text-transform:uppercase;letter-spacing:.1em;color:var(--yellow-deep);margin-bottom:.3rem}
.cinfo-text p,.cinfo-text a{font-size:.88rem;color:var(--text-mid);line-height:1.65;transition:.2s}
.cinfo-text a:hover{color:var(--blue)}
.map-box{margin-top:1.5rem;border-radius:14px;overflow:hidden;border:1.5px solid var(--border);height:240px}
.map-box iframe{width:100%;height:100%;border:none}
/* form */
.cform{background:var(--cream);border:1.5px solid var(--border);border-radius:20px;padding:2.5rem}
.cform h3{font-family:'Playfair Display',serif;font-size:1.4rem;font-weight:800;color:var(--blue);margin-bottom:1.75rem}
.frow{display:grid;grid-template-columns:1fr 1fr;gap:1rem}
.fg{display:flex;flex-direction:column;gap:.45rem;margin-bottom:.9rem}
.fg label{font-size:.74rem;font-weight:700;text-transform:uppercase;letter-spacing:.09em;color:var(--text-soft)}
.fg input,.fg select,.fg textarea{background:var(--white);border:1.5px solid var(--border);color:var(--text);font-family:'Plus Jakarta Sans',sans-serif;font-size:.9rem;padding:.8rem 1rem;border-radius:10px;outline:none;transition:.25s;width:100%}
.fg input:focus,.fg select:focus,.fg textarea:focus{border-color:var(--yellow);box-shadow:0 0 0 3px rgba(245,168,0,.12)}
.fg input::placeholder,.fg textarea::placeholder{color:#BBBAC8}
.fg select option{background:var(--white);color:var(--text)}
.fg textarea{resize:vertical;min-height:105px}

/* ─── POLICY ─────────────────────────────────── */
.policy{padding:5rem 0;background:var(--cream)}
.pol-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.25rem;margin-top:2.75rem}
.pol-card{background:var(--white);border:1.5px solid var(--border);border-radius:16px;padding:1.75rem;transition:.3s}
.pol-card:hover{border-color:var(--blue);box-shadow:var(--shadow-md);transform:translateY(-4px)}
.pol-card i{font-size:1.4rem;margin-bottom:.9rem;display:block}
.pol-ic-y{color:var(--yellow-deep)}
.pol-ic-b{color:var(--blue)}
.pol-ic-g{color:var(--green)}
.pol-card h3{font-family:'Playfair Display',serif;font-size:1rem;font-weight:700;color:var(--blue);margin-bottom:.6rem}
.pol-card p{font-size:.82rem;color:var(--text-soft);line-height:1.75}

/* ─── FOOTER ─────────────────────────────────── */
footer{background:var(--blue);padding:4rem 0 0}
.footer-grid{display:grid;grid-template-columns:2fr 1fr 1fr 1.2fr;gap:2.5rem;margin-bottom:2.5rem}
.fb-brand p{font-size:.85rem;color:rgba(255,255,255,.5);line-height:1.8;margin:1.1rem 0 1.5rem;max-width:280px}
.soc-links{display:flex;gap:.55rem}
.soc-a{width:36px;height:36px;border-radius:9px;background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.12);display:flex;align-items:center;justify-content:center;color:rgba(255,255,255,.6);transition:.25s;font-size:.85rem}
.soc-a:hover{background:var(--yellow);color:var(--blue);border-color:var(--yellow);transform:translateY(-2px)}
.fc h4{font-size:.75rem;font-weight:700;text-transform:uppercase;letter-spacing:.14em;color:var(--yellow);margin-bottom:1.1rem}
.fl{display:flex;flex-direction:column;gap:.55rem}
.fl a{font-size:.84rem;color:rgba(255,255,255,.5);transition:.2s;display:flex;align-items:center;gap:.4rem}
.fl a::before{content:'→';opacity:0;transform:translateX(-4px);transition:.2s;color:var(--yellow);font-size:.7rem}
.fl a:hover{color:var(--yellow);padding-left:.3rem}
.fl a:hover::before{opacity:1;transform:translateX(0)}
.fci{display:flex;gap:.7rem;align-items:flex-start;margin-bottom:.85rem}
.fci i{color:var(--yellow);font-size:.8rem;margin-top:.25rem;flex-shrink:0}
.fci span{font-size:.82rem;color:rgba(255,255,255,.5);line-height:1.6}
.footer-bottom{border-top:1px solid rgba(255,255,255,.1);padding:1.4rem 0;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:1rem}
.footer-bottom p{font-size:.78rem;color:rgba(255,255,255,.3)}
.footer-bottom a{color:var(--yellow)}
.footer-tags{display:flex;gap:.75rem;flex-wrap:wrap}
.footer-tags span{font-size:.7rem;color:rgba(255,255,255,.25);background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.1);padding:.22rem .6rem;border-radius:50px}

/* ─── REVEAL ─────────────────────────────────── */
.reveal{opacity:0;transform:translateY(28px);transition:opacity .7s ease,transform .7s ease}
.reveal.visible{opacity:1;transform:none}
.rd1{transition-delay:.1s}.rd2{transition-delay:.2s}.rd3{transition-delay:.3s}.rd4{transition-delay:.4s}.rd5{transition-delay:.5s}

/* ─── RESPONSIVE ─────────────────────────────── */
@media(max-width:1024px){
  .svc-grid{grid-template-columns:repeat(2,1fr)}
  .footer-grid{grid-template-columns:1fr 1fr}
  .hero-inner{gap:2.5rem}
}
@media(max-width:768px){
  nav,.hdr-cta{display:none}
  .ham{display:flex}
  .hero-inner,.about-wrap,.contact-wrap{grid-template-columns:1fr}
  .hero-visual{display:none}
  .hero-kpis{gap:1.5rem}
  .svc-grid,.prod-grid,.testi-grid,.pol-grid,.about-vals{grid-template-columns:1fr}
  .footer-grid{grid-template-columns:1fr}
  .cta-inner{flex-direction:column;text-align:center}
  .footer-bottom{flex-direction:column;text-align:center}
  .frow{grid-template-columns:1fr}
  .hero{padding:110px 0 60px}
  .testi-grid{grid-template-columns:1fr}
}
</style>
</head>
<body>

<!-- ════════ HEADER ════════ -->
<header id="hdr">
  <div class="container hdr-inner">
    <a href="#" class="logo">
      <svg class="logo-mark" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="42" height="42" rx="10" fill="#0A2D6B"/>
        <path d="M7 21L14 14L21 21L14 28Z" fill="#F5A800"/>
        <path d="M19 21L26 14L33 21L26 28Z" fill="#1A6B3A"/>
        <path d="M13 21L21 17L29 21L21 25Z" fill="#FFFFFF" opacity=".95"/>
        <circle cx="21" cy="21" r="4" fill="#F5A800"/>
      </svg>
      <div class="logo-words">
        <strong>Everthings Solutions</strong>
        <span>Pvt. Ltd. · Ranchi, Jharkhand</span>
      </div>
    </a>
    <nav>
      <a href="#services" class="active">Services</a>
      <a href="#products">Products</a>
      <a href="#about">About</a>
      <a href="#policy">Policy</a>
      <a href="#contact">Contact</a>
    </nav>
    <a href="#contact" class="btn btn-yellow hdr-cta"><i class="fa fa-bolt"></i> Get Free Quote</a>
    <button class="ham" id="hamBtn" onclick="toggleMob(this)"><span></span><span></span><span></span></button>
  </div>
  <div class="mob-nav" id="mobNav">
    <a href="#services" onclick="closeMob()">Services</a>
    <a href="#products" onclick="closeMob()">Products</a>
    <a href="#about" onclick="closeMob()">About Us</a>
    <a href="#contact" onclick="closeMob()">Contact</a>
    <a href="#contact" class="btn btn-yellow" onclick="closeMob()" style="margin-top:.5rem;justify-content:center">Get Free Quote</a>
  </div>
</header>

<!-- ════════ HERO ════════ -->
<section class="hero" id="home">
  <div class="container">
    <div class="hero-inner">
      <div class="hero-content">
        <div class="hero-tag"><i class="fa fa-circle fa-xs"></i> Based in Ranchi, Jharkhand</div>
        <h1 class="hero-h1">
          Everything Your <span class="accent-y">Business</span><br>
          Needs in <em class="accent-g">One Place</em>
        </h1>
        <p class="hero-desc">Web development, mobile apps, ERP systems, HRMS, graphic design, SEO — Everthings Solutions delivers smart, reliable IT services and enterprise software for businesses across Jharkhand and India.</p>
        <div class="hero-btns">
          <a href="#services" class="btn btn-yellow btn-lg"><i class="fa fa-rocket"></i> Explore Services</a>
          <a href="#contact" class="btn btn-outline-blue btn-lg"><i class="fa fa-phone"></i> Talk to Us</a>
        </div>
        <div class="hero-kpis">
          <div class="kpi"><span class="kpi-n">150+</span><span class="kpi-l">Projects Delivered</span></div>
          <div class="kpi-sep"></div>
          <div class="kpi"><span class="kpi-n">8+</span><span class="kpi-l">Years Experience</span></div>
          <div class="kpi-sep"></div>
          <div class="kpi"><span class="kpi-n">95%</span><span class="kpi-l">Client Retention</span></div>
        </div>
      </div>
      <div class="hero-visual">
        <!-- Main dashboard card -->
        <div class="hero-card" style="position:relative;z-index:1">
          <div class="hero-card-top">
            <div class="hc-dot" style="background:#F5A800"></div>
            <div class="hc-dot" style="background:#1A6B3A"></div>
            <div class="hc-dot" style="background:#0A2D6B"></div>
            <span style="font-size:.75rem;font-weight:700;color:var(--blue);margin-left:.5rem">Business Performance Dashboard</span>
          </div>
          <div style="font-size:.72rem;font-weight:700;text-transform:uppercase;letter-spacing:.1em;color:var(--text-soft);margin-bottom:.85rem">Monthly Growth Overview</div>
          <div class="hero-bars">
            <div class="bar-row">
              <span class="bar-lbl">Web Dev</span>
              <div class="bar-track"><div class="bar-fill" style="width:82%;background:var(--blue)"></div></div>
              <span class="bar-val">82%</span>
            </div>
            <div class="bar-row">
              <span class="bar-lbl">ERP/HRMS</span>
              <div class="bar-track"><div class="bar-fill" style="width:94%;background:var(--green)"></div></div>
              <span class="bar-val">94%</span>
            </div>
            <div class="bar-row">
              <span class="bar-lbl">App Dev</span>
              <div class="bar-track"><div class="bar-fill" style="width:76%;background:var(--yellow-deep)"></div></div>
              <span class="bar-val">76%</span>
            </div>
            <div class="bar-row">
              <span class="bar-lbl">SEO</span>
              <div class="bar-track"><div class="bar-fill" style="width:88%;background:var(--blue-mid)"></div></div>
              <span class="bar-val">88%</span>
            </div>
            <div class="bar-row">
              <span class="bar-lbl">Design</span>
              <div class="bar-track"><div class="bar-fill" style="width:70%;background:var(--yellow)"></div></div>
              <span class="bar-val">70%</span>
            </div>
          </div>
          <!-- mini chart row -->
          <div style="display:flex;gap:.4rem;align-items:flex-end;height:48px;margin-top:1.25rem;padding-top:1.1rem;border-top:1px solid var(--border)">
            <div style="flex:1;background:var(--blue-light);border-radius:3px 3px 0 0;height:55%"></div>
            <div style="flex:1;background:var(--green-light);border-radius:3px 3px 0 0;height:72%"></div>
            <div style="flex:1;background:var(--yellow-light);border-radius:3px 3px 0 0;height:60%"></div>
            <div style="flex:1;background:var(--blue-light);border-radius:3px 3px 0 0;height:85%"></div>
            <div style="flex:1;background:var(--green);border-radius:3px 3px 0 0;height:78%"></div>
            <div style="flex:1;background:var(--yellow);border-radius:3px 3px 0 0;height:92%"></div>
            <div style="flex:1;background:var(--blue);border-radius:3px 3px 0 0;height:88%"></div>
          </div>
        </div>
        <!-- Floating card 1 -->
        <div class="hero-float-card hfc1">
          <div class="hfc-label">⭐ Client Rating</div>
          <div class="hfc-val">4.9 / 5</div>
          <div class="hfc-sub">↑ 120+ Reviews</div>
        </div>
        <!-- Floating card 2 -->
        <div class="hero-float-card hfc2">
          <div class="hfc-label">🏙️ Serving</div>
          <div class="hfc-val">Ranchi</div>
          <div class="hfc-sub">Jharkhand & Pan-India</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════════ TICKER ════════ -->
<div class="ticker">
  <div class="tick-track">
    <span>Web Development</span><span>App Development</span><span>SEO Content</span>
    <span>Product Images</span><span>Graphic Design</span><span>ERP Software</span>
    <span>HRMS System</span><span>Attendance Tracking</span><span>EMP Portal</span>
    <span>Digital Marketing</span><span>UI/UX Design</span><span>Cloud Solutions</span>
    <span>Web Development</span><span>App Development</span><span>SEO Content</span>
    <span>Product Images</span><span>Graphic Design</span><span>ERP Software</span>
    <span>HRMS System</span><span>Attendance Tracking</span><span>EMP Portal</span>
    <span>Digital Marketing</span><span>UI/UX Design</span><span>Cloud Solutions</span>
  </div>
</div>

<!-- ════════ SERVICES ════════ -->
<section class="services" id="services">
  <div class="container">
    <div class="tc reveal">
      <div class="section-eyebrow eyebrow-yellow"><i class="fa fa-code"></i> Our Services</div>
      <h2 class="section-title">Complete <span>IT Services</span> for<br>Modern Businesses</h2>
      <p class="section-sub">From digital presence to enterprise automation — we cover every technology need your business has, under one roof in Ranchi.</p>
    </div>
    <div class="svc-grid">
      <div class="svc-card reveal rd1">
        <div class="svc-icon ic-b"><i class="fa fa-globe"></i></div>
        <h3>Web Development</h3>
        <p>Custom, responsive websites and web applications built using modern frameworks. From landing pages to complex business portals — pixel-perfect and performance-optimised.</p>
        <div class="svc-tags"><span class="stag">React</span><span class="stag">Next.js</span><span class="stag">PHP/Laravel</span><span class="stag">WordPress</span></div>
      </div>
      <div class="svc-card reveal rd2">
        <div class="svc-icon ic-g"><i class="fa fa-mobile-alt"></i></div>
        <h3>Application Development</h3>
        <p>Native and cross-platform mobile apps for Android &amp; iOS. We build scalable, feature-rich applications that engage users and scale with your business growth.</p>
        <div class="svc-tags"><span class="stag">Flutter</span><span class="stag">React Native</span><span class="stag">Android</span><span class="stag">iOS</span></div>
      </div>
      <div class="svc-card reveal rd3">
        <div class="svc-icon ic-y"><i class="fa fa-search"></i></div>
        <h3>SEO &amp; Content Strategy</h3>
        <p>Data-driven SEO that ranks your business higher on Google. Comprehensive keyword research, on-page optimization, link building, and conversion-focused content.</p>
        <div class="svc-tags"><span class="stag">On-Page SEO</span><span class="stag">Content Writing</span><span class="stag">Google Analytics</span></div>
      </div>
      <div class="svc-card reveal rd1">
        <div class="svc-icon ic-y"><i class="fa fa-camera"></i></div>
        <h3>Product Image Solutions</h3>
        <p>Professional product photography, background removal, photo retouching, and e-commerce image optimisation for Amazon, Flipkart, and direct-to-consumer stores.</p>
        <div class="svc-tags"><span class="stag">Photography</span><span class="stag">Editing</span><span class="stag">E-Commerce Ready</span></div>
      </div>
      <div class="svc-card reveal rd2">
        <div class="svc-icon ic-g"><i class="fa fa-palette"></i></div>
        <h3>Graphic Design</h3>
        <p>Brand identity, logo design, social media creatives, brochures, banners, packaging, and print materials that make your brand stand out from the competition.</p>
        <div class="svc-tags"><span class="stag">Branding</span><span class="stag">Logo Design</span><span class="stag">Social Media</span><span class="stag">Print</span></div>
      </div>
      <div class="svc-card reveal rd3">
        <div class="svc-icon ic-b"><i class="fa fa-chart-line"></i></div>
        <h3>Digital Marketing</h3>
        <p>Full-funnel digital marketing — Google Ads, Meta Ads, email campaigns, and performance dashboards that deliver measurable ROI and real business growth.</p>
        <div class="svc-tags"><span class="stag">Google Ads</span><span class="stag">Meta Ads</span><span class="stag">Email</span><span class="stag">Analytics</span></div>
      </div>
    </div>
  </div>
</section>

<!-- ════════ TECH CAROUSEL ════════ -->
<div class="tech-bar">
  <div class="tech-track">
    <div class="tech-item"><i class="fab fa-react"></i><span>React.js</span></div>
    <div class="tech-item"><i class="fab fa-node-js"></i><span>Node.js</span></div>
    <div class="tech-item"><i class="fab fa-python"></i><span>Python</span></div>
    <div class="tech-item"><i class="fab fa-php"></i><span>PHP / Laravel</span></div>
    <div class="tech-item"><i class="fab fa-android"></i><span>Android</span></div>
    <div class="tech-item"><i class="fab fa-apple"></i><span>iOS / Swift</span></div>
    <div class="tech-item"><i class="fab fa-wordpress"></i><span>WordPress</span></div>
    <div class="tech-item"><i class="fab fa-shopify"></i><span>Shopify</span></div>
    <div class="tech-item"><i class="fab fa-aws"></i><span>AWS Cloud</span></div>
    <div class="tech-item"><i class="fab fa-docker"></i><span>Docker</span></div>
    <div class="tech-item"><i class="fab fa-figma"></i><span>Figma</span></div>
    <div class="tech-item"><i class="fab fa-git-alt"></i><span>Git / GitHub</span></div>
    <div class="tech-item"><i class="fab fa-react"></i><span>React.js</span></div>
    <div class="tech-item"><i class="fab fa-node-js"></i><span>Node.js</span></div>
    <div class="tech-item"><i class="fab fa-python"></i><span>Python</span></div>
    <div class="tech-item"><i class="fab fa-php"></i><span>PHP / Laravel</span></div>
    <div class="tech-item"><i class="fab fa-android"></i><span>Android</span></div>
    <div class="tech-item"><i class="fab fa-apple"></i><span>iOS / Swift</span></div>
    <div class="tech-item"><i class="fab fa-wordpress"></i><span>WordPress</span></div>
    <div class="tech-item"><i class="fab fa-shopify"></i><span>Shopify</span></div>
    <div class="tech-item"><i class="fab fa-aws"></i><span>AWS Cloud</span></div>
    <div class="tech-item"><i class="fab fa-docker"></i><span>Docker</span></div>
    <div class="tech-item"><i class="fab fa-figma"></i><span>Figma</span></div>
    <div class="tech-item"><i class="fab fa-git-alt"></i><span>Git / GitHub</span></div>
  </div>
</div>

<!-- ════════ PRODUCTS ════════ -->
<section class="products" id="products">
  <div class="container">
    <div class="tc reveal">
      <div class="section-eyebrow eyebrow-yellow"><i class="fa fa-cubes"></i> Software Products</div>
      <h2 class="section-title">Enterprise Software <span>Built for</span><br>Jharkhand Businesses</h2>
      <p class="section-sub">Our flagship software products are trusted by 80+ companies across Ranchi, Jamshedpur, and Dhanbad to streamline operations.</p>
    </div>
    <div class="prod-grid">
      <div class="prod-card reveal rd1">
        <div class="prod-badge"><i class="fa fa-star"></i> Most Popular</div>
        <div class="prod-icon-box pb-yellow">🏢</div>
        <h3>Everthings ERP</h3>
        <h4>Enterprise Resource Planning</h4>
        <p>A full-featured ERP covering procurement, inventory, sales, finance, GST billing, and reporting — designed specifically for SMEs in Jharkhand with multi-branch support.</p>
        <div class="prod-features">
          <div class="pf-item"><i class="fa fa-check"></i>Inventory &amp; Stock Management</div>
          <div class="pf-item"><i class="fa fa-check"></i>Finance, Accounts &amp; GST Billing</div>
          <div class="pf-item"><i class="fa fa-check"></i>Purchase &amp; Sales Order Tracking</div>
          <div class="pf-item"><i class="fa fa-check"></i>Multi-Branch &amp; Cloud Access</div>
          <div class="pf-item"><i class="fa fa-check"></i>Advanced Reports &amp; Dashboard</div>
        </div>
        <a href="#contact" class="prod-link">Request Free Demo <i class="fa fa-arrow-right"></i></a>
      </div>
      <div class="prod-card reveal rd2">
        <div class="prod-badge"><i class="fa fa-users"></i> HR Suite</div>
        <div class="prod-icon-box pb-green">👔</div>
        <h3>Everthings HRMS</h3>
        <h4>Human Resource Management</h4>
        <p>Complete HR automation from hire to exit — payroll, leave, appraisals, and Indian compliance (PF, ESI, TDS) built in. Simplify your entire HR department in one platform.</p>
        <div class="prod-features">
          <div class="pf-item"><i class="fa fa-check"></i>Payroll with TDS, PF &amp; ESI</div>
          <div class="pf-item"><i class="fa fa-check"></i>Leave &amp; Holiday Calendar</div>
          <div class="pf-item"><i class="fa fa-check"></i>Performance Appraisal Module</div>
          <div class="pf-item"><i class="fa fa-check"></i>Recruitment &amp; Onboarding</div>
          <div class="pf-item"><i class="fa fa-check"></i>Employee Self-Service Portal</div>
        </div>
        <a href="#contact" class="prod-link">Request Free Demo <i class="fa fa-arrow-right"></i></a>
      </div>
      <div class="prod-card reveal rd1">
        <div class="prod-badge"><i class="fa fa-clock"></i> Attendance</div>
        <div class="prod-icon-box pb-yellow">⏰</div>
        <h3>Everthings Attendance</h3>
        <h4>Smart Attendance Management</h4>
        <p>Biometric, face recognition, mobile app, and RFID-based attendance with real-time dashboards, shift scheduling, geo-fencing for field staff, and auto overtime calculation.</p>
        <div class="prod-features">
          <div class="pf-item"><i class="fa fa-check"></i>Biometric &amp; Face Recognition</div>
          <div class="pf-item"><i class="fa fa-check"></i>Mobile App Check-In/Check-Out</div>
          <div class="pf-item"><i class="fa fa-check"></i>Geo-Fencing for Field Employees</div>
          <div class="pf-item"><i class="fa fa-check"></i>Shift &amp; Roster Management</div>
          <div class="pf-item"><i class="fa fa-check"></i>Overtime &amp; Late Mark Reports</div>
        </div>
        <a href="#contact" class="prod-link">Request Free Demo <i class="fa fa-arrow-right"></i></a>
      </div>
      <div class="prod-card reveal rd2">
        <div class="prod-badge"><i class="fa fa-id-card"></i> EMP Portal</div>
        <div class="prod-icon-box pb-green">💼</div>
        <h3>Everthings EMP</h3>
        <h4>Employee Management Portal</h4>
        <p>A unified self-service portal where employees access payslips, apply for leaves, raise tickets, view announcements, and track their KPIs — from any device, anywhere.</p>
        <div class="prod-features">
          <div class="pf-item"><i class="fa fa-check"></i>Digital Payslip Download</div>
          <div class="pf-item"><i class="fa fa-check"></i>Online Leave Application &amp; Approval</div>
          <div class="pf-item"><i class="fa fa-check"></i>Internal Helpdesk Ticketing</div>
          <div class="pf-item"><i class="fa fa-check"></i>Company Notices &amp; Announcements</div>
          <div class="pf-item"><i class="fa fa-check"></i>KPI &amp; Goal Tracker</div>
        </div>
        <a href="#contact" class="prod-link">Request Free Demo <i class="fa fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- ════════ ABOUT ════════ -->
<section class="about" id="about">
  <div class="container">
    <div class="about-wrap">
      <div class="about-svg-wrap reveal">
        <svg viewBox="0 0 540 420" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect width="540" height="420" fill="#EEF3FF"/>
          <!-- subtle dot grid -->
          <pattern id="dots" width="30" height="30" patternUnits="userSpaceOnUse">
            <circle cx="15" cy="15" r="1.2" fill="#0A2D6B" opacity=".15"/>
          </pattern>
          <rect width="540" height="420" fill="url(#dots)"/>
          <!-- Central circle -->
          <circle cx="270" cy="210" r="80" fill="#0A2D6B"/>
          <circle cx="270" cy="210" r="60" fill="#1A4499"/>
          <text x="270" y="202" fill="#F5A800" font-size="28" text-anchor="middle">⚙</text>
          <text x="270" y="228" fill="white" font-size="11" text-anchor="middle" font-weight="700" font-family="sans-serif">Everthings</text>
          <text x="270" y="245" fill="rgba(255,255,255,.6)" font-size="9" text-anchor="middle" font-family="sans-serif">Solutions</text>
          <!-- Orbit ring -->
          <circle cx="270" cy="210" r="115" stroke="#0A2D6B" stroke-width="1" stroke-dasharray="6 4" opacity=".25"/>
          <circle cx="270" cy="210" r="155" stroke="#F5A800" stroke-width="1" stroke-dasharray="6 4" opacity=".2"/>
          <!-- Orbit nodes -->
          <circle cx="155" cy="210" r="38" fill="white" stroke="#E8E2D4" stroke-width="1.5"/>
          <text x="155" y="205" fill="#F5A800" font-size="18" text-anchor="middle">🌐</text>
          <text x="155" y="225" fill="#0A2D6B" font-size="9" text-anchor="middle" font-weight="700" font-family="sans-serif">Web Dev</text>
          <line x1="193" y1="210" x2="230" y2="210" stroke="#0A2D6B" stroke-width="1" stroke-dasharray="4 3" opacity=".4"/>
          <circle cx="385" cy="210" r="38" fill="white" stroke="#E8E2D4" stroke-width="1.5"/>
          <text x="385" y="205" fill="#1A6B3A" font-size="18" text-anchor="middle">📱</text>
          <text x="385" y="225" fill="#0A2D6B" font-size="9" text-anchor="middle" font-weight="700" font-family="sans-serif">App Dev</text>
          <line x1="347" y1="210" x2="310" y2="210" stroke="#0A2D6B" stroke-width="1" stroke-dasharray="4 3" opacity=".4"/>
          <circle cx="270" cy="95" r="38" fill="white" stroke="#E8E2D4" stroke-width="1.5"/>
          <text x="270" y="90" fill="#F5A800" font-size="18" text-anchor="middle">🏢</text>
          <text x="270" y="110" fill="#0A2D6B" font-size="9" text-anchor="middle" font-weight="700" font-family="sans-serif">ERP Suite</text>
          <line x1="270" y1="133" x2="270" y2="170" stroke="#0A2D6B" stroke-width="1" stroke-dasharray="4 3" opacity=".4"/>
          <circle cx="270" cy="325" r="38" fill="white" stroke="#E8E2D4" stroke-width="1.5"/>
          <text x="270" y="320" fill="#1A6B3A" font-size="18" text-anchor="middle">👥</text>
          <text x="270" y="340" fill="#0A2D6B" font-size="9" text-anchor="middle" font-weight="700" font-family="sans-serif">HRMS</text>
          <line x1="270" y1="287" x2="270" y2="250" stroke="#0A2D6B" stroke-width="1" stroke-dasharray="4 3" opacity=".4"/>
          <circle cx="148" cy="110" r="30" fill="white" stroke="#F5C452" stroke-width="1.5"/>
          <text x="148" y="105" fill="#F5A800" font-size="16" text-anchor="middle">🎨</text>
          <text x="148" y="122" fill="#0A2D6B" font-size="8" text-anchor="middle" font-weight="700" font-family="sans-serif">Design</text>
          <circle cx="392" cy="110" r="30" fill="white" stroke="#A0D4B4" stroke-width="1.5"/>
          <text x="392" y="105" fill="#1A6B3A" font-size="16" text-anchor="middle">📊</text>
          <text x="392" y="122" fill="#0A2D6B" font-size="8" text-anchor="middle" font-weight="700" font-family="sans-serif">SEO</text>
          <circle cx="148" cy="310" r="30" fill="white" stroke="#A0D4B4" stroke-width="1.5"/>
          <text x="148" y="305" fill="#1A6B3A" font-size="16" text-anchor="middle">⏰</text>
          <text x="148" y="322" fill="#0A2D6B" font-size="8" text-anchor="middle" font-weight="700" font-family="sans-serif">Attend.</text>
          <circle cx="392" cy="310" r="30" fill="white" stroke="#F5C452" stroke-width="1.5"/>
          <text x="392" y="305" fill="#F5A800" font-size="16" text-anchor="middle">📸</text>
          <text x="392" y="322" fill="#0A2D6B" font-size="8" text-anchor="middle" font-weight="700" font-family="sans-serif">Images</text>
          <!-- Location pill -->
          <rect x="175" y="388" width="190" height="26" rx="13" fill="#0A2D6B"/>
          <text x="270" y="405" fill="white" font-size="10" text-anchor="middle" font-weight="700" font-family="sans-serif">📍 Ranchi, Jharkhand, India</text>
        </svg>
        <div class="about-badge">
          <div class="ab-n">8+</div>
          <div class="ab-l">Years<br>of Trust</div>
        </div>
      </div>
      <div class="about-text reveal">
        <div class="section-eyebrow eyebrow-blue"><i class="fa fa-building"></i> About Us</div>
        <h2 class="section-title">Ranchi's Most <em>Trusted</em><br><span>Technology Partner</span></h2>
        <p>Everthings Solutions Pvt. Ltd. is a full-spectrum IT company headquartered in Ranchi, Jharkhand. Since 2016, we have been empowering businesses with innovative software and creative digital services.</p>
        <p>Our multidisciplinary team of developers, designers, SEO specialists, and business consultants delivers results aligned with real business goals — on time and within budget.</p>
        <div class="about-vals">
          <div class="aval av-y"><i class="fa fa-bullseye"></i><h4>Result-Driven</h4><p>Every project measured against real outcomes, not just deliverables.</p></div>
          <div class="aval av-b"><i class="fa fa-shield-halved"></i><h4>Reliable</h4><p>8+ years of consistent delivery with 95% client retention rate.</p></div>
          <div class="aval av-g"><i class="fa fa-lightbulb"></i><h4>Innovative</h4><p>Always adopting new tech to keep your business ahead of the curve.</p></div>
          <div class="aval av-y"><i class="fa fa-handshake"></i><h4>Local Roots</h4><p>Deep Jharkhand business roots with on-ground, personal support.</p></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════════ TESTIMONIALS ════════ -->
<section class="testi" id="testimonials">
  <div class="container">
    <div class="tc reveal">
      <div class="section-eyebrow eyebrow-green"><i class="fa fa-star"></i> Client Reviews</div>
      <h2 class="section-title">Trusted by Businesses <span>Across</span> <em>Jharkhand</em></h2>
    </div>
    <div class="testi-wrap">
      <div class="testi-track" id="testiTrack">
        <!-- Slide 1 -->
        <div class="testi-slide">
          <div class="testi-grid">
            <div class="tc-card"><span class="quote-mark">❝</span><div class="stars">★★★★★</div><p class="tc-text">"TechPro delivered our ERP in 3 months. It completely transformed how we manage inventory and billing. Outstanding after-sales support."</p><div class="tc-author"><div class="tc-av av-b">RK</div><div><div class="tc-author-name">Rajesh Kumar</div><div class="tc-author-role">MD, Ranchi Steel Traders</div></div></div></div>
            <div class="tc-card"><span class="quote-mark">❝</span><div class="stars">★★★★★</div><p class="tc-text">"Our website traffic grew 3x in 6 months of their SEO work. The content they created actually converts visitors into real customers."</p><div class="tc-author"><div class="tc-av av-y">PM</div><div><div class="tc-author-name">Priya Mahato</div><div class="tc-author-role">Owner, PM Fashion House</div></div></div></div>
            <div class="tc-card"><span class="quote-mark">❝</span><div class="stars">★★★★★</div><p class="tc-text">"The attendance and HRMS system saved us 40+ hours of manual HR work every month. The mobile app is smooth and our staff love it."</p><div class="tc-author"><div class="tc-av av-g">AS</div><div><div class="tc-author-name">Amit Singh</div><div class="tc-author-role">CEO, Jharkhand Infra Ltd.</div></div></div></div>
          </div>
        </div>
        <!-- Slide 2 -->
        <div class="testi-slide">
          <div class="testi-grid">
            <div class="tc-card"><span class="quote-mark">❝</span><div class="stars">★★★★★</div><p class="tc-text">"Beautiful product images and packaging design helped us get listed on Amazon. Their creative team truly understood our brand's identity."</p><div class="tc-author"><div class="tc-av av-g">SD</div><div><div class="tc-author-name">Sunita Devi</div><div class="tc-author-role">Founder, Herbal Jharkhand</div></div></div></div>
            <div class="tc-card"><span class="quote-mark">❝</span><div class="stars">★★★★★</div><p class="tc-text">"The mobile app they built has 5,000+ active users. Excellent quality, great UI design, and zero downtime since the day of launch."</p><div class="tc-author"><div class="tc-av av-b">VK</div><div><div class="tc-author-name">Vikash Kumar</div><div class="tc-author-role">Director, SpeedDelivery App</div></div></div></div>
            <div class="tc-card"><span class="quote-mark">❝</span><div class="stars">★★★★★</div><p class="tc-text">"From logo to full brand identity — their designers nailed our vision in the first revision. The whole experience was smooth and professional."</p><div class="tc-author"><div class="tc-av av-y">NP</div><div><div class="tc-author-name">Neha Pandey</div><div class="tc-author-role">Co-Founder, NP Consulting</div></div></div></div>
          </div>
        </div>
      </div>
    </div>
    <div class="testi-ctrl">
      <button class="tctrl-btn" onclick="tPrev()"><i class="fa fa-chevron-left"></i></button>
      <div class="tctrl-dots"><div class="td on" onclick="tGo(0)"></div><div class="td" onclick="tGo(1)"></div></div>
      <button class="tctrl-btn" onclick="tNext()"><i class="fa fa-chevron-right"></i></button>
    </div>
  </div>
</section>

<!-- ════════ BANNER CTA ════════ -->
<div class="cta-banner">
  <div class="container">
    <div class="cta-inner">
      <div>
        <h2>Ready to Grow Your Business<br>With Technology?</h2>
        <p>Get a free 30-minute consultation and project estimate from our experts.<br>No commitment, no pressure — just a conversation about your goals.</p>
      </div>
      <div class="cta-btns">
        <a href="#contact" class="btn btn-yellow btn-lg"><i class="fa fa-phone"></i> Call Us Now</a>
        <a href="mailto:info@everthingssolutions.in" class="btn btn-outline-yellow btn-lg" style="border-color:rgba(255,255,255,.5);color:#fff"><i class="fa fa-envelope"></i> Email Us</a>
      </div>
    </div>
  </div>
</div>

<!-- ════════ POLICY ════════ -->
<section class="policy" id="policy">
  <div class="container">
    <div class="tc reveal">
      <div class="section-eyebrow eyebrow-blue"><i class="fa fa-shield"></i> Our Policies</div>
      <h2 class="section-title">Transparent, Fair &amp; <em>Client-First</em></h2>
      <p class="section-sub">We operate with full transparency. Every policy is written with our clients' interests at heart.</p>
    </div>
    <div class="pol-grid">
      <div class="pol-card reveal rd1"><i class="fa fa-lock pol-ic-b"></i><h3>Privacy Policy</h3><p>Your data is safe with us. We never sell or share your business data with third parties. All information is stored on encrypted, ISO-compliant servers.</p></div>
      <div class="pol-card reveal rd2"><i class="fa fa-rotate-left pol-ic-y"></i><h3>Refund Policy</h3><p>Milestone-based payments with a transparent refund process. If deliverables are not met per the agreement, we provide revisions or proportionate refunds.</p></div>
      <div class="pol-card reveal rd3"><i class="fa fa-file-contract pol-ic-g"></i><h3>Service Agreement</h3><p>Every project starts with a clear, written scope of work so both parties stay aligned on deliverables, timelines, and payment schedules.</p></div>
      <div class="pol-card reveal rd1"><i class="fa fa-headset pol-ic-b"></i><h3>Support Policy</h3><p>30-day free bug fixes after delivery and affordable AMC plans for ongoing maintenance. We stand behind everything we build.</p></div>
      <div class="pol-card reveal rd2"><i class="fa fa-copyright pol-ic-y"></i><h3>Ownership Policy</h3><p>Upon full payment, you own 100% of the source code, designs, and content. No strings attached — your project is truly yours.</p></div>
      <div class="pol-card reveal rd3"><i class="fa fa-handshake pol-ic-g"></i><h3>NDA &amp; Confidentiality</h3><p>We sign NDAs before every project. Your business ideas, strategies, and data remain strictly confidential throughout and after our engagement.</p></div>
    </div>
  </div>
</section>

<!-- ════════ CONTACT ════════ -->
<section class="contact" id="contact">
  <div class="container">
    <div class="tc reveal">
      <div class="section-eyebrow eyebrow-yellow"><i class="fa fa-envelope"></i> Contact Us</div>
      <h2 class="section-title">Let's Build Something <span>Great</span><br><em>Together</em></h2>
      <p class="section-sub">Reach out for a free consultation. We're in Ranchi, Jharkhand — and ready to work with you wherever you are.</p>
    </div>
    <div class="contact-wrap">
      <div class="cinfo-items reveal">
        <div class="cinfo-item">
          <div class="cinfo-icon ci-b"><i class="fa fa-location-dot"></i></div>
          <div class="cinfo-text"><h4>Office Address</h4><p>Plot No. 42, Harmu Housing Colony,<br>Ranchi – 834002, Jharkhand, India</p></div>
        </div>
        <div class="cinfo-item">
          <div class="cinfo-icon ci-y"><i class="fa fa-phone"></i></div>
          <div class="cinfo-text"><h4>Phone / WhatsApp</h4><a href="tel:+916204000000">+91 62040 00000</a><br><a href="tel:+916204000001">+91 62040 00001</a></div>
        </div>
        <div class="cinfo-item">
          <div class="cinfo-icon ci-g"><i class="fa fa-envelope"></i></div>
          <div class="cinfo-text"><h4>Email</h4><a href="mailto:info@everthingssolutions.in">info@everthingssolutions.in</a><br><a href="mailto:support@everthingssolutions.in">support@everthingssolutions.in</a></div>
        </div>
        <div class="cinfo-item">
          <div class="cinfo-icon ci-b"><i class="fa fa-clock"></i></div>
          <div class="cinfo-text"><h4>Working Hours</h4><p>Monday – Saturday: 9:30 AM – 7:00 PM<br>Sunday: Emergency Support Only</p></div>
        </div>
        <div class="map-box">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3663.87!2d85.3096!3d23.3441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4e1048ecacf1d%3A0x22f26d1e7d6ef0b5!2sHarmu%20Housing%20Colony%2C%20Ranchi%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1700000000000" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div class="cform reveal rd2">
        <h3>Send Us a Message</h3>
        <div class="frow">
          <div class="fg"><label>First Name</label><input type="text" placeholder="Raj"></div>
          <div class="fg"><label>Last Name</label><input type="text" placeholder="Kumar"></div>
        </div>
        <div class="fg"><label>Email Address</label><input type="email" placeholder="raj@yourcompany.com"></div>
        <div class="fg"><label>Phone Number</label><input type="tel" placeholder="+91 98765 43210"></div>
        <div class="fg"><label>Service Required</label>
          <select>
            <option value="">Select a Service...</option>
            <option>Web Development</option>
            <option>Application Development</option>
            <option>SEO &amp; Content Writing</option>
            <option>Product Image Solutions</option>
            <option>Graphic Design</option>
            <option>ERP Software</option>
            <option>HRMS Software</option>
            <option>Attendance System</option>
            <option>EMP Portal</option>
            <option>Digital Marketing</option>
            <option>Free Consultation</option>
          </select>
        </div>
        <div class="fg"><label>Your Message</label><textarea placeholder="Tell us about your project or requirements..."></textarea></div>
        <button class="btn btn-yellow btn-lg" style="width:100%;justify-content:center" onclick="handleSubmit(this)">
          <i class="fa fa-paper-plane"></i> Send Message
        </button>
      </div>
    </div>
  </div>
</section>

<!-- ════════ FOOTER ════════ -->
<footer>
  <div class="container">
    <div class="footer-grid">
      <div class="fb-brand">
        <a href="#" class="logo">
          <svg width="42" height="42" viewBox="0 0 42 42" fill="none"><rect width="42" height="42" rx="10" fill="#1A4499"/><path d="M7 21L14 14L21 21L14 28Z" fill="#F5A800"/><path d="M19 21L26 14L33 21L26 28Z" fill="#1A6B3A"/><path d="M13 21L21 17L29 21L21 25Z" fill="#FFFFFF" opacity=".9"/><circle cx="21" cy="21" r="4" fill="#F5A800"/></svg>
          <div class="logo-words"><strong>Everthings Solutions</strong><span>Pvt. Ltd.</span></div>
        </a>
        <p>Ranchi's trusted IT company — delivering web, app, ERP, HRMS, design, and SEO solutions since 2016. Your growth is our commitment.</p>
        <div class="soc-links">
          <a href="#" class="soc-a"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="soc-a"><i class="fab fa-instagram"></i></a>
          <a href="#" class="soc-a"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="soc-a"><i class="fab fa-twitter"></i></a>
          <a href="#" class="soc-a"><i class="fab fa-youtube"></i></a>
          <a href="#" class="soc-a"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
      <div class="fc">
        <h4>IT Services</h4>
        <div class="fl">
          <a href="#services">Web Development</a>
          <a href="#services">App Development</a>
          <a href="#services">SEO &amp; Content</a>
          <a href="#services">Product Images</a>
          <a href="#services">Graphic Design</a>
          <a href="#services">Digital Marketing</a>
        </div>
      </div>
      <div class="fc">
        <h4>Software Products</h4>
        <div class="fl">
          <a href="#products">Everthings ERP</a>
          <a href="#products">Everthings HRMS</a>
          <a href="#products">Attendance System</a>
          <a href="#products">EMP Portal</a>
          <a href="#contact">Free Demo</a>
          <a href="#policy">Pricing Plans</a>
        </div>
      </div>
      <div class="fc">
        <h4>Get In Touch</h4>
        <div class="fci"><i class="fa fa-location-dot"></i><span>Harmu Housing Colony, Ranchi – 834002, Jharkhand</span></div>
        <div class="fci"><i class="fa fa-phone"></i><span>+91 62040 00000</span></div>
        <div class="fci"><i class="fa fa-envelope"></i><span>info@everthingssolutions.in</span></div>
        <div class="fci"><i class="fa fa-clock"></i><span>Mon–Sat: 9:30 AM – 7:00 PM</span></div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© 2024 <a href="#">Everthings Solutions Pvt. Ltd.</a> All Rights Reserved | Ranchi, Jharkhand</p>
      <div class="footer-tags"><span>Privacy Policy</span><span>Terms of Service</span><span>Sitemap</span></div>
    </div>
  </div>
</footer>

<script>
// ── Header scroll
const hdr = document.getElementById('hdr');
window.addEventListener('scroll', () => hdr.classList.toggle('scrolled', scrollY > 60));

// ── Mobile nav
function toggleMob(btn) {
  const nav = document.getElementById('mobNav');
  nav.classList.toggle('open');
  const s = btn.querySelectorAll('span');
  if (nav.classList.contains('open')) {
    s[0].style.cssText = 'transform:rotate(45deg) translate(5px,5px)';
    s[1].style.cssText = 'opacity:0';
    s[2].style.cssText = 'transform:rotate(-45deg) translate(5px,-5px)';
  } else { s.forEach(x => x.style.cssText = ''); }
}
function closeMob() {
  document.getElementById('mobNav').classList.remove('open');
  document.querySelectorAll('.ham span').forEach(s => s.style.cssText = '');
}

// ── Testimonial slider
let tc = 0;
function updateTesti() {
  document.getElementById('testiTrack').style.transform = `translateX(-${tc * 100}%)`;
  document.querySelectorAll('.td').forEach((d, i) => d.classList.toggle('on', i === tc));
}
function tNext() { tc = (tc + 1) % 2; updateTesti(); }
function tPrev() { tc = (tc + 1) % 2; updateTesti(); }
function tGo(i)  { tc = i; updateTesti(); }
setInterval(tNext, 5500);

// ── Scroll reveal
const obs = new IntersectionObserver(entries => {
  entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); obs.unobserve(e.target); } });
}, { threshold: 0.1 });
document.querySelectorAll('.reveal').forEach(el => obs.observe(el));

// ── Active nav
const secs = document.querySelectorAll('section[id]');
window.addEventListener('scroll', () => {
  let cur = '';
  secs.forEach(s => { if (scrollY >= s.offsetTop - 100) cur = s.id; });
  document.querySelectorAll('nav a').forEach(a => a.classList.toggle('active', a.getAttribute('href') === '#' + cur));
});

// ── Form submit
function handleSubmit(btn) {
  btn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Sending...';
  btn.disabled = true;
  setTimeout(() => {
    btn.innerHTML = '<i class="fa fa-check-circle"></i> Message Sent! We\'ll reply within 24 hours.';
    btn.style.background = 'var(--green)';
    btn.style.color = '#fff';
  }, 2000);
}
</script>
</body>
</html>