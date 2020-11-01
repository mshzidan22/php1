var v = document.getElementById("video");
var videoObject = v.textContent.substring(132);
video = JSON.parse(videoObject);
var title, duration, img, streams;

var videoStream = {
    url: null,
    format: null,
    format_note: null,
    filesize_pretty: null,
    has_audio: false,
    has_video: false
};
var videos = new Array();
var audios = new Array();

if (video.body.status == false) {
    console.log("error send redirect");
    window.history.back();

} else {

    title = video.body.title;
    duration = secondsToMinutes(video.body.duration);
    img = video.body.thumbnail;
    streams = video.body.streams;

    streams.forEach(fillVideoSteamObject);
}

function fillVideoSteamObject(stream) {
    if (stream.has_audio && !stream.has_video) {
        //only audio
        audios.push(stream);
    } else if (stream.has_audio && stream.has_video) {
        videos.push(stream);
    }
}

function secondsToMinutes(time) {
    return Math.floor(time / 60) + ':' + Math.floor(time % 60);
}


function validateForm() {
    var url = document.forms["form"]["url"].value;
    var pattern = /^(?:https?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))((\w|-){11})(?:\S+)?$/;
    if (!pattern.test(url)) {
        var error = document.getElementById("error");
        error.removeAttribute("hidden");
    }
}


window.onload = function() {

    document.getElementById("title").innerHTML = title;
    document.getElementById("duration").innerHTML = duration;
    document.getElementById("img").src = img;
    audios.forEach(function(video) {
        var node = document.getElementById('dd');
        node.insertAdjacentHTML('afterend', '<p>' + video.format_note + '|| ' + video.extension + '</p> <button type="button" name="button"><a href="' + video.url + '"  download> ' + video.filesize_pretty + '  </a></button>');

    })
    videos.forEach(function(video) {
        var node = document.getElementById('dd');
        node.insertAdjacentHTML('afterend', '<p>' + video.format_note + '|| ' + video.extension + '</p> <button type="button" name="button"><a href="' + video.url + '"  download> ' + video.filesize_pretty + '  </a></button>');

    })






}