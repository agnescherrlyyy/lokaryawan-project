<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slip Gaji</title>
</head>
<body style="font-family: 'Poppins', sans-serif; margin: 0.0in -0.2in 0.0in -0.2in; padding: 0; box-sizing: border-box; ">
    <div style="width: 100%; min-height: 100vh;">
        <table width="100%" border="2" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <td width="100%" style="padding-left: 1rem; padding-right: 1rem;">
                        <div style="width: 100%; margin-top: .3rem;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <thead style="width: 100%;">
                                    <tr>
                                        <td align="left" width="100%" style="width: 100%; padding-top: .1rem; padding-right: 0; padding-bottom:.1rem; padding-left:0;">
                                            <div style="width: 100%; padding-top:12px; padding-right:12px; padding-bottom:12px padding-left:0;">
                                                <table width="100%" border="1" cellspacing="0" cellpadding="0" style="border-bottom-width: 2px; border-top-width: 0; border-left-width: 0; border-right-width: 0;">
                                                    <thead>
                                                        <tr>
                                                            <td align="left" style="padding-left: 1.5rem; padding-bottom: 2rem; font-size:.8rem;">
                                                                <img src="{{ public_path('img/logoPIP.png') }}" alt="Logo PIP" style="width: 5rem; height: 5rem;">
                                                            </td>
                                                            <td align="center" style="padding-left: 5rem; padding-bottom: 2rem; padding-right: 1rem; font-size:.8rem;">
                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                    <thead>
                                                                        <tr>
                                                                            <td align="center" style="padding: .2rem;">
                                                                                <strong style=" font-size: 1.5rem;">SLIP GAJI</strong>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="center" style="padding: .2rem;">
                                                                                <strong style=" font-size: .8rem;">PT. PANORAMA INDAH PERMAI</strong>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="center" style="padding: .2rem;">
                                                                                <strong style=" font-size: .8rem;">Jl. Fatmawati no. 154, Lopait, Tuntang</strong>
                                                                            </td>
                                                                        </tr>
                                                                    </thead>
                                                                </table>
                                                            </td>
                                                            <td align="right" style="padding: 1.5rem; padding-bottom: 2rem; font-size:.8rem;">
                                                                <img src="{{ public_path('img/logosaloka-gaji.png') }}" alt="Logo Saloka" style="width: 6rem; height: 3rem;">
                                                            </td>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div style="width: 100%; margin-top: 1rem;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <thead>
                                    <tr>
                                        <td align="left">
                                            <div style="width: 100%; padding-top:12px; padding-right:12px; padding-bottom:12px padding-left:0;">
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <thead>
                                                        <tr align="left">
                                                            <td style="padding: .1rem; font-size:.8rem;"><strong>Peridode</strong></td>
                                                            <td style="padding: .1rem; font-size:.8rem;">:</td>
                                                            <td style="padding: .1rem; font-size:.8rem;"><strong id="periode"></strong></td>
                                                        </tr>
                                                        <tr align="left">
                                                            <td style="padding: .1rem; font-size:.8rem;"><strong>NIP</strong></td>
                                                            <td style="padding: .1rem; font-size:.8rem;">:</td>
                                                            <td style="padding: .1rem; font-size:.8rem;"><span id="nip"></span>{{ $karyawan->username }}</td>
                                                        </tr>
                                                        <tr align="left">
                                                            <td style="padding: .1rem; font-size:.8rem;"><strong>Nama</strong></td>
                                                            <td style="padding: .1rem; font-size:.8rem;">:</td>
                                                            <td style="padding: .1rem; font-size:.8rem;"><span id="nama">{{ $karyawan->name }}</span></td>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </td>
                                        <td align="center">
                                            <div style="width: 100%; padding-top:12px; padding-right:12px; padding-bottom:12px padding-left:0;">
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <thead>
                                                        <tr align="left" style="padding-top:12px; padding-right:12px; padding-bottom:12px padding-left:0;">
                                                            <td style="padding: .1rem; font-size:.8rem;"><strong>Departement</strong></td>
                                                            <td style="padding: .1rem; font-size:.8rem;">:</td>
                                                            <td style="padding: .1rem; font-size:.8rem;"><span id="departemen">{{ $karyawan->departemen }}</span></td>
                                                        </tr>
                                                        <tr align="left" style="padding-top:12px; padding-right:12px; padding-bottom:12px padding-left:0;">
                                                            <td style="padding: .1rem; font-size:.8rem;"><strong>Sub Departemen</strong></td>
                                                            <td style="padding: .1rem; font-size:.8rem;">:</td>
                                                            <td style="padding: .1rem; font-size:.8rem;"><span id="sub-dep">{{ $karyawan->sub_departemen }}</span></td>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </td>
                                        <td align="right">
                                            <div style="width: 100%; padding-top:12px; padding-right:12px; padding-bottom:12px padding-left:0;">
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <thead>
                                                        <tr align="right" style="padding-top:12px; padding-right:12px; padding-bottom:12px padding-left:0;">
                                                            <td style="padding: .1rem; font-size:.8rem;"><strong>Jabatan</strong></td>
                                                            <td style="padding: .1rem; font-size:.8rem;">:</td>
                                                            <td style="padding: .1rem; font-size:.8rem;"><span id="jabatan">{{ $karyawan->grade }}</span></td>
                                                        </tr>
                                                        <tr align="right" style="padding-top:12px; padding-right:12px; padding-bottom:12px padding-left:0;">
                                                            <td style="padding: .1rem; font-size:.8rem;"><strong>Nomor Rekening</strong></td>
                                                            <td style="padding: .1rem; font-size:.8rem;">:</td>
                                                            <td style="padding: .1rem; font-size:.8rem;"><span id="no-rek"></span></td>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div style="width: 100%; margin-top: 1rem;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <thead width="100%">
                                    <tr align="center" style="width=100%; background-color: #169870;">
                                        <td style="padding: .5rem; color: #fff; font-size:.8rem;">
                                            <strong>Absensi</strong>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div style="width: 100%; margin-top: .3rem;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <thead style="width: 100%;">
                                    <tr>
                                        <td align="left" width="100%" align="center" style="width: 100%; padding-top: .1rem; padding-right: .8rem; padding-bottom:.1rem; padding-left:0;">
                                            <div style="width: 100%; padding-top:12px; padding-right:12px; padding-bottom:12px padding-left:0;">
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <thead>
                                                        <tr>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;"><strong>Total Masuk</strong></td>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;">:</td>
                                                            <td align="right" style="padding: .1rem; font-size:.8rem;"><span id="total-masuk"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;"><strong>Total Libur</strong></td>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;">:</td>
                                                            <td align="right" style="padding: .1rem; font-size:.8rem;"><span id="total-libur"></span></td>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </td>
                                        <td align="left" width="100%" align="center" style="width: 100%; padding-top: .1rem; padding-right: .8rem; padding-bottom:.1rem; padding-left:0;">
                                            <div style="width: 100%; padding-top:12px; padding-right:12px; padding-bottom:12px padding-left:0;">
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <thead>
                                                        <tr>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;"><strong>Total Izin</strong></td>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;">:</td>
                                                            <td align="right" style="padding: .1rem; font-size:.8rem;"><span id="total-izin"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;"><strong>Total PH</strong></td>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;">:</td>
                                                            <td align="right" style="padding: .1rem; font-size:.8rem;"><span id="total-ph"></span></td>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </td>
                                        <td align="left" width="100%" align="center" style="width: 100%; padding-top: .1rem; padding-right: .8rem; padding-bottom:.1rem; padding-left:0;">
                                            <div style="width: 100%; padding-top:12px; padding-right:12px; padding-bottom:12px padding-left:0;">
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <thead>
                                                        <tr>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;"><strong>Total Sakit</strong></td>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;">:</td>
                                                            <td align="right" style="padding: .1rem; font-size:.8rem;"><span id="total-sakit"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;"><strong>Total Alfa</strong></td>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;">:</td>
                                                            <td align="right" style="padding: .1rem; font-size:.8rem;"><span id="total-alfa"></span></td>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </td>
                                        <td align="left" width="100%" align="center" style="width: 100%; padding-top: .1rem; padding-right: .8rem; padding-bottom:.1rem; padding-left:0;">
                                            <div style="width: 100%; padding-top:12px; padding-right:12px; padding-bottom:12px padding-left:0;">
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <thead>
                                                        <tr>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;"><strong>Total Cuti</strong></td>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;">:</td>
                                                            <td align="right" style="padding: .1rem; font-size:.8rem;"><span id="total-cuti"></span></td>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div style="width: 100%; margin-top: 1rem;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <thead width="100%">
                                    <tr align="center" style="width=100%; background-color: #169870;">
                                        <td style="padding: .5rem; color: #fff; font-size:.8rem;">
                                            <strong>GAJI POKOK & TUNJANGAN TETAP</strong>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div style="width: 100%; margin-top: .3rem;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <thead style="width: 100%;">
                                    <tr>
                                        <td align="left" width="100%" style="width: 100%; padding-top: .1rem; padding-right: .8rem; padding-bottom:.1rem; padding-left:0;">
                                            <div style="width: 100%; padding-top:12px; padding-right:12px; padding-bottom:12px padding-left:0;">
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <thead>
                                                        <tr>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;">Gaji Pokok</td>
                                                            <td align="right" style="padding: .1rem; font-size:.8rem;"><span id="gaji-pokok">Rp 0.000.000</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;">Tunjangan Jabatan</td>
                                                            <td align="right" style="padding: .1rem; font-size:.8rem;"><span id="tunj-jabatan">Rp 0.000.000</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;">Tunjangan Keahlian</td>
                                                            <td align="right" style="padding: .1rem; font-size:.8rem;"><span id="tunj-keahlian">Rp 0.000.000</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;"></td>
                                                            <td align="right" style="padding: .1rem; font-size:.8rem;">
                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                    <thead>
                                                                        <tr>
                                                                            <td align="right">
                                                                                +
                                                                                <table width="100%" border="1" cellspacing="0" cellpadding="0" style="border-bottom-width: 1px; border-top-width: 0; border-left-width: 0; border-right-width: 0;
                                                                                border-color: #000000;
                                                                                ">
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </thead>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;"><strong>Total Gaji Pokok + Tunjangan</strong></td>
                                                            <td align="right" style="padding: .1rem; font-size:.8rem;"><strong id="total-gaji-pokok">Rp 0.000.000</strong></td>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div style="width: 100%; margin-top: 1rem;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <thead width="100%">
                                    <tr align="center" style="width=100%; background-color: #169870;">
                                        <td style="padding: .5rem; color: #fff; font-size:.8rem;">
                                            <strong>TUNJANGAN LAINNYA</strong>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div style="width: 100%; margin-top: .3rem;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <thead style="width: 100%;">
                                    <tr>
                                        <td align="left" width="100%" style="width: 100%; padding-top: .1rem; padding-right: .8rem; padding-bottom:.1rem; padding-left:0;">
                                            <div style="width: 100%; padding-top:12px; padding-right:12px; padding-bottom:12px padding-left:0;">
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <thead>
                                                        <tr>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;">Tunjangan Transport Atau Kehadiran</td>
                                                            <td align="right" style="padding: .1rem; font-size:.8rem;"><span id="tunj-transport">Rp 0.000.000</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;">Tunjangan Komunikasi</td>
                                                            <td align="right" style="padding: .1rem; font-size:.8rem;"><span id="tunj-komunikasi">Rp 0.000.000</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;">Lembur</td>
                                                            <td align="right" style="padding: .1rem; font-size:.8rem;"><span id="lembur">Rp 0.000.000</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;">Tambahan Lainnya</td>
                                                            <td align="right" style="padding: .1rem; font-size:.8rem;"><span id="tamb-lainnya">Rp 0.000.000</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;"></td>
                                                            <td align="right" style="padding: .1rem; font-size:.8rem;">
                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                    <thead>
                                                                        <tr>
                                                                            <td align="right">
                                                                                +
                                                                                <table width="100%" border="1" cellspacing="0" cellpadding="0" style="border-bottom-width: 1px; border-top-width: 0; border-left-width: 0; border-right-width: 0;
                                                                                border-color: #000000;
                                                                                ">
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </thead>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;"><strong>Total Bruto</strong></td>
                                                            <td align="right" style="padding: .1rem; font-size:.8rem;"><strong id="total-bruto">Rp 0.000.000</strong></td>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div style="width: 100%; margin-top: 1rem;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <thead width="100%">
                                    <tr align="center" style="width=100%; background-color: #169870;">
                                        <td style="padding: .5rem; color: #fff; font-size:.8rem;">
                                            <strong>POTONGAN</strong>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div style="width: 100%; margin-top: .3rem;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <thead style="width: 100%;">
                                    <tr>
                                        <td align="left" width="100%" style="width: 100%; padding-top: .1rem; padding-right: .8rem; padding-bottom:.1rem; padding-left:0;">
                                            <div style="width: 100%; padding-top:12px; padding-right:12px; padding-bottom:12px padding-left:0;">
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <thead>
                                                        <tr>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;">Alfa</td>
                                                            <td align="right" style="padding: .1rem; font-size:.8rem;"><span id="pot-alfa">Rp 0.000.000</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;">Ijin</td>
                                                            <td align="right" style="padding: .1rem; font-size:.8rem;"><span id="pot-ijin">Rp 0.000.000</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;">Potongan Lainnya</td>
                                                            <td align="right" style="padding: .1rem; font-size:.8rem;"><span id="pot-lainnya">Rp 0.000.000</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;">BPJS TK Karyawan</td>
                                                            <td align="right" style="padding: .1rem; font-size:.8rem;"><span id="pot-bpjs-tk">Rp 0.000.000</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;">BPJS JP Karyawan</td>
                                                            <td align="right" style="padding: .1rem; font-size:.8rem;"><span id="pot-bpjs-jp">Rp 0.000.000</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;">BPJS Kesehatan Karyawan</td>
                                                            <td align="right" style="padding: .1rem; font-size:.8rem;"><span id="pot-bpjs-kesehatan">Rp 0.000.000</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;"></td>
                                                            <td align="right" style="padding: .1rem; font-size:.8rem;">
                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                    <thead>
                                                                        <tr>
                                                                            <td align="right">
                                                                                +
                                                                                <table width="100%" border="1" cellspacing="0" cellpadding="0" style="border-bottom-width: 1px; border-top-width: 0; border-left-width: 0; border-right-width: 0;
                                                                                border-color: #000000;
                                                                                ">
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </thead>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;"><strong>Total Potongan</strong></td>
                                                            <td align="right" style="padding: .1rem; font-size:.8rem;"><strong id="total-potongan">Rp 0.000.000</strong></td>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div style="width: 100%; margin-top: 1rem;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <thead width="100%">
                                    <tr align="right" style="width=100%; background-color: #169870;">
                                        <td align="right" style="padding: .5rem; color: #fff; font-size:.8rem;">
                                            <strong>TOTAL YANG DI TERIMA KARYAWAN</strong>
                                        </td>
                                        <td align="right" style="padding: .5rem; color: #fff; font-size:.8rem;">
                                            <strong id="total-yang-di-terima">Rp 0.000.000</strong>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div style="width: 100%; padding-top: .5rem; padding-bottom: 2.5rem;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <thead style="width: 100%;">
                                    <tr>
                                        <td align="left" width="100%" style="width: 100%; padding-top: .1rem; padding-right: .8rem; padding-bottom:.1rem; padding-left:0;">
                                            <div style="width: 100%; padding-top:12px; padding-right:12px; padding-bottom:12px padding-left:0;">
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <thead>
                                                        <tr>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;">*  Catatan (Lain-lain)
                                                            </td>
                                                            <td align="right" style="padding: .1rem; font-size:.8rem;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;">BPJS TK Perusahaan yang dibayarkan</td>
                                                            <td align="right" style="padding: .1rem; font-size:.8rem;"><span id="perusahaan-tk">Rp 0.000.000</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;">BPJS JP Perusahaan yang dibayarkan</td>
                                                            <td align="right" style="padding: .1rem; font-size:.8rem;"><span id="perusahaan-jp">Rp 0.000.000</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="padding: .1rem; font-size:.8rem;">BPJS Kesehatan yang dibayarkan perusahaan</td>
                                                            <td align="right" style="padding: .1rem; font-size:.8rem;"><span id="perusahaan-bpjs">Rp 0.000.000</span></td>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div style="width: 100%; margin-bottom: 3.5rem;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <thead width="100%">
                                    <tr align="center" style="width=100%;">
                                        <td style="padding: .5rem; color: #fff; font-size:.8rem;">
                                            <strong></strong>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </td>
                </tr>
            </thead>
        </table>
    </div>
    <script src="{{ asset('js/crypto-js.js') }}"></script>
    <script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            const encryptedDataUser = localStorage.getItem('encryptedDataUser');
            const decryptedBytes = CryptoJS.AES.decrypt(encryptedDataUser, '{{ env('APP_KEY') }}');
            const decryptedDataUser = JSON.parse(decryptedBytes.toString(CryptoJS.enc.Utf8));
            var username = decryptedDataUser.username;
            var password = decryptedDataUser.password;
            var idPeriode = decryptedDataUser.id_periode;
            var idKarywan = decryptedDataUser.id_karyawan;

            const dataAPI = {
                username: username,
                password: password,
                id_periode: idPeriode,
                id_karyawan: idKarywan
            };

            $.ajax({
                url: 'https://lokahr.salokapark.app/api/get_karyawan_byID?id_karyawan='+username,
                type: 'GET',
                success: function(response){
                    if(response.status == 'success'){
                        console.log(response);
                        $('#nip').text(response.data[0].username);
                        $('#nama').text(response.data[0].name);
                        $('#departemen').text(response.data[0].departemen);
                        $('#sub-dep').text(response.data[0].sub_departemen);
                        $('#jabatan').text(response.data[0].grade);
                    }
                }
            });

            // $.ajax({
            //     url: 'http://192.168.0.75:8099/api/gajiku?username='+username+'&password='+password+'&id_periode='+idPeriode+'&id_karyawan='+idKarywan,
            //     type: 'POST',
            //     success: function(response){
            //         if(response.status == 'success'){
            //             console.log(response.status);
            //             console.log(response.message);

            //             const dataKaryawan = response.gajiku.karyawan;
            //             const dataAbsensi = response.gajiku.kehadiran_karyawan;
            //             const detailGaji = response.gajiku.karyawan_gaji;

            //             dataGaji = response.gajiku;

            //             $('#periode').text(dataKaryawan.periode);
            //             $('#nip').text(dataKaryawan.nik);
            //             $('#nama').text(dataKaryawan.nama);
            //             $('#departemen').text(dataKaryawan.departemen);
            //             $('#sub-dep').text(dataKaryawan.subDepartemen);
            //             $('#jabatan').text(dataKaryawan.jabatan);
            //             $('#no-rek').text(dataKaryawan.noRekening);

            //             $('#total-masuk').text(dataAbsensi.totMasuk);
            //             $('#total-libur').text(dataAbsensi.totLibur);
            //             $('#total-izin').text(dataAbsensi.totIzin);
            //             $('#total-ph').text(dataAbsensi.totPh);
            //             $('#total-sakit').text(dataAbsensi.totSakit);
            //             $('#total-alfa').text(dataAbsensi.totAlfa);
            //             $('#total-cuti').text(dataAbsensi.totCuti);

            //             $('#gaji-pokok').text('Rp ' + parseInt(detailGaji[0].nominal));
            //             $('#tunj-jabatan').text('Rp ' + parseInt(detailGaji[1].nominal));
            //             $('#tunj-keahlian').text('Rp ' + parseInt(detailGaji[2].nominal));
            //             var totGajiPokok = parseInt(detailGaji[0].nominal) + parseInt(detailGaji[1].nominal) + parseInt(detailGaji[2].nominal);
            //             $('#total-gaji-pokok').text('Rp ' + totGajiPokok);

            //             $('#tunj-transport').text('Rp ' + parseInt(detailGaji[3].nominal));
            //             $('#tunj-komunikasi').text('Rp '+ parseInt(detailGaji[4].nominal));
            //             $('#lembur').text('Rp ' + parseInt(detailGaji[5].nominal));
            //             $('#tamb-lainnya').text('Rp '+ parseInt(detailGaji[6].nominal));
            //             var totalTambahan = parseInt(detailGaji[3].nominal) + parseInt(detailGaji[4].nominal) + parseInt(detailGaji[5].nominal) + parseInt(detailGaji[6].nominal);
            //             $('#total-bruto').text('Rp ' + totalTambahan);

            //             $('#pot-alfa').text('Rp ' + parseInt(detailGaji[9].nominal));
            //             $('#pot-ijin').text('Rp ' + parseInt(detailGaji[10].nominal));
            //             $('#pot-lainnya').text('Rp ' + parseInt(detailGaji[11].nominal));
            //             $('#pot-bpjs-tk').text('Rp ' + parseInt(detailGaji[13].nominal));
            //             $('#pot-bpjs-jp').text('Rp ' + parseInt(detailGaji[15].nominal));
            //             $('#pot-bpjs-kesehatan').text('Rp ' + parseInt(detailGaji[17].nominal));
            //             var totalPotongan = parseInt(detailGaji[9].nominal) + parseInt(detailGaji[10].nominal) + parseInt(detailGaji[11].nominal) + parseInt(detailGaji[13].nominal) + parseInt(detailGaji[15].nominal) + parseInt(detailGaji[17].nominal);
            //             $('#total-potongan').text('Rp ' + totalPotongan);
            //             var totalBruto = totGajiPokok + totalTambahan;
            //             var totalNetto = totalBruto - totalPotongan;
            //             $('#total-yang-di-terima').text('Rp ' + totalNetto);
            //             $('#perusahaan-tk').text('Rp ' + parseInt(detailGaji[12].nominal));
            //             $('#perusahaan-jp').text('Rp ' + parseInt(detailGaji[14].nominal));
            //             $('#perusahaan-bpjs').text('Rp '+ parseInt(detailGaji[16].nominal));
            //         }
            //     },
            //     error : function(){
            //         alert('Terjadi kesalahan saat mengambil data dari API');
            //     }
            // });

            if(dataAPI){
                $.ajax({
                    type: 'POST',
                    url: '/generate-pdf',
                    data: { data: dataAPI },
                    success: function(response) {
                        console.log('Server response:', response);
                    },
                    error: function(error) {
                        console.error('Error:', error);
                    }
                });
            }else{
                console.log('Tidak Mempunyai Data');
            }
        });
    </script>
</body>
</html>