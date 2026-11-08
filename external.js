function showAudio(event) {
    // Prevents the page from jumping to the top
    event.preventDefault(); 
    
    // Finds the audio element
    let a = document.getElementById("Test_Audio");
    
    // Changes the audio player from hidden to visible
    a.style.display = "block"; 
    
    // Forces the browser to load the audio file
    a.load(); 
    
    // Automatically starts playing the music
    a.play(); 
}