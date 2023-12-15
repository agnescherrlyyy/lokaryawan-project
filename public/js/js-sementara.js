var tglAmbilKomplemen;
var priceKomplemen100;
var priceKomplemen50;
var valueTicketNormal;
var valueTicketSetengah;
var pricePerTicketNormal;
var pricePerTicketSetengah;

$(document).ready(function () {
    // Decrypt data from local storage
    const decryptedFromData = decryptData('encryptedFromData');
    const decryptedDateKomplemen = decryptData('encryptedDateCalender');
    tglAmbilKomplemen = JSON.stringify(decryptedDateKomplemen);

    // Fetch data from the API
    fetchPriceMasterKomplement();

    // Initialize variables
    initializeVariables();

    // Handle calendar click event
    $('#calendar').click(function (e) {
        e.preventDefault();
        tglAmbilKomplemen = JSON.stringify(decryptedDateKomplemen);
        resetTicketValues();
    });

    // Handle kode booking click event
    $('#kode-booking').click(function (e) {
        e.preventDefault();
        window.location.href = "/tiket/kodebookingku";
    });

    // Check if username is available
    if (decryptedFromData.username) {
        // Fetch complements data from the API
        fetchComplemenData();
    } else {
        alert('ID Karyawan tidak tersedia');
    }
});

function decryptData(key) {
    const encryptedData = localStorage.getItem(key);
    const decryptedBytes = CryptoJS.AES.decrypt(encryptedData, '{{ env('APP_KEY') }}');
    return JSON.parse(decryptedBytes.toString(CryptoJS.enc.Utf8));
}

function fetchPriceMasterKomplement() {
    $.ajax({
        url: 'http://192.168.0.75:8099/api/get_list_price_master_komplement?tanggal=' + tglAmbilKomplemen,
        type: 'GET',
        success: function (response) {
            if (response.status === 'success') {
                updatePriceElements(response.data[0], response.data[1]);
            }
        }
    });
}

function updatePriceElements(komplemen100, komplemen50) {
    $('#type-ticket').text(komplemen100.komplement).data('id', komplemen100.ticket_id);
    $('#ket-ticekt').text(komplemen100.komplement);
    $('#price-ticket').text(formatRupiah('0')).data('id', komplemen100.ticket_price_id);
    priceKomplemen100 = komplemen100.price_unit;

    $('#type-ticket-setengah').text(komplemen50.komplement).data('id', komplemen50.ticket_id);
    $('#ket-ticekt-setengah').text(komplemen50.komplement);
    $('#price-ticket-setengah').text(formatRupiah('0')).data('id', komplemen50.ticket_price_id);
    priceKomplemen50 = komplemen50.price_unit;
}

function initializeVariables() {
    const nowYears = new Date().getFullYear();
    valueTicketNormal = $("#value-ticket-normal");
    valueTicketSetengah = $("#value-ticket-setengah");
    pricePerTicketNormal = priceKomplemen100;
    pricePerTicketSetengah = priceKomplemen50;
}

function resetTicketValues() {
    valueTicketNormal.text(0);
    valueTicketSetengah.text(0);
}

function fetchComplemenData() {
    const username = decryptedFromData.username;
    const nowYears = new Date().getFullYear();

    $.ajax({
        url: '{{ env('APP_SERVICE') }}get_komplemen?id_karyawan=' + username + '&tahun=' + nowYears,
        type: 'GET',
        success: function (response) {
            if (response.status === 'success') {
                updateComplemenElements(response.data[0], response.data[1]);
            }
        },
        error: function () {
            alert('Terjadi kesalahan saat mengambil data dari API');
        }
    });
}

function updateComplemenElements(tiketNormal, tiketSetengah) {
    $('#komplemen100').text(tiketNormal.sisa_komplement);
    $('#komplemen50').text(tiketSetengah.sisa_komplement);

    // Attach click events for ticket buttons
    attachTicketButtonClickEvents(tiketNormal, tiketSetengah);
}

function attachTicketButtonClickEvents(tiketNormal, tiketSetengah) {
    const minusButtonNormal = $("#minus-ticket-normal");
    const plusButtonNormal = $("#plus-ticket-normal");
    const minusButtonSetengah = $("#minus-ticket-setengah");
    const plusButtonSetengah = $("#plus-ticket-setengah");

    plusButtonNormal.click(function () {
        handleTicketButtonClick(valueTicketNormal, tiketNormal, priceKomplemen100, '#price-ticket');
    });

    minusButtonNormal.click(function () {
        handleTicketButtonClick(valueTicketNormal, tiketNormal, priceKomplemen100, '#price-ticket');
    });

    plusButtonSetengah.click(function () {
        handleTicketButtonClick(valueTicketSetengah, tiketSetengah, priceKomplemen50, '#price-ticket-setengah');
    });

    minusButtonSetengah.click(function () {
        handleTicketButtonClick(valueTicketSetengah, tiketSetengah, priceKomplemen50, '#price-ticket-setengah');
    });
}

function handleTicketButtonClick(valueElement, tiketData, priceUnit, priceElementId) {
    const sisaTiket = parseInt(tiketData.sisa_komplement);
    const currentTicketValue = parseInt(valueElement.text());

    if (currentTicketValue < sisaTiket) {
        const newTicketValue = currentTicketValue + 1;
        valueElement.text(newTicketValue);

        const qtyTicket = newTicketValue * priceUnit;
        $(priceElementId).text(formatRupiah(qtyTicket));

        updateTotalQuantity();
    }
}

function updateTotalQuantity() {
    const quantityNormal = parseInt(valueTicketNormal.text());
    const quantitySetengah = parseInt(valueTicketSetengah.text());
    const priceTotalNormal = quantityNormal * pricePerTicketNormal;
    const priceTotalSetengah = quantitySetengah * pricePerTicketSetengah;
    const allPrice = priceTotalNormal + priceTotalSetengah;

    $('#jumlah-dibayar').text(formatRupiah(allPrice));
}

function formatRupiah(nominal) {
    return 'Rp ' + parseFloat(nominal).toLocaleString('id-ID');
}
