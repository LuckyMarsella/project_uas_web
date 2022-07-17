<?php

                     		$page = $_GET['page'];
                     		$aksi = $_GET['aksi'];


                     		if ($page == "buku") {
                     			if ($aksi == "") {
                     				include "page/buku/buku.php";
                     			}elseif ($aksi== "tambah") {
                                    include "page/buku/tambah.php";
                                }elseif ($aksi== "ubah") {
                                    include "page/buku/ubah.php";
                                }elseif ($aksi== "hapus") {
                                    include "page/buku/hapus.php";
                                }elseif ($aksi== "cetak") {
                                    include "page/buku/form_laporan_buku.php";
                                }
                            }elseif ($page == "denda" ) {
                                if ($aksi == "") {
                                    include "page/denda/denda.php";
                                }elseif ($aksi== "hapus") {
                                    include "page/denda/hapus.php";
                                }elseif ($aksi== "ubah") {
                                    include "page/denda/ubah.php";
                                }

                     		}elseif ($page == "lokasi" ) {
                                if ($aksi == "") {
                                    include "page/lokasi/lokasi.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/lokasi/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/lokasi/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/lokasi/hapus.php";
                                }
                            }elseif ($page == "anggota" ) {
                     			if ($aksi == "") {
                     				include "page/anggota/anggota.php";
                     			}elseif ($aksi == "tambah") {
                                    include "page/anggota/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/anggota/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/anggota/hapus.php";
                                }elseif ($aksi== "cetak") {
                                    include "page/anggota/form_laporan_anggota.php";
                                }
                     		}elseif ($page == "transaksi" ) {
                     			if ($aksi == "") {
                     				include "page/transaksi/transaksi.php";
                     			}elseif ($aksi == "tambah") {
                                    include "page/transaksi/tambah.php";
                                }elseif ($aksi == "kembali") {
                                    include "page/transaksi/kembali.php";
                                }elseif ($aksi == "perpanjang") {
                                    include "page/transaksi/perpanjang.php";
                                }elseif ($aksi== "cetak") {
                                    include "page/transaksi/form_laporan_transaksi.php";
                                }
                     		}elseif ($page == "transaksi_denda" ) {
                     			if ($aksi == "") {
                     				include "page/transaksi_denda/transaksi_denda.php";
                     			}elseif ($aksi == "tambah") {
                                    include "page/transaksi_denda/tambah.php";
                                }elseif ($aksi == "kembali") {
                                    include "page/transaksi_denda/kembali.php";
                                }elseif ($aksi == "perpanjang") {
                                    include "page/transaksi_denda/perpanjang.php";
                                }elseif ($aksi== "cetak") {
                                    include "page/transaksi_denda/form_laporan_transaksi.php";
                                }
                     		}elseif ($page == "pengguna" ) {
                                if ($aksi == "") {
                                    include "page/pengguna/pengguna.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/pengguna/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/pengguna/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/pengguna/hapus.php";
                                }
                     		}elseif ($page == "laporan" ) {
                                if ($aksi == "cetak_anggota") {
                                    include "page/laporan/laporan_anggota.php";
                                }elseif ($aksi == "tambah") {
                                    include "page/pengguna/tambah.php";
                                }elseif ($aksi == "ubah") {
                                    include "page/pengguna/ubah.php";
                                }elseif ($aksi == "hapus") {
                                    include "page/pengguna/hapus.php";
                                }

                            }elseif ($page=="") {
                                include "home.php";
                            }

                     	?>