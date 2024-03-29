<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slip Gaji</title>
</head>

<body
    style="font-family: 'Poppins', sans-serif; margin: 0.0in -0.2in 0.0in -0.2in; padding: 0; box-sizing: border-box; ">
    <div style="width: 100%; min-height: 100vh;">
        <table width="100%" border="2" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <td width="100%" style="padding-left: 1rem; padding-right: 1rem;">
                        <div style="width: 100%; margin-top: .3rem;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <thead style="width: 100%;">
                                    <tr>
                                        <td align="left" width="100%"
                                            style="width: 100%; padding-top: .1rem; padding-right: 0; padding-bottom:.1rem; padding-left:0;">
                                            <div
                                                style="width: 100%; padding-top:12px; padding-right:12px; padding-bottom:12px padding-left:0;">
                                                <table width="100%" border="1" cellspacing="0" cellpadding="0"
                                                    style="border-bottom-width: 2px; border-top-width: 0; border-left-width: 0; border-right-width: 0;">
                                                    <thead>
                                                        <tr>
                                                            <td align="left"
                                                                style="padding-left: 1.5rem; padding-bottom: 2rem; font-size:.8rem;">
                                                                <img src="{{ public_path('img/logoPIP.png') }}"
                                                                    alt="Logo PIP" style="width: 5rem; height: 5rem;">
                                                            </td>
                                                            <td align="center"
                                                                style="padding-left: 5rem; padding-bottom: 2rem; padding-right: 1rem; font-size:.8rem;">
                                                                <table width="100%" border="0" cellspacing="0"
                                                                    cellpadding="0">
                                                                    <thead>
                                                                        <tr>
                                                                            <td align="center" style="padding: .2rem;">
                                                                                <strong style=" font-size: 1.5rem;">SLIP
                                                                                    THR</strong>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="center" style="padding: .2rem;">
                                                                                <strong style=" font-size: .8rem;">PT.
                                                                                    PANORAMA INDAH PERMAI</strong>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="center" style="padding: .2rem;">
                                                                                <strong style=" font-size: .8rem;">Jl.
                                                                                    Fatmawati no. 154, Lopait,
                                                                                    Tuntang</strong>
                                                                            </td>
                                                                        </tr>
                                                                    </thead>
                                                                </table>
                                                            </td>
                                                            <td align="right"
                                                                style="padding: 1.5rem; padding-bottom: 2rem; font-size:.8rem;">
                                                                <img src="{{ public_path('img/logosaloka-gaji.png') }}"
                                                                    alt="Logo Saloka"
                                                                    style="width: 6rem; height: 3rem;">
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
                                            <div
                                                style="width: 100%; padding-top:12px; padding-right:12px; padding-bottom:12px padding-left:0;">
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <thead>
                                                        <tr align="left">
                                                            <td style="padding: .1rem; font-size:.8rem;">
                                                                <strong>Peridode</strong>
                                                            </td>
                                                            <td style="padding: .1rem; font-size:.8rem;">:</td>
                                                            <td style="padding: .1rem; font-size:.8rem;"><strong
                                                                    id="periode">{{ $detail_karyawan->periode }}</strong>
                                                            </td>
                                                        </tr>
                                                        <tr align="left">
                                                            <td style="padding: .1rem; font-size:.8rem;">
                                                                <strong>NIP</strong>
                                                            </td>
                                                            <td style="padding: .1rem; font-size:.8rem;">:</td>
                                                            <td style="padding: .1rem; font-size:.8rem;"><span
                                                                    id="nip">{{ $detail_karyawan->nik }}</span>
                                                            </td>
                                                        </tr>
                                                        <tr align="left">
                                                            <td style="padding: .1rem; font-size:.8rem;">
                                                                <strong>Nama</strong>
                                                            </td>
                                                            <td style="padding: .1rem; font-size:.8rem;">:</td>
                                                            <td style="padding: .1rem; font-size:.8rem;"><span
                                                                    id="nama">{{ $detail_karyawan->nama }}</span>
                                                            </td>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </td>
                                        <td align="center">
                                            <div
                                                style="width: 100%; padding-top:12px; padding-right:12px; padding-bottom:12px padding-left:0;">
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <thead>
                                                        <tr align="left"
                                                            style="padding-top:12px; padding-right:12px; padding-bottom:12px padding-left:0;">
                                                            <td style="padding: .1rem; font-size:.8rem;">
                                                                <strong>Departement</strong>
                                                            </td>
                                                            <td style="padding: .1rem; font-size:.8rem;">:</td>
                                                            <td style="padding: .1rem; font-size:.8rem;"><span
                                                                    id="departemen">{{ $detail_karyawan->departemen }}</span>
                                                            </td>
                                                        </tr>
                                                        <tr align="left"
                                                            style="padding-top:12px; padding-right:12px; padding-bottom:12px padding-left:0;">
                                                            <td style="padding: .1rem; font-size:.8rem;"><strong>Sub
                                                                    Departemen</strong></td>
                                                            <td style="padding: .1rem; font-size:.8rem;">:</td>
                                                            <td style="padding: .1rem; font-size:.8rem;"><span
                                                                    id="sub-dep">{{ $detail_karyawan->subDepartemen }}</span>
                                                            </td>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </td>
                                        <td align="right">
                                            <div
                                                style="width: 100%; padding-top:12px; padding-right:12px; padding-bottom:12px padding-left:0;">
                                                <table width="100%" border="0" cellspacing="0"
                                                    cellpadding="0">
                                                    <thead>
                                                        <tr align="right"
                                                            style="padding-top:12px; padding-right:12px; padding-bottom:12px padding-left:0;">
                                                            <td style="padding: .1rem; font-size:.8rem;">
                                                                <strong>Jabatan</strong>
                                                            </td>
                                                            <td style="padding: .1rem; font-size:.8rem;">:</td>
                                                            <td style="padding: .1rem; font-size:.8rem;"><span
                                                                    id="jabatan">{{ $detail_karyawan->jabatan }}</span>
                                                            </td>
                                                        </tr>
                                                        <tr align="right"
                                                            style="padding-top:12px; padding-right:12px; padding-bottom:12px padding-left:0;">
                                                            <td style="padding: .1rem; font-size:.8rem;"><strong>Nomor
                                                                    Rekening</strong></td>
                                                            <td style="padding: .1rem; font-size:.8rem;">:</td>
                                                            <td style="padding: .1rem; font-size:.8rem;"><span
                                                                    id="no-rek">{{ $detail_karyawan->noRekening }}</span>
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
                                        <td align="left" width="100%"
                                            style="width: 100%; padding-top: .1rem; padding-right: .8rem; padding-bottom:.1rem; padding-left:0;">
                                            <div
                                                style="width: 100%; padding-top:12px; padding-right:12px; padding-bottom:12px padding-left:0;">
                                                <table width="100%" border="0" cellspacing="0"
                                                    cellpadding="0">
                                                    <thead>
                                                        <tr>
                                                            <td align="left"
                                                                style="padding: .1rem; font-size:.8rem;">Gaji Pokok
                                                            </td>
                                                            <td align="right"
                                                                style="padding: .1rem; font-size:.8rem;"><span
                                                                    id="gaji-pokok">{{ $detail_thrku[0]->nominal !== null ? number_format($detail_thrku[0]->nominal, 2, ',', '.') : number_format(0, 2, ',', '.') }}</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left"
                                                                style="padding: .1rem; font-size:.8rem;">Tunjangan
                                                                Jabatan</td>
                                                            <td align="right"
                                                                style="padding: .1rem; font-size:.8rem;"><span
                                                                    id="tunj-jabatan">{{ $detail_thrku[1]->nominal !== null ? number_format($detail_thrku[1]->nominal, 2, ',', '.') : number_format(0, 2, ',', '.') }}</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left"
                                                                style="padding: .1rem; font-size:.8rem;">Tunjangan
                                                                Keahlian</td>
                                                            <td align="right"
                                                                style="padding: .1rem; font-size:.8rem;"><span
                                                                    id="tunj-keahlian">{{ $detail_thrku[2]->nominal !== null ? number_format($detail_thrku[2]->nominal, 2, ',', '.') : number_format(0, 2, ',', '.') }}</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left"
                                                                style="padding: .1rem; font-size:.8rem;"></td>
                                                            <td align="right"
                                                                style="padding: .1rem; font-size:.8rem;">
                                                                <table width="100%" border="0" cellspacing="0"
                                                                    cellpadding="0">
                                                                    <thead>
                                                                        <tr>
                                                                            <td align="right">
                                                                                +
                                                                                <table width="100%" border="1"
                                                                                    cellspacing="0" cellpadding="0"
                                                                                    style="border-bottom-width: 1px; border-top-width: 0; border-left-width: 0; border-right-width: 0;
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
                                                            <td align="left"
                                                                style="padding: .1rem; font-size:.8rem;"><strong>Total
                                                                    Gaji Pokok + Tunjangan</strong></td>
                                                            <td align="right"
                                                                style="padding: .1rem; font-size:.8rem;">
                                                                <strong id="total-gaji-pokok">Rp
                                                                    {{ number_format(
                                                                        ($detail_thrku[0]->nominal !== null ? $detail_thrku[0]->nominal : 0) +
                                                                            ($detail_thrku[1]->nominal !== null ? $detail_thrku[1]->nominal : 0) +
                                                                            ($detail_thrku[2]->nominal !== null ? $detail_thrku[2]->nominal : 0),
                                                                        2,
                                                                        ',',
                                                                        '.',
                                                                    ) }}
                                                                </strong>
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
                                        <td align="left" width="100%"
                                            style="width: 100%; padding-top: .1rem; padding-right: .8rem; padding-bottom:.1rem; padding-left:0;">
                                            <div
                                                style="width: 100%; padding-top:12px; padding-right:12px; padding-bottom:12px padding-left:0;">
                                                <table width="100%" border="0" cellspacing="0"
                                                    cellpadding="0">
                                                    <thead>
                                                        <tr>
                                                            <td align="left"
                                                                style="padding: .1rem; font-size:.8rem;">Tunjangan
                                                                Transport Atau Kehadiran</td>
                                                            <td align="right"
                                                                style="padding: .1rem; font-size:.8rem;"><span
                                                                    id="tunj-transport">{{ number_format(0, 2, ',', '.') }}</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left"
                                                                style="padding: .1rem; font-size:.8rem;">Tunjangan
                                                                Komunikasi</td>
                                                            <td align="right"
                                                                style="padding: .1rem; font-size:.8rem;"><span
                                                                    id="tunj-komunikasi">{{ number_format(0, 2, ',', '.') }}</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left"
                                                                style="padding: .1rem; font-size:.8rem;">Lembur</td>
                                                            <td align="right"
                                                                style="padding: .1rem; font-size:.8rem;"><span
                                                                    id="lembur">{{ number_format(0, 2, ',', '.') }}</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left"
                                                                style="padding: .1rem; font-size:.8rem;">Tambahan
                                                                Lainnya</td>
                                                            <td align="right"
                                                                style="padding: .1rem; font-size:.8rem;"><span
                                                                    id="tamb-lainnya">{{ number_format(0, 2, ',', '.') }}</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left"
                                                                style="padding: .1rem; font-size:.8rem;"></td>
                                                            <td align="right"
                                                                style="padding: .1rem; font-size:.8rem;">
                                                                <table width="100%" border="0" cellspacing="0"
                                                                    cellpadding="0">
                                                                    <thead>
                                                                        <tr>
                                                                            <td align="right">
                                                                                +
                                                                                <table width="100%" border="1"
                                                                                    cellspacing="0" cellpadding="0"
                                                                                    style="border-bottom-width: 1px; border-top-width: 0; border-left-width: 0; border-right-width: 0;
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
                                                            <td align="left"
                                                                style="padding: .1rem; font-size:.8rem;"><strong>Total
                                                                    Bruto</strong>
                                                            </td>
                                                            <td align="right"
                                                                style="padding: .1rem; font-size:.8rem;">
                                                                <strong id="total-bruto">Rp
                                                                    {{ number_format(0, 2, ',', '.') }}
                                                                </strong>
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
                                        <td align="left" width="100%"
                                            style="width: 100%; padding-top: .1rem; padding-right: .8rem; padding-bottom:.1rem; padding-left:0;">
                                            <div
                                                style="width: 100%; padding-top:12px; padding-right:12px; padding-bottom:12px padding-left:0;">
                                                <table width="100%" border="0" cellspacing="0"
                                                    cellpadding="0">
                                                    <thead>
                                                        <tr>
                                                            <td align="left"
                                                                style="padding: .1rem; font-size:.8rem;">Alfa</td>
                                                            <td align="right"
                                                                style="padding: .1rem; font-size:.8rem;"><span
                                                                    id="pot-alfa">{{ number_format(0, 2, ',', '.') }}</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left"
                                                                style="padding: .1rem; font-size:.8rem;">Ijin</td>
                                                            <td align="right"
                                                                style="padding: .1rem; font-size:.8rem;"><span
                                                                    id="pot-ijin">{{ number_format(0, 2, ',', '.') }}</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left"
                                                                style="padding: .1rem; font-size:.8rem;">Potongan
                                                                Lainnya</td>
                                                            <td align="right"
                                                                style="padding: .1rem; font-size:.8rem;"><span
                                                                    id="pot-lainnya">{{ number_format(0, 2, ',', '.') }}</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left"
                                                                style="padding: .1rem; font-size:.8rem;">BPJS TK
                                                                Karyawan</td>
                                                            <td align="right"
                                                                style="padding: .1rem; font-size:.8rem;"><span
                                                                    id="pot-bpjs-tk">{{ number_format(0, 2, ',', '.') }}</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left"
                                                                style="padding: .1rem; font-size:.8rem;">BPJS JP
                                                                Karyawan</td>
                                                            <td align="right"
                                                                style="padding: .1rem; font-size:.8rem;"><span
                                                                    id="pot-bpjs-jp">{{ number_format(0, 2, ',', '.') }}</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left"
                                                                style="padding: .1rem; font-size:.8rem;">BPJS Kesehatan
                                                                Karyawan</td>
                                                            <td align="right"
                                                                style="padding: .1rem; font-size:.8rem;"><span
                                                                    id="pot-bpjs-kesehatan">{{ number_format(0, 2, ',', '.') }}</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left"
                                                                style="padding: .1rem; font-size:.8rem;"></td>
                                                            <td align="right"
                                                                style="padding: .1rem; font-size:.8rem;">
                                                                <table width="100%" border="0" cellspacing="0"
                                                                    cellpadding="0">
                                                                    <thead>
                                                                        <tr>
                                                                            <td align="right">
                                                                                +
                                                                                <table width="100%" border="1"
                                                                                    cellspacing="0" cellpadding="0"
                                                                                    style="border-bottom-width: 1px; border-top-width: 0; border-left-width: 0; border-right-width: 0;
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
                                                            <td align="left"
                                                                style="padding: .1rem; font-size:.8rem;"><strong>Total
                                                                    Potongan</strong>
                                                            </td>
                                                            <td align="right"
                                                                style="padding: .1rem; font-size:.8rem;">
                                                                <strong id="total-potongan">Rp
                                                                    {{ number_format(0, 2, ',', '.') }}
                                                                </strong>
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
                                <thead width="100%">
                                    <tr align="right" style="width=100%; background-color: #169870;">
                                        <td align="right" style="padding: .5rem; color: #fff; font-size:.8rem;">
                                            <strong>TOTAL YANG DI TERIMA KARYAWAN</strong>
                                        </td>
                                        <td align="right" style="padding: .5rem; color: #fff; font-size:.8rem;">
                                            <strong id="total-yang-di-terima">Rp
                                                {{ number_format(
                                                    ($detail_thrku[0]->nominal !== null ? $detail_thrku[0]->nominal : 0) +
                                                        ($detail_thrku[1]->nominal !== null ? $detail_thrku[1]->nominal : 0) +
                                                        ($detail_thrku[2]->nominal !== null ? $detail_thrku[2]->nominal : 0),
                                                    2,
                                                    ',',
                                                    '.',
                                                ) }}
                                                <span
                                                    style="padding: .5rem; color: #fff; font-size:.8rem;">{{ $detail_karyawan->tipeThr === '0' || $detail_karyawan->tipeThr === '2' || $detail_karyawan->tipeThr !== '1' ? 'THR Prorate' : '' }}</span>
                                            </strong>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div style="width: 100%; margin-bottom: 2rem;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <thead width="100%">
                                    <tr align="left" style="width=100%;">
                                        <td style="padding: .5rem; color: #000; font-size:.8rem;">
                                            <span style="font-style: italics;">{{ $title }}</span>
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
</body>

</html>
