var a = (function () {
    var executed = false;
    return function () {
        if (!executed) {
            executed = true;

            alert('1. Ikkita kiritilgan sonni ko’paytmasi va bo’linmasini hisoblovchi dastur tuzing:');
        }
    };
})();
var a2 = (function () {
    var executed = false;
    return function () {
        if (!executed) {
            executed = true;
            alert('2. Kirilgan son simmetrik son ekanligini aniqlovchi dastur tuzing, masalan 45654 -  simmetrik son, 45655 - nosimmetrik son.');

        }
    };
})();
var a3 = (function () {
    var executed = false;
    return function () {
        if (!executed) {
            executed = true;
            alert('3. Kiritilgan 5 ta sondan eng kattasini aniqlovchi dastur tuzing, masalan -4 -5 8 0 -11 uchun 8 eng katta son.');

        }
    };
})();
var a5 = (function () {
    var executed = false;
    return function () {
        if (!executed) {
            executed = true;
            let a = "* ";
            let ss = "";
            for (let index = 0; index < 7; index++) {
                let b = "";
                for (let index2 = 0; index2 < index; index2++) {
                    b += a;

                }
                ss += b + "\n";

            }

            alert('5. Quyidagicha shablonni generatsiya qiluvchi dastur tuzing:\n' + ss);

        }
    };
})();
var a4 = (function () {
    var executed = false;
    return function () {
        if (!executed) {
            executed = true;
            alert('4. Kiritilgan son Armstrong soni ekanligini aniqlovchi dastur tuzing. Masalan 371=3 3 +7 3 +1 3 ya’ni raqamlari kubini yig’indisiga teng son Armstrong soni hisoblanadi.');

        }
    };
})();
var a6 = (function () {
    var executed = false;
    return function () {
        if (!executed) {
            executed = true;
            alert('6. Kiritilgan matn ichidan “A” harfi bilan boshlangan barcha so’zlarni ro’yxatini chiqaruvchi dastur tuzing.');

        }
    };
})();

var a7 = (function () {
var executed = false;
return function () {
        if (!executed) {
            executed = true;
            alert('7. Kiritilgan matn ichidan unikal bo’lmagan (bittadan oshiq ishtirok etgan) so’zlarni ro’yxatini chiqaring.');
         }
    };
})();
var a8 = (function () {
    var executed = false;
    return function () {
            if (!executed) {
                executed = true;
                alert('8. Kiritilgan sekundni soat-minut-sekund ga aylantiruvchi dastur tuzing. Masalan inpput: 451  output: 0(soat)-7(minut)-31(sekund)');
             }
        };
    })();
    var a9 = (function () {
        var executed = false;
        return function () {
                if (!executed) {
                    executed = true;
                    alert('9. Kiritilgan matnda barcha so’zlarni teskari tartibda chiqaruvchi dastur tuzing. Masalan input: “JavaScript yordamida klient brauzerlarda interaktiv dasturlar yaratsak bo’ladi”      output: “bo’ladi yaratsak dasturlar interaktiv brauzerlarda klient yordamida JavaScript”');
                 }
            };
        })();

        var a10 = (function () {
            var executed = false;
            return function () {
                    if (!executed) {
                        executed = true;
                        alert(' 10. Ikkita N va M soni kiritiladi. Qatorlar soni N ga va ustunlar soni M ga teng bo’lgan jadval yaratilsin va tasodifiy sonlar bilan to’ldirilsin.  ');
                     }
                };
            })();

       
       
       
       







