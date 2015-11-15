$('#form_create_playlist').on('submit', function(e) {
    e.preventDefault();

    var $this = $(this);

    var name = $('#form_name').val();

    if(name === '') {
        alert('Name have to be valid');
    } else {
        $.ajax({
            url: $this.attr('action'),
            type: $this.attr('method'),
            dataType: 'json',
            data: $this.serialize(),
            success: function(json) {
                if (json.status == "success")
                    {
                        $("#results").html("Playlist created");
                        $("#form_name").val("");
                        loadPlaylists();
                    }
                else
                    {
                        $("#results").html("Playlist failed");
                    }
            }
        });
    }
});

function loadPlaylists()
{
    $.ajax({
        url: "/app_dev.php/usr/playlist/list",
        type: "GET",
        dataType: 'json',
        success: function(json) {
            $("#playlists").empty();
            json.forEach(function(playlist){
                if (current_playlist != playlist.pid)
                    $("#playlists").append("<li>" + playlist.name + " <button onClick=\"selectPlaylist('" + playlist.pid + "')\"><span class=\"glyphicon glyphicon-plus\"></span></button></li>");
                else {
                    $("#playlists").append("<li>" + playlist.name + " <span class=\"glyphicon glyphicon-ok\"></span></li>");
                }
            });
        }
    });
}

function selectPlaylist(pid)
{
    $.ajax({
        url: "/app_dev.php/usr/playlist/select/" + pid,
        type: "GET",
        dataType: 'json',
        success: function(json) {
            if (json.status == "success")
            {
                current_playlist = pid;
                loadPlaylists();
            }
            else
            {
                $("#results").html("Playlist not selected");
            }
        }
    });
}

var current_playlist;

function getCurrentPlaylist()
{
    $.ajax({
        url: "/app_dev.php/usr/playlist",
        type: "GET",
        dataType: 'json',
        async: false,
        success: function(json) {
            current_playlist = json.pid;
        }
    });
}

$(document).ready(function() {
    getCurrentPlaylist();
    loadPlaylists();
});
