document.addEventListener('DOMContentLoaded', function(){

      /* ── Toast helper ── */
  function showToast(msg) {
    document.getElementById('toastMsg').textContent = msg;
    const el = document.getElementById('toastPQRS');
    bootstrap.Toast.getOrCreateInstance(el, { delay: 4000 }).show();
  }

  /* ── Custom validators ── */
  const rules = {
    tipoDoc:  { el: () => document.getElementById('tipoDoc'),  ok: v => v !== '' },
    numDoc:   { el: () => document.getElementById('numDoc'),   ok: v => /^\d{5,20}$/.test(v.trim()) },
    nombres:  { el: () => document.getElementById('nombres'),  ok: v => v.trim().length >= 2 },
    apellidos:{ el: () => document.getElementById('apellidos'),ok: v => v.trim().length >= 2 },
    correo:   { el: () => document.getElementById('correo'),   ok: v => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v.trim()) },
    celular:  { el: () => document.getElementById('celular'),  ok: v => /^\d{10}$/.test(v.replace(/\s/g,'')) },
    asunto:   { el: () => document.getElementById('asunto'),   ok: v => v.trim().length >= 3 },
    tipoPQRS: { el: () => document.getElementById('tipoPQRS'), ok: v => v !== '' },
    detalles: { el: () => document.getElementById('detalles'), ok: v => v.trim().length >= 20 },
  };

  function validateField(key) {
    const { el, ok } = rules[key];
    const field = el();
    if (!field) return true;
    const valid = ok(field.value);
    field.classList.toggle('is-invalid', !valid);
    field.classList.toggle('is-valid', valid);
    return valid;
  }

  /* ── Live validation ── */
  Object.keys(rules).forEach(key => {
    const field = rules[key].el();
    if (!field) return;
    ['input','change','blur'].forEach(ev =>
      field.addEventListener(ev, () => validateField(key))
    );
  });

  /* ── PQRS submit ── */
  document.getElementById('pqrsForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const allValid = Object.keys(rules).map(k => validateField(k)).every(Boolean);
    if (!allValid) {
      this.querySelector('.is-invalid')?.scrollIntoView({ behavior: 'smooth', block: 'center' });
      return;
    }
    showToast('¡Solicitud radicada con éxito! Pronto recibirás una respuesta.');
    this.reset();
    document.getElementById('fileList').innerHTML = '';
    document.querySelectorAll('#pqrsForm .is-valid').forEach(el => el.classList.remove('is-valid'));
    // this.submit(); // Descomentar para submit real en Laravel
  });

  /* ── Consulta submit ── */
  document.getElementById('consultaForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const cRules = {
      cTipoDoc: { el: () => document.getElementById('cTipoDoc'), ok: v => v !== '' },
      cNumDoc:  { el: () => document.getElementById('cNumDoc'),  ok: v => /^\d{5,20}$/.test(v.trim()) },
    };
    const allValid = Object.entries(cRules).map(([, {el, ok}]) => {
      const f = el();
      const v = ok(f.value);
      f.classList.toggle('is-invalid', !v);
      f.classList.toggle('is-valid', v);
      return v;
    }).every(Boolean);
    if (!allValid) return;
    showToast('Buscando tu PQRS…');
    // Fetch / redirect aquí
  });

  /* ── Dropzone ── */
  const dz   = document.getElementById('dropzone');
  const fi   = document.getElementById('fileInput');
  const fl   = document.getElementById('fileList');
  let files  = [];

  dz.addEventListener('click', () => fi.click());
  dz.addEventListener('keydown', e => (e.key==='Enter'||e.key===' ') && fi.click());
  dz.addEventListener('dragover', e => { e.preventDefault(); dz.classList.add('dragover'); });
  dz.addEventListener('dragleave', () => dz.classList.remove('dragover'));
  dz.addEventListener('drop', e => {
    e.preventDefault();
    dz.classList.remove('dragover');
    addFiles([...e.dataTransfer.files]);
  });
  fi.addEventListener('change', () => { addFiles([...fi.files]); fi.value=''; });

  function addFiles(newFiles) {
    newFiles.forEach(f => {
      if (f.size > 10*1024*1024) { showToast(`"${f.name}" supera los 10 MB`); return; }
      if (!files.find(x => x.name===f.name)) files.push(f);
    });
    renderFiles();
  }
  function renderFiles() {
    fl.innerHTML = '';
    files.forEach((f, i) => {
      const chip = document.createElement('div');
      chip.className = 'file-chip';
      chip.innerHTML = `<i class="bi bi-file-earmark"></i> ${f.name} <button title="Quitar" aria-label="Quitar ${f.name}">×</button>`;
      chip.querySelector('button').addEventListener('click', () => { files.splice(i,1); renderFiles(); });
      fl.appendChild(chip);
    });
  }


})