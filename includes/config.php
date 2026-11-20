<?php
/**
 * Vasavi Plast Industries - Configuration (Verified Data)
 * Source: vasavipipes.com/contact.htm
 */

// Core Brand Identity
define('SITE_NAME', 'Vasavi Plast Industries');
define('SITE_TAGLINE', 'PVC PIPES & FITTINGS');
define('SITE_TITLE', 'Vasavi Plast Industries | PVC Pipes & Fittings Manufacturer Guntakal');
define('SITE_DESCRIPTION', 'Vasavi Plast Industries manufactures high-grade uPVC water pipes (IS 4985), electrical conduits (IS 9537), and ASTM-D-1785 threaded column & casing pipes in Guntakal, Andhra Pradesh.');

// Verified Company Information
$company_info = [
    'name' => 'Vasavi Plast Industries',
    'corporate_name' => 'Vasavi Pipes Private Limited',
    'cin' => 'U45200AP2006PTC049993',
    'established' => '2006',
    'experience_years' => '18+',
    'promoters' => 'Sathrasala Family (Sathrasala Rama Mohan Gupta, S. Sridevi, S. Rajyalakshmi)',
    'tagline' => 'PVC PIPES & FITTINGS',
    'location_short' => 'GUNTAKAL · ANDHRA PRADESH',
    'city' => 'Guntakal',
    'district' => 'Anantapur District',
    'state' => 'Andhra Pradesh',
    'country' => 'India',
    'address' => 'Plot No. E-2, Industrial Development Area, Gooty Road, Guntakal, Dist. Anantapur, Andhra Pradesh - 515801, India',
    'phone_office' => '+91-08552-226846',
    'phone_factory' => '+91-08552-223623',
    'phone_mobile' => '+91-9948312666',
    'phone_display' => '+91 99483 12666',
    'phone_tel' => 'tel:+919948312666',
    'whatsapp_url' => 'https://wa.me/919948312666?text=Hi%2C%20I%20am%20interested%20in%20Vasavi%20Pipes%20pricing%20and%20specifications.',
    'email' => 'vasavipipes@gmail.com',
    'website' => 'www.vasavipipes.com',
    'business_hours' => 'Mon – Sat: 9:00 AM – 6:30 PM IST',
    'about_copy' => 'Established in 2006 by the Sathrasala family, Vasavi Plast Industries has over 18 years of extrusion manufacturing experience in Guntakal, Andhra Pradesh. We produce BIS and ASTM certified uPVC pipes, rigid electrical conduits, and heavy-duty borewell column pipes for dealers, contractors, and farmers across South India.',
    'footer_copy' => 'Vasavi Plast Industries — Reliable PVC Pipes & Fittings manufactured with virgin polymer compounding at our Guntakal plant, Andhra Pradesh. Est. 2006.',
];

// Navigation Items (Exact anchor links on index.php)
$nav_items = [
    ['name' => 'Home', 'url' => '#hero'],
    ['name' => 'About Us', 'url' => '#about'],
    ['name' => 'Products', 'url' => '#products'],
    ['name' => 'Applications', 'url' => '#applications'],
    ['name' => 'Manufacturing', 'url' => '#manufacturing'],
    ['name' => 'Contact', 'url' => '#contact'],
];

// Hero Metrics Badges
$hero_metrics = [
    [
        'icon' => 'shield-check',
        'title' => 'BIS & ASTM Certified',
        'sub' => 'IS 4985 · IS 9537 · ASTM D-1785'
    ],
    [
        'icon' => 'layers',
        'title' => '20mm to 200mm Range',
        'sub' => 'Pressure classes 2.5 to 6 Kgf/cm²'
    ],
    [
        'icon' => 'map-pin',
        'title' => 'Guntakal Central Junction',
        'sub' => 'Direct freight across AP, KA & TS'
    ]
];

// Product Filter Tabs
$product_filters = [
    ['id' => 'all', 'name' => 'All Products'],
    ['id' => 'borewell-agri', 'name' => 'Borewell & Agriculture'],
    ['id' => 'electrical', 'name' => 'Electrical Conduits'],
    ['id' => 'plumbing-water', 'name' => 'Plumbing & Water'],
];

// Verified Product Portfolio
$products = [
    [
        'id' => 'upvc-pipes',
        'filter_group' => 'plumbing-water',
        'name' => 'uPVC Water Pipes',
        'badge' => 'IS 4985:2000',
        'category' => 'Potable Water & Irrigation',
        'image' => 'assets/images/products/upvc-pipes.jpg',
        'summary' => 'High-strength uPVC pipes for potable water, plumbing, and farm irrigation.',
        'desc' => 'Made with 100% virgin polymer for smooth internal flow, zero scaling, and long underground life.',
        'placeholder_label' => 'uPVC WATER PIPES',
        'specs' => [
            'Standard' => 'IS 4985:2000',
            'Size Range' => '20 mm to 200 mm',
            'Pressure' => '2.5, 4, 6 Kgf/cm² (Class 1, 2, 3)',
            'Joint Type' => 'Solvent Socket Joint'
        ]
    ],
    [
        'id' => 'plumbing-pipes',
        'filter_group' => 'plumbing-water',
        'name' => 'Plumbing Pipes & Fittings',
        'badge' => 'IS 4985:2000',
        'category' => 'Commercial & Residential Plumbing',
        'image' => 'assets/images/products/plumbing-pipes.jpg',
        'summary' => 'Precision plumbing pipes designed for homes, apartments, and commercial complexes.',
        'desc' => 'Engineered for leak-proof joints, high burst strength, and hassle-free solvent cement fitment.',
        'placeholder_label' => 'PLUMBING PIPES',
        'specs' => [
            'Standard' => 'IS 4985:2000',
            'Size Range' => '20 mm to 50 mm',
            'Key Feature' => 'Lead-Free Safe Drinking Water',
            'Joint Type' => 'Precision Socket Fit'
        ]
    ],
    [
        'id' => 'pvc-conduits',
        'filter_group' => 'electrical',
        'name' => 'Rigid PVC Electrical Conduits',
        'badge' => 'IS 9537 (Part-3)',
        'category' => 'Cable Protection & Concealed Wiring',
        'image' => 'assets/images/products/pvc-conduits.jpg',
        'summary' => 'Flame-retardant conduits for surface and concealed electrical wiring.',
        'desc' => 'High dielectric insulation and impact resistance safeguard electrical cables from fire and physical damage.',
        'placeholder_label' => 'ELECTRICAL CONDUITS',
        'specs' => [
            'Standard' => 'IS 9537 (Part-3): 1983',
            'Size Range' => '16 mm to 63 mm',
            'Fire Rating' => 'Self-Extinguishing (FR)',
            'Duty' => 'Light, Medium & Heavy'
        ]
    ],
    [
        'id' => 'blue-threaded-pipes',
        'filter_group' => 'borewell-agri',
        'name' => 'Blue Threaded Column Pipes',
        'badge' => 'ASTM-D-1785',
        'category' => 'Submersible Borewell Extraction',
        'image' => 'assets/images/products/blue-threaded.jpg',
        'summary' => 'Heavy-duty column pipes designed to hold submersible pumps in deep borewells.',
        'desc' => 'Precision CNC square threads with rubber sealing rings support heavy pump loads with zero joint leakage.',
        'placeholder_label' => 'BLUE THREADED PIPES',
        'specs' => [
            'Standard' => 'ASTM-D-1785 (Sch-40 & 80)',
            'Size Range' => '½ inch to 2 inches',
            'Threading' => 'CNC Square Male-Female',
            'Depth Duty' => 'High-Load Submersible'
        ]
    ],
    [
        'id' => 'ivory-threaded-pipes',
        'filter_group' => 'borewell-agri',
        'name' => 'Ivory Threaded Casing Pipes',
        'badge' => 'ASTM-D-1785',
        'category' => 'Deep Borewell Stabilization',
        'image' => 'assets/images/products/ivory-threaded.jpg',
        'summary' => 'Sturdy casing pipes engineered to prevent borehole collapse in rocky and sandy soil.',
        'desc' => 'High crush and collapse resistance protects the well structure for decades of clean groundwater flow.',
        'placeholder_label' => 'IVORY CASING PIPES',
        'specs' => [
            'Standard' => 'ASTM-D-1785 (Sch-40 & 80)',
            'Size Range' => '½ inch to 2 inches',
            'Threading' => 'Flush Precision Threads',
            'Feature' => 'High Collapse Strength'
        ]
    ],
];

// Application Categories
$applications = [
    [
        'title' => 'Borewell & Deep Groundwater',
        'icon' => 'droplets',
        'desc' => 'Heavy-duty column and casing pipes built to extract groundwater from intense depths without pipe failure.',
        'tag' => 'Agri & Borewells',
        'metric' => 'Sch-40 & Sch-80 Heavy Duty'
    ],
    [
        'title' => 'Electrical Cable Concealment',
        'icon' => 'zap',
        'desc' => 'Fire-retardant rigid conduits protecting wiring in residential towers, commercial offices, and factories.',
        'tag' => 'Power & Safety',
        'metric' => 'IS 9537 Part-3 Certified'
    ],
    [
        'title' => 'Potable Water & Irrigation Mains',
        'icon' => 'layers',
        'desc' => 'Mirror-smooth uPVC pipes ensuring friction-free, scale-free water delivery for drinking networks and farms.',
        'tag' => 'Water & Irrigation',
        'metric' => 'Sizes up to 200 mm'
    ],
    [
        'title' => 'Commercial & Residential Plumbing',
        'icon' => 'building-2',
        'desc' => 'Reliable, leak-free plumbing pipes with precision solvent fitment for multi-story buildings and homes.',
        'tag' => 'Plumbing Systems',
        'metric' => 'Lead-Free Safe Water'
    ],
];

// Manufacturing Process Steps
$manufacturing_cards = [
    [
        'step' => '01',
        'title' => 'Virgin Polymer Compounding',
        'label' => 'MATERIAL PURITY',
        'image' => 'assets/images/factory/about-plant.jpg',
        'desc' => 'We blend 100% virgin PVC resin with heat stabilizers and impact modifiers for maximum pipe strength.'
    ],
    [
        'step' => '02',
        'title' => 'Twin-Screw Extrusion',
        'label' => 'AUTOMATED EXTRUSION',
        'image' => 'assets/images/factory/extrusion-line.jpg',
        'desc' => 'Multi-zone temperature control ensures uniform wall thickness and zero internal voids in every meter.'
    ],
    [
        'step' => '03',
        'title' => 'Vacuum Cooling & Sizing',
        'label' => 'CALIBRATED ROUNDNESS',
        'image' => 'assets/images/factory/about-plant.jpg',
        'desc' => 'Misting water baths and precision vacuum calibration tanks lock in exact outer diameters and wall thickness.'
    ],
    [
        'step' => '04',
        'title' => 'Hydrostatic & Impact Testing',
        'label' => 'QUALITY VERIFICATION',
        'image' => 'assets/images/factory/extrusion-line.jpg',
        'desc' => 'Each production batch undergoes pressure burst testing and drop-weight impact verification before dispatch.'
    ]
];
