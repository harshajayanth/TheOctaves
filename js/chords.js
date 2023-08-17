// Define the playAudio function outside of the document.ready function
function playAudio(audioname) {
    let audio = new Audio("audio/" + audioname + "chord.wav");
    audio.play();
}
function view(src,name){
    let output="<img src='"+src+"' class='img-thumbnail'>"
    $("#photobody").html(output)
    $("#modalheader").html("<h2 class='text-success text-center'>"+name+"</h2>");
}

$(document).ready(function () {
    function showData() {
        $("#chordserbody").hide()
        $("#chordsbody").show()
        $.ajax({
            url: "chordtb.php",
            method: "GET",
            dataType: "json",
            success: function (data) {
                let x;
                let i;
                let output = "";
                if (data) {
                    x = data;
                    for (i = 0; i < x.length; i++) {
                        let audioname = x[i].defval;
                        let imgname = "images/" + x[i].defval + "chord.png";
                        let idd = "collapseOne" + i;
                        output += "   <div class=\"accordion\" id=\"accordion" + i + "\">\n" +
                            "        <div class=\"card mt-3 shadow-sm\">\n" +
                            "            <div class=\"card-header hover-overlay border-primary\" id=\"headingOne\">\n" +
                            "                <h2 class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#" + idd + "\" aria-expanded=\"true\" aria-controls=\"#" + idd + "\">\n" +
                            x[i].cname +
                            "                </h2>\n" +
                            "            </div>\n" +
                            "            <div id=\"" + idd + "\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingOne\" data-bs-parent=\"#accordion" + i + "\">\n" +
                            "                <div class=\"card-body\">\n" +
                            "                    <div class=\"container-fluid row\">\n" +
                            "                        <div class=\"col-3\">\n" +
                            "                            <div class=\"card\">\n" +
                            "                                <div class=\"card-header\">\n" +
                            "                                    <img class='img-fluid chordimg' onclick='view(this.src,this.alt)' data-target='#viewphoto' data-toggle='modal' title='View' data-placement='bottom' src=" + imgname + " width=\"400\" height=\"400\"alt='\"" + x[i].cname + "\"'>\n" +
                            "                                </div>\n" +
                            "                                <div class=\"card-footer\">\n" +
                            // Call the playAudio function with the audioname parameter
                            "                                    <button class=\"btn btn-outline-primary col-12 mx-auto\" onclick='playAudio(\"" + audioname + "\")'><span class='material-icons'>music_note</span></button>\n" +
                            "                                </div>\n" +
                            "<div class='text-center'><h3 class='text-danger'>" + x[i].cname + "</h3></div>" +
                            "                            </div>\n" +
                            "                        </div>\n" +
                            "                        <div class=\"col-9\">\n" +
                            "                            <h5 class=\"text-primary\">" + x[i].cdesc + "</h5><br>\n" +
                            "                            <h6>Notes : " + x[i].notes + "</h6>\n" +
                            "                            <h6>Right Hand Positions : " + x[i].rhand + "</h6>\n" +
                            "                            <h6>Left  Hand Positions : " + x[i].lhand + "</h6>\n" +
                            "                            <a href='http://localhost/theoctaves/notes.php'target='_blank' class='text-decoration-none'>Key Notations and Hand Positions are explained here.</a>\n" +
                            "                        </div>\n" +
                            "                    </div>\n" +
                            "                </div>\n" +
                            "            </div>\n" +
                            "        </div>\n" +
                            "    </div>";
                    }
                    $("#chordsbody").html(output);
                } else {
                    output = "No data found";
                    $("#chordserbody").html(output);
                }
            },
        });
    }

    showData();

    $(".dropdown-item").click(function (event) {
        $("#chordsbody").show()
        $("#chordserbody").hide()
        event.preventDefault();
        $("#ser").val("");
        var target = $(this).data("chord");
        $(target).collapse("show");
    });

    function searchData(val) {
        $.ajax({
            url: "chdsearch.php",
            method: "POST",
            dataType: "json",
            data:{serval:val},
            success: function (data) {
                let x;
                let i;
                let output = "";
                if (data) {
                    x = data;
                    for (i = 0; i < x.length; i++) {
                        let audioname = x[i].defval;
                        let imgname = "images/" + x[i].defval + "chord.png";
                        let idd = "collapseOne" + i;
                        output += "   <div class=\"accordion\" id=\"accordion" + i + "\">\n" +
                            "        <div class=\"card mt-3 shadow-sm\">\n" +
                            "            <div class=\"card-header hover-overlay border-primary\" id=\"headingOne\">\n" +
                            "                <h2 class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#" + idd + "\" aria-expanded=\"true\" aria-controls=\"#" + idd + "\">\n" +
                            x[i].cname +
                            "                </h2>\n" +
                            "            </div>\n" +
                            "            <div id=\"" + idd + "\" class=\"accordion-collapse collapse show\" aria-labelledby=\"headingOne\" data-bs-parent=\"#accordion" + i + "\">\n" +
                            "                <div class=\"card-body\">\n" +
                            "                    <div class=\"container-fluid row\">\n" +
                            "                        <div class=\"col-3\">\n" +
                            "                            <div class=\"card\">\n" +
                            "                                <div class=\"card-header\">\n" +
                            "                                    <img class='img-fluid chordimg' onclick='view(this.src,this.alt)' data-target='#viewphoto' data-toggle='modal' title='View' data-placement='bottom' src=" + imgname + " width=\"400\" height=\"400\"alt='\"" + x[i].cname + "\"'>\n" +
                            "                                </div>\n" +
                            "                                <div class=\"card-footer\">\n" +
                            // Call the playAudio function with the audioname parameter
                            "                                    <button class=\"btn btn-outline-primary col-12 mx-auto\" onclick='playAudio(\"" + audioname + "\")'><span class='material-icons'>music_note</span></button>\n" +
                            "                                </div>\n" +
                            "<div class='text-center'><h3 class='text-danger'>" + x[i].cname + "</h3></div>" +
                            "                            </div>\n" +
                            "                        </div>\n" +
                            "                        <div class=\"col-9\">\n" +
                            "                            <h5 class=\"text-success\">" + x[i].cdesc + "</h5><br>\n" +
                            "                            <h6>Notes : " + x[i].notes + "</h6>\n" +
                            "                            <h6>Right Hand Positions : " + x[i].rhand + "</h6>\n" +
                            "                            <h6>Left  Hand Positions : " + x[i].lhand + "</h6>\n" +
                            "                            <a href='http://localhost/theoctaves/notes.php'target='_blank' class='text-decoration-none'>Key Notations and Hand Positions are explained here.</a>\n" +
                            "                        </div>\n" +
                            "                    </div>\n" +
                            "                </div>\n" +
                            "            </div>\n" +
                            "        </div>\n" +
                            "    </div>";
                    }
                    $("#chordserbody").html(output);
                }
                else{
                    output = "<h6 class='text-danger text-center'>No data found.</div>";
                    $("#chordserbody").html(output);
                }
            },
        });
    }

    $("#ser").keyup(function (){
        let val=$(this).val()
        if(val!==""){
            $('#chordsbody').hide();
            $('#chordserbody').show();
            searchData(val)
        }
        else {
            showData()
        }
    })

})
