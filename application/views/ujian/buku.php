<h3 class="box-title"><?=$subjudul?></h3>
    <div class="video-container">
        <div class="video-thumbnail" onclick="openPdf('<?=base_url()?>assets/dist/buku/NEROLUSImateriKPU.pdf')">
            <img src="<?=base_url()?>assets/dist/buku/21.png" alt="E-book KPU">
        </div>
        <div class="video-thumbnail" onclick="openPdf('<?=base_url()?>assets/dist/buku/NEROLUSImateriPPU.pdf')">
            <img src="<?=base_url()?>assets/dist/buku/19.png" alt="E-book PPU">
        </div>
        <div class="video-thumbnail" onclick="openPdf('<?=base_url()?>assets/dist/buku/NEROLUSImateriPK.pdf')">
            <img src="<?=base_url()?>assets/dist/buku/20.png" alt="E-book PK">
        </div>
        <div class="video-thumbnail" onclick="openPdf('<?=base_url()?>assets/dist/buku/NEROLUSImateriL.ENG.pdf')">
            <img src="<?=base_url()?>assets/dist/buku/24.png" alt="E-book L English">
        </div>
        <div class="video-thumbnail" onclick="openPdf('<?=base_url()?>assets/dist/buku/NEROLUSImateriLBINDO.pdf')">
            <img src="<?=base_url()?>assets/dist/buku/23.png" alt="E-book L Bhs Indonesia">
        </div>
        <div class="video-thumbnail" onclick="openPdf('<?=base_url()?>assets/dist/buku/NEROLUSImateriPBM.pdf')">
            <img src="<?=base_url()?>assets/dist/buku/22.png" alt="E-book PBM">
        </div>
        <div class="video-thumbnail" onclick="openPdf('<?=base_url()?>assets/dist/buku/NEROLUSImateriPM.pdf')">
            <img src="<?=base_url()?>assets/dist/buku/25.png" alt="E-book PM">
        </div>
        <!-- Add more thumbnails as needed -->
    </div>
    <style>
                .video-container{
                    display: grid;
                    grid-template-columns: repeat(3, 1fr); /* Tiga kolom dengan lebar yang sama */
                    grid-gap: 10px; /* Jarak antara sel dalam grid */
                }
                .video-thumbnail {
                    padding: 10px; /* Contoh: Padding 10px */
                    cursor: pointer; /* Contoh: Ubah kursor saat diarahkan ke thumbnail */
                }

                .video-thumbnail img{
                    width: 100%;
                }
                
                @media (max-width: 850px) {
                    .video-container{
                    display: grid;
                    grid-template-columns: repeat(2, 1fr); /* Tiga kolom dengan lebar yang sama */
                    grid-gap: 5px; /* Jarak antara sel dalam grid */
                }
    </style>

    <div id="pdfModal" class="modal">
        <span class="close" onclick="closePdfModal()">&times;</span>
        <iframe id="pdfFrame" src="" frameborder="0"></iframe>
    </div>

<script src="<?=base_url()?>assets/dist/js/app/ujian/buku.js"></script>