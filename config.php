<?php
// Site configuration
$site_name = "Sweet Delights Bakery";
$site_description = "Freshly baked goods made with love";
$site_email = "contact@sweetdelightsbakery.com";
$site_phone = "(555) 123-4567";
$site_address = "123 Main Street, Bakerytown, BT 12345";
$site_hours = "Monday - Friday: 7:00 AM - 7:00 PM<br>Saturday: 8:00 AM - 5:00 PM<br>Sunday: 8:00 AM - 3:00 PM";

// Social media links
$social_media = [
    "facebook" => "https://facebook.com/sweetdelightsbakery",
    "instagram" => "https://instagram.com/sweetdelightsbakery",
    "twitter" => "https://twitter.com/sweetdelights"
];

// Product categories
$product_categories = ["Bread", "Pastries", "Cakes", "Desserts", "Seasonal Specials"];

// Featured products
$featured_products = [
    [
        "name" => "Artisan Sourdough",
        "description" => "Our signature sourdough bread made with a 100-year-old starter. Crispy crust and soft interior.",
        "price" => "$5.99",
        "category" => "Bread",
        "image_desc" => "A rustic round sourdough loaf with a flour-dusted top and scored pattern"
    ],
    [
        "name" => "Chocolate Croissant",
        "description" => "Buttery, flaky croissant filled with rich dark chocolate.",
        "price" => "$3.50",
        "category" => "Pastries",
        "image_desc" => "A golden-brown croissant with chocolate visible at the ends"
    ],
    [
        "name" => "Vanilla Bean Cheesecake",
        "description" => "Creamy cheesecake infused with real vanilla beans on a graham cracker crust.",
        "price" => "$4.95/slice",
        "category" => "Desserts",
        "image_desc" => "A slice of creamy cheesecake with vanilla bean specks visible"
    ],
    [
        "name" => "Rustic Apple Pie",
        "description" => "Made with local apples, cinnamon, and our buttery homemade crust.",
        "price" => "$18.99",
        "category" => "Desserts",
        "image_desc" => "A golden-brown apple pie with a lattice top crust"
    ]
];

// All products
$all_products = [
    // Bread category
    [
        "name" => "Artisan Sourdough",
        "description" => "Our signature sourdough bread made with a 100-year-old starter. Crispy crust and soft interior.",
        "price" => "$5.99",
        "category" => "Bread",
        "image_desc" => "A rustic round sourdough loaf with a flour-dusted top and scored pattern"
    ],
    [
        "name" => "Multigrain Loaf",
        "description" => "Hearty bread made with seven different grains for maximum nutrition and flavor.",
        "price" => "$6.50",
        "category" => "Bread",
        "image_desc" => "A sliced loaf of brown bread with visible grains and seeds"
    ],
    [
        "name" => "French Baguette",
        "description" => "Traditional French baguette with crispy crust and airy interior. Baked fresh throughout the day.",
        "price" => "$3.99",
        "category" => "Bread",
        "image_desc" => "A long, thin French baguette with a golden crust"
    ],
    [
        "name" => "Ciabatta",
        "description" => "Italian bread with a porous texture, perfect for sandwiches or dipping in olive oil.",
        "price" => "$4.50",
        "category" => "Bread",
        "image_desc" => "A rectangular ciabatta loaf with flour dusting and characteristic holes"
    ],
    
    // Pastries category
    [
        "name" => "Chocolate Croissant",
        "description" => "Buttery, flaky croissant filled with rich dark chocolate.",
        "price" => "$3.50",
        "category" => "Pastries",
        "image_desc" => "A golden-brown croissant with chocolate visible at the ends"
    ],
    [
        "name" => "Almond Croissant",
        "description" => "Flaky croissant filled with almond cream and topped with sliced almonds.",
        "price" => "$3.75",
        "category" => "Pastries",
        "image_desc" => "A croissant topped with sliced almonds and powdered sugar"
    ],
    [
        "name" => "Cinnamon Roll",
        "description" => "Soft, spiraled pastry with cinnamon filling and cream cheese frosting.",
        "price" => "$3.95",
        "category" => "Pastries",
        "image_desc" => "A swirled cinnamon roll with white frosting on top"
    ],
    [
        "name" => "Fruit Danish",
        "description" => "Flaky pastry topped with seasonal fruits and a light glaze.",
        "price" => "$3.75",
        "category" => "Pastries",
        "image_desc" => "A round danish pastry with colorful fruit arranged on top"
    ],
    
    // Cakes category
    [
        "name" => "Classic Chocolate Cake",
        "description" => "Three layers of moist chocolate cake with rich chocolate ganache.",
        "price" => "$32.00",
        "category" => "Cakes",
        "image_desc" => "A tall, dark chocolate cake with smooth ganache frosting"
    ],
    [
        "name" => "Carrot Cake",
        "description" => "Spiced cake with fresh carrots, walnuts, and cream cheese frosting.",
        "price" => "$28.00",
        "category" => "Cakes",
        "image_desc" => "A speckled orange-brown cake with white frosting and walnut decoration"
    ],
    [
        "name" => "Red Velvet Cake",
        "description" => "Cocoa-infused red cake layers with classic cream cheese frosting.",
        "price" => "$30.00",
        "category" => "Cakes",
        "image_desc" => "A red cake with white frosting visible between layers"
    ],
    [
        "name" => "Lemon Layer Cake",
        "description" => "Light lemon-infused cake with lemon curd filling and buttercream frosting.",
        "price" => "$28.00",
        "category" => "Cakes",
        "image_desc" => "A pale yellow cake with white frosting and lemon slice decorations"
    ],
    
    // Desserts category
    [
        "name" => "Vanilla Bean Cheesecake",
        "description" => "Creamy cheesecake infused with real vanilla beans on a graham cracker crust.",
        "price" => "$4.95/slice",
        "category" => "Desserts",
        "image_desc" => "A slice of creamy cheesecake with vanilla bean specks visible"
    ],
    [
        "name" => "Rustic Apple Pie",
        "description" => "Made with local apples, cinnamon, and our buttery homemade crust.",
        "price" => "$18.99",
        "category" => "Desserts",
        "image_desc" => "A golden-brown apple pie with a lattice top crust"
    ],
    [
        "name" => "Chocolate Chip Cookie",
        "description" => "Large, soft cookie packed with semi-sweet chocolate chips.",
        "price" => "$2.50",
        "category" => "Desserts",
        "image_desc" => "A large, golden cookie with visible chocolate chips"
    ],
    [
        "name" => "Lemon Tart",
        "description" => "Buttery tart shell filled with tangy lemon curd and topped with fresh berries.",
        "price" => "$4.50",
        "category" => "Desserts",
        "image_desc" => "A yellow tart topped with fresh raspberries"
    ],
    
    // Seasonal Specials category
    [
        "name" => "Pumpkin Spice Bread",
        "description" => "Fall favorite made with real pumpkin and warm spices.",
        "price" => "$7.50",
        "category" => "Seasonal Specials",
        "image_desc" => "A loaf of dark orange bread with a cracked top"
    ],
    [
        "name" => "Holiday Fruit Cake",
        "description" => "Traditional cake filled with dried fruits and nuts soaked in rum.",
        "price" => "$22.00",
        "category" => "Seasonal Specials",
        "image_desc" => "A dense cake with colorful dried fruits visible throughout"
    ],
    [
        "name" => "Hot Cross Buns",
        "description" => "Spiced sweet buns with dried fruit, marked with a cross on top.",
        "price" => "$2.75 each",
        "category" => "Seasonal Specials",
        "image_desc" => "Round buns with a cross pattern on top"
    ],
    [
        "name" => "Summer Berry Trifle",
        "description" => "Layers of cake, custard, and fresh summer berries.",
        "price" => "$5.50/serving",
        "category" => "Seasonal Specials",
        "image_desc" => "A glass cup showing colorful layers of cake, cream, and berries"
    ]
];

// About us content
$bakery_story = "
<p>Sweet Delights Bakery began in 1985 when Maria Gonzalez decided to turn her passion for baking into a business. What started as a small counter in the local farmers' market has grown into a beloved neighborhood bakery.</p>

<p>Our mission is simple: create delicious, high-quality baked goods using traditional methods and the finest ingredients. We believe in the power of good bread and pastries to bring people together and make every day a little sweeter.</p>

<p>Today, our bakery is still family-owned and operated. Maria's children and grandchildren have joined the business, ensuring that her recipes and baking philosophy continue for generations to come.</p>

<p>We're proud to be part of this community and grateful to our loyal customers who have supported us throughout the years. We look forward to continuing to serve you the very best baked goods made with love and care.</p>
";

$bakery_values = [
    "Quality Ingredients" => "We source the finest flours, European-style butter, local eggs, and seasonal produce to ensure exceptional flavor in everything we make.",
    "Traditional Methods" => "We believe in doing things the right way, not the easy way. Our artisan breads are naturally leavened and given long fermentation times for maximum flavor and nutrition.",
    "Community Connection" => "We're proud to be your neighborhood bakery and strive to create a warm, welcoming space for our community.",
    "Sustainability" => "We work with local farmers when possible and make efforts to reduce waste and our environmental footprint."
];

$team_members = [
    [
        "name" => "Maria Gonzalez",
        "title" => "Founder & Master Baker",
        "bio" => "Started Sweet Delights in 1985 with family recipes from her native Spain. Still oversees our sourdough production.",
        "image_desc" => "An older woman with gray hair and a warm smile wearing a white baker's coat"
    ],
    [
        "name" => "Miguel Gonzalez",
        "title" => "Head Baker",
        "bio" => "Maria's son who grew up in the bakery and trained in France before returning to lead our bread program.",
        "image_desc" => "A middle-aged man with flour-dusted hands forming bread dough"
    ],
    [
        "name" => "Sofia Chen",
        "title" => "Pastry Chef",
        "bio" => "Trained at the Culinary Institute of America, Sofia brings creative flair to our pastry selection.",
        "image_desc" => "A young woman with an intricate pastry creation"
    ]
];
?>
