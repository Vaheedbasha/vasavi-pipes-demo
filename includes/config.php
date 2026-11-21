<?php
/**
 * Vasavi Pipes Private Limited - Configuration (Verified Corporate Data)
 * Primary Inception: 20 April 2006 | CIN: U45200AP2006PTC049993
 * Location: Guntakal, Anantapur District, Andhra Pradesh, India
 */

// Core Brand Identity
define('SITE_NAME', 'Vasavi Pipes Private Limited');
define('BRAND_SHORT_NAME', 'Vasavi Pipes');
define('SITE_TAGLINE', 'PVC PIPES & FITTINGS');
define('SITE_TITLE', 'Vasavi Pipes Private Limited | PVC Pipes & Fittings Manufacturer Guntakal');
define('SITE_DESCRIPTION', 'Vasavi Pipes Private Limited manufactures precision uPVC water pipes (IS 4985), rigid electrical conduits (IS 9537), and threaded borewell column & casing pipes (ASTM-D-1785) in Guntakal, Andhra Pradesh.');

// Verified Company Information
$company_info = [
    'name' => 'Vasavi Pipes Private Limited',
    'brand_name' => 'Vasavi Pipes',
    'cin' => 'U45200AP2006PTC049993',
    'established' => '2006',
    'incorporation_date' => '20 April 2006',
    'roc' => 'RoC - Vijayawada (formerly Hyderabad)',
    'company_category' => 'Company limited by shares / Non-government company',
    'tagline' => 'PVC PIPES & FITTINGS',
    'location_short' => 'GUNTAKAL · ANDHRA PRADESH',
    'city' => 'Guntakal',
    'district' => 'Anantapur District',
    'state' => 'Andhra Pradesh',
    'country' => 'India',
    // Corporate Registered Office (MCA Registry)
    'registered_office' => 'D.No. 15-140, Ramaswamy Temple Street, Guntakal, Anantapur Dist., Andhra Pradesh - 515801, India',
    // Factory / Works Plant (Industrial Development Area)
    'works_address' => 'Plot No. E-2, Industrial Development Area (IDA), Gooty Road, Guntakal, Dist. Anantapur, Andhra Pradesh - 515801, India',
    'address' => 'Plot No. E-2, Industrial Development Area, Gooty Road, Guntakal, Dist. Anantapur, Andhra Pradesh - 515801, India',
    // Leadership & Directors
    'directors' => [
        'Sathrasala Sridevi (Director)',
        'Sathrasala Rajyalakshmi (Director)'
    ],
    'leadership_md' => 'Vishnu Chaitanya Sathrasala',
    'leadership_md_title' => 'Managing Director',
    'leadership_md_note' => 'Listed as Managing Director on LinkedIn; formal designation subject to company confirmation',
    'founder_promoters' => 'Sathrasala Family',
    'founder_note' => 'Promoted by the Sathrasala industrial family in Guntakal; specific designated Founder title subject to company confirmation',
    // Contacts & Telephony
    'phone_office' => '+91-08552-226846',
    'phone_factory' => '+91-08552-223623',
    'phone_mobile' => '+91-9948312666',
    'phone_display' => '+91 99483 12666',
    'phone_tel' => 'tel:+919948312666',
    'whatsapp_url' => 'https://wa.me/919948312666?text=' . urlencode('Hi Vasavi Pipes, I would like to enquire about your product catalog, specifications, and wholesale terms.'),
    'email' => 'vasavipipes@gmail.com',
    'instagram_url' => 'https://www.instagram.com/vasavipipes/',
    'linkedin_md_url' => 'https://in.linkedin.com/in/vishnu-chaitanya-sathrasala-6b671b211',
    'zaubacorp_url' => 'https://www.zaubacorp.com/VASAVI-PIPES-PRIVATE-LIMITED-U45200AP2006PTC049993',
    'website' => 'www.vasavipipes.com',
    'business_hours' => 'Mon – Sat: 9:00 AM – 6:30 PM IST',
    'footer_copy' => 'Vasavi Pipes Private Limited — High-durability PVC & uPVC pipes manufactured with virgin polymer compounding at our Guntakal facility, Andhra Pradesh. Incorporated 2006.',
];

// Navigation Items
$nav_items = [
    ['name' => 'Home', 'url' => '#hero'],
    ['name' => 'About Us', 'url' => '#about'],
    ['name' => 'Products', 'url' => '#products'],
    ['name' => 'Applications', 'url' => '#applications'],
    ['name' => 'Manufacturing', 'url' => '#manufacturing'],
    ['name' => 'Contact', 'url' => '#contact'],
];

// Product Filter Tabs (Shared between Desktop Pills and Mobile Dropdown)
$product_filters = [
    ['id' => 'all', 'name' => 'All Products'],
    ['id' => 'borewell-agri', 'name' => 'Borewell & Agriculture'],
    ['id' => 'electrical', 'name' => 'Electrical Conduits'],
    ['id' => 'plumbing-water', 'name' => 'Plumbing & Water'],
];

// Verified Product Portfolio (5 Core Categories)
$products = [
    [
        'id' => 'upvc-pipes',
        'filter_group' => 'plumbing-water',
        'name' => 'uPVC Water Pipes',
        'badge' => 'IS 4985 Standard',
        'category' => 'uPVC Pipes',
        'image' => 'assets/images/products/upvc-pipes.jpg',
        'summary' => 'High-strength uPVC pipes engineered for potable water delivery, municipal pipelines, and agricultural irrigation networks.',
        'desc' => 'Extruded with virgin polymer resin to provide smooth internal walls, low hydraulic friction, and long-term underground corrosion resistance.',
        'placeholder_label' => 'uPVC WATER PIPES',
        'applications' => [
            'Potable Water Mains',
            'Agricultural Irrigation',
            'Pressure Distribution Networks'
        ]
    ],
    [
        'id' => 'plumbing-pipes',
        'filter_group' => 'plumbing-water',
        'name' => 'Plumbing Pipes & Fittings',
        'badge' => 'IS 4985 Standard',
        'category' => 'Plumbing Pipes',
        'image' => 'assets/images/products/plumbing-pipes.jpg',
        'summary' => 'Precision plumbing pipes for residential apartments, commercial buildings, and institutional plumbing installations.',
        'desc' => 'Engineered for seamless solvent socket fitment, providing dependable, leak-proof joints under continuous municipal and building water pressures.',
        'placeholder_label' => 'PLUMBING PIPES',
        'applications' => [
            'Residential High-Rises',
            'Commercial Complexes',
            'Internal Domestic Plumbing'
        ]
    ],
    [
        'id' => 'pvc-conduits',
        'filter_group' => 'electrical',
        'name' => 'Rigid PVC Electrical Conduits',
        'badge' => 'IS 9537 Part-3',
        'category' => 'PVC Conduits',
        'image' => 'assets/images/products/pvc-conduits.jpg',
        'summary' => 'Fire-retardant rigid PVC electrical conduits for concealed slab wiring and surface cable protection.',
        'desc' => 'High dielectric insulation strength and self-extinguishing safety properties protect power cabling from mechanical impact and thermal stress.',
        'placeholder_label' => 'ELECTRICAL CONDUITS',
        'applications' => [
            'Concealed Slab Wiring',
            'Surface Cable Ducting',
            'Industrial Electrical Enclosures'
        ]
    ],
    [
        'id' => 'blue-threaded-pipes',
        'filter_group' => 'borewell-agri',
        'name' => 'Blue Threaded Column Pipes',
        'badge' => 'ASTM-D-1785 Standard',
        'category' => 'Blue Threaded Pipes',
        'image' => 'assets/images/products/blue-threaded.jpg',
        'summary' => 'Heavy-duty column pipes designed to suspend submersible pump assemblies safely in deep borewells.',
        'desc' => 'Machined with precision square threads and rubber sealing joints to bear heavy pump loads and resist torsion during motor startup.',
        'placeholder_label' => 'BLUE THREADED PIPES',
        'applications' => [
            'Submersible Pump Suspension',
            'Deep Borewell Extraction',
            'High-Tensile Agricultural Wells'
        ]
    ],
    [
        'id' => 'ivory-threaded-pipes',
        'filter_group' => 'borewell-agri',
        'name' => 'Ivory Threaded Casing Pipes',
        'badge' => 'ASTM-D-1785 Standard',
        'category' => 'Ivory Threaded Pipes',
        'image' => 'assets/images/products/ivory-threaded.jpg',
        'summary' => 'Sturdy casing pipes engineered to protect and stabilize boreholes across loose, sandy, and rocky soils.',
        'desc' => 'High collapse resistance preserves well integrity for decades of clean groundwater inflow while protecting internal column strings.',
        'placeholder_label' => 'IVORY CASING PIPES',
        'applications' => [
            'Borewell Borehole Stabilization',
            'Gravel Packing & Sand Screening',
            'Groundwater Soil Protection'
        ]
    ],
];

// Application Categories (Contextual & Verified)
$applications = [
    [
        'title' => 'Borewell & Deep Groundwater Extraction',
        'icon' => 'droplets',
        'desc' => 'Heavy-duty threaded column and casing pipes built to support submersible pump strings in deep agricultural and rural borewells.',
        'tag' => 'Agriculture & Borewells',
        'metric' => 'ASTM-D-1785 Threaded Jointing'
    ],
    [
        'title' => 'Electrical Cable Protection & Concealment',
        'icon' => 'zap',
        'desc' => 'Rigid PVC conduits with flame-retardant properties protecting wiring inside concrete slabs, walls, and industrial enclosures.',
        'tag' => 'Power & Building Safety',
        'metric' => 'IS 9537 Part-3 Compliant'
    ],
    [
        'title' => 'Potable Water Distribution & Irrigation Mains',
        'icon' => 'layers',
        'desc' => 'Mirror-smooth uPVC pipes ensuring friction-free water transfer for drinking supply schemes, farmland irrigation, and civic networks.',
        'tag' => 'Water & Irrigation Mains',
        'metric' => 'IS 4985 Standard Formulation'
    ],
    [
        'title' => 'Commercial & Residential Plumbing Systems',
        'icon' => 'building-2',
        'desc' => 'Reliable, leak-free plumbing pipes with precision socket dimensions for residential apartments, offices, and industrial facilities.',
        'tag' => 'Plumbing Infrastructure',
        'metric' => 'Precision Solvent Fitment'
    ],
];

// Manufacturing Process Steps (4 Real Extrusion Steps with Distinct Photos)
$manufacturing_cards = [
    [
        'step' => '01',
        'title' => 'Virgin Polymer Compounding',
        'label' => 'MATERIAL PURITY',
        'image' => 'assets/images/factory/mfg-step1-compounding.jpg',
        'desc' => '100% virgin PVC suspension resin compounded with certified heat stabilizers and impact modifiers for high burst and tensile performance.'
    ],
    [
        'step' => '02',
        'title' => 'Twin-Screw Extrusion',
        'label' => 'CONTROLLED EXTRUSION',
        'image' => 'assets/images/factory/extrusion-line.jpg',
        'desc' => 'Computerized multi-zone thermal control delivers continuous melt homogenization, consistent wall thickness, and zero internal voids.'
    ],
    [
        'step' => '03',
        'title' => 'Vacuum Calibration & Cooling',
        'label' => 'CALIBRATED ROUNDNESS',
        'image' => 'assets/images/factory/mfg-step3-cooling.jpg',
        'desc' => 'Precision vacuum sizing tanks and refrigerated water spray baths lock in exact outer diameters, circularity, and smooth inner bore surfaces.'
    ],
    [
        'step' => '04',
        'title' => 'CNC Threading & Inspection',
        'label' => 'THREAD INTEGRITY',
        'image' => 'assets/images/factory/mfg-step4-threading.jpg',
        'desc' => 'Dedicated CNC lathes cut square threads on borewell column pipes, followed by gauge verification, drop-weight tests, and hydrostatic pressure checks.'
    ]
];
