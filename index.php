<?php
require_once('database.php');

// Get category ID
if (!isset($category_id)) {
$category_id = filter_input(INPUT_GET, 'category_id', 
FILTER_VALIDATE_INT);
if ($category_id == NULL || $category_id == FALSE) {
$category_id = 1;
}
}

// Get name for current category
$queryCategory = "SELECT * FROM categories
WHERE categoryID = :category_id";
$statement1 = $db->prepare($queryCategory);
$statement1->bindValue(':category_id', $category_id);
$statement1->execute();
$category = $statement1->fetch();
$statement1->closeCursor();
$category_name = $category['categoryName'];

// Get all categories
$queryAllCategories = 'SELECT * FROM categories
ORDER BY categoryID';
$statement2 = $db->prepare($queryAllCategories);
$statement2->execute();
$categories = $statement2->fetchAll();
$statement2->closeCursor();

// Get Products for selected category
$queryRecords = "SELECT * FROM Products
WHERE categoryID = :category_id
ORDER BY productID";
$statement3 = $db->prepare($queryRecords);
$statement3->bindValue(':category_id', $category_id);
$statement3->execute();
$Products = $statement3->fetchAll();
$statement3->closeCursor();
?>
<div class="container">
<?php
include('includes/header.php');
?>
<h1 style="text-align:center">Product List</h1>
<h2 style="text-align:center">Office PCs</h2>


<div class="container-fluid bg-trasparent my-4 p-3" style="position: relative">
  <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
    <div class="col hp">
      <div class="card h-100 shadow-sm">
        <a href="#">
          <img src="image_uploads/aurora supreme.png" class="card-img-top" alt="product.title" />
        </a>
 
        <div class="label-top shadow-sm">
          <a class="text-white" href="#">Intel</a>
        </div>
        <div class="card-body">
          <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success">€800</span>
 
            <span class="float-end"><a href="#" class="small text-muted text-uppercase aff-link">reviews</a></span>
          </div>
          <h5 class="card-title">
            <a target="_blank" href="#">AURORA SUPREME Intel® Core™ i3-10100
            ASUS® PRIME H510M-A
            8GB Corsair VENGEANCE 3200MHz
            2GB GEFORCE GT 1030 - DVI, HDMI
            256GB PCS PCIe M.2 SSD
            256GB PCS 2.5" SSD</a>
          </h5>
 
          <div class="d-grid gap-2 my-4">
 
            <a href="#" class="btn btn-warning bold-btn">add to cart</a>
 
          </div>
          <div class="clearfix mb-1">
 
            <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>
 
            <span class="float-end">
              <i class="far fa-heart" style="cursor: pointer"></i>
 
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col hp">
      <div class="card h-100 shadow-sm">
        <a href="#">
          <img src="image_uploads/dimension spark.png" class="card-img-top" alt="product.title" />
        </a>
 
        <div class="label-top shadow-sm">
          <a class="text-white" href="#">Intel</a>
        </div>
        <div class="card-body">
          <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success">€650</span>
 
            <span class="float-end"><a href="#" class="small text-muted text-uppercase aff-link">reviews</a></span>
          </div>
          <h5 class="card-title">
            <a target="_blank" href="#">
            DIMENSION SPARK

            Intel® Core™ i3-10100
            GIGABYTE H510M H
            8GB Corsair VENGEANCE 3200MHz
            2GB GEFORCE GT 1030 - DVI, HDMI
            256GB PCS PCIe M.2 SSD
            256GB PCS 2.5" SSD</a>
          </h5>
 
          <div class="d-grid gap-2 my-4">
 
            <a href="#" class="btn btn-warning bold-btn">add to cart</a>
 
          </div>
          <div class="clearfix mb-1">
 
            <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>
 
            <span class="float-end">
              <i class="far fa-heart" style="cursor: pointer"></i>
 
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col hp">
      <div class="card h-100 shadow-sm">
        <a href="#">
          <img src="image_uploads/Fusion Goliath.png" class="card-img-top" alt="product.title" />
        </a>
 
        <div class="label-top shadow-sm">
          <a class="text-white" href="#">AMD</a>
        </div>
        <div class="card-body">
          <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success">€950</span>
 
            <span class="float-end"><a href="#" class="small text-muted text-uppercase aff-link">reviews</a></span>
          </div>
          <h5 class="card-title">
            <a target="_blank" href="#">
FUSION GOLIATH

AMD Ryzen 9 7950X
ASUS® TUF GAMING X670E-PLUS WIFI
32GB Corsair VENGEANCE 4800MHz
24GB AMD RADEON™ RX 7900 XTX
1TB SEAGATE FIRECUDA 530 GEN 4
Windows 11 Home</a>
          </h5>
 
          <div class="d-grid gap-2 my-4">
 
            <a href="#" class="btn btn-warning bold-btn">add to cart</a>
 
          </div>
          <div class="clearfix mb-1">
 
            <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>
 
            <span class="float-end">
              <i class="far fa-heart" style="cursor: pointer"></i>
 
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col hp">
      <div class="card h-100 shadow-sm">
        <a href="#">
          <img src="image_uploads/aurora ultra.png" class="card-img-top" alt="product.title" />
        </a>
        <!-- <div class="label-top shadow-sm">Asus Rog</div>  -->
        <div class="label-top shadow-sm">
          <a class="text-white" href="#">Intel</a>
        </div>
        <div class="card-body">
          <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success">€850</span>
 
            <span class="float-end"><a href="#" class="small text-muted text-uppercase aff-link">reviews</a></span>
          </div>
          <h5 class="card-title">
            <a target="_blank" href="#">AURORA ULTRA

Intel® Core™ i3-10100
GIGABYTE H510M H
8GB Corsair VENGEANCE 3200MHz
2GB GEFORCE GT 1030 - DVI, HDMI
512GB SOLIDIGM P41+ GEN 4 M.2
2TB SEAGATE BARRACUDA HDD</a>
          </h5>
 
          <div class="d-grid gap-2 my-4">
 
            <a href="#" class="btn btn-warning bold-btn">add to cart</a>
 
          </div>
          
          <div class="clearfix mb-1">
 
            <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>
 
            <span class="float-end">
              
<i class="far fa-heart" style="cursor: pointer"></i>
 
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 

<h2 style="text-align:center">Gaming PCs</h2>


<div class="container-fluid bg-trasparent my-4 p-3" style="position: relative">
  <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
    <div class="col hp">
      <div class="card h-100 shadow-sm">
        <a href="#">
          <img src="image_uploads/pulsar elite.png" class="card-img-top" alt="product.title" />
        </a>
 
        <div class="label-top shadow-sm">
          <a class="text-white" href="#">Intel</a>
        </div>
        <div class="card-body">
          <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success">€2300</span>
 
            <span class="float-end"><a href="#" class="small text-muted text-uppercase aff-link">reviews</a></span>
          </div>
          <h5 class="card-title">
            <a target="_blank" href="#">
                PULSAR ELITE
                Intel® Core™ i5-12400F
ASUS® TUF GAMING Z690-PLUS WIFI D4
8GB Corsair VENGEANCE 3200MHz
8GB NVIDIA GEFORCE RTX 3070
250GB SAMSUNG 970 EVO PLUS M.2
1TB SEAGATE BARRACUDA HDD</a>
          </h5>
 
          <div class="d-grid gap-2 my-4">
 
            <a href="#" class="btn btn-warning bold-btn">add to cart</a>
 
          </div>
          <div class="clearfix mb-1">
 
            <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>
 
            <span class="float-end">
              <i class="far fa-heart" style="cursor: pointer"></i>
 
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col hp">
      <div class="card h-100 shadow-sm">
        <a href="#">
          <img src="image_uploads/cobalt pro.png" class="card-img-top" alt="product.title" />
        </a>
 
        <div class="label-top shadow-sm">
          <a class="text-white" href="#">Intel</a>
        </div>
        <div class="card-body">
          <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success">€2000</span>
 
            <span class="float-end"><a href="#" class="small text-muted text-uppercase aff-link">reviews</a></span>
          </div>
          <h5 class="card-title">
            <a target="_blank" href="#">
                COBALT PRO
            Intel® Core™ i7-12700KF
ASUS® TUF GAMING Z690-PLUS WIFI D4
16GB Corsair VENGEANCE RGB PRO 3600MHz
12GB AMD RADEON™ RX 6700 XT
128GB PCS PCIe M.2 SSD
2TB SEAGATE BARRACUDA HDD</a>
          </h5>
 
          <div class="d-grid gap-2 my-4">
 
            <a href="#" class="btn btn-warning bold-btn">add to cart</a>
 
          </div>
          <div class="clearfix mb-1">
 
            <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>
 
            <span class="float-end">
              <i class="far fa-heart" style="cursor: pointer"></i>
 
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col hp">
      <div class="card h-100 shadow-sm">
        <a href="#">
          <img src="image_uploads/cobalt ultra.png" class="card-img-top" alt="product.title" />
        </a>
 
        <div class="label-top shadow-sm">
          <a class="text-white" href="#">Intel</a>
        </div>
        <div class="card-body">
          <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success">€2550</span>
 
            <span class="float-end"><a href="#" class="small text-muted text-uppercase aff-link">reviews</a></span>
          </div>
          <h5 class="card-title">
            <a target="_blank" href="#">

            COBALT ULTRA

Intel® Core™ i9-12900K
ASUS® TUF GAMING Z690-PLUS WIFI D4
16GB Corsair VENGEANCE RGB PRO 3600MHz
10GB NVIDIA GEFORCE RTX 3080
512GB PCS PCIe M.2 SSD
2TB SEAGATE BARRACUDA HDD</a>
          </h5>
 
          <div class="d-grid gap-2 my-4">
 
            <a href="#" class="btn btn-warning bold-btn">add to cart</a>
 
          </div>
          <div class="clearfix mb-1">
 
            <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>
 
            <span class="float-end">
              <i class="far fa-heart" style="cursor: pointer"></i>
 
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col hp">
      <div class="card h-100 shadow-sm">
        <a href="#">
          <img src="image_uploads/pulsar ultra.png" class="card-img-top" alt="product.title" />
        </a>
        <!-- <div class="label-top shadow-sm">Asus Rog</div>  -->
        <div class="label-top shadow-sm">
          <a class="text-white" href="#">Intel</a>
        </div>
        <div class="card-body">
          <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success">€3310</span>
 
            <span class="float-end"><a href="#" class="small text-muted text-uppercase aff-link">reviews</a></span>
          </div>
          <h5 class="card-title">
            <a target="_blank" href="#">
PULSAR ULTRA

Intel® Core™ i7-12700KF
ASUS® TUF GAMING Z690-PLUS WIFI D4
16GB Corsair VENGEANCE 3200MHz
24GB NVIDIA GEFORCE RTX 4090
512GB PCS PCIe M.2 SSD
1TB SEAGATE BARRACUDA HDD</a>
          </h5>
 
          <div class="d-grid gap-2 my-4">
 
            <a href="#" class="btn btn-warning bold-btn">add to cart</a>
 
          </div>
          
          <div class="clearfix mb-1">
 
            <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>
 
            <span class="float-end">
              
<i class="far fa-heart" style="cursor: pointer"></i>
 
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 
<h3 style="text-align:center">Laptops</h3>


<div class="container-fluid bg-trasparent my-4 p-3" style="position: relative">
  <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
    <div class="col hp">
      <div class="card h-100 shadow-sm">
        <a href="#">
          <img src="image_uploads/elimina17.png" class="card-img-top" alt="product.title" />
        </a>
 
        <div class="label-top shadow-sm">
          <a class="text-white" href="#">Intel</a>
        </div>
        <div class="card-body">
          <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success">€1070</span>
 
            <span class="float-end"><a href="#" class="small text-muted text-uppercase aff-link">reviews</a></span>
          </div>
          <h5 class="card-title">
            <a target="_blank" href="#">
            17,3" ELIMINA®



Intel® Core™ i7 14-Core 12700H / i5 12-Core 12500H Processors
GeForce GTX 1650 / RTX 3050 / 3050 Ti / 3060
144Hz FHD Panel (1920 x 1080), 72% NTSC
Multi-Colour Backlit Keyboard
SOUND BLASTER™ Cinema
SuperSpeed USB 3.2
HDMI Output Connection
Mini Display Port
Trusted Platform Module (TPM)
Array Microphone Configuration
1.0MP Webcam
Wireless Fitted as Standard</a>
          </h5>
 
          <div class="d-grid gap-2 my-4">
 
            <a href="#" class="btn btn-warning bold-btn">add to cart</a>
 
          </div>
          <div class="clearfix mb-1">
 
            <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>
 
            <span class="float-end">
              <i class="far fa-heart" style="cursor: pointer"></i>
 
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col hp">
      <div class="card h-100 shadow-sm">
        <a href="#">
          <img src="image_uploads/valeon-headline.png" class="card-img-top" alt="product.title" />
        </a>
 
        <div class="label-top shadow-sm">
          <a class="text-white" href="#">AMD</a>
        </div>
        <div class="card-body">
          <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success">€1800</span>
 
            <span class="float-end"><a href="#" class="small text-muted text-uppercase aff-link">reviews</a></span>
          </div>
          <h5 class="card-title">
            <a target="_blank" href="#">
            16,1" VALEON®



AMD® Ryzen™ CPUs
8GB AMD RADEON™ RX 6650M XT
165Hz QHD IPS Panel (2560 x 1440), sRGB 100%
Aluminium Chassis
Ultra Narrow Bezel Design
High Capacity 80Wh Battery
Per-Key RGB Keyboard
SuperSpeed USB 3.2
Fingerprint Scanner
HDMI 2.1 (4K 60HZ)
2.0MP Webcam
Wireless Fitted as Standard</a>
          </h5>
 
          <div class="d-grid gap-2 my-4">
 
            <a href="#" class="btn btn-warning bold-btn">add to cart</a>
 
          </div>
          <div class="clearfix mb-1">
 
            <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>
 
            <span class="float-end">
              <i class="far fa-heart" style="cursor: pointer"></i>
 
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col hp">
      <div class="card h-100 shadow-sm">
        <a href="#">
          <img src="image_uploads/1.png" class="card-img-top" alt="product.title" />
        </a>
 
        <div class="label-top shadow-sm">
          <a class="text-white" href="#">Intel</a>
        </div>
        <div class="card-body">
          <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success">€400</span>
 
            <span class="float-end"><a href="#" class="small text-muted text-uppercase aff-link">reviews</a></span>
          </div>
          <h5 class="card-title">
            <a target="_blank" href="#">

            14,1" GEMINI


Intel® Celeron™ N-Series CPUs
Intel Integrated Graphics
60Hz FHD IPS Panel (1920 x 1080)
Silver Aluminium Chassis
SUPERSPEED USB 3.0
Micro HDMI Output
Narrow Bezel Design
720P HD Webcam
Wireless Fitted as Standard
</a>
          </h5>
 
          <div class="d-grid gap-2 my-4">
 
            <a href="#" class="btn btn-warning bold-btn">add to cart</a>
 
          </div>
          <div class="clearfix mb-1">
 
            <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>
 
            <span class="float-end">
              <i class="far fa-heart" style="cursor: pointer"></i>
 
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col hp">
      <div class="card h-100 shadow-sm">
        <a href="#">
          <img src="image_uploads/2.png" class="card-img-top" alt="product.title" />
        </a>
        <!-- <div class="label-top shadow-sm">Asus Rog</div>  -->
        <div class="label-top shadow-sm">
          <a class="text-white" href="#">Intel</a>
        </div>
        <div class="card-body">
          <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success">€2225</span>
 
            <span class="float-end"><a href="#" class="small text-muted text-uppercase aff-link">reviews</a></span>
          </div>
          <h5 class="card-title">
            <a target="_blank" href="#">
            17,3" VYPER®



Intel® Core™ i9 14-Core Processor 12900H
Intel® Arc™ A770M
165Hz QHD Panel (2560 x 1440), DCI-P3
Thunderbolt™ 4
DDR5 RAM
Per-Key RGB Keyboard
Sound Blaster® Atlas
SuperSpeed USB 3.2
HDMI Output Connection
Mini Display Port
Windows Hello</a>
          </h5>
 
          <div class="d-grid gap-2 my-4">
 
            <a href="#" class="btn btn-warning bold-btn">add to cart</a>
 
          </div>
          
          <div class="clearfix mb-1">
 
            <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>
 
            <span class="float-end">
              
<i class="far fa-heart" style="cursor: pointer"></i>
 
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<h4 style="text-align:center">PC Deals</h4>


<div class="container-fluid bg-trasparent my-4 p-3" style="position: relative">
  <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
    <div class="col hp">
      <div class="card h-100 shadow-sm">
        <a href="#">
          <img src="image_uploads/pulsar elite.png" class="card-img-top" alt="product.title" />
        </a>
 
        <div class="label-top shadow-sm">
          <a class="text-white" href="#">Intel</a>
        </div>
        <div class="card-body">
          <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success">€2300</span>
 
            <span class="float-end"><a href="#" class="small text-muted text-uppercase aff-link">reviews</a></span>
          </div>
          <h5 class="card-title">
            <a target="_blank" href="#">
                PULSAR ELITE
                Intel® Core™ i5-12400F
ASUS® TUF GAMING Z690-PLUS WIFI D4
8GB Corsair VENGEANCE 3200MHz
8GB NVIDIA GEFORCE RTX 3070
250GB SAMSUNG 970 EVO PLUS M.2
1TB SEAGATE BARRACUDA HDD</a>
          </h5>
 
          <div class="d-grid gap-2 my-4">
 
            <a href="#" class="btn btn-warning bold-btn">add to cart</a>
 
          </div>
          <div class="clearfix mb-1">
 
            <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>
 
            <span class="float-end">
              <i class="far fa-heart" style="cursor: pointer"></i>
 
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col hp">
      <div class="card h-100 shadow-sm">
        <a href="#">
          <img src="image_uploads/cobalt pro.png" class="card-img-top" alt="product.title" />
        </a>
 
        <div class="label-top shadow-sm">
          <a class="text-white" href="#">Intel</a>
        </div>
        <div class="card-body">
          <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success">€2000</span>
 
            <span class="float-end"><a href="#" class="small text-muted text-uppercase aff-link">reviews</a></span>
          </div>
          <h5 class="card-title">
            <a target="_blank" href="#">
                COBALT PRO
            Intel® Core™ i7-12700KF
ASUS® TUF GAMING Z690-PLUS WIFI D4
16GB Corsair VENGEANCE RGB PRO 3600MHz
12GB AMD RADEON™ RX 6700 XT
128GB PCS PCIe M.2 SSD
2TB SEAGATE BARRACUDA HDD</a>
          </h5>
 
          <div class="d-grid gap-2 my-4">
 
            <a href="#" class="btn btn-warning bold-btn">add to cart</a>
 
          </div>
          <div class="clearfix mb-1">
 
            <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>
 
            <span class="float-end">
              <i class="far fa-heart" style="cursor: pointer"></i>
 
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col hp">
      <div class="card h-100 shadow-sm">
        <a href="#">
          <img src="image_uploads/cobalt ultra.png" class="card-img-top" alt="product.title" />
        </a>
 
        <div class="label-top shadow-sm">
          <a class="text-white" href="#">Intel</a>
        </div>
        <div class="card-body">
          <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success">€2550</span>
 
            <span class="float-end"><a href="#" class="small text-muted text-uppercase aff-link">reviews</a></span>
          </div>
          <h5 class="card-title">
            <a target="_blank" href="#">

            COBALT ULTRA

Intel® Core™ i9-12900K
ASUS® TUF GAMING Z690-PLUS WIFI D4
16GB Corsair VENGEANCE RGB PRO 3600MHz
10GB NVIDIA GEFORCE RTX 3080
512GB PCS PCIe M.2 SSD
2TB SEAGATE BARRACUDA HDD</a>
          </h5>
 
          <div class="d-grid gap-2 my-4">
 
            <a href="#" class="btn btn-warning bold-btn">add to cart</a>
 
          </div>
          <div class="clearfix mb-1">
 
            <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>
 
            <span class="float-end">
              <i class="far fa-heart" style="cursor: pointer"></i>
 
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col hp">
      <div class="card h-100 shadow-sm">
        <a href="#">
          <img src="image_uploads/pulsar ultra.png" class="card-img-top" alt="product.title" />
        </a>
        <!-- <div class="label-top shadow-sm">Asus Rog</div>  -->
        <div class="label-top shadow-sm">
          <a class="text-white" href="#">Intel</a>
        </div>
        <div class="card-body">
          <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success">€3310</span>
 
            <span class="float-end"><a href="#" class="small text-muted text-uppercase aff-link">reviews</a></span>
          </div>
          <h5 class="card-title">
            <a target="_blank" href="#">
PULSAR ULTRA

Intel® Core™ i7-12700KF
ASUS® TUF GAMING Z690-PLUS WIFI D4
16GB Corsair VENGEANCE 3200MHz
24GB NVIDIA GEFORCE RTX 4090
512GB PCS PCIe M.2 SSD
1TB SEAGATE BARRACUDA HDD</a>
          </h5>
 
          <div class="d-grid gap-2 my-4">
 
            <a href="#" class="btn btn-warning bold-btn">add to cart</a>
 
          </div>
          
          <div class="clearfix mb-1">
 
            <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>
 
            <span class="float-end">
              
<i class="far fa-heart" style="cursor: pointer"></i>
 
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <section> -->
<!-- display a table of Products -->
<!-- <h2><?php echo $category_name; ?></h2>
<table>
<tr>
<th>Image</th>
<th>Name</th>
<th>Price</th>
<th>Description</th>
<th>Delete</th>
<th>Edit</th>
</tr>
<?php foreach ($Products as $Product) : ?>
<tr>
<td><img src="image_uploads/<?php echo $Product['image']; ?>" width="100px" height="100px" /></td>
<td><?php echo $Product['name']; ?></td>
<td><?php echo $Product['price']; ?></td>
<td><?php echo $Product['description']; ?></td>
<td><form action="delete_product.php" method="post"
id="delete_record_form">
<input type="hidden" name="product_id"
value="<?php echo $Product['productID']; ?>">
<input type="hidden" name="category_id"
value="<?php echo $Product['categoryID']; ?>">
<input type="submit" value="Delete">
</form></td>
<td><form action="edit_record_form.php" method="post"
id="delete_record_form">
<input type="hidden" name="product_id"
value="<?php echo $Product['productID']; ?>">
<input type="hidden" name="category_id"
value="<?php echo $Product['categoryID']; ?>">
<input type="submit" value="Edit">
</form></td>
</tr>
<?php endforeach; ?>
</table>-->




<!--</section>
<?php
include('includes/footer.php');
?>-->