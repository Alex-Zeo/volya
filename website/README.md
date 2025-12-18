# Volya Radio Website

**Mission: To Aid Ukraine in Victory**

A high-fidelity website for Volya Radio - volunteers from around the world supporting Ukraine through news, analysis, advocacy, and vetted fundraising.

## Project Structure

```
volya/website/
├── index.html              # Static HTML landing page
├── css/
│   └── style.css           # Main stylesheet (~1,800 lines)
├── js/
│   └── main.js             # JavaScript interactions
├── assets/
│   └── images/             # Image assets (add logo, hero images here)
│
└── wordpress-theme/
    └── volya-radio/        # Complete WordPress theme
        ├── style.css       # Theme declaration
        ├── functions.php   # Theme setup & functions
        ├── header.php      # Header template
        ├── footer.php      # Footer template
        ├── front-page.php  # Landing page template
        ├── index.php       # Fallback template
        ├── css/
        │   └── main.css    # Main styles
        ├── js/
        │   └── main.js     # Scripts
        ├── inc/
        │   ├── customizer.php    # Theme customizer
        │   └── template-tags.php # Helper functions
        └── template-parts/
            ├── value-card-*.php      # Value proposition cards
            ├── pillar-*.php          # What we do pillars
            └── fundraiser-*.php      # Fundraiser templates
```

## Quick Start - Static Site

1. Open `index.html` in a browser to preview the site
2. All styles are in `css/style.css`
3. JavaScript interactions in `js/main.js`

## WordPress Installation

1. **Upload Theme:**
   - Zip the `wordpress-theme/volya-radio/` folder
   - Upload via WordPress Admin > Appearance > Themes > Add New > Upload

2. **Activate Theme:**
   - Go to Appearance > Themes
   - Activate "Volya Radio"

3. **Configure Settings:**
   - Go to Appearance > Customize > Volya Radio Settings
   - Update social media links
   - Upload custom logo
   - Adjust colors if needed

4. **Set Homepage:**
   - Create a new page (any title)
   - Go to Settings > Reading
   - Set "Your homepage displays" to "A static page"
   - Select your page as the homepage

## Features

- **Responsive Design** - Mobile-first, works on all devices
- **Fast Loading** - Optimized CSS, lazy-loaded embeds
- **Accessible** - WCAG 2.1 AA compliant
- **SEO Ready** - Semantic HTML, meta tags
- **Customizable** - WordPress Customizer integration
- **Spotify Integration** - Embedded player for podcast
- **Social Links** - All platforms connected

## Brand Colors

| Color | Hex | Usage |
|-------|-----|-------|
| Muted Teal | `#2D6B67` | Primary brand color |
| Dark Teal | `#1A4645` | Hover states, dark accents |
| Deep Navy | `#051821` | Footer, dark sections |
| Orange | `#F58800` | CTAs, alerts |
| Mustard Yellow | `#FBBC24` | Highlights, accents |
| Ukraine Blue | `#0057B7` | National color accent |
| Ukraine Yellow | `#FFDD00` | National color accent |
| Off White | `#F8F4EE` | Light backgrounds |

## Typography

- **Headings:** Space Grotesk (Google Fonts)
- **Body:** Inter (Google Fonts)

## Social Links

- X/Twitter: [@Volya4UA](https://x.com/Volya4UA)
- Spotify: [Volya Radio Show](https://open.spotify.com/show/0DWkzKyzeGQ1UCIBNpU7im)
- Instagram: [@volya4ua](https://www.instagram.com/volya4ua/)
- YouTube: [@volya4UA](https://www.youtube.com/@volya4UA)
- Bluesky: [@volya4ua.bsky.social](https://bsky.app/profile/volya4ua.bsky.social)
- Facebook: [Volya Radio](https://www.facebook.com/profile.php?id=61566814106204)
- Linktree: [linktr.ee/VolyaRadio](https://linktr.ee/VolyaRadio)

## Browser Support

- Chrome (last 2 versions)
- Firefox (last 2 versions)
- Safari (last 2 versions)
- Edge (last 2 versions)

## License

This theme is released under the GNU General Public License v2 or later.

---

**Slava Ukraini! Heroiam Slava!**

*Built with love by Volya Radio volunteers*
