<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>E-TOUR'O MO!</title>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link href='https://fonts.googleapis.com/css2?family=Sansita&display=swap' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="Styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        .PP_header h2 {
        font-size: 30px;
        letter-spacing: 5px;
        }
        .filter-dropdowns{
            border-radius: 1px;
        }
    </style>
</head>
<body>
    
    <div class="HomePage">
        <header class="header">
            <nav class="navbar">
                <div class="logo-container">
                    <a href="index.php"><img src="images/LOGO (white) TRANSPARENT.png" alt="logo"></a>
                </div>
                <ul class="nav-links">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="index.php#about">ABOUT</a></li>
                    <li><a href="Places.php">PLACES</a></li>
                    <li><a href="index.php#contact">CONTACT</a></li>
                </ul>
            </nav>
        </header>
    </div>

    <?php
        $places = [
            [
                'name' => 'Baguio City',
                'description' => 'Renowned as the Summer Capital of the Philippines in Cordillera Administrative Region, Baguio emerges as the premier retreat for those seeking respite from the sweltering lowland heat...',
                'details' => 'In addition to basking in its cool climate, Baguio offers a myriad of attractions, ranging from lush greenery and picturesque parks to delectable cuisine and unique souvenirs...',
                'region' => 'Cordillera Administrative Region (CAR)',
                'type' => 'Mountain',
                'price' => 'Mid',
                'image' => 'images/BAGUIO CITY.jpg'
            ],
            [
                'name' => 'Pangasinan',
                'description' => 'Pangasinan of Ilocos Region beckons to tourists seeking island adventures, beach escapades, waterfall wonders, and delectable local cuisine...',
                'details' => 'The name "Pangasinan" itself translates to "place of salt", reflecting its significance as a major salt producer...',
                'region' => 'Ilocos Region',
                'type' => 'Beach',
                'price' => 'Low',
                'image' => 'images/PANGASINAN.jpg'
            ],
            [
                'name' => 'Batanes',
                'description' => 'Batanes, from Cagayan Valley region, the island-province boasting a modest land area of 230 square kilometers...',
                'details' => 'The indigenous Ivatans, hailed nationally as the "True Insulares", inhabited Batanes in prehistoric times. They were skilled boatmakers and seafaring individuals...',
                'region' => 'Cagayan Valley',
                'type' => 'Island',
                'price' => 'High',
                'image' => 'images/BATANES.png'
            ],
            [
                'name' => 'Pampanga',
                'description' => 'Pampanga proudly holds the prestigious title of the Culinary Capital of the Philippines...',
                'details' => 'Pampanga lives up to its title as the Culinary Capital, offering an array of delectable dishes that are a must-try during your visit...',
                'region' => 'Central Luzon',
                'type' => 'Urban City',
                'price' => 'Mid',
                'image' => 'images/PAMPANGA.png'
            ],
            [
                'name' => 'Batangas',
                'description' => 'Indulge in the coastal splendor of Batangas\' charming seaside towns and villages in Calabarzon...',
                'details' => 'Explore the underwater wonderland of Anilao, known as Batangas\' own marine paradise...',
                'region' => 'Calabarzon',
                'type' => 'Beach',
                'price' => 'Mid',
                'image' => 'images/BATANGAS.png'
            ],
            [
                'name' => 'Manila',
                'description' => 'Discover the Philippines\' capital in National Capital Region! If you\'re a first-time visitor, don\'t miss Manila...',
                'details' => 'For newcomers to Manila and the Philippines, your top priority should be experiencing a ride in the iconic jeepney...',
                'region' => 'National Capital Region (NCR)',
                'type' => 'Urban City',
                'price' => 'Mid',
                'image' => 'images/MANILA.jpg'
            ],
            [
                'name' => 'Coron',
                'description' => 'Coron stands as one of Palawan\'s premier beach and island getaways...',
                'details' => 'Coron boasts breathtaking tourist attractions such as Kayangan Lake, celebrated as one of the cleanest lakes in the Philippines...',
                'region' => 'MIMAROPA',
                'type' => 'Island',
                'price' => 'Mid',
                'image' => 'images/CORON.png'
            ],
            [
                'name' => 'Albay',
                'description' => 'Nestled in the heart of the Bicol Region, Albay is a province of diverse landscapes and cultural heritage...',
                'details' => 'Home to the iconic Mayon Volcano, renowned for its perfect cone shape and fiery temperament, Albay boasts breathtaking vistas...',
                'region' => 'Bicol Region',
                'type' => 'Beach',
                'price' => 'Mid',
                'image' => 'images/ALBAY.jpg'
            ],
            [
                'name' => 'Capiz',
                'description' => 'Capiz, a province nestled in the Western Visayas region, is renowned for Roxas City, dubbed the Seafood Capital of the Philippines...',
                'details' => 'Make Baybay Beach your first stop in Capiz to discover why Roxas earns its title as the Seafood Capital...',
                'region' => 'Western Visayas',
                'type' => 'Beach',
                'price' => 'Low',
                'image' => 'images/CAPIZ.png'
            ],
            [
                'name' => 'Iloilo',
                'description' => 'Iloilo, positioned at the heart of the Philippines, has earned the moniker "The Heart of the Philippines" due to its central geographical location...',
                'details' => 'For history enthusiasts, Iloilo is a treasure trove of captivating landmarks...',
                'region' => 'Western Visayas',
                'type' => 'Urban City',
                'price' => 'Mid',
                'image' => 'images/ILOILO.jpg'
            ],
            [
                'name' => 'Bohol',
                'description' => 'Bohol, renowned for its iconic Chocolate Hills, stands as one of the Central Visayas region\'s most sought-after destinations in the Philippines...',
                'details' => 'A Bohol experience is incomplete without a visit to the iconic Chocolate Hills...',
                'region' => 'Central Visayas',
                'type' => 'Island',
                'price' => 'Mid',
                'image' => 'images/BOHOL.jpg'
            ],
            [
                'name' => 'Leyte',
                'description' => 'Leyte, nestled in the heart of the Visayas, stands as a picturesque and inviting destination for tourists...',
                'details' => 'Leyte offers a diverse array of tourist attractions ranging from historical landmarks to idyllic tropical islands...',
                'region' => 'Eastern Visayas',
                'type' => 'Beach',
                'price' => 'Low',
                'image' => 'images/LEYTE.png'
            ],
            [
                'name' => 'Zamboanga Del Norte',
                'description' => 'Dapitan holds a significant place in Philippine history as the home of national hero Jose Rizal during his four years in exile...',
                'details' => 'Visitors are encouraged to pause in their itinerary to pay homage to this revered figure and bask in the serene ambiance of the park...',
                'region' => 'Zamboanga Peninsula',
                'type' => 'Beach',
                'price' => 'Low',
                'image' => 'images/ZAMBOANGA DEL NORTE.png'
            ],
            [
                'name' => 'Bukidnon',
                'description' => 'Bukidnon presents a picturesque landscape of cloud-capped mountain peaks, sprawling plateaus, and lush forests, making it a haven...',
                'details' => 'Journeying through the province offers glimpses of its remarkable fertility with roadways flanked by expansive fields of corn, sugarcane, rice, and pineapple...',
                'region' => 'Northern Mindanao',
                'type' => 'Mountain',
                'price' => 'Low',
                'image' => 'images/BUKIDNON.jpg'
            ],
            [
                'name' => 'Davao City',
                'description' => 'Davao City stands as the bustling regional center of the Davao Region, holding the distinction of being Mindanao\'s most populous city and the Philippines\' third-largest urban center...',
                'details' => 'Renowned for its vibrant economic landscape, urban development, and modern infrastructure...',
                'region' => 'Davao Region',
                'type' => 'Urban City',
                'price' => 'Mid',
                'image' => 'images/DAVAO CITY.png'
            ],
            [
                'name' => 'South Cotabato',
                'description' => 'The province, often referred to as the "Land of the Dreamweavers," is situated in the southern region of Mindanao...',
                'details' => 'T\'nalak weaving stands as the province\'s quintessential cultural symbol, a traditional masterpiece crafted by T\'boli women...',
                'region' => 'SOCCSKSARGEN',
                'type' => 'Mountain',
                'price' => 'Mid',
                'image' => 'images/SOUTH COTABATO.jpg'
            ],
            [
                'name' => 'Surigao Del Sur',
                'description' => 'Naturally endowed with strategic positioning, the province occupies the northeastern coastline of Mindanao...',
                'details' => 'Stretching approximately 300 kilometers in length and expanding up to 50 kilometers at its broadest point...',
                'region' => 'Caraga Region',
                'type' => 'Beach',
                'price' => 'Low',
                'image' => 'images/SURIGAO DEL SUR.jpg'
            ]
        ];
        
        
        $search_name = $_GET['search_name'] ?? '';
        $selected_region = $_GET['region'] ?? '';
        $selected_type = $_GET['type'] ?? '';
        $selected_price = $_GET['price'] ?? '';

        $filtered_places = array_filter($places, function ($place) use ($search_name, $selected_region, $selected_type, $selected_price) {
            return ($search_name === '' || stripos($place['name'], $search_name) !== false) &&
                   ($selected_region === '' || $place['region'] === $selected_region) &&
                   ($selected_type === '' || $place['type'] === $selected_type) &&
                   ($selected_price === '' || $place['price'] === $selected_price);
        });

        $regions = array_unique(array_column($places, 'region'));
        $types = array_unique(array_column($places, 'type'));
        $prices = array_unique(array_column($places, 'price'));
    ?>
    
    <div class="PlacesPage">
        <header class="PP_header">
            <h2>PLACES</h2>
            <form action="Places.php" method="GET">
                <div class="PP_search-filter-grid">  
                    <input type="text" name="search_name" class="search-bar" placeholder="Search here..." value="<?php echo htmlspecialchars($search_name); ?>">
                    <div class="filter-dropdowns">
                        <h1>FILTER:</h1>
                        <select name="region">
                            <option value="">Region</option>
                            <?php foreach ($regions as $region): ?>
                                <option value="<?php echo htmlspecialchars($region); ?>" <?php echo $selected_region === $region ? 'selected' : ''; ?>>
                                    <?php echo htmlspecialchars($region); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <select name="type">
                            <option value="">Type of Place</option>
                            <?php foreach ($types as $type): ?>
                                <option value="<?php echo htmlspecialchars($type); ?>" <?php echo $selected_type === $type ? 'selected' : ''; ?>>
                                    <?php echo htmlspecialchars($type); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <select name="price">
                            <option value="">Pricing</option>
                            <?php foreach ($prices as $price): ?>
                                <option value="<?php echo htmlspecialchars($price); ?>" <?php echo $selected_price === $price ? 'selected' : ''; ?>>
                                    <?php echo htmlspecialchars($price); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="find-button">FIND</button>
                </div>
            </form>
        </header>
        
        <div class="PP_list-container">
            <div class="PP_list">
                <?php foreach ($filtered_places as $place): ?>
                    <div class="PP_card">
                        <a href="Details.php?name=<?php echo $place['name'] ?>&description=<?php echo urlencode($place['description']); ?>&details=<?php echo urlencode($place['details']); ?>&image=<?php echo urlencode($place['image']); ?>">
                            <img src="<?php echo htmlspecialchars($place['image']); ?>" alt="<?php echo htmlspecialchars($place['name']); ?>">
                            <h3><?php echo htmlspecialchars($place['name']); ?></h3>
                            <p><?php echo htmlspecialchars($place['description']); ?></p>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
