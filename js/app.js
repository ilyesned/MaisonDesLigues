document.addEventListener("DOMContentLoaded", e => {
    console.log(navigator.userAgent);

    let el, modal, closed, open_modal, closed_all, body;

    el = document.querySelectorAll(".grid-picture-large li");
    modal = document.querySelector(".parent-modale");
    closed = document.querySelector(".modale button");
    closed_all = document.querySelector(".modale img");
    body = document.querySelector("body");
    /* property elements */

    open_modal = function () {
        console.log(this.dataset);
        /* les variables */
        let image = this.dataset.image;
        let title = this.dataset.title;
        let desc = this.dataset.description;
        let dates = this.dataset.dates;
        let sportId = this.dataset.id;
        modal.classList.add("modale-active"); /* ajouter la classe active */
        /* sélectionner les sélecteurs html*/
        document.querySelector(".modale img").setAttribute("src", image);
        document.querySelector(".modale .desc h3").innerText = title;
        document.querySelector(".modale .desc p").innerHTML = `<strong>Description : </strong>${desc}`;
        document.querySelector(".modale .desc time").innerText = `${dates}`;
        document.querySelector(".modale .desc time").setAttribute("datetime", dates);
        document.querySelector(".reservation_button").setAttribute("href", `/categorie/${sportId}`);
        body.style = "overflow: hidden";
        let btn = document.querySelector(".reservation_button");
        btn.addEventListener("click", () => {
/*             e.preventDefault();
 */            window.history.pushState(1, "", "./member.php?id_event=" + sportId);
        });
    };
    for (rows of el) {
        rows.addEventListener("click", open_modal);
    }
    closed.addEventListener("click", () => {
        modal.classList.remove("modale-active");
        body.style = "overflow: visible";
    });
    closed_all.addEventListener("click", () => {
        modal.classList.remove("modale-active");
        body.style = "overflow: scroll";
    });



});