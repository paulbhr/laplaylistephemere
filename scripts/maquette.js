
// Helper function to display JavaScript value on HTML page.
function showResponse(response) {
  document.getElementById('result').innerHTML = '';
  for(x=0; x < response.items.length; x++) {
    console.log(response.items[x].id.videoId);
    document.getElementById('result').innerHTML += '<p>'+response.items[x].id.videoId+'</p><iframe type="text/html" width="640" height="360" src="http://www.youtube.com/embed/'+response.items[x].id.videoId+'" frameborder="0"></iframe>'
  }
}

// Called automatically when JavaScript client library is loaded.
function onClientLoad() {
    gapi.client.load('youtube', 'v3', onYouTubeApiLoad);
}

// Called automatically when YouTube API interface is loaded (see line 9).
function onYouTubeApiLoad() {
    // This API key is intended for use only in this lesson.
    // See https://goo.gl/PdPA1 to get a key for your own applications.
    gapi.client.setApiKey('AIzaSyDyf58Uxt_LoAm4GPZLi3UjiKNccML8awc');
}

function search() {
    // Use the JavaScript client library to create a search.list() API call.
    var request = gapi.client.youtube.search.list({
        maxResults: 3,
        part: 'snippet, id',
        q: document.getElementById('search').value,
    });

    // Send the request to the API server,
    // and invoke onSearchRepsonse() with the response.
    request.execute(onSearchResponse);
}

// Called automatically with the response of the YouTube API request.
function onSearchResponse(response) {
  console.log(response);
    showResponse(response);
}


function getRandomColor() {
    // kirupa.com
    // creating a random number between 0 and 255
    var r = Math.floor(Math.random()*256);
    var g = Math.floor(Math.random()*256);
    var b = Math.floor(Math.random()*256);

    // going from decimal to hex
    var hexR = r.toString(16);
    var hexG = g.toString(16);
    var hexB = b.toString(16);

    // making sure single character values are prepended with a "0"
    if (hexR.length == 1) {
        hexR = "0" + hexR;
    }

    if (hexG.length == 1) {
        hexG = "0" + hexG;
    }

    if (hexB.length == 1) {
        hexB = "0" + hexB;
    }

    // creating the hex value by concatenatening the string values
    var hexColor = "#" + hexR + hexG + hexB;
    return hexColor.toUpperCase();
}
