



import java.util.Scanner;

public class Main extends MENU {


    static boolean tamom = true;

    public static void main(String[] args) {

        System.out.println("Buyruqlar faqat kichik harf bilan kiritilsin.");
        Main main = new Main();
        main.bosh();


    }


    static String javob;

    void bosh() {
        while (tamom) {
            Scanner in = new Scanner(System.in);

            System.out.println("M.MENU\nS.SAVAT\nB.Buyurtma\nD.DASTURNI TUGATISH");


            String tanlov = in.nextLine();


            if (tanlov.equals("m")) {


                elon();


            }
            if (tanlov.equals("d")) {
                System.out.println("dastur tugadi");
                Main.tamom = false;
            }


            if (tanlov.equals("s")) {


                Malumotlar malumotlar = new Malumotlar();
                int a = Pepperoni.qoshimchanarxp + Gavaycha.qoshimchanarxg + Tovuqli.qoshimchanarxt + Margarita.qoshimchanarx;

                if (a > 0) {
                    try {
                        malumotlar.setMalumot();


                    } catch (NullPointerException ignored) {
                    }
                    try {

                        malumotlar.setMalumot2();


                    } catch (NullPointerException ignored) {
                    }
                    try {

                        malumotlar.setMalumot3();

                    } catch (NullPointerException ignored) {
                    }
                    try {

                        malumotlar.setMalumot4();

                    } catch (NullPointerException ignored) {
                    }
                    System.out.println("$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$");
                    System.out.println("umumiy hisob: " + (Pepperoni.qoshimchanarxp + Gavaycha.qoshimchanarxg + Tovuqli.qoshimchanarxt + Margarita.qoshimchanarx) + " so'm");
                    try {


                        if (javob.equals("1")) {
                            System.out.println("b.bosh sahifaga qaytish");
                            Scanner inh = new Scanner(System.in);
                            String eeee = inh.nextLine();
                            if (eeee.equals("b")) {
                                Main main = new Main();
                                main.bosh();
                            }
                        }
                    } catch (NullPointerException ignored) {
                    }
                }


                if (a > 0 && tamom) {

                    System.out.println("buyurtma berasizmi?");
                    System.out.println("1.HA 2.YO'Q");
                    Scanner ins = new Scanner(System.in);
                    javob = ins.nextLine();
                    if (javob.equals("1")) {
                        System.out.println("buyurtma bolimiga kiring.");
                        Main main = new Main();
                        main.bosh();
                    }
                    if (javob.equals("2")) {
                        System.out.println("hohlasang ol. damingni ol");
                        Pepperoni.qoshimchanarxp = 0;
                        Gavaycha.qoshimchanarxg = 0;
                        Tovuqli.qoshimchanarxt = 0;
                        Margarita.qoshimchanarx = 0;

                        Main main = new Main();
                        main.bosh();

                    }
                } else {
                    if (tamom) {
                        System.out.println("menuga kirib  pitsa harid qiling");
                        Main main = new Main();
                        main.bosh();
                    }
                }

            }
            if (Pepperoni.qoshimchanarxp + Gavaycha.qoshimchanarxg + Tovuqli.qoshimchanarxt + Margarita.qoshimchanarx > 0) {
                Buyurtma.b = 1;
            }
            if (tanlov.equals("b") && Buyurtma.b == 0 && Main.tamom) {
                System.out.println("menuga kirib  pitsa harid qiling");
            }

            if (tanlov.equals("b") && Pepperoni.qoshimchanarxp + Gavaycha.qoshimchanarxg + Tovuqli.qoshimchanarxt + Margarita.qoshimchanarx > 0 && Buyurtma.b == 1) {
                Buyurtma Buyurtma = new Buyurtma();
                Buyurtma.buyurtma();

            }


        }


    }

}

class Buyurtma extends Main {
    protected static String ism;
    protected static String telnumber;
    protected static String manzil;
    protected static String tolov;
    protected static String tasdiq;
    protected static int b;


    void buyurtma() {
        Scanner in = new Scanner(System.in);
        System.out.println("ism-familiyangizni kiriting");
        ism = in.nextLine();
        System.out.println("telefon raqamingizni kiriting");
        telnumber = in.nextLine();
        System.out.println("manzilingizni kiriting");
        manzil = in.nextLine();
        System.out.println("to'lov turini tanlang\n1.click\n2.payme\n3.naqd");
        tolov = in.nextLine();
        if (tolov.equals("1")) {
            tolov = "click";
        }
        if (tolov.equals("2")) {
            tolov = "payme";
        }
        if (tolov.equals("3")) {
            tolov = "naqd";
        }
        buyurtma2();
    }

    static void buyurtma2() {
        System.out.println("================================================");

        System.out.println("ism-familiyangiz: " + ism);
        System.out.println("telefon raqmingiz: " + telnumber);
        System.out.println("manzilingiz: " + manzil);
        System.out.println("to'lov turi: " + tolov);
        System.out.println("=================================================");
        System.out.println("xaridingiz rasmiylashtirilsinmi?\n1.HA 2.YO'Q");
        Scanner in = new Scanner(System.in);
        tasdiq = in.nextLine();
        if (tasdiq.equals("1")) {
            b = 1;
            System.out.println("haridingiz uchun rahmat!!!");
            Main.tamom = false;

        } else {
            if (tasdiq.equals("2")) {
                System.out.println("qaytadan pitsa harid qiling");
                b = 0;
                Pepperoni.qoshimchanarxp = 0;
                Gavaycha.qoshimchanarxg = 0;
                Tovuqli.qoshimchanarxt = 0;
                Margarita.qoshimchanarx = 0;
                Main main = new Main();
                main.bosh();
            }
        }
    }


}

class Malumotlar extends Main {
    static String malumot;
    static String malumot2;
    static String malumot3;
    static String malumot4;

    void setMalumot() {

        if (malumot.equals("p")) {
            System.out.println("===================================================================");
            System.out.println();
            System.out.println("pepperoni pitsasining soni: " + (Pepperoni.psoni) + " ta");
            if (Pepperoni.ybt.equals("1")) {
                System.out.println("yetkazib berish turi: oddiy");
            }
            if (Pepperoni.ybt.equals("2")) {
                System.out.println("yetkazib berish turi: tezkor");

            }
            if (Pepperoni.phajmi.equals("n")) {
                System.out.println("pepperoni pitsasining hajmi: normal");
            }
            if (Pepperoni.phajmi.equals("k")) {
                System.out.println("pepperoni pitsasining hajmi: katta");

            }
            System.out.println("pepperoni pitsasining umumiy to'lovi: " + (Pepperoni.qoshimchanarxp) + " ming");
        }
    }

    void setMalumot2() {


        if (malumot2.equals("t")) {
            System.out.println("===================================================================");
            System.out.println();
            System.out.println("tovuqli pitsasining soni: " + (Tovuqli.tsoni) + " ta");
            if (Tovuqli.ybtt.equals("1")) {
                System.out.println("yetkazib berish turi: oddiy");
            }
            if (Tovuqli.ybtt.equals("2")) {
                System.out.println("yetkazib berish turi: tezkor");

            }
            if (Tovuqli.thajmi.equals("n")) {
                System.out.println("tovuqli pitsasining hajmi: normal");
            }
            if (Tovuqli.thajmi.equals("k")) {
                System.out.println("tovuqli pitsasining hajmi: katta");

            }
            System.out.println("tovuqli pitsasining umumiy to'lovi: " + (Tovuqli.qoshimchanarxt) + " ming");
        }
    }

    void setMalumot3() {

        if (malumot3.equals("m")) {
            System.out.println("===================================================================");
            System.out.println();
            System.out.println("Margarita pitsasining soni: " + (Margarita.msoni) + " ta");
            if (Margarita.ybtm.equals("1")) {
                System.out.println("yetkazib berish turi: oddiy");
            }
            if (Margarita.ybtm.equals("2")) {
                System.out.println("yetkazib berish turi: tezkor");

            }
            if (Margarita.mhajmi.equals("n")) {
                System.out.println("Margarita pitsasining hajmi: normal");
            }
            if (Margarita.mhajmi.equals("k")) {
                System.out.println("Margarita pitsasining hajmi: katta");

            }
            System.out.println("Margarita pitsasining umumiy to'lovi: " + (Margarita.qoshimchanarx) + " ming");
        }
    }

    void setMalumot4() {
        if (malumot4.equals("g")) {
            System.out.println("===================================================================");
            System.out.println();
            System.out.println("Gavaycha pitsasining soni: " + (Gavaycha.gsoni) + " ta");
            if (Gavaycha.ybtg.equals("1")) {
                System.out.println("yetkazib berish turi: oddiy");
            }
            if (Gavaycha.ybtg.equals("2")) {
                System.out.println("yetkazib berish turi: tezkor");

            }
            if (Gavaycha.gghajmi.equals("n")) {
                System.out.println("Gavaycha pitsasining hajmi: normal");
            }
            if (Gavaycha.gghajmi.equals("k")) {
                System.out.println("Gavaycha pitsasining hajmi: katta");

            }
            System.out.println("Gavaycha pitsasining umumiy to'lovi: " + (Gavaycha.qoshimchanarxg) + " ming");
        }


    }
}

class MENU {
    protected static String buyruq;

    static void elon() {
        System.out.println("qaysi pitsa turini sotib olmoqchisiz?");
        System.out.println("T.TOVUQLI\nG.GAVAYCHA\nP.PEPPERONI" +
                "\nM.MARGARITA\nB.BOSH SAHIFAGA QAYTISH");


        Scanner ink = new Scanner(System.in);

        buyruq = ink.nextLine();

        if (buyruq.equals("p")) {
            Malumotlar.malumot = "p";

            Pepperoni pepperoni = new Pepperoni();
            pepperoni.hisob();

        }
        if (buyruq.equals("g")) {
            Malumotlar.malumot4 = "g";

            Gavaycha gavaycha = new Gavaycha();
            gavaycha.hisob();

        }

        if (buyruq.equals("t")) {
            Malumotlar.malumot2 = "t";

            Tovuqli tovuqli = new Tovuqli();
            tovuqli.hisob();
        }
        if (buyruq.equals("m")) {
            Malumotlar.malumot3 = "m";

            Margarita margarita = new Margarita();
            margarita.hisob();
        }

        if (buyruq.equals("b")) {
            Main main = new Main();
            main.bosh();

        }

    }


}

/*class SAVAT extends Main {
    // static int a=Pepperoni.qoshimchanarxp+Gavaycha.qoshimchanarxg +Tovuqli.qoshimchanarxt+Margarita.qoshimchanarx;


    Scanner in= new Scanner(System.in);




    void hisob(String name){



        if (name.equals("p")){
            Pepperoni pepperoni=new Pepperoni();
            pepperoni.display();
        }
        if (name.equals("t")) {
            Tovuqli tovuqli = new Tovuqli();
            tovuqli.display();
        }
        if (name.equals("m")) {
            Margarita margarita=new Margarita();
            margarita.display();
        }
        if (name.equals("g")) {
            Gavaycha gavaycha=new Gavaycha();
            gavaycha.display();
        }
        if (name.equals("u")){

            System.out.println("umumiy hisob: "+(Pepperoni.qoshimchanarxp+Gavaycha.qoshimchanarxg +Tovuqli.qoshimchanarxt+Margarita.qoshimchanarx));






            System.out.println("b.Bosh sahifaga qaytish");
            String b=in.nextLine();
            if (b.equals("b")){
                Bosh bosh=new Bosh();
                bosh.bosh();
            }
        }


    }



}
*/

class Gavaycha extends Main {
    protected static int gsoni;
    protected static String ghajmi;
    protected static int gnarx;
    protected static String ybtg;
    protected static String gghajmi;
    int umumiynarxp = (gnarx * gsoni);
    static int qoshimchanarxg;


    /*void display(){

        System.out.println("Gavaycha pitsalarning narxi "+qoshimchanarxg);
        Scanner in=new Scanner(System.in);
        System.out.println("b.bosh sahifaga qaytish\ns.savatdagi boshqa pitsa narxlarini ko'rish\nu.umumiy hisob");
        String b=in.nextLine();
        if (b.equals("b")){
            Bosh bosh=new Bosh();
            bosh.bosh();}
        if (b.equals("s")){
            SAVAT savat=new SAVAT();

            System.out.println("qaysi pitsaning narxini bilmoqchisiz?" +
                    "\nt.tovuqli\nm.margarita\ng.gavaycha\np.pepperoni\nu.umumiy hisob");
            savat.hisob(in.nextLine());
        }

        if (b.equals("u")){

            System.out.println("umumiy hisob: "+(qoshimchanarxg+Tovuqli.qoshimchanarxt+Pepperoni.qoshimchanarxp+Margarita.qoshimchanarx));
            System.out.println("b.Bosh sahifaga qaytish");
            String b2=in.nextLine();
            if (b2.equals("b")){
                Bosh bosh=new Bosh();
                bosh.bosh();
            }
        }

    }
*/
    void hisob() {

        Scanner in = new Scanner(System.in);
        System.out.println("nechta Gavaycha pitsa olmoqchisiz?");

        boolean a = true;

        while (a) {
            Gavaycha.gsoni = in.nextInt();
            if (Gavaycha.gsoni > 6) {
                System.out.println("1-6 gacha bo'lgan raqam kiriting");
            } else {
                a = false;
            }
        }

        System.out.println("hajmini kiriting\nN.normal-10000 so'm\nK.katta-15000 so'm");
        Scanner ink = new Scanner(System.in);
        Gavaycha.ghajmi = ink.nextLine();
        if (Gavaycha.ghajmi.equals("n")) {
            gghajmi = "n";
            Gavaycha.gnarx = 10000;
            Scanner inl = new Scanner(System.in);
            System.out.println("yetkazib berish turini tanlang\n1.oddiy-bebul\n2.tezkor-15000");
            ybtg = inl.nextLine();
            if (ybtg.equals("1")) {
                umumiynarxp = gnarx * gsoni;
                qoshimchanarxg = umumiynarxp;
            }
            if (ybtg.equals("2")) {
                umumiynarxp = gnarx * gsoni + 15000;
                qoshimchanarxg = umumiynarxp;

            }

            System.out.println("Gavaycha pitsalarning narxi " + (qoshimchanarxg));

            MENU.elon();
        }


        if (Gavaycha.ghajmi.equals("k")) {
            gghajmi = "k";
            Gavaycha.gnarx = 15000;
            System.out.println("yetkazib berish turini tanlang\n1.oddiy-bebul\n2.tezkor-15000");
            Scanner ins = new Scanner(System.in);
            ybtg = ins.nextLine();
            if (ybtg.equals("1")) {

                umumiynarxp = gnarx * gsoni;
                qoshimchanarxg = umumiynarxp;
            } else {
                if (ybtg.equals("2")) {

                    umumiynarxp = gnarx * gsoni + 15000;
                    qoshimchanarxg = umumiynarxp;
                }
            }

            System.out.println("Gavaycha pitsalarning narxi " + qoshimchanarxg);

            MENU.elon();
        }


    }

}

class Margarita extends Main {
    protected static int msoni;
    protected static String mhajmi;
    protected static int mnarx;
    protected static String ybtm;
    int umumiynarxp = (mnarx * msoni);
    static int qoshimchanarx;



    /*void display(){

        System.out.println("Margarita pitsalarning narxi "+qoshimchanarx);
        Scanner in=new Scanner(System.in);
        System.out.println("b.bosh sahifaga qaytish\ns.savatdagi boshqa pitsa narxlarini ko'rish\nu.umumiy hisob");
        String b=in.nextLine();
        if (b.equals("b")){
            Bosh bosh=new Bosh();
            bosh.bosh();}
        if (b.equals("s")){
            SAVAT savat=new SAVAT();
            System.out.println("qaysi pitsaning narxini bilmoqchisiz?" +
                    "\nt.tovuqli\nm.margarita\ng.gavaycha\np.pepperoni\nu.umumiy hisob");
            savat.hisob(in.nextLine());
        }

        if (b.equals("u")){

            System.out.println("umumiy hisob: "+(qoshimchanarx+Gavaycha.qoshimchanarxg+Pepperoni.qoshimchanarxp+Tovuqli.qoshimchanarxt));
            System.out.println("b.Bosh sahifaga qaytish");
            String b2=in.nextLine();
            if (b2.equals("b")){
               Bosh bosh=new Bosh();
                bosh.bosh();
            }
        }

    }*/

    void hisob() {

        Scanner in = new Scanner(System.in);
        System.out.println("nechta Margarita pitsa olmoqchisiz?");

        boolean a = true;

        while (a) {
            Margarita.msoni = in.nextInt();
            if (Margarita.msoni > 6) {
                System.out.println("1-6 gacha bo'lgan raqam kiriting");
            } else {
                a = false;
            }
        }

        System.out.println("hajmini kiriting\nN.normal-10000 so'm\nK.katta-15000 so'm");
        Scanner ink = new Scanner(System.in);
        Margarita.mhajmi = ink.nextLine();
        if (Margarita.mhajmi.equals("n")) {
            Margarita.mnarx = 10000;
            Scanner inl = new Scanner(System.in);
            System.out.println("yetkazib berish turini tanlang\n1.oddiy-bebul\n2.tezkor-15000");
            ybtm = inl.nextLine();
            if (ybtm.equals("1")) {
                umumiynarxp = mnarx * msoni;
                qoshimchanarx = umumiynarxp;
            }
            if (ybtm.equals("2")) {
                umumiynarxp = mnarx * msoni + 15000;
                qoshimchanarx = umumiynarxp;

            }

            System.out.println("Margarita pitsalarning narxi " + (qoshimchanarx));


            MENU.elon();
        }


        if (Margarita.mhajmi.equals("k")) {
            Margarita.mnarx = 15000;
            System.out.println("yetkazib berish turini tanlang\n1.oddiy-bebul\n2.tezkor-15000");
            Scanner ins = new Scanner(System.in);
            ybtm = ins.nextLine();
            if (ybtm.equals("1")) {
                umumiynarxp = mnarx * msoni;
                qoshimchanarx = umumiynarxp;
            } else {
                if (ybtm.equals("2")) {
                    umumiynarxp = mnarx * msoni + 15000;
                    qoshimchanarx = umumiynarxp;
                }
            }

            System.out.println("Margarita pitsalarning narxi " + qoshimchanarx);

            MENU.elon();
        }


    }

}

class Pepperoni extends Main {
    protected static int psoni;
    protected static String phajmi;
    protected static int pnarx;
    protected static String ybt;
    int umumiynarxp = (pnarx * psoni);
    static int qoshimchanarxp;

    static String psoni2;


    /* void display() {

         System.out.println("pepperoni pitsalarning narxi " + qoshimchanarxp);
         Scanner in = new Scanner(System.in);
         System.out.println("b.bosh sahifaga qaytish\ns.savatdagi boshqa pitsa narxlarini ko'rish\nu.umumiy hisob");
         String b = in.nextLine();
         if (b.equals("b")) {
            Bosh bosh = new Bosh();
             bosh.bosh();
         }
         if (b.equals("s")) {
             SAVAT savat = new SAVAT();
             System.out.println("qaysi pitsaning narxini bilmoqchisiz?" +
                     "\nt.tovuqli\nm.margarita\ng.gavaycha\np.pepperoni\nu.umumiy hisob");
             savat.hisob(in.nextLine());
         }

         if (b.equals("u")) {

             System.out.println("umumiy hisob: " + (qoshimchanarxp + Gavaycha.qoshimchanarxg + Tovuqli.qoshimchanarxt + Margarita.qoshimchanarx));
             System.out.println("b.Bosh sahifaga qaytish");
             String b2 = in.nextLine();
             if (b2.equals("b")) {
                 Bosh bosh = new Bosh();
                 bosh.bosh();
             }
         }

     }
 */
    void hisob() {


        Scanner in = new Scanner(System.in);
        System.out.println("nechta pepperoni pitsa olmoqchisiz?");

        boolean a = true;
        while (a) {
            try {
                psoni2 = in.nextLine();

                psoni = Integer.parseInt(psoni2);
            } catch (NumberFormatException e) {
                System.out.println("buyruq xato kiritildi. qaytadan kiriting");
            }
            if ((psoni) > 6) {
                System.out.println("1-6 gacha bo'lgan raqam kiriting");
            } else {
                if (psoni > 0) {
                    a = false;
                }
            }

        }

        System.out.println("hajmini kiriting\nN.normal-10000 so'm\nK.katta-15000 so'm");
        Scanner ink = new Scanner(System.in);
        Pepperoni.phajmi = ink.nextLine();
        if (Pepperoni.phajmi.equals("n")) {
            Pepperoni.pnarx = 10000;
            Scanner inl = new Scanner(System.in);
            System.out.println("yetkazib berish turini tanlang\n1.oddiy-bebul\n2.tezkor-15000");
            ybt = inl.nextLine();
            if (ybt.equals("1")) {
                umumiynarxp = pnarx * psoni;
                qoshimchanarxp = umumiynarxp;
            }
            if (ybt.equals("2")) {
                umumiynarxp = pnarx * psoni + 15000;
                qoshimchanarxp = umumiynarxp;

            }
            System.out.println("pepperoni pitsalarning narxi " + qoshimchanarxp);

            MENU.elon();
        }


        if (Pepperoni.phajmi.equals("k")) {
            Pepperoni.pnarx = 15000;
            System.out.println("yetkazib berish turini tanlang\n1.oddiy-bebul\n2.tezkor-15000");
            Scanner ins = new Scanner(System.in);
            ybt = ins.nextLine();
            if (ybt.equals("1")) {
                umumiynarxp = pnarx * psoni;
                qoshimchanarxp = umumiynarxp;
            } else {
                if (ybt.equals("2")) {
                    umumiynarxp = pnarx * psoni + 15000;
                    qoshimchanarxp = umumiynarxp;
                }
            }

            System.out.println("pepperoni pitsalarning narxi " + qoshimchanarxp);


            MENU.elon();
        }


    }


}

class Tovuqli extends Main {
    protected static int tsoni;
    protected static String thajmi;
    protected static int tnarx;
    protected static String ybtt;
    int umumiynarxp = (tnarx * tsoni);
    static int qoshimchanarxt;



    /*void display(){

        System.out.println("tovuqli pitsalarning narxi "+qoshimchanarxt);
        Scanner in=new Scanner(System.in);
        System.out.println("b.bosh sahifaga qaytish\ns.savatdagi boshqa pitsa narxlarini ko'rish\nu.umumiy hisob");
        String b=in.nextLine();
        if (b.equals("b")){
            Bosh bosh=new Bosh();
            bosh.bosh();}
        if (b.equals("s")){
            SAVAT savat=new SAVAT();
            System.out.println("qaysi pitsaning narxini bilmoqchisiz?" +
                    "\nt.tovuqli\nm.margarita\ng.gavaycha\np.pepperoni\nu.umumiy hisob");
            savat.hisob(in.nextLine());
        }

        if (b.equals("u")){

            System.out.println("umumiy hisob: "+(qoshimchanarxt+Gavaycha.qoshimchanarxg+Pepperoni.qoshimchanarxp+Margarita.qoshimchanarx));
            System.out.println("b.Bosh sahifaga qaytish");
            String b2=in.nextLine();
            if (b2.equals("b")){
               Bosh bosh=new Bosh();
                bosh.bosh();
            }
        }

    }*/

    void hisob() {

        Scanner in = new Scanner(System.in);
        System.out.println("nechta tovuqli pitsa olmoqchisiz?");

        boolean a = true;

        while (a) {
            Tovuqli.tsoni = in.nextInt();
            if (Tovuqli.tsoni > 6) {
                System.out.println("1-6 gacha bo'lgan raqam kiriting");
            } else {
                a = false;
            }
        }

        System.out.println("hajmini kiriting\nN.normal-10000 so'm\nK.katta-15000 so'm");
        Scanner ink = new Scanner(System.in);
        Tovuqli.thajmi = ink.nextLine();
        if (Tovuqli.thajmi.equals("n")) {
            Tovuqli.tnarx = 10000;
            Scanner inl = new Scanner(System.in);
            System.out.println("yetkazib berish turini tanlang\n1.oddiy-bebul\n2.tezkor-15000");
            ybtt = inl.nextLine();
            if (ybtt.equals("1")) {
                umumiynarxp = tnarx * tsoni;
                qoshimchanarxt = umumiynarxp;
            }
            if (ybtt.equals("2")) {
                umumiynarxp = tnarx * tsoni + 15000;
                qoshimchanarxt = umumiynarxp;

            }

            System.out.println("tovuqli pitsalarning narxi " + (qoshimchanarxt));

            MENU.elon();
        }


        if (Tovuqli.thajmi.equals("k")) {
            Tovuqli.tnarx = 15000;
            System.out.println("yetkazib berish turini tanlang\n1.oddiy-bebul\n2.tezkor-15000");
            Scanner ins = new Scanner(System.in);
            ybtt = ins.nextLine();
            if (ybtt.equals("1")) {
                umumiynarxp = tnarx * tsoni;
                qoshimchanarxt = umumiynarxp;
            } else {
                if (ybtt.equals("2")) {
                    umumiynarxp = tnarx * tsoni + 15000;
                    qoshimchanarxt = umumiynarxp;
                }
            }

            System.out.println("tovuqli pitsalarning narxi " + qoshimchanarxt);

            MENU.elon();
        }


    }

}

