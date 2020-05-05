<?php
$products = [
    [
        "id" => 1,
        "image" => './images/americano.png',
        "title" => "Café #1",
        "description" => "Descrição do café #1"
    ],
    [
        "id" => 2,
        "image"=> "https://dummyimage.com/213x179/000/fff&text=cafe2",
        "title" => "Café #2",
        "description" => "Descrição do café #2"
    ],
    [
        "id" => 2,
        "image"=> "https://dummyimage.com/213x179/000/fff&text=cafe2",
        "title" => "Café #2",
        "description" => "Descrição do café #2"
    ]
];

?>

<!DOCTYPE html>
<html lang="EN-US">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Products Sale</title>    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styleproducts.css">
</head>
<body>
	<header>
		<div class="jumbotron header">
			<div class="container">
				<div class="row">
					<div class="col-3">
						<img src="images/coffeeTime.png" width="200px" height="auto">
					</div>
					<div class="col-9">
						<div class="header-buttons">
							<div><a href="index.php"><div class="button">Home</div></a></div>
							<div><a href="about.php"><div class="button">About us</div></a></div>
							<div><a href="products.php"><div class="button">Products</div></a></div>
							<div><a href="#contact"><div class="button">Contact</div></a></div>
							<div><a href="perfil.php"><div class="button">My Account</div></a></div>
						</div>
						<div class="row">
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
    
    
    <div class="jumbotron d-none">
        <div class="row align-items-center d-none">
            <div class="col-4">
                <img src="https://dummyimage.com/640x480/b8b8b8/fff/?text=" alt="" class="img-fluid">
            </div>
            <div class="col-4">
                <img src="https://dummyimage.com/640x480/b8b8b8/fff/?text=" alt="" class="img-fluid">
            </div>
            <div class="col-4">
                <img src="https://dummyimage.com/640x480/b8b8b8/fff/?text=" alt="" class="img-fluid">
            </div>
        </div>
                
    </div>
    
    <main>
        
        <div class="mb-4"></div>
        
        <div class="container">
            <section id="servicos">
                <div class="row">
                    <?php
                        $cardCoffee = "";
                        foreach($products as $product){
                            $cardCoffee .= '<div class="col-12 col-sm-6 col-md-4 col-lg-3">';
                            $cardCoffee .= sprintf('<div class="card">');
                            $cardCoffee .= sprintf('    <div class="card-body">');
                            $cardCoffee .= sprintf('        <div class="thumbnail">');
                            $cardCoffee .= sprintf('            <img src="%s" alt="%s" class="img-fluid">', $product['image'], $product['title']);
                            $cardCoffee .= sprintf('        </div>');
                            $cardCoffee .= sprintf('        <h3>%s</h3>', $product['title']);
                            $cardCoffee .= sprintf('        <p>%s</p>', $product['description']);
                            $cardCoffee .= sprintf('        <a href="./product.php?id=%s" class="btn btn-primary">Buy now</a>', $product['id']);
                            $cardCoffee .= sprintf('    </div>');
                            $cardCoffee .= sprintf('</div>');
                            $cardCoffee .= '</div>';
                        }
                        echo $cardCoffee;
                    ?>

                    
                        
                    
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="thumbnail">
                                    <img src="https://i2.wp.com/engrave.in/blog/wp-content/uploads/2018/10/1_-PRD001-e1538378241248.jpg?resize=700%2C588&ssl=1" alt="" class="img-fluid">
                                </div>
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore debitis qui libero quasi veniam ullam exercitationem provident labore eum ut. Laboriosam molestias aperiam modi, illo a consequuntur deserunt vero quibusdam?</p>
                                <a href="#" class="btn btn-primary">Buy now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="thumbnail">
                                    <img src="https://img.cigarsinternational.com/product/iris/bgwhite/wd500/cofcbd-zom-1000.jpg?v=518793" alt="" class="img-fluid">
                                </div>
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore debitis qui libero quasi veniam ullam exercitationem provident labore eum ut. Laboriosam molestias aperiam modi, illo a consequuntur deserunt vero quibusdam?</p>
                                <a href="#" class="btn btn-primary">Buy now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="thumbnail">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSyuXTNUsbXPZi59mCi_140aKWqo0QC5FV75tkgXBtsk_EzBc_o&usqp=CAU" alt="" class="img-fluid">
                                </div>
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore debitis qui libero quasi veniam ullam exercitationem provident labore eum ut. Laboriosam molestias aperiam modi, illo a consequuntur deserunt vero quibusdam?</p>
                                <a href="#" class="btn btn-primary">Buy now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="thumbnail">
                                    <img src="https://dummyimage.com/640x480/b8b8b8/fff/?text=" alt="" class="img-fluid">
                                </div>
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore debitis qui libero quasi veniam ullam exercitationem provident labore eum ut. Laboriosam molestias aperiam modi, illo a consequuntur deserunt vero quibusdam?</p>
                                <a href="#" class="btn btn-primary">Buy now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="thumbnail">
                                    <img src="https://dummyimage.com/640x480/b8b8b8/fff/?text=" alt="" class="img-fluid">
                                </div>
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore debitis qui libero quasi veniam ullam exercitationem provident labore eum ut. Laboriosam molestias aperiam modi, illo a consequuntur deserunt vero quibusdam?</p>
                                <a href="#" class="btn btn-primary">Buy now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="thumbnail">
                                    <img src="https://dummyimage.com/640x480/b8b8b8/fff/?text=" alt="" class="img-fluid">
                                </div>
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore debitis qui libero quasi veniam ullam exercitationem provident labore eum ut. Laboriosam molestias aperiam modi, illo a consequuntur deserunt vero quibusdam?</p>
                                <a href="#" class="btn btn-primary">Buy now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="thumbnail">
                                    <img src="https://dummyimage.com/640x480/b8b8b8/fff/?text=" alt="" class="img-fluid">
                                </div>
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore debitis qui libero quasi veniam ullam exercitationem provident labore eum ut. Laboriosam molestias aperiam modi, illo a consequuntur deserunt vero quibusdam?</p>
                                <a href="#" class="btn btn-primary">Buy now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="thumbnail">
                                    <img src="https://dummyimage.com/640x480/b8b8b8/fff/?text=" alt="" class="img-fluid">
                                </div>
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore debitis qui libero quasi veniam ullam exercitationem provident labore eum ut. Laboriosam molestias aperiam modi, illo a consequuntur deserunt vero quibusdam?</p>
                                <a href="#" class="btn btn-primary">Buy now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="thumbnail">
                                    <img src="https://dummyimage.com/640x480/b8b8b8/fff/?text=" alt="" class="img-fluid">
                                </div>
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore debitis qui libero quasi veniam ullam exercitationem provident labore eum ut. Laboriosam molestias aperiam modi, illo a consequuntur deserunt vero quibusdam?</p>
                                <a href="#" class="btn btn-primary">Buy now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="thumbnail">
                                    <img src="https://dummyimage.com/640x480/b8b8b8/fff/?text=" alt="" class="img-fluid">
                                </div>
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore debitis qui libero quasi veniam ullam exercitationem provident labore eum ut. Laboriosam molestias aperiam modi, illo a consequuntur deserunt vero quibusdam?</p>
                                <a href="#" class="btn btn-primary">Buy now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="thumbnail">
                                    <img src="https://dummyimage.com/640x480/b8b8b8/fff/?text=" alt="" class="img-fluid">
                                </div>
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore debitis qui libero quasi veniam ullam exercitationem provident labore eum ut. Laboriosam molestias aperiam modi, illo a consequuntur deserunt vero quibusdam?</p>
                                <a href="#" class="btn btn-primary">Buy now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            
            
        </div>
    </main>
    <div id="footer"></div>
    
    
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    
</body>
</html>