<?php
$items = array(
  'mini-key' => array(
    'name'  => 'Rii i8+ 2.4GHz Mini Wireless Keyboard',
    'price' => '19.95',
    'link'  => 'https://www.amazon.com/Rii-Wireless-Keyboard-Rechargable-Battery-Black/dp/B00Z81U3YY/ref=sr_1_1?s=books&ie=UTF8&qid=1515040367&sr=8-1&keywords=rii+mini+keyboards',
    'desc'  => 'Easily the most comfortable mini keyboard on the market',
    'rate'  => 3
  ),
  'crash-course' => array(
    'name'  => 'Python Crash Course',
    'price' => '27.00',
    'link'  => 'https://www.amazon.com/Python-Crash-Course-Hands-Project-Based/dp/1593276036/ref=sr_1_1?ie=UTF8&qid=1515040138&sr=8-1&keywords=python+crash+course',
    'desc'  => 'An excellent intro to one of the most accessible coding languages',
    'rate'  => 3
  ),
  'timebox' => array(
    'name'  => 'Divoom Timebox Mini',
    'price' => '49.95',
    'link'  => 'https://www.amazon.com/Divoom-Timebox-mini-sleep-aid-programmable/dp/B01N7ST75I/ref=sr_1_1?ie=UTF8&qid=1515039875&sr=8-1&keywords=divoom+timebox',
    'desc'  => 'A neat toy for your desk that\'s a good conversation starter',
    'rate'  => 1
  ),
  'dime-card' => array(
    'name'  => 'DiMeCard 8 microSD Card Holder',
    'price' => '4.95',
    'link'  => 'https://www.adafruit.com/product/3664',
    'desc'  => 'Keep all your microSD cards in one, safe place',
    'rate'  => 4
  ),
  'tile' => array(
    'name'  => 'Tile Mate - Key Finder',
    'price' => '19.00',
    'link'  => 'https://www.amazon.com/Tile-Mate-Finder-Anything-Finder/dp/B01L3VEC08/ref=dp_ob_title_wld',
    'desc'  => 'A handy device that helps you keep track of your keys with your phone',
    'rate'  => 2
  ),
  'mold-glue' => array(
    'name'  => 'Moldable Glue', 
    'price' => '12.50',
    'link'  => 'https://www.amazon.com/dp/B0176JJ91S/ref=asc_df_B0176JJ91S5323210/?tag=hyprod-20&creative=395009&creativeASIN=B0176JJ91S&linkCode=df0&hvadid=167126942869&hvpos=1o2&hvnetw=g&hvrand=4160100226222896490&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9004372&hvtargid=pla-307326139577',
    'desc'  => 'Use this stuff to fix charging cables that have frayed on the end',
    'rate'  => 4
  ),
  'solar-panel' => array(
    'name'  => 'Medium 6V 2W Solar panel - 2.0 Watt',
    'price' => '39.99',
    'link'  => 'https://www.adafruit.com/product/200',
    'desc'  => 'It\'s a little solar panel that you can use to power your projects.',
    'rate'  => 2
  ),
  'rpi-3' => array(
    'name'  => 'Raspberry Pi 3 with Heatsinks',
    'price' => '37.99',
    'link'  => 'https://www.amazon.com/Raspberry-Single-Computer-Performance-Heatsink/dp/B01CMC50S0/ref=sr_1_2_sspa?s=electronics&ie=UTF8&qid=1512618524&sr=1-2-spons&keywords=raspberry+pi+3&psc=1',
    'desc'  => 'This version is great for repeat buyers since it\'s just the board and the sinks', 
    'rate'  => 4
  ),
  'code-craft' => array(
    'name'  => 'Code Craft',
    'price' => '10.00',
    'link'  => 'https://www.amazon.com/gp/offer-listing/1593271190/ref=olp_f_usedAcceptable?ie=UTF8&f_all=true&f_usedVeryGood=true',
    'desc'  => 'A great book that would help you understand coding on a deeper level',
    'rate'  => 3
  ),
  'calipers' => array(
    'name'  => 'Digital Calipers',
    'price' => '8.99',
    'link'  => 'https://www.amazon.com/Merkmak-Vernier-Caliper-Electronic-Micrometer/dp/B06XKTXWWF/ref=as_li_ss_tl?s=industrial&ie=UTF8&qid=1510883990&sr=1-2&keywords=digital+calipers&linkCode=sl1&tag=makmus-20&linkId=4bb4bb599b7e0b436d82085b621b7bb6',
    'desc'  => 'It\'s cheap but for sure good enough for your prints',
    'rate'  => 3,
  ),
  'multimeter' => array(
    'name'  => 'Digital Multimeter',
    'price' => '13.99',
    'link'  => 'https://www.amazon.com/AstroAI-Digital-Multimeter-Voltage-Tester/dp/B01ISAMUA6/ref=sr_1_3?s=industrial&ie=UTF8&qid=1515019020&sr=1-3&keywords=multimeter',
    'desc'  => 'If you like doing DIY projects or 3D printing, this can really help you out',
    'rate'  => 2
  ),
 );

class item_list {
  public $items;

  function __construct($outer_items) {
    // sets up the class
    $this->items = $outer_items;
  }

  function rate_items($sort_type) {
  // sorts items according to their rating
  // that $sort_type variable will be the $_GET['sort'] variable
    $want4 = array();
    $want3 = array();
    $want2 = array();
    $want1 = array();
    foreach($this->items as $key => $value) {
      if ($value['rate'] === 4) {
        $want4[$key] = $value;
      } elseif ($value['rate'] === 3) {
        $want3[$key] = $value;
      } elseif ($value['rate'] === 2) {
        $want2[$key] = $value;
      } else { 
        $want1[$key] = $value;
      } 
    }
    if ($sort_type === 'r_h_l') {
      $this->items = array_merge($want4, $want3, $want2, $want1);
    } else {
      $this->items = array_merge($want1, $want2, $want3, $want4);
    }
  }

  function price_sort($sort_type) {
  // sorts items based on price
  // that $sort_type variable will be the $_GET['sort'] variable
    if ($sort_type === 'p_l_h') {
      uasort($this->items, function ($a, $b) {
        return ($a["price"] <= $b["price"]) ? -1 : 1;
      //those $a and $b will stand for the individual keys, whatever
      //they are, so it will be $a['price'] === 'metroid'['price']
      // and they will rotate and switch
      // check your notes if you forget how usort works
      });
    } else { 
      uasort($this->items, function ($a, $b) {
        return ($a["price"] <= $b["price"]) ? 1 : -1;
      });
      // low to high is 1 -1, high to low is -1 1
    }
  }
  function sort_items() {
  // decides according to which sorting method the items will be sorted 
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      $sort_type = $_GET['sort'];
      if ($sort_type === 'p_h_l') {
        $this->price_sort($sort_type);
      } elseif ($sort_type === 'p_l_h') {
        $this->price_sort($sort_type);
      } elseif ($sort_type === 'r_h_l') {
        $this->rate_items($sort_type);  
      } elseif ($sort_type === 'r_l_h') { 
        $this->rate_items($sort_type);  
      } else {
        $this->price_sort('p_l_h'); // initial load defualt is price high to low
      }
    }
  }

  function show_items() {
  // The function that actually writes the HTML for each item
    $this->sort_items(); // sorts them

    foreach($this->items as $key => $value) {
      echo '
        <div class="item-box" id="' . $key . '">

          <h2 class="item-name">' . $value['name'] . ' </h2>

          <div class="pic-holder">
            <div class="item-picture-price">
              <img src="images/' . $key . '.jpg" alt="' . $value['name'] . ' pic" />
              <p class="item-price">$' . $value['price'] . '</p>
            </div>
          </div>

          <p class="item-desc"><em>' . $value['desc'] . '</em></p>  
          <div class="line"></div>
          <div class="item-link-rate">
            <div class="rating-' . $value['rate'] . ' rating">
              <div class="heart-container">
                <div class="heart heart-1"></div>
              </div>
              <div class="heart-container">
                <div class="heart heart-2"></div>
              </div>
              <div class="heart-container">
                <div class="heart heart-3"></div>
              </div>
              <div class="heart-container">
                <div class="heart heart-4"></div>
              </div>
            </div>
            <a href="' . $value['link'] . '" class="item-link" target="_blank">Link</a>
          </div>
        </div>';    
    }
  }
}
