<?php if( $this->ion_auth->is_admin() ) : ?>
<div class="row">
    <?php foreach($info_box as $info) : ?>
    <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-<?=$info->box?>">
        <div class="inner">
            <h3><?=$info->total;?></h3>
            <p><?=$info->text;?></p>
        </div>
        <div class="icon">
            <i class="fa fa-<?=$info->icon?>"></i>
        </div>
        <a href="<?=base_url().strtolower($info->title);?>" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
        </a>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?php elseif( $this->ion_auth->in_group('Lecturer') ) : ?>

<div class="row">
    <div class="col-sm-4">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Account Information</h3>
            </div>
            <table class="table table-hover">
                <tr>
                    <th>Name</th>
                    <td><?=$dosen->nama_dosen?></td>
                </tr>
                <tr>
                    <th>NIP</th>
                    <td><?=$dosen->nip?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?=$dosen->email?></td>
                </tr>
                <tr>
                    <th>Course</th>
                    <td><?=$dosen->nama_matkul?></td>
                </tr>
                <tr>
                    <th>Class List</th>
                    <td>
                        <ol class="pl-4">
                        <?php foreach ($kelas as $k) : ?>
                            <li><?=$k->nama_kelas?></li>
                        <?php endforeach;?>
                        </ol>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="box box-solid">
            <div class="box-header bg-yellow">
                <h3 class="box-title">Before You Kick Off:</h3>
            </div>
            <div class="box-body">
            <p>Welcome to Online Examination System. Here are some tips in order to get you through the system with an ease.</p>
                <ul class="pl-4">
                    <li>First things first, all the Questions are listed on the "Question Bank section (left hand sidebar menu)"</li>
                    <li>Secondly, you can manage questionaires in order to setup examinations from Question Bank section.</li>
                    <li>Every examination should have its own name, question sets, date and timing details set by LECTURER.</li>
                    <li>You need to copy and share (to students) the TOKEN code, once after creating the Examination record.</li>
                    <li>Once student completes their examination, you'll be able to view their detailed results from "Exam Results" section.</li>
                    <li>Also, the result portion can be downloaded on PDF format.</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php else : ?>

<div class="row">
    <div class="col-sm-4">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Account Information</h3>
            </div>
            <table class="table table-hover">
                <tr>
                    <th>NIM</th>
                    <td><?=$mahasiswa->nim?></td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td><?=$mahasiswa->nama?></td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><?=$mahasiswa->email?></td>
                </tr>
                <tr>
                    <th>Department</th>
                    <td><?=$mahasiswa->nama_jurusan?></td>
                </tr>
                <tr>
                    <th>Class</th>
                    <td><?=$mahasiswa->nama_kelas?></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="box box-solid">
            <div class="box-header bg-yellow">
                <h3 class="box-title">Selamat Datang!</h3>
            </div>
            <div class="box-body">
            <p>Info Penting! :</p>
                <ul class="pl-4">
                    <li>Try Out Trial Akan Dibuka Hingga Tanggal 14 Januari Dan Penilaian IRT akan di Bagikan Tanggal 15 Januari</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>