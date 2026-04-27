---
layout: /layouts/home.njk
title: "Creating a powerful digital presence for every small business."
subtitle: ""
menutitle: "Home"
meta:
  title: "Web Design & Development Studio"
  description: "Branching Web is an Australian development studio helping small businesses and entrepreneurs build websites that convert, and find the right tools to solve your business problems."
date: Last Modified
tags: menu
---

## Logo Export

<canvas id="logo-canvas" style="display:block;margin:1rem 0;border:1px solid #ccc;width:370px;height:80px;"></canvas>
<button onclick="downloadLogo()">Export Logo (370×80)</button>

<script>
(function () {
  const canvas = document.getElementById('logo-canvas');
  const ctx = canvas.getContext('2d');
  const W = 370, H = 80;
  const dpr = window.devicePixelRatio || 1;

  canvas.width = W * dpr;
  canvas.height = H * dpr;
  ctx.scale(dpr, dpr);

  function draw() {
    ctx.fillStyle = '#2c2c2c';
    ctx.fillRect(0, 0, W, H);
    ctx.fillStyle = '#f1f2fd';
    ctx.font = 'bold 40px "Crimson Pro", serif';
    ctx.textAlign = 'center';
    ctx.textBaseline = 'middle';
    ctx.fillText('BRANCHING WEB', W / 2, H / 2);
  }

  document.fonts.ready.then(draw);

  window.downloadLogo = function () {
    // Export at logical size (185x40) by drawing onto a fresh canvas
    const out = document.createElement('canvas');
    out.width = W;  // 370
    out.height = H; // 80
    const octx = out.getContext('2d');
    octx.fillStyle = '#2c2c2c';
    octx.fillRect(0, 0, W, H);
    octx.fillStyle = '#f1f2fd';
    octx.font = 'bold 40px "Crimson Pro", serif';
    octx.textAlign = 'center';
    octx.textBaseline = 'middle';
    octx.fillText('BRANCHING WEB', W / 2, H / 2);
    const link = document.createElement('a');
    link.download = 'branching-web-logo.png';
    link.href = out.toDataURL('image/png');
    link.click();
  };
})();
</script>

## Icon Export

<canvas id="icon-canvas" style="display:block;margin:1rem 0;border:1px solid #ccc;width:250px;height:250px;"></canvas>
<button onclick="cycleIconSize()">Export Size: 64×64</button>
<button onclick="downloadIcon()">Export Icon</button>

<script>
(function () {
  const canvas = document.getElementById('icon-canvas');
  const ctx = canvas.getContext('2d');
  const W = 250, H = 250;
  const dpr = window.devicePixelRatio || 1;

  canvas.width = W * dpr;
  canvas.height = H * dpr;
  ctx.scale(dpr, dpr);

  const sizes = [64, 120, 250];
  let sizeIndex = 0;

  function drawIcon(c, size) {
    const fontSize = Math.round(size * 0.4);
    c.fillStyle = '#2c2c2c';
    c.fillRect(0, 0, size, size);
    c.fillStyle = '#f1f2fd';
    c.font = `bold ${fontSize}px "Crimson Pro", serif`;
    c.textAlign = 'center';
    c.textBaseline = 'middle';
    c.fillText('BW', size / 2, size / 2);
  }

  document.fonts.ready.then(() => drawIcon(ctx, W));

  window.cycleIconSize = function () {
    sizeIndex = (sizeIndex + 1) % sizes.length;
    const s = sizes[sizeIndex];
    document.querySelector('button[onclick="cycleIconSize()"]').textContent =
      `Export Size: ${s}×${s}`;
  };

  window.downloadIcon = function () {
    const s = sizes[sizeIndex];
    const out = document.createElement('canvas');
    out.width = s;
    out.height = s;
    drawIcon(out.getContext('2d'), s);
    const link = document.createElement('a');
    link.download = `branching-web-icon-${s}.png`;
    link.href = out.toDataURL('image/png');
    link.click();
  };
})();
</script>

## Section Image Export

<canvas id="section-canvas" style="display:block;margin:1rem 0;border:1px solid #ccc;width:100%;max-width:756px;aspect-ratio:2268/846;"></canvas>
<button onclick="cycleShape()">Shape: Square</button>
<button onclick="downloadSection()">Export Section Image (2268×846)</button>

<script>
(function () {
  const canvas = document.getElementById('section-canvas');
  const ctx = canvas.getContext('2d');
  const W = 2268, H = 846;
  const dpr = window.devicePixelRatio || 1;

  canvas.width = W * dpr;
  canvas.height = H * dpr;
  ctx.scale(dpr, dpr);

  const shapes = ['square', 'circle', 'triangle', 'star'];
  let shapeIndex = 0;

  function drawShape(c, shape) {
    const size = H * 0.65;
    const cx = W / 2, cy = H / 2;
    c.fillStyle = '#2c2c2c';
    c.beginPath();
    if (shape === 'square') {
      c.rect(cx - size / 2, cy - size / 2, size, size);
    } else if (shape === 'circle') {
      c.arc(cx, cy, size / 2, 0, Math.PI * 2);
    } else if (shape === 'triangle') {
      c.moveTo(cx, cy - size / 2);
      c.lineTo(cx + size / 2, cy + size / 2);
      c.lineTo(cx - size / 2, cy + size / 2);
      c.closePath();
    } else if (shape === 'star') {
      const r1 = size / 2, r2 = size / 4, pts = 5;
      for (let i = 0; i < pts * 2; i++) {
        const r = i % 2 === 0 ? r1 : r2;
        const a = (Math.PI / pts) * i - Math.PI / 2;
        i === 0 ? c.moveTo(cx + r * Math.cos(a), cy + r * Math.sin(a))
                : c.lineTo(cx + r * Math.cos(a), cy + r * Math.sin(a));
      }
      c.closePath();
    }
    c.fill();
  }

  function drawScene(c) {
    const grad = c.createLinearGradient(0, 0, W, H);
    grad.addColorStop(0, '#f1f2fd');
    grad.addColorStop(1, '#2c2c2c');
    c.fillStyle = grad;
    c.fillRect(0, 0, W, H);
    drawShape(c, shapes[shapeIndex]);
  }

  function draw() { drawScene(ctx); }

  document.fonts.ready.then(draw);

  window.cycleShape = function () {
    shapeIndex = (shapeIndex + 1) % shapes.length;
    document.querySelector('button[onclick="cycleShape()"]').textContent =
      'Shape: ' + shapes[shapeIndex].charAt(0).toUpperCase() + shapes[shapeIndex].slice(1);
    draw();
  };

  window.downloadSection = function () {
    const out = document.createElement('canvas');
    out.width = W;
    out.height = H;
    const octx = out.getContext('2d');
    drawScene(octx);
    const link = document.createElement('a');
    link.download = 'branching-web-section.png';
    link.href = out.toDataURL('image/png');
    link.click();
  };
})();
</script>

## Service Image Export

<canvas id="service-canvas" style="display:block;margin:1rem 0;border:1px solid #ccc;width:100%;max-width:756px;aspect-ratio:2268/846;"></canvas>
<button onclick="cycleService()">Service: Web Development</button>
<button onclick="downloadService()">Export Service Image (2268×846)</button>

<script>
(function () {
  const canvas = document.getElementById('service-canvas');
  const ctx = canvas.getContext('2d');
  const W = 2268, H = 846;
  const dpr = window.devicePixelRatio || 1;

  canvas.width = W * dpr;
  canvas.height = H * dpr;
  ctx.scale(dpr, dpr);

  const services = ['web development', 'web applications', 'marketing', 'education', 'book'];
  let serviceIndex = 0;

  function drawWebDev(c, cx, cy, s) {
    // Solid filled </> using large bold text
    c.fillStyle = '#2c2c2c';
    c.font = `900 ${Math.round(s * 0.56)}px -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif`;
    c.textAlign = 'center';
    c.textBaseline = 'middle';
    c.fillText('</>', cx, cy);
  }

  function drawWebApps(c, cx, cy, s) {
    // Bold 2x2 solid squares
    const sq = s * 0.4, gap = s * 0.06;
    c.fillStyle = '#2c2c2c';
    [[cx - sq - gap/2, cy - sq - gap/2], [cx + gap/2, cy - sq - gap/2],
     [cx - sq - gap/2, cy + gap/2],      [cx + gap/2, cy + gap/2]
    ].forEach(([x, y]) => { c.beginPath(); c.rect(x, y, sq, sq); c.fill(); });
  }

  function drawMarketing(c, cx, cy, s) {
    // Bold ascending solid bars
    const bw = s * 0.22, gap = s * 0.07, baseY = cy + s * 0.4;
    const heights = [s * 0.42, s * 0.62, s * 0.8];
    const startX = cx - (3 * bw + 2 * gap) / 2;
    c.fillStyle = '#2c2c2c';
    heights.forEach((h, i) => { c.beginPath(); c.rect(startX + i * (bw + gap), baseY - h, bw, h); c.fill(); });
  }

  function drawEducation(c, cx, cy, s) {
    // Bold solid open book (two large pages + spine gap)
    const pw = s * 0.42, ph = s * 0.7, sg = s * 0.04;
    c.fillStyle = '#2c2c2c';
    c.beginPath(); c.rect(cx - sg - pw, cy - ph/2, pw, ph); c.fill();
    c.beginPath(); c.rect(cx + sg,      cy - ph/2, pw, ph); c.fill();
  }

  function drawBook(c, cx, cy, s) {
    // Closed book: spine + cover separated by a gap
    const bh = s * 0.78;
    const sw = s * 0.11;  // spine width
    const cw = s * 0.52;  // cover width
    const gap = s * 0.04; // gap between spine and cover
    const left = cx - (sw + gap + cw) / 2;
    c.fillStyle = '#2c2c2c';
    c.fillRect(left, cy - bh/2, sw, bh);
    c.fillRect(left + sw + gap, cy - bh/2, cw, bh);
  }

  const icons = { 'web development': drawWebDev, 'web applications': drawWebApps, 'marketing': drawMarketing, 'education': drawEducation, 'book': drawBook };

  function drawScene(c) {
    const grad = c.createLinearGradient(0, 0, W, H);
    grad.addColorStop(0, '#f1f2fd');
    grad.addColorStop(1, '#2c2c2c');
    c.fillStyle = grad;
    c.fillRect(0, 0, W, H);
    icons[services[serviceIndex]](c, W / 2, H / 2, H * 0.65);
  }

  function draw() { drawScene(ctx); }

  document.fonts.ready.then(draw);

  window.cycleService = function () {
    serviceIndex = (serviceIndex + 1) % services.length;
    const s = services[serviceIndex];
    document.querySelector('button[onclick="cycleService()"]').textContent =
      'Service: ' + s.charAt(0).toUpperCase() + s.slice(1);
    draw();
  };

  window.downloadService = function () {
    const out = document.createElement('canvas');
    out.width = W;
    out.height = H;
    drawScene(out.getContext('2d'));
    const link = document.createElement('a');
    link.download = `branching-web-${services[serviceIndex].replace(' ', '-')}.png`;
    link.href = out.toDataURL('image/png');
    link.click();
  };
})();
</script>