
<?php
{
$title = $_POST['title']; //test
$description = $_POST['description'];
$price = $_POST['price'];
$imagePath = '';
echo $_SERVER['REQUEST_METHOD'].'<br>';
if(!$title) {
  $errors[] = 'Product title is required';
}

}
if(!$price) {
  $errors[] = 'Product price is required';
}

if(!is_dir(__DIR__.'/public/images')) {
    mkdir(__DIR__.'/public/images');
    }
  
if(empty($errors)) {
    $image = $_FILES['image'] ?? null;
    $imagePath = $product['image'];
    if ($image && $image['tmp_name']) {
      if ($product['image']) {
        unlink(__DIR__.'/public/'.$product['image']);
      }
      $imagePath = 'images/' . randomString(8) . '/' . $image['name'];
       mkdir(dirname( __DIR__.'/../public/'.$imagePath));
      move_uploaded_file($image['tmp_name'], __DIR__. '/../public/' . $imagePath );
    }
    }
 