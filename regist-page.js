const nextBtn = document.getElementById('regist-page');
const contentDiv = document.getElementById('content');

nextBtn.addEventListener('click', function() {

  fetch('display1.php')
    .then(response => response.text())
    .then(text => {
   
      contentDiv.innerHTML = text;
    })
    .catch(error => {
      console.error('Failed to fetch next content:', error);
    });
});