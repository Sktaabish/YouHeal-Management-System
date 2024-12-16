var seconds = 0;
function displayseconds(){
    seconds +=1;
    document.getElementById("secondsdisplay").innerText="Wait For a "+ seconds +" seconds...";
}
setInterval(displayseconds, 1000);

function thankyou(){
    window.location="thankyou1.php";
}
setTimeout('thankyou()', 5500);