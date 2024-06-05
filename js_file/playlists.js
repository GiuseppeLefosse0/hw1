function click_leggi(event){
    event.preventDefault();
    const p = document.querySelector('#p1');
    if(p.classList.contains('hidden-p1')){
        p.classList.remove('hidden-p1');
    }
    else{
        p.classList.add('hidden-p1');
    }

}
const a = document.querySelector('.leggi-di-più');
a.addEventListener('click',click_leggi);






fetch("fetch_playlists.php").then(onResponse).then(jsonSpotify).catch(error => {
    console.error('Errore nel fetch:', error);
  });

function onResponse(response){
  console.log('Risposta Ricevuta');
  return response.json();
}

function jsonSpotify(json){
  console.log('JSON ricevuto');

  const playlistSection = document.querySelector('#playlist_view');
  
  if (!playlistSection) {
    console.error('Elemento #playlist_view non trovato nel DOM');
    return;
  }

  const playlists = json.playlists.items;
  if (!playlists || !Array.isArray(playlists)) {
    console.error('Struttura JSON non valida', playlists);
    return;
  }

  let num_results = playlists.length;
  if(num_results > 5) num_results = 5;

  for(let i = 0; i < num_results; i++){
    const playlist = playlists[i];

    const playlistContainer = document.createElement('div');
    playlistContainer.classList.add('playlist-item');
    
    const playlistImage = document.createElement('img');
    if (playlist.images[0] && playlist.images[0].url) {
      playlistImage.src = playlist.images[0].url;
    } else {
      console.error('URL immagine non trovato per la playlist', playlist);
    }
    playlistContainer.appendChild(playlistImage);
    
    const playlistName = document.createElement('span');
    playlistName.textContent = playlist.name;
    playlistContainer.appendChild(playlistName);
    
    playlistSection.appendChild(playlistContainer);
  }
}