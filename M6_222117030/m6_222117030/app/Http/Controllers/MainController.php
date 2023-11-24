<?php

namespace App\Http\Controllers;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Http\Request;

class MainController extends Controller
{
    static array
        $data = [
            [
                "company" => "3M",
                "description" => "3M, based in Minnesota, may be best known for its Scotch tape and Post-It Notes, but it also produces sandpaper, adhesives, medical products, computer screen filters, food safety items, stationery products and many products used in automotive, marine, and aircraft industries.",
                "initial_price" => 44.8,
                "price_2002" => 56.7,
                "price_2003" => 54.8,
                "price_2004" => 58.6,
                "price_2005" => 61.2,
                "price_2006" => 63.7,
                "price_2007" => 95.5,
                "symbol" => "MMM"
            ],
            [
                "company" => "Amazon.com",
                "description" => "Amazon.com, Inc. is an online retailer in North America and internationally. The company serves consumers through its retail Web sites and focuses on selection, price, and convenience. It also offers programs that enable sellers to sell their products on its Web sites, and their own branded Web sites. In addition, the company serves developer customers through Amazon Web Services, which provides access to technology infrastructure that developers can use to enable virtually various type of business. Further, it manufactures and sells the Kindle e-reader. Founded in 1994 and headquartered in Seattle, Washington.",
                "initial_price" => 89.8,
                "price_2002" => 17.1,
                "price_2003" => 22.3,
                "price_2004" => 26.1,
                "price_2005" => 32.4,
                "price_2006" => 37.2,
                "price_2007" => 93.3,
                "symbol" => "AMZN"
            ],
            [
                "company" => "Campbell Soup",
                "description" => "Campbell Soup is a worldwide food company, offering condensed and ready-to-serve soups; broth, stocks, and canned poultry; pasta sauces; Mexican sauces; canned pastas, gravies, and beans; juices and beverages; and tomato juices. Its customers include retail food chains, mass discounters, mass merchandisers, club stores, convenience stores, drug stores and other retail, and commercial and non-commercial establishments. Campbell Soup Company was founded in 1869 and is headquartered in Camden, New Jersey.",
                "initial_price" => 37.1,
                "price_2002" => 22.27,
                "price_2003" => 25.8,
                "price_2004" => 28.4,
                "price_2005" => 30.2,
                "price_2006" => 32.7,
                "price_2007" => 36.4,
                "symbol" => "CPB"
            ],
            [
                "company" => "Disney",
                "description" => "The Walt Disney Company, founded in 1923, is a worldwide entertainment company, with movies, cable networks, radio networks, movie production, musical recordings and live stage plays. Disney also operates Walt Disney World in Florida and Disneyland in California, Disney Cruise Line, and international Disney resorts. Disney owns countless licenses and literary properties and publishes books and magazines.",
                "initial_price" => 40.8,
                "price_2002" => 15.4,
                "price_2003" => 20.2,
                "price_2004" => 22.6,
                "price_2005" => 25.1,
                "price_2006" => 28.4,
                "price_2007" => 35.7,
                "symbol" => "DIS"
            ],
            [
                "company" => "Dow Chemical",
                "description" => "The Dow Chemical Company manufactures raw materials that go into consumer products and services. These materials include food and pharmaceutical ingredients, electronic displays, semiconductor packaging, water purification, insulation, adhesives, pest control, polyurethane, polystyrene (goes into plastics), and crude-oil based raw materials. Dow was founded in 1897 and is based in Midland, Michigan.",
                "initial_price" => 38.3,
                "price_2002" => 27.5,
                "price_2003" => 30.1,
                "price_2004" => 34.2,
                "price_2005" => 38.7,
                "price_2006" => 42.5,
                "price_2007" => 44.7,
                "symbol" => "DOW"
            ],
            [
                "company" => "Exxon Mobil",
                "description" => "Exxon Mobil engages in the exploration and production of crude oil and natural gas, and manufacture of petroleum products. The company manufactures commodity petrochemicals. The company has operations in the United States, Canada/South America, Europe, Africa, Asia, and Australia/Oceania. Exxon Mobil Corporation was founded in1870 and is based in Irving, Texas.",
                "initial_price" => 39.2,
                "price_2002" => 32.8,
                "price_2003" => 35.6,
                "price_2004" => 40.1,
                "price_2005" => 43.8,
                "price_2006" => 47.2,
                "price_2007" => 91.6,
                "symbol" => "XOM"
            ],
            [
                "company" => "Ford",
                "description" => "Ford Motor Co. develops, manufactures, sells and services vehicles and parts worldwide. Ford sells cars and trucks primarily under the Ford and Lincoln brands. It sells to consumers (through retail dealers) and to rental car companies, leasing companies, and governments. Ford also provides maintenance and repair services. Ford also offers financing to vehicle purchasers. Ford was founded in 1903 and is based in Dearborn, Michigan.",
                "initial_price" => 27.4,
                "price_2002" => 19.63,
                "price_2003" => 12.1,
                "price_2004" => 14.3,
                "price_2005" => 16.5,
                "price_2006" => 18.2,
                "price_2007" => 18.3,
                "symbol" => "F"
            ],
            [
                "company" => "The Gap",
                "description" => "The Gap, Inc. sells retail clothing, accessories and personal care products globally under the brand names Gap, Old Navy, Banana Republic, Piperlime, Athleta and Intermix. Products include sports apparel, casual clothing, sleepwear, footwear and infants and children's clothing. The company has company-owned stores as well as franchise stores, online stores and catalogs. The Gap was founded in 1969 and is headquartered in San Francisco, California.",
                "initial_price" => 46.6,
                "price_2002" => 11.5,
                "price_2003" => 14.2,
                "price_2004" => 18.1,
                "price_2005" => 22.5,
                "price_2006" => 25.8,
                "price_2007" => 18.9,
                "symbol" => "GPS"
            ],
            [
                "company" => "General Mills",
                "description" => "General Mills manufactures and sells consumer foods worldwide. Products include cereals, frozen vegetables, dough, dessert and baking mixes, frozen pizzas, grains, fruits, ice creams and organic products. It sells to grocery stores as well as commercial food service distributors, restaurants and convenience stores. General Mills was founded in 1928 and is based in Minneapolis, Minnesota.",
                "initial_price" => 15.5,
                "price_2002" => 22.1,
                "price_2003" => 20.8,
                "price_2004" => 24.3,
                "price_2005" => 27.1,
                "price_2006" => 30.4,
                "price_2007" => 28.7,
                "symbol" => "GIS"
            ],
            [
                "company" => "Hewlett Packard",
                "description" => "Hewlett-Packard designs and sells products, technologies, software and IT services to consumers, businesses, government and education sectors worldwide. HP offers storage and server products, PCs, calculators, printers, scanners, network infrastructure products, video products (under the Halo brand), and Palm smartphones. HP was founded in 1939 and is headquartered in Palo Alto, California.",
                "initial_price" => 66.2,
                "price_2002" => 12.03,
                "price_2003" => 18.2,
                "price_2004" => 24.8,
                "price_2005" => 32.5,
                "price_2006" => 40.1,
                "price_2007" => 50.9,
                "symbol" => "HPQ"
            ],
            [
                "company" => "IBM",
                "description" => "IBM is an international IT company. IBM offers infrastructure and technology services, software for business integration and information management, data warehousing, identity management software, data security, Lotus software for collaboration, messaging and social networking, business intelligence software, servers, and storage systems. IBM was founded in 1910 and is based in Armonk, New York.",
                "initial_price" => 81.7,
                "price_2002" => 60.3,
                "price_2003" => 80.2,
                "price_2004" => 90.1,
                "price_2005" => 95.5,
                "price_2006" => 90.8,
                "price_2007" => 96.3,
                "symbol" => "IBM"
            ],
            [
                "company" => "Johnson & Johnson",
                "description" => "Johnson & Johnson develops and manufactures health care products for sale worldwide. J&J products include the brands Johnson's, Aveeno, Clean & Clear, Neutrogena, Lubriderm, Listerine, Reach, BandAid, Tylenol, Sudafed, Motrin and more. J&J products are used in skin care, baby care, and therapeutic medical care, including inflammatory diseases, arthritis, psoriasis, HIV/AIDS, schizophrenia, spinal care, and diabetes. The company was founded in 1886 and is based in New Brunswick, New Jersey.",
                "initial_price" => 35.3,
                "price_2002" => 52.3,
                "price_2003" => 48.5,
                "price_2004" => 54.2,
                "price_2005" => 58.9,
                "price_2006" => 63.4,
                "price_2007" => 66.2,
                "symbol" => "JNJ"
            ],
            [
                "company" => "Microsoft",
                "description" => "Microsoft develops, manufactures, licenses, and supports a range of software products and services for various computing devices worldwide. Products include Windows OS, Windows Live and Internet Explorer. Microsoft also provides training and tech support, online products such as Bing and MSN portals, and software including Microsoft Office, Microsoft SharePoint, Xbox 360, PC software games, online games, and Zune digital music. Microsoft was founded in 1975 and is headquartered in Redmond, Washington.",
                "initial_price" => 55.2,
                "price_2002" => 22.6,
                "price_2003" => 30.1,
                "price_2004" => 36.7,
                "price_2005" => 41.4,
                "price_2006" => 46.2,
                "price_2007" => 29.8,
                "symbol" => "MSFT"
            ],
            [
                "company" => "Monsanto",
                "description" => "Monsanto provides agricultural products for farmers in the United States and internationally. It operates in two segments, Seeds and Genomics, and Agricultural Productivity. The Seeds and Genomics segment produces corn, soybean, canola, and cotton seeds, as well as vegetable seeds, including tomato, pepper, eggplant, melon, cucumber, pumpkin, squash, beans, broccoli, onions, and lettuce seeds. The Agricultural Productivity segment offers herbicides for agricultural, industrial, and residential use. Brands include Roundup, Roundup Ready, YieldGard, and Dekalb. Monsanto focuses on high-yielding crops and crops that tolerate adverse conditions. The current company was founded in 2000 (name dates to 1901) and is based in St. Louis, Missouri.",
                "initial_price" => 11.4,
                "price_2002" => 17.2,
                "price_2003" => 10.3,
                "price_2004" => 15.8,
                "price_2005" => 25.6,
                "price_2006" => 35.4,
                "price_2007" => 86.9,
                "symbol" => "MO"
            ],
            [
                "company" => "PepsiCo",
                "description" => "PepsiCo, Inc. manufactures, markets, and sells various foods, snacks, and carbonated and non-carbonated beverages worldwide. Pepsi products include Pepsi beverages, Mountain Dew, Gatorade, Aquafina and Tropicana beverages as well as Frito-Lay snacks, Ruffles, Doritos, Tostitos, Rold Gold pretzels, Sun Chips, Crackerjack, Quaker Oats, Aunt Jemima mixes, Life Cereal, and Rice-a-Roni. The company was founded in 1898 and is headquartered in Purchase, New York.",
                "initial_price" => 34.3,
                "price_2002" => 36.6,
                "price_2003" => 38.5,
                "price_2004" => 40.2,
                "price_2005" => 45.9,
                "price_2006" => 50.4,
                "price_2007" => 73.7,
                "symbol" => "PEP"
            ],
            [
                "company" => "Starbucks",
                "description" => "Starbucks Corp. provides specialty coffee and tea beverages, packaged and ground coffee beans, single-serve products, juices and food offerings worldwide. Starbucks sells licensed products through grocery stores and other food service outlets as well as running company stores that sell coffees, pastries, breakfast sandwiches and lunch items. Starbucks sells products under the brand names Starbucks, Teavana, Tazo, Seattle's Best, La Blange and Verismo. Starbucks was founded in 1985 and is based in Seattle, Washington.",
                "initial_price" => 16.3,
                "price_2002" => 10.5,
                "price_2003" => 14.1,
                "price_2004" => 18.7,
                "price_2005" => 24.3,
                "price_2006" => 28.8,
                "price_2007" => 26.4,
                "symbol" => "SBUX"
            ],
            [
                "company" => "Texas Instruments",
                "description" => "Texas Instruments designs and sells semiconductors to electronics designers and manufacturers worldwide. The company has four segments => Analog, Embedded Processing, Wireless and Other. The Other segment provides handheld graphing and scientific calculators and licenses technologies to other electronic companies. The company was founded in 1938 and is headquartered in Dallas, Texas.",
                "initial_price" => 53.8,
                "price_2002" => 15.5,
                "price_2003" => 20.4,
                "price_2004" => 25.1,
                "price_2005" => 29.7,
                "price_2006" => 34.2,
                "price_2007" => 36.5,
                "symbol" => "TXN"
            ],
            [
                "company" => "Time Warner",
                "description" => "Time Warner is a media and entertainment company in the United States and internationally. It operates in three segments => Networks, Filmed Entertainment, and Publishing. Networks provides HBO, Cinemax, TNT, TBS, and CNN. Filmed Entertainment produces movies, TV shows, animation, videogames, and home video products. Publishing includes magazines (People, Sports Illustrated, Time), books, and websites. The company was founded in 1985 and is based in New York, New York.",
                "initial_price" => 89.5,
                "price_2002" => 36.3,
                "price_2003" => 45.8,
                "price_2004" => 51.1,
                "price_2005" => 58.2,
                "price_2006" => 65.7,
                "price_2007" => 57.8,
                "symbol" => "TWX"
            ],
            [
                "company" => "United Health",
                "description" => "UnitedHealth Group provides healthcare services in the United States. Its Health Benefits segment offers consumer-oriented health benefit plans and services to national employers, public sector employers, mid-sized employers, small businesses, and individuals; and non-employer based insurance options for purchase by individuals. It also provides health services to individuals aged 50 and older through a network of 730,000 physicians and other professionals and 5,300 hospitals. The company also provides financial products, data management services, and pharmacy management. The company was founded in 1974 and is based in Minnetonka, Minnesota.",
                "initial_price" => 17.6,
                "price_2002" => 21.8,
                "price_2003" => 28.7,
                "price_2004" => 35.2,
                "price_2005" => 42.5,
                "price_2006" => 49.8,
                "price_2007" => 47.7,
                "symbol" => "UNH"
            ],
            [
                "company" => "Walmart",
                "description" => "Walmart operates retail stores, warehouse clubs, online stores and small markets worldwide. Walmart stores sell a huge variety of items, from food and clothing to electronics, hardware, appliances, automotive accessories and pet supplies. Some stores include banks, restaurants and gas stations. Walmart was founded in 1945 and is headquartered in Bentonville, Arkansas. ",
                "initial_price" => 56.5,
                "price_2002" => 50.1,
                "price_2003" => 52.6,
                "price_2004" => 55.1,
                "price_2005" => 58.9,
                "price_2006" => 60.3,
                "price_2007" => 47.3,
                "symbol" => "WMT"
            ],
            [
                "company" => "Whirlpool",
                "description" => "Whirlpool manufactures and sells home appliances worldwide. Its principal products include laundry appliances, refrigerators, cooking appliances, dishwashers, mixers, and other small household appliances. The company also produces hermetic compressors for refrigeration systems. It markets and distributes its products under various brand names, which include Whirlpool, Maytag, KitchenAid, Jenn-Air, Roper, Estate, Admiral, Magic Chef, and Amana. The company was founded in 1906 and is based in Benton Harbor, Michigan.",
                "initial_price" => 58.2,
                "price_2002" => 46.8,
                "price_2003" => 49.3,
                "price_2004" => 54.8,
                "price_2005" => 62.1,
                "price_2006" => 68.5,
                "price_2007" => 94.9,
                "symbol" => "WHR"
            ],
            [
                "company" => "Xerox",
                "description" => "Xerox Corporation engages in the development, manufacture, marketing, service, and finance of document equipment, software, solutions, and services worldwide. The company operates in three segments => Technology, Services, and Other. The Technology segment provides multifunction printers, copiers, digital printing presses, light production devices, and desktop monochrome and color printers for office users. Other services include human resources, IT, card fare payment solutions, network outsourcing, commercial printing and electronic presentation systems. Xerox Corporation was founded in 1906 and is headquartered in Norwalk, Connecticut.",
                "initial_price" => 20.7,
                "price_2002" => 15.2,
                "price_2003" => 18.2,
                "price_2004" => 12.1,
                "price_2005" => 15.9,
                "price_2006" => 18.4,
                "price_2007" => 17.5,
                "symbol" => "XRX"
            ]
        ];
    function saham_teratas()
    {
        $newData = MainController::$data;
        $tahunan = [
            0, 0, 0, 0, 0, 0
        ];

        for ($i = 0; $i < count($newData); $i++) {
            $price_2002 = $newData[$i]['price_2002'];
            $price_2003 = $newData[$i]['price_2003'];
            $price_2004 = $newData[$i]['price_2004'];
            $price_2005 = $newData[$i]['price_2005'];
            $price_2006 = $newData[$i]['price_2006'];
            $price_2007 = $newData[$i]['price_2007'];
            $price = $price_2007 - $price_2006;
            $newData[$i]['price_rise'] = $price;
            $tahunan[0] += $price_2002;
            $tahunan[1] += $price_2003;
            $tahunan[2] += $price_2004;
            $tahunan[3] += $price_2005;
            $tahunan[4] += $price_2006;
            $tahunan[5] += $price_2007;
        }
        $tahunan[0] /= count($newData);
        $tahunan[1] /= count($newData);
        $tahunan[2] /= count($newData);
        $tahunan[3] /= count($newData);
        $tahunan[4] /= count($newData);
        $tahunan[5] /= count($newData);
        for ($i = 0; $i < count($newData); $i++) {
            for ($j = 0; $j < count($newData); $j++) {
                $price = $newData[$i]['price_rise'];
                $price_1 = $newData[$j]['price_rise'];
                if ($price > $price_1) {
                    $temp = $newData[$i];
                    $newData[$i] = $newData[$j];
                    $newData[$j] = $temp;
                }
            }
        }

        $chart = (new LarapexChart)->barChart()->setTitle('Grafik Saham')
            ->setSubtitle('Harga Rata-Rata Saham Per Tahun')
            ->addData('Tahun', $tahunan)
            ->setXAxis(['2002', '2003', '2004', '2005', '2006', '2007']);

        return view('saham_teratas', ["data" => $newData, "chart" => $chart]);
    }
    function list_saham()
    {
        $newData = MainController::$data;
        for ($i = 0; $i < count($newData); $i++) {
            $price_2006 = $newData[$i]['price_2006'];
            $price_2007 = $newData[$i]['price_2007'];
            $price = $price_2007 - $price_2006;
            $newData[$i]['price_rise'] = $price;
        }
        return view('list_saham', ["data" => $newData]);
    }
    function saham_detail(string $symbol)
    {
        $data = MainController::$data;
        $newData = [];
        $tahunan = [0, 0, 0, 0, 0, 0];
        foreach ($data as $index => $value) {
            if ($value['symbol'] == $symbol) {
                $newData = $value;
                $price_2006 = $newData['price_2006'];
                $price_2007 = $newData['price_2007'];
                $price = $price_2007 - $price_2006;
                $newData['price_rise'] = $price;
                break;
            }
        }
        $tahunan[0] = $newData['price_2002'];
        $tahunan[1] = $newData['price_2003'];
        $tahunan[2] = $newData['price_2004'];
        $tahunan[3] = $newData['price_2005'];
        $tahunan[4] = $newData['price_2006'];
        $tahunan[5] = $newData['price_2007'];
        $chart = (new LarapexChart)->barChart()->setTitle('Grafik Saham')
            ->setSubtitle('Harga Rata-Rata Saham Per Tahun')
            ->addData('Tahun', $tahunan)
            ->setXAxis(['2002', '2003', '2004', '2005', '2006', '2007']);
        return view('detail_saham', ["data" => $newData, "chart" => $chart]);
    }
}
