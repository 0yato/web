let table_data = document.querySelectorAll('td');
let hover_sound = document.querySelectorAll(".sound");

table_data.forEach(element => {
    element.addEventListener('mouseenter', function() {
        let audioElement = element.firstChild;
            audioElement.play();
        
    });
});
