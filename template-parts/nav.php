<nav class="top-nav">
  <details class="nav-details-wrapper">
    <summary>
      <a class="nav-item" href='/'>Home</a> |
      <a class="nav-item" title="Buckets of my writing" href='/tags'>Tags</a> |
      <a class="nav-item" title="About this blog and me" href='/about'>About</a> |
      <a class="nav-item" title="Handpicked word art" href='/quotes'>Quotes</a> |
      <a class="nav-item" title="Tech setup notes" href='/setup'>Setup</a> |
      <a class="nav-item" href='https://github.com/abhn'>Github</a> |
      <span id="nav-details-toggle">More ✨</span>
    </summary>

    <?php
      get_template_part('template-parts/search-box'); ?>

    <p><label for="dark-mode-toggle">➡️ Toggle dark mode 🌗</label>&nbsp;
    <input id="dark-mode-toggle" type="checkbox"/></p>

    <p>➡️ Subscribe via a <a href="https://en.wikipedia.org/wiki/Web_feed">feeds</a> reader: 
      <a href="/?feed=rss2">RSS</a>,
      <a href="/?feed=atom">Atom</a></p>

    <?php
      get_template_part('template-parts/email-subscription-form'); ?>

  </details>
</nav>
