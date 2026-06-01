let siswa = [];

fetch("data/siswa.json")
.then(response => response.json())
.then(data => {
    siswa = data;
});

function cariData(){

    const nisn = document
        .getElementById("nisn")
        .value
        .trim();

    const hasil = document.getElementById("hasil");

    const data = siswa.find(
        item => item.NISN == nisn
    );

    if(!data){

        hasil.innerHTML = `
        <div class="error">
            Data tidak ditemukan.
        </div>`;
        return;
    }

    const matematika =
        parseFloat(data.MATEMATIKA);

    const indonesia =
        parseFloat(data.BAHASA_INDONESIA);

    const rata =
        ((matematika + indonesia) / 2).toFixed(2);

    hasil.innerHTML = `
    <div class="result">

        <div class="row">
            <span class="label">NISN:</span>
            ${data.NISN}
        </div>

        <div class="row">
            <span class="label">Nama:</span>
            ${data.NAMA}
        </div>

        <div class="row">
            <span class="label">Nomor Peserta:</span>
            ${data.NOMOR_PESERTA}
        </div>

        <div class="row">
            <span class="label">Tempat Tanggal Lahir:</span>
            ${data.TTL}
        </div>

        <hr><br>

        <div class="row nilai">
            Matematika :
            ${data.MATEMATIKA}
        </div>

        <div class="row nilai">
            Bahasa Indonesia :
            ${data.BAHASA_INDONESIA}
        </div>

        <div class="row nilai">
            Rata-rata :
            ${rata}
        </div>

    </div>
    `;
}