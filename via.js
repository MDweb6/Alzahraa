let spanID = document.getElementById("dagen");
let datum = new Date();
let dagen = datum.getDay();

let veckodagar = ["Söndag", "Måndag", "Tisdag", "Onsdag", "Torsdag", "Fredag", "Lördag"];
let veckodag = veckodagar[dagen];

  spanID.innerText = `"${veckodag}"`;  // <-- detta ger "Måndag"
