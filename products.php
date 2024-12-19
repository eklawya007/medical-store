<?php include 'includes/header.php'; ?>
<div class="container mt-5">
    <h2 class="text-center">Our Products</h2>
    <div class="row">
        <?php
        // Dummy product data; this could be fetched from a database in a real-world app
        $products = [
            ["name" => "Insulin", "price" => "10.00", "image" => "css/images/Insulin.jpg"],
            ["name" => "Penicillin", "price" => "15.00", "image" => "css/images/penicillin.png"],
            ["name" => "Promethazine", "price" => "12.00", "image" => "css/images/promethazine.jpeg"],
            ["name" => "cough-syrup", "price" => "12.00", "image" => "css/images/cough-syrup.jpg"],
            ["name" => "Divasag-er-500-1000x1000", "price" => "10.00", "image" => "css/images/divasag-er-500-1000x1000hheadache.jpg"],
            ["name" => "PCM-650", "price" => "15.00", "image" => "css/images/paracetamol-650.jpg"],
            ["name" => "Vitamin-C", "price" => "12.00", "image" => "css/images/vitamine-c.jpg"],
            ["name" => "Betadine", "price" => "15.00", "image" => "css/images/betadine copy 2.jpg"],
            ["name" => "Thermometer", "price" => "12.00", "image" => "css/images/thermometer.jpg"],
            
        ];
        foreach ($products as $product) {
            echo '<div class="col-md-4 mb-4">';
            echo '  <div class="card">';
            echo '    <img src="'.$product["image"].'" class="card-img-top" alt="'.$product["name"].'">';
            echo '    <div class="card-body">';
            echo '      <h5 class="card-title">'.$product["name"].'</h5>';
            echo '      <p class="card-text">Price: $'.$product["price"].'</p>';
            echo '      <a href="#" class="btn btn-primary">Buy Now</a>';
            echo '    </div>';
            echo '  </div>';
            echo '</div>';
        }
        ?>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
