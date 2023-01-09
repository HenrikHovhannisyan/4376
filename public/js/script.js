/* Start Company */
$(document).ready(async function() {
    let dials = $(".dial");

    for (let i = 0; i < dials.length; i++) {
        let width =
            typeof $(dials[i]).attr("data-width") != "undefined"
                ? Math.round($(dials[i]).attr("data-width"))
                : 80;
        let procent =
            Number($(dials[i]).html()) > 0 && Number($(dials[i]).html()) < 100
                ? Math.round(Number($(dials[i]).html()) * 10) / 10
                : 0;
        let lineWidth =
            typeof $(dials[i]).attr("data-lineWidth") != "undefined"
                ? Number($(dials[i]).attr("data-lineWidth"))
                : width / 10;
        let size = width + lineWidth;
        let lineRound =
            typeof $(dials[i]).attr("data-lineRound") != "undefined" ? true : false;
        let color = $(dials[i]).css("color");
        let borderColor = $(dials[i]).css("border-color");
        let curPerc = 0;
        var circ = Math.PI * 2;
        var quart = Math.PI / 2;

        $(dials[i]).css({ width: size + "px", height: size + "px" });

        $(dials[i]).html(
            '<canvas id="dial' +
            i +
            '" width="' +
            size +
            '" height="' +
            size +
            '"></canvas><p>' +
            procent +
            "%</p>"
        );

        $("p", dials[i]).css({ "line-height": size + "px" });
        let canvas = document.getElementById("dial" + i);
        let context = canvas.getContext("2d");

        context.lineWidth = lineWidth;

        function animate(current) {
            context.clearRect(0, 0, canvas.width, canvas.height);
            context.beginPath();
            context.arc(
                width / 2 + lineWidth / 2,
                width / 2 + lineWidth / 2,
                width / 2,
                -quart,
                circ * current - quart,
                false
            );
            context.strokeStyle = color;
            if (lineRound == true && lineWidth < width) context.lineCap = "round";
            context.stroke();
            curPerc++;
            if (curPerc < procent) {
                requestAnimationFrame(function() {
                    animate(curPerc / 100);
                });
            }
        }
        animate();
    }
});

/* End Company */

/* Start Who We Are */
function loading() {
    document.querySelectorAll(".bar").forEach(function(current) {
        let startWidth = 0;
        const endWidth = current.dataset.size;

        /*
        setInterval() time sholud be set as trasition time / 100.
        In our case, 2 seconds / 100 = 20 milliseconds.
        */
        const interval = setInterval(frame, 20);

        function frame() {
            if (startWidth >= endWidth) {
                clearInterval(interval);
            } else {
                startWidth++;
                current.style.width = `${endWidth}%`;
                current.firstElementChild.innerText = `${startWidth}%`;
            }
        }
    });
}

setTimeout(loading, 1000);

/* End Who We Are */

/* Start Phases index.blade.php */
$(document).ready(function () {
    $('#phases_table_totals').DataTable({
        paging: false,
        info: false,
        searching: false,
        ordering: false,
    });
    $('#phases_table').DataTable({
        paging: false,
        info: false,
        searching: false,
    });
});
/* End Phases index.blade.php */

/* Start Task index.blade.php */
$(document).ready(function () {
    $('#tasks_table_totals').DataTable({
        paging: false,
        info: false,
        searching: false,
        ordering: false,
    });
    $('#tasks_table').DataTable({
        paging: false,
        info: false,
        searching: false,
    });
});
/* End Task index.blade.php */

/* Start Resource Plan index.blade.php */
$(document).ready(function () {
    $('#resource-plan_table').DataTable({
        paging: false,
        info: false,
        searching: false,
        ordering: false,
    });
});
/* End Resource Plan index.blade.php */

/* Start Resource Plan index.blade.php */
function person_details() {
    let element = document.querySelectorAll(".person_details");
    element.forEach(el => el.classList.toggle('d-none'));

    let eye_pd = document.getElementById('eye_pd');
    eye_pd.classList.toggle('fa-eye');
    eye_pd.classList.toggle('fa-eye-slash');
}
function financials() {
    let element = document.querySelectorAll(".financials");
    element.forEach(el => el.classList.toggle('d-none'));

    let eye_f = document.getElementById('eye_f');
    eye_f.classList.toggle('fa-eye');
    eye_f.classList.toggle('fa-eye-slash');
}
function hours_per_week() {
    let element = document.querySelectorAll(".hours_per_week");
    element.forEach(el => el.classList.toggle('d-none'));

    let eye_f = document.getElementById('eye_hw');
    eye_f.classList.toggle('fa-eye');
    eye_f.classList.toggle('fa-eye-slash');
}
function revenue() {
    let element = document.querySelectorAll(".revenue");
    element.forEach(el => el.classList.toggle('d-none'));

    let eye_f = document.getElementById('eye_r');
    eye_f.classList.toggle('fa-eye');
    eye_f.classList.toggle('fa-eye-slash');
}
function standard_cost() {
    let element = document.querySelectorAll(".standard_cost");
    element.forEach(el => el.classList.toggle('d-none'));

    let eye_f = document.getElementById('eye_sc');
    eye_f.classList.toggle('fa-eye');
    eye_f.classList.toggle('fa-eye-slash');
}
function actual_hours() {
    let element = document.querySelectorAll(".actual_hours_cost");
    element.forEach(el => el.classList.toggle('d-none'));

    let eye_f = document.getElementById('eye_ah');
    eye_f.classList.toggle('fa-eye');
    eye_f.classList.toggle('fa-eye-slash');
}
/* End Resource Plan index.blade.php */
