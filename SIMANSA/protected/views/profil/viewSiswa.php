<?php
/* @var $this TSiswaController */
/* @var $model TSiswa */

$this->breadcrumbs=array(
	'Profil'=>array('index'),
	$model->NM_SISWA,
);

// $this->menu=array(
// 	array('label'=>'List TSiswa', 'url'=>array('index')),
// 	array('label'=>'Create TSiswa', 'url'=>array('create')),
// 	array('label'=>'Update TSiswa', 'url'=>array('update', 'id'=>$model->NIS)),
// 	array('label'=>'Delete TSiswa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->NIS),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Manage TSiswa', 'url'=>array('admin')),
// );
?>

<h1>Profil <?php echo $model->NM_SISWA; ?></h1>

<?php

echo '<a href="' . Yii::app()->request->baseUrl . '/index.php?r=profil/changePassword&username=' .Yii::app()->user->name. '"><button>Ubah Password</button>';
echo '<a href="' . Yii::app()->request->baseUrl . '/index.php?r=profil/update&id=' . $model->NIS. '"><button>Ubah Profil</button>';

$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NIS',
		'NO_CALSIS',
		'NM_SISWA',
		'NM_PANGGILAN',
		'KD_JENIS_KELAMIN',
		'KOTA_LAHIR',
		'TANGGAL_LAHIR',
		'ALAMAT',
		'RT',
		'RW',
		'KD_POS',
		'KD_GOL_DARAH',
		'KD_AGAMA',
		'NO_TELP',
		'NO_HP',
		'STATUS_SISWA',
		'KEWARGANEGARAAN',
		'ANAK_KE',
		'JUMLAH_KANDUNG',
		'JUMLAH_TIRI',
		'JUMLAH_ANGKAT',
		'STATUS_YATIM_PIATU',
		'BAHASA',
		'TINGGAL_DI',
		'JARAK_SEK',
		'KELAINAN_JASMANI',
		'BERAT_BADAN',
		'TINGGI_BADAN',
		'ASAL_SMP',
		'NO_STL_SMP',
		'TANGGAL_STL_SMP',
		'LAMA_BELAJAR_SMP',
		'ASAL_SMA',
		'KD_TINGKAT_KELAS',
		'KD_PROGRAM_PENGAJARAN',
		'DITERIMA_TANGGAL',
		'PINDAH_ALASAN',
		'HUBUNGI',
		'TANGGUNG_BIAYA',
		'TEMP_AKSES_NET',
		'FREK_AKSES_NET',
		'FREK_REKRE_KEL',
		'NILAI',
		'NO_INDUK',
		'DIR_FOTO',
		'STATUS_ENTRI',
		'KD_JENIS_KETUNAAN',
		'KD_STATUS_DALAM_KELUARGA',
		'TANGGAL_SKHUN_SMP',
		'NO_SKHUN_SMP',
		'NISN',
		'NIK',
		'JENIS_TINGGAL',
		'KELURAHAN_DESA',
		'KECAMATAN',
		'KABUPATEN_KOTA',
		'PROPINSI',
		'KD_AREA',
		'KD_JARAK_SEK',
		'ALAT_TRANSPORTASI',
		'EMAIL_PRIBADI',
		'USERNAME',
		'TANGGAL_AKSES',
	),
)); ?>