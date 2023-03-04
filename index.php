<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Form Örneği</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+hkzQ32Kt8qqfMjfwTgvcWWZFYgXpXpIM/NW1e" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-5">Sosyal Medya Hizmetleri Fiyat Hesaplama Formu</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="post">
                    <div class="form-group">
                        <label for="category">Kategori:</label>
                        <select name="category" id="category" class="form-control">
                            <option value="">Seçiniz</option>
                            <option value="Instagram">Instagram</option>
                            <option value="Facebook">Facebook</option>
                            <option value="Twitter">Twitter</option>
                            <option value="Youtube">Youtube</option>
                            <option value="Tiktok">Tiktok</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="service">Hizmet:</label>
                        <select name="service" id="service" class="form-control">
                            <option value="">Seçiniz</option>
                            <option value="Takipçi">Takipçi</option>
                            <option value="Beğeni">Beğeni</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Miktar:</label>
                        <input type="number" name="quantity" id="quantity" class="form-control" min="1" required>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Hesapla</button>
                    </div>
                </form>
                    <?php
$categories = array('Instagram', 'Facebook', 'Twitter', 'Youtube', 'Tiktok');
$services = array('Takipçi', 'Beğeni');

$prices = array(
    'Instagram' => array(
        'Takipçi' => 10,
        'Beğeni' => 5
    ),
    'Facebook' => array(
        'Takipçi' => 8,
        'Beğeni' => 4
    ),
    'Twitter' => array(
        'Takipçi' => 6,
        'Beğeni' => 3
    ),
    'Youtube' => array(
        'Takipçi' => 15,
        'Beğeni' => 7
    ),
    'Tiktok' => array(
        'Takipçi' => 12,
        'Beğeni' => 6
    )
);

if (isset($_POST['category']) && isset($_POST['service']) && isset($_POST['quantity'])) {
    $category = $_POST['category'];
    $service = $_POST['service'];
    $quantity = $_POST['quantity'];
    
    $price = $prices[$category][$service];
    $total_price = $price * $quantity;
    
    $message = "Seçtiğiniz kategori: $category <br>";
    $message .= "Seçtiğiniz hizmet: $service <br>";
    $message .= "Miktar: $quantity <br>";
    $message .= "Toplam fiyat: $total_price TL <br>";
}
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="card-title">Sosyal Medya Hizmetleri</h4>
                </div>
                <div class="card-body">
                    <?php if (isset($message)) { ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $message; ?>
                        </div>
                    <?php } ?>
                    <form method="post">
                        <div class="form-group">
                            <label for="category">Kategori:</label>
                            <select class="form-control" name="category" id="category">
                                <?php foreach ($categories as $category) { ?>
                                    <option value="<?php echo $category; ?>"><?php echo $category; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="service">Hizmet:</label>
                            <select class="form-control" name="service" id="service">
                                <?php foreach ($services as $service) { ?>
                                    <option value="<?php echo $service; ?>"><?php echo $service; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Miktar:</label>
                            <input class="form-control" type="number" name="quantity" id="quantity" min="1">
                        </div>
                        <button class="btn btn-primary" type="submit">Hesapla</button>
                    </form>
                </div
</div>
</div>
</section>
<!-- End Pricing Section -->
<!-- Contact Section -->
<section id="contact" class="contact section-bg">
<div class="container">
<div class="section-title">
    <h2>Bize Ulaşın</h2>
    <p>Herhangi bir sorunuz veya öneriniz mi var? Aşağıdaki formu doldurarak bizimle iletişime geçebilirsiniz.</p>
</div>
<div class="row"><div class="col-lg-6">

    <div class="info-box mb-4">
        <i class="bx bx-map"></i>
        <h3>Adresimiz</h3>
        <p>İstanbul, Türkiye</p>
    </div>

    <div class="info-box mb-4">
        <i class="bx bx-envelope"></i>
        <h3>E-Posta Adresimiz</h3>
        <p>info@example.com</p>
    </div>

    <div class="info-box mb-4">
        <i class="bx bx-phone-call"></i>
        <h3>Telefon Numaramız</h3>
        <p>+1 5589 55488 55</p>
    </div>

</div>

<div class="col-lg-6">
    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
        <div class="form-row">
            <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Adınız" data-rule="minlen:4" data-msg="Lütfen en az 4 karakter girin." />
                <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="E-Posta Adresiniz" data-rule="email" data-msg="Lütfen geçerli bir e-posta adresi girin." />
                <div class="validate"></div>
            </div>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Konu" data-rule="minlen:4" data-msg="Lütfen en az 8 karakter girin." />
            <div class="validate"></div>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Lütfen bu alanı boş bırakmayın." placeholder="Mesajınız"></textarea>
            <div class="validate"></div>
        </div>
        <div class="mb-3">
            <div class="loading">Yükleniyor</div>
            <div class="error-message"></div>
            <div class="sent-message">Mesajınız gönderildi. Teşekkürler!</div>
        </div>
        <div class="text-center"><button class="btn btn-primary" type="submit">Gönder</button></div>
    </form>
</div>
</div>
</div>
</section>
<!-- End Contact Section -->
<!-- Footer Section -->
<footer class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <h4>Hakkımızda</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis risus porttitor, ornare elit vel, consectetur purus. Aliquam in risus eu tellus imperdiet pulvinar. Nam mattis sodales mauris, vitae ultricies lectus bibendum at.</p>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4>İletişim</h4>
                <p>Adres: Örnek Mahallesi, Örnek Caddesi No: 123, Örnek İlçesi/Şehri</p>
                <p>Telefon: +90 123 456 78 90</p>
                <p>E-posta: info@orneksite.com</p>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4>Sosyal Medya</h4>
                <ul class="list-unstyled">
                    <li><a href="#"><i class="fab fa-facebook fa-lg"></i> Facebook</a></li>
                    <li><a href="#"><i class="fab fa-twitter fa-lg"></i> Twitter</a></li>
                    <li><a href="#"><i class="fab fa-instagram fa-lg"></i> Instagram</a></li>
                    <li><a href="#"><i class="fab fa-linkedin fa-lg"></i> LinkedIn</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
        </div>
    </section>
    
    <!-- Footer Section -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>&copy; <?php echo date("Y"); ?> Social Media Services</p>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Bootstrap Javascript Dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
