<?php
/**
 * Cafe Data & Content for Vee'n Dee Corner
 */

$cafe_info = [
    'name' => "Vee'n Dee Corner",
    'tagline' => "Coffee & Space",
    'secondary_tagline' => "Corner · Coffee & Kitchen",
    'motto' => "Good food, thoughtful drinks, and a warm place to be.",
    'slogan' => "Made slowly, served warmly.",
    'address' => "Jl. Gegerkalong Girang No.149, Gegerkalong, Kec. Sukasari, Kota Bandung, Jawa Barat 40153",
    'hours' => "Everyday 08.00 — 23.00",
    'phone' => "+62 812 3456 7890",
    'whatsapp' => "08267254751845",
    'whatsapp_link' => "https://wa.me/628267254751845?text=Halo%20Vee'n%20Dee%20Corner,%20saya%20ingin%20bertanya...",
    'email' => "veenderc@gmail.com",
    'alt_email' => "hello@veendeecorner.id",
    'instagram' => "@veendee.corner",
    'instagram_link' => "https://instagram.com/veendee.corner",
    'maps_link' => "https://maps.google.com/?q=Vee+N+Dee+Corner+Jl.+Gegerkalong+Girang+No.149+Bandung",
    'maps_embed' => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.1643962635957!2d107.588820374996!3d-6.870900093127827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6900f6fffff%3A0x6739029ff6a96fef!2sJl.%20Gegerkalong%20Girang%20No.149%2C%20Gegerkalong%2C%20Kec.%20Sukasari%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040153!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid"
];

$menu_items = [
    [
        'id' => 1,
        'name' => 'Signature Coffee',
        'category' => 'Coffee',
        'badge' => 'COFFEE',
        'price' => 'Rp 25.000',
        'description' => 'Enjoy our freshly brewed coffee with rich aroma and a smooth taste.',
        'image' => 'assets/img/gallery-cappuccino.jpg',
        'featured' => true
    ],
    [
        'id' => 2,
        'name' => 'Ube Matcha Cloud',
        'category' => 'Non-Coffee',
        'badge' => 'NON-COFFEE',
        'price' => 'Rp 28.000',
        'description' => 'A delightful blend of earthy matcha and sweet purple yam, topped with a creamy cloud of foam for a smooth and dreamy finish.',
        'image' => 'assets/img/gallery-ube-matcha.jpg',
        'featured' => true
    ],
    [
        'id' => 3,
        'name' => 'Burger & Fries',
        'category' => 'Food',
        'badge' => 'FOOD',
        'price' => 'Rp 38.000',
        'description' => 'A juicy, flavorful burger served with crispy golden fries, perfect for a delicious and satisfying bite.',
        'image' => 'assets/img/gallery-burger.jpg',
        'featured' => true
    ],
    [
        'id' => 4,
        'name' => 'Crispy Bites Platter',
        'category' => 'Snacks',
        'badge' => 'SNACKS',
        'price' => 'Rp 22.000',
        'description' => 'Golden fried enoki and savory crispy bites served with our signature house dip.',
        'image' => 'assets/img/gallery-crispy-mushroom.jpg',
        'featured' => false
    ],
    [
        'id' => 5,
        'name' => 'Nasi Goreng Spesial Corner',
        'category' => 'Food',
        'badge' => 'FOOD',
        'price' => 'Rp 32.000',
        'description' => 'Fragrant wok-tossed fried rice served with crispy kerupuk, fresh cucumber, and savory seasonings.',
        'image' => 'assets/img/gallery-nasi-goreng.jpg',
        'featured' => false
    ],
    [
        'id' => 6,
        'name' => 'Sea Salt Caramel Iced Latte',
        'category' => 'Coffee',
        'badge' => 'COFFEE',
        'price' => 'Rp 27.000',
        'description' => 'Chilled espresso topped with fluffy sea-salt whipped foam and golden caramelized biscuit crumble.',
        'image' => 'assets/img/gallery-butterscotch.jpg',
        'featured' => false
    ],
    [
        'id' => 7,
        'name' => 'Iced Americano Reserve',
        'category' => 'Coffee',
        'badge' => 'COFFEE',
        'price' => 'Rp 22.000',
        'description' => 'A clean, refreshing double shot pulled over crystal-clear ice for hot Bandung afternoons.',
        'image' => 'assets/img/gallery-americano.jpg',
        'featured' => false
    ]
];

$events = [
    [
        'id' => 1,
        'badge' => 'Coming Soon',
        'category' => 'COFFEE TASTING',
        'title' => 'Coffee, up close.',
        'description' => 'A little curiosity, a few different brews, and plenty to talk about. Discover the stories and flavours behind your favourite cup.',
        'link_text' => 'Details to be announced',
        'image' => 'assets/img/gallery-espresso-machine.jpg'
    ],
    [
        'id' => 2,
        'badge' => 'Coming Soon',
        'category' => 'CREATIVE GATHERING',
        'title' => 'Create & unwind.',
        'description' => 'Make room for a little imagination. An easygoing gathering for creative minds, warm drinks, and conversations that wander.',
        'link_text' => 'Details to be announced',
        'image' => 'assets/img/welcome-corner-projection.png'
    ],
    [
        'id' => 3,
        'badge' => 'Coming Soon',
        'category' => 'COFFEE & CAKE PAIRING',
        'title' => 'A little sweeter.',
        'description' => 'Comforting bakes meet thoughtfully brewed coffee. A gathering for discovering lovely pairings and sharing the sweeter things.',
        'link_text' => 'Details to be announced',
        'image' => 'assets/img/gallery-butterscotch.jpg'
    ]
];

$workshop_highlight = [
    'session' => 'Sunday Session No. 06',
    'title' => 'Clay, coffee & slow conversation.',
    'description' => 'Join local ceramic artist Nara for an intimate hand-building workshop. No experience needed — your coffee and all materials are on us.',
    'date' => 'Sunday, 24 August',
    'time' => '15.00 — 17.30',
    'image' => 'assets/img/gallery-latte-pouring.jpg'
];
