var existingContent = document.getElementById('wel');
var newContent = document.getElementById('content');
var showNewContentBtn = document.getElementById('dash-page');

function showNewContent() {
  existingContent.style.visibility = 'hidden';
  newContent.style.display = 'block';
}

showNewContentBtn.addEventListener('click', showNewContent);