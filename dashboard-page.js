const nextBtn1 = document.getElementById('dash-page');
const contentDiv1 = document.getElementById('content');

nextBtn1.addEventListener('click', function() {

  fetch('/dashboard.php')
    .then(response => response.text())
    .then(text => {
   
      contentDiv1.innerHTML = text;
    })
    .catch(error => {
      console.error('Failed to fetch next content:', error);
    });
});