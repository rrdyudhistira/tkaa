<!DOCTYPE html>
<html><head><meta charset="utf-8"><title>Cek Hasil TKA</title>
<style>
body{font-family:Arial;background:#f4f6f9;padding:30px}
.box{max-width:700px;margin:auto;background:#fff;padding:20px;border-radius:10px}
input,button{padding:10px;width:100%;margin:5px 0}
button{background:#2563eb;color:#fff;border:none}
</style></head><body>
<div class="box">
<h2>Cek Hasil TKA 2026</h2>
<input id="nisn" placeholder="Masukkan NISN">
<button onclick="cari()">Cari</button>
<div id="hasil"></div>
</div>
<script>
function cari(){
fetch('cari.php?nisn='+document.getElementById('nisn').value)
.then(r=>r.json()).then(d=>{
if(!d){document.getElementById('hasil').innerHTML='Data tidak ditemukan';return;}
document.getElementById('hasil').innerHTML=`
<h3>${d.nama}</h3>
<p>NISN: ${d.nisn}</p>
<p>Nomor Peserta: ${d.nomor_peserta}</p>
<p>TTL: ${d.ttl}</p>
<p>Matematika: ${d.matematika}</p>
<p>Bahasa Indonesia: ${d.bahasa_indonesia}</p>`;
});
}
</script></body></html>