<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
    <title>My Webcrumbs Plugin</title>
    <style>
      @import url(https://fonts.googleapis.com/css2?family=Raleway&display=swap);
      
      /*! tailwindcss v3.4.3 | MIT License | https://tailwindcss.com*/
      *,
      :after,
      :before {
        border: 0 solid #e5e7eb;
        box-sizing: border-box;
      }
      :after,
      :before {
        --tw-content: "";
      }
      :host,
      html {
        line-height: 1.5;
        -webkit-text-size-adjust: 100%;
        font-family:
          Oswald,
          ui-sans-serif,
          system-ui,
          sans-serif,
          Apple Color Emoji,
          Segoe UI Emoji,
          Segoe UI Symbol,
          Noto Color Emoji;
        font-feature-settings: normal;
        font-variation-settings: normal;
        -moz-tab-size: 4;
        tab-size: 4;
        -webkit-tap-highlight-color: transparent;
      }
      body {
        line-height: inherit;
        margin: 0;
      }
      hr {
        border-top-width: 1px;
        color: inherit;
        height: 0;
      }
      abbr:where([title]) {
        text-decoration: underline dotted;
      }
      h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
        font-size: inherit;
        font-weight: inherit;
      }
      a {
        color: inherit;
        text-decoration: inherit;
      }
      b,
      strong {
        font-weight: bolder;
      }
      code,
      kbd,
      pre,
      samp {
        font-family:
          ui-monospace,
          SFMono-Regular,
          Menlo,
          Monaco,
          Consolas,
          Liberation Mono,
          Courier New,
          monospace;
        font-feature-settings: normal;
        font-size: 1em;
        font-variation-settings: normal;
      }
      small {
        font-size: 80%;
      }
      sub,
      sup {
        font-size: 75%;
        line-height: 0;
        position: relative;
        vertical-align: baseline;
      }
      sub {
        bottom: -0.25em;
      }
      sup {
        top: -0.5em;
      }
      table {
        border-collapse: collapse;
        border-color: inherit;
        text-indent: 0;
      }
      button,
      input,
      optgroup,
      select,
      textarea {
        color: inherit;
        font-family: inherit;
        font-feature-settings: inherit;
        font-size: 100%;
        font-variation-settings: inherit;
        font-weight: inherit;
        letter-spacing: inherit;
        line-height: inherit;
        margin: 0;
        padding: 0;
      }
      button,
      select {
        text-transform: none;
      }
      button,
      input:where([type="button"]),
      input:where([type="reset"]),
      input:where([type="submit"]) {
        -webkit-appearance: button;
        background-color: transparent;
        background-image: none;
      }
      :-moz-focusring {
        outline: auto;
      }
      :-moz-ui-invalid {
        box-shadow: none;
      }
      progress {
        vertical-align: baseline;
      }
      ::-webkit-inner-spin-button,
      ::-webkit-outer-spin-button {
        height: auto;
      }
      [type="search"] {
        -webkit-appearance: textfield;
        outline-offset: -2px;
      }
      ::-webkit-search-decoration {
        -webkit-appearance: none;
      }
      ::-webkit-file-upload-button {
        -webkit-appearance: button;
        font: inherit;
      }
      summary {
        display: list-item;
      }
      blockquote,
      dd,
      dl,
      figure,
      h1,
      h2,
      h3,
      h4,
      h5,
      h6,
      hr,
      p,
      pre {
        margin: 0;
      }
      fieldset {
        margin: 0;
      }
      fieldset,
      legend {
        padding: 0;
      }
      menu,
      ol,
      ul {
        list-style: none;
        margin: 0;
        padding: 0;
      }
      dialog {
        padding: 0;
      }
      textarea {
        resize: vertical;
      }
      input::placeholder,
      textarea::placeholder {
        color: #9ca3af;
        opacity: 1;
      }
      [role="button"],
      button {
        cursor: pointer;
      }
      :disabled {
        cursor: default;
      }
      audio,
      canvas,
      embed,
      iframe,
      img,
      object,
      svg,
      video {
        display: block;
        vertical-align: middle;
      }
      img,
      video {
        height: auto;
        max-width: 100%;
      }
      [hidden] {
        display: none;
      }
      *,
      :after,
      :before {
        --tw-border-spacing-x: 0;
        --tw-border-spacing-y: 0;
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        --tw-pan-x: ;
        --tw-pan-y: ;
        --tw-pinch-zoom: ;
        --tw-scroll-snap-strictness: proximity;
        --tw-gradient-from-position: ;
        --tw-gradient-via-position: ;
        --tw-gradient-to-position: ;
        --tw-ordinal: ;
        --tw-slashed-zero: ;
        --tw-numeric-figure: ;
        --tw-numeric-spacing: ;
        --tw-numeric-fraction: ;
        --tw-ring-inset: ;
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgba(59, 130, 246, 0.5);
        --tw-ring-offset-shadow: 0 0 #0000;
        --tw-ring-shadow: 0 0 #0000;
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        --tw-blur: ;
        --tw-brightness: ;
        --tw-contrast: ;
        --tw-grayscale: ;
        --tw-hue-rotate: ;
        --tw-invert: ;
        --tw-saturate: ;
        --tw-sepia: ;
        --tw-drop-shadow: ;
        --tw-backdrop-blur: ;
        --tw-backdrop-brightness: ;
        --tw-backdrop-contrast: ;
        --tw-backdrop-grayscale: ;
        --tw-backdrop-hue-rotate: ;
        --tw-backdrop-invert: ;
        --tw-backdrop-opacity: ;
        --tw-backdrop-saturate: ;
        --tw-backdrop-sepia: ;
        --tw-contain-size: ;
        --tw-contain-layout: ;
        --tw-contain-paint: ;
        --tw-contain-style: ;
      }
      ::backdrop {
        --tw-border-spacing-x: 0;
        --tw-border-spacing-y: 0;
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        --tw-pan-x: ;
        --tw-pan-y: ;
        --tw-pinch-zoom: ;
        --tw-scroll-snap-strictness: proximity;
        --tw-gradient-from-position: ;
        --tw-gradient-via-position: ;
        --tw-gradient-to-position: ;
        --tw-ordinal: ;
        --tw-slashed-zero: ;
        --tw-numeric-figure: ;
        --tw-numeric-spacing: ;
        --tw-numeric-fraction: ;
        --tw-ring-inset: ;
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgba(59, 130, 246, 0.5);
        --tw-ring-offset-shadow: 0 0 #0000;
        --tw-ring-shadow: 0 0 #0000;
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        --tw-blur: ;
        --tw-brightness: ;
        --tw-contrast: ;
        --tw-grayscale: ;
        --tw-hue-rotate: ;
        --tw-invert: ;
        --tw-saturate: ;
        --tw-sepia: ;
        --tw-drop-shadow: ;
        --tw-backdrop-blur: ;
        --tw-backdrop-brightness: ;
        --tw-backdrop-contrast: ;
        --tw-backdrop-grayscale: ;
        --tw-backdrop-hue-rotate: ;
        --tw-backdrop-invert: ;
        --tw-backdrop-opacity: ;
        --tw-backdrop-saturate: ;
        --tw-backdrop-sepia: ;
        --tw-contain-size: ;
        --tw-contain-layout: ;
        --tw-contain-paint: ;
        --tw-contain-style: ;
      }
      #webcrumbs :is(.mx-auto) {
        margin-left: auto;
        margin-right: auto;
      }
      #webcrumbs :is(.mt-2) {
        margin-top: 8px;
      }
      #webcrumbs :is(.mt-4) {
        margin-top: 16px;
      }
      #webcrumbs :is(.mt-8) {
        margin-top: 32px;
      }
      #webcrumbs :is(.grid) {
        display: grid;
      }
      #webcrumbs :is(.min-h-\[800px\]) {
        min-height: 800px;
      }
      #webcrumbs :is(.w-full) {
        width: 100%;
      }
      #webcrumbs :is(.grid-cols-1) {
        grid-template-columns: repeat(1, minmax(0, 1fr));
      }
      #webcrumbs :is(.gap-4) {
        gap: 16px;
      }
      #webcrumbs :is(.rounded-lg) {
        border-radius: 8px;
      }
      #webcrumbs :is(.rounded-md) {
        border-radius: 6px;
      }
      #webcrumbs :is(.bg-neutral-100) {
        --tw-bg-opacity: 1;
        background-color: rgb(28 34 41 / var(--tw-bg-opacity));
      }
      #webcrumbs :is(.bg-neutral-50) {
        --tw-bg-opacity: 1;
        background-color: rgb(29 35 42 / var(--tw-bg-opacity));
      }
      #webcrumbs :is(.p-4) {
        padding: 16px;
      }
      #webcrumbs :is(.text-center) {
        text-align: center;
      }
      #webcrumbs :is(.font-title) {
        font-family:
          Raleway,
          ui-sans-serif,
          system-ui,
          sans-serif,
          Apple Color Emoji,
          Segoe UI Emoji,
          Segoe UI Symbol,
          Noto Color Emoji;
      }
      #webcrumbs :is(.text-3xl) {
        font-size: 33.75px;
        line-height: 40.5px;
      }
      #webcrumbs :is(.text-base) {
        font-size: 18px;
        line-height: 27px;
      }
      #webcrumbs :is(.text-lg) {
        font-size: 20.25px;
        line-height: 31.5px;
      }
      #webcrumbs :is(.shadow-lg) {
        --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
          0 4px 6px -4px rgba(0, 0, 0, 0.1);
        --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color),
          0 4px 6px -4px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
      }
      #webcrumbs :is(.transition) {
        transition-duration: 0.15s;
        transition-property: color, background-color, border-color,
          text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter,
          backdrop-filter;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      }
      #webcrumbs {
        font-family: Raleway !important;
        font-size: 18px !important;
        line-height: 27px !important;
      }
      #webcrumbs :is(.bg-neutral-50) {
        color: hsla(0, 0%, 100%, 0.9) !important;
      }
      #webcrumbs :is(.bg-neutral-100) {
        color: hsla(0, 0%, 100%, 0.9) !important;
      }
      #webcrumbs :is(.hover\:bg-primary:hover) {
        --tw-bg-opacity: 1;
        background-color: rgb(116 127 255 / var(--tw-bg-opacity));
      }
      #webcrumbs :is(.hover\:text-white:hover) {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity));
      }
      @media (min-width: 640px) {
        #webcrumbs :is(.sm\:grid-cols-2) {
          grid-template-columns: repeat(2, minmax(0, 1fr));
        }
      }
      @media (min-width: 768px) {
        #webcrumbs :is(.md\:mt-4) {
          margin-top: 16px;
        }
        #webcrumbs :is(.md\:gap-6) {
          gap: 24px;
        }
        #webcrumbs :is(.md\:p-6) {
          padding: 24px;
        }
        #webcrumbs :is(.md\:p-8) {
          padding: 32px;
        }
        #webcrumbs :is(.md\:text-4xl) {
          font-size: 40.5px;
          line-height: 45px;
        }
        #webcrumbs :is(.md\:text-lg) {
          font-size: 20.25px;
          line-height: 31.5px;
        }
        #webcrumbs :is(.md\:text-xl) {
          font-size: 22.5px;
          line-height: 31.499999999999996px;
        }
      }
      @media (min-width: 1024px) {
        #webcrumbs :is(.lg\:w-\[1200px\]) {
          width: 1200px;
        }
        #webcrumbs :is(.lg\:grid-cols-3) {
          grid-template-columns: repeat(3, minmax(0, 1fr));
        }
      }
      
      body {
        line-height: inherit;
        margin: 0;
        display: flex;
        flex-direction: column;
        width: 100vw;
        height: 165vh;
        align-items: center;
        justify-content: center;
        background-color: #9ca3af;
      }
    </style>
  </head>
  <body>
    <div id="webcrumbs"> 
      
    	<div class="w-full lg:w-[1200px] min-h-[800px] bg-neutral-50 rounded-lg shadow-lg p-4 md:p-8 mx-auto">
    	  <header class="text-center">
          <br>
          <br>
    	    <h1 class="font-title text-3xl md:text-4xl">Welcome to Linkorage</h1>
    	    <p class="mt-4 text-base md:text-lg">Your one-stop hub for all software engineering resources.</p>
            <p class="mt-4 text-base md:text-lg">By Steven Madali</p>
    	  </header>
        <br>
        <br>
    	  <main class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
    	    <a href="php/aihelpershome.php" class="bg-neutral-100 p-4 md:p-6 rounded-md hover:bg-primary hover:text-white transition">
    	      <h2 class="text-lg md:text-xl">A.I Helpers</h2>
    	      <p class="mt-2 md:mt-4">Access a range of AI tools and resources to boost your productivity.</p>
    	    </a>
    	    <a href="php/frontendtoolshome.php" class="bg-neutral-100 p-4 md:p-6 rounded-md hover:bg-primary hover:text-white transition">
    	      <h2 class="text-lg md:text-xl">Frontend Tools</h2>
    	      <p class="mt-2 md:mt-4">Discover the best tools for frontend development.</p>
    	    </a>
    	    <a href="php/boredgameshome.php" class="bg-neutral-100 p-4 md:p-6 rounded-md hover:bg-primary hover:text-white transition">
    	      <h2 class="text-lg md:text-xl">Bored Games</h2>
    	      <p class="mt-2 md:mt-4">Relax with a collection of entertaining games to pass the time.</p>
    	    </a>
    	    <a href="php/design&inspirationshome.php" class="bg-neutral-100 p-4 md:p-6 rounded-md hover:bg-primary hover:text-white transition">
    	      <h2 class="text-lg md:text-xl">Design &amp; Inspirations</h2>
    	      <p class="mt-2 md:mt-4">Get inspired by the latest design trends and resources.</p>
    	    </a>
    	    <a href="php/upskillcodinghome.php" class="bg-neutral-100 p-4 md:p-6 rounded-md hover:bg-primary hover:text-white transition">
    	      <h2 class="text-lg md:text-xl">Upskill Coding</h2>
    	      <p class="mt-2 md:mt-4">Enhance your coding skills with these resources.</p>
    	    </a>
    	    <a href="php/visualizationcharthome.php" class="bg-neutral-100 p-4 md:p-6 rounded-md hover:bg-primary hover:text-white transition">
    	      <h2 class="text-lg md:text-xl">Visualization Chart</h2>
    	      <p class="mt-2 md:mt-4">Explore various charts and data visualization tools.</p>
    	    </a>
    	  </main>
    	</div> 
    </div>
    
  </body>
</html>