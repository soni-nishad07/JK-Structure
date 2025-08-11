<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Client</title>

  <?php include('link.php'); ?>

  <style>
    /* Lightbox / zoom overlay */
    .img-zoom-overlay {
      position: fixed;
      inset: 0;
      background: rgba(0, 0, 0, 0.85);
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 9999;
      cursor: zoom-out;
      opacity: 0;
      transition: opacity .25s ease;
    }

    .img-zoom-overlay.visible {
      opacity: 1;
    }

    .img-zoom-content {
      position: relative;
      max-width: 90%;
      max-height: 90%;
      outline: none;
    }

    .img-zoom-content img {
      display: block;
      width: 100%;
      height: auto;
      border-radius: 8px;
      user-select: none;
      box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
    }

    .img-zoom-close {
      position: absolute;
      top: 8px;
      right: 8px;
      background: rgba(255, 255, 255, 0.9);
      border: none;
      padding: 6px 12px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 14px;
      font-weight: 600;
    }

    .img-zoom-close:focus {
      outline: 2px solid #000;
    }

    /* Optional subtle transition on the underlying image to indicate clickability */
    .ongoing_client_image {
      cursor: zoom-in;
      transition: transform .2s ease;
    }

    .ongoing_client_image:hover {
      transform: scale(1.02);
    }
  </style>
</head>

<body>

  <?php include('nav.php'); ?>





  <div class="clint_dev_container" aria-label="Developers and Architecture firms">
    <div class="client-deve">
      <header>
        <h1>Developers & Architecture</h1>
        <p class="subtitle">Explore the list of development and architectural partners.</p>
      </header>

      <div class="clint_dev_filters" role="tablist" aria-label="Filter by category">
        <div aria-live="polite" class="clint_dev_filter-status clint_dev_visually-hidden" id="filter-status">
          Showing all entries
        </div>
        <button class="clint_dev_btn active" role="tab" aria-selected="true" data-filter="all" aria-controls="clint_dev_cards">Show All</button>
        <button class="clint_dev_btn" role="tab" aria-selected="false" data-filter="developers" aria-controls="clint_dev_cards">Developers</button>
        <button class="clint_dev_btn" role="tab" aria-selected="false" data-filter="architecture" aria-controls="clint_dev_cards">Architecture</button>
      </div>

      <section class="grid" id="clint_dev_cards">
        <!-- Developer clint_dev_cards -->
        <div class="clint_dev_card" data-type="developers">
          <div class="category-label">Developer</div>
          <h3>Ambiant Housing & Construction Pvt Ltd</h3>
          <ul class="client_list">
            <li>Location: Bengaluru</li>
          </ul>
        </div>

        <div class="clint_dev_card" data-type="developers">
          <div class="category-label">Developer</div>
          <h3>Hinduja Holdings</h3>
          <ul class="client_list">
            <li>Location: Bengaluru</li>
          </ul>
        </div>

        <div class="clint_dev_card" data-type="developers">
          <div class="category-label">Developer</div>
          <h3>Skav Developers Pvt LTD</h3>
          <ul class="client_list">
            <li>Location: Bengaluru</li>
          </ul>
        </div>

        <div class="clint_dev_card" data-type="developers">
          <div class="category-label">Developer</div>
          <h3>Woodsvale</h3>
          <ul class="client_list">
            <li>Location: Bengaluru</li>
          </ul>
        </div>

        <div class="clint_dev_card" data-type="developers">
          <div class="category-label">Developer</div>
          <h3>Jai Bhuvan Builder Pvt. Ltd</h3>
          <ul class="client_list">
            <li>Location: Goa</li>
          </ul>
        </div>

        <!-- Architecture clint_dev_cards -->
        <div class="clint_dev_card" data-type="architecture">
          <div class="category-label">Architecture</div>
          <h3>Design Matters</h3>
          <ul class="client_list">
            <li>Location: Bengaluru</li>
          </ul>
        </div>

        <div class="clint_dev_card" data-type="architecture">
          <div class="category-label">Architecture</div>
          <h3>Peddle Thorp Nadig Architecture Design Works</h3>
          <ul class="client_list">
            <li>Location: Bengaluru</li>
          </ul>
        </div>

        <div class="clint_dev_card" data-type="architecture">
          <div class="category-label">Architecture</div>
          <h3>Haarsha Architects</h3>
          <ul class="client_list">
            <li>Location: Bengaluru</li>
          </ul>
        </div>

        <div class="clint_dev_card" data-type="architecture">
          <div class="category-label">Architecture</div>
          <h3>Grey Brick Architects</h3>
          <ul class="client_list">
            <li>Location: Bengaluru</li>
          </ul>
        </div>
      </section>
    </div>
  </div>

  <div class="ongoing_client_container" aria-label="Ongoing Projects">
    <div class="ongoing_client_header">
      <h1>Ongoing Projects</h1>
      <p class="ongoing_client_sub">Live projects with their developers. Images are lazy-loaded; swap placeholder links with actual project photos.</p>
    </div>

    <div class="ongoing_client_grid">
      <!-- Ambiant Maangalya Ashirvad -->
      <div class="ongoing_client_card">
        <div class="ongoing_client_image_wrapper">
          <img 
            class="ongoing_client_image" 
            data-src="./Ongoing_project/1_Ambiant Maangalya Ashirvad/Ambiant.jpg" 
            alt="Ambiant Maangalya Ashirvad, Bannerghatta Road, Bengaluru" 
            loading="lazy"
          />
        </div>
        <div class="ongoing_client_body">
          <div class="ongoing_client_badge">Developer: Ambiant Housing &amp; Construction Pvt Ltd</div>
          <h3 class="ongoing_client_title">Ambiant Maangalya Ashirvad</h3>
          <p class="ongoing_client_location">Bannerghatta Road, Bengaluru</p>
        </div>
      </div>

      <!-- Hinduja El Jardin -->
      <div class="ongoing_client_card">
        <div class="ongoing_client_image_wrapper">
          <img 
            class="ongoing_client_image" 
            data-src="./Ongoing_project/2_Hinduja Holdings/Hinduja (1).jpg" 
            alt="Hinduja El Jardin, Thirumenahalli, Opp Thirumenahalli" 
            loading="lazy"
          />
        </div>
        <div class="ongoing_client_body">
          <div class="ongoing_client_badge">Developer: Hinduja Holdings</div>
          <h3 class="ongoing_client_title">Hinduja El Jardin</h3>
          <p class="ongoing_client_location">Thirumenahalli, Opp Thirumenahalli</p>
        </div>
      </div>

      <!-- Skav Infantry -->
      <div class="ongoing_client_card">
        <div class="ongoing_client_image_wrapper">
          <img 
            class="ongoing_client_image" 
            data-src="./Ongoing_project/3_Skav developers put Ltd/Skav.jpg" 
            alt="Skav Infantry, Infantry Road, Shivaji Nagar, Bangalore" 
            loading="lazy"
          />
        </div>
        <div class="ongoing_client_body">
          <div class="ongoing_client_badge">Developer: Skav Developers Pvt Ltd</div>
          <h3 class="ongoing_client_title">Skav Infantry</h3>
          <p class="ongoing_client_location">Infantry Road, Shivaji Nagar, Bangalore</p>
        </div>
      </div>

      <!-- Midori -->
      <div class="ongoing_client_card">
        <div class="ongoing_client_image_wrapper">
          <img 
            class="ongoing_client_image" 
            data-src="./Ongoing_project/2_Hinduja Holdings/Hinduja (2).jpg" 
            alt="Midori, Sarjapur Road, Bengaluru" 
            loading="lazy"
          />
        </div>
        <div class="ongoing_client_body">
          <div class="ongoing_client_badge">Developer: Tattvam Ventures</div>
          <h3 class="ongoing_client_title">Midori</h3>
          <p class="ongoing_client_location">Sarjapur Road, Bengaluru</p>
        </div>
      </div>

      <!-- Woodsvale (Villa) -->
      <div class="ongoing_client_card">
        <div class="ongoing_client_image_wrapper">
          <img 
            class="ongoing_client_image" 
            data-src="./Ongoing_project/4_woodsvale/Woodsvale (1).jpg" 
            alt="Woodsvale (Villa), Sarjapur Road, Bengaluru" 
            loading="lazy"
          />
        </div>
        <div class="ongoing_client_body">
          <div class="ongoing_client_badge">Developer: Tattvam Ventures</div>
          <h3 class="ongoing_client_title">Woodsvale (Villa)</h3>
          <p class="ongoing_client_location">Sarjapur Road, Bengaluru</p>
        </div>
      </div>

      <!-- Nature Nxt (Villa) -->
      <div class="ongoing_client_card">
        <div class="ongoing_client_image_wrapper">
          <img 
            class="ongoing_client_image" 
            data-src="./Ongoing_project/4_woodsvale/Woodsvale (2).jpg" 
            alt="Nature Nxt (Villa), Sarjapur Road, Bengaluru" 
            loading="lazy"
          />
        </div>
        <div class="ongoing_client_body">
          <div class="ongoing_client_badge">Developer: Tattvam Ventures</div>
          <h3 class="ongoing_client_title">Nature Nxt (Villa)</h3>
          <p class="ongoing_client_location">Sarjapur Road, Bengaluru</p>
        </div>
      </div>

      <!-- Azalea (Villa) -->
      <div class="ongoing_client_card">
        <div class="ongoing_client_image_wrapper">
          <img 
            class="ongoing_client_image" 
            data-src="./Ongoing_project/4_woodsvale/Woodsvale (3).jpg" 
            alt="Azalea (Villa), Sarjapur Road, Bengaluru" 
            loading="lazy"
          />
        </div>
        <div class="ongoing_client_body">
          <div class="ongoing_client_badge">Developer: Tattvam Ventures</div>
          <h3 class="ongoing_client_title">Azalea (Villa)</h3>
          <p class="ongoing_client_location">Sarjapur Road, Bengaluru</p>
        </div>
      </div>

      <!-- Mall De Goa -->
      <div class="ongoing_client_card">
        <div class="ongoing_client_image_wrapper">
          <img 
            class="ongoing_client_image" 
            data-src="./Ongoing_project/2_Hinduja Holdings/Hinduja (3).jpg" 
            alt="Mall De Goa, Goa" 
            loading="lazy"
          />
        </div>
        <div class="ongoing_client_body">
          <div class="ongoing_client_badge">Developer: Jai Bhuvan Builder Pvt. Ltd</div>
          <h3 class="ongoing_client_title">Mall De Goa</h3>
          <p class="ongoing_client_location">Goa</p>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Filter logic with improved accessibility
    const buttons = document.querySelectorAll('.clint_dev_filters .clint_dev_btn');
    const clint_dev_cards = document.querySelectorAll('.clint_dev_card');
    const statusEl = document.getElementById('filter-status');

    function setFilter(filter) {
      buttons.forEach(b => {
        const isActive = b.getAttribute('data-filter') === filter;
        b.classList.toggle('active', isActive);
        b.setAttribute('aria-pressed', isActive ? 'true' : 'false');
        b.setAttribute('aria-selected', isActive ? 'true' : 'false');
      });
      let shownCount = 0;
      clint_dev_cards.forEach(c => {
        const type = c.getAttribute('data-type');
        if (filter === 'all' || type === filter) {
          c.style.display = '';
          shownCount++;
        } else {
          c.style.display = 'none';
        }
      });
      const label = filter === 'all' ? 'all entries' : filter === 'developers' ? 'Developers only' : 'Architecture only';
      statusEl.textContent = `Showing ${label} (${shownCount} item${shownCount !== 1 ? 's' : ''})`;
    }

    buttons.forEach((b, idx) => {
      b.addEventListener('click', () => {
        setFilter(b.getAttribute('data-filter'));
      });
      b.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowRight' || e.key === 'ArrowLeft') {
          e.preventDefault();
          const dir = e.key === 'ArrowRight' ? 1 : -1;
          let newIndex = (idx + dir + buttons.length) % buttons.length;
          buttons[newIndex].click();
        }
      });
    });

    // initial state
    setFilter('all');
  </script>

  <script>
    // Lazy load ongoing_client images
    const imgs = Array.from(document.querySelectorAll('.ongoing_client_image'));
    if ('IntersectionObserver' in window) {
      const io = new IntersectionObserver((entries, observer) => {
        entries.forEach(e => {
          if (e.isIntersecting) {
            const img = e.target;
            img.src = img.getAttribute('data-src');
            img.onload = () => {
              img.classList.add('loaded');
            };
            observer.unobserve(img);
          }
        });
      }, { rootMargin: "120px" });
      imgs.forEach(i => io.observe(i));
    } else {
      // fallback
      imgs.forEach(img => {
        img.src = img.getAttribute('data-src');
        img.onload = () => img.classList.add('loaded');
      });
    }

    // Zoom lightbox functionality
    document.addEventListener('click', function (e) {
      const img = e.target.closest('.ongoing_client_image');
      if (!img) return;

      // Create overlay
      const overlay = document.createElement('div');
      overlay.className = 'img-zoom-overlay';
      overlay.setAttribute('role', 'dialog');
      overlay.setAttribute('aria-label', 'Image zoom view');
      overlay.tabIndex = -1;

      // Content wrapper
      const content = document.createElement('div');
      content.className = 'img-zoom-content';

      // Cloned high-res image (if you have a data-zoom-src, prefer it)
      const zoomImg = document.createElement('img');
      const highRes = img.getAttribute('data-zoom-src');
      if (highRes) {
        zoomImg.src = highRes;
      } else {
        zoomImg.src = img.src || img.getAttribute('data-src');
      }
      zoomImg.alt = img.alt || 'Zoomed image';

      // Close button
      const closeBtn = document.createElement('button');
      closeBtn.className = 'img-zoom-close';
      closeBtn.innerText = 'Close';
      closeBtn.setAttribute('aria-label', 'Close zoomed image');

      // Assemble
      content.appendChild(zoomImg);
      content.appendChild(closeBtn);
      overlay.appendChild(content);
      document.body.appendChild(overlay);

      // Force reflow to enable transition
      requestAnimationFrame(() => overlay.classList.add('visible'));

      // Focus management
      closeBtn.focus();

      // Handlers to close
      function removeOverlay() {
        overlay.classList.remove('visible');
        overlay.addEventListener('transitionend', () => {
          overlay.remove();
        }, { once: true });
        document.removeEventListener('keydown', onKey);
      }

      function onKey(ev) {
        if (ev.key === 'Escape') {
          removeOverlay();
        }
      }

      overlay.addEventListener('click', (evt) => {
        if (evt.target === overlay) removeOverlay();
      });
      closeBtn.addEventListener('click', removeOverlay);
      document.addEventListener('keydown', onKey);
    });
  </script>





  <?php include('footer.php'); ?>

</body>

</html>
