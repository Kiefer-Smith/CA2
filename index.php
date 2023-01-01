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
<h2 style="text-align:center">Office PCs</h>


<div class="container-fluid bg-trasparent my-4 p-3" style="position: relative">
  <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
    <div class="col hp">
      <div class="card h-100 shadow-sm">
        <a href="#">
          <img src="image_uploads/aurora supreme.png" class="card-img-top" alt="product.title" />
        </a>
 
        <div class="label-top shadow-sm">
          <a class="text-white" href="#">asus</a>
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
          <a class="text-white" href="#">razer</a>
        </div>
        <div class="card-body">
          <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success">2.345$</span>
 
            <span class="float-end"><a href="#" class="small text-muted text-uppercase aff-link">reviews</a></span>
          </div>
          <h5 class="card-title">
            <a target="_blank" href="#">Razer Blade 15 Base Gaming Laptop 2020: Intel Core i7-10750H 6-Core, NVIDIA GeForce GTX 1660 Ti, 15.6" FHD 1080p 120Hz, 16GB RAM, 256GB SSD, CNC Aluminum, Chroma RGB Lighting, Black</a>
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
          <img src="https://m.media-amazon.com/images/I/81w+3k4U8PL._AC_SL1500_.jpg" class="card-img-top" alt="product.title" />
        </a>
 
        <div class="label-top shadow-sm">
          <a class="text-white" href="#">lenovo</a>
        </div>
        <div class="card-body">
          <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success">1.020$</span>
 
            <span class="float-end"><a href="#" class="small text-muted text-uppercase aff-link">reviews</a></span>
          </div>
          <h5 class="card-title">
            <a target="_blank" href="#">Lenovo Legion 5 Gaming Laptop, 15.6" FHD (1920x1080) IPS Screen, AMD Ryzen 7 4800H Processor, 16GB DDR4, 512GB SSD, NVIDIA GTX 1660Ti, Windows 10, 82B1000AUS, Phantom Black</a>
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
          <img src="https://m.media-amazon.com/images/I/61Ze2wc9nyS._AC_SL1500_.jpg" class="card-img-top" alt="product.title" />
        </a>
        <!-- <div class="label-top shadow-sm">Asus Rog</div>  -->
        <div class="label-top shadow-sm">
          <a class="text-white" href="#">msi</a>
        </div>
        <div class="card-body">
          <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success">2.245$</span>
 
            <span class="float-end"><a href="#" class="small text-muted text-uppercase aff-link">reviews</a></span>
          </div>
          <h5 class="card-title">
            <a target="_blank" href="#">MSI GL66 Gaming Laptop: 15.6" 144Hz FHD 1080p Display, Intel Core i7-11800H, NVIDIA GeForce RTX 3070, 16GB, 512GB SSD, Win10, Black (11UGK-001)</a>
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




</section>
<?php
include('includes/footer.php');
?>