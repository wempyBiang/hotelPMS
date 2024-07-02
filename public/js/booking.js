const tanggalDari = document.getElementById("dari");
const tanggalSampai = document.getElementById("sampai");
const checkIn = document.getElementById("check_in");

let currentDate = new Date().toJSON().slice(0, 10);

tanggalDari.min = currentDate;
tanggalDari.addEventListener("change", function(){{
    let firstDate = new Date(currentDate);
    let secondDate = new Date(tanggalDari.value)
    console.log(firstDate)
    console.log(secondDate)
    if(firstDate < secondDate) {
        checkIn.disabled = true;
        console.log("ok")
    } else {
        checkIn.disabled = false;

    }
}})

tanggalSampai.min = currentDate;