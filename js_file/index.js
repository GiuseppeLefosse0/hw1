
fetch("piani.php").then(onResponse, onError).then(displayPiani);

function onResponse(response) {
    if(!response.ok) {
        console.log('Problema con la risposta');
        return null;
    }
    return response.json();
}

function onError(error) {
    console.log('Errore: '+ error);
}

function displayPiani(json){
    if(!json) {
        console.log('Nessun json ritornato');
        return;
    }
    console.log(json);


    const flexPiani = document.querySelector('.piani');

    //piano standard
    const month1=document.createElement('div');
    month1.classList.add('month');

    const img1=document.createElement('img');
    img1.src=json[0].immagine;

    const titolo1= document.createElement('span');
    titolo1.textContent=json[0].titolo;

    month1.appendChild(img1);
    month1.appendChild(titolo1);

    flexPiani.appendChild(month1);

    

    //piano da 3 mesi
    const month2=document.createElement('div');
    month2.classList.add('month');

    const img2=document.createElement('img');
    img2.src=json[1].immagine;

    const titolo2= document.createElement('span');
    titolo2.textContent=json[1].titolo;
    
    month2.appendChild(img2);
    month2.appendChild(titolo2);

    flexPiani.appendChild(month2);



    //piano da 6 mesi
    const month3=document.createElement('div');
    month3.classList.add('month');

    const img3=document.createElement('img');
    img3.src=json[2].immagine;

    const titolo3= document.createElement('span');
    titolo3.textContent=json[2].titolo;
    
    month3.appendChild(img3);
    month3.appendChild(titolo3);

    flexPiani.appendChild(month3);

    //nascondo la scritta di default (piano selezionato)
    const piano_sel=document.querySelector("#piano_sel");
    piano_sel.classList.add('hidden');

    //chiamata delle funzioni per aggiungere i piani al database
    //piano standard
    titolo1.addEventListener('click', aggiungiPiano1);
    function aggiungiPiano1(){

        const piano = {
            'Piano': '1 mese'
        }
    
        fetch('fetch_aggiungiPiano.php', {
            method: 'POST',
            headers: {
    
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(piano)}).then(handler).then(inserimentodb)
    
        function handler(response) {
            const ritorno = response.text();
            return ritorno;
        }   
    
        function inserimentodb(ritorno) {
            const a = ritorno;
            console.log(a);

            piano_sel.classList.remove('hidden');
            piano_sel.textContent='PIANO STANDARD SELEZIONATO';

            titolo1.removeEventListener('click', aggiungiPiano1);
            titolo2.addEventListener('click', aggiungiPiano2);
            titolo3.addEventListener('click', aggiungiPiano3);

        }
   
    }

    //piano da 3 mesi
    titolo2.addEventListener('click', aggiungiPiano2);
    function aggiungiPiano2(){

        const piano = {
            'Piano': '3 mesi'
        }
    
        fetch('fetch_aggiungiPiano.php', {
            method: 'POST',
            headers: {
    
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(piano)}).then(handler).then(inserimentodb)
    
        function handler(response) {
            const ritorno = response.text();
            return ritorno;
        }
    
        function inserimentodb(ritorno) {
            const a = ritorno;
            console.log(a);
            
            piano_sel.classList.remove('hidden');
            piano_sel.textContent='PIANO DA 3 MESI SELEZIONATO';

            titolo1.addEventListener('click', aggiungiPiano1);
            titolo2.removeEventListener('click', aggiungiPiano2);
            titolo3.addEventListener('click', aggiungiPiano3);
            
        }

        
    }

    //piano da 6 mesi
    titolo3.addEventListener('click', aggiungiPiano3);
    function aggiungiPiano3(){

        const piano = {
            'Piano': '6 mesi'
        }
    
        fetch('fetch_aggiungiPiano.php', {
            method: 'POST',
            headers: {
    
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(piano)}).then(handler).then(inserimentodb)
    
        function handler(response) {
            const ritorno = response.text();
            return ritorno;
        }
    
        function inserimentodb(ritorno) {
            const a = ritorno;
            console.log(a);

            piano_sel.classList.remove('hidden');
            piano_sel.textContent='PIANO DA 6 MESI SELEZIONATO';

            titolo1.addEventListener('click', aggiungiPiano1);
            titolo2.addEventListener('click', aggiungiPiano2);
            titolo3.removeEventListener('click', aggiungiPiano3);
        }

        
    }

}

