<?php require("views/partials/head.php") ?>
<?php require("views/partials/nav.php") ?>
<?php require("views/partials/banner.php") ?>

<style>
  :root {
    /* Add these styles to your global stylesheet, which is used across all site pages. You only need to do this once. All elements in the library derive their variables and base styles from this central sheet, simplifying site-wide edits. For instance, if you want to modify how your h2's appear across the site, you just update it once in the global styles, and the changes apply everywhere. */
    --primary: #ff6a3e;
    --primaryLight: #ffba43;
    --secondary: #ffba43;
    --secondaryLight: #ffba43;
    --headerColor: #1a1a1a;
    --bodyTextColor: #4e4b66;
    --bodyTextColorWhite: #fafbfc;
    /* 13px - 16px */
    --topperFontSize: clamp(0.8125rem, 1.6vw, 1rem);
    /* 31px - 49px */
    --headerFontSize: clamp(1.9375rem, 3.9vw, 3.0625rem);
    --bodyFontSize: 1rem;
    /* 60px - 100px top and bottom */
    --sectionPadding: clamp(3.75rem, 7.82vw, 6.25rem) 1rem;
  }

  body {
    margin: 0;
    padding: 0;
  }

  *,
  *:before,
  *:after {
    /* prevents padding from affecting height and width */
    box-sizing: border-box;
  }

  .cs-topper {
    font-size: var(--topperFontSize);
    line-height: 1.2em;
    text-transform: uppercase;
    text-align: inherit;
    letter-spacing: .1em;
    font-weight: 700;
    color: var(--primary);
    margin-bottom: 0.25rem;
    display: block;
  }

  .cs-title {
    font-size: var(--headerFontSize);
    font-weight: 900;
    line-height: 1.2em;
    text-align: inherit;
    max-width: 43.75rem;
    margin: 0 0 1rem 0;
    color: var(--headerColor);
    position: relative;
  }

  .cs-text {
    font-size: var(--bodyFontSize);
    line-height: 1.5em;
    text-align: inherit;
    width: 100%;
    max-width: 40.625rem;
    margin: 0;
    color: var(--bodyTextColor);
  }

  /*-- -------------------------- -->
  <---        Recent Posts        -->
  <--- -------------------------- -*/
  /* Mobile - 360px */
  @media only screen and (min-width: 0rem) {
    #blog-1347 {
      padding: var(--sectionPadding);
      position: relative;
      z-index: 1;
      overflow: hidden;
    }

    #blog-1347 .cs-container {
      width: 100%;
      /* changes to 1280px on desktop */
      max-width: 43.75rem;
      margin: auto;
      display: flex;
      flex-direction: column;
      align-items: center;
      /* 48px - 64px */
      gap: clamp(3rem, 6vw, 4rem);
    }

    #blog-1347 .cs-content {
      /* set text align to left if content needs to be left aligned */
      text-align: center;
      width: 100%;
      display: flex;
      flex-direction: column;
      /* centers content horizontally, set to flex-start to left align */
      align-items: center;
    }

    #blog-1347 .cs-title {
      max-width: 20ch;
    }

    #blog-1347 .cs-topper {
      color: var(--secondary);
    }

    #blog-1347 .cs-card-group {
      width: 100%;
      margin: 0;
      padding: 0;
      display: grid;
      grid-template-columns: repeat(12, 1fr);
      gap: 1rem;
    }

    #blog-1347 .cs-item {
      list-style: none;
      display: flex;
      flex-direction: column;
      grid-column: span 12;
    }

    #blog-1347 .cs-item:hover .cs-h3,
    #blog-1347 .cs-item:hover .cs-date,
    #blog-1347 .cs-item:hover .cs-category {
      color: #fff;
    }

    #blog-1347 .cs-item:hover .cs-item-text {
      background-color: var(--primary);
    }

    #blog-1347 .cs-item:hover .cs-icon-wrapper {
      border-color: #fff;
    }

    #blog-1347 .cs-item:hover .cs-icon,
    #blog-1347 .cs-item:hover .cs-date-icon {
      filter: brightness(1000%) grayscale(1);
    }

    #blog-1347 .cs-item:hover .cs-icon {
      transform: rotate(45deg);
    }

    #blog-1347 .cs-item:hover .cs-category::before {
      background-color: #fff;
      opacity: 0.2;
    }

    #blog-1347 .cs-link {
      text-decoration: none;
      display: flex;
      flex-direction: column;
      /* if one card has more content then the others, the card will stretch to fill the parent container */
      flex-grow: 1;
      gap: 1rem;
    }

    #blog-1347 .cs-picture {
      width: 100%;
      height: 20rem;
      margin: 0;
      border-radius: 1.5rem;
      display: block;
      position: relative;
      z-index: 1;
      overflow: hidden;
    }

    #blog-1347 .cs-picture img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      position: absolute;
      top: 0;
      left: 0;
    }

    #blog-1347 .cs-item-text {
      padding: 1.25rem;
      background-color: #f7f7f7;
      border-radius: 1.5rem;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      /* makes the item text the element that grows to fill the container */
      flex-grow: 1;
      transition: background-color 0.3s;
    }

    #blog-1347 .cs-h3 {
      /* 20px - 25px */
      font-size: clamp(1.25rem, 1.8vw, 1.5625rem);
      line-height: 1.2em;
      text-align: left;
      margin: 0;
      color: #1a1a1a;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 1rem;
      transition: color 0.3s;
    }

    #blog-1347 .cs-icon-wrapper {
      width: 3rem;
      height: 3rem;
      border: 1px solid #bababa;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      /* prevents the parent flexbox from shrinking the icon */
      flex-shrink: 0;
      transition: border-color 0.3s;
    }

    #blog-1347 .cs-icon {
      width: auto;
      height: 0.75rem;
      transition:
        filter 0.3s,
        transform 0.3s;
    }

    #blog-1347 .cs-info {
      margin: 1rem 0 0;
      padding: 1rem 0 0;
      border-top: 1px solid #e8e8e8;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    #blog-1347 .cs-date {
      font-size: 0.875rem;
      line-height: 1.5em;
      text-align: left;
      color: #1a1a1a;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      transition: color 0.3s;
    }

    #blog-1347 .cs-date-icon {
      width: auto;
      height: 1.5rem;
      transition: filter 0.3s;
    }

    #blog-1347 .cs-category {
      font-size: 0.875rem;
      /* centers the text if the category bullet has to span multiple lines */
      text-align: center;
      padding: 0.25rem 1rem;
      color: #1a1a1a;
      border-radius: 5rem;
      position: relative;
      z-index: 0;
      overflow: hidden;
    }

    #blog-1347 .cs-category::before {
      content: "";
      width: 100%;
      height: 100%;
      background: #e8e8e8;
      position: absolute;
      top: 0;
      left: 0;
      z-index: -1;
    }

    #blog-1347 .cs-bubbles {
      width: 20.0625rem;
      height: 26.4375rem;
      display: none;
      position: absolute;
      top: 66.4375rem;
      right: -8.75rem;
      z-index: -1;
    }

    #blog-1347 .cs-bubbles:before {
      /* white border bubble */
      content: "";
      width: 16.5rem;
      height: 16.5rem;
      background: transparent;
      opacity: 1;
      border: 1px solid #1a1a1a;
      border-radius: 50%;
      display: block;
      position: absolute;
      top: 0;
      right: 0;
      animation-name: floatAnimation;
      animation-duration: 5s;
      animation-timing-function: ease-in-out;
      animation-iteration-count: infinite;
      animation-fill-mode: forwards;
    }

    #blog-1347 .cs-bubbles:after {
      /* orange bubble */
      content: "";
      width: 16.5rem;
      height: 16.5rem;
      background: var(--primary);
      opacity: 0.1;
      border-radius: 50%;
      display: block;
      position: absolute;
      bottom: 0;
      left: 0;
      z-index: -1;
      animation-name: floatAnimation2;
      animation-duration: 14s;
      animation-timing-function: ease-in-out;
      animation-iteration-count: infinite;
      animation-fill-mode: forwards;
    }
  }

  /* Tablet - 768px */
  @media only screen and (min-width: 48rem) {
    #blog-1347 .cs-bubbles {
      display: block;
    }
  }

  /* Desktop - 1024px */
  @media only screen and (min-width: 64rem) {
    #blog-1347 .cs-container {
      max-width: 80rem;
    }

    #blog-1347 .cs-item {
      grid-column: span 4;
    }

    #blog-1347 .cs-bubbles {
      top: 17.5625rem;
    }
  }

  /* Large Desktop - 1300px */
  @media only screen and (min-width: 81.25rem) {
    #blog-1347 .cs-bubbles {
      margin-right: -61.875rem;
      right: 50%;
    }
  }
</style>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <section id="blog-1347">
      <div class="cs-container">
        <div class="cs-content">
          <span class="cs-topper">Our Blog</span>

        </div>
        <ul class="cs-card-group">
          <?php foreach ($posts as $post): ?>
            <li class="cs-item">
              <a class="cs-link" href="/blog?id=<?= $post["post_id"] ?>">
                <picture class="cs-picture">
                  <source media="(max-width: 600px)"
                    srcset="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/MISC/agency-client.png">
                  <source media="(min-width: 601px)"
                    srcset="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/MISC/agency-client.png">
                  <img decoding="async"
                    src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/MISC/agency-client.png"
                    alt="agency" width="413" height="374" aria-hidden="true">
                </picture>
                <div class="cs-item-text">
                  <h3 class="cs-h3">
                    <?= htmlspecialchars($post["title"]) ?>
                    <picture class="cs-icon-wrapper">
                      <img class="cs-icon" decoding="async"
                        src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/Graphics/agency-arrow-upper-right.svg"
                        alt="arrow" width="413" height="374" aria-hidden="true">
                    </picture>
                  </h3>
                  <div class="cs-info">
                    <span class="cs-date">
                      <img class="cs-date-icon" decoding="async"
                        src="https://csimg.nyc3.cdn.digitaloceanspaces.com/Images/Graphics/agency-calendar.svg"
                        alt="calendar" width="413" height="374" aria-hidden="true">
                      <?= formatDate($post["created_at"]) ?>
                    </span>
                    <span class="cs-category">
                      Ecommerce
                    </span>
                  </div>
                </div>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="cs-bubbles" aria-hidden="true"></div>
    </section>

  </div>
</main>
<?php require("views/partials/foot.php") ?>