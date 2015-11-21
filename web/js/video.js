$(function() {
    $("#video").on("submit", function(e)
    {
        e.preventDefault();
        //prepare request
        var request = gapi.client.youtube.search.list({
            part: "snippet",
            type: "video",
            q: encodeURIComponent($("#search").val()).replace(/%20/g, "+"),
            maxResults: 50,
            order: "viewCount"
        });
        //execute the request
        request.execute(function(response) {
            console.log(response);
            var results = response.result.items;
            $("#results").empty();
            $.each(results, function (index, item){
                $("#results").append("<li><img src=\"" + item.snippet.thumbnails.default.url + "\" /> <a href=\"#\" onClick=\"addVideo('" + item.id.videoId + "');\">" + item.snippet.title  + "</a></li>");
            });
        });
    });
});

function init() {
    gapi.client.setApiKey("YOU_PUBLIC_KEY");
    gapi.client.load("youtube", "v3", function() {
     // yt api is ready
    });
};

function addVideo($id)
{
    $.ajax({
        url: "/app_dev.php/usr/playlist/add",
        type: "POST",
        dataType: 'json',
        data: "id=" + $id,
        success: function(json) {
            if (json.status == "success")
                {
                    $("#results").html("Video added");
                }
            else
                {
                    $("#results").html("video failed");
                }
        }
    });
}
