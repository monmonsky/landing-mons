<html lang="en" class="" style="--on:0;"><head>

  <meta charset="UTF-8">
  <title>CodePen Demo</title>

  <meta name="robots" content="noindex">

  <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
  <link rel="mask-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">
  <link rel="canonical" href="https://codepen.io/jh3y/pen/VwjgdLj">

  
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <style class="INLINE_PEN_STYLESHEET_ID">
    * {
  box-sizing: border-box;
}
:root {
  --on: 0;
  --bg: hsl(calc(200 - (var(--on) * 160)), calc((20 + (var(--on) * 50)) * 1%), calc((20 + (var(--on) * 60)) * 1%));
  --cord: hsl(0, 0%, calc((60 - (var(--on) * 50)) * 1%));
  --stroke: hsl(0, 0%, calc((60 - (var(--on) * 50)) * 1%));
  --shine: hsla(0, 0%, 100%, calc(0.75 - (var(--on) * 0.5)));
  --cap: hsl(0, 0%, calc((40 + (var(--on) * 30)) * 1%));
  --filament: hsl(45, calc(var(--on) * 80%), calc((25 + (var(--on) * 75)) * 1%));
}
body {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: var(--bg);
}
.toggle-scene {
  overflow: visible !important;
  height: 50vmin;
  position: absolute;
}
.toggle-scene__cord {
  stroke: var(--cord);
  cursor: move;
}
.toggle-scene__cord:nth-of-type(1) {
  display: none;
}
.toggle-scene__cord:nth-of-type(2),
.toggle-scene__cord:nth-of-type(3),
.toggle-scene__cord:nth-of-type(4),
.toggle-scene__cord:nth-of-type(5) {
  display: none;
}
.toggle-scene__cord-end {
  stroke: var(--cord);
  fill: var(--cord);
}
.toggle-scene__dummy-cord {
  stroke-width: 6;
  stroke: var(--cord);
}
.bulb__filament {
  stroke: var(--filament);
}
.bulb__shine {
  stroke: var(--shine);
}
.bulb__flash {
  stroke: #f5e0a3;
  display: none;
}
.bulb__bulb {
  stroke: var(--stroke);
  fill: hsla(calc(180 - (95 * var(--on))), 80%, 80%, calc(0.1 + (0.4 * var(--on))));
}
.bulb__cap {
  fill: var(--cap);
}
.bulb__cap-shine {
  fill: var(--shine);
}
.bulb__cap-outline {
  stroke: var(--stroke);
}

  </style>
</head>

<body>
  
<svg class="toggle-scene" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin" viewBox="0 0 197.451 481.081" style="touch-action: none;">
  <defs>
    <marker id="e" orient="auto" overflow="visible" refX="0" refY="0">
      <path class="toggle-scene__cord-end" fill-rule="evenodd" stroke-width=".2666" d="M.98 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
    </marker>
    <marker id="d" orient="auto" overflow="visible" refX="0" refY="0">
      <path class="toggle-scene__cord-end" fill-rule="evenodd" stroke-width=".2666" d="M.98 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
    </marker>
    <marker id="c" orient="auto" overflow="visible" refX="0" refY="0">
      <path class="toggle-scene__cord-end" fill-rule="evenodd" stroke-width=".2666" d="M.98 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
    </marker>
    <marker id="b" orient="auto" overflow="visible" refX="0" refY="0">
      <path class="toggle-scene__cord-end" fill-rule="evenodd" stroke-width=".2666" d="M.98 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
    </marker>
    <marker id="a" orient="auto" overflow="visible" refX="0" refY="0">
      <path class="toggle-scene__cord-end" fill-rule="evenodd" stroke-width=".2666" d="M.98 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
    </marker>
    <clipPath id="g" clipPathUnits="userSpaceOnUse">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4.677" d="M-774.546 827.629s12.917-13.473 29.203-13.412c16.53.062 29.203 13.412 29.203 13.412v53.6s-8.825 16-29.203 16c-21.674 0-29.203-16-29.203-16z"></path>
    </clipPath>
    <clipPath id="f" clipPathUnits="userSpaceOnUse">
      <path d="M-868.418 945.051c-4.188 73.011 78.255 53.244 150.216 52.941 82.387-.346 98.921-19.444 98.921-47.058 0-27.615-4.788-42.55-73.823-42.55-69.036 0-171.436-30.937-175.314 36.667z"></path>
    </clipPath>
  </defs>
  <g class="toggle-scene__cords">
    <path class="toggle-scene__cord" marker-end="url(#a)" fill="none" stroke-linecap="square" stroke-width="6" d="M123.22 -28.56 C123.22 -16.01 123.22 -3.47 123.22 9.06 123.22 21.6 123.22 34.14 123.22 46.68 123.22 59.22 123.22 71.76 123.22 84.3 123.22 96.85 123.22 109.39 123.22 121.93 " transform="translate(-24.503 256.106)" data-original="M123.228-28.56v150.493" style="display: none;"></path>
    <path class="toggle-scene__cord" marker-end="url(#a)" fill="none" stroke-linecap="square" stroke-width="6" d="M123.228-28.59s28 8.131 28 19.506-18.667 13.005-28 19.507c-9.333 6.502-28 8.131-28 19.506s28 19.507 28 19.507" transform="translate(-24.503 256.106)"></path>
    <path class="toggle-scene__cord" marker-end="url(#a)" fill="none" stroke-linecap="square" stroke-width="6" d="M123.228-28.575s-20 16.871-20 28.468c0 11.597 13.333 18.978 20 28.468 6.667 9.489 20 16.87 20 28.467 0 11.597-20 28.468-20 28.468" transform="translate(-24.503 256.106)"></path>
    <path class="toggle-scene__cord" marker-end="url(#a)" fill="none" stroke-linecap="square" stroke-width="6" d="M123.228-28.569s16 20.623 16 32.782c0 12.16-10.667 21.855-16 32.782-5.333 10.928-16 20.623-16 32.782 0 12.16 16 32.782 16 32.782" transform="translate(-24.503 256.106)"></path>
    <path class="toggle-scene__cord" marker-end="url(#a)" fill="none" stroke-linecap="square" stroke-width="6" d="M123.228-28.563s-10 24.647-10 37.623c0 12.977 6.667 25.082 10 37.623 3.333 12.541 10 24.647 10 37.623 0 12.977-10 37.623-10 37.623" transform="translate(-24.503 256.106)"></path>
    <g class="line toggle-scene__dummy-cord" style="display: block;">
      <line marker-end="url(#a)" x1="98.7255" x2="98.7255" y1="240.5405" y2="380.5405"></line>
    </g>
    <circle class="toggle-scene__hit-spot" cx="98.7255" cy="380.5405" r="60" fill="transparent" style="touch-action: none; cursor: grab; user-select: none; display: block;"></circle>
  </g>
  <g class="toggle-scene__bulb bulb" transform="translate(844.069 -645.213)">
    <path class="bulb__cap" stroke-linecap="round" stroke-linejoin="round" stroke-width="4.677" d="M-774.546 827.629s12.917-13.473 29.203-13.412c16.53.062 29.203 13.412 29.203 13.412v53.6s-8.825 16-29.203 16c-21.674 0-29.203-16-29.203-16z"></path>
    <path class="bulb__cap-shine" d="M-778.379 802.873h25.512v118.409h-25.512z" clip-path="url(#g)" transform="matrix(.52452 0 0 .90177 -368.282 82.976)"></path>
    <path class="bulb__cap" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M-774.546 827.629s12.917-13.473 29.203-13.412c16.53.062 29.203 13.412 29.203 13.412v0s-8.439 10.115-28.817 10.115c-21.673 0-29.59-10.115-29.59-10.115z"></path>
    <path class="bulb__cap-outline" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="4.677" d="M-774.546 827.629s12.917-13.473 29.203-13.412c16.53.062 29.203 13.412 29.203 13.412v53.6s-8.825 16-29.203 16c-21.674 0-29.203-16-29.203-16z"></path>
    <g class="bulb__filament" fill="none" stroke-linecap="round" stroke-width="5">
      <path d="M-752.914 823.875l-8.858-33.06"></path>
      <path d="M-737.772 823.875l8.858-33.06"></path>
    </g>
    <path class="bulb__bulb" stroke-linecap="round" stroke-width="5" d="M-783.192 803.855c5.251 8.815 5.295 21.32 13.272 27.774 12.299 8.045 36.46 8.115 49.127 0 7.976-6.454 8.022-18.96 13.273-27.774 3.992-6.7 14.408-19.811 14.408-19.811 8.276-11.539 12.769-24.594 12.769-38.699 0-35.898-29.102-65-65-65-35.899 0-65 29.102-65 65 0 13.667 4.217 26.348 12.405 38.2 0 0 10.754 13.61 14.746 20.31z"></path>
    <circle class="bulb__flash" cx="-745.343" cy="743.939" r="83.725" fill="none" stroke-dasharray="10,30" stroke-linecap="round" stroke-linejoin="round" stroke-width="10"></circle>
    <path class="bulb__shine" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="12" d="M-789.19 757.501a45.897 45.897 0 013.915-36.189 45.897 45.897 0 0129.031-21.957"></path>
  </g>
</svg>
  
<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>
<script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
<script src="https://assets.codepen.io/16327/MorphSVGPlugin3.min.js"></script>
<script src="https://unpkg.com/gsap@3/dist/Draggable.min.js"></script>
  <script src="https://cdpn.io/cp/internal/boomboom/pen.js?key=pen.js-9c8f3eaf-e95e-7380-cd58-df7b8c70e934" crossorigin=""></script>


</body></html>