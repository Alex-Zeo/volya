# Volya Radio Website Plan
## WordPress High-Fidelity Website Specification v2.0

---

## Part 1: Verified Brand Research

### Sources Analyzed & Confirmed
| Platform | URL | Status |
|----------|-----|--------|
| **X/Twitter** | [@Volya4UA](https://x.com/Volya4UA) | Verified |
| **Spotify** | [Volya Radio Show](https://open.spotify.com/show/0DWkzKyzeGQ1UCIBNpU7im) | Verified |
| **Linktree** | [linktr.ee/VolyaRadio](https://linktr.ee/VolyaRadio) | Verified |
| **Instagram** | [@volya4ua](https://www.instagram.com/volya4ua/) | Verified |
| **YouTube** | [@volya4UA](https://www.youtube.com/@volya4UA) | Verified |
| **Bluesky** | [@volya4ua.bsky.social](https://bsky.app/profile/volya4ua.bsky.social) | Verified |
| **Facebook** | [Volya Radio](https://www.facebook.com/profile.php?id=61566814106204) | Verified |

### Confirmed Brand Assets

**Official Logo Source:**
```
https://ugc.production.linktr.ee/911e7da1-b035-47c9-8185-6ca4e899d1f4_VOLYA--15-.png
```

**Spotify Artwork Source:**
```
https://i.scdn.co/image/ab6765630000ba8a2f806b14f5077495eb3afc52
```

### Brand Identity Summary

| Element | Value |
|---------|-------|
| **Mission** | "To aid Ukraine in victory" |
| **Tagline** | "News & Analysis • Culture & History • Countering russian Disinfo" |
| **Handle** | @Volya4UA (consistent across all platforms) |
| **Voice** | Direct, professional, advocacy-focused, community-driven |
| **Schedule** | Live daily on X Spaces at Kyiv times: 2am, 9am, 7pm |

### Brand Messaging (Verified from Platforms)
- "We talk on and off air to support brave Ukrainians in their just fight against evil"
- "We fight russian propaganda"
- "Fighting russian disinfo"
- Associated hashtags: #SlavaUkraini #HeroiamSlava #UkraineWillWin

---

## Part 2: High-Fidelity Brand Style Guide

### Primary Color Palette

| Color Name | Hex | RGB | Usage | WCAG AA |
|------------|-----|-----|-------|---------|
| **Muted Teal** | `#2D6B67` | rgb(45, 107, 103) | Primary brand color, headers, primary buttons | Yes on white |
| **Dark Teal** | `#1A4645` | rgb(26, 70, 69) | Hover states, active elements | Yes on white |
| **Light Teal** | `#3D8B87` | rgb(61, 139, 135) | Links, accents | Check contrast |

### Accent Colors

| Color Name | Hex | RGB | Usage |
|------------|-----|-----|-------|
| **Orange** | `#F58800` | rgb(245, 136, 0) | CTAs, highlights, alerts |
| **Mustard Yellow** | `#FBBC24` | rgb(251, 188, 36) | Secondary accents, hover states |

### Ukrainian National Colors

| Color Name | Hex | RGB | Usage |
|------------|-----|-----|-------|
| **Brand Blue** | `#0057B7` | rgb(0, 87, 183) | Ukrainian blue accents, icons |
| **Brand Yellow** | `#FFDD00` | rgb(255, 221, 0) | Ukrainian yellow highlights |

### Neutral Palette (Dark Theme)

| Color Name | Hex | RGB | Usage |
|------------|-----|-----|-------|
| **Deep Navy** | `#051821` | rgb(5, 24, 33) | Footer background, darkest sections |
| **Dark Teal** | `#1A4645` | rgb(26, 70, 69) | Primary dark backgrounds |
| **Muted Teal** | `#2D6B67` | rgb(45, 107, 103) | Secondary backgrounds |
| **Divider Light** | `#C9CFCA` | rgb(201, 207, 202) | Borders, dividers |
| **Disabled** | `#B8BEBA` | rgb(184, 190, 186) | Disabled states |
| **Off White** | `#F8F4EE` | rgb(248, 244, 238) | Light section backgrounds |
| **White** | `#FFFFFF` | rgb(255, 255, 255) | Content areas, highlights |

### Text Colors (for dark backgrounds)

| Color Name | Hex | Usage |
|------------|-----|-------|
| **Primary Text** | `#F8F4EE` | Main body text on dark |
| **Secondary Text** | `#E3E5E2` | Subtitles, secondary info |
| **Muted Text** | `#D6DAD6` | Captions, timestamps |
| **Highlight Text** | `#FFFFFF` | Emphasized text |
| **Disabled Text** | `#B8BEBA` | Inactive elements |

### Alert & Status Colors

| Color Name | Hex | Usage |
|------------|-----|-------|
| **Alert Orange** | `#F58800` | Urgent notices, warnings |
| **Success Teal** | `#2D6B67` | Confirmed, verified badges |
| **Warning Yellow** | `#FBBC24` | Important notices |

### CSS Custom Properties
```css
:root {
  /* Primary Brand - Teal Palette */
  --color-primary: #2D6B67;
  --color-primary-dark: #1A4645;
  --color-primary-light: #3D8B87;

  /* Accent Colors */
  --color-orange: #F58800;
  --color-mustard: #FBBC24;

  /* Ukrainian National */
  --color-ua-blue: #0057B7;
  --color-ua-yellow: #FFDD00;
  --color-ua-gold: #FBBC24;

  /* Neutrals - Dark Theme */
  --color-navy-dark: #051821;
  --color-navy: #1A4645;
  --color-slate: #2D6B67;
  --color-gray-medium: #C9CFCA;
  --color-gray-light: #B8BEBA;
  --color-off-white: #F8F4EE;
  --color-white: #FFFFFF;

  /* Text Colors */
  --color-text-primary: #F8F4EE;
  --color-text-secondary: #E3E5E2;
  --color-text-muted: #D6DAD6;
  --color-text-highlight: #FFFFFF;
  --color-text-disabled: #B8BEBA;

  /* Alerts */
  --color-alert: #F58800;
  --color-success: #2D6B67;
  --color-warning: #FBBC24;

  /* Gradients */
  --gradient-hero: linear-gradient(135deg, #051821 0%, #1A4645 50%, #2D6B67 100%);
  --gradient-cta: linear-gradient(90deg, #F58800 0%, #FBBC24 100%);
  --gradient-ukraine: linear-gradient(180deg, #0057B7 50%, #FFDD00 50%);
  --gradient-teal: linear-gradient(135deg, #1A4645 0%, #2D6B67 100%);
}
```

---

### Typography System

#### Font Stack
```css
:root {
  --font-heading: 'Inter', 'Segoe UI', system-ui, -apple-system, sans-serif;
  --font-body: 'Inter', 'Segoe UI', system-ui, -apple-system, sans-serif;
  --font-accent: 'Space Grotesk', 'Inter', sans-serif;
}
```

**Rationale:** Inter is modern, highly legible, has excellent Ukrainian/Cyrillic support, and is available free via Google Fonts. Space Grotesk adds distinctive character for headlines.

#### Type Scale (Desktop)

| Element | Font | Weight | Size | Line Height | Letter Spacing | Color |
|---------|------|--------|------|-------------|----------------|-------|
| **Display** | Space Grotesk | 700 | 64px / 4rem | 1.1 | -0.02em | --color-navy |
| **H1** | Space Grotesk | 700 | 48px / 3rem | 1.15 | -0.01em | --color-navy |
| **H2** | Inter | 600 | 36px / 2.25rem | 1.2 | -0.005em | --color-navy |
| **H3** | Inter | 600 | 28px / 1.75rem | 1.3 | 0 | --color-navy |
| **H4** | Inter | 600 | 22px / 1.375rem | 1.35 | 0 | --color-navy |
| **Body Large** | Inter | 400 | 18px / 1.125rem | 1.6 | 0 | --color-navy |
| **Body** | Inter | 400 | 16px / 1rem | 1.6 | 0 | --color-navy |
| **Body Small** | Inter | 400 | 14px / 0.875rem | 1.5 | 0 | --color-slate |
| **Caption** | Inter | 500 | 12px / 0.75rem | 1.4 | 0.02em | --color-slate |
| **Button** | Inter | 600 | 16px / 1rem | 1 | 0.02em | inherit |
| **Button Small** | Inter | 600 | 14px / 0.875rem | 1 | 0.02em | inherit |

#### Responsive Type Scale
```css
/* Mobile (< 768px) */
@media (max-width: 767px) {
  --display-size: 40px;
  --h1-size: 32px;
  --h2-size: 26px;
  --h3-size: 22px;
  --body-large-size: 17px;
}

/* Tablet (768px - 1023px) */
@media (min-width: 768px) and (max-width: 1023px) {
  --display-size: 52px;
  --h1-size: 40px;
  --h2-size: 32px;
  --h3-size: 26px;
}
```

---

### Spacing System

| Token | Value | Usage |
|-------|-------|-------|
| `--space-xs` | 4px | Tight gaps |
| `--space-sm` | 8px | Icon spacing, small gaps |
| `--space-md` | 16px | Default component padding |
| `--space-lg` | 24px | Section padding (mobile) |
| `--space-xl` | 32px | Between elements |
| `--space-2xl` | 48px | Section padding (tablet) |
| `--space-3xl` | 64px | Section padding (desktop) |
| `--space-4xl` | 96px | Large section gaps |
| `--space-5xl` | 128px | Hero padding |

### Border Radius System

| Token | Value | Usage |
|-------|-------|-------|
| `--radius-sm` | 4px | Small buttons, tags |
| `--radius-md` | 8px | Cards, inputs |
| `--radius-lg` | 12px | Large cards, modals |
| `--radius-xl` | 16px | Feature cards |
| `--radius-2xl` | 24px | Hero elements |
| `--radius-full` | 9999px | Circular, pills |

### Shadow System

```css
:root {
  --shadow-sm: 0 1px 2px rgba(13, 27, 42, 0.05);
  --shadow-md: 0 4px 6px rgba(13, 27, 42, 0.07), 0 2px 4px rgba(13, 27, 42, 0.05);
  --shadow-lg: 0 10px 15px rgba(13, 27, 42, 0.1), 0 4px 6px rgba(13, 27, 42, 0.05);
  --shadow-xl: 0 20px 25px rgba(13, 27, 42, 0.15), 0 10px 10px rgba(13, 27, 42, 0.04);
  --shadow-glow-blue: 0 0 20px rgba(56, 126, 167, 0.3);
  --shadow-glow-yellow: 0 0 20px rgba(255, 215, 0, 0.3);
}
```

---

## Part 3: Site Architecture

```
volya-radio.com (or chosen domain)
│
├── / (Home - Landing Page)
│   ├── #hero
│   ├── #who-we-are
│   ├── #what-we-do
│   ├── #listen
│   ├── #fundraisers
│   └── #footer
│
├── /about (Future Phase 2)
├── /episodes (Future Phase 2)
├── /fundraisers (Future Phase 2)
├── /advocacy (Future Phase 2)
└── /contact (Future Phase 2)
```

---

## Part 4: High-Fidelity Section Specifications

---

### Section 1: Navigation Header

**Purpose:** Brand identity, primary navigation, key CTA

#### Desktop Layout (≥1024px)
```
┌────────────────────────────────────────────────────────────────────────────┐
│                                                                            │
│   [LOGO]  VOLYA RADIO          Who We Are  What We Do  Listen  Fundraise  │
│                                                                            │
│                                                      [ LISTEN LIVE 🔴 ]    │
│                                                                            │
└────────────────────────────────────────────────────────────────────────────┘
```

#### Mobile Layout (<768px)
```
┌────────────────────────────────────────┐
│   [LOGO]               [☰ MENU]        │
└────────────────────────────────────────┘
```

#### CSS Specifications
```css
.site-header {
  position: sticky;
  top: 0;
  z-index: 100;
  background: rgba(255, 255, 255, 0.95);
  backdrop-filter: blur(10px);
  border-bottom: 1px solid var(--color-gray-light);
  padding: var(--space-md) 0;
  height: 72px;
}

.header-container {
  max-width: 1280px;
  margin: 0 auto;
  padding: 0 var(--space-lg);
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.logo {
  height: 40px;
  width: auto;
}

.nav-link {
  font-size: 15px;
  font-weight: 500;
  color: var(--color-navy);
  text-decoration: none;
  padding: var(--space-sm) var(--space-md);
  border-radius: var(--radius-md);
  transition: all 0.2s ease;
}

.nav-link:hover {
  color: var(--color-primary);
  background: var(--color-off-white);
}

.cta-live {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-primary);
  color: white;
  font-weight: 600;
  padding: var(--space-sm) var(--space-lg);
  border-radius: var(--radius-full);
  text-decoration: none;
  transition: all 0.2s ease;
}

.cta-live::before {
  content: '';
  width: 8px;
  height: 8px;
  background: #FF4444;
  border-radius: 50%;
  animation: pulse 2s infinite;
}

@keyframes pulse {
  0%, 100% { opacity: 1; transform: scale(1); }
  50% { opacity: 0.7; transform: scale(1.2); }
}
```

---

### Section 2: Hero

**Purpose:** Immediate impact, mission statement, primary CTAs

#### Desktop Layout (≥1024px)
```
┌────────────────────────────────────────────────────────────────────────────┐
│                                                                            │
│                    ████████████████████████████████                        │
│                    ██                            ██                        │
│                    ██      [VOLYA RADIO LOGO]    ██                        │
│                    ██                            ██                        │
│                    ████████████████████████████████                        │
│                                                                            │
│                         V O L Y A   R A D I O                              │
│                                                                            │
│           ─────────────────────────────────────────────────                │
│                                                                            │
│                   Mission: To Aid Ukraine in Victory                       │
│                                                                            │
│              News & Analysis • Culture & History • Truth                   │
│                                                                            │
│                                                                            │
│         ┌─────────────────────┐    ┌─────────────────────┐                │
│         │   🎧 LISTEN ON      │    │   🐦 JOIN LIVE      │                │
│         │      SPOTIFY        │    │      ON X           │                │
│         └─────────────────────┘    └─────────────────────┘                │
│                                                                            │
│                                                                            │
│              ┌───────────────────────────────────────┐                    │
│              │  🔴 LIVE NOW  or  NEXT SHOW IN 2:34  │                    │
│              │     Daily at 2am • 9am • 7pm Kyiv    │                    │
│              └───────────────────────────────────────┘                    │
│                                                                            │
│                                                                            │
│                              ▼ SCROLL                                      │
│                                                                            │
└────────────────────────────────────────────────────────────────────────────┘

Background: Gradient from deep navy (#051821) to teal (#2D6B67)
           with subtle animated particles or Ukrainian-inspired geometric pattern
```

#### CSS Specifications
```css
.hero {
  min-height: calc(100vh - 72px);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: var(--space-4xl) var(--space-lg);
  background: var(--gradient-hero);
  position: relative;
  overflow: hidden;
}

.hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: url('/assets/pattern-ukraine.svg') repeat;
  opacity: 0.03;
  pointer-events: none;
}

.hero-logo {
  width: 120px;
  height: 120px;
  border-radius: var(--radius-2xl);
  box-shadow: var(--shadow-xl), var(--shadow-glow-blue);
  margin-bottom: var(--space-xl);
  animation: float 6s ease-in-out infinite;
}

@keyframes float {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-10px); }
}

.hero-title {
  font-family: var(--font-accent);
  font-size: var(--display-size, 64px);
  font-weight: 700;
  color: var(--color-white);
  letter-spacing: 0.1em;
  text-transform: uppercase;
  margin-bottom: var(--space-md);
}

.hero-mission {
  font-size: 28px;
  font-weight: 600;
  color: var(--color-ua-yellow);
  margin-bottom: var(--space-sm);
}

.hero-tagline {
  font-size: 18px;
  color: rgba(255, 255, 255, 0.8);
  margin-bottom: var(--space-2xl);
}

.hero-cta-group {
  display: flex;
  gap: var(--space-md);
  flex-wrap: wrap;
  justify-content: center;
  margin-bottom: var(--space-2xl);
}

.btn-primary {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: var(--color-white);
  color: var(--color-primary);
  font-weight: 600;
  font-size: 16px;
  padding: var(--space-md) var(--space-xl);
  border-radius: var(--radius-full);
  text-decoration: none;
  transition: all 0.3s ease;
  box-shadow: var(--shadow-lg);
}

.btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: var(--shadow-xl);
}

.btn-secondary {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: transparent;
  color: var(--color-white);
  font-weight: 600;
  font-size: 16px;
  padding: var(--space-md) var(--space-xl);
  border-radius: var(--radius-full);
  border: 2px solid rgba(255, 255, 255, 0.3);
  text-decoration: none;
  transition: all 0.3s ease;
}

.btn-secondary:hover {
  background: rgba(255, 255, 255, 0.1);
  border-color: rgba(255, 255, 255, 0.5);
}

.live-indicator {
  display: inline-flex;
  align-items: center;
  gap: var(--space-sm);
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(10px);
  padding: var(--space-md) var(--space-xl);
  border-radius: var(--radius-lg);
  color: var(--color-white);
  font-size: 14px;
}

.live-badge {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  background: #FF4444;
  color: white;
  font-weight: 700;
  font-size: 12px;
  padding: 4px 10px;
  border-radius: var(--radius-full);
  text-transform: uppercase;
  letter-spacing: 0.05em;
}

.scroll-indicator {
  position: absolute;
  bottom: var(--space-xl);
  left: 50%;
  transform: translateX(-50%);
  color: rgba(255, 255, 255, 0.5);
  animation: bounce 2s infinite;
}

@keyframes bounce {
  0%, 20%, 50%, 80%, 100% { transform: translateX(-50%) translateY(0); }
  40% { transform: translateX(-50%) translateY(-10px); }
  60% { transform: translateX(-50%) translateY(-5px); }
}
```

#### Mobile Adjustments
```css
@media (max-width: 767px) {
  .hero {
    min-height: calc(100vh - 60px);
    padding: var(--space-2xl) var(--space-md);
  }

  .hero-logo {
    width: 80px;
    height: 80px;
  }

  .hero-title {
    font-size: 32px;
    letter-spacing: 0.05em;
  }

  .hero-mission {
    font-size: 20px;
  }

  .hero-cta-group {
    flex-direction: column;
    width: 100%;
    max-width: 280px;
  }

  .btn-primary, .btn-secondary {
    width: 100%;
    justify-content: center;
  }
}
```

---

### Section 3: Who We Are

**Purpose:** Establish identity and values with visual impact

#### Desktop Layout (≥1024px)
```
┌────────────────────────────────────────────────────────────────────────────┐
│                                                                            │
│                              WHO WE ARE                                    │
│                    ─────────────────────────────                           │
│                                                                            │
│      We are volunteers from around the world who believe:                  │
│                                                                            │
│   ┌──────────────────┐  ┌──────────────────┐  ┌──────────────────┐        │
│   │                  │  │                  │  │                  │        │
│   │    🏆            │  │    ✋            │  │    ⚖️            │        │
│   │                  │  │                  │  │                  │        │
│   │  VICTORY FOR     │  │  AGGRESSION      │  │  JUSTICE OVER    │        │
│   │  UKRAINE         │  │  MUST NOT BE     │  │  CRIME           │        │
│   │                  │  │  REWARDED        │  │                  │        │
│   │  It is in the    │  │                  │  │  Justice must    │        │
│   │  world's         │  │  Reparations     │  │  prevail.        │        │
│   │  interest.       │  │  must be made.   │  │                  │        │
│   │                  │  │                  │  │                  │        │
│   └──────────────────┘  └──────────────────┘  └──────────────────┘        │
│                                                                            │
│                      ┌──────────────────┐                                 │
│                      │                  │                                 │
│                      │    🌍            │                                 │
│                      │                  │                                 │
│                      │  INTERNATIONAL   │                                 │
│                      │  BOUNDARIES      │                                 │
│                      │                  │                                 │
│                      │  Must be         │                                 │
│                      │  recognized.     │                                 │
│                      │                  │                                 │
│                      └──────────────────┘                                 │
│                                                                            │
└────────────────────────────────────────────────────────────────────────────┘

Background: Off-white (#F8F4EE) with subtle gradient
```

#### Value Card Component
```css
.who-we-are {
  background: var(--color-off-white);
  padding: var(--space-4xl) var(--space-lg);
}

.section-container {
  max-width: 1200px;
  margin: 0 auto;
}

.section-header {
  text-align: center;
  margin-bottom: var(--space-3xl);
}

.section-title {
  font-family: var(--font-accent);
  font-size: var(--h2-size, 36px);
  font-weight: 600;
  color: var(--color-navy);
  margin-bottom: var(--space-md);
}

.section-title::after {
  content: '';
  display: block;
  width: 60px;
  height: 4px;
  background: var(--gradient-ukraine);
  margin: var(--space-md) auto 0;
  border-radius: var(--radius-full);
}

.section-intro {
  font-size: 20px;
  color: var(--color-slate);
  max-width: 600px;
  margin: 0 auto;
}

.values-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-xl);
  margin-bottom: var(--space-xl);
}

.values-grid--centered {
  display: flex;
  justify-content: center;
}

.value-card {
  background: var(--color-white);
  border-radius: var(--radius-xl);
  padding: var(--space-xl);
  text-align: center;
  box-shadow: var(--shadow-md);
  transition: all 0.3s ease;
  border: 1px solid var(--color-gray-light);
}

.value-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-xl);
  border-color: var(--color-primary);
}

.value-icon {
  width: 64px;
  height: 64px;
  background: linear-gradient(135deg, var(--color-primary-light), var(--color-primary));
  border-radius: var(--radius-lg);
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto var(--space-lg);
  font-size: 28px;
  color: white;
}

.value-card:nth-child(2) .value-icon {
  background: linear-gradient(135deg, #F58800, #FBBC24);
}

.value-card:nth-child(3) .value-icon {
  background: linear-gradient(135deg, var(--color-ua-blue), #003A7A);
}

.value-card:nth-child(4) .value-icon {
  background: linear-gradient(135deg, var(--color-ua-gold), var(--color-ua-yellow));
  color: var(--color-navy);
}

.value-title {
  font-size: 18px;
  font-weight: 700;
  color: var(--color-navy);
  text-transform: uppercase;
  letter-spacing: 0.05em;
  margin-bottom: var(--space-sm);
}

.value-description {
  font-size: 15px;
  color: var(--color-slate);
  line-height: 1.6;
}
```

#### Responsive Grid
```css
@media (max-width: 1023px) {
  .values-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 767px) {
  .values-grid {
    grid-template-columns: 1fr;
    gap: var(--space-md);
  }

  .value-card {
    padding: var(--space-lg);
  }
}
```

---

### Section 4: What We Do

**Purpose:** Explain three pillars - Broadcast, Advocate, Fundraise

#### Desktop Layout (≥1024px)
```
┌────────────────────────────────────────────────────────────────────────────┐
│                                                                            │
│                             WHAT WE DO                                     │
│                    ─────────────────────────────                           │
│                                                                            │
│  ┌─────────────────────────────────────────────────────────────────────┐  │
│  │                                                                      │  │
│  │  ┌─────────┐                                                        │  │
│  │  │  📻     │   BROADCAST                                            │  │
│  │  └─────────┘                                                        │  │
│  │             News • Discussion • Expert Interviews                    │  │
│  │                                                                      │  │
│  │  We host Twitter Spaces where listeners from around the world join   │  │
│  │  live conversations between co-hosts and up to 10 speakers.          │  │
│  │                                                                      │  │
│  │  Topics include:                                                     │  │
│  │                                                                      │  │
│  │    ┌─────────────────┐  ┌─────────────────┐  ┌─────────────────┐    │  │
│  │    │ Genocide        │  │ Book Club       │  │ Russia's        │    │  │
│  │    │ Documentation   │  │ Discussions     │  │ Absurdity       │    │  │
│  │    └─────────────────┘  └─────────────────┘  └─────────────────┘    │  │
│  │                                                                      │  │
│  │  All segments available on Spotify.                                  │  │
│  │                                                                      │  │
│  │                              [ 🎧 LISTEN ON SPOTIFY ]                │  │
│  │                                                                      │  │
│  └─────────────────────────────────────────────────────────────────────┘  │
│                                                                            │
│  ┌───────────────────────────────┐  ┌───────────────────────────────┐     │
│  │                               │  │                               │     │
│  │  ┌─────────┐                  │  │  ┌─────────┐                  │     │
│  │  │  📢     │  ADVOCATE        │  │  │  💙     │  FUNDRAISE       │     │
│  │  └─────────┘                  │  │  └─────────┘                  │     │
│  │                               │  │                               │     │
│  │  We promote advocacy for      │  │  ⚠️ TRANSPARENCY NOTICE       │     │
│  │  Ukraine through our own      │  │                               │     │
│  │  governments.                 │  │  • NOT a 501(c)(3) charity    │     │
│  │                               │  │  • Volunteers pay overhead    │     │
│  │  Your voice matters.          │  │  • We don't handle donations  │     │
│  │  Contact your                 │  │                               │     │
│  │  representatives.             │  │  What we DO:                  │     │
│  │                               │  │  ✓ Vet recipients             │     │
│  │                               │  │  ✓ Promote verified campaigns │     │
│  │                               │  │  ✓ Follow UA donation models  │     │
│  │                               │  │                               │     │
│  │  [ LEARN HOW ]                │  │  [ SEE FUNDRAISERS ]          │     │
│  │                               │  │                               │     │
│  └───────────────────────────────┘  └───────────────────────────────┘     │
│                                                                            │
└────────────────────────────────────────────────────────────────────────────┘

Background: White with subtle pattern
```

#### CSS Specifications
```css
.what-we-do {
  background: var(--color-white);
  padding: var(--space-4xl) var(--space-lg);
}

.pillar-card {
  background: var(--color-off-white);
  border-radius: var(--radius-xl);
  padding: var(--space-2xl);
  border: 1px solid var(--color-gray-light);
}

.pillar-card--featured {
  grid-column: 1 / -1;
  background: linear-gradient(135deg, var(--color-off-white), rgba(56, 126, 167, 0.05));
}

.pillar-header {
  display: flex;
  align-items: center;
  gap: var(--space-md);
  margin-bottom: var(--space-lg);
}

.pillar-icon {
  width: 48px;
  height: 48px;
  background: var(--color-primary);
  border-radius: var(--radius-md);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 24px;
  color: white;
}

.pillar-title {
  font-size: 24px;
  font-weight: 700;
  color: var(--color-navy);
  text-transform: uppercase;
  letter-spacing: 0.03em;
}

.pillar-subtitle {
  font-size: 16px;
  color: var(--color-primary);
  font-weight: 500;
}

.topic-tags {
  display: flex;
  flex-wrap: wrap;
  gap: var(--space-sm);
  margin: var(--space-lg) 0;
}

.topic-tag {
  background: var(--color-white);
  border: 1px solid var(--color-gray-light);
  padding: var(--space-sm) var(--space-md);
  border-radius: var(--radius-full);
  font-size: 14px;
  font-weight: 500;
  color: var(--color-navy);
}

.transparency-notice {
  background: rgba(196, 30, 58, 0.05);
  border-left: 4px solid var(--color-alert);
  padding: var(--space-md);
  border-radius: 0 var(--radius-md) var(--radius-md) 0;
  margin: var(--space-lg) 0;
}

.transparency-title {
  font-size: 14px;
  font-weight: 700;
  color: var(--color-alert);
  text-transform: uppercase;
  letter-spacing: 0.05em;
  margin-bottom: var(--space-sm);
  display: flex;
  align-items: center;
  gap: var(--space-sm);
}

.transparency-list {
  list-style: none;
  padding: 0;
  margin: 0;
  font-size: 14px;
  color: var(--color-navy);
}

.transparency-list li {
  padding: 4px 0;
}

.what-we-do-list {
  list-style: none;
  padding: 0;
  margin: var(--space-md) 0;
}

.what-we-do-list li {
  padding: 4px 0;
  color: var(--color-navy);
  font-size: 15px;
}

.what-we-do-list li::before {
  content: '✓';
  color: var(--color-success);
  font-weight: bold;
  margin-right: var(--space-sm);
}

.pillars-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: var(--space-xl);
  margin-top: var(--space-xl);
}

@media (max-width: 767px) {
  .pillars-grid {
    grid-template-columns: 1fr;
  }
}
```

---

### Section 5: Join / Listen

**Purpose:** Convert visitors with clear schedule and embeds

#### Desktop Layout (≥1024px)
```
┌────────────────────────────────────────────────────────────────────────────┐
│                                                                            │
│                        JOIN THE CONVERSATION                               │
│                    ─────────────────────────────                           │
│                                                                            │
│                     Live on X Spaces Daily (Kyiv Time)                     │
│                                                                            │
│       ┌────────────────┐  ┌────────────────┐  ┌────────────────┐          │
│       │                │  │                │  │                │          │
│       │   ☀️ MORNING   │  │   🌤️ MIDDAY   │  │   🌙 EVENING  │          │
│       │                │  │                │  │                │          │
│       │    02:00       │  │    09:00       │  │    19:00       │          │
│       │     AM         │  │     AM         │  │     PM         │          │
│       │                │  │                │  │                │          │
│       │  Kyiv / UTC+2  │  │  Kyiv / UTC+2  │  │  Kyiv / UTC+2  │          │
│       │                │  │                │  │                │          │
│       └────────────────┘  └────────────────┘  └────────────────┘          │
│                                                                            │
│                       [ 🐦 FOLLOW @VOLYA4UA ON X ]                         │
│                                                                            │
│       ─────────────────────── OR ───────────────────────                   │
│                                                                            │
│       ┌────────────────────────────────────────────────────────┐          │
│       │                                                        │          │
│       │              [SPOTIFY PLAYER EMBED]                    │          │
│       │                                                        │          │
│       │   ▶️  Latest Episode Title Here                        │          │
│       │      Volya Radio Show                                  │          │
│       │                                                        │          │
│       └────────────────────────────────────────────────────────┘          │
│                                                                            │
│                    Listen to past episodes anytime                         │
│                                                                            │
└────────────────────────────────────────────────────────────────────────────┘

Background: Gradient from navy to primary blue (same as hero)
```

#### CSS Specifications
```css
.listen-section {
  background: var(--gradient-hero);
  padding: var(--space-4xl) var(--space-lg);
  color: var(--color-white);
}

.listen-section .section-title {
  color: var(--color-white);
}

.listen-section .section-title::after {
  background: var(--color-ua-yellow);
}

.schedule-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-lg);
  max-width: 700px;
  margin: 0 auto var(--space-2xl);
}

.schedule-card {
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(10px);
  border-radius: var(--radius-xl);
  padding: var(--space-xl);
  text-align: center;
  border: 1px solid rgba(255, 255, 255, 0.1);
  transition: all 0.3s ease;
}

.schedule-card:hover {
  background: rgba(255, 255, 255, 0.15);
  transform: translateY(-4px);
}

.schedule-icon {
  font-size: 32px;
  margin-bottom: var(--space-sm);
}

.schedule-label {
  font-size: 12px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.1em;
  color: var(--color-ua-yellow);
  margin-bottom: var(--space-sm);
}

.schedule-time {
  font-family: var(--font-accent);
  font-size: 36px;
  font-weight: 700;
  line-height: 1;
}

.schedule-period {
  font-size: 16px;
  font-weight: 500;
  margin-bottom: var(--space-sm);
}

.schedule-timezone {
  font-size: 12px;
  color: rgba(255, 255, 255, 0.6);
}

.divider-or {
  display: flex;
  align-items: center;
  gap: var(--space-lg);
  margin: var(--space-2xl) auto;
  max-width: 400px;
  color: rgba(255, 255, 255, 0.5);
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 0.1em;
}

.divider-or::before,
.divider-or::after {
  content: '';
  flex: 1;
  height: 1px;
  background: rgba(255, 255, 255, 0.2);
}

.spotify-embed {
  max-width: 600px;
  margin: 0 auto;
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-xl);
}

.spotify-embed iframe {
  width: 100%;
  height: 152px;
  border: none;
}

@media (max-width: 767px) {
  .schedule-grid {
    grid-template-columns: 1fr;
    max-width: 280px;
  }

  .schedule-card {
    padding: var(--space-lg);
  }

  .schedule-time {
    font-size: 28px;
  }
}
```

---

### Section 6: Current Fundraisers

**Purpose:** Showcase vetted campaigns with clear transparency

#### Desktop Layout (≥1024px)
```
┌────────────────────────────────────────────────────────────────────────────┐
│                                                                            │
│                       CURRENT VETTED FUNDRAISERS                           │
│                    ─────────────────────────────                           │
│                                                                            │
│   These campaigns have been personally verified by our volunteer network.  │
│   Support Ukraine directly through these trusted channels.                 │
│                                                                            │
│   ┌─────────────────┐  ┌─────────────────┐  ┌─────────────────┐           │
│   │                 │  │                 │  │                 │           │
│   │  [CAMPAIGN      │  │  [CAMPAIGN      │  │  [CAMPAIGN      │           │
│   │   IMAGE]        │  │   IMAGE]        │  │   IMAGE]        │           │
│   │                 │  │                 │  │                 │           │
│   │  ✓ VERIFIED     │  │  ✓ VERIFIED     │  │  ✓ VERIFIED     │           │
│   │                 │  │                 │  │                 │           │
│   │  Campaign Name  │  │  Campaign Name  │  │  Campaign Name  │           │
│   │                 │  │                 │  │                 │           │
│   │  Brief          │  │  Brief          │  │  Brief          │           │
│   │  description    │  │  description    │  │  description    │           │
│   │  of what this   │  │  of what this   │  │  of what this   │           │
│   │  supports...    │  │  supports...    │  │  supports...    │           │
│   │                 │  │                 │  │                 │           │
│   │  [ DONATE NOW ] │  │  [ DONATE NOW ] │  │  [ DONATE NOW ] │           │
│   │                 │  │                 │  │                 │           │
│   └─────────────────┘  └─────────────────┘  └─────────────────┘           │
│                                                                            │
│   ═══════════════════════════════════════════════════════════════════     │
│                                                                            │
│   ┌──────────────────────────────────────────────────────────────────┐    │
│   │  🇺🇦                                                              │    │
│   │                                                                   │    │
│   │  SUPPORT UKRAINE OFFICIALLY                                       │    │
│   │                                                                   │    │
│   │  United24 is the official fundraising platform of Ukraine.       │    │
│   │  100% of donations go directly to verified state programs.       │    │
│   │                                                                   │    │
│   │  u24.gov.ua                         [ DONATE TO UNITED24 ]       │    │
│   │                                                                   │    │
│   └──────────────────────────────────────────────────────────────────┘    │
│                                                                            │
└────────────────────────────────────────────────────────────────────────────┘

Background: Off-white
```

#### CSS Specifications
```css
.fundraisers-section {
  background: var(--color-off-white);
  padding: var(--space-4xl) var(--space-lg);
}

.fundraiser-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-xl);
  margin-bottom: var(--space-3xl);
}

.fundraiser-card {
  background: var(--color-white);
  border-radius: var(--radius-xl);
  overflow: hidden;
  box-shadow: var(--shadow-md);
  transition: all 0.3s ease;
  display: flex;
  flex-direction: column;
}

.fundraiser-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-xl);
}

.fundraiser-image {
  width: 100%;
  height: 180px;
  object-fit: cover;
  background: var(--color-gray-light);
}

.fundraiser-content {
  padding: var(--space-lg);
  flex: 1;
  display: flex;
  flex-direction: column;
}

.verified-badge {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  background: rgba(40, 167, 69, 0.1);
  color: var(--color-success);
  font-size: 11px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  padding: 4px 8px;
  border-radius: var(--radius-full);
  margin-bottom: var(--space-sm);
  width: fit-content;
}

.verified-badge::before {
  content: '✓';
}

.fundraiser-title {
  font-size: 18px;
  font-weight: 700;
  color: var(--color-navy);
  margin-bottom: var(--space-sm);
}

.fundraiser-description {
  font-size: 14px;
  color: var(--color-slate);
  line-height: 1.6;
  flex: 1;
  margin-bottom: var(--space-md);
}

.btn-donate {
  display: block;
  text-align: center;
  background: var(--color-primary);
  color: white;
  font-weight: 600;
  padding: var(--space-md);
  border-radius: var(--radius-md);
  text-decoration: none;
  transition: all 0.2s ease;
}

.btn-donate:hover {
  background: var(--color-primary-dark);
}

.united24-banner {
  background: linear-gradient(135deg, var(--color-ua-blue), #003A7A);
  border-radius: var(--radius-xl);
  padding: var(--space-2xl);
  display: grid;
  grid-template-columns: 1fr auto;
  gap: var(--space-xl);
  align-items: center;
  color: white;
}

.united24-flag {
  font-size: 48px;
  margin-bottom: var(--space-md);
}

.united24-title {
  font-size: 24px;
  font-weight: 700;
  margin-bottom: var(--space-sm);
}

.united24-description {
  font-size: 16px;
  color: rgba(255, 255, 255, 0.9);
  margin-bottom: var(--space-sm);
}

.united24-url {
  font-size: 14px;
  color: var(--color-ua-yellow);
  font-weight: 600;
}

.btn-united24 {
  background: var(--color-ua-yellow);
  color: var(--color-navy);
  font-weight: 700;
  padding: var(--space-md) var(--space-xl);
  border-radius: var(--radius-full);
  text-decoration: none;
  white-space: nowrap;
  transition: all 0.2s ease;
}

.btn-united24:hover {
  background: white;
  transform: scale(1.02);
}

@media (max-width: 1023px) {
  .fundraiser-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 767px) {
  .fundraiser-grid {
    grid-template-columns: 1fr;
  }

  .united24-banner {
    grid-template-columns: 1fr;
    text-align: center;
  }

  .btn-united24 {
    width: 100%;
  }
}
```

---

### Section 7: Footer

**Purpose:** Complete information, social links, legal notices

#### Desktop Layout (≥1024px)
```
┌────────────────────────────────────────────────────────────────────────────┐
│                                                                            │
│   ┌────────────────────────────────────────────────────────────────────┐  │
│   │                                                                     │  │
│   │   [LOGO]                                                            │  │
│   │                                                                     │  │
│   │   VOLYA RADIO                                                       │  │
│   │   Volunteers for Ukraine's Victory                                  │  │
│   │                                                                     │  │
│   │   CONNECT           LISTEN              SUPPORT                     │  │
│   │   ─────────         ──────              ───────                     │  │
│   │   X/Twitter         Spotify             United24                    │  │
│   │   Instagram         Live Spaces         Current Fundraisers         │  │
│   │   YouTube           Episode Archive                                 │  │
│   │   Bluesky                                                           │  │
│   │   Facebook                                                          │  │
│   │                                                                     │  │
│   │   ────────────────────────────────────────────────────────────────  │  │
│   │                                                                     │  │
│   │   #SlavaUkraini  #HeroiamSlava  #UkraineWillWin                     │  │
│   │                                                                     │  │
│   │   ────────────────────────────────────────────────────────────────  │  │
│   │                                                                     │  │
│   │   © 2024 Volya Radio. All content by volunteers.                    │  │
│   │   We are NOT a registered charity. Volunteers fund all overhead.    │  │
│   │                                                                     │  │
│   └────────────────────────────────────────────────────────────────────┘  │
│                                                                            │
└────────────────────────────────────────────────────────────────────────────┘

Background: Deep Navy (#051821)
```

#### CSS Specifications
```css
.site-footer {
  background: var(--color-navy-dark);
  color: var(--color-white);
  padding: var(--space-4xl) var(--space-lg) var(--space-2xl);
}

.footer-container {
  max-width: 1200px;
  margin: 0 auto;
}

.footer-brand {
  margin-bottom: var(--space-2xl);
}

.footer-logo {
  height: 48px;
  width: auto;
  margin-bottom: var(--space-md);
}

.footer-name {
  font-family: var(--font-accent);
  font-size: 24px;
  font-weight: 700;
  margin-bottom: var(--space-xs);
}

.footer-tagline {
  color: rgba(255, 255, 255, 0.7);
  font-size: 14px;
}

.footer-nav {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: var(--space-2xl);
  margin-bottom: var(--space-2xl);
}

.footer-nav-title {
  font-size: 12px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.1em;
  color: var(--color-ua-yellow);
  margin-bottom: var(--space-md);
}

.footer-nav-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer-nav-list li {
  margin-bottom: var(--space-sm);
}

.footer-nav-list a {
  color: rgba(255, 255, 255, 0.8);
  text-decoration: none;
  font-size: 14px;
  transition: color 0.2s ease;
}

.footer-nav-list a:hover {
  color: var(--color-white);
}

.footer-hashtags {
  text-align: center;
  padding: var(--space-xl) 0;
  border-top: 1px solid rgba(255, 255, 255, 0.1);
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  margin-bottom: var(--space-xl);
}

.hashtag {
  display: inline-block;
  color: var(--color-ua-yellow);
  font-weight: 600;
  font-size: 14px;
  margin: 0 var(--space-md);
}

.footer-legal {
  text-align: center;
  font-size: 13px;
  color: rgba(255, 255, 255, 0.5);
}

.footer-legal p {
  margin-bottom: var(--space-xs);
}

.footer-disclaimer {
  color: rgba(255, 255, 255, 0.7);
  font-weight: 500;
}

@media (max-width: 767px) {
  .footer-nav {
    grid-template-columns: 1fr;
    gap: var(--space-xl);
    text-align: center;
  }

  .footer-brand {
    text-align: center;
  }
}
```

---

## Part 5: WordPress Technical Specifications

### Recommended Theme Options

| Theme | Type | Price | Best For |
|-------|------|-------|----------|
| **Jestart** | Block/FSE | $0 | Full control, modern approach |
| **GeneratePress** | Hybrid | $0-$59 | Speed, flexibility |
| **Jestart + Jestar** | Block/FSE | $0 | Starter templates |
| **Jestart Core Web** | Block/FSE | $0 | Block patterns |
| **Jestart Theme** | Hybrid | $0-$69 | Visual building |

**Recommended:** GeneratePress + GenerateBlocks for best performance and flexibility.

### Essential Plugin Stack

| Plugin | Purpose | Free/Paid |
|--------|---------|-----------|
| **Jestart Security** | Firewall, malware scanning, 2FA | Free |
| **Jestart SEO** | Search optimization | Free |
| **Jestart Forms Lite** | Contact forms | Free |
| **WP Super Cache** or **LiteSpeed Cache** | Caching | Free |
| **Jestart Social** | Social icons widget | Free |
| **Jestart Blocks** | Extended blocks | Free |
| **Jestart Optimize** | Asset optimization | Free |
| **Jestart All-in-One Migrate** | Backups | Free |
| **Jestart Core Web Vitals** | Performance monitoring | Free |

### Spotify Embed Code
```html
<iframe
  style="border-radius:12px"
  src="https://open.spotify.com/embed/show/0DWkzKyzeGQ1UCIBNpU7im?utm_source=generator&theme=0"
  width="100%"
  height="152"
  frameBorder="0"
  allowfullscreen=""
  allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
  loading="lazy">
</iframe>
```

---

## Part 6: Responsive Breakpoints

```css
/* Mobile First Approach */

/* Small phones */
@media (min-width: 375px) { }

/* Large phones */
@media (min-width: 480px) { }

/* Tablets portrait */
@media (min-width: 768px) { }

/* Tablets landscape / Small laptops */
@media (min-width: 1024px) { }

/* Desktops */
@media (min-width: 1280px) { }

/* Large screens */
@media (min-width: 1536px) { }
```

---

## Part 7: Animation & Interaction Specifications

### Micro-interactions
```css
/* Button hover */
.btn {
  transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
}

.btn:hover {
  transform: translateY(-2px);
}

.btn:active {
  transform: translateY(0);
}

/* Card hover */
.card {
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-xl);
}

/* Link underline animation */
.link {
  position: relative;
}

.link::after {
  content: '';
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 0;
  height: 2px;
  background: currentColor;
  transition: width 0.3s ease;
}

.link:hover::after {
  width: 100%;
}
```

### Scroll Animations (AOS or CSS)
```css
/* Fade in up */
.animate-fade-up {
  opacity: 0;
  transform: translateY(20px);
  transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}

.animate-fade-up.visible {
  opacity: 1;
  transform: translateY(0);
}

/* Stagger children */
.stagger-children > *:nth-child(1) { transition-delay: 0ms; }
.stagger-children > *:nth-child(2) { transition-delay: 100ms; }
.stagger-children > *:nth-child(3) { transition-delay: 200ms; }
.stagger-children > *:nth-child(4) { transition-delay: 300ms; }
```

---

## Part 8: Content Requirements

### Required Assets

| Asset | Dimensions | Format | Source |
|-------|------------|--------|--------|
| **Logo (Primary)** | 200x200px min | PNG/SVG | From Linktree asset |
| **Logo (Horizontal)** | 400x100px | PNG/SVG | To be created |
| **Favicon** | 512x512px | PNG | From logo |
| **Hero Background** | 1920x1080px | WebP/JPG | Stock or custom |
| **Value Icons (4)** | 64x64px | SVG | Icon library |
| **Fundraiser Images** | 800x600px | WebP | From campaigns |
| **Social Sharing** | 1200x630px | PNG | OG image |

### External Links Inventory

| Platform | URL |
|----------|-----|
| **X/Twitter** | https://x.com/Volya4UA |
| **Spotify** | https://open.spotify.com/show/0DWkzKyzeGQ1UCIBNpU7im |
| **Instagram** | https://www.instagram.com/volya4ua/ |
| **YouTube** | https://www.youtube.com/@volya4UA |
| **Bluesky** | https://bsky.app/profile/volya4ua.bsky.social |
| **Facebook** | https://www.facebook.com/profile.php?id=61566814106204 |
| **Linktree** | https://linktr.ee/VolyaRadio |
| **United24** | https://u24.gov.ua |

---

## Part 9: Performance & Accessibility

### Performance Targets

| Metric | Target | Tool |
|--------|--------|------|
| Lighthouse Performance | ≥90 | Chrome DevTools |
| First Contentful Paint | <1.8s | WebPageTest |
| Largest Contentful Paint | <2.5s | WebPageTest |
| Time to Interactive | <3.5s | Lighthouse |
| Cumulative Layout Shift | <0.1 | Core Web Vitals |
| Total Blocking Time | <200ms | Lighthouse |

### Accessibility Requirements (WCAG 2.1 AA)

- [ ] Color contrast ratio ≥4.5:1 for normal text
- [ ] Color contrast ratio ≥3:1 for large text
- [ ] All images have descriptive alt text
- [ ] Keyboard navigation fully functional
- [ ] Focus indicators visible on all interactive elements
- [ ] Skip to content link present
- [ ] Proper heading hierarchy (single H1)
- [ ] Form inputs have associated labels
- [ ] Touch targets minimum 44x44px
- [ ] No content relies solely on color

---

## Part 10: Implementation Checklist

### Phase 1: Setup
- [ ] Register/configure domain
- [ ] Set up hosting (recommended: SiteGround, Cloudways, or WP Engine)
- [ ] Install WordPress
- [ ] Install and configure theme
- [ ] Install required plugins
- [ ] Configure SSL certificate
- [ ] Set up staging environment

### Phase 2: Design Implementation
- [ ] Import brand colors as CSS variables
- [ ] Configure typography settings
- [ ] Build header template
- [ ] Build footer template
- [ ] Create homepage sections (1-7)
- [ ] Configure mobile menu
- [ ] Add animations

### Phase 3: Content
- [ ] Upload logo and favicons
- [ ] Add hero content
- [ ] Add "Who We Are" content
- [ ] Add "What We Do" content
- [ ] Configure Spotify embed
- [ ] Add fundraiser cards
- [ ] Configure all social links
- [ ] Add meta descriptions

### Phase 4: Optimization & Launch
- [ ] Test all responsive breakpoints
- [ ] Run accessibility audit
- [ ] Run performance audit
- [ ] Test all links
- [ ] Configure caching
- [ ] Set up analytics
- [ ] Create XML sitemap
- [ ] Submit to search engines
- [ ] Final review
- [ ] Launch

---

## Summary

This high-fidelity plan provides complete specifications for the Volya Radio WordPress website with:

1. **Verified Brand Alignment** - Colors, assets, and messaging extracted from official platforms
2. **Complete Design System** - Typography, colors, spacing, shadows defined
3. **Detailed Component Specs** - CSS-ready specifications for every section
4. **Responsive Design** - Mobile-first breakpoints and adaptations
5. **Performance Focus** - Targets and optimization strategies
6. **Accessibility Compliance** - WCAG 2.1 AA requirements

**Key Brand Elements Confirmed:**
- Primary Color: `#2D6B67` (Muted Teal)
- Dark Teal: `#1A4645` (Hover/Active states)
- Deep Navy: `#051821` (Dark backgrounds)
- Orange Accent: `#F58800` (CTAs, alerts)
- Mustard Yellow: `#FBBC24` (Highlights)
- Ukrainian Blue: `#0057B7` + Yellow `#FFDD00`
- Logo Source: Linktree profile image
- Mission: "To aid Ukraine in victory"
- Social Handle: @Volya4UA (all platforms)

---

*Plan Version: 2.0*
*Last Updated: December 2024*
*For: Volya Radio volunteer team*
