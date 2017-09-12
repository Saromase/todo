$(document).ready(function () {
    function addBox() {
        var data = "<div class='box'>";
        data += "<h1>Box n° ..</h1>";
        data += "<img src='img/maxres.jpg' alt='planete mauve'>";
        data += "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam nibh mi, placerat vel vulputate ac, malesuada a ligula. Quisque orci aliquam.</p>";
        data += "</div>";
        return data;
    }
    $("#start").click(function () {
        var data = addBox();
        $(data).appendTo("#container");
    });

});
