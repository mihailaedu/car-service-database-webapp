<?php include 'header.php'; ?>
<body>
	<div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-bg-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">Service Auto</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Service Auto Calificat </h1>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="img/carousel-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-bg2.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">Vopsitorie Auto</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Vopsitorie Auto Calificată</h1>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <img class="img-fluid" src="img/carousel-2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
	
	<div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Servicii calitative</h5>
                            <p>Lucram responsabil si suntem atenți la detalii</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex bg-light py-5 px-4">
                        <i class="fa fa-users-cog fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Experții nostri</h5>
                            <p>Cunoaște echipa noastra de specialiști auto</p>
                            <a class="text-secondary border-bottom" href="mecanici.php">Mai multe</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3">Aparatură modernă</h5>
                            <p>Service echipat cu aparatură de cea mai buna calitate</p>
                            <a class="text-secondary border-bottom" href="reparatii.php">Programează-te</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	
	<div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5">Descoperă serviciile noastre</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <i class="fa fa-car-side fa-2x me-3"></i>
                            <h4 class="m-0">Diagnoză</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <i class="fa fa-car fa-2x me-3"></i>
                            <h4 class="m-0">Vopsitorie</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <i class="fa fa-cog fa-2x me-3"></i>
                            <h4 class="m-0">Mecanică și Electrică</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <i class="fa fa-oil-can fa-2x me-3"></i>
                            <h4 class="m-0">Schimb Ulei</h4>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-diagn.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Diagnoză</h3>
                                    <p class="mb-4">Serviciul de diagnoză auto permite identificarea rapidă și precisă a eventualelor probleme ale mașinii, folosind echipamente computerizate moderne. Acesta ajută la detectarea defecțiunilor ascunse din sistemele electronice și mecanice, contribuind la prevenirea unor reparații costisitoare.</p>
									<p><i class="fa fa-check text-success me-3"></i>Diagnosticare defecțiuni autoturism</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Citire și ștergere erori</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Defecțiuni ale senzorilor electronici</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/vopsitorie-service.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Vopsitorie</h3>
                                    <p class="mb-4">Serviciul de vopsitorie auto oferă recondiționarea și refacerea aspectului caroseriei, folosind vopsele de calitate și tehnici profesionale. Este ideal pentru repararea zgârieturilor, loviturilor sau pentru schimbarea completă a culorii mașinii.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Decontaminare chimică si mecanică</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Vopsire electrostatic</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-2.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Mecanică și Electrică</h3>
                                    <p class="mb-4">Serviciul de mecanică și electrică auto asigură întreținerea și repararea componentelor esențiale ale mașinii, de la motor și frâne până la sistemele electrice și electronice. Intervențiile sunt realizate cu echipamente moderne pentru a garanta siguranța și performanța vehiculului.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Sisteme de direcție</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Sisteme de frânare</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Sisteme de transimie și motor</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-4.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">Schimb Ulei</h3>
                                    <p class="mb-4">Serviciul de schimb de ulei este esențial pentru funcționarea optimă a motorului, asigurând o lubrifiere corectă și prevenind uzura prematură a componentelor. Operațiunea se realizează rapid, folosind uleiuri și filtre de calitate, potrivite fiecărui tip de vehicul.</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Ulei de calitate</p>
                                    <p><i class="fa fa-check text-success me-3"></i>Folosit si la KFC</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	
	<div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5">Echipa Noastră</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/mec-1.jpg" alt="">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Istrate George</h5>
                            <small>Motor</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/mec-4.jpg" alt="">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Enache Alina</h5>
                            <small>Diagnoză</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Dumitrescu Paul</h5>
                            <small>Frâne și suspensii</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/mec-3.jpg" alt="">
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Stan Florin</h5>
                            <small>	Caroserie</small>
                        </div>
                    </div>
                </div>
            </div>
			<hr>
			<div>
				<a href="mecanici.php" class="btn btn-primary py-3 px-5 animated slideInDown">Mai mult<i class="fa fa-arrow-right ms-3"></i></a>
			</div>
        </div>
    </div>
	
	
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
	
</body>
<?php include 'footer.php'; ?>