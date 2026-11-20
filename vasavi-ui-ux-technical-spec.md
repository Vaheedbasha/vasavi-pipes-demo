# Vasavi Plast Industries

## UI/UX Technical & Design Specification (10/10 Modern Standard)

**Technology Stack:** PHP 8.2+, HTML5, Custom Modern CSS3, Vanilla JavaScript (Zero bloated frameworks)\
**Design Direction:** Modern Industrial Corporate (Soft-cornered, dynamic, high-contrast)\
**Core Palette:** Dark Charcoal (`#1F2429`), Vasavi Orange-Red (`#D94724`), Light Industrial Grey (`#F4F5F7`), Surface White (`#FFFFFF`).

------------------------------------------------------------------------

# 1. Design System & Modern Tokens

### 1.1 Border Radius & Modern Geometry
To eliminate the rigid, static "box template" feel, the interface uses modern, soft-curved geometry:
* **Interactive Cards:** `border-radius: 16px`
* **Buttons:** `border-radius: 10px`
* **Pill Badges & Tags:** `border-radius: 50px` (or `9999px`)
* **Inner Image Containers:** `border-radius: 12px`

### 1.2 Color Tokens
* **Primary Dark:** `#181B1F` (Header, footer, dark hero, manufacturing blocks)
* **Brand Accent:** `#D94724` (Vasavi Orange-Red for primary actions, active indicators, and accents)
* **Brand Accent Hover:** `#BF3A1A`
* **Brand Accent Glow:** `rgba(217, 71, 36, 0.28)`
* **Secondary Slate:** `#34495E`
* **Canvas Light:** `#F4F5F7`
* **Surface White:** `#FFFFFF`
* **Border Color:** `#E2E6EA`

### 1.3 Modern Typography Hierarchy
* **Headings:** `Manrope`, 700 / 800 weight, tight letter spacing (`-0.025em`)
* **Body & Data:** `Inter`, 400 / 500 / 600 weight
* **Hero Heading:** 56px – 64px desktop / 36px – 42px mobile
* **Section Heading:** 38px – 44px desktop / 28px – 32px mobile
* **Sub-labels & Badges:** 12px – 13px uppercase bold

------------------------------------------------------------------------

# 2. Section Layout Architecture (Unique Section Design)

### Section 01: Floating Glass Header
* **Style:** Floating navigation bar with glassmorphic blur on scroll (`backdrop-filter: blur(12px)`).
* **Left:** Official Vasavi logo (`assets/images/logo/logo.png`).
* **Center:** Minimalist desktop links (`Home`, `Products`, `Applications`, `Plant`, `Quality`, `Contact`).
* **Right:** Rounded primary CTA **"Dealer Enquiries"** + direct call shortcut.

### Section 02: Full-Bleed Atmospheric Industrial Hero
* **Visual:** Real high-resolution pipe factory warehouse photograph with a directional dark gradient mask (75% dark on text side, clear industrial factory on right side).
* **Typography:** Bold white headline: **"Piping Solutions Built for Tough Conditions."**
* **Copy:** Punchy 2-sentence summary in plain English.
* **3 Glassmorphic Metric Cards:** Rounded pills (`border-radius: 14px`) displaying *100% Virgin Polymer*, *High-Torque Threading*, and *Guntakal Central Logistics Hub*.
* **Actions:** Rounded primary button **"Explore Products"** + **"Contact Factory"**.

### Section 03: About the Plant (Editorial Asymmetry)
* **Layout:** Asymmetric split screen. Left: Bold company profile with short value statements. Right: Rounded photographic card (`border-radius: 16px`) showing the Guntakal twin-screw extrusion line with hover zoom.
* **Feature Cards:** 2 soft-rounded highlight cards (*Extrusion Facility* and *Categorized Range*).

### Section 04: Dynamic Product Hub (Interactive Filter Tabs)
* **Breaking the Box Grid:**
  * **Interactive Category Tabs:** `All Products` | `Borewell & Agri` | `Electrical Conduits` | `Plumbing Systems`.
  * **Specification Cards (`border-radius: 16px`):** Real commercial photography, item badge, title, concise description, and an authentic technical spec list:
    * *uPVC Pressure Pipes:* IS 4985:2000 | 20mm to 200mm | 2.5 to 6 Kgf/cm²
    * *Plumbing Pipes:* IS 4985:2000 | 20mm to 50mm | Solvent joint fit
    * *Rigid Electrical Conduits:* IS 9537 (Part-3) | 16mm to 63mm | Flame Retardant
    * *Blue Threaded Column Pipes:* ASTM-D-1785 Sch 40/80 | ½" to 2" | Borewell Submersible
    * *Ivory Threaded Casing Pipes:* ASTM-D-1785 Sch 40/80 | ½" to 2" | Deep Well Stabilization
  * **Hover Effects:** Smooth lift (`translateY(-8px)`), animated top accent bar, and image zoom.
  * **Bottom Banner:** High-visibility dealer pricing callout.

### Section 05: Product Applications
* **Layout:** Asymmetrical 4-quadrant feature layout with Lucide stroke icons.
* **Sectors:** *Agricultural Deep Borewells*, *Electrical Conduit Routing*, *Municipal Water Supply*, *Commercial Plumbing*.

### Section 06: Manufacturing & Extrusion Focus (Dark Charcoal Section)
* **Background:** Deep industrial charcoal (`#181B1F`).
* **Visual:** 3 photographic cards with rounded corners detailing *Automated Extrusion Lines*, *Vacuum Sizing Tanks*, and *Hydrostatic Testing*.

### Section 07: Quality Commitment
* **Layout:** Clean white surface detailing virgin polymer compounding, dimensional tolerance, and compliance transparency.

### Section 08: Dealer & Wholesale Partnership Callout
* **Visual:** Brand orange-red card (`border-radius: 20px`) with radial glow: **"Become an Authorized Vasavi Pipes Dealer"**.
* **Actions:** Direct call button + 1-tap WhatsApp chat button.

### Section 09: Plant Location & Direct Contact
* **Layout:** 2-column layout.
* **Left:** Verified contact channels (Plot No. E-2, IDA, Guntakal; Phone: 08552-226846 / 223623; Mobile: 9948312666; Email: vasavipipes@gmail.com).
* **Right:** Logistics hub card detailing Guntakal rail/road distribution across South India.

### Section 10: Modern Dark Footer
* **Visual:** Dark charcoal (`#14171A`), 4-column structured links, copyright, and Back-to-Top button.

### Floating WhatsApp Action Widget
* Fixed bottom-right circular green button (`border-radius: 50%`) with WhatsApp icon, pulsing subtly to let mobile/desktop buyers chat directly with the factory in 1 tap.

------------------------------------------------------------------------

# 3. Animation & Interaction Specifications

1. **Scroll-Triggered Reveals:** Sections and cards fade-in and slide-up as they enter the viewport (`opacity: 0; transform: translateY(24px)` to `opacity: 1; transform: translateY(0)` with `transition: 0.6s cubic-bezier(0.16, 1, 0.3, 1)`).
2. **Product Tab Transitions:** Instant animated filtering of cards with CSS opacity and transform transitions.
3. **Card Hover Physics:**
   * `transform: translateY(-8px)`
   * `box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.12)`
   * Image scale: `transform: scale(1.06)` with `overflow: hidden`
4. **Button Micro-Interactions:**
   * Scale press: `transform: scale(0.98)` on `:active`
   * Hover elevation and glow: `transform: translateY(-2px); box-shadow: 0 8px 22px rgba(217, 71, 36, 0.35)`
   * Arrow slide: `transform: translateX(5px)` on hover.
