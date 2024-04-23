function getSamples() {
    var xhr = new XMLHttpRequest();

    xhr.open('POST', '/api/get_samples.php', true);
    xhr.onload = function () {
        var resp = JSON.parse(this.responseText);
        for(let sample of resp) {
            // this is our audio variable, no need for this to be on the page
            let audio = new Audio("https://retiu.me/sound/samples/"+sample['Path']);


            
            
            // here's our html
            let container = Object.assign(document.createElement("div"), {"className": "audio__container"});

            let title = Object.assign(document.createElement("h2"), {"innerText": sample['Name']});
            let description = Object.assign(document.createElement("p"), {"innerText": sample['Description']});
            let key = Object.assign(document.createElement("h5"), {"innerText": sample['BPMKey']});
            let dateofsample = Object.assign(document.createElement("div"), {"className": "sampledatelmao"});
            let descripclass = Object.assign(document.createElement("div"), {"className": "descriptionclass"});
            let sampledatelmao = Object.assign(document.createElement("p"), {"innerText": sample['Date']});
            let download = Object.assign(document.createElement("a"), {"href": "/sound/samples" + sample['Path']});
            // dateofsample.createElement("p"), {"innerText": sample['Date']};
            


            let player = Object.assign(document.createElement("div"), {"className": "audio__player"});
            let playbutton = Object.assign(document.createElement("div"), {"className": "audio__playpause", 
            /* we must use innerHTML here, else it'll treat it as text and just show the html plain on the page */
            "innerHTML": "<i class='fa-solid fa-play'>"});
            let downloadbutton = Object.assign(document.createElement("div"), {"className": "link__download", 
            /* we must use innerHTML here, else it'll treat it as text and just show the html plain on the page */
            "innerHTML": "<i class='fa-solid fa-download'>"});
        

            
            player.appendChild(playbutton);
            download.appendChild(downloadbutton);
            dateofsample.appendChild(sampledatelmao);
            descripclass.appendChild(description);

            container.appendChild(title);
            container.appendChild(player);
            container.appendChild(download);

            container.appendChild(key);
            container.appendChild(descripclass);
            container.appendChild(dateofsample);
            
            

            let playing = false;

            function stop() {
                audio.currentTime = 0;
                audio.pause();
                playing = false;
                playbutton.innerHTML = "<i class='fa-solid fa-play'>";
            }

            audio.onended = stop;
            // this detects when you click on the play "button"
            playbutton.addEventListener("click", function() {
                if(playing == false) {
                    // let's play
                    audio.play();
                    playing = true;
                    playbutton.innerHTML = "<i class='fa-solid fa-pause'>";
                } else {
                    // stop
                    audio.currentTime = 0;
                    audio.pause();
                    playing = false;
                    playbutton.innerHTML = "<i class='fa-solid fa-play'>";
                }
            })

            // this adds the html we just made onto the page itself
            // if we don't do this it'll never show up anywhere
            document.getElementById("audiolist").appendChild(container)
            
        }
    };
    xhr.send();
}

getSamples();