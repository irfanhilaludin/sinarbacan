<?php
if($_GET) {
	// Jika mendapatkan variabel URL ?page
	switch ($_GET['page']){				
		case '' :				
			if(!file_exists ("home.php")) die ("Sepurane Ijek Kosong!"); 
			include "home.php";	break;
			
	    case 'home' :				
			if(!file_exists ("home.php")) die ("Sepurane Ijek Kosong!"); 
			include "home.php";	break;
		
		case 'data_kontak' :				
			if(!file_exists ("data_kontak.php")) die ("Sepurane Ijek Kosong!"); 
			include "data_kontak.php";	break;

		case 'data_kontak_telah' :				
			if(!file_exists ("data_kontak_telah.php")) die ("Sepurane Ijek Kosong!"); 
			include "data_kontak_telah.php";	break;
					
		case 'data_kontak_belum' :				
			if(!file_exists ("data_kontak_belum.php")) die ("Sepurane Ijek Kosong!"); 
			include "data_kontak_belum.php";	break;		
			
		case 'data_kontak_telpon_ulang' :				
		if(!file_exists ("data_kontak_telpon_ulang.php")) die ("Sepurane Ijek Kosong!"); 
		include "data_kontak_telpon_ulang.php";	break;			
			
		case 'data_kontak_sisa' :				
		if(!file_exists ("data_kontak_sisa.php")) die ("Sepurane Ijek Kosong!"); 
		include "data_kontak_sisa.php";	break;		
				
		case 'tambah_kontak' :				
		if(!file_exists ("tambah_kontak.php")) die ("Sepurane Ijek Kosong!"); 
		include "tambah_kontak.php";	break;	
		
		case 'edit_kontak' :				
		if(!file_exists ("edit_kontak.php")) die ("Sepurane Ijek Kosong!"); 
		include "edit_kontak.php";	break;			
		
		case 'pindah_kontak' :				
		if(!file_exists ("pindah_kontak.php")) die ("Sepurane Ijek Kosong!"); 
		include "pindah_kontak.php";	break;
		
		case 'set_user' :				
		if(!file_exists ("set_user.php")) die ("Sepurane Ijek Kosong!"); 
		include "set_user.php";	break;
		
		case 'set_kontak' :				
		if(!file_exists ("set_kontak.php")) die ("Sepurane Ijek Kosong!"); 
		include "set_kontak.php";	break;		
		
				
		case 'data_kontak_per_marketing' :				
		if(!file_exists ("data_kontak_per_marketing.php")) die ("Sepurane Ijek Kosong!"); 
		include "data_kontak_per_marketing.php";	break;		
				
		case 'data_usul' :				
		if(!file_exists ("data_usul.php")) die ("Sepurane Ijek Kosong!"); 
		include "data_usul.php";	break;			
		
		case 'filter' :				
		if(!file_exists ("filter.php")) die ("Sepurane Ijek Kosong!"); 
		include "filter.php";	break;				

		case 'data_berkas' :				
		if(!file_exists ("data_berkas.php")) die ("Sepurane Ijek Kosong!"); 
		include "data_berkas.php";	break;		
		
		
		
		case 'data_penawaran' :				
		if(!file_exists ("data_penawaran.php")) die ("Sepurane Ijek Kosong!"); 
		include "data_penawaran.php";	break;		
		
		case 'data_penawaran_pending' :				
		if(!file_exists ("data_penawaran_pending.php")) die ("Sepurane Ijek Kosong!"); 
		include "data_penawaran_pending.php";	break;		
		
		case 'data_penawaran_kirim' :				
		if(!file_exists ("data_penawaran_kirim.php")) die ("Sepurane Ijek Kosong!"); 
		include "data_penawaran_kirim.php";	break;
		
		
	    case 'putar_penawaran' :				
		if(!file_exists ("putar_penawaran.php")) die ("Sepurane Ijek Kosong!"); 
		include "putar_penawaran.php";	break;
		
		
		case 'data_penawaran_gagal' :				
		if(!file_exists ("data_penawaran_gagal.php")) die ("Sepurane Ijek Kosong!"); 
		include "data_penawaran_gagal.php";	break;						
		
		case 'edit_penawaran' :				
		if(!file_exists ("edit_penawaran.php")) die ("Sepurane Ijek Kosong!"); 
		include "edit_penawaran.php";	break;		
		
		case 'turun_po' :				
		if(!file_exists ("turun_po.php")) die ("Sepurane Ijek Kosong!"); 
		include "turun_po.php";	break;		
		
		
		case 'pelanggan_turun_po' :				
		if(!file_exists ("pelanggan_turun_po.php")) die ("Sepurane Ijek Kosong!"); 
		include "pelanggan_turun_po.php";	break;				
		
		
		case 'data_pelanggan_marketing' :				
		if(!file_exists ("data_pelanggan_marketing.php")) die ("Sepurane Ijek Kosong!"); 
		include "data_pelanggan_marketing.php";	break;			
		
		
		case 'data_pemesanan' :				
		if(!file_exists ("data_pemesanan.php")) die ("Sepurane Ijek Kosong!"); 
		include "data_pemesanan.php";	break;			
		
		case 'data_pemesanan_pending' :				
		if(!file_exists ("data_pemesanan_pending.php")) die ("Sepurane Ijek Kosong!"); 
		include "data_pemesanan_pending.php";	break;		

		case 'data_pemesanan_setuju' :				
		if(!file_exists ("data_pemesanan_setuju.php")) die ("Sepurane Ijek Kosong!"); 
		include "data_pemesanan_setuju.php";	break;		
				
		case 'data_pemesanan_gagal' :				
		if(!file_exists ("data_pemesanan_gagal.php")) die ("Sepurane Ijek Kosong!"); 
		include "data_pemesanan_gagal.php";	break;		
				
		case 'cek_po' :				
		if(!file_exists ("cek_po.php")) die ("Sepurane Ijek Kosong!"); 
		include "cek_po.php";	break;		
		
		case 'edit_po' :				
		if(!file_exists ("edit_po.php")) die ("Sepurane Ijek Kosong!"); 
		include "edit_po.php";	break;				
		
		case 'grafik_penawaran' :				
		if(!file_exists ("grafik_penawaran.php")) die ("Sepurane Ijek Kosong!"); 
		include "grafik_penawaran.php";	break;				
				
		case 'grafik_po' :				
		if(!file_exists ("grafik_po.php")) die ("Sepurane Ijek Kosong!"); 
		include "grafik_po.php";	break;				
				
		
		
		
		
		
		case 'data_pengiriman' :				
		if(!file_exists ("data_pengiriman.php")) die ("Sepurane Ijek Kosong!"); 
		include "data_pengiriman.php";	break;		
		
		case 'data_pengiriman_belum' :				
		if(!file_exists ("data_pengiriman_belum.php")) die ("Sepurane Ijek Kosong!"); 
		include "data_pengiriman_belum.php";	break;			
		
		case 'data_pengiriman_sudah' :				
		if(!file_exists ("data_pengiriman_sudah.php")) die ("Sepurane Ijek Kosong!"); 
		include "data_pengiriman_sudah.php";	break;					
		
		
		case 'data_kirim' :				
		if(!file_exists ("data_kirim.php")) die ("Sepurane Ijek Kosong!"); 
		include "data_kirim.php";	break;		
				
				
				
				
		
		case 'data_user' :				
		if(!file_exists ("data_user.php")) die ("Sepurane Ijek Kosong!"); 
		include "data_user.php";	break;		
		
		case 'tambah_user' :				
		if(!file_exists ("tambah_user.php")) die ("Sepurane Ijek Kosong!"); 
		include "tambah_user.php";	break;		
		
		case 'edit_user' :				
		if(!file_exists ("edit_user.php")) die ("Sepurane Ijek Kosong!"); 
		include "edit_user.php";	break;		
				
		case 'user_keluar' :				
		if(!file_exists ("user_keluar.php")) die ("Sepurane Ijek Kosong!"); 
		include "user_keluar.php";	break;		
		


		case 'data_armada' :				
		if(!file_exists ("data_armada.php")) die ("Sepurane Ijek Kosong!"); 
		include "data_armada.php";	break;		
		
		case 'tambah_armada' :				
		if(!file_exists ("tambah_armada.php")) die ("Sepurane Ijek Kosong!"); 
		include "tambah_armada.php";	break;		
		
		
		case 'edit_armada' :				
		if(!file_exists ("edit_armada.php")) die ("Sepurane Ijek Kosong!"); 
		include "edit_armada.php";	break;		
		
		
		case 'data_supir' :				
		if(!file_exists ("data_supir.php")) die ("Sepurane Ijek Kosong!"); 
		include "data_supir.php";	break;		
		
		case 'tambah_supir' :				
		if(!file_exists ("tambah_supir.php")) die ("Sepurane Ijek Kosong!"); 
		include "tambah_supir.php";	break;		
		
		case 'edit_supir' :				
		if(!file_exists ("edit_supir.php")) die ("Sepurane Ijek Kosong!"); 
		include "edit_supir.php";	break;		
			
		
		case 'data_oat' :				
		if(!file_exists ("data_oat.php")) die ("Sepurane Ijek Kosong!"); 
		include "data_oat.php";	break;		
		
		case 'tambah_oat' :				
		if(!file_exists ("tambah_oat.php")) die ("Sepurane Ijek Kosong!"); 
		include "tambah_oat.php";	break;		
		
		case 'edit_oat' :				
		if(!file_exists ("edit_oat.php")) die ("Sepurane Ijek Kosong!"); 
		include "edit_oat.php";	break;		
		
				case 'data_kernet' :				
		if(!file_exists ("data_kernet.php")) die ("Sepurane Ijek Kosong!"); 
		include "data_kernet.php";	break;		
		
		case 'tambah_kernet' :				
		if(!file_exists ("tambah_kernet.php")) die ("Sepurane Ijek Kosong!"); 
		include "tambah_kernet.php";	break;		
		
		case 'edit_kernet' :				
		if(!file_exists ("edit_kernet.php")) die ("Sepurane Ijek Kosong!"); 
		include "edit_kernet.php";	break;		
			
		
		
		
		}
}
else {
	// Jika tidak mendapatkan variabel URL : ?page
	if(!file_exists ("home.php")) die ("Sepurane Ijek Kosong!"); 
	include "home.php";	
}
?>