/**
 * Volya Radio - Main JavaScript
 * Version: 1.0
 */

(function() {
  'use strict';

  // ==========================================================================
  // DOM Elements
  // ==========================================================================

  const header = document.getElementById('site-header');
  const menuToggle = document.getElementById('menu-toggle');
  const navMain = document.getElementById('nav-main');
  const navLinks = document.querySelectorAll('.nav-link');
  const animatedElements = document.querySelectorAll('.animate-on-scroll');

  // ==========================================================================
  // Header Scroll Effect
  // ==========================================================================

  let lastScrollY = window.scrollY;
  let ticking = false;

  function updateHeader() {
    const scrollY = window.scrollY;

    if (scrollY > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }

    lastScrollY = scrollY;
    ticking = false;
  }

  function onScroll() {
    if (!ticking) {
      window.requestAnimationFrame(updateHeader);
      ticking = true;
    }
  }

  window.addEventListener('scroll', onScroll, { passive: true });

  // ==========================================================================
  // Mobile Menu Toggle
  // ==========================================================================

  function toggleMenu() {
    const isActive = menuToggle.classList.toggle('active');
    navMain.classList.toggle('active');
    menuToggle.setAttribute('aria-expanded', isActive);

    // Prevent body scroll when menu is open
    document.body.style.overflow = isActive ? 'hidden' : '';
  }

  function closeMenu() {
    menuToggle.classList.remove('active');
    navMain.classList.remove('active');
    menuToggle.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
  }

  if (menuToggle) {
    menuToggle.addEventListener('click', toggleMenu);
  }

  // Close menu when clicking a nav link
  navLinks.forEach(link => {
    link.addEventListener('click', closeMenu);
  });

  // Close menu on escape key
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && navMain.classList.contains('active')) {
      closeMenu();
    }
  });

  // Close menu when clicking outside
  document.addEventListener('click', (e) => {
    if (navMain.classList.contains('active') &&
        !navMain.contains(e.target) &&
        !menuToggle.contains(e.target)) {
      closeMenu();
    }
  });

  // ==========================================================================
  // Smooth Scroll for Anchor Links
  // ==========================================================================

  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const targetId = this.getAttribute('href');

      if (targetId === '#') return;

      const targetElement = document.querySelector(targetId);

      if (targetElement) {
        e.preventDefault();

        const headerHeight = header.offsetHeight;
        const targetPosition = targetElement.getBoundingClientRect().top + window.scrollY - headerHeight;

        window.scrollTo({
          top: targetPosition,
          behavior: 'smooth'
        });

        // Update URL without jumping
        history.pushState(null, null, targetId);
      }
    });
  });

  // ==========================================================================
  // Scroll Reveal Animation
  // ==========================================================================

  function revealOnScroll() {
    const windowHeight = window.innerHeight;
    const revealPoint = 150;

    animatedElements.forEach(element => {
      const elementTop = element.getBoundingClientRect().top;

      if (elementTop < windowHeight - revealPoint) {
        element.classList.add('visible');
      }
    });
  }

  // Run on load
  revealOnScroll();

  // Run on scroll with throttle
  let scrollTimeout;
  window.addEventListener('scroll', () => {
    if (scrollTimeout) {
      window.cancelAnimationFrame(scrollTimeout);
    }
    scrollTimeout = window.requestAnimationFrame(revealOnScroll);
  }, { passive: true });

  // ==========================================================================
  // Active Navigation Link Highlighting
  // ==========================================================================

  function updateActiveNavLink() {
    const sections = document.querySelectorAll('section[id]');
    const scrollPosition = window.scrollY + header.offsetHeight + 100;

    sections.forEach(section => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.offsetHeight;
      const sectionId = section.getAttribute('id');

      if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
        navLinks.forEach(link => {
          link.classList.remove('active');
          if (link.getAttribute('href') === `#${sectionId}`) {
            link.classList.add('active');
          }
        });
      }
    });
  }

  window.addEventListener('scroll', updateActiveNavLink, { passive: true });

  // ==========================================================================
  // Live Show Time Indicator
  // ==========================================================================

  function updateLiveIndicator() {
    const liveIndicator = document.querySelector('.hero__live-indicator');
    if (!liveIndicator) return;

    // Get Kyiv time (UTC+2, or UTC+3 during DST)
    const now = new Date();
    const kyivOffset = 2; // Adjust for DST if needed
    const kyivTime = new Date(now.getTime() + (kyivOffset * 60 * 60 * 1000) + (now.getTimezoneOffset() * 60 * 1000));

    const kyivHour = kyivTime.getHours();
    const kyivMinute = kyivTime.getMinutes();

    // Show times: 2:00, 9:00, 19:00 Kyiv time
    const showTimes = [2, 9, 19];
    const showDuration = 2; // hours

    let isLive = false;
    let nextShowHour = null;

    // Check if currently live
    for (const showTime of showTimes) {
      if (kyivHour >= showTime && kyivHour < showTime + showDuration) {
        isLive = true;
        break;
      }
    }

    // Find next show
    if (!isLive) {
      for (const showTime of showTimes) {
        if (showTime > kyivHour || (showTime === kyivHour && kyivMinute === 0)) {
          nextShowHour = showTime;
          break;
        }
      }
      if (nextShowHour === null) {
        nextShowHour = showTimes[0]; // First show tomorrow
      }
    }

    // Update display
    const liveBadge = liveIndicator.querySelector('.live-badge');
    const timeText = liveIndicator.querySelector('span:last-child');

    if (liveBadge && timeText) {
      if (isLive) {
        liveBadge.innerHTML = '<span class="live-dot"></span> LIVE NOW';
        liveBadge.style.background = '#FF4444';
      } else {
        // Calculate time until next show
        let hoursUntil = nextShowHour - kyivHour;
        if (hoursUntil <= 0) hoursUntil += 24;
        let minutesUntil = 60 - kyivMinute;
        if (minutesUntil === 60) {
          minutesUntil = 0;
        } else {
          hoursUntil--;
        }

        liveBadge.innerHTML = '<span class="live-dot" style="background: #FFDD00;"></span> NEXT';
        liveBadge.style.background = 'rgba(255, 255, 255, 0.2)';
        timeText.textContent = `In ${hoursUntil}h ${minutesUntil}m • Daily at 2am • 9am • 7pm Kyiv`;
      }
    }
  }

  // Update every minute
  updateLiveIndicator();
  setInterval(updateLiveIndicator, 60000);

  // ==========================================================================
  // Accessibility: Reduce motion preference
  // ==========================================================================

  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

  function handleReducedMotion() {
    if (prefersReducedMotion.matches) {
      // Disable animations
      animatedElements.forEach(el => {
        el.classList.add('visible');
      });
    }
  }

  handleReducedMotion();
  prefersReducedMotion.addEventListener('change', handleReducedMotion);

  // ==========================================================================
  // External Link Handling
  // ==========================================================================

  document.querySelectorAll('a[target="_blank"]').forEach(link => {
    // Ensure rel="noopener noreferrer" for security
    if (!link.hasAttribute('rel')) {
      link.setAttribute('rel', 'noopener noreferrer');
    }

    // Add external link indicator for accessibility
    if (!link.querySelector('.visually-hidden')) {
      const srText = document.createElement('span');
      srText.className = 'visually-hidden';
      srText.textContent = ' (opens in new tab)';
      link.appendChild(srText);
    }
  });

  // ==========================================================================
  // Live Twitter Space Detection
  // ==========================================================================

  const liveSpaceContainer = document.getElementById('live-space');

  function checkLiveStatus() {
    if (!liveSpaceContainer) return;

    // Get Kyiv time (UTC+2, or UTC+3 during DST)
    const now = new Date();
    const kyivOffset = 2; // Adjust for DST if needed
    const kyivTime = new Date(now.getTime() + (kyivOffset * 60 * 60 * 1000) + (now.getTimezoneOffset() * 60 * 1000));

    const kyivHour = kyivTime.getHours();

    // Show times: 2:00, 9:00, 19:00 Kyiv time with 2 hour duration
    const showTimes = [2, 9, 19];
    const showDuration = 2; // hours

    let isLive = false;

    // Check if currently live
    for (const showTime of showTimes) {
      if (kyivHour >= showTime && kyivHour < showTime + showDuration) {
        isLive = true;
        break;
      }
    }

    // Show/hide live space container
    if (isLive) {
      liveSpaceContainer.style.display = 'block';
      liveSpaceContainer.classList.add('is-live');
    } else {
      liveSpaceContainer.style.display = 'none';
      liveSpaceContainer.classList.remove('is-live');
    }
  }

  // Check live status on load and every minute
  checkLiveStatus();
  setInterval(checkLiveStatus, 60000);

  // ==========================================================================
  // Dynamic Episode Loading for Shows
  // ==========================================================================

  const SPOTIFY_SHOW_ID = '0DWkzKyzeGQ1UCIBNpU7im';
  const SPOTIFY_OEMBED_URL = 'https://open.spotify.com/oembed';
  const EPISODE_REFRESH_INTERVAL = 60 * 60 * 1000; // 1 hour in milliseconds

  // Show configuration with latest episode IDs
  // NOTE: These episode IDs should be updated periodically to show the latest episodes
  // Last updated: December 2024
  const showConfig = {
    'booms': {
      episodeId: '0PWhCoVULVHrQay85UCFi3', // Booms & Woe - latest
      title: 'Booms & Woe'
    },
    'absurdistan': {
      episodeId: '7zZ40ul12JQSnaTxkAbQ8t', // This Week in Absurdistan - latest
      title: 'This Week in Absurdistan'
    },
    'genocide': {
      episodeId: '5s57dBb5TXQDQeSwAlxmVc', // Understanding Genocide / Yale Humanitarian Research Lab
      title: 'Understanding Genocide'
    },
    'bookclub': {
      episodeId: '4v7wtE2nqoX4C2f3xQCtFF', // Ukrainian Culture and Book Club
      title: 'Ukrainian Culture & Book Club'
    },
    'sbu': {
      episodeId: '6MNhbeepyOCuIghVhK0Cft', // Snoopin & Poopin SBU/Owls
      title: 'Snoopin & Poopin SBU'
    },
    'gmk': {
      episodeId: '7ugQnpSsa4KtmNiaigVhG2', // Good Morning Kyiv
      title: 'Good Morning Kyiv'
    }
  };

  // Load specific episode embeds for each show card
  function loadSpotifyEmbeds() {
    const showCards = document.querySelectorAll('.show-card[data-show]');
    const timestamp = Date.now();

    showCards.forEach(card => {
      const showKey = card.getAttribute('data-show');
      const container = card.querySelector('[data-episode-container]');
      if (!container || !showKey) return;

      const config = showConfig[showKey];
      if (!config || !config.episodeId) {
        // Fallback to main show if no specific episode
        container.innerHTML = `<div class="episode-placeholder"><div class="episode-loading">Episode not available</div></div>`;
        return;
      }

      // Create iframe with the specific episode for this show
      const iframe = document.createElement('iframe');
      iframe.src = `https://open.spotify.com/embed/episode/${config.episodeId}?utm_source=generator&theme=0&t=${timestamp}`;
      iframe.allow = 'autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture';
      iframe.loading = 'lazy';
      iframe.title = `Latest ${config.title} Episode on Spotify`;
      iframe.style.borderRadius = '12px';
      iframe.style.width = '100%';
      iframe.style.height = '152px';
      iframe.style.border = 'none';

      // Replace placeholder with iframe
      container.innerHTML = '';
      container.appendChild(iframe);
    });

    // Also update the main "Join the Conversation" embed with the latest episode overall
    const listenEmbed = document.querySelector('.spotify-embed iframe');
    if (listenEmbed) {
      // Use the most recent episode (Booms & Woe is usually daily)
      const latestEpisodeId = showConfig.booms.episodeId;
      listenEmbed.src = `https://open.spotify.com/embed/episode/${latestEpisodeId}?utm_source=generator&theme=0&t=${timestamp}`;
    }

    console.log('[Volya Radio] Episode embeds loaded at', new Date().toLocaleTimeString());
  }

  function getLastRefreshTime() {
    try {
      return localStorage.getItem('volya_last_episode_refresh');
    } catch (e) {
      return null;
    }
  }

  function setLastRefreshTime() {
    try {
      localStorage.setItem('volya_last_episode_refresh', Date.now().toString());
    } catch (e) {
      // localStorage not available
    }
  }

  function shouldRefreshEpisodes() {
    const lastRefresh = getLastRefreshTime();
    if (!lastRefresh) return true;

    const timeSinceRefresh = Date.now() - parseInt(lastRefresh, 10);
    return timeSinceRefresh >= EPISODE_REFRESH_INTERVAL;
  }

  function initEpisodeLoading() {
    // Load embeds on page load
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', loadSpotifyEmbeds);
    } else {
      loadSpotifyEmbeds();
    }

    // Set up hourly refresh
    setInterval(() => {
      if (shouldRefreshEpisodes()) {
        loadSpotifyEmbeds();
        setLastRefreshTime();
      }
    }, EPISODE_REFRESH_INTERVAL);
  }

  // Initialize episode loading system
  initEpisodeLoading();

  // ==========================================================================
  // Console Message
  // ==========================================================================

  console.log(
    '%c🇺🇦 Volya Radio - Mission: To Aid Ukraine in Victory 🇺🇦',
    'background: linear-gradient(180deg, #0057B7 50%, #FFDD00 50%); color: white; font-size: 16px; padding: 10px 20px; font-weight: bold;'
  );
  console.log('Follow us: https://x.com/Volya4UA');
  console.log('Listen: https://open.spotify.com/show/0DWkzKyzeGQ1UCIBNpU7im');

})();
