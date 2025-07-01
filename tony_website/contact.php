<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ΕΠΙΚΟΙΝΩΝΙΑ</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/pages/contact.css">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/tony_website/images/viber_image_2025-06-05_12-46-38-393.ico">
</head>


<body>
    <!-- Header -->
    <!-- === NAVBAR CUSTOM === -->
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand mx-auto d-lg-none" href="/tony_website/index.html">
                <img src="/tony_website/images/BLACK TRANSPARENT.png" alt="Tony Rogliero" class="logo-icon mb-1">
                <div class="logo-text">
                    <h1 class="m-0 fs-5">Tony Rogliero</h1>
                </div>
            </a>
            
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Sinistra -->
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/tony_website/index.html">ΑΡΧΙΚΗ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tony_website/wedding.html">ΓΑΜΟΣ</a>
                </li>
            </ul>
            
            <!-- Centro (solo su desktop) -->
            <a class="navbar-brand d-none d-lg-block mx-auto" href="/tony_website/index.html">
                <img src="/tony_website/images/BLACK TRANSPARENT.png" alt="Tony Rogliero" class="logo-icon mb-1">
                <div class="logo-text">
                    <h1 class="m-0 fs-5">Tony Rogliero</h1>
                </div>
            </a>
            
            <!-- Destra -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/tony_website/baptism.html">ΒΑΠΤΙΣΗ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tony_website/contact.php">ΕΠΙΚΟΙΝΩΝΙΑ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Title -->
<section class="page-title">
    <div class="container">
        <h1 class="text-center">Επικοινωνία</h1>
        <p class="text-center lead">Είμαστε εδώ για να απαντήσουμε σε όλες σας τις ερωτήσεις</p>
    </div>
</section>

<!-- Contact Section -->
<section class="section">
    <div class="container">
        <div class="row">
            
            <!-- Colonna sinistra: descrizione + contatti -->
            <div class="col-md-4">
                <div class="contact-image d-flex justify-content-center">
                    <img src="images/contact_bouquet.jpg" alt="Επικοινωνία" class="img-fluid img-bouquet">
                </div>
                <h2 class="pt-5">Επικοινωνία</h2>
                <p class="mb-4">
                    Δώστε μας λίγες πληροφορίες για το πώς ονειρεύεστε την κάλυψη της μοναδικής ημέρας για εσάς. 
                    Είμαστε εδώ για να αφηγηθούμε όλη την ιστορία σας και να δημιουργήσουμε μαζί ένα όμορφο φωτογραφικό σύνολο αναμνήσεων.
                </p>
                
                <div class="contact-info mb-5">
                    <div class="d-flex align-items-center mb-3">
                        <div class="contact-icon me-3">
                            <i class="fas fa-map-marker-alt fa-2x"></i>
                        </div>
                        <div>
                            <h5 class="mb-0">Διεύθυνση</h5>
                            <p class="mb-0">Trapezountos 2 601 00 Δήμος Κατερίνης</p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center mb-3">
                        <div class="contact-icon me-3">
                            <i class="fas fa-envelope fa-2x"></i>
                        </div>
                        <div>
                            <h5 class="mb-0">Email</h5>
                            <p class="mb-0"><a href="mailto:rogliero@hotmail.com" class="text-dark">rogliero@hotmail.com</a></p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center mb-3">
                        <div class="contact-icon me-3">
                            <i class="fas fa-phone fa-2x"></i>
                        </div>
                        <div>
                            <h5 class="mb-0">Τηλέφωνο</h5>
                            <p class="mb-0">+30 693 794 4160</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Colonna destra: formulario -->
            <div class="col-md-8">
                <div class="contact-form-wrapper p-4 p-md-5">
                    <div class="text-center">
                        <h3 class="mb-4">Επικοινωνήστε μαζί μας</h3>
                    </div>
                    <form class="contact-form" id="contactForm">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Ονοματεπώνυμο" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Τηλέφωνο" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="date" class="form-control" id="eventDate" name="eventDate" placeholder="Ημερομηνία εκδήλωσης">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="location" name="location" placeholder="Τοποθεσία">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="venue" name="venue" placeholder="Χώρος Δεξίωσης">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <select class="form-select" id="service" name="service" required>
                                    <option value="" selected disabled>Είδος υπηρεσίας</option>
                                    <option value="photo">Φωτογράφηση</option>
                                    <option value="video">Βιντεογράφηση</option>
                                    <option value="both">Και τα δύο</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="eventType" name="eventType" placeholder="Είδος εκδήλωσης" required>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <input type="text" class="form-control" id="planner" name="planner" placeholder="Wedding Planner">
                        </div>
                        
                        <div class="mb-3">
                            <select class="form-select" id="referral" name="referral">
                                <option value="" selected disabled>Πώς μάθατε για εμάς</option>
                                <option value="instagram">Instagram</option>
                                <option value="facebook">Facebook</option>
                                <option value="google">Google</option>
                                <option value="recommendation">Από φίλο</option>
                                <option value="other">Άλλο</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Θα ήθελα να προσθέσω... (π.χ. Άλλοι Vendors, αριθμός καλεσμένων κτλ)"></textarea>
                        </div>
                        
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" id="privacy" name="privacy" required>
                            <label class="form-check-label" for="privacy">
                                Συμφωνώ με την επεξεργασία των προσωπικών μου δεδομένων *
                            </label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn-submit">Αποστολή</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Map Section -->
<section class="section bg-light">
    <div class="container">
        <h2 class="section-title">Πού βρισκόμαστε</h2>
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3044.153711666913!2d22.506729675703617!3d40.272335571463195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1358031d5804ed71%3A0x3528607ae91f11e8!2sTony%20Rogliero%20Photography%20and%20cinematography!5e0!3m2!1sit!2sgr!4v1751393160786!5m2!1sit!2sgr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4 mb-md-0">
                <img src="images/BLACK TRANSPARENT.png" alt="Tony - Shoot Your Events" class="footer-logo img-fluid mb-3" >
                <p>Αποτυπώνουμε τις πιο σημαντικές στιγμές της ζωής σας με μοναδικό και επαγγελματικό στυλ.</p>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
                <h4 class="mb-3">Γρήγοροι σύνδεσμοι</h4>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="index.html" class="text-dark">ΑΡΧΙΚΗ</a></li>
                    <li class="mb-2"><a href="wedding.html" class="text-dark">ΓΑΜΟΣ</a></li>
                    <li class="mb-2"><a href="baptism.html" class="text-dark">ΒΑΠΤΙΣΗ</a></li>
                    <li class="mb-2"><a href="contact.php" class="text-dark">ΕΠΙΚΟΙΝΩΝΙΑ</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4 class="mb-3">ΕΠΙΚΟΙΝΩΝΙΑ</h4>
                <p class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> Trapezountos 2, Katerini 601 00 </p>
                <p class="mb-2"><i class="fas fa-envelope me-2"></i> <a href="mailto:rogliero@hotmail.com" class="text-dark">rogliero@hotmail.com</a></p>
                <p class="mb-4"><i class="fas fa-phone me-2"></i> <a href="tel:+306937944160" class="text-dark">+30 693 794 4160</a></p>
                <div class="social-links">
                    <a href="https://www.facebook.com/profile.php?id=100012842913640" class="me-3" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/tonyrogliero?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="me-3" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <hr class="mt-4 mb-4 border-light">
        <div class="row">
            <div class="col-md-6 mb-3 mb-md-0">
                <p class="mb-0">&copy; 2025 Tony - Shoot Your Events. Tutti i diritti riservati.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <p class="mb-0">Designed with <i class="fas fa-heart text-danger"></i></p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap 5 JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS -->
<script src="js/main.js"></script>

<!-- Form Validation JS -->
<script src="/tony_website/js/contact.js"></script>              
</body>
</html>

