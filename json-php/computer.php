<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
    // root
    $computers = [
        [
            "img" => "rog.png",
            "unit" => "Laptop",
            "type" => "Gaming Laptop",
            "model" => "Asus Rog Strix G15r",
            "price" => "80,000",
            "specs" => ["Processor - Ryzen 9 6900HX with 4.9Ghz max boost 8 cores 16 thread",
                        "RAM - 16 GB DDR5 4800 Mhz",
                        "GPU - NVIDIA GeForce RTX 3080 DDR6 8GB with 1545MHz Boost Clock+50MHz OC",
                        "Storage - NVMe M.2 SSD 1 TB",
                        "Display - 15.6 Inches Scrren with 2560x1440 resolution and 165Hz Refresh rate",
                        "Battery -  90 watt hour up to 12 hours video playback",
                        "Operating System - Windows 11 pro"]
        ],
        [
            "img" => "pre.png",
            "unit" => "Desktop",
            "type" => "Gaming/Work Station",
            "model" => "Acer predator PO3-640",
            "price" => "85,000",
            "specs" => ["Processor - Intel Core i7-12700F 12 cores 20 threads with 4.90 Ghz Speed",
                        "RAM - G_Sill 8x2 GB DDR4 3200Mhz Speed",
                        "GPU - NVIDIA GeForce RTX 3080 DDR6 8GB with 1545MHz Boost Clock+50MHz OC",
                        "Storage -  Samsung Evo970 VME M.2 SSD 1 TB",
                        "Monitor - Predator_xb273U_NX 26 inches with 2560x1440 and 275Hz Refresh rate",
                        "GPU - Rog_Strix GeForce RTX 4090 OC Edition DDR6X 24Gb with 2460 MHz/Gaming mode up to 2610 MHz",
                        "PSU - Rog_Thor 1200 Watts 80plus Platinum",
                        "Operating System - Windows 11 pro"]
        ],
        [
            "img" => "sacer.png",
            "unit" => "Desktop",
            "type" => "Work Station",
            "model" => "Aspire C24 1750 (All-in-One) Core i5",
            "price" => "40,000",
            "specs" => ["Processor - Processor - Intel Core i5-1240P 4.4 Ghz Speed",
                        "RAM - 8 GB up to 32 GB DDR4 3200Mhz Speed",
                        "GPU - NVIDIA GeForce RTX 3080 DDR6 8GB with 1545MHz Boost Clock+50MHz OC",
                        "Storage - 1 Tb HDD (Storage) VNMe m.2 SSD 256GB (OS)",
                        "Monitor - ACE Monitor with 75hz and 1920x 1080 resolution",
                        "GPU - Built In Graphics Card",
                        "PSU - 550 80 plus Bronze",
                        "Operating System - Windows 11 pro"]
        ],
        [
            "img" => "leno.png",
            "unit" => "Laptop",
            "type" => "Work Station Laptop",
            "model" => "Lenovo ThinkBook 14 Gen",
            "price" => "30,000",
            "specs" => ["Processor - Intel Core i5-1235U Processor (E-cores up to 3.30 GHz P-cores up to 4.40 GHz)",
                        "RAM - 8 GB DDR5 4800MHz",
                        "GPU - NVIDIA GeForce RTX 3080 DDR6 8GB with 1545MHz Boost Clock+50MHz OC",
                        "Storage - 256 GB SSD M.2",
                        "Display - 14 in WUXGA (1920 x 1200), IPS, Anti-Glare, Non-Touch, 300 nits, Narrow Bezel",
                        "GPU - Integrated Intel® Iris® Xe Graphics",
                        "Battery -  4 Cell Li-Polymer 62Wh",
                        "Operating System - Windows 11 pro"]
        ],
    ];

    $data = json_encode($computers);
    echo $data;
    
?>
