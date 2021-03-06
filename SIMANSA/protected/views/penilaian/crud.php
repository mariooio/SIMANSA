<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

-->
<?php
/* @var $this SiswaAbsensiController */
$NISSiswa = $_GET['siswa'];
$listAbsensi = $this->getAbsen($NISSiswa);
?>
<div class="row clearfix">
    <div class="col-md9 column">
        <ul class="breadcrumb">
            <li>
                <a href="#">Absensi</a> <span class="divider">/</span>
            </li>
            <li>
                <a href="#">Pilih Kelas</a> <span class="divider">/</span>
            </li>
            <li class="active">
                Detail Absensi
            </li>
        </ul>
        <h3 class="text-center text-info">
            Detail Absensi: <?php 
            $namaSiswa = Siswa::model()->findByPk($NISSiswa)->NM_SISWA;
            echo "$namaSiswa"?>
        </h3>
        <table class="table">
            <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        Tanggal
                    </th>
                    <th>
                        Kode Periode Belajar
                    </th>
                    <th>
                        Status Absen
                    </th>
                    <th>
                        Operasi
                    </th>
                </tr>
            </thead>
            <tbody>
                <!--tr>
                    <td>
                        1
                    </td>
                    <td>
                        TB - Monthly
                    </td>
                    <td>
                        01/04/2012
                    </td>
                    <td>
                        Default
                    </td>
                </tr>
                <tr class="active">
                    <td>
                        1
                    </td>
                    <td>
                        TB - Monthly
                    </td>
                    <td>
                        01/04/2012
                    </td>
                    <td>
                        Approved
                    </td>
                </tr>
                <tr class="success">
                    <td>
                        2
                    </td>
                    <td>
                        TB - Monthly
                    </td>
                    <td>
                        02/04/2012
                    </td>
                    <td>
                        Declined
                    </td>
                </tr>
                <tr class="warning">
                    <td>
                        3
                    </td>
                    <td>
                        TB - Monthly
                    </td>
                    <td>
                        03/04/2012
                    </td>
                    <td>
                        Pending
                    </td>
                </tr>
                <tr class="danger">
                    <td>
                        4
                    </td>
                    <td>
                        TB - Monthly
                    </td>
                    <td>
                        04/04/2012
                    </td>
                    <td>
                        Call in to confirm
                    </td>
                </tr-->
                <?php
                    $NISSiswa = $_GET['siswa'];
                    $listAbsensi = $this->getAbsen($NISSiswa);
                    for ($index = 0; $index < count($listAbsensi); $index++) {
                        $tanggal = $listAbsensi[$index]->TANGGAL;
                        $kodePerioderBelajar = $listAbsensi[$index]->KD_PERIODE_BELAJAR;
                        $status = (int)$listAbsensi[$index]->STATUS_ABSEN;
                        if($status == 1){
                            $status = "Sakit";
                        } else if ($status == 2) {
                            $status = "Izin";
                        } else {
                            $status = "Alfa";
                        }
                        if($kodePerioderBelajar ==1){
                            $kodePerioderBelajar = "Ganjil";
                        } else {
                            $kodePerioderBelajar = "Genap";
                        }
                        echo '<tr>
                    <td>
                        '.($index+1).'
                    </td>
                    <td>
                        '.$tanggal.'
                    </td>
                    <td>
                        '.$kodePerioderBelajar.'
                    </td>
                    <td>
                        '.$status.'
                    </td>
                    <td>
                    <a href="'.Yii::app()->request->baseUrl.'/index.php?r=siswaAbsensi/crud&runFunction=deleteData&siswa='.$NISSiswa.'&tanggal='.$listAbsensi[$index]->TANGGAL.'">Delete
                    </td>
                </tr>';
                    }
                ?>
            </tbody>
        </table>
        
    </div>
    <div class="col-md-2 column">
        <h3 class="text-center text-info">
            Detail Akun
        </h3><img alt="140x140" src="http://lorempixel.com/140/140/">
        <dl>
            <dt>
            Description lists
            </dt>
            <dd>
                A description list is perfect for defining terms.
            </dd>
            <dt>
            Euismod
            </dt>
            <dd>
                Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
            </dd>
            <dd>
                Donec id elit non mi porta gravida at eget metus.
            </dd>
            <dt>
            Malesuada porta
            </dt>
            <dd>
                Etiam porta sem malesuada magna mollis euismod.
            </dd>
            <dt>
            Felis euismod semper eget lacinia
            </dt>
            <dd>
                Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
            </dd>
        </dl>
    </div>
</div>