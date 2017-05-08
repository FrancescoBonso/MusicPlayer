
// <a href="https://youtube.com/..." onclick="loadLink(this)"></a>
// <iframe id="YouTubeFrame"></iframe>

function loadLink(t){
  document.getElementById('YouTubeFrame').setAttribute('src', t.getAttribute('href'));
};
