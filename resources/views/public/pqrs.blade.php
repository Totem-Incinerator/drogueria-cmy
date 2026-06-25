@extends("layouts.app")

@section("title", "PQRS | Droguería Cabildo Mayor Yanaconas")

@push("styles")
    @vite(['resources/css/public/pqrs.css'])
@endpush

@section("content")


    <!-- ── Page Header ── -->
<header class="page-header">
  <h1>Envía tu <span>PQRS</span></h1>
  <p class="mb-0 mt-2">Droguería Cabildo Mayor · Pueblo Yanacona · Macizo Colombiano</p>
</header>

<!-- ── Main ── -->
<main class="container py-4 py-md-5" style="max-width:1100px">

  <!-- ── Radicado Card ── -->
  <div class="card mb-4">
    <div class="row g-0">

      <!-- Sidebar -->
      <div class="col-md-3">
        <div class="sidebar-pqrs h-100">
          <div class="sidebar-icon"><i class="bi bi-envelope-paper"></i></div>
          <div>
            <h2><em>PQRS</em><br>Cabildo Mayor</h2>
            <p class="mt-2">Droguería <strong style="color:var(--gold)">Cabildo Mayor</strong> siempre disponible para nuestra comunidad.</p>
          </div>
          <div class="sidebar-badge">
            <span class="dot"></span> Servicio activo
          </div>
        </div>
      </div>

      <!-- Form panel -->
      <div class="col-md-9">
        <div class="form-panel">
          <h3 class="mb-4">Radicar Solicitud</h3>

          <form id="pqrsForm" novalidate>

            <!-- Identificación -->
            <div class="section-label mb-3">
              <i class="bi bi-person-badge"></i>
              Datos de Identificación y Contacto
            </div>

            <div class="row g-3 mb-3">
              <div class="col-sm-6">
                <label class="form-label" for="tipoDoc">Tipo de Documento <span class="req">*</span></label>
                <select class="form-select" id="tipoDoc" name="tipoDoc" required>
                  <option value="">Seleccionar…</option>
                  <option>Cédula de Ciudadanía</option>
                  <option>Cédula de Extranjería</option>
                  <option>Pasaporte</option>
                  <option>Tarjeta de Identidad</option>
                  <option>NIT</option>
                </select>
                <div class="invalid-feedback">Seleccione un tipo de documento.</div>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="numDoc">Número de Identificación <span class="req">*</span></label>
                <input type="text" class="form-control" id="numDoc" name="numDoc" placeholder="Ej. 1007654321" required maxlength="20" />
                <div class="invalid-feedback">Ingrese un número de identificación válido (solo dígitos).</div>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="nombres">Nombres <span class="req">*</span></label>
                <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Sus nombres" required />
                <div class="invalid-feedback">Ingrese sus nombres.</div>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="apellidos">Apellidos <span class="req">*</span></label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Sus apellidos" required />
                <div class="invalid-feedback">Ingrese sus apellidos.</div>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="correo">Correo Electrónico <span class="req">*</span></label>
                <input type="email" class="form-control" id="correo" name="correo" placeholder="correo@ejemplo.com" required />
                <div class="invalid-feedback">Ingrese un correo electrónico válido.</div>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="celular">Número de Celular <span class="req">*</span></label>
                <input type="tel" class="form-control" id="celular" name="celular" placeholder="300 123 4567" required maxlength="15" />
                <div class="invalid-feedback">Ingrese un número de celular de 10 dígitos.</div>
              </div>
            </div>

            <!-- Detalles PQRS -->
            <div class="section-label mb-3 mt-4">
              <i class="bi bi-file-earmark-text"></i>
              Detalles de la PQRS
            </div>

            <div class="row g-3 mb-3">
              <div class="col-sm-6">
                <label class="form-label" for="asunto">Asunto <span class="req">*</span></label>
                <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Resumen breve de la solicitud" required />
                <div class="invalid-feedback">Ingrese un asunto (mínimo 3 caracteres).</div>
              </div>
              <div class="col-sm-6">
                <label class="form-label" for="tipoPQRS">Tipo de PQRS <span class="req">*</span></label>
                <select class="form-select" id="tipoPQRS" name="tipoPQRS" required>
                  <option value="">Seleccionar…</option>
                  <option>Petición</option>
                  <option>Queja</option>
                  <option>Reclamo</option>
                  <option>Sugerencia</option>
                </select>
                <div class="invalid-feedback">Seleccione el tipo de PQRS.</div>
              </div>
              <div class="col-12">
                <label class="form-label" for="detalles">Descripción <span class="req">*</span></label>
                <textarea class="form-control" id="detalles" name="detalles" placeholder="Escribe los detalles de la solicitud aquí…" required minlength="20"></textarea>
                <div class="invalid-feedback">Describa su solicitud (mínimo 20 caracteres).</div>
              </div>
            </div>

            <!-- Adjuntos -->
            <div class="mb-3">
              <label class="form-label">Adjuntos</label>
              <div class="dropzone" id="dropzone" role="button" tabindex="0" aria-label="Zona de arrastre de archivos">
                <i class="bi bi-cloud-arrow-up d-block mb-1"></i>
                <p>Arrastre archivos aquí o <strong style="color:var(--green-mid)">haga clic para seleccionar</strong></p>
                <small>PDF, imágenes, Word — máx. 10 MB por archivo</small>
                <input type="file" id="fileInput" class="d-none" multiple accept=".pdf,.jpg,.jpeg,.png,.doc,.docx" />
              </div>
              <div class="d-flex flex-wrap gap-2 mt-2" id="fileList"></div>
            </div>

            <button type="submit" class="btn btn-pqrs">
              <i class="bi bi-send me-2"></i>Enviar Solicitud
            </button>

          </form>
        </div>
      </div>

    </div>
  </div>

  <!-- ── Consulta Card ── -->
  {{-- <div class="card">
    <div class="card-body p-4">
      <div class="row g-4 align-items-center">

        <div class="col-auto d-none d-sm-block">
          <div class="consulta-illustration">
            <i class="bi bi-search-heart"></i>
          </div>
        </div>

        <div class="col">
          <h2 class="consulta-card">¿Ya enviaste una PQRS?</h2>
          <p class="text-muted mb-3" style="font-size:.88rem">Consulta el estado de tu solicitud ingresando tu documento de identidad.</p>

          <form id="consultaForm" novalidate>
            <div class="row g-3 align-items-end">
              <div class="col-sm-4">
                <label class="form-label" for="cTipoDoc">Tipo de Documento <span class="req">*</span></label>
                <select class="form-select" id="cTipoDoc" name="cTipoDoc" required>
                  <option value="">Seleccionar…</option>
                  <option>Cédula de Ciudadanía</option>
                  <option>Cédula de Extranjería</option>
                  <option>Pasaporte</option>
                  <option>Tarjeta de Identidad</option>
                  <option>NIT</option>
                </select>
                <div class="invalid-feedback">Seleccione un tipo de documento.</div>
              </div>
              <div class="col-sm-4">
                <label class="form-label" for="cNumDoc">Número de Identificación <span class="req">*</span></label>
                <input type="text" class="form-control" id="cNumDoc" name="cNumDoc" placeholder="Ej. 1007654321" required maxlength="20" />
                <div class="invalid-feedback">Ingrese su número de identificación.</div>
              </div>
              <div class="col-sm-auto">
                <button type="submit" class="btn btn-consultar w-100">
                  <i class="bi bi-search me-1"></i> Consultar
                </button>
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div> --}}

</main>

<!-- ── Toast ── -->
<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="toastPQRS" class="toast toast-pqrs align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body d-flex align-items-center gap-2">
        <i class="bi bi-check-circle-fill" style="color:var(--green-light);font-size:1.1rem"></i>
        <span id="toastMsg" style="color: #fff">¡Solicitud enviada con éxito!</span>
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Cerrar"></button>
    </div>
  </div>
</div>
@endsection

@push("scripts")
    @vite(['resources/js/public/pqrs.js'])
@endpush