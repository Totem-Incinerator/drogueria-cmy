@extends("layouts.app")

@section("title", "Nosotros | Droguería Cabildo Mayor Yanaconas")

@push("styles")
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @vite(['resources/css/public/nosotros.css'])
@endpush

@section("content")

 <!-- ══════════ HERO ══════════ -->
    <section class="hero-section">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    {{-- <div class="badge-tag animate-in">Droguería · Cabildo Mayor Yanaconas</div> --}}
                    <h1 class="animate-in delay-1">Nuestro <span>equipo de</span><br>Dinamizadores</h1>
                    <div class="hero-divider animate-in delay-2"></div>
                    <p class="lead animate-in delay-3">
                        Conformado por dinamizadores altamente capacitados, comprometidos con la salud y el bienestar de nuestros comuneros, brindando un servicio responsable, oportuno y de calidad
                    </p>
                </div>
                <div class="col-lg-4 d-none d-lg-flex justify-content-end animate-in delay-4">
                    {{-- <div style="width:130px;height:130px;background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.15);border-radius:50%;display:flex;align-items:center;justify-content:center;">
                        <i class="bi bi-building-check" style="font-size:3.5rem;color:rgba(255,255,255,.6);"></i>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- ══════════ NAV TABS ══════════ -->
    <nav class="nav-tabs-custom">
        <div class="container">
            <div class="d-flex overflow-auto">
                <a class="nav-link active" href="#valores"><i class="bi bi-stars"></i>Valores</a>
                <a class="nav-link" href="#derechos"><i class="bi bi-shield-check"></i>Derechos</a>
                <a class="nav-link" href="#deberes"><i class="bi bi-person-check"></i>Deberes</a>
                <a class="nav-link" href="#enfoque"><i class="bi bi-globe-americas"></i>Enfoque Intercultural</a>
                <a class="nav-link" href="#calidad"><i class="bi bi-award"></i>Política de Calidad</a>
            </div>
        </div>
    </nav>


    <!-- ══════════ VALORES CORPORATIVOS ══════════ -->
    <section id="valores" class="content-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <p class="section-eyebrow">Identidad institucional</p>
                    <h2 class="section-title">Valores Corporativos</h2>
                    <div class="section-line"></div>
                </div>
            </div>
            <div class="row g-4">

                <div class="col-sm-6 col-lg-4 animate-in">
                    <div class="valor-card">
                        <div class="icon-wrap"><i class="bi bi-people-fill"></i></div>
                        <h5>Respeto y Valoración Cultural</h5>
                        <p>Reconocemos y honramos la diversidad de usos y costumbres de la comunidad indígena y demás afiliados, adaptando nuestros servicios a sus particularidades.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 animate-in delay-1">
                    <div class="valor-card img-anime-1">
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 animate-in delay-2">
                    <div class="valor-card">
                        <div class="icon-wrap"><i class="bi bi-patch-check-fill"></i></div>
                        <h5>Calidad y Profesionalismo</h5>
                        <p>Cumplimos con los más altos estándares de calidad en nuestros productos y servicios, operando dentro del marco legal colombiano con un equipo competente y ético.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 animate-in delay-3">
                    <div class="valor-card">
                        <div class="icon-wrap"><i class="bi bi-emoji-smile-fill"></i></div>
                        <h5>Calidez Humana</h5>
                        <p>Brindamos una atención cercana, amable y empática, generando un ambiente de confianza y respeto con nuestros usuarios.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 animate-in delay-4">
                    <div class="valor-card img-anime-2">
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 animate-in delay-4">
                    <div class="valor-card">
                        <div class="icon-wrap"><i class="bi bi-eye-fill"></i></div>
                        <h5>Integridad</h5>
                        <p>Actuamos con honestidad, transparencia y responsabilidad en todas nuestras operaciones y relaciones.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 animate-in delay-1">
                    <div class="valor-card">
                        <div class="icon-wrap"><i class="bi bi-heart-pulse-fill"></i></div>
                        <h5>Compromiso Social</h5>
                        <p>Estamos dedicados al bienestar de la comunidad, ofreciendo un servicio accesible, equitativo y sensible a sus necesidades de salud.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 animate-in delay-5">
                    <div class="valor-card img-anime-3">
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4 animate-in delay-5">
                    <div class="valor-card">
                        <div class="icon-wrap"><i class="bi bi-chat-dots-fill"></i></div>
                        <h5>Comunicación</h5>
                        <p>Valoramos sus opiniones y sugerencias para la mejora continua de nuestro servicio y la comunidad.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ══════════ DERECHOS ══════════ -->
    <section id="derechos" class="content-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <p class="section-eyebrow">Marco de atención</p>
                    <h2 class="section-title">Derechos de los Usuarios</h2>
                    <div class="section-line"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="dd-panel animate-in">
                        <div class="dd-panel-header derechos">
                            <div class="header-icon"><i class="bi bi-shield-fill-check"></i></div>
                            <div>
                                <h3>Sus Derechos</h3>
                                <small>Garantizados por la Constitución y el Derecho Propio Yanacona</small>
                            </div>
                        </div>
                        <ul class="dd-list">
                            <li>
                                <div class="bullet derechos-bullet"><i class="bi bi-check2"></i></div>
                                <div class="item-content">
                                    <strong>Atención digna y sin discriminación</strong>
                                    <span>Recibir un trato respetuoso, conforme a la Constitución Política de Colombia y el enfoque diferencial indígena.</span>
                                </div>
                            </li>
                            <li>
                                <div class="bullet derechos-bullet"><i class="bi bi-check2"></i></div>
                                <div class="item-content">
                                    <strong>Reconocimiento de la identidad cultural</strong>
                                    <span>Ser atendido respetando la cosmovisión, usos, costumbres y el Derecho Propio del Pueblo Yanacona.</span>
                                </div>
                            </li>
                            <li>
                                <div class="bullet derechos-bullet"><i class="bi bi-check2"></i></div>
                                <div class="item-content">
                                    <strong>Acceso a servicios de salud intercultural (SISPI)</strong>
                                    <span>Recibir atención articulada entre medicina occidental y medicina propia, según los lineamientos del SISPI.</span>
                                </div>
                            </li>
                            <li>
                                <div class="bullet derechos-bullet"><i class="bi bi-check2"></i></div>
                                <div class="item-content">
                                    <strong>Información clara y oportuna</strong>
                                    <span>Conocer el uso adecuado, dosis, contraindicaciones y efectos de los medicamentos dispensados.</span>
                                </div>
                            </li>
                            <li>
                                <div class="bullet derechos-bullet"><i class="bi bi-check2"></i></div>
                                <div class="item-content">
                                    <strong>Calidad y seguridad en los medicamentos</strong>
                                    <span>Recibir medicamentos autorizados, en buen estado y correctamente dispensados, conforme a la normativa sanitaria (INVIMA y Ministerio de Salud).</span>
                                </div>
                            </li>
                            <li>
                                <div class="bullet derechos-bullet"><i class="bi bi-check2"></i></div>
                                <div class="item-content">
                                    <strong>Confidencialidad de la información</strong>
                                    <span>Protección de sus datos personales y de salud (Ley 1581 de 2012 y principios comunitarios).</span>
                                </div>
                            </li>
                            <li>
                                <div class="bullet derechos-bullet"><i class="bi bi-check2"></i></div>
                                <div class="item-content">
                                    <strong>Participación comunitaria</strong>
                                    <span>Ser escuchado y participar en los procesos de mejora del servicio a través del Cabildo.</span>
                                </div>
                            </li>
                            <li>
                                <div class="bullet derechos-bullet"><i class="bi bi-check2"></i></div>
                                <div class="item-content">
                                    <strong>Prioridad como miembro de la comunidad indígena</strong>
                                    <span>En el marco de la autonomía y el gobierno propio Yanacona.</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ══════════ DEBERES ══════════ -->
    <section id="deberes" class="content-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <p class="section-eyebrow">Responsabilidad compartida</p>
                    <h2 class="section-title">Deberes de los Usuarios</h2>
                    <div class="section-line"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="dd-panel animate-in">
                        <div class="dd-panel-header deberes">
                            <div class="header-icon"><i class="bi bi-person-fill-check"></i></div>
                            <div>
                                <h3>Sus Deberes</h3>
                                <small>Para fortalecer la comunidad y el uso responsable del servicio</small>
                            </div>
                        </div>
                        <ul class="dd-list">
                            <li>
                                <div class="bullet deberes-bullet"><i class="bi bi-arrow-right"></i></div>
                                <div class="item-content">
                                    <strong>Respetar el Gobierno Propio</strong>
                                    <span>Acatar normas, decisiones y orientaciones del Cabildo Mayor Yanacona.</span>
                                </div>
                            </li>
                            <li>
                                <div class="bullet deberes-bullet"><i class="bi bi-arrow-right"></i></div>
                                <div class="item-content">
                                    <strong>Uso responsable de los medicamentos</strong>
                                    <span>Seguir indicaciones del personal de salud y evitar la automedicación.</span>
                                </div>
                            </li>
                            <li>
                                <div class="bullet deberes-bullet"><i class="bi bi-arrow-right"></i></div>
                                <div class="item-content">
                                    <strong>Cuidado de los recursos comunitarios</strong>
                                    <span>Hacer uso adecuado de los medicamentos y servicios disponibles.</span>
                                </div>
                            </li>
                            <li>
                                <div class="bullet deberes-bullet"><i class="bi bi-arrow-right"></i></div>
                                <div class="item-content">
                                    <strong>Brindar información veraz</strong>
                                    <span>Informar correctamente sobre su estado de salud al personal de la droguería.</span>
                                </div>
                            </li>
                            <li>
                                <div class="bullet deberes-bullet"><i class="bi bi-arrow-right"></i></div>
                                <div class="item-content">
                                    <strong>Respeto al personal de la droguería</strong>
                                    <span>Mantener un trato digno y respetuoso con todo el equipo de trabajo.</span>
                                </div>
                            </li>
                            <li>
                                <div class="bullet deberes-bullet"><i class="bi bi-arrow-right"></i></div>
                                <div class="item-content">
                                    <strong>Cumplir normas internas</strong>
                                    <span>Respetar horarios, turnos y procedimientos establecidos por el establecimiento.</span>
                                </div>
                            </li>
                            <li>
                                <div class="bullet deberes-bullet"><i class="bi bi-arrow-right"></i></div>
                                <div class="item-content">
                                    <strong>Fortalecer la medicina propia</strong>
                                    <span>Valorar y respetar los saberes ancestrales y prácticas tradicionales del Pueblo Yanacona.</span>
                                </div>
                            </li>
                            <li>
                                <div class="bullet deberes-bullet"><i class="bi bi-arrow-right"></i></div>
                                <div class="item-content">
                                    <strong>Cuidado de la salud colectiva</strong>
                                    <span>Adoptar prácticas de prevención y armonía con la comunidad y el territorio.</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ══════════ ENFOQUE INTERCULTURAL ══════════ -->
    <section id="enfoque" class="content-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <p class="section-eyebrow">Identidad y autonomía</p>
                    <h2 class="section-title">Enfoque Propio e Intercultural</h2>
                    <div class="section-line"></div>
                </div>
            </div>
            <div class="row g-4 align-items-stretch">

                <!-- Marco normativo -->
                <div class="col-lg-6 animate-in">
                    <div class="enfoque-highlight h-100">
                        <p class="mb-3" style="color:var(--dorado-claro);font-size:.75rem;font-weight:700;letter-spacing:.12em;text-transform:uppercase;">Marco Normativo</p>
                        <h4 style="font-family:'Playfair Display',serif;color:var(--blanco);font-size:1.2rem;margin-bottom:24px;">Este establecimiento se rige por:</h4>

                        <div class="enfoque-marco-item">
                            <i class="bi bi-journal-bookmark-fill"></i>
                            <span><strong>Constitución Política de Colombia</strong> – Art. 7, 49 y 330</span>
                        </div>
                        <div class="enfoque-marco-item">
                            <i class="bi bi-heart-pulse-fill"></i>
                            <span><strong>SISPI</strong> – Sistema Indígena de Salud Propio e Intercultural</span>
                        </div>
                        <div class="enfoque-marco-item">
                            <i class="bi bi-tree-fill"></i>
                            <span><strong>Ley de Origen, Derecho Mayor y Derecho Propio</strong> Yanacona</span>
                        </div>
                        <div class="enfoque-marco-item">
                            <i class="bi bi-file-earmark-medical-fill"></i>
                            <span><strong>Normativa sanitaria nacional</strong> – Ministerio de Salud e INVIMA</span>
                        </div>

                        <div class="mt-4">
                            <blockquote>"La salud es armonía con el territorio, el espíritu y la comunidad."</blockquote>
                        </div>
                    </div>
                </div>

                <!-- Pilares -->
                <div class="col-lg-6 animate-in delay-2">
                    <div style="background:var(--blanco);border:1px solid var(--verde-borde);border-radius:16px;padding:36px;height:100%;">
                        <p class="section-eyebrow mb-2">Visión integral</p>
                        <h4 style="font-family:'Playfair Display',serif;color:var(--verde-oscuro);font-size:1.2rem;margin-bottom:8px;">Salud como equilibrio</h4>
                        <p style="font-size:.9rem;color:var(--texto-medio);margin-bottom:28px;line-height:1.7;">
                            Promovemos la salud como equilibrio entre persona, comunidad, naturaleza y espiritualidad, integrando los saberes propios del Pueblo Yanacona con la medicina occidental.
                        </p>
                        <div class="d-flex flex-wrap">
                            <span class="pilar-badge" style="background:var(--verde-suave);border-color:var(--verde-borde);color:var(--verde-oscuro);">
                                <i class="bi bi-person-heart" style="color:var(--verde-medio);"></i> Persona
                            </span>
                            <span class="pilar-badge" style="background:var(--verde-suave);border-color:var(--verde-borde);color:var(--verde-oscuro);">
                                <i class="bi bi-people-fill" style="color:var(--verde-medio);"></i> Comunidad
                            </span>
                            <span class="pilar-badge" style="background:var(--verde-suave);border-color:var(--verde-borde);color:var(--verde-oscuro);">
                                <i class="bi bi-tree" style="color:var(--verde-medio);"></i> Naturaleza
                            </span>
                            <span class="pilar-badge" style="background:var(--verde-suave);border-color:var(--verde-borde);color:var(--verde-oscuro);">
                                <i class="bi bi-stars" style="color:var(--dorado);"></i> Espiritualidad
                            </span>
                        </div>

                        <hr style="border-color:var(--verde-borde);margin:28px 0;">

                        <div class="row g-3 text-center">
                            <div class="col-4">
                                <div style="background:var(--verde-suave);border-radius:12px;padding:16px 8px;">
                                    <i class="bi bi-globe-americas" style="font-size:1.6rem;color:var(--verde-oscuro);display:block;margin-bottom:6px;"></i>
                                    <small style="font-size:.75rem;font-weight:600;color:var(--verde-oscuro);">Intercultural</small>
                                </div>
                            </div>
                            <div class="col-4">
                                <div style="background:var(--verde-suave);border-radius:12px;padding:16px 8px;">
                                    <i class="bi bi-shield-fill" style="font-size:1.6rem;color:var(--verde-oscuro);display:block;margin-bottom:6px;"></i>
                                    <small style="font-size:.75rem;font-weight:600;color:var(--verde-oscuro);">Autónomo</small>
                                </div>
                            </div>
                            <div class="col-4">
                                <div style="background:var(--verde-suave);border-radius:12px;padding:16px 8px;">
                                    <i class="bi bi-heart-fill" style="font-size:1.6rem;color:var(--verde-oscuro);display:block;margin-bottom:6px;"></i>
                                    <small style="font-size:.75rem;font-weight:600;color:var(--verde-oscuro);">Comunitario</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ══════════ POLÍTICA DE CALIDAD ══════════ -->
    <section id="calidad" class="content-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <p class="section-eyebrow">Compromiso institucional</p>
                    <h2 class="section-title">Política de Calidad</h2>
                    <div class="section-line"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 animate-in">
                    <div class="calidad-card">
                        <div class="calidad-card-header">
                            <div class="d-flex align-items-center gap-3">
                                <i class="bi bi-award-fill" style="font-size:2rem;color:var(--dorado-claro);"></i>
                                <div>
                                    <h3>Droguería Cabildo Mayor Yanaconas</h3>
                                    <small>Departamento del Cauca · Colombia</small>
                                </div>
                            </div>
                        </div>
                        <div class="calidad-body">
                            <p>
                                En <strong style="color:var(--verde-oscuro);">DROGUERÍA CABILDO MAYOR YANACONAS</strong> nos comprometemos con la distribución, dispensación y comercialización de medicamentos, dispositivos médicos e insumos, garantizando la calidad, seguridad y trazabilidad de nuestros productos en el departamento del Cauca.
                            </p>
                            <p>
                                Nuestra gestión se orienta al cumplimiento de los objetivos organizacionales mediante la capacitación continua de nuestro talento humano, la adecuada administración, control y ejecución de los procesos, y la implementación de la normatividad vigente exigida por las autoridades competentes.
                            </p>
                            <p>
                                Asimismo, promovemos el mejoramiento continuo de nuestros procesos y el fortalecimiento de nuestras instalaciones físicas en cada punto de dispensación, con el fin de asegurar un servicio oportuno, seguro y confiable para nuestros comuneros.
                            </p>
                            <p>
                                En <strong style="color:var(--verde-oscuro);">DROGUERÍA CABILDO MAYOR YANACONAS</strong> reafirmamos nuestro compromiso con la calidad, la transparencia y la confianza, contribuyendo al fortalecimiento del sistema de salud en el departamento del Cauca.
                            </p>

                            <hr style="border-color:var(--verde-borde);margin:24px 0;">

                            <p class="mb-2" style="font-size:.82rem;font-weight:700;color:var(--texto-medio);text-transform:uppercase;letter-spacing:.1em;">Bajo la vigilancia de:</p>
                            <div>
                                <span class="calidad-entidad"><i class="bi bi-building-fill"></i> Secretaría de Salud</span>
                                <span class="calidad-entidad"><i class="bi bi-file-earmark-medical-fill"></i> INVIMA</span>
                                <span class="calidad-entidad"><i class="bi bi-shield-fill-check"></i> SUPERSALUD</span>
                                <span class="calidad-entidad"><i class="bi bi-hospital-fill"></i> Min. Salud y Protección Social</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ══════════ FOOTER STRIP ══════════ -->
    <script>
        // Smooth scroll for nav tabs
        document.querySelectorAll('.nav-tabs-custom a[href^="#"]').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offset = 62;
                    const top = target.getBoundingClientRect().top + window.scrollY - offset;
                    window.scrollTo({ top, behavior: 'smooth' });
                }
            });
        });

        // Active nav tab on scroll
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-tabs-custom .nav-link');

        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(sec => {
                if (window.scrollY >= sec.offsetTop - 100) current = sec.getAttribute('id');
            });
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) link.classList.add('active');
            });
        });

        // Intersection Observer for animate-in
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.animate-in').forEach(el => {
            el.style.animationPlayState = 'paused';
            observer.observe(el);
        });
    </script>
@endsection
