





function kopay() {
    let ka1 = document.getElementById('kirit1').value;
    let ka2 = document.getElementById('kirit2').value;

    if (ka1.length == 0 || ka2.length == 0) {
        alert('Qiymatlar to\'liq kiritilmadi');
    } else {
        alert(ka1 * ka2);
    }
}
function bolin() {
    let ka1 = document.getElementById('kirit1').value;
    let ka2 = document.getElementById('kirit2').value;

    if (ka1.length == 0 || ka2.length == 0) {
        alert('Qiymatlar to\'liq kiritilmadi');
    } else {
        alert(ka1 / ka2);
    }
}










function f2() {
    let qiymat = document.getElementById('kv').value;
    if (qiymat.length == 0) {
        alert('raqam  kiriting');
    } else {
        let yarim = 0;

        let raqam = qiymat.toString();
        for (let i = 0; i < raqam.length / 2; i++) {
            if (raqam.charAt(i) == raqam.charAt(raqam.length - i - 1)) {
                yarim++;
            }
        }


        if (yarim == raqam.length / 2 &&
            raqam.charAt(0) == raqam.charAt(raqam.length - 1)) {
            alert("simmetrik raqam");

        } else alert("simmetrik raqam emas");


    }
}

function f3() {
    let a = document.getElementById('soat').value;
    let dd = a.split(",");
    let m2 = [];
    let v = dd.forEach(function (key) {
        let b = parseInt(key);
        m2.push(b);
    })
    m2.sort(function (a, b) {
        return a - b;
    })
    alert(m2[m2.length - 1]);


}

function misol4() {

    num = document.getElementById("ping").value;
    var Number = num;
    var digits = 0;
    while (num > 0) {
        digits = digits + 1;
        num = parseInt(num / 10);
    }
    num = Number;
    var sum = 0;
    while (num > 0) {
        var digit = num % 10;
        sum = sum + Math.pow(digit, digits);
        num = parseInt(num / 10);
    }
    if (sum == Number) {
        alert("bu raqam armstrong");
    } else {
        alert("bu raqam armstrong emas");
    }
}


function f5() {

    $(document).ready(function () {
        let oy = parseInt(document.getElementById('oy').value);
        let a = "* ";
        let ss = "";
        for (let index = 0; index < oy + 1; index++) {
            let b = "";
            for (let index2 = 0; index2 < index; index2++) {
                b += a;

            }
            ss += b + "<br>"

            $('#yulduz').html(ss);
        }
        $('#yulduz').slideToggle(1500);

    })
}

function f6() {
    let str = document.getElementById('raqam6').value;
    let massiv = str.split(" ");
    m2 = [];
    for (const key of massiv) {

        if (key[0] == "A" || key[0] == "a") {
            m2.push((key + "\n"));
        }
    }
    m3 = m2.toString().replace(/,/g, "");
    alert(m3 + "\n");
}

function f7() {
    let raqam2 = document.getElementById('raqam7').value;
    let massiv = raqam2.split(" ");
    const findDuplicates = (arr) => {
        let sorted_arr = arr.slice().sort();
        let results = [];
        for (let i = 0; i < sorted_arr.length - 1; i++) {
            if (sorted_arr[i + 1] == sorted_arr[i]) {
                results.push(sorted_arr[i]);
            }
        }
        return results;
    }

    alert(` ${findDuplicates(massiv)}`);


}
function f8() {
    let son1 = parseInt(document.getElementById('son1').value);
    let sekund = son1 % 60;
    let minut = (son1 - sekund) / 60;
    let qoldiq;
    if (minut > 60) {

        qoldiq = minut % 60;
    }
    let soat = Math.round(Math.floor((minut / 60)));
    if (soat > 0) {

        minut = (qoldiq);
    }
    alert(soat + "(soat)" + minut + "(minut)" + sekund + "(sekund)");

}

function f9() {
    let x = document.getElementById('k3').value;
    let massiv = x.split(" ");
    let a = massiv.reverse().toString().replace(/,/g, " ");

    alert(a);

}


function f10() {
    $(document).ready(function () {

        let num2 = ($('#ww3').val());
        let n3 = ($('#ww4').val());
        let n;

        if (!Number.isNaN(n3) && !Number.isNaN(num2)) {
            $("div.container").append("<table>");
            $("table").addClass("table table-bordered p-2 mt-5 mb-5");
            for (var i = 0; i < num2; i++) {
                $("table").append("<tr>");
                $("tr").addClass('bg-info');

                for (var j = 0; j < n3; j++) {
                    $("tr").eq(i).append("<td></td>");


                }
                for(let i=0; i<n3*num2;i++){
                    n=Math.round(Math.random()*100);

                    $('td').eq(i).html(n);
                }

                $("table").append("</tr>");


            }
            $("div.container").append("</table>");

        }

    });

};























(function () {
    'use strict';
    window.addEventListener('load', function () {
        // Get the forms we want to add validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();