<h3 class="box-title"><?=$subjudul?></h3>
<div style>Link backup files (google drive): <a href="https://drive.google.com/drive/folders/1ougLynJqXrTbKH0KDRkWM56kSnvOgvXS?usp=sharing" style=" display: inline-block;
  padding: 10px 20px;
  background-color: #3498db;
  color: #fff;
  border: none;
  border-radius: 5px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s;" target="_blank">Folder Backup</a></div>
    <div class="video-container">
        <div class="video-thumbnail" onclick="openPdf('<?=base_url()?>assets/dist/banksoal/NEROLUSIbanksoalPM.pdf')">
            <img src="<?=base_url()?>assets/dist/banksoal/coversoal/26.png" alt="banksoal PM">
        </div>
        <div class="video-thumbnail" onclick="openPdf('<?=base_url()?>assets/dist/banksoal/NEROLUSIbanksoalPBM.pdf')">
            <img src="<?=base_url()?>assets/dist/banksoal/coversoal/28.png" alt="banksoal PBM">
        </div>
        <div class="video-thumbnail" onclick="openPdf('<?=base_url()?>assets/dist/banksoal/NEROLUSIbanksoalPK.pdf')">
            <img src="<?=base_url()?>assets/dist/banksoal/coversoal/27.png" alt="banksoal PK">
        </div>
        <div class="video-thumbnail" onclick="openPdf('<?=base_url()?>assets/dist/banksoal/NEROLUSIbanksoalKPU.pdf')">
            <img src="<?=base_url()?>assets/dist/banksoal/coversoal/29.png" alt="banksoal KPU">
        </div>
        <div class="video-thumbnail" onclick="openPdf('<?=base_url()?>assets/dist/banksoal/NEROLUSIbanksoalPPU.pdf')">
            <img src="<?=base_url()?>assets/dist/banksoal/coversoal/30.png" alt="banksoal PPU">
        </div>
        <div class="video-thumbnail" onclick="openPdf('<?=base_url()?>assets/dist/banksoal/NEROLUSIbanksoalL.ENG.pdf')">
            <img src="<?=base_url()?>assets/dist/banksoal/coversoal/32.png" alt="banksoal L English">
        </div>
        <div class="video-thumbnail" onclick="openPdf('<?=base_url()?>assets/dist/banksoal/NEROLUSIbanksoalLBINDO.pdf')">
            <img src="<?=base_url()?>assets/dist/banksoal/coversoal/31.png" alt="banksoal L Bhs Indonesia">
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
        
    <script src="<?=base_url()?>assets/dist/js/app/ujian/buku.js"></script>