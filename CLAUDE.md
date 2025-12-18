# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Volya Radio is a volunteer-driven organization supporting Ukraine's victory through radio broadcasts, advocacy, and vetted fundraising. This repository contains:
- **Static website** (`website/`) - Ready to deploy HTML/CSS/JS
- **WordPress theme** (`website/wordpress-theme/volya-radio/`) - CMS-managed version

Mission: "To aid Ukraine in victory"

## Development Commands

**No build system required** - This is a vanilla HTML/CSS/JS project with no npm dependencies.

### Static Site
```bash
# Simply open in browser
open website/index.html
```

### WordPress Theme
1. Zip the `website/wordpress-theme/volya-radio/` folder
2. Upload via WordPress Admin > Appearance > Themes > Add New > Upload
3. Activate and configure via Appearance > Customize > Volya Radio Settings

## Architecture

### Dual Deployment Model
The same design exists in two forms:
- `website/index.html` - Self-contained static page
- `website/wordpress-theme/` - Full WordPress theme with customizer integration

### Design System (CSS Custom Properties)
All visual styling is controlled via CSS variables in `website/css/style.css`:
- **Colors**: 8 palettes including Ukrainian national colors (#0057B7 blue, #FFDD00 yellow)
- **Brand Colors**: Deep Navy (#051821), Dark Teal (#1A4645), Muted Teal (#2D6B67), Orange (#F58800)
- **Typography**: Space Grotesk (headings), Inter (body) via Google Fonts
- **Spacing**: 4px base scale (--space-xs through --space-5xl)

### JavaScript Architecture
Vanilla JS using IIFE pattern in `website/js/main.js`:
- Header scroll effects
- Mobile menu toggling
- Smooth scroll navigation
- Dynamic Spotify episode loading (episode IDs in `showConfig` object need periodic updates)

### WordPress Theme Structure
- `functions.php` - Theme setup, security hardening, customizer registration
- `inc/customizer.php` - Editable settings (mission text, social URLs, Spotify ID)
- `template-parts/` - Reusable components (value cards, pillars, fundraisers)

## Key Patterns

### Section Order
1. Header (sticky nav)
2. Hero (mission, CTAs)
3. Team Leaderboard (host rankings)
4. What We Do (broadcast, advocate, fundraise)
5. Our Shows (Spotify embeds per show)
6. Who We Are (4 value cards)
7. Listen (schedule + embed)
8. Fundraisers (verified campaigns)
9. Footer

### Spotify Episode Integration
Episode IDs are stored in `js/main.js` in the `showConfig` object. Each show (Booms & Woe, Absurdistan, Understanding Genocide, etc.) has a specific episode ID that should be updated periodically to show latest content.

### Dark Theme
The entire site uses a dark theme. All sections should use:
- Dark backgrounds (`--color-navy-dark`, `--color-navy`)
- Light text (`--color-text-primary`, `--color-white`)
- Orange accents for CTAs (`--color-orange`)

## External Assets

- **Logo**: Hosted on Linktree CDN (referenced in HTML)
- **Fonts**: Google Fonts (Inter, Space Grotesk)
- **Profile Images**: Uses unavatar.io service for Twitter profile images

## Important Files

| File | Purpose |
|------|---------|
| `website/css/style.css` | All styling, design tokens (~2000 lines) |
| `website/js/main.js` | Interactions, episode loading |
| `website/index.html` | Static landing page |
| `VOLYA_RADIO_WEBSITE_PLAN.md` | Comprehensive 60KB design specification |

## Social Links

- X/Twitter: @Volya4UA
- Spotify: Volya Radio Show (ID: 0DWkzKyzeGQ1UCIBNpU7im)
- Instagram: @volya4ua
- YouTube: @volya4UA
