<div class="callout callout-info">
    <h4>Semangat Mengerjakan!!!</h4>
</div>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Confirm Data</h3>
    </div>
    <div class="box-body">
        <span id="id_ujian" data-key="<?=$encrypted_id?>"></span>
        <div class="row">
            <div class="col-sm-6">
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <td><?=$mhs->nama?></td>
                    </tr>
                    <tr>
                        <th>Lecturer</th>
                        <td><?=$ujian->nama_dosen?></td>
                    </tr>
                    <tr>
                        <th>Class/Department</th>
                        <td><?=$mhs->nama_kelas?> / <?=$mhs->nama_jurusan?></td>
                    </tr>
                    <tr>
                        <th>Exam Name</th>
                        <td><?=$ujian->nama_ujian?></td>
                    </tr>
                    <tr>
                        <th>Number of Questions</th>
                        <td><?=$ujian->jumlah_soal?></td>
                    </tr>
                    <tr>
                        <th>Time</th>
                        <td><?=$ujian->waktu?> Minute</td>
                    </tr>
                    <tr>
                        <th>Late</th>
                        <td>
                            <?=strftime('%d %B %Y', strtotime($ujian->terlambat))?> 
                            <?=date('H:i:s', strtotime($ujian->terlambat))?>
                        </td>
                    </tr>
                    <tr id="hiddenrow">
                    <th style="vertical-align:middle">Token</th>
                        <td>
                            <input autocomplete="off" id="token" placeholder="Token" type="text" class="input-sm form-control">
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-6">
                <div class="box box-solid">
                    <div class="box-body pb-0">
                        <div class="callout callout-info">
                            <p>
                            TO dapat dilakukan saat tombol "Start" berwarna hijau
                            </p>
                        </div>
                        <?php
                        $mulai = strtotime($ujian->tgl_mulai);
                        $terlambat = strtotime($ujian->terlambat);
                        $now = time();
                        if($mulai > $now) : 
                        ?>
                        <div class="callout callout-success">
                            <strong><i class="fa fa-clock-o"></i> The exam will start on</strong>
                            <br>
                            <span class="countdown" data-time="<?=date('Y-m-d H:i:s', strtotime($ujian->tgl_mulai))?>">00 Days, 00 Hours, 00 Minutes, 00 Seconds</strong><br/>
                        </div>
                        <?php elseif( $terlambat > $now ) : ?>
                        <button id="btncek" data-id="<?=$ujian->id_ujian?>" class="btn btn-success btn-lg mb-4">
                            <i class="fa fa-pencil"></i> Start
                        </button>
                        <div class="callout callout-danger">
                            <i class="fa fa-clock-o"></i> <strong class="countdown" data-time="<?=date('Y-m-d H:i:s', strtotime($ujian->terlambat))?>">00 Days, 00 Hours, 00 Minutes, 00 Seconds</strong><br/>
                            Batas pengerjaan!
                        </div>
                        <?php else : ?>
                        <div class="callout callout-danger">
                        Waktu untuk memencet tombol <strong>"START"</strong> sudah habis.<br/>
                        Tryout sudah tidak dapat dikerjakan lagi.
                        </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    #hiddenrow{
display: none;
}
</style>


<script src="<?=base_url()?>assets/dist/js/app/ujian/token.js"></script>