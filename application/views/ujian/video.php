<h3 class="box-title"><?=$subjudul?></h3>
<div style>Link backup video (google drive): <a href="https://drive.google.com/drive/folders/1vZ6PbT1v6K3yrKDveVGFO1lkjpxegquF?usp=sharing" style=" display: inline-block;
  padding: 10px 20px;
  background-color: #3498db;
  color: #fff;
  border: none;
  border-radius: 5px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s;" target="_blank">Video Backup</a></div>
<div class="video-container">
        <div class="video-thumbnail" onclick="openModal('<?=base_url()?>assets/dist/video/VideoPromosi.mp4')">
            <img src="<?=base_url()?>assets/dist/img/Thumbnail.png" alt="Video 1">
        </div>
        <div class="video-thumbnail" onclick="openModal('<?=base_url()?>assets/dist/video/vidPK1STATISTIKA.mp4')">
            <img src="<?=base_url()?>assets/dist/img/thumbnailpk1.png" alt="Video 2">
        </div>
        <div class="video-thumbnail" onclick="openModal('<?=base_url()?>assets/dist/video/vidPK2FUNGSI.mp4')">
            <img src="<?=base_url()?>assets/dist/img/thumbnailpk2.png" alt="Video 3">
        </div>
        <div class="video-thumbnail" onclick="openModal('<?=base_url()?>assets/dist/video/vidKPU1INDUKTIF.mp4')">
            <img src="<?=base_url()?>assets/dist/img/thumbnailkpu1.png" alt="Video 4">
        </div>
        <div class="video-thumbnail" onclick="openModal('<?=base_url()?>assets/dist/video/vidPPU1PARAGRAF.mp4')">
            <img src="<?=base_url()?>assets/dist/img/thumbnailppu1.png" alt="Video 5">
        </div>
        <div class="video-thumbnail" onclick="openModal('<?=base_url()?>assets/dist/video/vidlbing1MAINIDEAS.mp4')">
            <img src="<?=base_url()?>assets/dist/img/thumbnaillbing1.png" alt="Video 6">
        </div>
        <div class="video-thumbnail" onclick="openModal('<?=base_url()?>assets/dist/video/vidPMB1PUEBI&KALIMATEFEKTIF.mp4')">
            <img src="<?=base_url()?>assets/dist/img/thumbnailpbm1.png" alt="Video 7">
        </div>
        <div class="video-thumbnail" onclick="openModal('<?=base_url()?>assets/dist/video/vidPPU2MAKNA.mp4')">
            <img src="<?=base_url()?>assets/dist/img/thumbnailppu2.png" alt="Video 8">
        </div>
        <div class="video-thumbnail" onclick="openModal('<?=base_url()?>assets/dist/video/vidKPU2deduktif.mp4')">
            <img src="<?=base_url()?>assets/dist/img/thumbnailkpu2.png" alt="Video 9">
        </div>
        <div class="video-thumbnail" onclick="openModal('<?=base_url()?>assets/dist/video/vidKPU3Penalarankuantitatif.mp4')">
            <img src="<?=base_url()?>assets/dist/img/thumbnailkpu3.png" alt="Video 10">
        </div>
        <div class="video-thumbnail" onclick="openModal('<?=base_url()?>assets/dist/video/vidPK3PeluangdanPermutasi.mp4')">
            <img src="<?=base_url()?>assets/dist/img/thumbnailpk3.png" alt="Video 11">
        </div>
        <div class="video-thumbnail" onclick="openModal('<?=base_url()?>assets/dist/video/vidPK4BilangandanHimpunan.mp4')">
            <img src="<?=base_url()?>assets/dist/img/thumbnailpk4.png" alt="Video 12">
        </div>
        <div class="video-thumbnail" onclick="openModal('<?=base_url()?>assets/dist/video/vidPK5Aritmatikasosial.mp4')">
            <img src="<?=base_url()?>assets/dist/img/thumbnailpk5.png" alt="Video 13">
        </div>
        <div class="video-thumbnail" onclick="openModal('<?=base_url()?>assets/dist/video/vidPK6GeomteriDanBangunDatar.mp4')">
            <img src="<?=base_url()?>assets/dist/img/thumbnailpk6.png" alt="Video 14">
        </div>
        <div class="video-thumbnail" onclick="openModal('<?=base_url()?>assets/dist/video/vidPBM2Polakalimat.mp4')">
            <img src="<?=base_url()?>assets/dist/img/thumbnailpbm2.png" alt="Video 15">
        </div>
        <div class="video-thumbnail" onclick="openModal('<?=base_url()?>assets/dist/video/vidPBM3penulisankata.mp4')">
            <img src="<?=base_url()?>assets/dist/img/thumbnailpbm3.png" alt="Video 16">
        </div>
        <div class="video-thumbnail" onclick="openModal('<?=base_url()?>assets/dist/video/vidlbind2simpulandanringkasan.mp4')">
            <img src="<?=base_url()?>assets/dist/img/thumbnaillbind2.png" alt="Video 17">
        </div>
        <div class="video-thumbnail" onclick="openModal('<?=base_url()?>assets/dist/video/Vidpm1aljabarspltv.webm')">
            <img src="<?=base_url()?>assets/dist/img/thumbnailpm1.png" alt="Video 18">
        </div>
        <div class="video-thumbnail" onclick="openModal('<?=base_url()?>assets/dist/video/vidPPU3maknakata.mp4')">
            <img src="<?=base_url()?>assets/dist/img/thumbnailppu3.png" alt="Video 19">
        </div>
        <div class="video-thumbnail" onclick="openModal('<?=base_url()?>assets/dist/video/vidPK7bilangandanhimpunan.mp4')">
            <img src="<?=base_url()?>assets/dist/img/thumbnailpk7.png" alt="Video 20">
        </div>
        <div class="video-thumbnail" onclick="openModal('<?=base_url()?>assets/dist/video/vidPK8persamaankuadrateksponendanfungsi.mp4')">
            <img src="<?=base_url()?>assets/dist/img/thumbnailpk8.png" alt="Video 21">
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
                
                @media (max-width: 767px) {
                    .video-container{
                    display: grid;
                    grid-template-columns: repeat(2, 1fr); /* Tiga kolom dengan lebar yang sama */
                    grid-gap: 5px; /* Jarak antara sel dalam grid */
                }
            </style>
        <!-- Add more thumbnails as needed -->

        
    </div>

    <div id="videoModal" class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <video controls preload="metadata" id="modalVideo" controlsList="nodownload">
            Your browser does not support the video tag.
        </video>
        <style>
            #videoModal {
                display: none; /* Menjadikan elemen sebagai flex container */
                justify-content: center; /* Pusatkan kontennya secara horizontal */
                align-items: center; /* Pusatkan kontennya secara vertikal */
                position: fixed;
                top: -50%;
                left: -90%;
                width: 280%;
                height: 200%;
                background-color: rgba(0, 0, 0, 0.8);
            }
            #modalVideo {
                width: 200%;
                max-width: 2000px; /* Optional: atur lebar maksimum jika diperlukan */
                justify-content:center;
            }
            
        </style>
    </div>
<script src="<?=base_url()?>assets/dist/js/app/ujian/video.js"></script>