const nextBtn2 = document.getElementById('appoint-page');
const contentDiv2 = document.getElementById('content');

nextBtn2.addEventListener('click', function() {

  fetch('display.php')
    .then(response => response.text())
    .then(text => {
   
      contentDiv2.innerHTML = text;
    })
    .catch(error => {
      console.error('Failed to fetch next content:', error);
    });
});