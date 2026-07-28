function toggleStatus(id) {

    var xhr = new XMLHttpRequest();

    xhr.open("POST", "toggle.php", true);

    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onload = function () {

        if (this.status == 200) {

            document.getElementById("status" + id).innerHTML = this.responseText;

        }

    };

    xhr.send("id=" + id);

}