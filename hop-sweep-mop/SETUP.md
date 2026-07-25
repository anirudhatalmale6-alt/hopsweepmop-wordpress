# Hop Sweep Mop — WordPress theme setup

Custom theme for Hop Sweep Mop Cleaning Services LLC (Dubai). Reproduces the
approved design with an online booking form, live Google reviews, and the
existing .html page URLs preserved for Google Ads.

## Install
1. In WordPress: Appearance > Themes > Add New > Upload Theme > `hop-sweep-mop.zip` > Activate.

## Create the 5 pages (exact slugs matter — they map to the existing URLs)
Create these Pages (Pages > Add New) with these exact slugs:

| Page title          | Slug                | Final URL                    |
|---------------------|---------------------|------------------------------|
| Home                | (set as front page) | /                            |
| Cleaning Services   | cleaning-services   | /cleaning-services.html      |
| Pricing             | cleaning-pricing    | /cleaning-pricing.html       |
| About Us            | about-cleaning      | /about-cleaning.html         |
| Contact Us          | contact-cleaning    | /contact-cleaning.html       |

- Settings > Reading > "Your homepage displays" = A static page > Homepage = Home.
- The theme auto-loads the right template per slug (front-page.php, page-<slug>.php).

## Preserve the .html URLs (important for Google Ads)
- The theme adds rewrite rules so /cleaning-services.html etc. resolve, outputs
  menu/links with the .html suffix, and 301-redirects the clean slug to .html.
- After creating the pages, go to **Settings > Permalinks** and click **Save**
  once (this flushes the rewrite rules). Recommended base permalink: "Post name".

## Booking form
- Built into the Home hero and the Contact page. On submit it emails
  info@hopsweepmop.com (see HSM_BOOKING_EMAIL in functions.php) via wp_mail.
- Recommended: install an SMTP plugin (e.g. WP Mail SMTP) so booking emails
  deliver reliably from Network Solutions. Optionally swap in a form plugin
  (Fluent Forms / Contact Form 7) if you prefer a drag-and-drop form later.

## Live Google reviews
- The homepage review slider is in front-page.php (REVIEWS array + slider).
- For auto-updating live reviews, install a Google reviews plugin and point it
  at the Google Business profile; then the slider can be replaced with its
  shortcode, or the plugin's block dropped into the review section.
- "See all on Google" / "Leave a Review" buttons already link to the Google page.

## Photos & videos
- Photos live in /assets and are optimised. Replace via Media Library on the live site.
- Videos: embed from YouTube (paste the link into a page) — not uploaded as files.

## Plugins used / recommended
- SEO: Rank Math or Yoast (titles, meta, sitemap, schema)
- Caching/speed: LiteSpeed Cache or WP Super Cache
- Security: Wordfence (free) — SiteLock is NOT required
- SMTP: WP Mail SMTP
- Redirects (extra safety): Redirection plugin, in addition to the theme's built-in .html redirects
