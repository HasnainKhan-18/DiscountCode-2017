// Modal close button <start>
var close = document.querySelector('.closed');
var close = document.querySelector('.closes');
var modal = document.querySelector('.cpopup');
var cpopov = document.querySelector(".cpopov")
// Modal close button <end>

// Function for close modal <start>//
function closeModal() {
    modal.style.display = "none";
}
// Function for close modal <end> //

// listen for close button onclick <start> //
if(close)
    close.addEventListener("click", closeModal );
// listen for close button onclick <end> //

//listen for outside click <start> //
if(cpopov)
    cpopov.addEventListener("click", closeModal)
//listen for outside click <end> //