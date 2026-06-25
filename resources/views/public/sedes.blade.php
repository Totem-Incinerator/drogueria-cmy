@extends("layouts.app")

@section("title", "Nuestras Sedes | Droguería Cabildo Mayor Yanaconas")

@push("styles")
    @vite(['resources/css/public/sedes.css'])
@endpush

@section("content")

    <div class="container-fluid contenedor-custom shadow-lg bg-white rounded-4 p-4 px-5" style="background-color: #f0f7f4;">
    <div class="container-fluid shadow-lg bg-white rounded-4 p-4 px-5">
        
        <h2 class="text-center mb-4 fw-bold" style="color: #1a3a32; border-bottom: 3px solid #74c69d; display: inline-block; width: 100%; padding-bottom: 15px;">
            Nuestros puntos de atención
        </h2>

        <div class="row g-4">
            <div class="col-lg-6">

                {{-- TABLA: visible solo en md+ --}}
                <div class="d-none d-md-block table-responsive h-100 rounded-3 border shadow-sm" style="height: 600px; overflow-y: auto;">
                    <table class="table table-hover align-middle mb-0" id="tabla-sedes">
                        <thead class="sticky-top" style="background-color: #1a3a32; color: white;">
                            <tr>
                                <th>SEDE</th>
                                <th>DIRECTOR</th>
                                <th>CELULAR</th>
                                <th>HORARIO</th>
                            </tr>
                        </thead>
                        <tbody style="cursor: pointer;">
                            <tr class="punto-fila active" data-img="img/popayan1.jpg" data-place="Calle 8 # 9-76, Popayan, Cauca">
                                <td class="fw-bold text-success">POPAYÁN PRINCIPAL</td>
                                <td>THAIRON GONZALES</td>
                                <td>3012654002</td>
                                <td>LUN-VIE (7AM-4PM)</td>
                            </tr>
                            <tr class="punto-fila" data-img="img/popayan2.jpg" data-place="Carrera 9 # 10N-94, Popayan, Cauca">
                                <td class="fw-bold text-success">POPAYÁN SEDE NORTE</td>
                                <td>NATHALY MAJIN</td>
                                <td>3012654002</td>
                                <td>LUN-VIE (7AM-4PM)</td>
                            </tr>
                            <tr class="punto-fila" data-img="img/san_sebastian.jpg" data-place="San Sebastian, Cauca, Colombia">
                                <td class="fw-bold text-success">SAN SEBASTIAN</td>
                                <td>LUCELLY ANACONA</td>
                                <td>3107589042</td>
                                <td>LUN-VIE (8AM-5PM)</td>
                            </tr>
                            <tr class="punto-fila" data-img="img/caquiona.jpg" data-place="Caquiona, Almaguer, Cauca">
                                <td class="fw-bold text-success">CAQUIONA</td>
                                <td>EDITH MORENO</td>
                                <td>3122420392</td>
                                <td>LUN-VIE (8AM-5PM)</td>
                            </tr>
                            <tr class="punto-fila" data-img="img/vega.jpg" data-place="La Vega, Cauca, Colombia">
                                <td class="fw-bold text-success">LA VEGA</td>
                                <td>YETZICA CASTILLO</td>
                                <td>3224139667</td>
                                <td>LUN-VIE (8AM-5PM)</td>
                            </tr>
                            <tr class="punto-fila" data-img="img/valencia.jpg" data-place="Valencia, San Sebastian, Cauca">
                                <td class="fw-bold text-success">VALENCIA</td>
                                <td>ORFELINA ANACONA</td>
                                <td>3224139667</td>
                                <td>LUN-VIE (8AM-5PM)</td>
                            </tr>
                            <tr class="punto-fila" data-img="img/ROSAS.jpg" data-place="Rosas, Cauca, Colombia">
                                <td class="fw-bold text-success">ROSAS</td>
                                <td>OVEIDA DIAZ PIAMBA</td>
                                <td>3224139667</td>
                                <td>LUN-VIE (8AM-5PM)</td>
                            </tr>
                            <tr class="punto-fila" data-img="img/guachicono.jpg" data-place="Guachicono, La Vega, Cauca">
                                <td class="fw-bold text-success">GUACHICONO</td>
                                <td>YACQUELINE CHICANGANA</td>
                                <td>3146590033</td>
                                <td>LUN-VIE (8AM-5PM)</td>
                            </tr>
                            <tr class="punto-fila" data-img="img/san_juan.jpg" data-place="San Juan, Bolivar, Cauca">
                                <td class="fw-bold text-success">SAN JUAN</td>
                                <td>YULIETH DIAZ PUJIMUY</td>
                                <td>3122241716</td>
                                <td>LUN-VIE (8AM-5PM)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                {{-- CARDS MÓVIL: visible solo en xs/sm --}}
                <div class="d-md-none sedes-cards-container">
                    <div class="sede-card punto-fila active" data-img="img/popayan1.jpg" data-place="Calle 8 # 9-76, Popayan, Cauca">
                        <div class="sede-card-header">
                            <span class="sede-card-nombre"><i class="fa-solid fa-location-dot me-1"></i>POPAYÁN PRINCIPAL</span>
                        </div>
                        <div class="sede-card-body">
                            <div class="sede-card-item">
                                <span class="sede-card-label"><i class="fa-solid fa-user me-1"></i> Director</span>
                                <span class="sede-card-value">THAIRON GONZALES</span>
                            </div>
                            <div class="sede-card-item">
                                <span class="sede-card-label"><i class="fa-solid fa-phone me-1"></i> Celular</span>
                                <span class="sede-card-value">
                                    <a href="tel:3012654002" class="sede-tel">3012654002</a>
                                </span>
                            </div>
                            <div class="sede-card-item">
                                <span class="sede-card-label"><i class="fa-solid fa-clock me-1"></i> Horario</span>
                                <span class="sede-card-value">LUN-VIE (7AM-4PM)</span>
                            </div>
                        </div>
                    </div>

                    <div class="sede-card punto-fila" data-img="img/popayan2.jpg" data-place="Carrera 9 # 10N-94, Popayan, Cauca">
                        <div class="sede-card-header">
                            <span class="sede-card-nombre"><i class="fa-solid fa-location-dot me-1"></i>POPAYÁN SEDE NORTE</span>
                        </div>
                        <div class="sede-card-body">
                            <div class="sede-card-item">
                                <span class="sede-card-label"><i class="fa-solid fa-user me-1"></i> Director</span>
                                <span class="sede-card-value">NATHALY MAJIN</span>
                            </div>
                            <div class="sede-card-item">
                                <span class="sede-card-label"><i class="fa-solid fa-phone me-1"></i> Celular</span>
                                <span class="sede-card-value">
                                    <a href="tel:3012654002" class="sede-tel">3012654002</a>
                                </span>
                            </div>
                            <div class="sede-card-item">
                                <span class="sede-card-label"><i class="fa-solid fa-clock me-1"></i> Horario</span>
                                <span class="sede-card-value">LUN-VIE (7AM-4PM)</span>
                            </div>
                        </div>
                    </div>

                    <div class="sede-card punto-fila" data-img="img/san_sebastian.jpg" data-place="San Sebastian, Cauca, Colombia">
                        <div class="sede-card-header">
                            <span class="sede-card-nombre"><i class="fa-solid fa-location-dot me-1"></i>SAN SEBASTIAN</span>
                        </div>
                        <div class="sede-card-body">
                            <div class="sede-card-item">
                                <span class="sede-card-label"><i class="fa-solid fa-user me-1"></i> Director</span>
                                <span class="sede-card-value">LUCELLY ANACONA</span>
                            </div>
                            <div class="sede-card-item">
                                <span class="sede-card-label"><i class="fa-solid fa-phone me-1"></i> Celular</span>
                                <span class="sede-card-value">
                                    <a href="tel:3107589042" class="sede-tel">3107589042</a>
                                </span>
                            </div>
                            <div class="sede-card-item">
                                <span class="sede-card-label"><i class="fa-solid fa-clock me-1"></i> Horario</span>
                                <span class="sede-card-value">LUN-VIE (8AM-5PM)</span>
                            </div>
                        </div>
                    </div>

                    <div class="sede-card punto-fila" data-img="img/caquiona.jpg" data-place="Caquiona, Almaguer, Cauca">
                        <div class="sede-card-header">
                            <span class="sede-card-nombre"><i class="fa-solid fa-location-dot me-1"></i>CAQUIONA</span>
                        </div>
                        <div class="sede-card-body">
                            <div class="sede-card-item">
                                <span class="sede-card-label"><i class="fa-solid fa-user me-1"></i> Director</span>
                                <span class="sede-card-value">EDITH MORENO</span>
                            </div>
                            <div class="sede-card-item">
                                <span class="sede-card-label"><i class="fa-solid fa-phone me-1"></i> Celular</span>
                                <span class="sede-card-value">
                                    <a href="tel:3122420392" class="sede-tel">3122420392</a>
                                </span>
                            </div>
                            <div class="sede-card-item">
                                <span class="sede-card-label"><i class="fa-solid fa-clock me-1"></i> Horario</span>
                                <span class="sede-card-value">LUN-VIE (8AM-5PM)</span>
                            </div>
                        </div>
                    </div>

                    <div class="sede-card punto-fila" data-img="img/vega.jpg" data-place="La Vega, Cauca, Colombia">
                        <div class="sede-card-header">
                            <span class="sede-card-nombre"><i class="fa-solid fa-location-dot me-1"></i>LA VEGA</span>
                        </div>
                        <div class="sede-card-body">
                            <div class="sede-card-item">
                                <span class="sede-card-label"><i class="fa-solid fa-user me-1"></i> Director</span>
                                <span class="sede-card-value">YETZICA CASTILLO</span>
                            </div>
                            <div class="sede-card-item">
                                <span class="sede-card-label"><i class="fa-solid fa-phone me-1"></i> Celular</span>
                                <span class="sede-card-value">
                                    <a href="tel:3224139667" class="sede-tel">3224139667</a>
                                </span>
                            </div>
                            <div class="sede-card-item">
                                <span class="sede-card-label"><i class="fa-solid fa-clock me-1"></i> Horario</span>
                                <span class="sede-card-value">LUN-VIE (8AM-5PM)</span>
                            </div>
                        </div>
                    </div>

                    <div class="sede-card punto-fila" data-img="img/valencia.jpg" data-place="Valencia, San Sebastian, Cauca">
                        <div class="sede-card-header">
                            <span class="sede-card-nombre"><i class="fa-solid fa-location-dot me-1"></i>VALENCIA</span>
                        </div>
                        <div class="sede-card-body">
                            <div class="sede-card-item">
                                <span class="sede-card-label"><i class="fa-solid fa-user me-1"></i> Director</span>
                                <span class="sede-card-value">ORFELINA ANACONA</span>
                            </div>
                            <div class="sede-card-item">
                                <span class="sede-card-label"><i class="fa-solid fa-phone me-1"></i> Celular</span>
                                <span class="sede-card-value">
                                    <a href="tel:3224139667" class="sede-tel">3224139667</a>
                                </span>
                            </div>
                            <div class="sede-card-item">
                                <span class="sede-card-label"><i class="fa-solid fa-clock me-1"></i> Horario</span>
                                <span class="sede-card-value">LUN-VIE (8AM-5PM)</span>
                            </div>
                        </div>
                    </div>

                    <div class="sede-card punto-fila" data-img="img/ROSAS.jpg" data-place="Rosas, Cauca, Colombia">
                        <div class="sede-card-header">
                            <span class="sede-card-nombre"><i class="fa-solid fa-location-dot me-1"></i>ROSAS</span>
                        </div>
                        <div class="sede-card-body">
                            <div class="sede-card-item">
                                <span class="sede-card-label"><i class="fa-solid fa-user me-1"></i> Director</span>
                                <span class="sede-card-value">OVEIDA DIAZ PIAMBA</span>
                            </div>
                            <div class="sede-card-item">
                                <span class="sede-card-label"><i class="fa-solid fa-phone me-1"></i> Celular</span>
                                <span class="sede-card-value">
                                    <a href="tel:3224139667" class="sede-tel">3224139667</a>
                                </span>
                            </div>
                            <div class="sede-card-item">
                                <span class="sede-card-label"><i class="fa-solid fa-clock me-1"></i> Horario</span>
                                <span class="sede-card-value">LUN-VIE (8AM-5PM)</span>
                            </div>
                        </div>
                    </div>

                    <div class="sede-card punto-fila" data-img="img/guachicono.jpg" data-place="Guachicono, La Vega, Cauca">
                        <div class="sede-card-header">
                            <span class="sede-card-nombre"><i class="fa-solid fa-location-dot me-1"></i>GUACHICONO</span>
                        </div>
                        <div class="sede-card-body">
                            <div class="sede-card-item">
                                <span class="sede-card-label"><i class="fa-solid fa-user me-1"></i> Director</span>
                                <span class="sede-card-value">YACQUELINE CHICANGANA</span>
                            </div>
                            <div class="sede-card-item">
                                <span class="sede-card-label"><i class="fa-solid fa-phone me-1"></i> Celular</span>
                                <span class="sede-card-value">
                                    <a href="tel:3146590033" class="sede-tel">3146590033</a>
                                </span>
                            </div>
                            <div class="sede-card-item">
                                <span class="sede-card-label"><i class="fa-solid fa-clock me-1"></i> Horario</span>
                                <span class="sede-card-value">LUN-VIE (8AM-5PM)</span>
                            </div>
                        </div>
                    </div>

                    <div class="sede-card punto-fila" data-img="img/san_juan.jpg" data-place="San Juan, Bolivar, Cauca">
                        <div class="sede-card-header">
                            <span class="sede-card-nombre"><i class="fa-solid fa-location-dot me-1"></i>SAN JUAN</span>
                        </div>
                        <div class="sede-card-body">
                            <div class="sede-card-item">
                                <span class="sede-card-label"><i class="fa-solid fa-user me-1"></i> Director</span>
                                <span class="sede-card-value">YULIETH DIAZ PUJIMUY</span>
                            </div>
                            <div class="sede-card-item">
                                <span class="sede-card-label"><i class="fa-solid fa-phone me-1"></i> Celular</span>
                                <span class="sede-card-value">
                                    <a href="tel:3122241716" class="sede-tel">3122241716</a>
                                </span>
                            </div>
                            <div class="sede-card-item">
                                <span class="sede-card-label"><i class="fa-solid fa-clock me-1"></i> Horario</span>
                                <span class="sede-card-value">LUN-VIE (8AM-5PM)</span>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- FIN CARDS MÓVIL --}}

            </div>

            <div class="col-lg-6 text-center">
                <div class="p-0 border rounded-4 bg-light shadow-sm h-100 d-flex flex-column align-items-center justify-content-center">
                    <img id="mapa-visor" src="img/mapa_sedes.png" class="img-fluid rounded-3 shadow w-100" style="transition: all 0.3s ease; height: 500px; object-fit: contain;">
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <div class="shadow-sm rounded-4 overflow-hidden border" style="height: 450px;">
                    <iframe 
                        id="google-maps-iframe"
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        src="https://maps.google.com/maps?q=Calle%208%20%23%209-76,%20Popayan&t=&z=16&ie=UTF8&iwloc=&output=embed">
                    </iframe>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@push("scripts")
    @vite(['resources/js/public/sedes.js'])
@endpush